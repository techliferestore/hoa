<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lsetting extends Model
{

	   public $table = "psetting"; 
	   
    use HasFactory;


     protected $fillable = [
       'legal',  'sub_id', 'package_id',  
             'nature',    
              'type',    
               'transaction',    
                'value',    
                 'price',    
                  'doc', 'book_id',  
    ];

public function pp(){

  return $this->hasOne('App\Models\package_price','product_id','book_id');


}

public function label_n(){

  return $this->hasOne('App\Models\psetting','id','legal');


}




 
}
