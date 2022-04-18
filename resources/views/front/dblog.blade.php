@extends('front.layout.frontlayout')

@section('content')
@include('front.include.nav')

<main id="main">

    <!--Breadcrumb starts here-->
    <div class="hoa_blogs-breadcrumb blog_detailBackground white-bg" style="background-color:#F6F6F6;">
        <div class="container">
            <nav>
                <div class="row">
                    <div class="col-md-12 m-auto">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item blogs_nav mt-3"><a href="#">Home</a></li>
                                <li class="breadcrumb-item blogs_nav mt-3 active" aria-current="page">blogs</li>
                            </ol>
                        </nav>

                    </div>
                </div>
            </nav>
        </div>

    </div>
    <!--breadcrumb ends here-->

    <!--blogs background section starts here-->
    <section class="">
        <div class="row m-auto ps-0 pe-0">
            <div style="background-image:url('../assets/images/blogs-bg.svg');" class="min-image ps-0 pe-0"></div>
        </div>
    </section>
    <!--blogs background section starts here-->

    <section class="blogs_menusection">
        <div class="container">
            <div class="row m-auto">
                <div class="col-md-3">
                    <div class="mt-5 toggleblog">
                        <span class="series_text"><img src="{{'/'}}assets/icons/navbar-Icon.svg"
                                class="img-fluid image_navbar" alt=""> Series</span>
                    </div>
                    <div class="row" id="blogToHide">
                        <div class="headingblogs_text">
                            @forelse ($cat as $category )
                            <h4 class="headinglogs">{{$category->tile}}</h4>
                            <nav class="navblogs">
                                
                                @forelse ( $category->subcat_name as $subcategory)
                                <ul class="m-0 p-0">
                                    <li class="nav_blogs active">{{$subcategory->sub_name}}</li>
                              
                                </ul>
                                @empty
                                    
                                @endforelse
                              
                               
                            </nav>
                            @empty
                                
                            @endforelse
                           
                        </div>
                        <!-- </div>
                    <div class="row"> -->
                        <div class="content-blogText mt-2">
                            <h5 class="blogs_text">Lorem ipsum dolor sit amet.</h5>
                        </div>

                        <div class="content-blogText mt-2 mb-2">
                            <h5 class="blogs_text">Lorem ipsum dolor sit amet.</h5>
                        </div>

                        <div class="content-blogText">
                            <h5 class="blogs_text">Lorem ipsum dolor sit amet.</h5>
                        </div>

                        <div class="content-blogText mt-2 mb-2">
                            <h5 class="blogs_text textblogs">Lorem ipsum dolor sit.</h5>
                        </div>

                        <div class="mob-hide">
                            <div class="content-blogText col-md-12 mt-2 mb-2">
                                <hr>
                            </div>
                        </div>

                        <div class="mob-hide">
                            <div class="content-blogText blogsText mt-2 mb-2">
                                <h1 class="related_blogsTest">Related Blogs</h1>
                            </div>
                        </div>
                        <div class="mob-hide">
                            <div class="content-blogText mt-2 mb-2">
                                <h5 class="blogs_text">Lorem ipsum dolor sit amet.</h5>
                            </div>
                        </div>
                        <div class="mob-hide">
                            <div class="content-blogText">
                                <h5 class="blogs_text">Lorem ipsum dolor sit amet, consectetur </h5>
                            </div>
                        </div>
                        <div class="mob-hide">
                            <div class="content-blogText mt-2 ">
                                <h5 class="blogs_text textblogs">Lorem ipsum dolor.</h5>
                            </div>
                        </div>
                        <div class="mob-hide">
                            <div class="content-blogText mt-2 mb-2">
                                <h5 class="blogs_text textblogs">Lorem ipsum dolor a.</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <!-----------blogs_secand section start-->

                <div class="col-md-9 blogs_contentmobile_device">
                    <div class="row m-auto">
                        <div class="ps-0">
                            <div class="updated-blogText">
                                Updated on -  {{Carbon\Carbon::parse($blogs->created_at)->format('d F Y')}}

                            </div>
                        </div>
                        <div class="ps-0">
                            <div class="Income-blogText mt-3 mb-2">
                                {{ $blogs->tile }}
                            </div>
                        </div>
                        <div class="ps-0">
                            <div class="Income_para -blogText">
                                {!! $blogs->summary !!}
                            </div>
                        </div>
                        <div class="ps-0">
                            <div class="row">
                                <div class="col-md-6 col-7">
                                    <div class="Income-blogText">
                                        <div class=" bd-highlight col-12 mb-4 mt-2">
                                            <div class="p-md-2 mt-2 bd-highlight">
                                                <h5 class="abhinav_text">- By Abhinav prakash</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-5" style="text-align: right;">
                                    <div class="ms-auto blog_socail-media p-md-2 mt-1 mt-md-0 bd-highlight">

                                        <span><img src="../assets/icons/icons8-whatsapp.svg" class="img-fluid"
                                                alt=""></span>
                                        <span><img src="../assets/icons/icons8-twitter.svg" class="img-fluid"
                                                alt=""></span>
                                        <span><img src="../assets/icons/icons8-linkedin-circled.svg"
                                                class="img-fluid" alt=""></span>
                                    </div>
                                </div>

                            </div>
                        </div>
                        {!! $blogs->description !!}
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-----------blogs acrodion section  start------->
    <section class="acrodion_section">
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-12 mt-5">
                            <span class="blogs_wahchIconqa"><img src="../assets/icons/watch_Icon.svg"
                                    class="img-fluid" alt=""> NEXT BLOG</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-12 mt-2">
                            <h1 class="yourblogs_text mt-2">Your money in 2050 and beyond guide.</h1>
                        </div>
                        <div class="col-md-4 col-12 ">
                            <span class="readblogs_button"><a href="#" class="readblogs_text">Read blog</a></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-5">
                            <div class="blogs_fqbText text-align-center mt-5 mb-5">
                                <h1 class="blogsfaq_text">FAQ</h1>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mb-5">
                            <div class="accound_blogs">
                                <div class="accordion accordion-flush" id="accordionFlushExample">
                                    @forelse ($faq as $data)
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button blogsbutton-text collapsed"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseOne" aria-expanded="false"
                                            aria-controls="flush-collapseOne">
                                           {{$data->question}}
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingOne"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <p class="blogspara_text">
                                                
                                                {{$data->answer}}
                                        </div>
                                    </div> 
                                    @empty
                                        no faq found
                                    @endforelse
                             
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

    
@section('js')
    <!--script to change color on navbar scroll-->
    <script>
        $(function () {
            $(document).scroll(function () {
                var $nav = $(".sticky-top");
                $nav.toggleClass('scrolledGreen', $(this).scrollTop() > $nav.height());
            });
        });
    </script>

    <script>
        var screenWidth = screen.width;
        $(document).ready(function () {
            if (screenWidth < 767) {
                $("#blogToHide").hide();
                $(".toggleblog").click(function () {
                    $("#blogToHide").toggle();
                });
            }
        });
    </script>

@endsection
