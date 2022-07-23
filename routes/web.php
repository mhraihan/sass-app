<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Account\AccountController;
use App\Http\Controllers\Account\ProfileController;
use App\Http\Controllers\Account\PasswordController;

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

/* Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard'); */

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
/**
 * Account
 */
Route::group(['prefix' => 'account', 'middleware' => 'auth', 'as' => 'account.'], function () {
    route::get("/", [AccountController::class, 'index'])->name('index');
    /**
     * Profile
     */
    route::get("/profile", [ProfileController::class, 'index'])->name('profile.index');
    route::post("/profile/store", [ProfileController::class, 'store'])->name('profile.store');

    /**
     * Password
     */
    route::get("/password", [PasswordController::class, 'index'])->name('password.index');
    route::post("/password/store", [PasswordController::class, 'store'])->name('password.store');
});

require __DIR__ . '/auth.php';
