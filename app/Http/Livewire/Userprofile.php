<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Userprofile extends Component
{


    public $plans=false;
    public $blogs=false;
    public $payroll=false;
    public $invoice=false;
    public $dashboard=false;
 
 function plans()
 {
      $this->plans=true;
      $this->blogs=false;
      $this->payroll=false;
      $this->invoice=false;
      $this->dashboard=false;
 
 
 }
 
 function blog()
 {
      $this->plans=false;
      $this->blogs=true;
      $this->payroll=false;
      $this->invoice=false;
      $this->dashboard=false;
 
 
 }
 
 function payroll()
 {
      $this->plans=false;
      $this->blogs=false;
      $this->payroll=true;
      $this->invoice=false;
      $this->dashboard=false;
 
 
 }
 function invoice()
 {
      $this->plans=false;
      $this->blogs=false;
      $this->payroll=false;
      $this->invoice=true;
      $this->dashboard=false;
 
 
 }
 
 function dashboard()
 {
      $this->plans=false;
      $this->blogs=false;
      $this->payroll=false;
      $this->invoice=false;
      $this->dashboard=true;
 
 
 }
 
 
 
 
 
 
 
 
 
 




    public function render()
    {
        return view('livewire.userprofile');
    }
}
