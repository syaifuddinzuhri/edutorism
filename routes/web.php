<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\LandingPageController;
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

Route::get('/', [LandingPageController::class, 'index'])->name('home');
Route::get('/layanan/{slug}', [LandingPageController::class, 'detailLayanan'])->name('detailLayanan');

Route::prefix('admin')->group(function () {
    Route::group(['middleware' => 'guest'], function () {
        Route::get('auth/login', [AuthController::class, 'showLogin'])->name('showLogin');
        Route::post('auth/login', [AuthController::class, 'login'])->name('login');
    });

    Route::middleware(['auth'])->group(function () {
        Route::get('auth/logout', [AuthController::class, 'logout'])->name('logout');
        Route::get('/', function () {
            return redirect()->route('dashboard.index');
        });
        Route::resource('dashboard', DashboardController::class);
    });
});
