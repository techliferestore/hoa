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
                        $cat=App\Models\monthly_tran::find($category_id);
                    if (empty($cat)) {
                    
                    } else {
                      
                        $cat_name=$cat->trn_name;
                    }
                    
                    }
                    
                       
                    @endphp

                   
                  
                      <h5 class="modal-title" id="exampleModalLabel"><br> add sub heads under  
                         @if (empty($cat_name))    
                        @else
                        {{$cat_name}}  
                        @endif </h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                   
                    <div class="modal-body py-5 text-align-center">
                        <span class="text_pop">type your service name</span>

                    <form method="post" action="{{route('admin.addfixplain')}}" >
                                @csrf 
                             
                      <input  name="plain_name" type="text" class="text_inputpop">
                      @error('subcategory')<span class="text-danger">{{$message}}</span>@enderror   
                      
                      <input type="hidden" name="monthly_tran_id" value="{{$category_id}}">
                    </div>  
                  
                      <button  type="button" class="btn btn_popdone">Add</button>
                      <button type="submit"  class="btn btn_popadd"  data-bs-dismiss="modal">Done</button>
                    </form>
                      <br>
                      @if (session()->has('subcategory'))
                      <div style="color:green ;">
                      {{ session('subcategory') }}
                      </div>
                      @endif
                  </div>

             
                </div>
           
              </div>

        <form class="d-flex" wire:submit.prevent="storecat()" >
            <select
            class="form-select hoa_admin-servBookkeeping-PriceSetting-leftTextBox-values form_input" style="width: 411px; height: 41px; background-color: #F6F6F6; color: #a9a9a9;"
            wire:model.lazy="category_id"   aria-label="LegalStatus">
            <option  selected>Monthly transaction name</option>
            @forelse ($listcategory as $item)
      
            <option value="{{$item->id}}">{{$item->trn_name}}  </option>    
            @empty
                no category
            @endforelse  
        </select>
      
            <input type="text" class="text_cont" wire:model.lazy="trn_name" style="border: 0.5px solid #FBA43F;" >
         
            <button class="btn_add"  type="submit">Add</button> 
       
          </form>
          @error('cat')<span class="text-danger">{{$message}}</span>@enderror
         </div>

         <br><br><br><br>
       
@php

if (empty($category_id)) {
    # code...
} else {
    $cat=App\Models\monthly_tran::find($category_id);
if (empty($cat)) {

} else {
  
    $cat_name=$cat->trn_name;

       $cat_id=$cat->id;
    
}

}

   
@endphp

<div class="accounting_option">
    <span class="bt_account"> @if (empty($cat_name)) 
       <img src="assets/icons/threeDots.svg" onclick="" /></span>   
        @else
        {{$cat_name}} 
          <button  class="btn btn-danger" wire:click="deletecat({{ $cat_id }})">  
     delete   </button> 
<button class="btn btn-info" wire:click="editcat({{$cat_id}})">     Edit </button> 
         @if (session()->has('deletecat'))
                      <div style="color:green ;">
                      {{ session('subcategory') }}
                      </div>
                      @endif
    <span class="bt_image"><img src="assets/icons/threeDots.svg" onclick="" /></span>
  
        <div class="col-11" style="width: 70%; margin-left: 20px;">
                   
@php

if (empty($category_id)) {
    # code...
} else {
    $subcats=App\Models\fix_plain::where('monthly_tran_id',$category_id)->get();
if (empty($subcats)) {

} else {
   $subcats;
}

}

   
@endphp




@forelse ($subcats as $subcat)

<div class="row mt-2 hoa_admin-middle-row">
<div class="hoa_admin-middle-row-serviceName"> 



 {{$subcat->plain_name}} 



  <button class="btn btn-info" wire:click="edit({{ $subcat->id }})">

  Edit </button>




  <button class="btn btn-danger" wire:click="deletesub({{ $subcat->id }})">
     Delete </button>

</div>
 @if (session()->has('deletesub'))
                      <div style="color:green ;">
                      {{ session('subcategory') }}
                      </div>
                      @endif

</div>
@empty
    
@endforelse

    
   

            

    </div>

    @if(!empty($subcatedit))

     <form class="d-flex">
           
      
            <input type="text" class="text_cont" wire:model.lazy="subcatedit" style="border: 0.5px solid #FBA43F;" >
         
            <button class="btn_add" wire:click="updatesubcat()"  type="button">submit</button> 
       
          </form>

    @else

   

@endif

    @endif
    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
    +add sub heads
                </button>
  
</div>


</div>

</div>






<div class="col-3 ">
    <div class="mt-4 hoa_admin-serviceHead-heading"></div>
    <div class="mt-4" style="margin-left: 10px;">

        
        <button class="btn_04" style="text-align: left; font-size: 13px; font-weight: 500; padding-left: 10px; background-color: #01655E; color: #fff; font-family:'Inter';">

 <a href=" {{route('servicecategory')}} ">  Categories</a>
       </button>
        <br><br>
        <button class="btn_03" style="text-align: left; padding-left: 10px; font-size: 13px; font-weight: 500;">   <a href=" {{route('admin.plaintype')}} "> Plain Type </a></button>
      
        <br><br>
        <button class="btn_04" style="text-align: left; font-size: 13px; font-weight: 500; padding-left: 10px; ">   <a href=" {{route('plain_label')}} "> Fix Plain Label </a></button>
        
        



    </div>
</div>
