<?php

namespace App\Http\Livewire\Front;
use App\Models\monthly_tran;
use App\Models\fix_plain;
use Livewire\Component;
use Livewire\WithPagination;

class Fixplain extends Component
{
    use WithPagination;
    public $cats;
    public $blog_id,$fixplain_name;
    public $monthly_transaction_name;





    public function render()
    {
        $searchTerm = '%'.$this->blog_id.'%';
      
        $this->monthly_transaction_name = monthly_tran::all();
        $this->fixplain_name=fix_plain::where('monthly_tran_id','like', $searchTerm)->get();
        return view('livewire.front.fixplain');
    }

    public function blogid($id)
    {
       // dd($id);
$this->blog_id=$id;

    }

}
