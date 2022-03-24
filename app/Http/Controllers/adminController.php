<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\SendTicket;
class adminController extends Controller
{
  public function viewTickets(Request $request){
    $tickets=Sendticket::where('queue',"ombudsman")->get();
      return view('viewtickets')->with('list',$tickets);
  }


}
