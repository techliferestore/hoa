<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class plain_type extends Model
{
    public $table = "plain_types"; 

    use HasFactory;
    protected $guarded = [];
}
