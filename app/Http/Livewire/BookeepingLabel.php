<?php

namespace App\Http\Livewire;
use App\Models\psetting;
use App\Models\bookeepings;
use App\Models\labels;

use Livewire\Component;

class BookeepingLabel extends Component
{

	public $a,$b,$c,$d,$e,$psetting,$sub_id,$label_names;

  
    public function mount($sub_id)
    {

       $this->sub_id=$sub_id;


    

           $data=  psetting::where('label_id',$this->sub_id)->first();

    
        if(empty($data)){}

        else
        {
        $this->a =$data->a;
        $this->b =$data->b;
        $this->c =$data->c;
        $this->d =$data->d;
        $this->e =$data->e;
        }
        
    }
    public function render()

    {




      $this->label_names=labels::where('subcat_id',$this->sub_id)->get();
        return view('livewire.bookeeping-label');
    }









}
