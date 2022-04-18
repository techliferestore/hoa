@extends('dashboard.layout.dlayout')

@section('nav')
@include('dashboard.include.nav')
@endsection

@section('content')

<section class="bodycont bodycont-mob" style="background-color: #f6f6f6 !important;">
    <div class="row hoa-custom-container m-auto pe-md-0">
        <div class="col-lg-2 col-md-1 col-3"></div>

        <div class="col-md-10 ps-0 pe-0 mt-4 carousel_mobile mb-auto">
            <div class="carousel_mis" style="background-color:#FBA43F;">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <h2 class="sales_summaryTaxt text-align-center">Bookkeeping</h2>
                        </div>
                        <div class="carousel-item">
                            <h2 class="sales_summaryTaxt text-align-center">TDS</h2>
                        </div>
                        <div class="carousel-item">
                            <h2 class="sales_summaryTaxt text-align-center">GST</h2>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon mis_prev" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon mis_next" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>


        <div class="col-lg-7 col-md-8 mt-4 mt-md-0">
            <div class="accordion accordion-flush" id="accordionFlushExample">
               
               @livewire('front.uploaddoc')
              
             
            </div>
        </div>

        <div class="col-lg-3 col-md-3 mb-2 heading_navbar mob-hide">
            <div class="navbar_leader col-lg-10 col-md-11 col-9 mt-5">
                <h5 class="service_ListText mb-2">SERVICE LIST</h5>
                <ul>
                    <li class="hoa_admin-navbar-button active"><a href="#">Bookkeeping</a></li>
                    <li>
                        <a class="hoa_admin-navbar-button mt-2 mb-2" href="">TDS</a>
                    </li>
                    <li>
                        <a class="hoa_admin-navbar-button" href="">GST</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    



</section>
@endsection