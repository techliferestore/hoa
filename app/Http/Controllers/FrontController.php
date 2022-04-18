<?php

namespace App\Http\Controllers;
use App\Models\service_cms;
use App\Models\Blog;
use App\Models\faq_blog;
use App\Models\BlogCategory;
use App\Models\category;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    function dashboard() {
        return view('dashboard.profile');


    }

    function fixprice() {
        return view('dashboard.fixprice');


    }

    function dedicated() {
        return view('dashboard.dedicated');


    }

    function home() {


              
       $data=service_cms::all();
        return view('front.home',compact('data'));


    }
    function blog() {


        $blogs=blog::latest()->first();
        $blog=blog::orderBy('id', 'DESC')->limit(2)->get();
      
        $cats=category::all();

        return view('front.blog',compact('blog','cats','blogs'));


    }

    function contact()
    {
return view('front.contact');


    }

    function dblog($slug) {

        $blogs=blog::where('slug',$slug)->first();
$faq=faq_blog::where('blog_id',$blogs->id)->get();
$cat=category::all();
//dd($cat);
        return view('front.dblog',compact('blogs','faq','cat'));


    }
}
