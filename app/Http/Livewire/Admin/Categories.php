<?php

namespace App\Http\Livewire\Admin;
use App\Models\category;
use Livewire\Component;
use Illuminate\Support\Str;

class Categories extends Component
{
    public $allcategories;
    public $cat_name,$meta_title,$meta_des,$meta_keyword,
    $h_des,$cat_id;

    public function render()
    {
        $this->allcategories=category::all();

        return view('livewire.admin.categories');
    }




public function addcategory( )
{


    
    $validatedDate = $this->validate([
 
         
        'cat_name'=>'required',
       
         
         ]);
  
         $slug = Str::of($this->cat_name)->slug('-');
   
         $post =category::updateOrCreate(['id'=>$this->cat_id],[

            'tile'=>$this->cat_name,
            'slug'=>$slug,
           
          
          
         ]);

         session()->flash('message', 'Category added Successfully.');

}

public function deletecat($cat_id)

{
  
  category::find($cat_id)->delete();

    session()->flash('delmessage', 'Post Deleted Successfully.');

}

public function editcat($cat_id)

{

      $category=category::find($cat_id);

      $this->cat_id=$cat_id;
      
      $this->cat_name=$category->tile;
     
  

}

}
