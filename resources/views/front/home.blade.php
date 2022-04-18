@extends('front.layout.frontlayout')

@section('content')

    @include('front.include.nav')

    <main id="main">
        <section class="home_sectionfirst" style="position: relative;">
            <div class="container">
                <div class="wrapper">
                    <div class="row home_mobileImagebig home_sectiontop">
                        <!--left side page starts-->
                        <div class="col-md-6  align-center">
                            <div class="mobile_homepage">
                                <h1 class="oneplace">One place for all
                                </h1>
                                <h1 class="oneplace" style="color:#239C9C">Accounting
                                    Solutions</h1>
                            </div>

                            <div class="mt-4">
                                <div class="para mb-2">What You Need ?</div>
                                <div class="para2">BOOK KEEPING SERVICES</div>
                            </div>

                            <div class="hoa_home-firstDiv-left-button col-lg-5 col-12">
                                <a class="btn hoa_home-button2" href="{{ route('dashboard') }}">Go to Dashboard</a>
                            </div>
                        </div>

                        <!--second half(right side) page starts-->
                        <div class="col-md-6 wrapper hoa_home-firstDiv-right-bgIMG">
                            <div class="col-md-10 me-auto">
                                <img src=" assets/images/homepage-banner.png" class="hoa_home-header"
                                    style="margin-top: 30%;" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--top banner ends-->

        <!--second banner(black)started-->
        <section class="hoa_home-blackBanner">
            <div class="container" style="position: relative;">
                <div class="row wrapper m-auto">
                    <div class="col-md-8 mt-5 mb-5 m-auto justify-content-center">
                        <div class="owl-carousel logo-carousel owl-theme mt-md-2 mb-3">

                            <div class="item">
                                <div class="col-md-10 col-6 m-auto mt-md-0" style="opacity: 0.7;">
                                    <img src="assets/images/quickbooks.svg" class="home-tools-img" alt="">
                                </div>
                            </div>

                            <div class="item">
                                <div class="col-md-10 col-6 m-auto mt-md-0" style="opacity: 0.7;">
                                    <img src="assets/images/zohobooks.svg" class="home-tools-img" alt="">
                                </div>
                            </div>

                            <div class="item">
                                <div class="col-md-10 col-6 m-auto mt-md-0" style="opacity: 0.7;">
                                    <img src="assets/images/computax.svg" class="home-tools-img" alt="">
                                </div>
                            </div>

                            <div class="item">
                                <div class="col-md-10 col-6 m-auto mt-md-0" style="opacity: 0.7;">
                                    <img src="assets/images/tally.svg" class="home-tools-img" alt="">
                                </div>
                            </div>

                            <div class="item">
                                <div class="col-md-10 col-6 m-auto mt-md-0" style="opacity: 0.7;">
                                    <img src="assets/images/saralAxx.svg" class="home-tools-img" alt="">
                                </div>
                            </div>

                            <div class="item">
                                <div class="col-md-10 col-6 m-auto mt-md-0" style="opacity: 0.7;">
                                    <img src="assets/images/busy.svg" class="home-tools-img" alt="">
                                </div>
                            </div>

                            <div class="item">
                                <div class="col-md-10 col-6 m-auto mt-md-0" style="opacity: 0.7;">
                                    <img src="assets/images/farvision.svg" class="home-tools-img" alt="">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="ms-auto col-md-10 mt-5 ">
                        <p class="tools">TOOLS WE USE</p>
                    </div>
                </div>
            </div>
        </section>
        <!--second banner ends here-->


        <!--third banner starts here-->
        <section>
            <div class="container">
                <div class="row mb-5">
                    <div>
                        <img src="assets/images/Free.png" class="hoa_home-thirdBanner-FreeIMG" />
                        <span class="hoa_home-thirdBanner-invoice">INVOICE</span>
                    </div>

                    <div class="flex-container mb-5">
                        <!--right part-->
                        <div class="col-md-6">
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                    aria-labelledby="v-pills-home-tab">
                                    <img src="assets/images/laptop.png" class="mobile_device_laptopImage" />
                                </div>
                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                    aria-labelledby="v-pills-profile-tab">
                                    <img src="assets/images/laptop.png" class="mobile_device_laptopImage" />
                                </div>
                                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                    aria-labelledby="v-pills-messages-tab">
                                    <img src="assets/images/laptop.png" class="mobile_device_laptopImage" />
                                </div>
                                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                                    aria-labelledby="v-pills-settings-tab">
                                    <img src="assets/images/laptop.png" class="mobile_device_laptopImage" />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 hoa_home-thirdBanner m-auto">

                            <div class="nav flex-column hoa_home-thirdBanner-ul" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">
                                <a class="nav-link active hoa_home-a" id="v-pills-home-tab" data-toggle="pill"
                                    href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"
                                    tabindex="1">
                                    Create Free Invoice,
                                    Save It, Send It.
                                </a>
                                <a class="nav-link hoa_home-a" id="v-pills-profile-tab" data-toggle="pill"
                                    href="#v-pills-profile" role="tab" aria-controls="v-pills-profile"
                                    aria-selected="false" tabindex="1">
                                    Customize Your
                                    Invoice According To <span class="mobile_brandTaxt">Your Brand.</span>
                                </a>
                                <a class="nav-link hoa_home-a" id="v-pills-messages-tab" data-toggle="pill"
                                    href="#v-pills-messages" role="tab" aria-controls="v-pills-messages"
                                    aria-selected="false" tabindex="1">
                                    Save Customers Data And Ease Your <span class="mobile_brandTaxt">Repeat Work.</span>
                                </a>

                                <a class="nav-link hoa_home-a" id="v-pills-settings-tab" data-toggle="pill"
                                    href="#v-pills-settings" role="tab" aria-controls="v-pills-settings"
                                    aria-selected="false" tabindex="1">
                                    Track Your Previous Invoices.
                                </a>
                            </div>

                            <div class="mt-2 col-lg-6 me-auto home-mobile mt-5" style="margin-left: 8%;">
                                <a class="btn hoa_home-button2" href="{{route('invoice')}} ">Create
                                    Invoice</a>
                            </div>

                        </div>
                        <!--left part ends here-->
                    </div>
                </div>
            </div>
        </section>
        <!--third banner ends here-->


        <!--fourth banner starts here-->
        <section style="background: #F2F9F9;">
            <div class="container" id="plain">
                <div class="pb-5">
                  
                  
                    <div class="hoa_home-fourthBanner-head mt-5">Service Plans</div>
                    <div class="col-lg-6 hoa_home-fourthBanner-para" style="margin-bottom: 8%;">Every business
                        require Different efforts to work,
                        Choose
                        a Service Plan according
                        to your Bussiness Needs, Pick your Sevices and leave rest to us.</div>

                    <div class="row hoa_mobilehiden">
                      
                      
                       
