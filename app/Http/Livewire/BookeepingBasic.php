<?php

namespace App\Http\Livewire;
use App\Models\bookeepings;
use Livewire\Component;

class BookeepingBasic extends Component
{

	public $service_names,$service_inc,$service_des,$tc,$sub_id;

    public function mount($sub_id)
    {


$this->sub_id=$sub_id;



        $data=  bookeepings::where('sub_id',$this->sub_id)->first();
        //dd($data);
        if(empty($data)){}

        else
        {
        $this->service_names =$data->service_names;
        $this->service_des =$data->service_des;
        $this->service_inc =$data->service_inc;
        $this->tc =$data->tc;
     
        }
        
    }

    public function render()
    {
        return view('livewire.bookeeping-basic');
    }




    public function storebookeeping()
    {



     $validatedData = $this->validate([
            'service_names'=>'required' ,
             'service_des' => 'required|max:250',
              'service_inc'=> 'required', 
               'tc' => 'required',
                    'sub_id' => 'required',

        ]);

//dd(   $validatedData);


       bookeepings::create($validatedData);

        session()->flash('message', ' Created Successfully.');

    }

}
