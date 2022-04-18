<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bookeepings extends Model
{
    use HasFactory;

   public $table = "basic_setting"; 

      protected $fillable = [
        'service_names' ,
             'service_des' , 
              'service_inc' , 
               'tc' ,'sub_id',
    ];
}
