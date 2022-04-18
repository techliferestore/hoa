<?php

namespace App\Http\Controllers;
use Razorpay\Api\Api;
use Session;
use App\Models\pgateway_txn;
use Illuminate\Support\Facades\Auth;
use Exception;
use Illuminate\Http\Request;

class RazorpayPaymentController extends Controller
{
    public function store(Request $request)
    {
        $input = $request->all();
  
        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
  
        $payment = $api->payment->fetch($input['razorpay_payment_id']);
  
        if(count($input)  && !empty($input['razorpay_payment_id'])) {
            try {
                $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount'=>$payment['amount'])); 
  
            } catch (Exception $e) {
                return  $e->getMessage();
                Session::put('error',$e->getMessage());
                return redirect()->route('dashboard');
     
            }
        }
        pgateway_txn::create([
            'txn_id'=>$request->razorpay_payment_id, 
            'customer_id'=>Auth::user()->id,
      
        ]);
       


        Session::put('success', 'Payment successful');
        return redirect()->route('dashboard');
     
    }

}
