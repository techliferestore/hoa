<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Otherdetail extends Model
{

    protected $fillable = [
        'contractno',
        'contractnodateon',
        'ewayno',
        'ewaynodateon',
        'airwaysbillno',
        'portofloading',
        'portofdischarge',
        'arnno',
        'bondno'
    ];
}
