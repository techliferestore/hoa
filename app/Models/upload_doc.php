<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class upload_doc extends Model
{
    use HasFactory;

public $table = "upload_doc"; 
    protected $fillable = [
        'user_id'  , 
        'file_name'  , 
        'comment',
        'doc_req_id',
'name'
       ];

       public $timestamps=false;
}
