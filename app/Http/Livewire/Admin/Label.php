<?php

namespace App\Http\Livewire\Admin;
use App\Models\service_subcategories;
use App\Models\service_categories;
use App\Models\labels;
use Livewire\Component;

class Label extends Component
{


   public $label,$subcat_id,$listsubcategory,$labels,$sub_name,$lab_id,$categories,$category_id,    $subcategories,$selectedCategory;

    public function render()
    {


$this->categories = service_categories::all();

$this->labels=labels::where('subcat_id',$this->subcat_id)->get();

        return view('livewire.admin.label');
    }





  public function mount()

    {


        $this->categories = service_categories::all();

        $cat= $this->subcategories = collect();
//dd(  $this->categories );
       



    }


 public function updatedSelectedCategory($category)

    {

        if (!is_null($category)) {

            $this->subcategories = service_subcategories::where('category_id', $category)->get();

        }

    }


public function storelabel()
{

   $subcat_id=$this->subcat_id;
$validatedDate = $this->validate([

        'label' => 'required',

        'subcat_id' => 'required'            

    ]);

   


labels::updateOrCreate(['id'=>$this->lab_id],[
        
        
        
        'label'=>$this->label,

        
        'subcat_id'=>$subcat_id,



    ]);

   






    session()->flash('submessage', 'label Created Successfully.');




}


public function edit($lab_id)
{  

  $labshow=labels::findOrFail($lab_id);

    $this->lab_id=$lab_id;

$this->label=$labshow->label;
}





public function deletelab($id)
{
	labels::find($id)->delete();

	        session()->flash('deletelab', ' Deleted Successfully.');
}














}
