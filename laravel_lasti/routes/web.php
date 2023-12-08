<?php

// use App\Http\Controllers\SponsorController;
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
    return view('template/master');
});

// Route::get('/sponsor', function () {
//     return view('sponsor/index');
// });

// Route::get('/sponsor', [SponsorController::class, 'index']);
// Route::get('/sponsor', [SponsorController::class, 'create']);
Route::resource('sponsor', SponsorController::class);
Route::resource('/sponsor/detail/{id}', [SponsorController::class, 'detail'])->name('detail');
Route::resource('user', UserController::class);
