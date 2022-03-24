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

Route::get('/send-ticket',[App\Http\Controllers\sendTicketFormController::class,'createTicket']);
Route::post('/send-ticket',[App\Http\Controllers\sendTicketFormController::class,'sendTicket'])->name('send-ticket');
Route::get('/viewtickets',[App\Http\Controllers\adminController::class,'viewTickets'])->name('viewtickets');
Route::get('/ojo_createticket',[App\Http\Controllers\ojo_Controller::class,'create'])->name('ojo_createtickets');
Route::get('/ojo_listemails',[App\Http\Controllers\ojo_Controller::class,'listemails'])->name('ojo_listemails');
Route::get('/ojo_users',[App\Http\Controllers\ojo_Controller::class,'listusers'])->name('ojo_users');
Route::get('/piechart',[App\Http\Controllers\ojo_Controller::class,'piechart'])->name('piechart');
Route::get('/barchart',[App\Http\Controllers\ChartController::class,'barchart'])->name('barchart');
Route::post('/ojo_sendticket',[App\Http\Controllers\ojo_Controller::class,'sendticket'])->name('ojo_sendticket');
Route::post('/search',[App\Http\Controllers\ojo_Controller::class,'search'])->name('search');
Route::post('/foward',[App\Http\Controllers\ojo_Controller::class,'foward'])->name('foward');
Route::get('/createsearch',[App\Http\Controllers\ojo_Controller::class,'createsearch'])->name('createsearch');
Route::get('/loadMessages',[App\Http\Controllers\sendTicketFormController::class,'loadMessages'])->name('loadMessages');
Route::post('/dclose',[App\Http\Controllers\sendTicketFormController::class,'close'])->name('dclose');
Route::get('/dviewtickets',[App\Http\Controllers\department::class,'AllTickets'])->name('dviewtickets');
Route::get('/department',[App\Http\Controllers\department::class,'ddashboard'])->name('department');
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
