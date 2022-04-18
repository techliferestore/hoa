@extends('dashboard.layout.dlayout')

@section('nav')
@include('dashboard.include.nav')
@endsection
@section('content')
 <!-- Main container -->

 <main id="main" class="home-section bookeeping_mobile">
    <!-- steper Start -->
    <section class="steper-bg2 bookkiping-steper bg_white" style="background-color: #FAFAFA;">
        <div class="container-fluid">
            <div class="row hoa-custom-container m-auto">
                <div class="col-lg-2 col-md-1 col-3"></div>
                <div class="col-lg-8 col-md-10 ps-0 pe-0">
                    <h1 class="mb-1 mt-1 bookkping-taxt">{!! str_replace('-', ' ', ucfirst(request()->slug)) !!} </h1>
                </div>
            </div>
        </div>
    </section>
    <!-- steper End -->
  
    @if($errors->any())
    @foreach ($errors->all() as $error)
       <div>{{ $error }}</div>
   @endforeach
 @endif
    <section class="bookkiping_section">
       @livewire('front-book-search',['sub_id' =>$subid ])

       <div style="background: #FAFAFA;">
        <div class="row">
            <div class="col-12 col-md-9 m-auto">
                <div class="row" style="margin-top: 10%;margin-bottom: 10%;">
                    <div class="col hoa_dashboard-bookkeeping-lastdiv" style="padding-top: 5%;">
                        <div class="lastDiv-left-h1">Have any
                        </div>
                        <div class="lastDiv-left-h2">Questions?</div>

                        <div class="lastDiv-left-body"><b>We’d love to help you,</b> Just
                            fill the details and
                            we will assign you an expert that will help you
                            answer all your queries.</div>
                    </div>


                   @livewire('front.contactus')
                </div>
            </div>
        </div>
    </div>
</div>
    </section>




</main>

@endsection