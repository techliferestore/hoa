<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class labels extends Model
{
    use HasFactory;

    protected $fillable = [
       'subcat_id',    
             'label',    
            
    ];



    public function list_lable()
  {
    return $this->hasMany('App\Models\psetting','label_id','id');
  }


  public function list_p()
  {
    return $this->hasMany('App\Models\lsetting','book_id','id');
  }


  







}
