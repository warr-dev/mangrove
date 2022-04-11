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

Route::get('/', function () {
    // return view('welcome');
    return redirect()->route('login');
});

Route::middleware(['myauth:admin'])
    ->prefix('admin')
    ->name('admin.')
    ->namespace('App\Http\Controllers')
    ->group(function(){
        Route::get('/dashboard',['uses'=>'HomepageController@home','as'=>'home']);
        Route::resource('user',UserController::class);
        Route::resource('reservations',ReservationController::class);
        Route::resource('events',EventController::class);
        Route::resource('donations',DonationController::class);
});
Route::middleware(['myauth:user'])
    ->name('user.')
    ->namespace('App\Http\Controllers')
    ->group(function(){
        Route::get('/home',['uses'=>'HomepageController@home','as'=>'home']);
        Route::get('/donation',['uses'=>'DonationController@addDonation','as'=>'donation']);
        Route::get('/reservation',['uses'=>'ReservationController@index','as'=>'reservation']);
});


require __DIR__.'/auth.php';
