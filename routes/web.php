<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\CompetitionController;
use App\Http\Controllers\SubmissionController;
use App\Http\Controllers\TeamController;

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

Route::get('/ktm', function () {
    return view('pages.team.idcard');
})->name('ktm');

Route::get('/seminar', [EventController::class, 'index'])->name('event.index');
Route::post('/seminar', [ParticipantController::class, 'store'])->name('event.register');

Auth::routes();
// Auth::routes(['register' => false]);

Route::group(['middleware' => ['auth:web']], function () {
    // Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/home', function () {
        return redirect()->route('dashboard');
    })->name('home');

    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

    Route::resource('/competitions', CompetitionController::class);
    Route::get('/funcoding', [CompetitionController::class, 'funcoding'])->name('funcoding');

    // Route::get('/funcoding', function () {
    //     return view('pages.competition.funcoding');
    // })->name('funcoding');

    Route::resource('/teams', TeamController::class);
    Route::resource('/submissions', SubmissionController::class);
});
