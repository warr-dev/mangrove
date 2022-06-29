<?php

use App\Models\Advisory;
use App\Models\Gallery;
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
Route::get('routes', function() {
    $routeCollection = Route::getRoutes();
    echo "<table style='width:100%'>";
    echo "<tr>";
        echo "<td width='10%'><h4>HTTP Method</h4></td>";
        echo "<td width='10%'><h4>Route</h4></td>";
        echo "<td width='10%'><h4>Name</h4></td>";
        echo "<td width='80%'><h4>Corresponding Action</h4></td>";
    echo "</tr>";
    foreach ($routeCollection as $value) {
        echo "<tr>";
            echo "<td>" . $value->methods()[0] . "</td>";
            echo "<td>" . $value->uri() . "</td>";
            echo "<td>" .$value->getName() . "</td>";
            echo "<td>" . $value->getActionName() . "</td>";
        echo "</tr>";
    }
    echo "</table>";
});
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
        Route::put('/donation/{donation}/confirm',['uses'=>'DonationController@confirm','as'=>'donations.confirm']);
        Route::put('/donation/{donation}/reject',['uses'=>'DonationController@reject','as'=>'donations.reject']);
        Route::put('/reservations/{reservation}/confirm',['uses'=>'ReservationController@confirm','as'=>'reservations.confirm']);
        Route::put('/reservations/{reservation}/cancel',['uses'=>'ReservationController@cancel','as'=>'reservations.cancel']);
        Route::post('/reservations/reserve',['uses'=>'ReservationController@reserve','as'=>'reservations.reserve']);
        Route::get('/report',['uses'=>'HomepageController@report','as'=>'report']);
        Route::resource('user',UserController::class);
        Route::resource('reservations',ReservationController::class);
        Route::resource('events',EventController::class);
        Route::resource('donations',DonationController::class);
        Route::resource('gallery',GalleryController::class);
        Route::resource('localnews',LocalNewsController::class);
        Route::resource('advertisement',AdvertisementController::class);
        Route::resource('advisory',AdvisoryController::class);
});
Route::middleware(['myauth:user'])
    ->name('user.')
    ->namespace('App\Http\Controllers')
    ->group(function(){
        Route::get('/home',['uses'=>'HomepageController@landing','as'=>'home']);
        // Route::get('/donation',['uses'=>'DonationController@addDonation','as'=>'donation']);
        Route::get('/reservation',['uses'=>'ReservationController@addReservation','as'=>'reservation']);
        Route::post('/reservation',['uses'=>'ReservationController@store','as'=>'reservation.store']);
        Route::post('/feedback',['uses'=>'ReviewController@store','as'=>'feedback.store']);
});


require __DIR__.'/auth.php';
