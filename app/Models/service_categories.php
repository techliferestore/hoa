<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class service_categories extends Model
{
    use HasFactory;


    protected $fillable = [
        'category','slug',
 
       ];

       public function sub_name()
       {
           return $this->hasMany('App\Models\service_subcategories','category_id','id');
       }

      
}
