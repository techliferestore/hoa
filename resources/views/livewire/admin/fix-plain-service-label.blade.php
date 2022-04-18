<div>
    @if (session()->has('message'))
    <div class="alert alert-success">
    {{ session('message') }}
    </div>
    @endif
    
    <form >
     
     @csrf
                             
                                        
             <select class="form-select form-select-lg mb-3" wire:model="cat_id"  aria-label=".form-select-lg example">
    <option selected>Choose monthly transaction name </option>
    @foreach($category as $cat)
    <option value="{{$cat->id}}">{{$cat->trn_name
    }}</option>
    @endforeach
    </select>
    <br>  
    
    @if (!is_null($cat_id))
    
    @php
    
    
    $blog=App\Models\fix_plain::where('monthly_tran_id',$cat_id)->get();
  
    
    
           @endphp
    <select class="form-select form-select-lg mb-3" wire:model="blog" aria-label=".form-select-lg example">
         
    <option selected>Choose Fix Plain</option>
    @forelse ($blog as $item)
    <option value="{{ $item->id}}">{{ $item->plain_name}}</option>
    
    @empty
        No blog found
    @endforelse
    
    </select>
        @endif             
    <br>                 
        
    <label>Service includes</label>          
       
    
    <div class=" add-input">
    <div class="row">
    <div class="col-md-8">
    <div class="form-group">
    <input type="text" class="form-control" placeholder="Service Name " wire:model="service_label.0">
    @error('question.0') <span class="text-danger error">{{ $message }}</span>@enderror
    </div>
    </div>
   
    <div class="col-md-4">
    <button class="btn text-white btn-info btn-sm" wire:click.prevent="add({{$i}})">Add</button>
    </div>
    </div>
    </div>
    @foreach($inputs as $key => $value)
    <div class=" add-input">
    <div class="row">
    <div class="col-md-8">
    <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter Name" wire:model="service_label.{{ $value }}">
    @error('question.'.$value) <span class="text-danger error">{{ $message }}</span>@enderror
    </div>
    </div>
   
    <div class="col-md-4">
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


<div class="col-3 ">
    <div class="mt-4 hoa_admin-serviceHead-heading"></div>
    <div class="mt-4" style="margin-left: 10px;">

        
        <button class="btn_04" style="text-align: left; font-size: 13px; font-weight: 500; padding-left: 10px;   font-family:'Inter';">

 <a href=" {{route('package-setting')}} "> Monthly transaction name </a>
       </button>
        <br><br>
        <button class="btn_03" style="text-align: left; padding-left: 10px; font-size: 13px; font-weight: 500;">   <a href=" {{route('admin.plaintype')}} "> Plain Type </a></button>
      
        <br><br>
        <button class="btn_04" style="text-align: left; font-size: 13px; font-weight: 500; padding-left: 10px; ">   <a href=" {{route('plain_label')}} "> Fix Plain Label </a></button>
        
        



    </div>
</div>

    </div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    