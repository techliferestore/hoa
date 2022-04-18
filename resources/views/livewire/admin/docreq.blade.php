<div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Document Required</label><br>
        <input class="form-control" wire:model="doc_required" type="text" placeholder="Service Name"  aria-label="default input example">
     @error('doc_required')
     <span class="text-danger">{{$message}}</span>
     @enderror

     <label for="exampleFormControlInput1" class="form-label">Template Upload</label><br>
        <input class="form-control" wire:model="template" type="file" placeholder="Service Name"  aria-label="default input example">
     @error('template')
     <span class="text-danger">{{$message}}</span>
     @enderror
        <br> <button type="button" wire:click.prevent="store($user_id='1')" class="btn btn-primary">submit</button>
      </div>

      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Document Required</label>
<ul>
  
@forelse ($doc as $reqdoc )
<div class="dropdown mt-2" >
  <button class="btn btn-secondary dropdown-toggle" style="width: 66%;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    
  
    {{$reqdoc->doc_required}} <button  wire:click.prevent="delete($id='{{$reqdoc->id}}')" type="button" class="btn btn-danger">Del</button><br>
  </button>

@if ($reqdoc->template == 0)

@else
<a href="{{asset('/')}}storage/{{$reqdoc->template}} " download="{{asset('/')}}storage/{{$reqdoc->template}}"><button class="learn_mOre download_brochure">Template </button></a>

@endif
  

 
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

  @php
  $uploaded_file= App\Models\upload_doc::where('doc_req_id',$reqdoc->id)->get();
   @endphp

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Download</th>
      <th scope="col">Delete</th>
      <th scope="col">Review</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
@forelse (  $uploaded_file as $file )


    <tr>
      <th scope="row">{{$file->id}}</th>
      <td> {{$file->id}}_{{$file->name}}   </td>
      <td> <a href="{{asset('/')}}storage/{{$file->file_name}} " download="{{asset('/')}}storage/{{$file->file_name}}"><button class="learn_mOre download_brochure">Download </button></a>
      </td>
      <td> <button  wire:click.prevent="imgdelete($id='{{$file->id}}')" type="button" class="btn btn-danger">Del</button></td>
      <td> <button type="button"  wire:click.prevent="edit($id='{{$file->id}}')" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Add Remarks
      </button></td>
      <td> <button  wire:click.prevent="imgdelete($id='{{$file->id}}')" type="button<button  wire:click.prevent="imgdelete($id={{$file->id}})" type="button" class="btn btn-danger">Del</button></td>" class="btn btn-success">Approve</button></td>

    </tr>
    
  
<div class="mt-2">
  
  
</div>

@empty
  
@endforelse
</tbody>
</table>

  </div>
</div>











@empty

@endforelse


<div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Document Review</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Add Remark</label>
          <textarea class="form-control" wire:model="comment" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
      

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" wire:click.prevent="update($docid='{{$post_id}}')" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>




</ul>
    </div>
</div>
