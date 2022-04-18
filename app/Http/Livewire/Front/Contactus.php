<?php

namespace App\Http\Livewire\Front;
use App\Models\leads;
use Livewire\Component;

class Contactus extends Component
{

    public $name,$b_mob,$email,$query;

    public function render()
    {
        return view('livewire.front.contactus');
    }

   public function create_lead()
   {

  
    $validatedData = $this->validate([
        'name'=>'required' ,
         'b_mob' => 'required',
          'email'=> 'required', 
           'query' => 'required',
               

    ]);
   
    leads::create(  $validatedData  
    );

    session()->flash('message', ' Request Successfully.');
    $this->reset();

   }

}
