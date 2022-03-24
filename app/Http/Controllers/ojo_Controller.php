<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\ombudsman_queue;
use App\Models\SendTicket;
use App\Models\Notes;
use DB;
class ojo_Controller extends Controller
{


public function foward(Request $request){
  $uniqid=$request->input('uniqueid');
  SendTicket::where(['queue'=>"ombudsman",'uniqueid'=>$uniqid])
            ->update(['queue' => 'department']);
}

    public function create(Request $request){
      return view('ojo_createticket');
    }
    public function sendticket(Request $request){

      //$validData=$this->validate($request,['ticketnumber'=>'required']);
      $input=$request->all();
      $category=$request->input('category');
      $ticketnumber=$request->input('ticketnumber');
      $office=$request->input('office');
        $subject=$request->input('subject');
          $notes2=$request->input('notes');

      //fetching row
      $sendticket=new SendTicket;
      $ombudsman_queue=new ombudsman_queue;
      $notes=new Notes;

      $ombudsman_queue->FK_uniqueid=$ticketnumber;
      $ombudsman_queue->category=$category;
      $ombudsman_queue->office=$office;
      $res=$sendticket::where('uniqueid',$ticketnumber)->first();

      $notes->subject=$subject;
      $notes->notes=$notes2;
      $notes->FK_uniqueid=$ticketnumber;


 $res->ombudsman_queue()->save($ombudsman_queue)->notes()->save($notes);
//$latest=$ombudsman_queue::latest()->first();
//$latest->notes()->save($notes);
//$res->ombudsman_queue()->notes()->save($notes);
  // return redirect()->route('test')->with('error',$notes2);
return redirect('/createsearch');
    }

    public function listusers(Request $request){
      $list=user::select("name")->get();
      return view('ojo_users')->with('list',$list);
    }
    public function listemails(Request $request){
      $list=user::select("email","name")->get();
      return view('emails')->with('list',$list);
    }

    public function piechart(Request $request){
      $list=user::all();
      return view('pie')->with('products',$products);
    }

    public function search(Request $request){
    $id=$request->input('selected');
      return view('ojo_createticket')->with('id',$id);
    }
    public function createSearch(Request $request){
      $tickets=Sendticket::all();
      return view('search')->with('list',$tickets);
    }


}
