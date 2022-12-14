<?php

use Illuminate\Support\Facades\Route;

// Dashboard
Route::group(['middleware' => ['auth:admin']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');

    Route::resource('/events', 'EventController')->except('create', 'show');
    Route::get('/participants/export', 'ParticipantController@export')->name('participants.export');
    Route::resource('/participants', 'ParticipantController')->except('create', 'show');

    Route::resource('/competitions', 'CompetitionController')->except('create', 'show');
    Route::resource('/categories', 'CategoryController')->except('create', 'show');

    Route::get('/users/ktm', 'UserController@ktm')->name('ktm');
    Route::resource('/users', 'UserController')->except('create', 'show');

    Route::resource('/teams', 'TeamController')->except('create', 'show');
    Route::resource('/assignments', 'AssignmentController')->except('create', 'show');

    Route::get('/submissions/export', 'SubmissionController@export')->name('submissions.export');
    Route::resource('/submissions', 'SubmissionController')->except('create');
});


/*
|--------------------------------------------------------------------------
| Admin Auth
|--------------------------------------------------------------------------
*/

// Login
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Register
// Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// Route::post('register', 'Auth\RegisterController@register');

// Reset Password
// Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
// Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
// Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
// Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

// Confirm Password
// Route::get('password/confirm', 'Auth\ConfirmPasswordController@showConfirmForm')->name('password.confirm');
// Route::post('password/confirm', 'Auth\ConfirmPasswordController@confirm');

// Verify Email
// Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
// Route::get('email/verify/{id}/{hash}', 'Auth\VerificationController@verify')->name('verification.verify');
// Route::post('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');
