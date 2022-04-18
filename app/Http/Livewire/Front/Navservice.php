<?php

namespace App\Http\Livewire\Front;
use App\Models\service_categories;
use Livewire\Component;

class Navservice extends Component
{

    public $listcategory;

    public function render()
    {

        $this->listcategory=service_categories::limit(4)->get();

        return view('livewire.front.navservice');
    }
}
