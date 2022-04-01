<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ombudsman_queue;

class SendTicket extends Model
{
    use HasFactory;
        public $fillable = ['topic','user','description','queue','uniqueid'];

        public function ombudsman_queue(){
          return $this->hasOne(ombudsman_queue::class,'FK_uniqueid','uniqueid');
        }
}
