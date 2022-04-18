<?php

namespace App\Http\Livewire\Admin;
use App\Models\service_categories;
use App\Models\service_subcategories;
use App\Models\monthly_tran;
use App\Models\fix_plain;
use Livewire\Component;

class PackageSetting extends Component
{


    public $cat,$cat_id,$listcategory;
    public $category_id,$subcat,$subcat_id,$subcatedit;
    public $subcategories = [];
    public $trn_name;

   
  


  public function deletesub($id)
    
    {
    
      fix_plain::find($id)->delete();
        //package_price::where('product_id',$id)->delete();
    
        session()->flash('deletesub', 'Post Deleted Successfully.');
    
    }

      public function editcat($cat_id)
    
    {
        //dd($cat_id);
    
         $catshow=monthly_tran::findOrFail($cat_id);

    $this->cat_id=$cat_id;

$this->trn_name=$catshow->trn_name;
    
    }


    public function deletecat($cat_id)
    
    {
    
   
        monthly_tran::find($cat_id)->delete();
        //package_price::where('product_id',$id)->delete();
    
        session()->flash('deletecat', 'Post Deleted Successfully.');
    
    }

public function storecat()
{



    $validatedDate = $this->validate([

        'trn_name' => 'required'        

    ]);


    //$slug = Str::of($this->cat)->slug('-');

   //dd($validatedDate);


   monthly_tran::updateOrCreate(['id'=> $this->cat_id],[
        
        
        
        'trn_name'=>$this->trn_name,

        
      



    ]);






    session()->flash('message', 'monthly transaction name Created Successfully.');


    $this->reset();
  

}


 public function edit($id)

    {
      
   

    $post=fix_plain::where('id',$id)->first();
    
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


    public function render()
    {

        $this->listcategory=monthly_tran::all();
     
        return view('livewire.admin.package-setting');
    }
}
