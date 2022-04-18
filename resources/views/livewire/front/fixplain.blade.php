<div>
    <section class="monthlySubs">
        <div class="navtab_section">
            <div class="container m-auto">
                <div class="row">
                    <span class="averge_text col-lg-2 col-md-4 col-7 m-auto m-md-0 mt-3 mt-md-0">Average monthly
                        transactions</span>
                    <span class="col-lg-6 col-md-7 invoice-scrollCat">
                        <ul class="nav nav-pills mt-md-2 py-2" id="pills-tab" role="tablist">

                            @forelse ($monthly_transaction_name as $monthly_name )
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-{{$monthly_name->trn_name}}-tab" data-bs-toggle="pill"
                                    wire:click="blogid({{$monthly_name->id}})" type="button"   data-bs-target="#{{$monthly_name->trn_name}}" type="button" role="tab"
                                    aria-controls="pills-upto500"  aria-selected="false">{{$monthly_name->trn_name}} </button>
                            </li>
                            @empty
                                
                            @endforelse
                           
                          
                           
                        </ul>
                    </span>
                </div>
            </div>
        </div>
     

        <div class="tab-content container" id="pills-test">
           

                    @forelse ($fixplain_name as $fix_name )
                    <div class="tab-pane fade show active" id="pills-upto100" role="tabpanel"
                    aria-labelledby="pills-upto100-tab">
                    <div class="row m-auto">
                        <div class="text-center mt-5">
                            <h2 class="accounting_textplan mt-5">{{$fix_name->plain_name}}<h2>
                            <p class="pick_plantaxt mt-3">Pick a plan that fits best with your needs.</p>
                        </div>
                        <div class="table-responsive m-auto py-5 ps-0 pe-0">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            <img src="../assets/icons/ser-incl.svg" class="img-fluid mb-2 hiddentab" alt="">
                                            <span class="service_incluidesText">Service includes</span>
                                        </th>
                                   
                                        @forelse ($fix_name->plan_type as $plan_name)
                                        <th scope="col" class="Basic_textplan">{{$plan_name->plain_type_name}}  </th>
                                        @empty
                                            
                                        @endforelse
                                  
                                      
                                      
                                      
                                      
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row"></th>
                                        @forelse ($fix_name->plan_type as $plan_name)
                                        <td>
                                            <div class="amount_taxtINR"> {{$plan_name->plain_price}}*</div>
                                            <div class="per_taxtInr mt-2">{{$plan_name->plain_title}}</div>
                                            <div class="bestfor_text mt-2">{{$plan_name->plain_des}}
                                            </div>
                                        </td>
                                      
                                        @empty
                                            
                                        @endforelse
                                       
                                      
                                    </tr>
 
                                    @forelse ($fix_name->service_label as $label_name)
                                    <tr class="table-light">
                                        <th scope="row" class="basic_accounttaxt">
                                           {{$label_name->service_label}}
                                        </th>
                                        @forelse ($fix_name->available_service as $present_service )

                                        @foreach ($present_service->properties as $property)
                                  @isset( $property['value'] )
                                  @if (!empty( $property['value']))
                                  <td>{{$property['value']}}<img src="../assets/icons/pluse_circle.svg" class="img-fluid" alt=""></td>
                                  @else
                                  <td><img src="../assets/icons/circle-.svg" class="img-fluid" alt=""></td>
                                  @endif
                                 
                                 
                                  @endisset   
                                    @endforeach
                                         
                                           
                                        @empty
                                            
                                        @endforelse
                                       
                                        
                                    </tr>
                                    @empty
                                        
                                    @endforelse
                                   
        
                                 
        
        
                                   
        
                              
                                </tbody>
                            </table>
                        </div>
                    </div>
        
                    
                </div> 
                    @empty
                        
                    @endforelse
                   
           
          
    
           
           
           
       
        </div>

      
    </section>
    
</div>
