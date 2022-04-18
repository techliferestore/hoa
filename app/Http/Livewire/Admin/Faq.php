<?php

namespace App\Http\Livewire\Admin;
use App\Models\faq_blog;
use App\Models\BlogCategory;
use App\Models\category;
use Livewire\Component;

class Faq extends Component
{
    public $category, $question, $answer, $cat_id,$blog_id,$blog;
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
        $this->question = '';
        $this->answer = '';
    }
 
    public function store()
    {
        $validatedDate = $this->validate([
                'question.0' => 'required',
                'answer.0' => 'required',
                'question.*' => 'required',
                'answer.*' => 'required',
            ],
            [
                'question.0.required' => 'name field is required',
                'answer.0.required' => 'answer field is required',
            'answer.0.answer' => 'The answer must be a valid answer address.',
                'question.*.required' => 'name field is required',
                'answer.*.required' => 'answer field is required',
                'answer.*.answer' => 'The answer must be a valid answer address.',
            ]
        );
 
        foreach ($this->question as $key => $value) {
            faq_blog::create(['blog_id' => $this->blog,'question' => $this->question[$key], 'answer' => $this->answer[$key]]);
        }
 
        $this->inputs = [];
 
        $this->resetInputFields();
 
        session()->flash('message', 'Faq Has Been Created Successfully.');
    }

public function mount(){

    $this->category=category::all();

       
}

    
    public function render()
    {
  

        return view('livewire.admin.faq');
    }

    
}
