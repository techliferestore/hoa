<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fix_plain_service_label extends Model
{
    public $table = "fix_plain_service_labels"; 

    use HasFactory;
    protected $guarded = [];
}
