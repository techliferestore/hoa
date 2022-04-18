<div class="col-7">

    @if (session()->has('submessage'))
                <div style="color:green ;">
                {{ session('submessage') }}
                </div>
                @endif
          <div class="col-11 m-auto">
              <div class="input_control" style="margin-top: 40px;">
              <form class="d-flex">


  <form class="d-flex"  >
      <select
      class="form-select hoa_admin-servBookkeeping-PriceSetting-leftTextBox-values form_input" style="width: 411px; height: 41px; background-color: #F6F6F6; color: #a9a9a9;"
    wire:model="selectedCategory"  aria-label="LegalStatus">
      <option >Monthly transaction name</option>
      @foreach ($categories as $item)
      <option value="{{$item->id}}">{{$item->trn_name}}  </option>    
   
      @endforeach  
  </select>
                  @if (!is_null($selectedCategory))  <select
      class="form-select hoa_admin-servBookkeeping-PriceSetting-leftTextBox-values form_input" style="width: 411px; height: 41px; background-color: #F6F6F6; color: #a9a9a9;"
      wire:model.lazy="fix_plain_id"   aria-label="LegalStatus">
      <option  selected>Fix Plain</option>
      @forelse (    $subcategories as $item)
      <option value="{{$item->id}}">{{$item->plain_name}}  </option>    
      @empty
          no category
      @endforelse 

      </select></div><br>
<div>
    <label>plain type name   </label>
    <input type="text" wire:model.lazy="plain_type_name" class="form-control" style="border: 0.5px solid #FBA43F;" >
    @error('label')<span class="text-danger">{{$message}}</span>@enderror
    
    <label>plain_price    </label>
    <input type="number" wire:model.lazy="plain_price" class="form-control" style="border: 0.5px solid #FBA43F;" >
    @error('label')<span class="text-danger">{{$message}}</span>@enderror
    <label>plain_title    </label>
    <input type="text" wire:model.lazy="plain_title" class="form-control" style="border: 0.5px solid #FBA43F;" >
    @error('label')<span class="text-danger">{{$message}}</span>@enderror
    <label>plain_des </label>
    <input type="text" wire:model.lazy="plain_des" class="form-control" style="border: 0.5px solid #FBA43F;" >
    @error('label')<span class="text-danger">{{$message}}</span>@enderror
    <br>
                      <button class="btn btn-primary" wire:click="storelabel()" type="button">Add</button> 
</div>
                
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
                 
                    <span class="lable_name">Plain type</span>
                
                </div>
               <div class="row">
                    <div class="col-12">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">fix_plain_id
                                </th>
                                <th scope="col">plain_type_name
                                </th>
                                <th scope="col">plain_price
                                </th>
                                <th scope="col">plain_title
                                </th>
                                <th scope="col">plain_des

                                </th>
                                <th scope="col">Action

                                </th>
                              </tr>
                            </thead>
                            <tbody>
@forelse($labels as $lab)

      <tr>
        <th scope="row">{{ $lab->fix_plain_id
        }}</th>
        <td>{{ $lab->plain_type_name
        }}</td>
        <td>{{ $lab->plain_price
        }}</td>
        <td>{{ $lab->plain_title
        }}</td>

        <td>{{ $lab->plain_des }}
        </td>

        <td>
            <div class="border_linetext">
                <span class="legal_stat">
<button class="btn btn-info" wire:click="edit({{ $lab->id }})">

Edit</button>


<button  class="btn btn-danger" wire:click="deletelab({{ $lab->id}})">
Delete </button> <span class="fill_circle"><i class="bi bi-circle-fill"></i></span></span>
            </div>

        </td>
      </tr>
    
   



                      <br>
                       <br>





@empty
  <span class="bt_image"><img src="assets/icons/threeDots.svg"  /></span>   


@endforelse
  
               </tbody>
  </table>       



                 
                     

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

<a href=" {{route('package-setting')}} "> Monthly transaction name</a>
 </button>
  <br><br>
  <button class="btn_04" style="text-align: left; font-size: 13px; font-weight: 500; padding-left: 10px; background-color: #01655E; color: #fff; font-family:'Inter';">   <a href=" # "> Plain type </a></button>
  <br><br>
  <button class="btn_04" style="text-align: left; font-size: 13px; font-weight: 500; padding-left: 10px;">   <a href=" {{route('plain_label')}} "> Fix Plain Label </a></button>
  
  



           
          </div>
      </div>




       

