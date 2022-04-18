@extends('front.layout.frontlayout')
@section('content')
<body>
        @include('front.include.nav')
        <main id="main">
            <!--green banner - READ MORE, LEARN MORE starts here-->
            <div class="container-fluid" style="background:#E9F5F5;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 mb-md-5 mt-5">
                            <h1 class="hoa_blogs-greenBanner-h mt-5">Read more, Learn More.</h1>
                            <h5 class="hoa_blogs-greenBanner-p mb-5 pb-5 mt-2">Explore more about our Services and
                                Stay
                                Updated !
                            </h5>
                        </div>
                        <div class="col-md-5 m-auto">
                            <div class="col-md-10 ms-auto">
                                <img src="../assets/images/blogs-header.svg" class="home_blogMobile" />
                            </div>
                            <!-- <div class="min-image" style="background-image: url('../assets/images/blogs-header.svg');">
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <!--green banner ends here-->
    
            <!--Breadcrumb starts here-->
            <div class="hoa_blogs-breadcrumb">
                <nav aria-label="breadcrumb" class="container">
                    <div class="row py-2">
                        <div class="col-md-9 hoa_blogs-breadcrumb-alignment ps-md-0" style="align-items: flex-start;">
                            <ol class="nav nav-pills breadcrumb mx-1 mx-md-0 m-auto" id="pills-tab" role="tablist">
    
                                <li class="breadcrumb-item m-auto mx-4 learn-blog">Learn with</li>
    
                                <li class="nav-item customNav m-auto" role="presentation">
                                    <a class="nav-link active hoa_blogs-breadcrumb-navPills" id="pills-home-tab"
                                        data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab"
                                        aria-controls="pills-home" aria-selected="true">Blogs</a>
                                </li>
    
                                <li class="nav-item customNav m-auto" role="presentation" aria-current="page">
                                    <a class="nav-link hoa_blogs-breadcrumb-navPills" id="pills-profile-tab"
                                        data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab"
                                        aria-controls="pills-profile" aria-selected="false">Videos</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </nav>
            </div>
            <!--breadcrumb ends here-->
    
            <!--carousel blog posts starts-->
            <div class="container-fluid ps-0 pe-0" style="position: relative;">
                <div class="tab-content blogs_mobileDevice_ta" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
    
                        <div class="container mt-5 mb-5" style="background:#FFFFFF;position: relative;">
                            <div class="col-md-10 m-auto mb-4 mt-5 ps-md-0 pe-md-0">
                                <div id="carouselExampleIndicators" class="carousel slide col-12" data-ride="carousel">
                                    <ol class="carousel-indicators col-12 blogs-carousel">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0"
                                            class="blog_carouselItem active"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"
                                            class="blog_carouselItem"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2"
                                            class="blog_carouselItem"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="show-data custom">
                                            <div class="carousel-item active">
                                                <div class="row m-auto">
                                                    <div class="col-lg-5">
                                                        
                                                        <img src="{{ asset('/') }}featured_image/{{ $blogs->f_image}}" width="100%"
                                                            height="auto" />
                                                    </div>
                                                    <div class="col-lg-7 mb-5 mt-5 mt-md-0">
                                                        <p class="hoa_blogs-blogcarousel-h2">Our Latest Blogs.</p>
                                                        <h2 class="hoa_blogs-blogcarousel-h1">{{ $blogs->tile }}</h2>
                                                        <p class="hoa_blogs-blogcarousel-p">{!! $blogs->summary !!}</p>
                                                        <p class="hoa_blogs-blogcarousel-p mb-4" style="color: #828282;"> 
                                                            {{Carbon\Carbon::parse($blogs->created_at)->format('d F Y')}}

                                                            &nbsp;&nbsp;<b>.</b>&nbsp;&nbsp;4 min</p>
                                                        <div class="mt-5">
                                                            <a href="{{ route('dblog',['slug'=>$blogs->slug]) }}" class="hoa_blogs-blogcarousel-ReadMore">Read Blog</a>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @forelse ($blog as $data )


                                            <div class="carousel-item row m-auto">
                                                <div class="col-md-6">
                                                    <img src="{{ asset('/') }}featured_image/{{ $data->f_image}}" style="width: 426px; height:506px; border-radius:20px" />    </div>
                                                <div class="col-md-6 mb-5 mt-md-0 mt-5">
                                                    <div class="col-md-12 hoa_blogs-breadcrumb-alignment-rightSide">
                                                        <div class="hoa_blogs-blogcarousel-h2">Our Latest Blogs.</div>
                                                        <div class="hoa_blogs-blogcarousel-h1">{{ $data->tile }}</div>
                                                        <p class="hoa_blogs-blogcarousel-p">  {!! $data->summary !!}</p>
                                                        <p class="hoa_blogs-blogcarousel-p mb-5" style="color: #828282;">
                                                            {{Carbon\Carbon::parse($data->created_at)->format('d F Y')}}

                                                            &nbsp;&nbsp;<b>.</b>&nbsp;&nbsp;4 min</p>
                                                    </div>
                                            
                                                    <div class="mt-5" style="text-align: right;">
                                                    <a href="{{ route('dblog',['slug'=>$data->slug]) }}" class="hoa_blogs-blogcarousel-ReadMore">Read Blog</a>
                                                    </div>
                                                </div>
                                            
                                            </div>
                                            @empty
                                                
                                            @endforelse
                                          
    
                                          
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <!--taxation and accoutancy section starts here-->

                      
                       
 

                        <div class="container-fluid blog_mobile_device_content" style="background: #F2F9F9;">

                            <div class="col-lg-4 col-md-6 ms-auto" style="position: relative;">
                                <input type="text" class="searchBar col-md-11" style="float: right;"
                                  wire:model="search"  placeholder="Search for your Blog by category">
                                <span class="searchBarIcon"><button></button></span>
                            </div>
                            </div>
                            <div class="container-fluid blog_mobile_device_content" style="background: #F2F9F9;">
                                
                            
                            
                                @forelse ($cats as $cat )
                            
                              
                            <div class="container pb-1 pt-md-5 ps-0 pe-0">
                                <div class="row mt-5 mb-3">
                                    <h1 class="hoa_blogs-mid1-h1 col-lg-6 col-md-6 ms-lg-4 m-auto mb-md-3">  {{$cat->tile}}
                                    </h1>
                                   
                                </div>
                            
                                <div class="col-md-12 col-12 mt-5 mb-5">
                                    <div class="text-center my-3" style="position: relative;">
                                        <div class=" mx-auto my-auto justify-content-center">
                                            <div id="carousel1" class="owl-carousel owl-carousel1"
                                                style="width: 100%; height: 100%;">
                                               
                                               @php
                                                  
                                                   $blog_id=App\Models\BlogCategory::where('category_id',$cat->id )->get();
                                                   
                                                   $b_id=$blog_id->pluck('blog_id')->toArray();
                                                   $cblogs=App\Models\Blog::where('status',1)->find($b_id);
                                                  
                                                   
                                                          @endphp
                                               
                            @forelse ( $cblogs as $cblog )

                           

                            <div class="item">
                                <div class="card blogs_cardImg">
                                    <div class="card-img">
                                        <img src="{{ asset('/') }}featured_image/{{ $cblog->f_image}}"
                                            style="width:100%" height="auto" />
                                    </div>
                                    <div class="card-img-overlay hoa_blogs-textOnImages-h">
                                        <span class="Blog-cardOverlay-text1">{{  $cblog->tile}}</span><span class="Blog-cardOverlay-text2">
                                            <div class="row hoa_blogs-cardOverlay-Head2Prop">
                                                <div
                                                    class="col-md-7 blog-hovercontent col-12 d-flex m-auto">
                                                    <div class="hoa_blogs-cardOverlay-text2Prop">
                                                        {{Carbon\Carbon::parse($cblog->created_at)->format('d F Y')}} </div>
                                                    <div class=" hoa_blogs-cardOverlay-text2Prop">
                                                        <b>.</b>&nbsp;&nbsp;
                                                        4 min
                                                    </div>
                                                </div>
                                                <div class="col-md-5 col-12" style="text-align:right;">
                                                    <a href="{{ route('dblog',['slug'=>$cblog->slug]) }}" class="card-read">Read &gt;</a>
                                                 
                                                </div>
                                            </div>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            @empty
                                
                            @endforelse
                                        
                                               
                                               
                                            </div>
                            
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @empty
                                         
                            @endforelse
                            
                            
                            
                            </div>
                        
                        <!--taxation and accountancy div ends here-->
    
                        <!--Registration and incorportaion sections starts here-->
    
                       
    
                        <!--Registration and incorportaion sections ends here-->
    
                    </div>
    
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="row m-auto" style="position: relative;">
                            <!-- <div class="fluidMedia">
                                <iframe src="https://www.youtube.com/embed/5_yNu3BVCuQ" frameborder="0"></iframe>
                            </div> -->
                            <img src="../assets/images/blogs-video.svg" width="100%" height="auto" class="ps-0 pe-0" alt="">
                            <div class="m-auto col-md-6 wrapper">
                                <div class="hoa_blogs-secondDiv-img-h3">LATEST UPLOADED</div>
                                <div class="col-md-12 hoa_blogs-secondDiv-img-titleName m-auto">Learn Basics for
                                    Bookkeeping.</div>
    
    
                                <div style="display: flex;justify-content: center;">
                                    <a href="#myModal" class="btn-lg hoa_blogs-secondDiv-img" data-toggle="modal"
                                        type="button"><img src="../assets/icons/blogsPlayIcon.svg" /></a>
                                </div>
                            </div>
                        </div>
    
                        <!---------modal popup start video -->
                        <div class="col-md-12">
                            <div id="myModal" class="modal fade">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
    
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close modal_closebutton"
                                                data-dismiss="modal">&times;</button>
    
                                        </div>
                                        <div class="modal-body">
                                            <div class="videowrapper">
                                                <div class="embed-responsive embed-responsive-16by9 ">
                                                    <iframe id="cartoonVideo"
                                                        class="embed-responsive-item modal_videoresponsive" width="468"
                                                        height="315" src="https://www.youtube.com/embed/tgbNymZ7vqY"
                                                        allowfullscreen></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <!---------modal popup end video -->
    
                        <!--taxation and accoutancy section starts here-->
                        <div class="container-fluid mobile_deviceMargin blog_mobile_device_content"
                            style="background: #F2F9F9;">
                            <div class="container pb-1 pt-md-5 ps-0 pe-0">
                                <div class="row mt-5 mb-3">
                                    <h1 class="hoa_blogs-mid1-h1 col-lg-6 col-md-6 ms-lg-4 m-auto mb-md-3">Taxation and
                                        Accountancy
                                    </h1>
                                    <div class="col-lg-4 col-md-6 ms-auto" style="position: relative;">
                                        <input type="text" class="searchBar col-md-11" style="float: right;"
                                            placeholder="Search for your Blog by category">
                                        <span class="searchBarIcon"><button><img src="{{asset('/')}}assets/images/blog-search-icon.svg"
                                                    alt=""></button></span>
                                    </div>
                                </div>
                                <div class="col-md-12 col-12 mt-5 mb-5">
                                    <div class="text-center my-3" style="position: relative;">
                                        <div class=" mx-auto my-auto justify-content-center">
                                            <div id="carousel1" class="owl-carousel owl-carousel1"
                                                style="width: 100%; height: 100%;">
                                                <div class="item">
                                                    <div class="card blogs_cardImg">
                                                        <div class="card-img">
                                                            <img src="{{asset('/')}}assets/images/taxation-image.png"
                                                                style="width:100%" height="auto" />
                                                        </div>
                                                        <div class="card-img-overlay hoa_blogs-textOnImages-h">
                                                            <span class="Blog-cardOverlay-text1">All About
                                                                Taxation.</span><span class="Blog-cardOverlay-text2">
                                                                <div class="row hoa_blogs-cardOverlay-Head2Prop">
                                                                    <div class="col-md-12 col-12 ms-auto"
                                                                        style="text-align:right;">
                                                                        <a href="#myModal"
                                                                            class="card-read video_playbutton"
                                                                            data-toggle="modal" type="button">
                                                                            <img src="{{asset('/')}}assets/images/blog-play.png"
                                                                                alt="">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="card blogs_cardImg">
                                                        <div class="card-img">
                                                            <img src="{{asset('/')}}assets/images/taxation-image.png"
                                                                style="width:100%" height="auto" />
                                                        </div>
                                                        <div class="card-img-overlay hoa_blogs-textOnImages-h">
                                                            <span class="Blog-cardOverlay-text1">All About
                                                                Taxation.</span><span class="Blog-cardOverlay-text2">
                                                                <div class="row hoa_blogs-cardOverlay-Head2Prop">
                                                                    <div class="col-md-12 col-12 ms-auto"
                                                                        style="text-align:right;">
                                                                        <a href="#myModal"
                                                                            class="card-read video_playbutton"
                                                                            data-toggle="modal" type="button">
                                                                            <img src="{{asset('/')}}assets/images/blog-play.png"
                                                                                alt="">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="card blogs_cardImg">
                                                        <div class="card-img">
                                                            <img src="{{asset('/')}}assets/images/taxation-image.png"
                                                                style="width:100%" height="auto" />
                                                        </div>
                                                        <div class="card-img-overlay hoa_blogs-textOnImages-h">
                                                            <span class="Blog-cardOverlay-text1">All About
                                                                Taxation.</span><span class="Blog-cardOverlay-text2">
                                                                <div class="row hoa_blogs-cardOverlay-Head2Prop">
                                                                    <div class="col-md-12 col-12 ms-auto"
                                                                        style="text-align:right;">
                                                                        <a href="#myModal"
                                                                            class="card-read video_playbutton"
                                                                            data-toggle="modal" type="button">
                                                                            <img src="{{asset('/')}}assets/images/blog-play.png"
                                                                                alt="">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="card blogs_cardImg">
                                                        <div class="card-img">
                                                            <img src="{{asset('/')}}assets/images/taxation-image.png"
                                                                style="width:100%" height="auto" />
                                                        </div>
                                                        <div class="card-img-overlay hoa_blogs-textOnImages-h">
                                                            <span class="Blog-cardOverlay-text1">All About
                                                                Taxation.</span><span class="Blog-cardOverlay-text2">
                                                                <div class="row hoa_blogs-cardOverlay-Head2Prop">
                                                                    <div class="col-md-12 col-12 ms-auto"
                                                                        style="text-align:right;">
                                                                        <a href="#myModal"
                                                                            class="card-read video_playbutton"
                                                                            data-toggle="modal" type="button">
                                                                            <img src="{{asset('/')}}assets/images/blog-play.png"
                                                                                alt="">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="card blogs_cardImg">
                                                        <div class="card-img">
                                                            <img src="../assets/images/taxation-image.png"
                                                                style="width:100%" height="auto" />
                                                        </div>
                                                        <div class="card-img-overlay hoa_blogs-textOnImages-h">
                                                            <span class="Blog-cardOverlay-text1">All About
                                                                Taxation.</span><span class="Blog-cardOverlay-text2">
                                                                <div class="row hoa_blogs-cardOverlay-Head2Prop">
                                                                    <div class="col-md-12 col-12 ms-auto"
                                                                        style="text-align:right;">
                                                                        <a href="#myModal"
                                                                            class="card-read video_playbutton"
                                                                            data-toggle="modal" type="button">
                                                                            <img src="../assets/images/blog-play.png"
                                                                                alt="">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="card blogs_cardImg">
                                                        <div class="card-img">
                                                            <img src="../assets/images/taxation-image.png"
                                                                style="width:100%" height="auto" />
                                                        </div>
                                                        <div class="card-img-overlay hoa_blogs-textOnImages-h">
                                                            <span class="Blog-cardOverlay-text1">All About
                                                                Taxation.</span><span class="Blog-cardOverlay-text2">
                                                                <div class="row hoa_blogs-cardOverlay-Head2Prop">
                                                                    <div class="col-md-12 col-12 ms-auto"
                                                                        style="text-align:right;">
                                                                        <a href="#myModal"
                                                                            class="card-read video_playbutton"
                                                                            data-toggle="modal" type="button">
                                                                            <img src="../assets/images/blog-play.png"
                                                                                alt="">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
    
                                            <!-- <div id="recipeCarousel1" class="carousel slide" data-bs-ride="carousel">
                                                <div class="carousel-inner" role="listbox">
                                                    <div class="custom carousel-custom">
                                                        <div class="carousel-item active">
                                                            <div class="col-md-4 col-12">
                                                                <div class="card blogs_cardImg">
                                                                    <div class="card-img">
                                                                        <img src="../assets/images/taxation-image.png"
                                                                            style="width:100%" height="auto" />
                                                                    </div>
                                                                    <div class="card-img-overlay hoa_blogs-textOnImages-h">
                                                                        <span class="Blog-cardOverlay-text1">All About
                                                                            Taxation.</span><span
                                                                            class="Blog-cardOverlay-text2">
                                                                            <div
                                                                                class="row hoa_blogs-cardOverlay-Head2Prop">
                                                                                <div class="col-12 col-md-7 d-flex m-auto">
                                                                                    <div
                                                                                        class="hoa_blogs-cardOverlay-text2Prop col-md-7 ps-0 pe-0">
                                                                                        21 june, 2021 </div>
                                                                                    <div
                                                                                        class="col-md-5 m-auto hoa_blogs-cardOverlay-text2Prop">
                                                                                        <b>.</b>&nbsp;&nbsp;
                                                                                        4 min
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12 col-md-5 m-auto"
                                                                                    style="text-align:right;">
                                                                                    <a href="" class="card-read">Read ></a>
                                                                                </div>
                                                                            </div>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 col-12">
                                                                <div class="card blogs_cardImg">
                                                                    <div class="card-img">
                                                                        <img src="../assets/images/taxation-image.png"
                                                                            style="width:100%" height="auto" />
                                                                    </div>
                                                                    <div class="card-img-overlay hoa_blogs-textOnImages-h">
                                                                        <span class="Blog-cardOverlay-text1">All About
                                                                            Taxation.</span><span
                                                                            class="Blog-cardOverlay-text2">
                                                                            <div
                                                                                class="row hoa_blogs-cardOverlay-Head2Prop">
                                                                                <div class="col-7 d-flex m-auto">
                                                                                    <div
                                                                                        class="hoa_blogs-cardOverlay-text2Prop col-md-7 ps-0 pe-0">
                                                                                        21 june, 2021 </div>
                                                                                    <div
                                                                                        class="col-md-5 hoa_blogs-cardOverlay-text2Prop">
                                                                                        <b>.</b>&nbsp;&nbsp;
                                                                                        4 min
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-5"
                                                                                    style="text-align:right;">
                                                                                    <a href="" class="card-read">Read ></a>
                                                                                </div>
                                                                            </div>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 col-12">
                                                                <div class="card blogs_cardImg">
                                                                    <div class="card-img">
                                                                        <img src="../assets/images/taxation-image.png"
                                                                            style="width:100%" height="auto" />
                                                                    </div>
                                                                    <div class="card-img-overlay hoa_blogs-textOnImages-h">
                                                                        <span class="Blog-cardOverlay-text1">All About
                                                                            Taxation.</span><span
                                                                            class="Blog-cardOverlay-text2">
                                                                            <div
                                                                                class="row hoa_blogs-cardOverlay-Head2Prop">
                                                                                <div class="col-7 d-flex m-auto">
                                                                                    <div
                                                                                        class="hoa_blogs-cardOverlay-text2Prop col-md-7 ps-0 pe-0">
                                                                                        21 june, 2021 </div>
                                                                                    <div
                                                                                        class="col-md-5 hoa_blogs-cardOverlay-text2Prop">
                                                                                        <b>.</b>&nbsp;&nbsp;
                                                                                        4 min
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-5"
                                                                                    style="text-align:right;">
                                                                                    <a href="" class="card-read">Read ></a>
                                                                                </div>
                                                                            </div>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
    
                                                        <div class="carousel-item">
                                                            <div class="col-md-4 col-12">
                                                                <div class="card blogs_cardImg">
                                                                    <div class="card-img">
                                                                        <img src="../assets/images/taxation-image.png"
                                                                            style="width:100%" height="auto" />
                                                                    </div>
                                                                    <div class="card-img-overlay hoa_blogs-textOnImages-h">
                                                                        <span class="Blog-cardOverlay-text1">All About
                                                                            Taxation.</span><span
                                                                            class="Blog-cardOverlay-text2">
                                                                            <div
                                                                                class="row hoa_blogs-cardOverlay-Head2Prop">
                                                                                <div class="col-7 d-flex m-auto">
                                                                                    <div
                                                                                        class="hoa_blogs-cardOverlay-text2Prop col-md-7 ps-0 pe-0">
                                                                                        21 june, 2021 </div>
                                                                                    <div
                                                                                        class="col-md-5 hoa_blogs-cardOverlay-text2Prop">
                                                                                        <b>.</b>&nbsp;&nbsp;
                                                                                        4 min
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-5"
                                                                                    style="text-align:right;">
                                                                                    <a href="" class="card-read">Read ></a>
                                                                                </div>
                                                                            </div>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 col-12">
                                                                <div class="card blogs_cardImg">
                                                                    <div class="card-img">
                                                                        <img src="../assets/images/taxation-image.png"
                                                                            style="width:100%" height="auto" />
                                                                    </div>
                                                                    <div class="card-img-overlay hoa_blogs-textOnImages-h">
                                                                        <span class="Blog-cardOverlay-text1">All About
                                                                            Taxation.</span><span
                                                                            class="Blog-cardOverlay-text2">
                                                                            <div
                                                                                class="row hoa_blogs-cardOverlay-Head2Prop">
                                                                                <div class="col-7 d-flex m-auto">
                                                                                    <div
                                                                                        class="hoa_blogs-cardOverlay-text2Prop col-md-7 ps-0 pe-0">
                                                                                        21 june, 2021 </div>
                                                                                    <div
                                                                                        class="col-md-5 hoa_blogs-cardOverlay-text2Prop">
                                                                                        <b>.</b>&nbsp;&nbsp;
                                                                                        4 min
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-5"
                                                                                    style="text-align:right;">
                                                                                    <a href="" class="card-read">Read ></a>
                                                                                </div>
                                                                            </div>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 col-12">
                                                                <div class="card blogs_cardImg">
                                                                    <div class="card-img">
                                                                        <img src="../assets/images/taxation-image.png"
                                                                            style="width:100%" height="auto" />
                                                                    </div>
                                                                    <div class="card-img-overlay hoa_blogs-textOnImages-h">
                                                                        <span class="Blog-cardOverlay-text1">All About
                                                                            Taxation.</span><span
                                                                            class="Blog-cardOverlay-text2">
                                                                            <div
                                                                                class="row hoa_blogs-cardOverlay-Head2Prop">
                                                                                <div class="col-7 d-flex m-auto">
                                                                                    <div
                                                                                        class="hoa_blogs-cardOverlay-text2Prop col-md-7 ps-0 pe-0">
                                                                                        21 june, 2021 </div>
                                                                                    <div
                                                                                        class="col-md-5 hoa_blogs-cardOverlay-text2Prop">
                                                                                        <b>.</b>&nbsp;&nbsp;
                                                                                        4 min
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-5"
                                                                                    style="text-align:right;">
                                                                                    <a href="" class="card-read">Read ></a>
                                                                                </div>
                                                                            </div>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
    
                            </div>
                        </div>
                        <!--taxation and accountancy div ends here-->
    
                        <!--Registration and incorportaion sections starts here-->
    
    
                        <div class="container-fluid" style="background: #FFFFFF;">
                            <div class="container">
                                <div class="row" style="padding-bottom:3%;padding-top: 3%;">
                                    <h1 class="hoa_blogs-mid1-h1 col-lg-6 ms-lg-4 m-auto">Registration and Incorporation
                                    </h1>
                                    <div class="col-md-12 col-12 mt-5 mb-5">
                                        <div class="text-center my-3" style="position: relative;">
                                            <div class=" mx-auto my-auto justify-content-center">
                                                <div id="carousel1" class="owl-carousel owl-carousel1"
                                                    style="width: 100%; height: 100%;">
                                                    <div class="item">
                                                        <div class="card blogs_cardImg">
                                                            <div class="card-img">
                                                                <img src="{{asset('/')}}assets/images/taxation-image.png"
                                                                    style="width:100%" height="auto" />
                                                            </div>
                                                            <div class="card-img-overlay hoa_blogs-textOnImages-h">
                                                                <span class="Blog-cardOverlay-text1">All About
                                                                    Taxation.</span><span class="Blog-cardOverlay-text2">
                                                                    <div class="row hoa_blogs-cardOverlay-Head2Prop">
                                                                        <div class="col-6 ms-auto"
                                                                            style="text-align:right;">
                                                                            <a href="#myModal"
                                                                                class="card-read video_playbutton"
                                                                                data-toggle="modal" type="button">
                                                                                <img src="{{asset('/')}}assets/images/blog-play.png"
                                                                                    alt="">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="card blogs_cardImg">
                                                            <div class="card-img">
                                                                <img src="{{asset('/')}}assets/images/taxation-image.png"
                                                                    style="width:100%" height="auto" />
                                                            </div>
                                                            <div class="card-img-overlay hoa_blogs-textOnImages-h">
                                                                <span class="Blog-cardOverlay-text1">All About
                                                                    Taxation.</span><span class="Blog-cardOverlay-text2">
                                                                    <div class="row hoa_blogs-cardOverlay-Head2Prop">
                                                                        <div class="col-6 ms-auto"
                                                                            style="text-align:right;">
                                                                            <a href="#myModal"
                                                                                class="card-read video_playbutton"
                                                                                data-toggle="modal" type="button">
                                                                                <img src="{{asset('/')}}assets/images/blog-play.png"
                                                                                    alt="">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="card blogs_cardImg">
                                                            <div class="card-img">
                                                                <img src="{{asset('/')}}assets/images/taxation-image.png"
                                                                    style="width:100%" height="auto" />
                                                            </div>
                                                            <div class="card-img-overlay hoa_blogs-textOnImages-h">
                                                                <span class="Blog-cardOverlay-text1">All About
                                                                    Taxation.</span><span class="Blog-cardOverlay-text2">
                                                                    <div class="row hoa_blogs-cardOverlay-Head2Prop">
                                                                        <div class="col-6 ms-auto"
                                                                            style="text-align:right;">
                                                                            <a href="#myModal"
                                                                                class="card-read video_playbutton"
                                                                                data-toggle="modal" type="button">
                                                                                <img src="../assets/images/blog-play.png"
                                                                                    alt="">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="card blogs_cardImg">
                                                            <div class="card-img">
                                                                <img src="../assets/images/taxation-image.png"
                                                                    style="width:100%" height="auto" />
                                                            </div>
                                                            <div class="card-img-overlay hoa_blogs-textOnImages-h">
                                                                <span class="Blog-cardOverlay-text1">All About
                                                                    Taxation.</span><span class="Blog-cardOverlay-text2">
                                                                    <div class="row hoa_blogs-cardOverlay-Head2Prop">
                                                                        <div class="col-6 ms-auto"
                                                                            style="text-align:right;">
                                                                            <a href="#myModal"
                                                                                class="card-read video_playbutton"
                                                                                data-toggle="modal" type="button">
                                                                                <img src="../assets/images/blog-play.png"
                                                                                    alt="">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="card blogs_cardImg">
                                                            <div class="card-img">
                                                                <img src="../assets/images/taxation-image.png"
                                                                    style="width:100%" height="auto" />
                                                            </div>
                                                            <div class="card-img-overlay hoa_blogs-textOnImages-h">
                                                                <span class="Blog-cardOverlay-text1">All About
                                                                    Taxation.</span><span class="Blog-cardOverlay-text2">
                                                                    <div class="row hoa_blogs-cardOverlay-Head2Prop">
                                                                        <div class="col-6 ms-auto"
                                                                            style="text-align:right;">
                                                                            <a href="#myModal"
                                                                                class="card-read video_playbutton"
                                                                                data-toggle="modal" type="button">
                                                                                <img src="../assets/images/blog-play.png"
                                                                                    alt="">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="card blogs_cardImg">
                                                            <div class="card-img">
                                                                <img src="../assets/images/taxation-image.png"
                                                                    style="width:100%" height="auto" />
                                                            </div>
                                                            <div class="card-img-overlay hoa_blogs-textOnImages-h">
                                                                <span class="Blog-cardOverlay-text1">All About
                                                                    Taxation.</span><span class="Blog-cardOverlay-text2">
                                                                    <div class="row hoa_blogs-cardOverlay-Head2Prop">
                                                                        <div class="col-6 ms-auto"
                                                                            style="text-align:right;">
                                                                            <a href="#myModal"
                                                                                class="card-read video_playbutton"
                                                                                data-toggle="modal" type="button">
                                                                                <img src="../assets/images/blog-play.png"
                                                                                    alt="">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
    
                                                <!-- <div id="recipeCarousel1" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner" role="listbox">
                                        <div class="custom carousel-custom">
                                            <div class="carousel-item active">
                                                <div class="col-md-4 col-12">
                                                    <div class="card blogs_cardImg">
                                                        <div class="card-img">
                                                            <img src="../assets/images/taxation-image.png"
                                                                style="width:100%" height="auto" />
                                                        </div>
                                                        <div class="card-img-overlay hoa_blogs-textOnImages-h">
                                                            <span class="Blog-cardOverlay-text1">All About
                                                                Taxation.</span><span
                                                                class="Blog-cardOverlay-text2">
                                                                <div
                                                                    class="row hoa_blogs-cardOverlay-Head2Prop">
                                                                    <div class="col-12 col-md-7 d-flex m-auto">
                                                                        <div
                                                                            class="hoa_blogs-cardOverlay-text2Prop col-md-7 ps-0 pe-0">
                                                                            21 june, 2021 </div>
                                                                        <div
                                                                            class="col-md-5 m-auto hoa_blogs-cardOverlay-text2Prop">
                                                                            <b>.</b>&nbsp;&nbsp;
                                                                            4 min
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-md-5 m-auto"
                                                                        style="text-align:right;">
                                                                        <a href="" class="card-read">Read ></a>
                                                                    </div>
                                                                </div>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-12">
                                                    <div class="card blogs_cardImg">
                                                        <div class="card-img">
                                                            <img src="../assets/images/taxation-image.png"
                                                                style="width:100%" height="auto" />
                                                        </div>
                                                        <div class="card-img-overlay hoa_blogs-textOnImages-h">
                                                            <span class="Blog-cardOverlay-text1">All About
                                                                Taxation.</span><span
                                                                class="Blog-cardOverlay-text2">
                                                                <div
                                                                    class="row hoa_blogs-cardOverlay-Head2Prop">
                                                                    <div class="col-7 d-flex m-auto">
                                                                        <div
                                                                            class="hoa_blogs-cardOverlay-text2Prop col-md-7 ps-0 pe-0">
                                                                            21 june, 2021 </div>
                                                                        <div
                                                                            class="col-md-5 hoa_blogs-cardOverlay-text2Prop">
                                                                            <b>.</b>&nbsp;&nbsp;
                                                                            4 min
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-5"
                                                                        style="text-align:right;">
                                                                        <a href="" class="card-read">Read ></a>
                                                                    </div>
                                                                </div>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-12">
                                                    <div class="card blogs_cardImg">
                                                        <div class="card-img">
                                                            <img src="../assets/images/taxation-image.png"
                                                                style="width:100%" height="auto" />
                                                        </div>
                                                        <div class="card-img-overlay hoa_blogs-textOnImages-h">
                                                            <span class="Blog-cardOverlay-text1">All About
                                                                Taxation.</span><span
                                                                class="Blog-cardOverlay-text2">
                                                                <div
                                                                    class="row hoa_blogs-cardOverlay-Head2Prop">
                                                                    <div class="col-7 d-flex m-auto">
                                                                        <div
                                                                            class="hoa_blogs-cardOverlay-text2Prop col-md-7 ps-0 pe-0">
                                                                            21 june, 2021 </div>
                                                                        <div
                                                                            class="col-md-5 hoa_blogs-cardOverlay-text2Prop">
                                                                            <b>.</b>&nbsp;&nbsp;
                                                                            4 min
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-5"
                                                                        style="text-align:right;">
                                                                        <a href="" class="card-read">Read ></a>
                                                                    </div>
                                                                </div>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
    
                                            <div class="carousel-item">
                                                <div class="col-md-4 col-12">
                                                    <div class="card blogs_cardImg">
                                                        <div class="card-img">
                                                            <img src="../assets/images/taxation-image.png"
                                                                style="width:100%" height="auto" />
                                                        </div>
                                                        <div class="card-img-overlay hoa_blogs-textOnImages-h">
                                                            <span class="Blog-cardOverlay-text1">All About
                                                                Taxation.</span><span
                                                                class="Blog-cardOverlay-text2">
                                                                <div
                                                                    class="row hoa_blogs-cardOverlay-Head2Prop">
                                                                    <div class="col-7 d-flex m-auto">
                                                                        <div
                                                                            class="hoa_blogs-cardOverlay-text2Prop col-md-7 ps-0 pe-0">
                                                                            21 june, 2021 </div>
                                                                        <div
                                                                            class="col-md-5 hoa_blogs-cardOverlay-text2Prop">
                                                                            <b>.</b>&nbsp;&nbsp;
                                                                            4 min
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-5"
                                                                        style="text-align:right;">
                                                                        <a href="" class="card-read">Read ></a>
                                                                    </div>
                                                                </div>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-12">
                                                    <div class="card blogs_cardImg">
                                                        <div class="card-img">
                                                            <img src="../assets/images/taxation-image.png"
                                                                style="width:100%" height="auto" />
                                                        </div>
                                                        <div class="card-img-overlay hoa_blogs-textOnImages-h">
                                                            <span class="Blog-cardOverlay-text1">All About
                                                                Taxation.</span><span
                                                                class="Blog-cardOverlay-text2">
                                                                <div
                                                                    class="row hoa_blogs-cardOverlay-Head2Prop">
                                                                    <div class="col-7 d-flex m-auto">
                                                                        <div
                                                                            class="hoa_blogs-cardOverlay-text2Prop col-md-7 ps-0 pe-0">
                                                                            21 june, 2021 </div>
                                                                        <div
                                                                            class="col-md-5 hoa_blogs-cardOverlay-text2Prop">
                                                                            <b>.</b>&nbsp;&nbsp;
                                                                            4 min
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-5"
                                                                        style="text-align:right;">
                                                                        <a href="" class="card-read">Read ></a>
                                                                    </div>
                                                                </div>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-12">
                                                    <div class="card blogs_cardImg">
                                                        <div class="card-img">
                                                            <img src="../assets/images/taxation-image.png"
                                                                style="width:100%" height="auto" />
                                                        </div>
                                                        <div class="card-img-overlay hoa_blogs-textOnImages-h">
                                                            <span class="Blog-cardOverlay-text1">All About
                                                                Taxation.</span><span
                                                                class="Blog-cardOverlay-text2">
                                                                <div
                                                                    class="row hoa_blogs-cardOverlay-Head2Prop">
                                                                    <div class="col-7 d-flex m-auto">
                                                                        <div
                                                                            class="hoa_blogs-cardOverlay-text2Prop col-md-7 ps-0 pe-0">
                                                                            21 june, 2021 </div>
                                                                        <div
                                                                            class="col-md-5 hoa_blogs-cardOverlay-text2Prop">
                                                                            <b>.</b>&nbsp;&nbsp;
                                                                            4 min
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-5"
                                                                        style="text-align:right;">
                                                                        <a href="" class="card-read">Read ></a>
                                                                    </div>
                                                                </div>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Registration and incorportaion sections ends here-->
    
                    </div>
                </div>
            </div>
            <!--carousel blog posts ends-->
    

