<?php

namespace App\Http\Livewire\Front;
use App\Models\doc_req;
use App\Models\upload_doc;
use Livewire\WithFileUploads;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Uploaddoc extends Component
{
    use WithFileUploads;
    public $doc,$file_name,$uploaded_file,$comment,$fileid;



    public function render()
    {
        $this->doc=doc_req::all();

       // $this->uploaded_file=upload_doc::where ('user_id',Auth::user()->id)->get() ;


        return view('livewire.front.uploaddoc');
    }

    public function store( $doc_id){
       

  
        $pro=$this->file_name->store('file_name', 'public');
        upload_doc::create(['file_name' => $pro,
        'doc_req_id' => $doc_id,
        'name' => $this->file_name->getClientOriginalName(),
        'user_id' =>Auth::user()->id,
    
    
    
    ]);

        session()->flash('message', ' Created Successfully.');


       

    }


    public function edit($fileid)

    {

        $post = upload_doc::findOrFail($fileid);

$this->comment=$post->comment;

        $this->post_id = $fileid;

       

  

    }

}
