<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class package_price extends Model
{
    use HasFactory;
    public $table = "package_price"; 
   
    protected $fillable = [
        'monthly', 
        'quartely', 
        'yearly', 
        'product_id',    
             'price',
             'doc','sub_id'   
    ];
     
 
    public function list_option()
    {
      return $this->hasMany('App\Models\lsetting','package_id','id');
    }

}
