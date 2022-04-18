<?php

namespace App\Http\Livewire\Admin;
use App\Models\doc_req;
use App\Models\upload_doc;
use Livewire\Component;
use Livewire\WithFileUploads;

class Docreq extends Component
{
    use WithFileUploads;
    public $doc_required,$user_id,$doc,$comment,$post_id,$template;
    public $updateMode = false;

    public function render()
    {
        $this->doc=doc_req::all();

        return view('livewire.admin.docreq');
    }

    public function store( $user_id){

        $validatedDate = $this->validate([

            'doc_required' => 'required',
                 
      
    
        ]);
if(!empty($this->template)){
     $template=$this->template->store('template', 'public');
}
else
{
    $template='0';

}
             doc_req::create(['doc_required' => $this->doc_required,
        'user_id' => $user_id,
    'template'=>$template,
    
    
    ]);

        session()->flash('message', ' Created Successfully.');


        $this->reset();

    }    
  
    public function delete($id)
    {
        doc_req::find($id)->delete();
    
                session()->flash('del', ' Deleted Successfully.');
    }

      
    public function imgdelete($id)
    {
        upload_doc::find($id)->delete();
    
                session()->flash('del', ' Deleted Successfully.');
    }


    public function update($docid)

    {

        $post = upload_doc::findOrFail($docid);

     

        $post->update([

            'comment' => $this->comment,

           
        ]);
        session()->flash('message', ' Created Successfully.');


        $this->reset();
    }

    public function edit($id)

    {

        $post = upload_doc::findOrFail($id);

        $this->post_id = $id;

       

  

    }
}
