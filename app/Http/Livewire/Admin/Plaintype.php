<?php

namespace App\Http\Livewire\Admin;
use App\Models\service_subcategories;
use App\Models\monthly_tran;
use App\Models\plain_type;

use App\Models\labels;
use App\Models\fix_plain;
use Livewire\Component;

class Plaintype extends Component
{




   public $label,$fix_plain_id,$listsubcategory,$labels,$sub_name,$lab_id,$categories,$category_id,    $subcategories,$selectedCategory;

   public $plain_type_name,$plain_price,$plain_title,$plain_des;






 public function mount()

   {


       $this->categories = monthly_tran::all();

       $cat= $this->subcategories = collect();
//dd(  $this->categories );
      



   }


public function updatedSelectedCategory($category)

   {

       if (!is_null($category)) {

           $this->subcategories = fix_plain::where('monthly_tran_id', $category)->get();

       }

   }


public function storelabel()
{

  //$subcat_id=$this->subcat_id;

$validatedData = $this->validate([

       'plain_type_name' => 'required',
  'plain_price'=>'required',
   'plain_title'=>'required',
   'plain_des'=>'required',
       'fix_plain_id' => 'required',        

   ]);

  


plain_type::Create($validatedData 

   );

     session()->flash('submessage', 'plain type Successfully added.');

     $this->reset();


}


public function edit($lab_id)
{  

 $plaintype=plain_type::findOrFail($lab_id);

   $this->lab_id=$lab_id;

$this->plain_type_name=$plaintype->plain_type_name;
$this->plain_price=$plaintype->plain_price;
$this->plain_title=$plaintype->plain_title;
$this->plain_des=$plaintype->plain_des;
$this->fix_plain_id =$plaintype->fix_plain_id ; 
}





public function deletelab($id)
{
   plain_type::find($id)->delete();

           session()->flash('deletelab', ' Deleted Successfully.');
}
    public function render()
    {

        $this->categories =  monthly_tran::all();

        $this->labels=plain_type::where('fix_plain_id',$this->fix_plain_id)->get();

        return view('livewire.admin.plaintype');
    }
}
