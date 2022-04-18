<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
  public $table="categories";

    use HasFactory;

    protected $fillable = ['tile'];

    public function subcat_name()
  {
    return $this->hasMany('App\Models\subcategories','cat_id','id');
  }

   
}
