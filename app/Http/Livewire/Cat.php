<?php

namespace App\Http\Livewire;
use App\Models\category;
use App\Models\subcategories;
use Livewire\Component;

class Cat extends Component
{

	public $topic,$categories,$title,$time,$category,$summary;
    public $sub_name,$cat,$subcat_name,$cat_name;
	
    public function render()
    {
    	 $this->categories = category::all();
        return view('livewire.cat');
    }


//add a categoy to db 

public function store_cat()
{
	$validatedDate = $this->validate([

            'topic' => 'required'        

        ]);

       


        category::create(['tile'=>$this->topic,]);

   $this->resetInputFields();




        session()->flash('message', 'category Created Successfully.');

  

       
        
}


public function store_subcat()
{
	$validatedDate = $this->validate([

            'cat' => 'required',
            'sub_name' => 'required'        

        ]);

       

//dd(	$validatedDate );
        subcategories::create([
            
            'sub_name'=>$this->sub_name,
'slug'=>$this->sub_name,

            'cat_id'=>$this->cat,
            
        
        
        ]);

   $this->resetInputFields();




        session()->flash('submessage', 'category Created Successfully.');

  

       
        
}


  private function resetInputFields(){

        $this->topic = '';

      

    }



}
