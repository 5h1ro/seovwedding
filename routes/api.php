<?php

use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Member\DashboardController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('admin/member/get_data', [MemberController::class, 'getData'])->name('admin.member.get');
Route::get('member/member/get_data/{id}', [DashboardController::class, 'getData'])->name('member.member.get');
