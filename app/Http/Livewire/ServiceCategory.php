<?php

namespace App\Http\Livewire;
use App\Models\service_categories;
use App\Models\service_subcategories;
use Illuminate\Support\Str;
use Livewire\Component;

class ServiceCategory extends Component
{
    public $cat,$cat_id,$listcategory;
    public $category_id,$subcat,$subcat_id,$subcatedit;
    public $subcategories = [];

    public function render()
    {
        $this->listcategory=service_categories::all();
     
        return view('livewire.service-category');
    }

   
    
    public function deletecat($id)
    
    {
    
        service_categories::find($id)->delete();
        //package_price::where('product_id',$id)->delete();
    
        session()->flash('deletecat', 'Post Deleted Successfully.');
    
    }


  public function deletesub($id)
    
    {
    
        service_subcategories::find($id)->delete();
        //package_price::where('product_id',$id)->delete();
    
        session()->flash('deletesub', 'Post Deleted Successfully.');
    
    }

      public function editcat($cat_id)
    
    {
    
         $catshow=service_categories::findOrFail($cat_id);

    $this->cat_id=$cat_id;

$this->cat=$catshow->category;
    
    }


public function storecat()
{



    $validatedDate = $this->validate([

        'cat' => 'required'        

    ]);


    $slug = Str::of($this->cat)->slug('-');

   //dd($validatedDate);


    service_categories::updateOrCreate(['id'=> $this->cat_id],[
        
        
        
        'category'=>$this->cat,

        
        'slug'=>$slug,



    ]);






    session()->flash('message', 'category Created Successfully.');


    $this->reset();
  

}


 public function edit($id)

    {
      
   

    $post=service_subcategories::where('id',$id)->first();
    
//dd($post);



     $this->subcatedit=$post->subcategory;


   $this->subcat_id=$post->id;
 
    
    
        //$this->updateMode = true;
    
    }




          public function addsubcategory()
    {
        $this->subcategories[] = count($this->subcategories);
    }
    

public function updatesubcat()
{

   

    $validatedDate = $this->validate([

    
        'subcatedit' => 'required'          
    
    ]);

    $slug = Str::of($this->subcatedit)->slug('-');



    service_subcategories::updateOrCreate(['id'=>$this->subcat_id],[
        
  
        'subcategory'=>$this->subcatedit,
        'slug'=>$slug,
        ]);






    session()->flash('editsubcategory', 'Subcategory Created Successfully.');


    $this->reset();
  

}


}