@endsection


@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
    integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
    crossorigin="anonymous"></script>
<script src="../assets/js/navigation.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--script to change color on navbar scroll-->


<script>

    $(document).ready(function () {
        /* Get iframe src attribute value i.e. YouTube video url
        and store it in a variable */
        var url = $("#cartoonVideo").attr('src');

        /* Assign empty url value to the iframe src attribute when
        modal hide, which stop the video playing */
        $("#myModal").on('hide.bs.modal', function () {
            $("#cartoonVideo").attr('src', '');
        });

        /* Assign the initially stored url back to the iframe src
        attribute when modal is displayed again */
        $("#myModal").on('show.bs.modal', function () {
            $("#cartoonVideo").attr('src', url);
        });
    });
</script>

<script>
    $(function () {
        $(document).scroll(function () {
            var $nav = $(".sticky-top");
            $nav.toggleClass('scrolledGreen', $(this).scrollTop() > $nav.height());
        });
    });
</script>

<script>
    $(".owl-carousel1").owlCarousel({
        autoplay: true,
        rewind: true, /* use rewind if you don't want loop */
        margin: 20,
        autoplayTimeout: 7000,
        smartSpeed: 800,
        nav: true,
        loop: true,
        dots: false,
        responsive: {
            0: {
                items: 1
            },

            600: {
                items: 2
            },
            1366: {
                items: 3
            }
        }
    });
</script>
@endsection