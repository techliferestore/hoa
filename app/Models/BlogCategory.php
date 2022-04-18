<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    use HasFactory;


    protected $fillable = ['category_id','blog_id'];


    public function subcategories()
 {
     return $this->hasMany('App\Models\blog_subcategories','category_id','id');
 }
}
