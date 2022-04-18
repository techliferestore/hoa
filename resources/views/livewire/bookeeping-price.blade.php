<div>
   <div class="row mt-5 pb-5">
      <div class="col-12">
         <form action=" {{route('psetting')}} " method="POST">
            @csrf
            @forelse ($label_names as $index => $label_name)
            <?php
               // dd($label);
            
            ?>
            <div class="col-11  mt-4" >
               <span
                  class="hoa_admin-servBookkeeping-PriceSetting-leftTextBox-ordering">&nbsp;&nbsp;
               </span>
               <input type="hidden" name="orderlabel[{{$index}}][label_id]"  value="{{$label_name->id}} ">
               <input type="hidden" name="orderlabel[{{$index}}][subcat_id]"  value="{{$label_name->subcat_id}} ">
               <select wire:model="legal.orderlabel[{{$index}}][label]" name="orderlabel[{{$index}}][label]" class="form-select hoa_admin-servBookkeeping-PriceSetting-leftTextBox-values"
                  aria-label="LegalStatus">
                  <option>{{ $label_name->label}}</option>
                  @foreach($label_name->list_lable as $label_first)
                  <option  value="{{$label_first->id}} "> {{$label_first->a}}</option>
                  @endforeach
               </select>
            </div>
            @empty
            <p>No Labe available</p>
            @endforelse
            <div class="form row mt-5 mx-2">
               <div class="col-11 m-auto display_flex-row">
                  <div class="col-12">
                     <label for="SetYourPrice">Price</label>
                     <input  name="price" wire:model="price" placeholder="value in INR." class="form-control" />
                     @error('price')<span class="text-danger">{{$message}}</span>@enderror    
                     <input type="hidden" name="subid"  value="{{$sub_id}} ">
                     <label for="SetYourPrice">Set Your Monthly Price</label>
                     <input name="mprice" wire:model="mprice" placeholder="value in INR." class="form-control" />
                     @error('mprice')<span class="text-danger">{{$message}}</span>@enderror     
                     <label for="SetYourPrice">Set Your Quarterly Price</label>
                     <input name="qprice" wire:model="qprice" placeholder="value in INR." class="form-control" />
                     @error('qprice')<span class="text-danger">{{$message}}</span>@enderror     
                     <label for="SetYourPrice">Set Your  Yearly Price</label>
                     <input name="yprice" wire:model="yprice" placeholder="value in INR." class="form-control" />
                     @error('yprice')<span class="text-danger">{{$message}}</span>@enderror     
                  </div>
               </div>
            </div>
      </div>
      <div class="col-12 mt-2" >
      <textarea rows="12" name="doc" 
         class="hoa_admin-servBookkeeping-PriceSetting-RightTextBox form-control"
         style="height: 100%;text-align: center;" wire:model="doc"
         placeholder="Add your required Documents here !"></textarea>
      @error('doc')<span class="text-danger">{{$message}}</span>@enderror     
      </div>
      <div class="col-5 mt-4 mx-3">
      <button type="submit"  style="background: #FBA43F;
      border-radius: 4px;
      font-family: 'Inter';
      font-style: normal;
      font-weight: bold;
      font-size: 15px;
      color: #FFFFFF;
      border: transparent;" class="form-control hoa_admin-servBookkeeping-PriceSetting-leftTextBox-button">Submit case</button>
      @if (session()->has('message'))
      <div style="color:green ;">
      {{ session('message') }}
      </div>
      @endif
      </div>
      </form>
   </div>
   <!--data will show here-->
   <div class="row pt-5 pb-5" style="background: #FAFAFA;border: 0.2px solid #828282;">
      <div class="col-5 m-auto">
         <input type="search"
            wire:model="searchTerm"
            class="form-control hoa_admin-servBookkeeping-PriceSetting-searchBox"
            placeholder="Search for your case by nature of business" />
      </div>
      <div class="col-11 mt-4 m-auto">
         <table class="table table-responsive">
            <thead class="table-dark">
               <tr>
                  @forelse ($label_names as $label_name)
                  <th scope="col"
                     class="hoa_admin-servBookkeeping-PriceSetting-tableHead col-md-2">
                     {{ $label_name->label}}
                  </th>
                  @empty
                  <p>No Labe available</p>
                  @endforelse
                  <th scope="col"
                     class="hoa_admin-servBookkeeping-PriceSetting-tableHead col-md-2">
                     Price
                  </th>
                  <th scope="col"
                     class="hoa_admin-servBookkeeping-PriceSetting-tableHead col-md-2">
                     Monthly Price
                  </th>
                  <th scope="col"
                     class="hoa_admin-servBookkeeping-PriceSetting-tableHead col-md-2">
                     Quarterly Price
                  </th>
                  <th scope="col"
                     class="hoa_admin-servBookkeeping-PriceSetting-tableHead col-md-2">
                     Yearly Price
                  </th>
                  <th scope="col"
                     class="hoa_admin-servBookkeeping-PriceSetting-tableHead col-md-2">
                     Action
                  </th>
               </tr>
            </thead>
            <tbody>
               @foreach($packages as $case)
               <tr>
                  @php
                  $label=App\Models\lsetting::where('sub_id',$sub_id)->where('package_id',$case->id)->get();
                  @endphp
                  @php
                  $label=App\Models\lsetting::where('sub_id',$sub_id)->where('package_id',$case->id)->get();
                  @endphp
                  @foreach($label as $lab)
                     
                    <td class="text-align-center"> <?php  if(isset($lab->label_n->a)){echo $lab->label_n->a; } ?> </td>
                    
                  @endforeach
                  <td class="text-align-center"> {{$case->Price}} </td>
                  <td class="text-align-center"> {{$case->monthly}}  </td>
                  <td class="text-align-center"> {{$case->quartely}}  </td>
                  <td class="text-align-center"> {{$case->yearly}} </td>
                  <td class="text-align-center">
                     <button class="text-danger" wire:click="delete({{ $case->id }})" >  
                     <span class="bt-trash" >  Delete</span> </button>
                     <button class="text-primary"  wire:click="edit({{ $case->id }})" >  
                     <span class="bt-trash" >Edit </span> </button>
                  </td>
               </tr>
               @endforeach
            </tbody>
         </table>
      </div>
   </div>
</div>