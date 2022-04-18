<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class service_subcategories extends Model
{
    use HasFactory;

    protected $fillable = [
        'subcategory'  , 
        'category_id'  , 
                  'slug',
       ];



         public function lable_name()
  {
    return $this->hasMany('App\Models\labels','subcat_id','id');
  }
}
