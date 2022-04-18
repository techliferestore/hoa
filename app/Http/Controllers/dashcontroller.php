<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\labels;
use App\Models\psetting;
use App\Models\service_categories;
use App\Models\service_subcategories;
use App\Models\Invoice;
use App\Models\doc_req;

use App\Models\Invoicesetting;
use Validator;
use Auth;
use Illuminate\Support\Facades\Session;
use DB;
use View;
use Log;

class dashcontroller extends Controller
{


    function index() {       
      
           return view('dashboard.profile');
       }
   
       function invoice() {
           $invoices = DB::table('invoices')
           ->where('user_id', Auth::user()->id)
           ->where('status', '0')
           ->first();

          // dd($invoices);
   
           return view('dashboard.invoice.index', compact('invoices'));
       }
   
     
       public function storeinvoicesetting(Request $request){
   
                $invoice = Invoicesetting::firstOrNew(['user_id' =>  Auth::user()->id]); 
                $invoice->prefix = $request->prefix;
                $invoice->suffix = $request->suffix;
                $invoice->user_id = Auth::user()->id; 
   
               $datasave =  $invoice->save();
               if($datasave){
                   Session::flash('message', 'Added Successfully!');
                   Session::flash('alert-class', 'alert-success');
                   return Back()->withInput()->with('subject', '1');
   
               }else{
                   Session::flash('message', 'Data not saved!');
                   Session::flash('alert-class', 'alert-danger');
                   return Back()->withInput()->with('subject', '1');
   
               }
       
       }
     
       public function storeinvoice(Request $request){
           if ($request->step=='1') {
              
               $validator = Validator::make($request->all(), [
                   'firstname' => 'required|string',
                   'lastname' => 'required|string',
                   'companyname' => 'required|string',
               ]);
       
               if ($validator->fails()) {
                    return redirect()->Back()->withInput()->withErrors($validator);
               }
   
   
               
               // $validator = Validator::make($request->all(), [
               //      'logo' => 'required'
               //         // 'logo' => 'required|mimes:png,jpg,jpeg|max:2048'
               // ]);
   
             
               
               // if ($validator->fails()) {
               //         return redirect()->Back()->withInput()->withErrors($validator);
               //  }
   
                $invoice = Invoice::firstOrNew(['user_id' =>  Auth::user()->id, 'status' => '0']); 
                
                $invoice->firstname = $request->firstname;
                $invoice->lastname = $request->lastname;
                $invoice->companyname = $request->companyname;
                $invoice->user_id = Auth::user()->id;
                $invoice->status = '0';
                
               if($request->file('logo')) {
                   $name = time().'_'.$request->logo->getClientOriginalName();
                   $filePath = $request->file('logo')->storeAs('uploads', $name, 'public');
       
                   $invoice->filename = time().'_'.$request->file('logo')->getClientOriginalName();
                   $invoice->filepath = '/storage/' . $filePath;
                  
               }
   
              
   
               $datasave =  $invoice->save();
               if($datasave){
                   Session::flash('message', 'Added Successfully!');
                   Session::flash('alert-class', 'alert-success');
                   return Back()->withInput()->with('subject', '1');
   
               }else{
                   Session::flash('message', 'Data not saved!');
                   Session::flash('alert-class', 'alert-danger');
                   return Back()->withInput()->with('subject', '1');
   
               }
                  
           }else  if ($request->step=='2') {
              
               $validator = Validator::make($request->all(), [
                   'mobile' => 'required|string',
                   'email' => 'required|string',
                   'companyaddress' => 'required|string',
               ]);
       
               if ($validator->fails()) {
                    return redirect()->Back()->withInput()->withErrors($validator);
               }
   
                $invoice = Invoice::firstOrNew(['user_id' =>  Auth::user()->id, 'status' => '0']); 
                
                $invoice->mobile = $request->mobile;
                $invoice->email = $request->email;
                $invoice->companyaddress = $request->companyaddress;
                $invoice->companycity = $request->companycity;
                $invoice->zipcode = $request->zipcode;
                $invoice->gst = $request->gst;
                $invoice->state = $request->state;
                $invoice->user_id = Auth::user()->id;
                $invoice->status = '0';
   
               $datasave =  $invoice->save();
   
               if($datasave){
                   Session::flash('message', 'Update Successfully!');
                   Session::flash('alert-class', 'alert-success');
                   return Back()->withInput()->with('subject', '1');
   
               }else{
                   Session::flash('message', 'Data not saved!');
                   Session::flash('alert-class', 'alert-danger');
                   return Back()->withInput()->with('subject', '1');
   
               }
                  
           }else  if ($request->step=='3') {
              
               $validator = Validator::make($request->all(), [
                   'social' => 'required|string',
                   'website' => 'required|string',
               ]);
       
               if ($validator->fails()) {
                    return redirect()->Back()->withInput()->withErrors($validator);
               }
   
                $invoice = Invoice::firstOrNew(['user_id' =>  Auth::user()->id, 'status' => '0']); 
                
                $invoice->social = $request->social;
                $invoice->website = $request->website;
   
               $datasave =  $invoice->save();
   
               if($datasave){
                   Session::flash('message', 'Update Successfully!');
                   Session::flash('alert-class', 'alert-success');
                   return Back()->withInput()->with('subject', '1');
   
               }else{
                   Session::flash('message', 'Data not saved!');
                   Session::flash('alert-class', 'alert-danger');
                   return Back()->withInput()->with('subject', '1');
   
               }
                  
           }
       
       }
   
   
     
