<div>


	 
                                {{--<div class="mt-5" style="padding-left: 4%;">
                                    <div class="hoa_admin-servBookkeeping-basicDetails-h">Service Name</div>
                                    <input type="text" wire:model.lazy="service_names"  name="serviceName" class="form-control" />
                                @error('service_names')<span class="text-danger">{{$message}}</span>@enderror
                                </div>--}}

                                <div class="mt-4" style="padding-left: 4%;">
                                    <div class="hoa_admin-servBookkeeping-basicDetails-h" >Service Description<span
                                            class="hoa_admin-servBookkeeping-basicDetails-p"> (Not
                                            More than 50 words)</span></div>
                                    <textarea  type="text" name="serviceDescription" wire:model.lazy="service_des" class="form-control"
                                        rows="5"></textarea>

                                @error('service_des')<span class="text-danger">{{$message}}</span>@enderror
                                </div>

                                <div class="mt-4" style="padding-left: 4%;">
                                    <div  class="hoa_admin-servBookkeeping-basicDetails-h">Service Includes ?</div>
                                    <textarea  type="text" name="serviceIncludes" wire:model.lazy="service_inc" class="form-control"
                                        rows="7"></textarea>
                                </div>  @error('service_inc')<span class="text-danger">{{$message}}</span>@enderror

                                <div  class="mt-4" style="padding-left: 4%;">
                                    <div class="hoa_admin-servBookkeeping-basicDetails-h">Add Terms of Agreements</div>
                                    <textarea  type="text" wire:model.lazy="tc" name="serviceT&C" class="form-control input-lg"
                                        rows="10"></textarea>


                                        @error('tc')<span class="text-danger">{{$message}}</span>@enderror
                                </div>
 {{--<div class="mt-4" style="padding-left: 4%;">
                                                    
 <label for="SetYourPrice">Price (variant field)</label>
                                                    <input wire:model.lazy="mprice"  placeholder="value in INR." class="form-control" />
                                                    @error('price')<span class="text-danger">{{$message}}</span>@enderror   

                                                </div>--}}
                                <div class="mb-4" style="padding-left: 4%;">
                                    <button style="background: #FBA43F;
                                    border-radius: 4px;
                                    font-family: 'Inter';
                                    font-style: normal;
                                    font-weight: bold;
                                    font-size: 15px;
                                    color: #FFFFFF;
                                    border: transparent;"  wire:click="storebookeeping()"  class="hoa_admin-servBookkeeping-LabelSettings-button btn mt-5">Save
                                        Changes</button>
                                </div>
                                  @if (session()->has('message'))
            <div style="color:green ;">
                {{ session('message') }}
            </div>
        @endif
                           
  </div>
