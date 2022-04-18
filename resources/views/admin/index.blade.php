@extends('dashboard.layout.dlayout')
@section('content')

<main id="main" class="home-section">
        <section class="steper-bg bg_white">
            <div class="container-fluid">
                <div class="row steper-num">
                    <ul class="col-md-8">
                        <li><span class="count active"></span> Create Profile</li>
                        <li><span class="count">2</span> Fill Company Details</li>
                    </ul>
                    <ul class="col-md-4 d-flex justify-content-start mt-4 mt-md-0">
                        <li><a href="{{route('invoicetype')}}"><button class="btn-lg hoa_invoicePro-headerButton px-5" type="submit">Save and
                                Continue</button> </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <section>
            @if(session('message'))
                <div class="text-success">{{session('message')}}</div>
            @endif
            <div class="row mt-3">
                <div class="col-md-8 ms-md-5 ms-2 ps-md-5">
                    <div class="accordion" id="accordionFlushExample">
                        <div class="accordion-item hoa_invoicePro-AccordionClosed">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button hoa_invoicePro-AccordionHeader" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="true"
                                    aria-controls="flush-collapseOne">
                                    Basic Details
                                </button>
                            </h2>
                            <div id="flush-collapseOne"
                                class="accordion-collapse hoa_invoicePro-AccordionOpened collapse show"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">   
                                   
                               
                                    <form method="POST" action="{{route('storeinvoice')}}"  enctype="multipart/form-data" >
                                        @csrf
                                    <div class="form-group row">
                                            <div class="mt-3">
                                                <input type="hidden" name="step" value='1'>
                                                <label class="hoa_invoicePro-form-label ms-1 mb-2 row">Your Full
                                                    Name*</label>
                                                <div class="row col-md-7 mt-1">
                                                    <div class="col-md-6">
                                                        <input type="text"
                                                            class="form-control hoa_invoicePro-accTextbox"
                                                            value="@if($invoices){{$invoices->firstname}} @else {{ Request::old('name') }} @endif" placeholder="First Name" required name="name" id="name"  />
                                                           
                                                    </div>
                                                    <div class="col-md-6 mt-3 mt-md-0">
                                                        <input type="text"
                                                            class="form-control hoa_invoicePro-accTextbox"
                                                            value="@if($invoices){{$invoices->lastname}} @else {{ Request::old('surname') }} @endif" placeholder="Last Name" name="surname" id="surname" required />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mt-4">
                                                <label class="hoa_invoicePro-form-label ms-1 mb-2 row">Your Company
                                                    Name*</label>
                                                <div class="row col-md-7 mt-1">
                                                    <div class="col-md-12">
                                                        <input type="text"
                                                            class="form-control hoa_invoicePro-accTextbox"
                                                            value="@if($invoices){{$invoices->companyname}} @else {{ Request::old('companyname') }} @endif" placeholder="Company Name" name="companyname" required id="companyName"  />
                                                    </div>
                                                </div>
                                            </div>

                                           
                                              @if($invoices)
                                                @if($invoices->filepath)
                                                        <img src="{{url('/public/uploads/'.$invoices->filename)}}" alt="" srcset="" class="img-responsive img-thumbnail">
                                                                                                            
                                                @endif
                                               @endif
                                              <style>
                                                  img.img-responsive.img-thumbnail {
    width: 100px;
}
                                              </style>
                                           
                                            <div class="pt-md-5">
                                                <div class="row mt-1">
                                                    <div class="col-md-4">
                                                        <input class="hoa_invoicePro-accGreenButton btn-lg px-5"
                                                            type="file" name="logo" value="Add your Logo">
                                                    </div>
                                                
                                                    <input type="hidden" name="fileexist" value="0">

                                                    <div class="col-md-8 d-flex justify-content-md-end mt-5 mt-md-0">
                                                        <button class="btn-lg hoa_invoicePro-accOrangeButton px-4"
                                                            type="submit">Save
                                                            changes</button>
                                                        <button class="btn-lg hoa_invoicePro-accClearAllButton"
                                                            type="reset">Clear
                                                            All </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item hoa_invoicePro-AccordionClosed mt-2">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="acc-btn accordion-button collapsed hoa_invoicePro-AccordionHeader"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                    aria-expanded="false" aria-controls="flush-collapseTwo" id="ContactDetails"
                                    onclick="editShow()">
                                    <span>Contact details</span>
                                    <span class="editShowPref pe-4" style="display: none;"><img
                                            src="{{asset('/')}}assets/icons/exclaimation.svg" class="me-2" />Edit Show
                                        Preference</span>
                                </button>
                            </h2>
                            <div id="flush-collapseTwo"
                                class="accordion-collapse collapse hoa_invoicePro-AccordionOpened"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                <form method="POST" action="{{route('storeinvoice')}}"  enctype="multipart/form" >
                                        @csrf
                                        <input type="hidden" name="step" value="2">
                                    <div class="row">
                                        <div class="col-md-11">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="hoa_invoicePro-form-label mt-2 mb-2"
                                                        for="bussinessNumber">Your Business
                                                        Number*</label>
                                                    <input type="tel" class="hoa_invoicePro-accTextbox form-control"
                                                        value="@if($invoices){{$invoices->mobile}} @else {{ Request::old('mobile') }} @endif" name="mobile" />
                                                </div>
                                                <div class="col-md-6 ps-md-5">
                                                    <label class="hoa_invoicePro-form-label mt-2 mb-2"
                                                        for="bussinessEmailID">Your
                                                        Business
                                                        Email ID*</label>
                                                    <input type="tel" class="hoa_invoicePro-accTextbox form-control"
                                                        value="@if($invoices){{$invoices->email}} @else {{ Request::old('email') }} @endif" name="email" />
                                                </div>
                                            </div>

                                            <div class="row mt-4">
                                                <div class="col-md-6">
                                                    <label class="hoa_invoicePro-form-label mt-2 mb-2"
                                                        for="companyLocation">Location of your Company*</label>
                                                    <input type="text" class="hoa_invoicePro-accTextbox form-control"
                                                        value="@if($invoices){{$invoices->companyaddress}} @else {{ Request::old('companyaddress') }} @endif" name="companyaddress"/>
                                                </div>
                                                <div class="col-md-6 ps-md-5">
                                                    <label class="hoa_invoicePro-form-label mt-2 mb-2"
                                                        for="companyCity">Name of a city where your Company is
                                                        Located*</label>
                                                    <input type="text" class="hoa_invoicePro-accTextbox form-control"
                                                        value="@if($invoices){{$invoices->companycity}} @else {{ Request::old('companycity') }} @endif" name="companycity" />
                                                </div>
                                            </div>

                                            <div class="row mt-4">
                                                <div class="col-md-6">
                                                    <label class="hoa_invoicePro-form-label mt-2 mb-2"
                                                        for="postalCode">Your Postal Code/zip code*</label>
                                                    <input type="text" class="hoa_invoicePro-accTextbox form-control"
                                                        value="@if($invoices){{$invoices->zipcode}} @else {{ Request::old('zipcode') }} @endif" name="zipcode" />
                                                </div>
                                                <div class="col-md-6 ps-md-5">
                                                    <label class="hoa_invoicePro-form-label mt-2 mb-2" for="state">Name
                                                        of your State*</label>
                                                    <input type="text" class="hoa_invoicePro-accTextbox form-control"
                                                        value="@if($invoices){{$invoices->state}} @else {{ Request::old('state') }} @endif" name="state" placeholder=""/>
                                                </div>
                                            </div>

                                            <div class="row mt-4">
                                                <div class="col-md-6">
                                                    <label class="hoa_invoicePro-form-label mt-2 mb-2" for="gstIN">Your
                                                        GST identification Number*</label>
                                                    <input type="text" class="hoa_invoicePro-accTextbox form-control"
                                                        value="@if($invoices){{$invoices->gst}} @else {{ Request::old('gst') }} @endif" name="gst"/>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-5">
                                            <div class="col-md-12 d-flex justify-content-md-end">
                                                <button class="btn-lg hoa_invoicePro-accOrangeButton px-3"
                                                    type="submit">Save
                                                    changes</button>
                                                <button class="btn-lg hoa_invoicePro-accClearAllButton"
                                                    type="reset">Clear
                                                    All </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item hoa_invoicePro-AccordionClosed">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed hoa_invoicePro-AccordionHeader" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                    aria-expanded="false" aria-controls="flush-collapseThree">
                                    Social Links
                                </button>
                            </h2>
                            <div id="flush-collapseThree"
                                class="accordion-collapse collapse hoa_invoicePro-AccordionOpened"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <div class="row">
                                    <form method="POST" action="{{route('storeinvoice')}}"  enctype="multipart/form" >
                                        @csrf
                                        <input type="hidden" name="step" value="3">
                                        <div class="col-md-8">
                                            <div class="row ms-1">
                                                <label class="hoa_invoicePro-form-label mt-2 mb-2 p-0"
                                                    for="companyWebsite">Your Company website, Home Page or
                                                    Blog*</label>
                                                <input type="text" class="hoa_invoicePro-accTextbox form-control"
                                                    name="website" value="@if($invoices){{$invoices->website}} @else {{ Request::old('website') }} @endif" />
                                            </div>

                                            <div class="row mt-4 ms-1">
                                                <label class="hoa_invoicePro-form-label mt-2 mb-2 p-0"
                                                    for="linkedin">Linked In Profile Link*</label>
                                                <input type="text" class="hoa_invoicePro-accTextbox form-control"
                                                   name="social" value="@if($invoices){{$invoices->social}} @else {{ Request::old('social') }} @endif" />
                                            </div>

                                            <div class="col-md-4 mt-4 ms-md-1">
                                                <button class="plus" type="button" id="AddNewLink">+</button>
                                                <span class="plus-text ms-2">Add New Link</span>
                                            </div>
                                        </div>

                                        <div class="row mt-5 mt-md-4">
                                            <div class="col-md-12 d-flex justify-content-md-end">
                                                <button class="btn-lg hoa_invoicePro-accOrangeButton px-3"
                                                    type="submit">Save
                                                    changes</button>
                                                <button class="btn-lg hoa_invoicePro-accClearAllButton"
                                                    type="reset">Clear
                                                    All </button>
                                            </div>
                                        </div>
                                            </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection