<?php

namespace App\Http\Livewire\Admin;
use App\Models\subcategories;
use App\Models\category;
use Illuminate\Support\Str;

use Livewire\Component;

class Subcategory extends Component
{
    public $allsubcategories,$allcategories;
    public $selectcategory,$subcat,$answer,$sub_title,$sub_des,$sub_keywords,$sub_header,$subcat_id;


    public function render()
    {
        $this->allsubcategories=subcategories::all();
        $this->allcategories=category::all();
        
        return view('livewire.admin.subcategory');
    }

 public function addsubcategory( )
{


    
    $validatedDate = $this->validate([
 
         
        'selectcategory'=>'required',
        'subcat'=>'required',
      

         
         ]);
        // dd($validatedDate);
  
         $slug = Str::of($this->subcat)->slug('-');
   //dd($slug);
         $post =subcategories::updateOrCreate(['id'=>$this->subcat_id],[

            'cat_id'=>$this->selectcategory,
            'sub_name'=>$this->subcat,
            'slug'=>$slug,
            
          'status'=>1,
          
         ]);

         session()->flash('message', 'Category added Successfully.');

}


public function deletecat($subcat_id)

{
  
  subcategories::find($subcat_id)->delete();

    session()->flash('delmessage', 'Post Deleted Successfully.');

}

public function editcat($subcat_id)

{
      $category=subcategories::find($subcat_id);

      $this->subcat_id=$subcat_id;
      $this->subcat=$category->sub_name;
      $this->selectcategory=$category->category_id;
    
     
}
}
