<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fix_plain extends Model
{
    public $table = "fix_plains"; 

    use HasFactory;
    protected $guarded = [];

    public function plan_type()
    {
      return $this->hasMany('App\Models\plain_type','fix_plain_id','id');
    }
  

    public function service_label()
    {
      return $this->hasMany('App\Models\fix_plain_service_label','fix_plain_id','id');
    }


    public function available_service()
    {
      return $this->hasMany('App\Models\availble_service','fix_plain_id','id');
    }



}
