<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\SendTicket;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/tickets',function(){
  return SendTicket::all();
});
Route::get("/tickets/{id}",function($id){
  return SendTicket::find($id);
});
Route::post("tickets",function(Request $request){
return SendTicket::create($request->all());
});
Route::delete("tickets/{id}", function($id){
  SendTicket::find($id)->delete();
  return 204;
});
Route::put("tickets/{id}",function(Request $request,$id){
  $ticket=SendTicket::findorfail($id)->update($request->all());;
  return $ticket;
});
