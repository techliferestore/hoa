<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class monthly_tran extends Model
{


    public $table = "monthly_trans"; 
    use HasFactory;

    protected $fillable=['trn_name'];

    public function fixplain_name()
    {
      return $this->hasMany('App\Models\fix_plain','monthly_tran_id','id');
    }
     
 

}

