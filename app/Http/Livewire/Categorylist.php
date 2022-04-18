<?php

namespace App\Http\Livewire;
use App\Models\category;

use Livewire\Component;

class Categorylist extends Component
{
    


public $categories,$title,$time,$summary;



public function mount()
{

$this->title;


}

    public function render()
    {

    	 $this->categories = category::all();

        return view('livewire.categorylist');
    }



    public function delete($id)

    {
    	
      category::find($id)->delete();

        session()->flash('message', 'Post Deleted Successfully.');

    }












}
