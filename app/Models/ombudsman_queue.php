<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Notes;
use App\Models\SendTicket;
class ombudsman_queue extends Model
{
    use HasFactory;
    public $fillable = ['office','category'];

    protected $table="ombudsman_queue";

    public function SendTicket(){
      return $this->belongsTo(SendTicket::class,'uniqueid','FK_uniqueid');
    }

    public function notes(){
      return $this->hasOne(Notes::class,'FK_uniqueid','FK_uniqueid');
    }

}
