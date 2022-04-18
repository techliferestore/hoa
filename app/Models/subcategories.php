<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subcategories extends Model
{
    use HasFactory;

    protected $fillable = [
        'cat_id'  , 
        'sub_name'  , 
        'slug'
       ];



       public $timestamps=false;    

       public function category_name() {
        return $this->belongsTo('App\Models\category','id','cat_id');
      }
      

}


