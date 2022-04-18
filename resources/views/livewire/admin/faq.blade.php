<div>
@if (session()->has('message'))
<div class="alert alert-success">
{{ session('message') }}
</div>
@endif

<form >
 
 @csrf
                         
                                    
         <select class="form-select form-select-lg mb-3" wire:model="cat_id"  aria-label=".form-select-lg example">
<option selected>Choose Blog Category </option>
@foreach($category as $cat)
<option value="{{$cat->id}}">{{$cat->tile}}</option>
@endforeach
</select>
<br>  

@if (!is_null($cat_id))

@php


$blog_id=App\Models\BlogCategory::where('category_id',$cat_id)->get();
$b_id=$blog_id->pluck('blog_id')->toArray();
$blog=App\Models\Blog::find($b_id);


       @endphp
<select class="form-select form-select-lg mb-3" wire:model="blog" aria-label=".form-select-lg example">
     
<option selected>Choose Blog title Faq</option>
@forelse ($blog as $item)
<option value="{{ $item->id}}">{{ $item->tile }}</option>

@empty
    No blog found
@endforelse

</select>
    @endif             
<br>                 
    
<label>Faq Question / Answer</label>          
   

<div class=" add-input">
<div class="row">
<div class="col-md-5">
<div class="form-group">
<input type="text" class="form-control" placeholder="Question " wire:model="question.0">
@error('question.0') <span class="text-danger error">{{ $message }}</span>@enderror
</div>
</div>
<div class="col-md-5">
<div class="form-group">
<input type="email" class="form-control" wire:model="answer.0" placeholder="Answer">
@error('answer.0') <span class="text-danger error">{{ $message }}</span>@enderror
</div>
</div>
<div class="col-md-2">
<button class="btn text-white btn-info btn-sm" wire:click.prevent="add({{$i}})">Add</button>
</div>
</div>
</div>
@foreach($inputs as $key => $value)
<div class=" add-input">
<div class="row">
<div class="col-md-5">
<div class="form-group">
<input type="text" class="form-control" placeholder="Enter Name" wire:model="question.{{ $value }}">
@error('question.'.$value) <span class="text-danger error">{{ $message }}</span>@enderror
</div>
</div>
<div class="col-md-5">
<div class="form-group">
<input type="text" class="form-control" wire:model="answer.{{ $value }}" placeholder="Enter Email">
@error('answer.'.$value) <span class="text-danger error">{{ $message }}</span>@enderror
</div>
</div>
<div class="col-md-2">
<button class="btn btn-danger btn-sm" wire:click.prevent="remove({{$key}})">remove</button>
</div>
</div>
</div>
@endforeach
<div class="row">
<div class="col-md-12">
<button type="button" wire:click.prevent="store()" class="btn btn-success btn-sm">Save</button>
</div>
</div>
</form>
</div>













