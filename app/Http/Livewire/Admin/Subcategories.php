<?php

namespace App\Http\Livewire\Admin;
use App\Models\category;
use App\Models\subcategory;

use Livewire\Component;


class Subcategories extends Component
{


    public $topic,$categories,$title,$time,$category,$summary;
    public $sub_name,$cat;


    public function render()
    {
        $this->categories = category::all();
        return view('livewire.admin.subcategories');
    }



public function store_subcat()
{
	$validatedDate = $this->validate([

            'cat' => 'required',
            'sub_name' => 'required'        

        ]);

       


        subcategories::create([
            
            'sub_name'=>$this->sub_name,
            'cat_id'=>$this->cat
        
        
        ]);





        session()->flash('submessage', 'category Created Successfully.');

  

       
        
}





}
