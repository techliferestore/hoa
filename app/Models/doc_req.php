<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class doc_req extends Model
{
    use HasFactory;

    public $table = "doc_req";
    
    protected $guarded = [];


    public $timestamps=false;    

    public function file()
    {
      return $this->hasMany('App\Models\upload_doc','doc_req_id','id');
    }
    
}
