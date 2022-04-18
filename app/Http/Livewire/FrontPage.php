<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FrontPage extends Component
{

   public $plans=false;
   public $blogs=false;
   public $payroll=false;
   public $invoice=false;
   public $dashboard=false;

   public function plans()
{
     $this->plans=true;
     $this->blogs=false;
     $this->payroll=false;
     $this->invoice=false;
     $this->dashboard=false;


}

public function blog()
{
     $this->plans=false;
     $this->blogs=true;
     $this->payroll=false;
     $this->invoice=false;
     $this->dashboard=false;


}

public function payroll()
{
     $this->plans=false;
     $this->blogs=false;
     $this->payroll=true;
     $this->invoice=false;
     $this->dashboard=false;


}
public function invoice()
{
     $this->plans=false;
     $this->blogs=false;
     $this->payroll=false;
     $this->invoice=true;
     $this->dashboard=false;


}

public function dashboard()
{
     $this->plans=false;
     $this->blogs=false;
     $this->payroll=false;
     $this->invoice=false;
     $this->dashboard=true;


}

    public function render()
    {
        return view('livewire.front-page');
    }
}
