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

// Route::get('/', function () {
//     // return view('welcome');
//     return redirect()->route('login');
// });
Route::namespace('App\Http\Controllers')
    ->group(function(){
        Route::get('/adddonations',['uses'=>'DonationController@addDonation','as'=>'adddonations']);
        Route::resource('donations',DonationController::class);
        Route::get('/reservation',['uses'=>'ReservationController@addReservation','as'=>'reservation']);
        Route::get('/',['uses'=>'HomepageController@landing','as'=>'landing']);
});

Route::middleware(['myauth:admin'])
    ->prefix('admin')
    ->name('admin.')
    ->namespace('App\Http\Controllers')
    ->group(function(){
        Route::get('/dashboard',['uses'=>'HomepageController@home','as'=>'home']);
        Route::put('/user/{user}/approve',['uses'=>'UserController@approve','as'=>'user.approve']);
        Route::put('/user/{user}/decline',['uses'=>'UserController@decline','as'=>'user.decline']);
        Route::put('/reservations/{reservation}/confirm',['uses'=>'ReservationController@confirm','as'=>'reservations.confirm']);
        Route::put('/reservations/{reservation}/cancel',['uses'=>'ReservationController@cancel','as'=>'reservations.cancel']);
        Route::resource('user',UserController::class);
        Route::resource('reservations',ReservationController::class);
        Route::resource('events',EventController::class);
        Route::resource('donations',DonationController::class);
});
Route::middleware(['myauth:user'])
    ->name('user.')
    ->namespace('App\Http\Controllers')
    ->group(function(){
        Route::get('/home',['uses'=>'HomepageController@landing','as'=>'home']);
        // Route::get('/donation',['uses'=>'DonationController@addDonation','as'=>'donation']);
        Route::get('/reservation',['uses'=>'ReservationController@addReservation','as'=>'reservation']);
        Route::post('/reservation',['uses'=>'ReservationController@store','as'=>'reservation.store']);
});


require __DIR__.'/auth.php';
