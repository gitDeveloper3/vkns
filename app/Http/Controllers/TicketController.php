<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SendTicket;
use App\Models\Notes;
use Auth;

class TicketController extends Controller
{



  public function closeTicket(Request $request){
    $ticketid=$request->input('close');
    SendTicket::where('uniqueid', $ticketid)
              ->update(['ticketstatus' => 'closed']);
        return redirect('/load-messages');
    //return view('done')->with('message',"success");;
  }

  public function loadMessages(Request $request){
    $userId = Auth::id();
  $ticketids=SendTicket::where(['user'=>$userId,'ticketstatus'=>'open'])->pluck('uniqueid');
  $messages = Notes::select('*')
              ->whereIn('FK_uniqueid', $ticketids)
              ->get();


  //$messages=Notes::where('FK_uniqueid',$userId)->get();
return view('status')->with('messages',$messages);
  }

    public function createTicket(Request  $request){
      return view('send-ticket');
    }
    public function sendTicket(Request $request){
      //form validation
$this->validate($request,['topic'=>'required','description'=>'required']);
$user=auth()->user();
$topic=$request->input('topic');
$queuex="ombudsman";
$description=$request->input('description');
$id= $user->email.mt_rand(1000000000, 9999999999);
$sendticket=new SendTicket;
$sendticket->user=$user->id;
$sendticket->topic=$topic;
$sendticket->description=$description;
$sendticket->queue=$queuex;
$sendticket->uniqueid=$id;
$sendticket->save();

//SendTicket::create($request->all());
return redirect()->route('true-home')->with('error','Your ticket id:'."''".$id."''"." has been received and is currently being worked on. We will let you know of its progress in a moment");

    }
}
