<?php

namespace App\Http\Livewire;
use App\Models\lsetting;
use App\Models\psetting;
use App\Models\labels;

use App\Models\bookeepings;
use App\Models\package_price;
use Livewire\Component;
use Livewire\WithPagination;
use App\User;


class BookeepingPrice extends Component
{

public $legal,$nature,$type,$transaction,$value,$mprice,$qprice,$yprice,$doc,$price;	
public $label,$price_id,$sub_id,$label_names,$list,$packages;


    use WithPagination;

    public $searchTerm;


    public function render()
    {
$searchTerm='%'.$this->searchTerm.'%';


$this->label=lsetting::where('sub_id',$this->sub_id)->get();
$this->packages=package_price::where('sub_id',$this->sub_id)->get();







      $this->label_names=labels::where('subcat_id',$this->sub_id)->get();


//$this->cases=lsetting::all();





        return view('livewire.bookeeping-price',['cases'=>package_price::where('doc','like',$searchTerm)->paginate(10)]);
    }


      public function mount($sub_id)
    {

       $this->sub_id=$sub_id;

   }


  


public function storeprice()
{


  foreach ($this->legal as $label)

     {       lsetting::Create( ['legal' =>$label,'book_id' =>$this->sub_id ]);


}





    package_price::updateOrCreate(['product_id'=> $this->price_id],[
    'price'=>$this->price, 
    'monthly'=>$this->mprice,            
    'quartely'=>$this->qprice,
    'yearly'=> $this->yprice,
    'product_id'=>$this->sub_id,

]);

$label=lsetting::all()->count();


if ($label = $label) {
    session()->flash('message', ' Updated Successfully.');
} else {
    session()->flash('message', ' Created Successfully.');
}


       

        $this->reset();

}

public function edit($id)

{
    
    $post=package_price::find($id);

    
    $this->price=$post->Price;
    $this->mprice=$post->monthly;
    $this->qprice=$post->quartely;
    $this->yprice=$post->yearly;
    $this->doc=$post->doc;

   $label=lsetting::where('package_id',$id)->get();

   


    
}

public function delete($id)

{

    package_price::find($id)->delete();
lsetting::where('package_id',$id)->delete();

    session()->flash('message', 'Post Deleted Successfully.');

}


}
