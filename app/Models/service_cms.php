<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class service_cms extends Model
{
    use HasFactory;
    
    public $table = "service_cms"; 

    protected $fillable = [
        's_image',
        's_detail'                     
       ];

       public $timestamps=false;    
}
