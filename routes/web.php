<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['middleware' => ['web','auth']], function () {
    Route::get('invitations','InvitationController@index')->name('invitations');
    Route::get('invitations/create','InvitationController@create')->name('invitations.create');
    Route::post('invitations','InvitationController@store')->name('invitations.store');
    
});

Route::view('email-test','emails.invitation');

Route::get('invitation/{id}','InvitationController@invitation')->name('invitation');
Route::post('invitation/accept-or-reject/{id}','InvitationController@acceptOrReject')->name('invitation.acceptOrReject');

Route::get('questionnaire/{id}','InvitationController@questionnaire')->name('questionnaire');

Route::get('/','AuthController@loginForm')->name('login');
Route::post('/login','AuthController@login')->name('login.request');

Route::view('thank-you','thank-you')->name('thank-you');