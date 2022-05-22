<?php

use App\Http\Controllers\Admin\DashboardController as ADashboardController;
use App\Http\Controllers\Admin\MemberController as AMemberController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Member\DashboardController as MDashboardController;
use App\Http\Controllers\View\InvitationController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('landing');
})->name('welcome');

Route::get('/end', function () {
    Auth::guard('web')->logout();
    return redirect('/');
})->name('end');

Route::controller(InvitationController::class)->group(function () {
    Route::get('/{id}/{slug}/to={to}', 'index')->name('show');
    Route::post('/greeting/{invitation}', 'create')->name('greeting.create');
});

Auth::routes();
Route::middleware(['auth'])->group(function () {
    Route::controller(VerificationController::class)->group(function () {
        Route::get('/email/verify', 'show')->name('verification.notice');
        Route::get('/email/verify/{id}/{hash}', 'verify')->name('verification.verify')->middleware(['signed']);
        Route::post('/email/resend', 'resend')->name('verification.resend');
    });

    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::middleware(['admin'])->group(function () {
        Route::prefix('admin')->group(function () {
            Route::get('/dashboard', [ADashboardController::class, 'index'])->name('admin');

            Route::prefix('member')->group(function () {
                Route::controller(AMemberController::class)->group(function () {
                    Route::get('/index', 'index')->name('admin.member.index');
                    Route::get('/edit/{member}', 'edit')->name('admin.member.edit');
                    Route::post('/store/{member}', 'store')->name('admin.member.store');
                    Route::post('/update/{member}', 'update')->name('admin.member.update');
                    Route::get('/delete/{id}', 'delete')->name('admin.member.delete');
                });
            });
        });
    });
    Route::middleware(['verified'])->group(function () {
        Route::middleware(['member'])->group(function () {
            Route::prefix('member')->group(function () {
                Route::controller(MDashboardController::class)->group(function () {
                    Route::get('/dashboard', 'index')->name('member');
                    Route::prefix('invitation')->group(function () {
                        Route::post('/store', 'store')->name('invitation.store');
                        Route::post('/update/{id}', 'update')->name('invitation.update');
                        Route::get('/delete/{id}', 'delete')->name('invitation.delete');
                    });
                    Route::post('/change-password', 'change')->name('member.change');
                });
            });
        });
    });
});
