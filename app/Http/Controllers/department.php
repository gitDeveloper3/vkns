<?php

namespace App\Http\Controllers;
use App\Models\SendTicket;
use Illuminate\Http\Request;
use App\Models\Notes;
class department extends Controller
{
  public function ddashboard(Request $request){

    return view('department');
  }

    public function AllTickets(Request $request){
      $tickets=Sendticket::all();
      return view('dviewtickets')->with('list',$tickets);;
    }
    public function close(Request $request){
      $ticketid=$request->input('close');
      SendTicket::where('uniqueid', $ticketid)
                ->update(['ticketstatus' => 'closed']);
      return view('done')->with('message',"success");;
    }


}
