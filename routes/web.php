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

Route::get('login',[AuthController::class, 'login']);
Route::get('register',[AuthController::class, 'register']);
