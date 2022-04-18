<div>
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">New Packages</h1>
        </div><!-- /.col -->
        
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
 <div class="container">
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
Add monthly transaction
  </button>

  <div class="modal fade" id="modal-default">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Add Monthly transaction</h4>
          <button type="button"  class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{route('admin.monthly-tran-name')}}" method="post">
   @csrf
            <div class="input-group mb-3">
              <input type="text"  name="trn_name" class="form-control" placeholder="Add monthly transaction">
             
            </div>
       
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
      </div>
      <!-- /.modal-content -->
    </div>
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Monthly Transaction</label>
    <select class="form-control" wire:model="monthly_name" id="exampleFormControlSelect1">
    
      <option >Choose monthly transaction </option>
      @forelse ($monthly_transaction_name as $name )
      <option value="{{$name->id}}">{{$name->trn_name}} </option>
      @empty
        
      @endforelse
     
    
   
    </select>
  </div>
  @if (!is_null($monthly_name))
    
  @php
  
  
  $blog=App\Models\fix_plain::where('monthly_tran_id',$monthly_name)->get();

  
  
         @endphp
  @php
 
    
  $fixplains=App\Models\fix_plain::where('monthly_tran_id',$monthly_name)->get();
  
         @endphp
          
        
  <div class="row m-auto">
    <div class="text-center mt-5">
        <label>  Plane Name</label>  <a href="#">add</a>
         
        
          
      
      <select  class="form-control" id="exampleInputEmail1" wire:model="fixplain_id" placeholder="Enter a Plain Name" aria-describedby="emailHelp">
      <p class="pick_plantaxt mt-3">Pick a plan that fits best with your needs.</p>
 @forelse ($fixplains as $fixplain )

 <option value="{{$fixplain->id}}">{{$fixplain->plain_name}}   </option>    
  @empty
 
 @endforelse


      </select>
    </div>
    @endif
    <div class="table-responsive m-auto py-5 ps-0 pe-0">
        <table class="table">
            <thead>
                <tr>
                  <th scope="col">
                      <span class="service_incluidesText"></span>
                  </th>
                    <th scope="col">
                        <img src="../assets/icons/ser-incl.svg" class="img-fluid" alt="">
                        <span class="service_incluidesText">Service includes</span>
                    </th>
                    @php
 
    
                    $fixplains=App\Models\plain_type::where('fix_plain_id',$fixplain_id)->get();
                    
                           @endphp
                    <th scope="col" class="Basic_textplan">              
           <select class="form-control" id="exampleInputEmail1" placeholder="Plain type" wire:model="plain_price" name="plain_1" aria-describedby="emailHelp">
            <option>Choose Plain Type</option>

          @forelse ($fixplains as $fixplain )
          <option value="{{$fixplain->id}}"> {{$fixplain->plain_type_name}} </option>  
          @empty
              
          @endforelse
          
        
        
        
        </select>
        
        
        </th>

        
        @php
 
    if (!empty($plain_price)) {
        $price=App\Models\plain_type::where('id',$plain_price)->first();

    } else {
        # code...
    }    
        
               @endphp
               
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"></th>
                   <td></td>
                    <td>
                        <div class="amount_taxtINR">  
           <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Price" name="price_1" value="@isset($price->plain_price){{$price->plain_price}} @endisset" aria-describedby="emailHelp" disabled>
                        </div>
                        <div class="per_taxtInr mt-2">                              
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Plain Title" name="plain_title_1"  value="@isset($price->plain_title){{$price->plain_title}} @endisset" aria-describedby="emailHelp" disabled  aria-describedby="emailHelp">
                        </div>
                      <div class="bestfor_text mt-2">   
       <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Plain Des" name="plain_des_1"  value="@isset($price->plain_des){{$price->plain_des}} @endisset" aria-describedby="emailHelp" disabled  aria-describedby="emailHelp">

                      </div>  
                                      </td>
                   
                </tr>
              </tbody>
            </table>
               

                @php
 
                if (!empty(  $fixplain_id )) {
                    $plain_labels=App\Models\fix_plain_service_label::where('fix_plain_id',$fixplain_id)->get();
            
                } else {
                    # code...
                }    
                    
                           @endphp
                        <form method="POST" action="{{route('storepackage')}} ">
                          @csrf  
                              
@isset($plain_labels)

  


@forelse (   $plain_labels as $key =>$plain_label )
    
<input type="hidden" value="{{$plain_label->fix_plain_id}} " name="fix_plain_id"  >

<div class="row">
  <div class="col-md-2" style="margin-bottom: 2px;">
      <input type="text"  class="form-control form-control-sm" value="{{ $plain_label->service_label}}">
  </div>
  <div class="col-md-4">
      <input type="checkbox" name="properties[{{ $key }}][value]" class="form-control form-control-sm" value="1">
  </div>
  
</div>
    
 
     
  </tr>
@empty

<tr class="table-light">
    <td>1</td>
      <th scope="row" class="basic_accounttaxt">
        <a href="">add label</a>
      </th>
     
  </tr>  


@endforelse



@endisset
  
<br>
<input type="submit">
</form>
                

              

@if (session()->has('message'))
<div style="color:green ;">
    {{ session('message') }}
</div>
@endif
       
       
    </div>
 </div>
 </div>