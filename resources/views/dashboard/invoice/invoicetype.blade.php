@extends('dashboard.layout.dlayout')
@section('content')

<main id="main" class="home-section">
        <!-- steper Start -->
        <section class="steper-bg2 bg_white">
            <div class="container-fluid">
                <div class="row">
                    <div class="steper-num" style="margin-bottom: -1.2%;">
                        <ul>
                            <li class="h2 col-md-2 pe-3" style="opacity: 1;"><span><img src="{{asset('/')}}assets/icons/Bill.svg">
                                    <p><a href="{{route('invoice')}}">Invoice</a></p>
                                </span></li>
                            <li style="opacity: 0.3;" class="h2 col-md-2 me-md-5 pe-3"><span><img
                                        src="{{asset('/')}}assets/icons/user.svg" />
                                    <p style="color: #EB5757;"><a href="{{route('invoice')}}"> Invoice Profile</a></p>
                                </span>
                            </li>
                            <li class="h2 col-md-2 pe-3" style="opacity: 0.3;"><span><img
                                        src="{{asset('/')}}assets/icons/history.svg" />
                                    <p><a href="{{route('invoicehistory')}}"> History</a></p>
                                </span>
                            </li>
                            <li class="h2 col-md-2" style="opacity: 0.3;"><span><img src="{{asset('/')}}assets/icons/settings.svg"
                                        width="20px" height="20px" />
                                    <p><a href="{{route('invoicesetting')}}">Settings</a></p>
                                </span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- steper End -->

        <section class="bodycont me-5">
            <img src="{{asset('/')}}assets/icons/createInvoice.svg" />
        </section>

        <section class="row">
            <div class="m-auto col-lg-4 col-md-7 mt-5 mb-5 pb-5" style="text-align: center;">
               <a href="{{route('createinvoice')}}"> <button type="button" class="btn btn-primary ">New Invoice</button></a>
                <button type="button" class="btn btn_createInvoice">Create Debit note</button>
                <button type="button" class="btn btn_createInvoice">Create Credit note</button>
            </div>
        </section>


    </main>
@endsection