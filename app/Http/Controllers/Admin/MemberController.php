<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Invitation;
use App\Models\LoveStory;
use App\Models\Member;
use App\Models\Photo;
use App\Models\Schedule;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Str;

class MemberController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $member = Member::all();
        return view('admin.member.index', compact('user', 'member'));
    }

    public function getData(Request $request)
    {
        if ($request->ajax()) {
            $data = Member::all();
            foreach ($data as $value) {
                $invitation = Invitation::where('id_member', $value->id)->first();
                if (isset($invitation)) {
                    $value->invitation;
                    $value->invitation->link = url('/' . $value->invitation->id . '/' . $value->invitation->slug . '/to=');
                } else {
                    $value->invitation = null;
                }
                $value->responsive_id = "";
            }
            return DataTables::of($data)
                ->make(true);
        } else {
            $data = Member::all();
            foreach ($data as $value) {
                $invitation = Invitation::where('id_member', $value->id)->first();
                if (isset($invitation)) {
                    $value->invitation;
                } else {
                    $value->invitation = null;
                }
                $value->responsive_id = "";
            }
            return DataTables::of($data)
                ->make(true);
        }
    }

    public function store(Invitation $invitation, Request $request, Member $member)
    {
        $now = Carbon::now()->format('dmYHis');

        $invitation->nickname_man = $request->nickname_man;
        $invitation->fullname_man = $request->fullname_man;
        $invitation->father_man = $request->father_man;
        $invitation->mother_man = $request->mother_man;
        $invitation->child_man = $request->child_man;
        if ($request->hasFile('photo_man')) {
            $filename_photo_man = 'man_' . $now . '.jpg';
            $file_photo_man = $request->file('photo_man');
            $file_photo_man->move(public_path('img/man'), $filename_photo_man);
            $invitation->photo_man = asset('img/man/' . $filename_photo_man);
        }
        $invitation->nickname_woman = $request->nickname_woman;
        $invitation->fullname_woman = $request->fullname_woman;
        $invitation->father_woman = $request->father_woman;
        $invitation->mother_woman = $request->mother_woman;
        $invitation->child_woman = $request->child_woman;
        if ($request->hasFile('photo_woman')) {
            $filename_photo_woman = 'woman_' . $now . '.jpg';
            $file_photo_woman = $request->file('photo_woman');
            $file_photo_woman->move(public_path('img/woman'), $filename_photo_woman);
            $invitation->photo_woman = asset('img/woman/' . $filename_photo_woman);
        }
        if ($request->hasFile('photo_couple')) {
            $filename_photo_couple = 'couple_' . $now . '.jpg';
            $file_photo_couple = $request->file('photo_couple');
            $file_photo_couple->move(public_path('img/couple'), $filename_photo_couple);
            $invitation->photo_couple = asset('img/couple/' . $filename_photo_couple);
        }
        $invitation->countdown = $request->countdown;
        $invitation->bank = $request->bank;
        $invitation->number_bank = $request->number_bank;
        $invitation->name_bank = $request->name_bank;
        $invitation->name_gift = $request->name_gift;
        $invitation->number = $request->number;
        $invitation->address_gift = $request->address_gift;
        $invitation->slug = Str::slug($request->nickname_man . ' ' . $request->nickname_woman);
        $invitation->id_member = $member->id;
        $invitation->name_couple = $request->nickname_man . ' & ' . $request->nickname_woman;
        $invitation->save();

        if (isset($request->name_schedule)) {
            foreach ($request->name_schedule as $key => $value) {
                $schedule = new Schedule;
                $schedule->name_schedule = $request->name_schedule[$key];
                $schedule->date_schedule = $request->date_schedule[$key];
                $schedule->address_schedule = $request->address_schedule[$key];
                $schedule->id_invitation = $invitation->id;
                if ($request->location_schedule[$key] != null) {
                    $schedule->location_schedule = $request->location_schedule[$key];
                }
                if ($request->link_location_schedule[$key] != null) {
                    $schedule->link_location_schedule = $request->link_location_schedule[$key];
                }
                $schedule->save();
            }
        }

        if (isset($request->year_ls)) {
            foreach ($request->year_ls as $key => $value) {
                $ls = new LoveStory;
                $ls->year_ls = $request->year_ls[$key];
                $ls->story_ls = $request->story_ls[$key];
                $ls->id_invitation = $invitation->id;
                $ls->save();
            }
        }

        if ($request->hasFile('file_photo')) {
            foreach ($request->name_photo as $key => $value) {
                if ($request->name_photo[$key] != null) {
                    $photo = new Photo;
                    $photo->file_photo = $request->name_photo[$key];
                    $photo->id_invitation = $invitation->id;
                    $photo->save();
                }
            }
            $file_photo = $request->file('file_photo');
            foreach ($file_photo as $key => $value) {
                $filename_photo = 'photo_' . $key . $now . '.jpg';
                $value->move(public_path('img/photo'), $filename_photo);

                $photo = new Photo;
                $photo->file_photo = asset('img/photo/' . $filename_photo);
                $photo->id_invitation = $invitation->id;
                $photo->save();
            }
        }
        return redirect()->back();
    }

    public function edit(Member $member)
    {
        $user = Auth::user();
        return view('admin/member/edit', compact('user', 'member'));
    }

    public function update(Member $member, Request $request)
    {
        $now = Carbon::now()->format('dmYHis');

        $invitation = Invitation::where('id_member', $member->id)->first();
        $invitation->nickname_man = $request->nickname_man;
        $invitation->fullname_man = $request->fullname_man;
        $invitation->father_man = $request->father_man;
        $invitation->mother_man = $request->mother_man;
        $invitation->child_man = $request->child_man;

        if ($request->hasFile('photo_man')) {
            $filename_photo_man = 'man_' . $now . '.jpg';
            $file_photo_man = $request->file('photo_man');
            $file_photo_man->move(public_path('img/man'), $filename_photo_man);
            $invitation->photo_man = asset('img/man/' . $filename_photo_man);
        }

        $invitation->nickname_woman = $request->nickname_woman;
        $invitation->fullname_woman = $request->fullname_woman;
        $invitation->father_woman = $request->father_woman;
        $invitation->mother_woman = $request->mother_woman;
        $invitation->child_woman = $request->child_woman;

        if ($request->hasFile('photo_woman')) {
            $filename_photo_woman = 'woman_' . $now . '.jpg';
            $file_photo_woman = $request->file('photo_woman');
            $file_photo_woman->move(public_path('img/woman'), $filename_photo_woman);
            $invitation->photo_woman = asset('img/woman/' . $filename_photo_woman);
        }

        if ($request->hasFile('photo_couple')) {
            $filename_photo_couple = 'couple_' . $now . '.jpg';
            $file_photo_couple = $request->file('photo_couple');
            $file_photo_couple->move(public_path('img/couple'), $filename_photo_couple);
            $invitation->photo_couple = asset('img/couple/' . $filename_photo_couple);
        }

        $invitation->countdown = $request->countdown;
        $invitation->bank = $request->bank;
        $invitation->number_bank = $request->number_bank;
        $invitation->name_bank = $request->name_bank;
        $invitation->name_gift = $request->name_gift;
        $invitation->number = $request->number;
        $invitation->address_gift = $request->address_gift;
        $invitation->slug = Str::slug($request->nickname_man . ' ' . $request->nickname_woman);

        $schedule_all = $invitation->schedule;
        foreach ($schedule_all as $key => $value) {
            $value->delete();
        }
        if (isset($request->name_schedule)) {
            foreach ($request->name_schedule as $key => $value) {
                $schedule = new Schedule();
                $schedule->name_schedule = $request->name_schedule[$key];
                $schedule->date_schedule = $request->date_schedule[$key];
                $schedule->address_schedule = $request->address_schedule[$key];
                $schedule->id_invitation = $invitation->id;
                if ($request->location_schedule[$key] != null) {
                    $schedule->location_schedule = $request->location_schedule[$key];
                }
                if ($request->link_location_schedule[$key] != null) {
                    $schedule->link_location_schedule = $request->link_location_schedule[$key];
                }
                $schedule->save();
            }
        }


        $ls_all = $invitation->ls;
        foreach ($ls_all as $key => $value) {
            $value->delete();
        }
        if (isset($request->year_ls)) {
            foreach ($request->year_ls as $key => $value) {
                $ls = new LoveStory();
                $ls->year_ls = $request->year_ls[$key];
                $ls->story_ls = $request->story_ls[$key];
                $ls->id_invitation = $invitation->id;
                $ls->save();
            }
        }

        $photo_all = $invitation->photo;
        foreach ($photo_all as $key => $value) {
            $value->delete();
        }

        if ($request->hasFile('file_photo')) {
            foreach ($request->name_photo as $key => $value) {
                if ($request->name_photo[$key] != null) {
                    $photo = new Photo();
                    $photo->file_photo = $request->name_photo[$key];
                    $photo->id_invitation = $invitation->id;
                    $photo->save();
                }
            }
            $file_photo = $request->file('file_photo');
            foreach ($file_photo as $key => $value) {
                $filename_photo = 'photo_' . $key . $now . '.jpg';
                $value->move(public_path('img/photo'), $filename_photo);

                $photo = new Photo;
                $photo->file_photo = asset('img/photo/' . $filename_photo);
                $photo->id_invitation = $invitation->id;
                $photo->save();
            }
        } else {
            if (isset($request->name_photo)) {
                foreach ($request->name_photo as $key => $value) {
                    $photo = new Photo;
                    $photo->file_photo = $request->name_photo[$key];
                    $photo->id_invitation = $invitation->id;
                    $photo->save();
                }
            }
        }

        $invitation->save();

        return redirect()->back();
    }

    public function delete(Member $id)
    {
        $id->delete();
        return redirect()->back();
    }
}
