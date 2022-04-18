<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class leads extends Model
{
    use HasFactory;

    public $table="leads";


    protected $fillable = [
        'name',  'b_mob', 'email','query'  
             
     ];






}
