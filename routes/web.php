<?php

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
    return view('welcome');
})->name('welcome');

Route::get('/competition', function () {
    return view('pages.competition.index');
})->name('competition');



Route::get('/seminar', [App\Http\Controllers\EventController::class, 'index'])->name('event.index');
Route::post('/seminar', [App\Http\Controllers\ParticipantController::class, 'store'])->name('event.register');

Auth::routes();
// Auth::routes(['register' => false]);

Route::group(['middleware' => ['auth:web']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
