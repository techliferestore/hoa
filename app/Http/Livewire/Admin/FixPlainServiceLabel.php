<?php

namespace App\Http\Livewire\Admin;
use App\Models\faq_blog;
use App\Models\fix_plain_service_label;
use App\Models\monthly_tran;
use App\Models\category;
use Livewire\Component;

class FixPlainServiceLabel extends Component
{

    public $category, $service_label, $answer, $cat_id,$blog_id,$blog;
    public $updateMode = false;
    public $inputs = [];
    public $i = 1;
 
    public function add($i)
    {
        $i = $i + 1;
        $this->i = $i;
        array_push($this->inputs ,$i);
    }
 
    public function remove($i)
    {
        unset($this->inputs[$i]);
    }
 
   
 
    private function resetInputFields(){
        $this->service_label = '';

    
    }
 
    public function store()
    {
        $validatedDate = $this->validate([
                'service_label.0' => 'required',
           
                'service_label.*' => 'required',
               
            ],
            [
                'service_label.0.required' => 'name field is required',
               
         
                'service_label.*.required' => 'name field is required',
               
            ]
        );
 
        foreach ($this->service_label as $key => $value) {
            fix_plain_service_label::create(['fix_plain_id' => $this->blog,'service_label' => $this->service_label[$key]]);
        }
 
        $this->inputs = [];
 
        $this->resetInputFields();
 
        session()->flash('message', 'service label Has Been Created Successfully.');
    }

public function mount(){

    $this->category=monthly_tran::all();

       
}

    public function render()
    {
        return view('livewire.admin.fix-plain-service-label');
    }
}
