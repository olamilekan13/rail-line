<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\AuthController;


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
//     return view('welcome');
// });

Route::get('/home',[TicketController::class,'home']);
Route::get('contact-us',[TicketController::class,'contact']);
Route::get('buy-ticket',[TicketController::class,'buyTicket']);
Route::get('about',[TicketController::class,'about']);
Route::get('vigilance',[TicketController::class,'vigilance']);
Route::get('services',[TicketController::class,'service']);
Route::get('destination',[TicketController::class,'destination']);
Route::get('ticket-type',[TicketController::class,'ticketType']);
Route::get('fare',[TicketController::class,'fare']);
Route::get('ticket-purchase',[TicketController::class,'ticketPurchase']);
Route::get('after-sales',[TicketController::class,'afterSales']);
Route::get('alteration',[TicketController::class,'alteration']);
Route::get('ticket-channel',[TicketController::class,'ticketChannel']);
Route::get('order-details',[TicketController::class,'orderDetail']);
Route::get('/', [TicketController::class, 'getStation']);

// AUth route


Route::controller(AuthController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');
});

// Route::get('dashboard', [AuthController::class, 'dashboard']);
// Route::get('login', [AuthController::class, 'index'])->name('login');
// Route::post('custom-login', [AuthController::class, 'customLogin'])->name('login.custom');
// Route::get('registration', [AuthController::class, 'registration']);
// Route::post('custom-registration', [AuthController::class, 'customRegistration'])->name('register.custom');
// Route::get('signout', [AuthController::class, 'signOut'])->name('signout');
