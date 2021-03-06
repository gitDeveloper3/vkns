<?php

namespace App\Http\Controllers;
use App\Models\SendTicket;
use Illuminate\Http\Request;
use App\Models\Notes;
class LiasonController extends Controller
{
  public function createTicket(Request $request){
      $uniqid=$request->input("selected");
    return view('liason.liason-create-ticket')->with("selected",$uniqid);
  }


  public function viewTickets(Request $request){
    $tickets=Sendticket::where(['queue'=>"department",'ticketstatus'=>"open"])->get();
      return view('liason.viewTickets')->with('list',$tickets);
  }

  public function liasonDashboard(Request $request){

    return view('department');
  }

    public function tickets(Request $request){
      $tickets=Sendticket::all();
      return view('dviewtickets')->with('list',$tickets);;
    }
    public function close(Request $request){
      $ticketid=$request->input('close');
      SendTicket::where('uniqueid', $ticketid)
                ->update(['ticketstatus' => 'closed']);
      return view('status')->with('message',"success");;
    }


    public function createSearch(Request $request){
      $tickets=Sendticket::where(['queue'=>"department","ticketstatus"=>"open"])->get();
      return view('search')->with('list',$tickets);
    }


}
