<div>
   <div class="row mt-5">


                                    <div class="col-4">
                                        <div>


<form  action="{{ route('postlabel') }}" method="POST" >

@csrf

    <table>


<thead>
                    <tr >
                        <th> <label class="hoa_admin-servBookkeeping-LabelSettings-label mx-3 ">Label
                                                name</label>
</th>
                   
                        <th><label class="hoa_admin-servBookkeeping-LabelSettings-label mx-3">Label Data
                                            entry</label></th>
                    </tr>
                    </thead>
                                           
        <tbody>
        @forelse ($label_names as $index => $label_name)

       
        <tr>
                            <td>

<input type="hidden"    name="label_names[{{$index}}][lab_id]" value="{{ $label_name->id}}" >  
             
                   
<option class="form-control mt-4 hoa_admin-servBookkeeping-LabelSettings-leftTextBox
                                                 hoa_admin-servBookkeeping-LabelSettings-leftTextBox-values">{{ $label_name->label}}</option>
 </td>

 <td>



    @php

$lab=$label_name->list_lable;



    @endphp
    
    <?php
           // dd($lab);

        ?>  
    
                               <input type="text"   name="label_names[{{$index}}][l_name]" 
                                        style="background: #FFFFFF;
    border: 0.5px solid #075A5A;
    box-sizing: border-box;
    border-radius: 4px;
    width: 654px;
   "
                                            class="form-control mt-4 hoa_admin-servBookkeeping-LabelSettings-RightTextBox" 

                                          value="{{$lab->implode('a',',')}}" 
                                            placeholder="Ex- option 1, option 2, option 3" />
                                        
                                        

                                        </td>
                                          
                                            <input type="hidden"    name="label_names[{{$index}}][ldata_id]" value="{{$lab->implode('id',',')}}" > 
@empty
    <p>No Labe available</p>
@endforelse

                   </table>                        
                                    
                                    </div>                                                       

                                    

                                        <button style="background: #FBA43F;
                                        border-radius: 4px;
                                        font-family: 'Inter';
                                        font-style: normal;
                                        font-weight: bold;
                                        font-size: 15px;
                                        color: #FFFFFF;
                                        border: transparent;" type="submit" class="hoa_admin-servBookkeeping-LabelSettings-button btn mt-5">save
                                            Changes</button>
                                    </div>

                                    </form>
                                    @if (session()->has('message'))
            <div style="color:green ;">
                {{ session('message') }}
            </div>
        @endif
                                </div>
</div>
