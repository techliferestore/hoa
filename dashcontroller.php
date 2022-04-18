<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\labels;
use App\Models\psetting;
use App\Models\service_categories;
use App\Models\service_subcategories;


class dashcontroller extends Controller
{
    function profile() {

        
     $service_categories=service_categories::all();
        return view('dashboard.profile',compact('service_categories'));


    }

    function fixprice() {
        return view('dashboard.fixplain');

    }

    function dedicated() {
        return view('dashboard.dedicated');


    }


    function invoice() {
        return view('dashboard.invoice');


    }
    function payroll() {
        return view('dashboard.payroll');


    }
    function plain() {
        return view('dashboard.plain');


    }
    function service() {


      $service_categories=service_categories::all();
  

           //dd($service_subcategories);
        return view('dashboard.service',compact('service_categories'));


    }
   
    function accservice($slug) {

  
 $service_categories=service_categories::where('slug',$slug)->get();

//dd($service_categories);


        return view('dashboard.accservices',compact('service_categories'));


    }
function bookkeeping($slug){

  //$subid=service_subcategories::where('slug',$slug)->first()->id;

$subid=service_subcategories::where('slug',$slug)->first()->id;

     $service_categories=service_categories::all();
  



    return view('dashboard.bookkeeping',compact('service_categories'),compact('subid'));



}

function dlayout(){

  $service_categories=service_categories::all();
  



    return view('dashboard.layout.dlayout',compact('service_categories'));



}

}