@forelse ($data as $plain )
<div class="col-lg-4 col-md-6 mt-md-0 mt-5 col-11 m-auto hoverCard">
    <div class="home_cardlayer" style="position: relative;">
        <div class="card-layer1">
            <div class="card-home">
                <p class="plan-name">{{$plain->s_title}}</p>
                <div class="card-img-home">
                    <img src="assets/images/fix-plan.svg" class="" />
                </div>
            </div>
        </div>
        <div class="card-layer2">
            <div class="card-home2">
                <p class="plan-name">{{$plain->s_title}}</p>
                <div class="card-data">
                    <div class="m-auto col-2">
                        <img src="assets/images/fixed-diary.svg" class="" />
                    </div>
                    <h5 class="card-text col-11 m-auto">{{$plain->s_detail}}</h5>
                    <div class="group_button" style="text-align: center;">
                        <button class="card-button mt-5">Connect us</button>
                        <div class="mobile-cardLink mt-3">
                            <a href="{{route('fixprice')}} " class="card-link mt-3">Learn
                                more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@empty
    
@endforelse
                      

                       
                    </div>
                </div>
            </div>
        </section>
        <!--fourth banner ends here-->


        <section class="hoa_home-mobileshow" style="background-color: #F2F9F9; ">
            <div class="container" style="position: relative;">
                <div class="row wrapper">
                    <div id="carouselExampleIndicators" class="carousel slide service-carousel" data-bs-ride="carousel">
                        <div class="carousel-indicators home_process_indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner" style="height:575px">
                            <div class="carousel-item active">
                                <div class="col-lg-4 col-md-6 col-12 m-auto hoverCard">
                                    <div class="home_cardlayer" style="position: relative;">
                                        <div class="card-layer1 mb-5">
                                            <div class="card-home">
                                                <p class="plan-name">Customized plan</p>
                                                <div class="card-img-home">
                                                    <img src="assets/images/custom-plan.svg" class="" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-layer2">
                                            <div class="card-home2">
                                                <p class="plan-name">Customized plan</p>
                                                <div class="card-data">
                                                    <div class="m-auto col-2">
                                                        <img src="assets/images/cust-rupee.svg" class="" />
                                                    </div>
                                                    <h5 class="card-text col-10 m-auto">Do you want to customize
                                                        your
                                                        services with your business needs?
                                                        This plan is the one, No need to pay extra money for the
                                                        byparts of the services
                                                        that have no use for you. Get exact money quotation for the
                                                        services
                                                        which you can cutomize yourself.</h5>
                                                    <button class="card-button mt-5">Connect us</button>
                                                    <a href="DashboardServices/DashboardHome.html"
                                                        class="card-link mt-3">Go to
                                                        Dashboard</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item mb-5">
                                <div class="col-lg-4 col-md-6 hoverCard mt-md-0 col-12 m-auto">
                                    <div class="home_cardlayer" style="position: relative;">
                                        <div class="card-layer1">
                                            <div class="card-home">
                                                <p class="plan-name">Fixed Price Plan</p>
                                                <div class="card-img-home">
                                                    <img src="assets/images/fix-plan.svg" class="" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-layer2">
                                            <div class="card-home2">
                                                <p class="plan-name">Fixed Price Plan</p>
                                                <div class="card-data">
                                                    <div class="m-auto col-2">
                                                        <img src="assets/images/fixed-diary.svg" class="" />
                                                    </div>
                                                    <h5 class="card-text col-10 m-auto mb-4">Just pick the plan that
                                                        fit’s best with
                                                        your
                                                        business Needs and Get Started with your Accouting services
                                                        right away.
                                                        if you are a new startup, we have great deals
                                                        for you which can save a lot of efforts and money.</h5>
                                                    <button class="card-button mt-5">Connect us</button>
                                                    <a href="userDashboard/fixed-plan.html" class="card-link mt-3">Learn
                                                        more
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item mb-5">
                                <div class="col-lg-4 col-md-6 mt-md-0 col-12 m-auto hoverCard">
                                    <div class="home_cardlayer" style="position: relative;">
                                        <div class="card-layer1">
                                            <div class="card-home">
                                                <p class="plan-name">Dedicated account</p>
                                                <div class="card-img-home">
                                                    <img src="assets/images/dedicate-plan.svg" class="" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-layer2">
                                            <div class="card-home2">
                                                <p class="plan-name">Customized plan</p>
                                                <div class="card-data">
                                                    <div class="m-auto col-2">
                                                        <img src="assets/images/dedicated-man.svg" class="" />
                                                    </div>
                                                    <h5 class="card-text col-10 m-auto">Hire a Dedicated accountant
                                                        for yourself.
                                                        Your accountant can deep dive in your busness
                                                        and understand all financial requirements,
                                                        helping you creat a solid budget and monthly adjustments to
                                                        keep your finances
                                                        in the black at all time.</h5>
                                                    <button class="card-button mt-5">Connect us</button>
                                                    <a href="DashboardServices/DashboardHome.html"
                                                        class="card-link mt-3">Learn more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!--fifth banner starts here-->
        <section style="position:relative;">
            <div class="container hoa_home-fifthBanner mb-5">
                <div class="col-md-12">
                    <div class="home_processTaxt" style="text-align: center;">
                        <h1>Process</h1>
                    </div>
                    <div class="col-md-12">
                        <div class="home_paraTaxt">
                            <p>With few simple steps you can start your <br>
                                accounting journey with us.</p>
                        </div>
                    </div>

                </div>
                <div class="row ">
                    <div class="col-md-12 mobile_device_show">
                        <div class="owl-carousel sters-carousel owl-theme mt-2 steps-mobile">
                            <div class="item">

                                <img src="assets/images/pro-a-1.svg" alt="" class="steper-img">
                                <div class="accountJournyText mobile_journyTaxt">Get your price</div>

                            </div>

                            <div class="item">

                                <img src="assets/images/pro-a-2.svg" alt="" class="steper-img">
                                <div class="accountJournyText mobile_journyTaxt">Get your price</div>

                            </div>

                            <div class="item">

                                <img src="assets/images/pro-a-3.svg" alt="" class="steper-img">
                                <div class="accountJournyText mobile_journyTaxt">Get your price</div>

                            </div>

                            <div class="item">

                                <img src="assets/images/pro-a-4.svg" alt="" class="steper-img">
                                <div class="accountJournyText mobile_journyTaxt">Get your price</div>

                            </div>
                        </div>
                    </div>
                </div>

                <div id="accountJourny" class="carousel mobile_carousel slide col-12 mt-md-5 pt-md-5"
                    data-bs-ride="carousel" data-bs-interval="2000">
                    <div class="carousel-indicators ps-0 pe-0 row m-auto">
                        <div class="col-md-3">
                            <div type="button" data-bs-target="#accountJourny" data-bs-slide-to="0"
                                class="active accountCarousel" aria-current="true" aria-label="Slide 1">
                                <img src="assets/images/pro-1.svg" width="100%" height="auto" class="imgHide" alt="">
                                <img src="assets/images/pro-a-1.svg" width="100%" height="auto" class="imgShow" alt="">
                                <div class="accountJournyText">Select your service</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div type="button" data-bs-target="#accountJourny" class="accountCarousel carouselhome"
                                data-bs-slide-to="1" aria-label="Slide 2">
                                <img src="assets/images/pro-2.svg" width="100%" height="auto" class="imgHide" alt="">
                                <img src="assets/images/pro-a-2.svg" width="100%" height="auto" class="imgShow" alt="">
                                <div class="accountJournyText">Fill company details</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div type="button" data-bs-target="#accountJourny" class="accountCarousel carouselhome"
                                data-bs-slide-to="2" aria-label="Slide 3">
                                <img src="assets/images/pro-3.svg" width="100%" height="auto" class="imgHide" alt="">
                                <img src="assets/images/pro-a-3.svg" width="100%" height="auto" class="imgShow" alt="">
                                <div class="accountJournyText">Get your price</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div type="button" data-bs-target="#accountJourny" class="accountCarousel carouselhome"
                                data-bs-slide-to="3" aria-label="Slide 4">
                                <img src="assets/images/pro-4.svg" width="100%" height="auto" class="imgHide" alt="">
                                <img src="assets/images/pro-a-4.svg" width="100%" height="auto" class="imgShow" alt="">
                                <div class="accountJournyText"> Make a payment / call</div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-inner d-none">
                        <div class="carousel-item active">
                            <img src="" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--fifth banner ends here-->

        <!--sixth banner starts here-->
        <section class="home-sixth-mobile" style="background:#F2F9F9;">
            <div class="container">
                <div class="row hoa_home-sixth m-auto">
                    <div class="col-md-6" style="background: #239C9C;">
                        <div class="col-md-10 m-auto">
                            <div class="sixth_left_head">You can Trust Us</div>
                            <p class="sixth_left_p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ac
                                nec
                                odio
                                mi
                                ut mattis lectus
                                tincidunt. Quam cursus
                                est justo tempor laoreet tincidunt elit. Nisi, elementum tortor suspendisse ultricies
                                cursus.
                                Quisque dapibus sed est
                                elementum. Phasellus quis in diam, dictum eget. Egestas diam auctor vestibulum
                                tristique. Ac
                                nisi nisl facilisis vitae
                                est adipiscing. Orci ut vulputate felis interdum massa imperdiet quis mauris. Risus vel
                                sit
                                lacus, cursus facilisis.
                                Elit eget sed semper ut urna ut egestas. Pretium eu arcu volutpat lorem. Porttitor.</p>
                            <div class="col-md-12 about-mobile-device">
                                <a class="sixth_button" href="#">About us</a>
                            </div>
                        </div>
                    </div>

                    <!--right side-->
                    <div class="col-md-6">
                        <div class="six_right_div col-md-9  m-auto">
                            <h2 class="sixth_right_head">Things You Don’t Have to<br>
                                <span style="color: #000;">Worry about</span>
                            </h2>

                            <div class="mt-4 moble-device">
                                <img src="assets/images/data-sec.svg" alt="">
                            </div>
                            <div class="mt-4 moble-device">
                                <img src="assets/images/mis-report.svg" alt="">
                            </div>
                            <div class="mt-4 moble-device">
                                <img src="assets/images/ontime-del.svg" alt="">
                            </div>
                            <div class="mt-4 moble-device">
                                <img src="assets/images/error-free.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--sixth banner ends here-->

        <!--seventh banner starts here-->
        <section class="">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-6">
                        <div class="col-md-10 m-auto">
                            <h2 class="seventh-header">What people say about our services</h2>
                            <p class="seventh-para mt-3">Get to know the working environment of
                                house of accounts from our accountants.</p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-5">
                        <div class="carousel_section mb-5">
                            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                                <div class="carousel-inner ">
                                    <div class="carousel-item active" data-bs-interval="10000">
                                        <div class="col-12">
                                            <div class="testimonial_doder">
                                                <div class="testimonial_imagetaxt mt-4 mx-4">
                                                    <p class="mb-0 home-client-name">
                                                        <img src="assets/images/himanshu.svg" class="me-2"
                                                            alt="">Himanshu goel
                                                    </p>
                                                    <p class="really_taxt">It’s really great to be a member of HOA team,
                                                        all co workers are adipiscing enim lobortis sit condimentum
                                                        lobortis aenean ultrices. Risus ornare dignissim condimentum
                                                        elementum enim sit. Adipiscing vestibulum scelerisque
                                                        condimentum consectetur. </p>
                                                </div>
                                                <div class="row mb-4 mt-5">
                                                    <div class="col-6 mx-4">
                                                        <div class="">
                                                            <img src="assets/images/play-video-home.svg" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item" data-bs-interval="2000">
                                        <div class="col-12">
                                            <div class="testimonial_doder">
                                                <div class="testimonial_imagetaxt mt-4 mx-4">
                                                    <p class="mb-0 home-client-name">
                                                        <img src="assets/images/himanshu.svg" class="me-2"
                                                            alt="">Himanshu goel
                                                    </p>
                                                    <p class="really_taxt">It’s really great to be a member of HOA team,
                                                        all co workers are adipiscing enim lobortis sit condimentum
                                                        lobortis aenean ultrices. Risus ornare dignissim condimentum
                                                        elementum enim sit. Adipiscing vestibulum scelerisque
                                                        condimentum consectetur. </p>
                                                </div>
                                                <div class="row mb-4 mt-5">
                                                    <div class="col-6 mx-4">
                                                        <div class="">
                                                            <img src="assets/images/play-video-home.svg" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="col-12">
                                            <div class="testimonial_doder">
                                                <div class="testimonial_imagetaxt mt-4 mx-4">
                                                    <p class="mb-0 home-client-name">
                                                        <img src="assets/images/himanshu.svg" class="me-2"
                                                            alt="">Himanshu goel
                                                    </p>
                                                    <p class="really_taxt">It’s really great to be a member of HOA team,
                                                        all co workers are adipiscing enim lobortis sit condimentum
                                                        lobortis aenean ultrices. Risus ornare dignissim condimentum
                                                        elementum enim sit. Adipiscing vestibulum scelerisque
                                                        condimentum consectetur. </p>
                                                </div>
                                                <div class="row mb-4 mt-5">
                                                    <div class="col-6 mx-4">
                                                        <div class="">
                                                            <img src="assets/images/play-video-home.svg" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <button class="carousel-control-next left_testmonial" type="button"
                                    data-bs-target="#carouselExampleDark" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                                <button class="carousel-control-prev right_testmonial" type="button"
                                    data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--seventh banner ends here-->

        <!--eigth-th section start here-->
        <section>
            <div class="eigth-div">
                <div class="eight-h2 mb-2">See the Big Picture</div>
                <div class="col-md-8 m-auto">
                    <div class="backgrnd container">
                        <img src="assets/images/logoWithPhoto.png" class="mobile_device_videoImage" />
                    </div>
                </div>
                <button style="z-index: 3;position: absolute;background-color: transparent;border: none;">
                    <img src="assets/images/play.svg" />
                </button>
            </div>
        </section>
        <!--eigth-th section ends here-->

        <!--ninth section starts here-->
        <section class="ninth-div">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 m-auto">
                        <div class="col-md-10 m-auto">
                            <div class="ninth-h">Learn with Blogs<br>
                                and videos</div>
                            <div class="ninth-left-h1 col-md-9 mt-3">
                                Are you New to Accounting World?
                            </div>

                            <div class="ninth-left-p col-md-10 me-auto">
                                Learn Everything about our services and the basics of
                                accounting so that you can select the best for yourself.
                            </div>

                            <div class="col-md-5 me-auto moble-device mt-5">
                                <a class="btn hoa_home-button2" href="Blogs/Blogs.html">Start
                                    Learning</a>
                            </div>
                        </div>
                    </div>

                    <!--right section-->
                    <div class="col-md-6 mt-5">
                        <img src="assets/images/learn-home-blogs.svg" />
                    </div>
                </div>
            </div>
        </section>
        <!--ninth section ends here-->


        <!--tenth section starts here-->
        <section class="tenth-div">
            <div>
                <div class="tenth-h1 pt-5 mb-5">We are social TOO !</div>

                <div style="padding-bottom: 4rem;">
                    <div style="text-align: center;" class="row col-md-4 m-auto">
                        <div class="col-md-3 col-6">
                            <img src="assets/icons/facebook.svg" />
                        </div>
                        <div class="col-md-3 col-6">
                            <img src="assets/icons/linkedin.svg" />
                        </div>
                        <div class="col-md-3 col-6 mt-4 mt-md-0">
                            <img src="assets/icons/instagram.svg" />
                        </div>
                        <div class="col-md-3 col-6 mt-4 mt-md-0">
                            <img src="assets/icons/youtube.svg" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--tenth section ends here-->
@endsection