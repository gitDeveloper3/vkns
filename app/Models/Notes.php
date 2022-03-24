<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ombudsman_queue;

class Notes extends Model
{
    use HasFactory;
    protected $table="notes";
    public $fillable = ['subject','notes'];


}
