<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class psetting extends Model
{
    use HasFactory;


public $table = "lsetting"; 

       protected $fillable = [
        'a', 'sub_id',  'b',  'id',   'c',    'd',     'e', 'label_id','sub_id'   
    ];




    
}
