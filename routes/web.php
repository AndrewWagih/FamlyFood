<?php

use App\Models\Invitation;
use Illuminate\Support\Facades\Route;
use  Dinushchathurya\NationalityList\Nationality;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Session;
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

Route::get('change-locale/{locale}',function($locale){
    if($locale == 'en'){
        Session::put('locale', $locale);
    }else{
        Session::put('locale', $locale);
    }
    return redirect()->back();
})->name('change-locale');

Route::group(['middleware' => ['web','auth']], function () {
    Route::get('invitations','InvitationController@index')->name('invitations');
    Route::get('invitations/create','InvitationController@create')->name('invitations.create');
    Route::post('invitations','InvitationController@store')->name('invitations.store');
    Route::get('admin/info','AuthController@info')->name('admin.info');
    Route::post('admin/info','AuthController@updateInfo')->name('admin.update.info');
});

Route::get('email-test',function(){
    $invitation = App\Models\Invitation::first();
    return view('emails.invitation',compact('invitation'));
});

Route::get('invitation/{id}','InvitationController@invitation')->name('invitation');
Route::post('invitation/accept-or-reject/{id}','InvitationController@acceptOrReject')->name('invitation.acceptOrReject');

Route::get('questionnaire/{id}','InvitationController@questionnaire')->name('questionnaire');
Route::post('questionnaire/{id}','InvitationController@submitQuestionnaire')->name('submitQuestionnaire');
Route::get('confirmed-acceptance/{id}','InvitationController@confirmedAcceptance')->name('confirmed-acceptance');
Route::get('confirmed-attended/{id}','InvitationController@confirmedAttendedView')->name('confirmed-attended.view');
Route::post('confirmed-attended/{id}','InvitationController@confirmedAttended')->name('confirmed-attended');


Route::get('/','AuthController@loginForm')->name('login');
Route::post('/login','AuthController@login')->name('login.request');

Route::get('/invitation-image-setting','SettingController@invitationSetting')->name('invitationSetting');
Route::post('/invitation-image-setting','SettingController@storeInvitationSetting')->name('storeInvitationSetting');

Route::view('invitation-accept-or-reject-second-step','choose-nationality')->name('invitation-accept-or-reject-second-step');


Route::get('export-invitations','ExportExcelController@exportInvitations')->name('exportInvitations');

Route::view('thank-you','thank-you')->name('thank-you');
Route::get('download-agenda','InvitationController@downloadAgenda')->name('download-agenda');

Route::get('first-mail',function(){
    $invitation = Invitation::first();
    // return view('emails.new-invitation',compact('invitation'));
    $data = ['invitation' => $invitation];
    Mail::send('emails.invitation', $data, function($message) use($invitation) {
        // $message->to('a.ahmedwageh@gmail.com')->subject('Invitation');
        $message->to('eng.andrewwagih@gmail.com')->subject('Invitation');
        // $message->from('','Sender Name');
    });
    // Mail::send('emails.confirm-attend', $data, function($message) use($invitation) {
    //     // $message->to('a.ahmedwageh@gmail.com')->subject('Invitation');
    //     $message->to('eng.andrewwagih@gmail.com')->subject('Invitation');
    //     // $message->from('','Sender Name');
    // });
    // Mail::send('emails.invitation', $data, function($message) use($invitation) {
    //     $message->to('a.ahmedwageh@gmail.com')->subject('Invitation');
    //     // $message->to('eng.andrewwagih@gmail.com')->subject('Invitation');
    //     // $message->from('','Sender Name');
    // });
    // Mail::send('emails.confirm-attend', $data, function($message) use($invitation) {
    //     $message->to('a.ahmedwageh@gmail.com')->subject('Invitation');
    //     // $message->to('eng.andrewwagih@gmail.com')->subject('Invitation');
    //     // $message->from('','Sender Name');
    // });
    return view('emails.invitation',compact('invitation'));
});


Route::get('clear',function(){
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('optimize:clear');

    dd('done');
});

Route::get('migrate',function(){

    Artisan::call('migrate');
    dd('done');
});

Route::get('test',function(){
    App\Models\Invitation::where('parent_id',null)->update(['confirmed_attendance'=>0]);
    dd(App\Models\Invitation::where('parent_id',null)->pluck('id'));
});