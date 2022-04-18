@extends('dashboard.layout.dlayout')
@section('nav')
@include('dashboard.include.nav')
@endsection

@section('content')
<main id="main" class="home-section">
    <!-- steper Start -->
    <section class=" bg_white mt-5">
        <div class="container-fluid hoa_services-home">
            <div class="row m-auto mt-5">
                <div class="col-12 text-center">
                    <!--<div class="col-12">
                        <a class="form-control hoa_dash-services-button btn-lg mt-5" type="button"
                            href=" ">Accounting
                            Services</a>
                    </div>-->

                    @forelse ($service_categories as $categori)

                    <div class="col-12">
                        <a class="form-control btn-lg hoa_dash-services-button mt-4" href="{{route('accservice',['slug' =>$categori->slug])}}"> {{$categori->category}}</a>
                    </div>

                    

@empty
    <p>No category found</p>
@endforelse
               
                   <!-- <div class="col-12">
                        <a class="form-control btn-lg hoa_dash-services-button mt-4">Taxation Services</a>
                    </div>
                    <div class="col-12">
                        <a class="form-control hoa_dash-services-button btn-lg mt-4">Incorporation, Registration &
                            Certification</a>
                    </div>
                    <div class="col-12">
                        <a class="form-control hoa_dash-services-button btn-lg mt-4">Legal and Complaince</a>
                    </div>
                    <div class="col-12">
                        <a class="form-control hoa_dash-services-button btn-lg mt-4">Exim Policy</a>
                    </div>-->
                </div>
            </div>
        </div>
    </section>


</main>
@endsection