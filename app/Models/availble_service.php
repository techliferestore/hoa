<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class availble_service extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $casts = [
        'properties' => 'array'
    ];
    
}
