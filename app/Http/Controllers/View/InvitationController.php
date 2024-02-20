<?php

namespace App\Http\Controllers\View;

use App\Http\Controllers\Controller;
use App\Models\Greeting;
use App\Models\Invitation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Riskihajar\Terbilang\Facades\Terbilang;

class InvitationController extends Controller
{
    public function index($id, $slug, $to)
    {
        $invitation = Invitation::where([['id', $id], ['slug', $slug]])->first();
        $invitation->child_man = $invitation->child_man == 1 ? 'Pertama' : 'Ke' . Terbilang::make($invitation->child_man);
        $invitation->child_woman = $invitation->child_woman == 1 ? 'Pertama' : 'Ke' . Terbilang::make($invitation->child_woman);
        $invitation->countDownDate = Carbon::createFromFormat('Y-m-d H:i:s', $invitation->countdown)->format('M d, Y H:i:s');
        foreach ($invitation->schedule as $schedule) {
            $schedule->date = Carbon::createFromFormat('Y-m-d H:i:s', $schedule->date_schedule)->isoFormat('dddd, DD MMMM Y');
            $schedule->time = Carbon::createFromFormat('Y-m-d H:i:s', $schedule->date_schedule)->format('H:i');
        }
        if (is_null($invitation)) {
            return response(view('errors.500'));
        } else {
            $visitor = Invitation::where([['id', $id], ['slug', $slug]])->first();
            $visitor->visitor = $visitor->visitor + 1;
            $visitor->save();
            return view('invitation.index', compact('to', 'invitation'));
        }
    }

    public function create(Invitation $invitation, Request $request)
    {
        $greeting = new Greeting;
        $greeting->guest = $request->guest;
        $greeting->greeting = $request->greeting;
        $greeting->attendance = $request->attendance;
        $greeting->id_invitation = $invitation->id;
        $greeting->save();
        return redirect()->back();
    }
}