       //  public function edit($id){
       //     $subject = Invoice::find($id);  
       //     return view('subjects.edit')->with('subject', $subject);
       //  }
   
   
   
     
       //  public function update(Request $request,$id){
       //     $data = $request->except('_method','_token','submit');
     
       //     $validator = Validator::make($request->all(), [
       //        'name' => 'required|string|min:3',
       //        'description' => 'required|string|min:3',
       //     ]);
     
       //     if ($validator->fails()) {
       //        return redirect()->Back()->withInput()->withErrors($validator);
       //     }
       //     $subject = Invoice::find($id);
     
       //     if($subject->update($data)){
     
       //        Session::flash('message', 'Update successfully!');
       //        Session::flash('alert-class', 'alert-success');
       //        return redirect()->route('subjects');
       //     }else{
       //        Session::flash('message', 'Data not updated!');
       //        Session::flash('alert-class', 'alert-danger');
       //     }
     
       //     return Back()->withInput();
       //  }
   
   
   
  
       
       
        function invoicetype() {
           return view('dashboard.invoice.invoicetype');
   
       }
       function invoicesetting() {
   
           $invoices = DB::table('invoicesettings')
           ->where('user_id', Auth::user()->id)
           ->first();
   
           return view('dashboard.invoice.invoicesetting', compact('invoices'));
   
       }
       function invoiceprofile() {
           return view('dashboard.invoice.invoiceprofile');
   
       }
       function invoicehistory() {
           return view('dashboard.invoice.invoicehistory');
   
       }
   
       function createinvoice() {
           return view('dashboard.invoice.createinvoice');
   
       }

    function profile() {

        
     $service_categories=service_categories::all();
        return view('dashboard.profile',compact('service_categories'));


    }


    function upload() {

  

        
        return view('dashboard.upload');


    }

    function checkservice() {

        
        
           return view('dashboard.checkservice');
   
   
       }

       function misreport() {

        
        
        return view('dashboard.misreport');


    }

    function fixprice() {
        return view('dashboard.fixplain');

    }

    function dedicated() {
        return view('dashboard.dedicated');


    }


    function payroll() {




        $services=Session()->get('products');
      dd($services);
   
        return view('dashboard.pay',compact('services'));


    }
    function plain() {
        return view('dashboard.plain');


    }

     
   function checkout(Request $request)
   {

   

    $services=array(
        "amount" => $request->amount,
        "include" => $request->include,
        "product_id"=>$request->product_id
      );
      Log::debug(__CLASS__."::".__FUNCTION__." Called ".json_encode($services));
    return view('dashboard.pay', compact('services'));






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
