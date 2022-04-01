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
    return view('welcome');
});

//auth route for both
Route::group(['middleware' => ['auth']], function() {
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
});

// for users
Route::group(['middleware' => ['auth', 'role:user']], function() {
    Route::get('/dashboard/myprofile', 'App\Http\Controllers\DashboardController@myprofile')->name('dashboard.myprofile');
});

// for blogwriters
Route::group(['middleware' => ['auth', 'role:blogwriter']], function() {
    Route::get('/dashboard/postcreate', 'App\Http\Controllers\DashboardController@postcreate')->name('dashboard.postcreate');
});

require __DIR__.'/auth.php';


///my app

//Ticket Controller
Route::get('/create-ticket',[App\Http\Controllers\TicketController::class,'createTicket'])->name('create-ticket');
Route::post('/send-ticket',[App\Http\Controllers\TicketController::class,'sendTicket'])->name('send-ticket');
Route::get('/load-messages',[App\Http\Controllers\TicketController::class,'loadMessages'])->name('load-messages');
Route::post('/close-ticket',[App\Http\Controllers\TicketController::class,'closeTicket'])->name('close-ticket');
//ojo_secretariate Controller
Route::get('/admin-create-ticket',[App\Http\Controllers\AdminController::class,'createTicket'])->name('admin-create-ticket');
Route::get('/admin-get-emails',[App\Http\Controllers\AdminController::class,'getEmails'])->name('admin-get-emails');
Route::get('/admin-get-users',[App\Http\Controllers\AdminController::class,'getUsers'])->name('admin-get-users');
Route::get('/admin-piechart',[App\Http\Controllers\AdminController::class,'pieChart'])->name('admin-piechart');
Route::post('/admin-search',[App\Http\Controllers\AdminController::class,'search'])->name('admin-search');
Route::post('/admin-foward-ticket',[App\Http\Controllers\AdminController::class,'fowardTicket'])->name('admin-foward-ticket');
Route::get('/admin-create-search',[App\Http\Controllers\AdminController::class,'createSearch'])->name('admin-create-search');
Route::post('/admin-send-ticket',[App\Http\Controllers\AdminController::class,'sendTicket'])->name('admin-send-ticket');
Route::get('/admin-view-tickets',[App\Http\Controllers\AdminController::class,'viewTickets'])->name('admin-view-tickets');
Route::get('/admin-foward-search',[App\Http\Controllers\AdminController::class,'adminFowardSearch'])->name('admin-foward-search');
Route::get('/admin-reply-ticket',[App\Http\Controllers\AdminController::class,'replyTicket'])->name('admin-reply-ticket');
//department controller
Route::get('/liason-view-tickets',[App\Http\Controllers\LiasonController::class,'viewTickets'])->name('liason-view-tickets');
Route::get('/liason',[App\Http\Controllers\LiasonController::class,'ddashboard'])->name('liason');
Route::post('/liason-close',[App\Http\Controllers\LiasonController::class,'close'])->name('liason-close');
Route::get('/liason-create-ticket',[App\Http\Controllers\LiasonController::class,'createTicket'])->name('liason-create-ticket');
//Chart Controller
Route::get('/barchart',[App\Http\Controllers\ChartController::class,'barchart'])->name('barchart');

//laratrust
Route::get('/viewtickets',[App\Http\Controllers\adminController::class,'viewTickets'])->name('viewtickets');
Route::get('/logout',[App\Http\Controllers\HomeController::class,'logout'])->name('logout');



Route::get('/dashboard', function () {
    return view('2dashboard');
})->name('true-home');

Route::get('/department', function () {
    return view('department');
})->name('department');
Route::get('/home', function () {
    return view('test');
})->name('test');




Route::get('/admin_dashboard', function () {
    return view('admin');
})->name('admin');

Route::get('/ojo_secretariate', function () {
    return view('ojo_secretariate');
})->name('ojo_secretariate');

Route::get('/createticket', function () {
    return view('ojo_createticket');
})->name('creatticket');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
