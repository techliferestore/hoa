<section class="">
    <div class="flex-container hoa-custom-container m-auto">

        <!--right side section starts here-->
        <div class="col-lg-4 col-md-5 pe-0 ps-0">

        @if(empty($result))

        @else
        
        @forelse ($result as $data)

            <div class="hoa_dashboard-right-divBlock col-lg-10 hoa_dashboard-right-divBlock-position">
                <div class="col-lg-10 col-md-11 m-auto mt-3">
                    <!-- <div class="row"> -->
                    <ul class="nav nav-pills nav-bookkping mb-3 bashboard-tabbutton hoa_dashboard-button-block"
                        id="pills-tab" role="tablist">
                        <li class="nav-item col-lg-4 col-md-4 col-sm-4 m-auto ps-0 pe-0">
                            <a class="nav-link active" id="pills-monthly-tab" data-toggle="pill"
                                href="#pills-monthly" role="tab" aria-controls="pills-monthly"
                                aria-selected="true">Monthly</a>
                        </li>
                        <li class="nav-item col-lg-4 col-md-4 col-sm-4 m-auto ps-0 pe-0">
                            <a class="nav-link" id="pills-quarterly-tab" data-toggle="pill"
                                href="#pills-quarterly" role="tab" aria-controls="pills-quarterly"
                                aria-selected="false">Quarterly</a>
                        </li>
                        <li class="nav-item col-lg-4 col-md-4 col-sm-4 m-auto ps-0 pe-0">
                            <a class="nav-link" id="pills-yearly-tab" data-toggle="pill" href="#pills-yearly"
                                role="tab" aria-controls="pills-yearly" aria-selected="false">Yearly</a>
                        </li>
                    </ul>
                    <!-- </div> -->
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-monthly" role="tabpanel"
                            aria-labelledby="pills-monthly-tab">

                            <div style="display: flex;flex-direction: column;align-items: center;">
                                <h1 class="hoa_dashboard-right-h1 mt-4">Rs. {{$data->monthly}}</h1>

                                <div class="col-lg-6">
                                    <div class="col-md-12">
                                        <button type="button"
                                            class="bg_orange btn-lg hoa_service-rightButtons mt-4 form-control"
                                            style=" padding-top: 8px;">Add to Servicelist
                                        </button>
                                    </div>
                                    <form action="{{route('checkout')}}" method="POST">
                                        @csrf
                                        <input type="hidden" name="amount" value="{{$data->monthly}}">
                                        <input type="hidden" name="product_id" value="{{$data->id}}">

                                        <input type="hidden" name="include" value="detail come here">
                                    <div class="col-md-12">                            
                                       
                                        
                                        <button type="submit"
                                            class="bg_orange btn-lg hoa_service-rightButtons mt-2 form-control"
                                            style=" padding-top: 8px;">Pay
                                        </button>
                                    </div>
                                    </form>
                                    <a class="dashboard-Accounting-link" href="#">Learn more</a>
                                </div>

                                <div class="hoa_dashboard_right-h3 mt-5 mb-4">Our Service Includes</div>
                                <div>
                                    <ul class="hoa_dashboard-ul-rightTick pb-4">
                                        <li class="hoa_li-bottom-margin">Tax saving & Planning advice</li>
                                        <li class="hoa_li-bottom-margin">TAN saving & Planning advice</li>
                                        <li class="hoa_li-bottom-margin">Preparation of Financials (BS, PL)</li>
                                        <li class="pb-md-5 mb-md-5">Email & Phone Support</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-quarterly" role="tabpanel"
                            aria-labelledby="pills-quarterly-tab">
                            <div style="display: flex;flex-direction: column;align-items: center;">
                                <h1 class="hoa_dashboard-right-h1 mt-4">Rs. {{$data->quartely}}</h1>

                                <div class="col-lg-6">
                                    <div class="col-md-12">
                                        <button type="button"
                                            class="bg_orange btn-lg hoa_service-rightButtons mt-4 form-control"
                                            style=" padding-top: 8px;">Add to Servicelist
                                        </button>
                                    </div>

                                    <form action="{{route('checkout')}}" method="POST">
                                        @csrf
                                        <input type="hidden" name="amount" value="{{$data->quartely}}">
                                        <input type="hidden" name="product_id" value="{{$data->id}}">

                                        <input type="hidden" name="include" value="detail come here">
                                    <div class="col-md-12">                            
                                       
                                        
                                        <button type="submit"
                                            class="bg_orange btn-lg hoa_service-rightButtons mt-2 form-control"
                                            style=" padding-top: 8px;">Pay
                                        </button>
                                    </div>
                                    </form>

                                    <a class="dashboard-Accounting-link" href="#">Learn more</a>
                                </div>

                                <div class="hoa_dashboard_right-h3 mt-5 mb-4">Our Service Includes</div>
                                <div>
                                    <ul class="hoa_dashboard-ul-rightTick pb-4">
                                        <li class="hoa_li-bottom-margin">Tax saving & Planning advice</li>
                                        <li class="hoa_li-bottom-margin">TAN saving & Planning advice</li>
                                        <li class="hoa_li-bottom-margin">Preparation of Financials (BS, PL)</li>
                                        <li class="pb-md-5 mb-md-5">Email & Phone Support</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-yearly" role="tabpanel"
                            aria-labelledby="pills-yearly-tab">
                            <div style="display: flex;flex-direction: column;align-items: center;">
                                <h1 class="hoa_dashboard-right-h1 mt-4">Rs. {{$data->yearly}}</h1>

                                <div class="col-lg-6">
                                    <div class="col-md-12">
                                        <button type="button"
                                            class="bg_orange btn-lg hoa_service-rightButtons mt-4 form-control"
                                            style=" padding-top: 8px;">Add to Servicelist
                                        </button>
                                    </div>

                                    <form action="{{route('checkout')}}" method="POST">
                                        @csrf
                                        <input type="hidden" name="amount" value="{{$data->yearly}}">
                                        <input type="hidden" name="product_id" value="{{$data->id}}">

                                        <input type="hidden" name="include" value="detail come here">
                                    <div class="col-md-12">                            
                                       
                                        
                                        <button type="submit"
                                            class="bg_orange btn-lg hoa_service-rightButtons mt-2 form-control"
                                            style=" padding-top: 8px;">Pay
                                        </button>
                                    </div>
                                    </form>

                                    <a class="dashboard-Accounting-link" href="#">Learn more</a>
                                </div>

                                <div class="hoa_dashboard_right-h3 mt-5 mb-4">Our Service Includes</div>
                                <div>
                                    <ul class="hoa_dashboard-ul-rightTick pb-4">
                                        <li class="hoa_li-bottom-margin">Tax saving & Planning advice</li>
                                        <li class="hoa_li-bottom-margin">TAN saving & Planning advice</li>
                                        <li class="hoa_li-bottom-margin">Preparation of Financials (BS, PL)</li>
                                        <li class="pb-md-5 mb-md-5">Email & Phone Support</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @empty
  
            @endforelse
        @endif
    </div>
        <div class="col-lg-6 col-md-6 hoa_dashboard-left-div">

            <div class="col-lg-8 mb-5">

