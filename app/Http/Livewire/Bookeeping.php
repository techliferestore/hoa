<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Bookeeping extends Component
{

public $service_names,$service_inc,$service_des,$tc;

    public function render()
    {

        return view('livewire.bookeeping');
    }

 


}
