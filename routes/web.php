<?php

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

Route::get('/', 'PageController@index')->name('index');

Route::post('/package/track', 'TrackingController')->name('package.track');

Route::post('/package/track/results', 'TrackingController')->name('package.track.results');

Route::post('/otp/resend', 'OTPController@resendOTP')->name('otp.resend');

Route::post('/otp/verify', 'OTPController@verifyOTP')->name('otp.verify');

Route::middleware("auth")->group(function(){
    // Package Routes
    Route::get('/dashboard/packages', 'PackageController@index')->name('packages');
    Route::get('/packages/create', 'PackageController@create')->name('package.create');
    Route::post('/packages', 'PackageController@store')->name('package.create.post');
    Route::get('/packages/{package}', 'PackageController@edit')->name('package.edit');
    Route::patch('/packages/{package}', 'PackageController@update')->name('package.update');
    Route::delete('/package/{package}', 'PackageController@delete')->name("package.delete");

    // Package Status Update
    Route::get('/package/{package}/status', 'StatusController@index')->name('package.status.index');
    Route::get('/packages/{package}/status', 'StatusController@edit')->name('package.status.edit');
    Route::post('/packages/{package}/status', 'StatusController@update')->name('package.status.update');

    // Package Transactions
    Route::get("/packages/transactions", 'TransactionController@index')->name('package.transactions.index');
    Route::get('/packages/{package}/transaction', 'TransactionController@show')->name('package.transaction.show');
    Route::post('/packages/{package}/transaction', 'TransactionController@create')->name('package.transaction.create');
    Route::get('/packages/{package}/transaction/edit', 'TransactionController@edit')->name('package.transaction.edit');
    Route::patch('/packages/{package}/transaction', 'TransactionController@update')->name('package.transaction.update');
    Route::delete('/packages/{package}/transaction', 'TransactionController@delete')->name('package.transaction.delete');

    Route::get('/notifications/email', 'NotifcationController@getEmailPage')->name('notification.email');
    Route::get('/notifications/sms', 'NotifcationController@getSmsPage')->name('notifications.sms');
    Route::post('/notifications/email', 'NotifcationController@sendEmail')->name('notifications.email.send');
    Route::post('/notifications/sms', 'NotifcationController@sendSms')->name('notifications.sms.send');
});

Auth::routes();

Route::get('/dashboard/home', 'HomeController@index')->name('home');

Route::get('/dashboard/admin', 'HomeController@admin')->name('admin');
