<?php

namespace App\Http\Livewire;
use App\Models\psetting;
use App\Models\lsetting;
use App\Models\labels;

use App\Models\package_price;

use Livewire\Component;

class FrontBookSearch extends Component
{


public $nature,$industry,$transactions,$turnover,$result,$label_names,$list;
public $sub_id;
public $legal=[];

    public function mount($sub_id)
    {

       $this->sub_id=$sub_id;

   }


    public function render()
    {
    	$label=psetting::all();

        $this->label_names=labels::where('subcat_id',$this->sub_id)->get();
        return view('livewire.front-book-search',compact('label'));
    }

 

public function searchlabel()

{

  
$datavalidation=$this->validate([

            'legal' => 'required',    
                             

        ]);

     

foreach (   $this->legal as $key => $legal_id)
{

    


$res=lsetting::where('sub_id', $this->sub_id)
->where('legal',$legal_id)

->first();

}


$result=package_price::where( 'id', $res->package_id)->get();

//all data fetch show livewire component front-book-search.blade.php

$this->result=$result;
//dd($result);


}


}
