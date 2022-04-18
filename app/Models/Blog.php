<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = ['tile','summary','time','description','f_video','banner_image','status'];

    public function faq()
    {
        return $this->hasMany('App\Models\faq_blog','blog_id','id');
    }

    public function categoryName()
    {
        return $this->hasOne('App\Models\BlogCategory','blog_id','id');
    }

}
