        
  

  <div class="col-7">
    <div class="col-11 m-auto">
  
        <div class="input_control" style="margin-top: 40px;">
            @if (session()->has('message'))
            <div id="successMessage" style="color:green ;">
            {{ session('message') }}
            </div>
            @endif

            <div class="modal fade"  id="modal-default" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    @php

                    if (empty($category_id)) {
                        # code...
                    } else {
                        $cat=App\Models\service_categories::find($category_id);
                    if (empty($cat)) {
                    
                    } else {
                      
                        $cat_name=$cat->category;
                    }
                    
                    }
                    
                       
                    @endphp

                   
                  
                      <h5 class="modal-title" id="exampleModalLabel"><br> add sub heads under   @if (empty($cat_name))    
                        @else
                        {{$cat_name}}  
                        @endif </h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                   
                    <div class="modal-body py-5 text-align-center">
                        <span class="text_pop">type your service name</span>

                    <form method="post" action="{{route('addsubcat')}}" >
                                @csrf 
                             
                      <input  name="subcategory" type="text" class="text_inputpop">
                      @error('subcategory')<span class="text-danger">{{$message}}</span>@enderror   
                      
                      <input type="hidden" name="cat_id" value="{{$category_id}}">
                    </div>  
                  
                      <button  type="button" class="btn btn_popdone">Add</button>
                      <button type="submit"  class="btn btn_popadd"  data-bs-dismiss="modal">Done</button>
                    </form>
                      <br>
                      @if (session()->has('deletesub'))
                      <div style="color:green ;">
                      {{ session('subcategory') }}
                      </div>
                      @endif
                      @if (session()->has('subcategory'))
                      <div style="color:green ;">
                      {{ session('subcategory') }}
                      </div>
                      @endif
                  </div>

             
                </div>
           
              </div>

        <form class="d-flex"  >
            <select
            style="font-family: 'Inter';
            font-style: normal;
            font-weight: 500;
            font-size: 19px;
            color: #000000;
            /* background: #F7F7F7; */
            border: 0.5px solid #075A5A;
            box-sizing: border-box;
            border-radius: 4px;"
            wire:model.lazy="category_id"   aria-label="LegalStatus">
            <option  selected>Head Categories</option>
            @forelse ($listcategory as $item)
            <option value="{{$item->id}}">{{$item->category}}  </option>    
            @empty
                no category
            @endforelse  
        </select>
        <button 
        type="button"
        style="
        height: 41px;
        width: 138px;
        left: 491px;
        top: 54px;
        border-radius: 5px;
        padding: 12px, 10px, 12px, 10px;
        background: #FBA43F;
        color: #fff;
        font-size: 15px;
        font-weight: 500;
        margin-left:17px;

        border: none;" 
        data-toggle="modal" data-target="#modal-warning"
        >+Add New Head</button>
        
       
          </form>

          <div  wire:ignore.self class="modal fade" id="modal-warning">
            <div class="modal-dialog">
              <div class="modal-content bg-warning">
                <div class="modal-header">
                  <h4 class="modal-title">Main Category</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                 <input type="text" style="width: 100%" wire:model.lazy="cat" style="border: 0.5px solid #FBA43F;" >
         
                
                  @error('cat')<span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Close</button>
                  <button type="button" wire:click.prevent="storecat()" class="btn btn-outline-dark">Add</button>
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>
          <!-- /.modal -->
         
         </div>

         <br><br><br><br>
       
@php

if (empty($category_id)) {
    # code...
} else {
    $cat=App\Models\service_categories::find($category_id);
if (empty($cat)) {

} else {
  
    $cat_name=$cat->category;
       $cat_id=$cat->id;
    
}

}

   
@endphp


<div class="card">
    <div class="card-header">

@if (empty($cat_name)) 
     


@else

<h3 class="card-title">{{$cat_name}} </h3>
  <button  class="btn btn-danger" wire:click="deletecat({{ $cat_id }})">



d  </button> </span>
<button class="btn btn-info" wire:click="editcat({{$cat_id}})">     Edit </button> 
 @if (session()->has('deletecat'))
              <div style="color:green ;">
              {{ session('subcategory') }}
              </div>
              @endif
    </div>


    <!-- /.card-header -->
    <!-- /.card-header -->
    <div class="card-body p-0">
      <table class="table table-sm">
        <thead>
          <tr>
            <th style="width: 10px">#</th>
            <th>Main Category</th>
            <th>Delete</th>
            <th>Edit</th>
            <th style="width: 40px">Label</th>
          </tr>
        </thead>
        <tbody>
                          
@php

if (empty($category_id)) {
    # code...
} else {
    $subcats=App\Models\service_subcategories::where('category_id',$category_id)->get();
if (empty($subcats)) {

} else {
   $subcats;
}

}

   
@endphp

@forelse ($subcats as $subcat)
            <tr>
            <td>1.</td>
            <td> {{$subcat->subcategory}} </td>
            <td>
                <span class="badge bg-danger"  wire:click="deletesub({{ $subcat->id }})"> del</span>
              </div>
            </td>
            <td><span class="badge bg-primary"  wire:click="edit({{$subcat->id}})"> edit</span></td>

            <td><span class="badge bg-primary"> add label</span></td>

          </tr>
          @empty
    
          @endforelse

          @endif
        </tbody>
      </table>

    
@if (!empty($subcatedit))
    

     <form class="d-flex">
           
      
            <input type="text" class="text_cont" wire:model.lazy="subcatedit" style="border: 0.5px solid #FBA43F;" >
         
            <button class="btn_add" wire:click="updatesubcat()"  type="button">submit</button> 
       
          </form>
   
          @endif


 
    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
    +add sub heads
                </button>
  
</div>

    </div>
    <!-- /.card-body -->
  </div>


</div>

<div class="col-3 ">
    <div class="mt-4 hoa_admin-serviceHead-heading"></div>
    <div class="mt-4" style="margin-left: 10px;">

        
        <button class="btn_04" style="text-align: left; font-size: 13px; font-weight: 500; padding-left: 10px; background-color: #01655E; color: #fff; font-family:'Inter';">

 <a href=" {{route('servicecategory')}} ">  Categories</a>
       </button>
        <br><br>
        <button class="btn_03" style="text-align: left; padding-left: 10px; font-size: 13px; font-weight: 500;">   <a href=" {{route('addlabel')}} "> Label Settings </a></button>
      
     



    </div>
</div>