@forelse ($label_names as $index => $label_name)
                <div class="hoa_services-custYourPlan-dropDown mt-3">
                    <label class="customInput">
                        <select class="input_field form-select" wire:model="legal.{{ $index }}.[label]" required>
                            <option value="" selected disabled hidden></option>
                           
                            @foreach($label_name->list_lable as $label_first) 

                            <option  value="{{$label_first->id}} "> {{$label_first->a}}</option>
                            @endforeach
                         
                         
                        </select>
                        <span class="input__label">{{ $label_name->label}}</span>
                    </label>
                </div>
                @empty
                <p>No Labe available</p>
            @endforelse
              

                <div class="mt-3 col-lg-6">
                    <button class="btn-lg hoa_Services-lastbutton" wire:click="searchlabel()" type="button">Apply
                        Changes</button>
                </div>

            </div>

            <div>
            

                @if(empty($result))

        
                
                @else
                
                
                
                @forelse ($result as $data)
                <div class="hoa_dashboard-h3">Documents required</div>
                
                <ul class="hoa_dashboard-li">
                    <li class="li-padding">{{ $data->doc }}
                    </li>
                </ul>
            </div>
                @empty
  
@endforelse
@endif
          
        </div>

        <div class="col-lg-2 col-md-1"></div>


    </div>

  

</section>

{{--new layout end here--}}






                </div>
            </div>
        </div>

                	@if(empty($result))

@else

                	@forelse ($result as $data)

        <!--middle section for showing offer price-->
        <div class="hoa_dashboard-center-div">
            <div class="hoa_dashboard-bookkeeping-center-div2 col-md-6">
                <div class="col-2" style="float: left;position: relative;">
                    <img src="{{asset('/')}}assets/images/save25.svg" class="hoa_dashboard-bookkeeping-img" />
                </div>
                <div class="col-10" style="float: right;">
                    <div class="col-md-6" style="float: left;">
                        <div class="hoa_dashboard-bookkeeping-center-h3">Try our</div>
                        <div class="hoa_dashboard-bookkeeping-center-h2">package offer!</div>
                    </div>
                    <div class="col-md-6"
                        style="float: right;display: flex;flex-direction: column;align-items: center;margin-top: 1%;">
                        <div class="hoa_dashboard-bookkeeping-center-h3 strikethrough" style="color:#4F4F4F;">44,000
                        </div>
                        <div class="hoa_dashboard-bookkeeping-center-h2" style="color: #000000;">Rs.33,000
                        </div>
                    </div>
                </div>
            </div>

            <div class="hoa_dashboard-bookkeeping-center-div col-md-6">
            </div>
        </div>
        <!--middle section ends here-->
        @empty
  
@endforelse

@endif

