<div>
    <div class="row mt-5 pb-5">
                                    <div class="col-6">
                                        <form action=" {{route('psetting')}} " method="POST">
      @csrf
                                       
@forelse ($label_names as $index => $label_name)




 <div class="col-11 m-auto display_flex-row mt-4">
                                            <span
                                                class="hoa_admin-servBookkeeping-PriceSetting-leftTextBox-ordering">&nbsp;&nbsp;
                                            </span>


    <input type="hidden" name="orderlabel[{{$index}}][label_id]"  value="{{$label_name->id}} ">

                                        <select wire:model="legal.{{ $index }}.[label]" name="orderlabel[{{$index}}][label]" class="form-select hoa_admin-servBookkeeping-PriceSetting-leftTextBox-values"
                                                aria-label="LegalStatus">
                                                <option selected>{{ $label_name->label}}</option>



                                               


@foreach($label_name->list_lable as $label_first)



 
    <option> {{$label_first->a}}</option>
  @endforeach
 
                                        
                                             
                                               
                                            </select>

                                                </div>

@empty
    <p>No Labe available</p>
@endforelse


                                




                                        <div class="form row mt-5 mx-2">
                                            <div class="col-11 m-auto display_flex-row">
                                                <div class="col-6">
                                                    
 <label for="SetYourPrice">Price</label>
                                                    <input  name="price" placeholder="value in INR." class="form-control" />
                                                    @error('price')<span class="text-danger">{{$message}}</span>@enderror    

                                                    <label for="SetYourPrice">Set Your Monthly Price</label>
                                                    <input name="mprice" placeholder="value in INR." class="form-control" />
                                                    @error('mprice')<span class="text-danger">{{$message}}</span>@enderror     

                                                    <label for="SetYourPrice">Set Your Quarterly Price</label>
                                                    <input name="qprice"  placeholder="value in INR." class="form-control" />
                                                    @error('qprice')<span class="text-danger">{{$message}}</span>@enderror     

                                                    <label for="SetYourPrice">Set Your  Yearly Price</label>
                                                    <input name="yprice"  placeholder="value in INR." class="form-control" />
                                                    @error('yprice')<span class="text-danger">{{$message}}</span>@enderror     

                                                </div>
                                              

                                            </div>

                                
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <textarea rows="6" name="doc" 
                                            class="hoa_admin-servBookkeeping-PriceSetting-RightTextBox form-control"
                                            style="height: 100%;text-align: center;"
                                            placeholder="Add your required Documents here !"></textarea>
                                            @error('doc')<span class="text-danger">{{$message}}</span>@enderror     

                                         
                                    </div>

                                      <div class="col-5 mt-4 mx-3">

 <button

                                                    type="submit"
                                                        class="form-control hoa_admin-servBookkeeping-PriceSetting-leftTextBox-button">Update
                                                        case</button>

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
                                                    <th scope="col"
                                                    class="hoa_admin-servBookkeeping-PriceSetting-tableHead col-md-2">
                                                    Id</th>
                                                    <th scope="col"
                                                        class="hoa_admin-servBookkeeping-PriceSetting-tableHead col-md-2">
                                                        A</th>
                                                    <th scope="col"
                                                        class="hoa_admin-servBookkeeping-PriceSetting-tableHead col-md-4">
                                                        B</th>
                                                    <th scope="col"
                                                        class="hoa_admin-servBookkeeping-PriceSetting-tableHead col-md-2">
                                                        C</th>
                                                    <th scope="col"
                                                        class="hoa_admin-servBookkeeping-PriceSetting-tableHead col-md-1">
                                                        D</th>
                                                    <th scope="col"
                                                        class="hoa_admin-servBookkeeping-PriceSetting-tableHead col-md-1">
                                                        E</th>
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
                                                

                                                 @foreach ($label as $case)

                                                


                                  
                                                <tr>
                                                    <th scope="row" class="text-align-center"> {{$case->id}}    </th>
                                                    <th scope="row" class="text-align-center"> @foreach($case->list_p as $name)
{{$name->legal}} <br>

@endforeach  </th>
                                                    <td class="text-align-center">{{$case->nature}} </td>
                                                    <td class="text-align-center">{{$case->type}} </td>
                                                    <td class="text-align-center">{{$case->transaction}} </td>
                                                    <td class="text-align-center">{{$case->value}} </td>

                       
                                                   
                                                    <td class="text-align-center">
                                                        <button wire:click="edit({{ $case->id }})" style="    width: 72px;" class="btn btn-primary btn-xsm"><h6>Edit</h6></button>

                                                        <button wire:click="delete({{ $case->id }})" style="    width: 72px;" class="btn btn-danger "><h6>Delete</h6></button>

                                                    </td>
                                                   
                                                </tr>

      @endforeach

                                               
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
</div>
