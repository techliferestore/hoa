@extends('dashboard.layout.dlayout')

@section('nav')
@include('dashboard.include.nav')
@endsection
@section('content')
<main id="main" class="home-section">
    <!-- steper Start -->
    <section class=" bg_white">

        <div class="row hoa-custom-container m-auto pe-0">
            <div class="col-lg-2 col-md-0 col-3"></div>
            <div class="col-lg-6 ps-md-0 col-md-10 m-auto mt-lg-0 create-invoicemargin">
                <form>
                    <div class="h1" style="opacity: 0.8;margin-bottom: 12px;">{!! str_replace('-', ' ', ucfirst(request()->slug)) !!} 
                    </div>
                    <div class="h3" style="font-size: 18px;opacity: 0.5;">We Keep Your Desk Clear</div>

                    <div class="row m-auto">

                        @forelse ($service_categories as $categori)

      
                        @forelse ($categori->sub_name as $sub)

                        <div class="col-md-6 ps-lg-0 pe-lg-0">
         
                                 
                          
                                <div class="mt-5 d-flex d-lg-block justify-content-center">
                                   
                                    <a class="hoa_services-homebutton btn btn-lg m-auto" href="{{route('bookkeeping',['slug' =>$sub->slug])}}">{{$sub->subcategory}} </a>
                                
                                </div>
                          
                            

                          

                        </div>

    @empty
            no subcategory
        @endforelse

                 

@empty
    <p>No Subcategory found</p>
@endforelse
                       
                    </div>

                </form>
            </div>

            <!--right side-->
            <div class="col-lg-4 pe-0 ms-auto mt-5 mt-md-0 mob-hide">
                <div class="hoa_services-rightPIC" style="background-position: right center;">
                    <img src="{{asset('/')}}assets/images/dashboardDesk.svg" class="accounting_tableImage tabhide" />
                    <img src="{{asset('/')}}assets/images/MicrosoftTeams-image.png" class="accounting_tableImage tabshow" />
                </div>
            </div>
        </div>
        <!--the end new layout-->
     

           
    </section>


</main>

@endsection