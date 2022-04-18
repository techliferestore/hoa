    <div class="col-7">

    	  @if (session()->has('submessage'))
                      <div style="color:green ;">
                      {{ session('submessage') }}
                      </div>
                      @endif
                <div class="col-11 m-auto">
                    <div class="input_control" style="margin-top: 40px;">
                    <form >


        <form>
<div class="row">
          <div class="form-group">
                <select
                class="form-select hoa_admin-servBookkeeping-PriceSetting-leftTextBox-values form_input" style="width: 411px; height: 41px; background-color: #F6F6F6; color: #a9a9a9;"
              wire:model="selectedCategory"  aria-label="LegalStatus">
                <option >Head Categories</option>
                <option>Choose category</option>
                @foreach ($categories as $item)
                <option value="{{$item->id}}">{{$item->category}}  </option>    
             
                @endforeach  
            </select>

              </div>
            </div>
           
                        @if (!is_null($selectedCategory)) 
                        <div class="row">  <div class="form-group">   <select
            class="form-select hoa_admin-servBookkeeping-PriceSetting-leftTextBox-values form_input" style="width: 411px; height: 41px; background-color: #F6F6F6; color: #a9a9a9;"
            wire:model.lazy="subcat_id"   aria-label="LegalStatus">
            <option  selected>Services Sub-Categories</option>
            @forelse (    $subcategories as $item)
            <option value="{{$item->id}}">{{$item->subcategory}}  </option>    
            @empty
                no category
            @endforelse 

            </select>
</div>
                        </div>
                      <div class="form-group">
                        <input type="text" wire:model.lazy="label" class="text_cont" style="border: 0.5px solid #FBA43F;" >
  @error('label')<span class="text-danger">{{$message}}</span>@enderror

                        <button class="btn_add" wire:click="storelabel()" type="button">Add</button> 
                  @endif    </form>
                   
                        </div>
            


                  
@php

if (empty($subcat_id)) {
    # code...
} else {
    $cat=App\Models\service_subcategories::find($subcat_id);
if (empty($cat)) {

} else {
  
    $sub_name=$cat->subcategory;
    
    
}

}

   
@endphp




<br><br><br>

	  @if (session()->has('deletelab'))
                      <div class="text-danger">
                      {{ session('deletelab') }}
                      </div>
                      @endif

    <span class="bt_account"> {{ $sub_name}}
    	    <div class="row">
                       
                          <span class="lable_name">Label name</span>
                      
                      </div>
                     <div class="row">
                          <div class="col-12">
@forelse($labels as $lab)

  <div class="border_linetext">
                                <span class="legal_stat">
     {{$lab->label}}  <button class="btn btn-info" wire:click="edit({{ $lab->id }})">

Edit</button>


<button  class="btn btn-danger" wire:click="deletelab({{ $lab->id}})">
      Delete </button> <span class="fill_circle"><i class="bi bi-circle-fill"></i></span></span>
                            </div>
                            <br>
                             <br>


   
    <span class="bt_image"><img src="assets/icons/threeDots.svg" /></span>
  
@empty
        <span class="bt_image"><img src="assets/icons/threeDots.svg"  /></span>   


@endforelse
    	
                           



                       
                            <div class="row">
                                <div class="col-12 text-align-center">
                            <button class="btn-change">Save Changes</button>
                               </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <!--middle block / section ends here-->


            
                      
               

            <!--rightmost(third) block / section start here-->
            <div class="col-3 ">
                <div class="mt-4 hoa_admin-serviceHead-heading"></div>
                <div class="mt-4" style="margin-left: 10px;">

                    
                    <button class="btn_03" style="text-align: left; padding-left: 10px; font-size: 13px; font-weight: 500;" >

 <a href=" {{route('servicecategory')}} ">  Categories</a>
       </button>
        <br><br>
        <button class="btn_04" style="text-align: left; font-size: 13px; font-weight: 500; padding-left: 10px; background-color: #01655E; color: #fff; font-family:'Inter';">   <a href=" {{route('addlabel')}} "> Label Settings </a></button>
      
     

                 
                </div>
            </div>




             

