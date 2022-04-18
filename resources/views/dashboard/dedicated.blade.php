@extends('front.layout.frontlayout')
@section('content')


<body>
    @include('front.include.nav')
 <!-- Main container -->
 <section class="fixed_planbackground">
    <div class="container ps-0 pe-0">
        <div class="row m-auto pt-5 pt-md-4">
            <div class="col-md-6 m-auto">
                <h1 class="dedicatedHeading_text">Dedicated accountant</h1>
                <p class="deicatedplan_para">Every business require Different efforts to work, Choose a Service Plan according 
                    to your Bussiness Needs, Pick your Sevices and leave rest to us.</p>
            </div>
            <div class="col-md-6 ps-0 pe-0">
                <div class="col-md-10 ms-auto dedicated_image">
                    <img src="../assets/images/decte_bg.svg" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<!--section for tables-->

<!--hoa_dedicated_section start css-->

<section class="hoa_dedicated_section">
    <div class="container-fluid">
    <div style="background: #fff;">      
            <div class="col-md-8 hoa_dedicatedborder m-auto">
                <div class="row" style="margin-top: 10%;margin-bottom: 10%;">
                    <div class="col-md-6 hao_carousel_text hoa_dashboard-bookkeeping-last-right" style="background: #E9F5F5;">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators hao_indicators">
                              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <div class="hoa_headingtaxt">
                                <h2 class="hoa_hiretext">Hire a <br>
                                   <span class="dedicated_colorchange">Dedicated accountant</span><br>
                                    starting just</h2>
                               </div>
                               <div class="hoa_numbertaxt mt-4 mb-3">
                                   <h1 class="hoa_amounttaxt"><span class="hoa_rstaxt">Rs</span >2500<span class="hoa__weeklytaxt">weekly</span></h1>
                               </div>
                               <div class="hoa-circletext">
                                   <h5 class="hoa_everytaxt"><span class="check_circle"><img src="../assets/icons/check-circle-icon.svg" class="img-fluid" alt=""></span> Every business require Different efforts to work</h5>
                               </div>
                               <div class="hoa-circletext">
                                   <h5 class="hoa_everytaxt"><span class="check_circle"><img src="../assets/icons/check-circle-icon.svg" class="img-fluid" alt=""></span> Every business require Different efforts to work</h5>
                               </div>
                               <div class="hoa-circletext">
                                   <h5 class="hoa_everytaxt"><span class="check_circle"><img src="../assets/icons/check-circle-icon.svg" class="img-fluid" alt=""></span> Every business require Different efforts to work</h5>
                               </div>

                              </div>

                              <div class="carousel-item">
                                <div class="hoa_headingtaxt">
                                    <h2 class="hoa_hiretext">Hire a <br>
                                       <span class="dedicated_colorchange">Dedicated accountant</span><br>
                                        starting just</h2>
                                   </div>
                                   <div class="hoa_numbertaxt mt-4 mb-3">
                                       <h1 class="hoa_amounttaxt"><span class="hoa_rstaxt">Rs</span >2500<span class="hoa__weeklytaxt">weekly</span></h1>
                                   </div>
                                   <div class="hoa-circletext">
                                       <h5 class="hoa_everytaxt"><span class="check_circle"><img src="../assets/icons/check-circle-icon.svg" class="img-fluid" alt=""></span> Every business require Different efforts to work</h5>
                                   </div>
                                   <div class="hoa-circletext">
                                        <h5 class="hoa_everytaxt"><span class="check_circle"><img src="../assets/icons/check-circle-icon.svg" class="img-fluid" alt=""></span> Every business require Different efforts to work</h5>
                                   </div>
                                   <div class="hoa-circletext">
                                        <h5 class="hoa_everytaxt"><span class="check_circle"><img src="../assets/icons/check-circle-icon.svg" class="img-fluid" alt=""></span> Every business require Different efforts to work</h5>
                                   </div>
                              </div>
                              
                              <div class="carousel-item">
                                <div class="hoa_headingtaxt">
                                    <h2 class="hoa_hiretext">Hire a <br>
                                       <span class="dedicated_colorchange">Dedicated accountant</span><br>
                                        starting just</h2>
                                   </div>
                                   <div class="hoa_numbertaxt mt-4 mb-3">
                                       <h1 class="hoa_amounttaxt"><span class="hoa_rstaxt">RS</span>2500<span class="hoa__weeklytaxt">weekly</span></h1>
                                   </div>
                                   <div class="hoa-circletext">
                                       <h5 class="hoa_everytaxt"><span class="check_circle"><img src="../assets/icons/check-circle-icon.svg" class="img-fluid" alt=""></span> Every business require Different efforts to work</h5>
                                   </div>
                                   <div class="hoa-circletext">
                                        <h5 class="hoa_everytaxt"><span class="check_circle"><img src="../assets/icons/check-circle-icon.svg" class="img-fluid" alt=""></span> Every business require Different efforts to work</h5>
                                    </div>
                                    <div class="hoa-circletext">
                                        <h5 class="hoa_everytaxt"><span class="check_circle"><img src="../assets/icons/check-circle-icon.svg" class="img-fluid" alt=""></span> Every business require Different efforts to work</h5>
                                   </div>
                              </div>
                            </div>
                            
                          </div>
                        
                    </div>


                    <div class="col-md-6 hoa_dashboard-bookkeeping-last-right" style="background: #FFFFFF;">
                        <div class="row">
                            <div class="m-auto col-10 col-md-8">
                                <label for="fullname" class="mb-1 col-md-8" style="opacity: 0.6;">Your
                                    Name</label>
                                <input id="firstName" type="text" class="form-control info-text" name="yourname"
                                    value="Full Name" required>
                            </div>
                       
                            <div class="m-auto col-10 col-md-8 mt-4">
                                <label for="fullname" class="mb-1 col-md-8" style="opacity: 0.6;">E-Mail ID</label>
                                <input id="firstName" type="email" class="form-control info-text" name="yourname"
                                    value="Bussiness Id would be better" required>
                            </div>

                            <div class="m-auto col-10 col-md-8 mt-4">
                                <label class="col-md-10 mb-1" for="bussinessNumber"
                                    style="opacity: 0.6;">Bussiness
                                    Number</label>
                                <input type="tel" class="form-control info-text"  value="+91"
                                    name="bussinessNumber" value="" required>
                            </div>

                            <div class="mt-4 m-auto col-10 col-md-8">
                                <label for="Description" style="opacity: 0.6;"
                                    class="mb-1 col-md-12 flags_input">Description for your query (optional)</label>
                                <input id="Description" type="text" class="form-control info-text" name="info"
                                    value="Leave your message" required>
                            </div>

                            <button class="btn-lg lastDiv-right-button mt-5 mb-5 col-8 col-md-6 m-auto"
                                id="btnSubmit" type="button">Send Call
                                Request</button>
                        </div>
                    </div>
                </div>
            </div>
      </div>
</section>

 <!--hoa_dedicated_section end css-->

  <!--Benefits_hiring start css-->

<section class="Benefits_hiring">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3 text-align-center">
                <h2 class="benefits_hoataxt mt-5">Benefits of hiring <br>
                    a dedicated accountant.</h2>
                    <p class="key_pointersTaext mt-2 mb-2">KEY POINTERS</p>
              </div>
            </div>
          <div class="col-md-10 dedicated_bottom m-auto">
        <div class="row">
            <div class="col-md-6">
                <div class="dedicated_bordercontent content_items">
                    <div class="dedicated_content">
                    <h3 class="dedicated_heading"><span><img src="../assets/icons/Budget-icon.svg" class="img-fluid" alt=""></span> Budget Assistance</h3>
                    <p class="dedicated_para">Your accountant can deep dive in your busnessand understand all financial requirements, helping you creat a solid budget and monthly adjustments to keep your finances in the black at all time.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
                <div class="dedicated_bordercontent">
                    <div class="dedicated_content">
                    <h3 class="dedicated_heading"><span><img src="../assets/icons/Document-Icon.svg" class="img-fluid" alt=""></span> Document assistance</h3>
                    <p class="dedicated_para mb-4">Helps you drive your documents and files  busness and understand all financial requirements .</p>
                </div>
              </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6 mb-4">
                <div class="dedicated_bordercontent">
                    <div class="dedicated_content">
                    <h3 class="dedicated_heading"><span><img src="../assets/icons/Structural-Icon.svg" class="img-fluid" alt=""></span> Structural planning</h3>
                    <p class="dedicated_para">structure busness and understand all financial requirements, helping you creat a solid budget and monthly adjustments to keep your finances in the black at all time.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
                <div class="dedicated_bordercontent">
                    <div class="dedicated_content">
                    <h3 class="dedicated_heading"><span><img src="../assets/icons/Direct-icon.svg" class="img-fluid" alt=""></span> Direct accessbility</h3>
                    <p class="dedicated_para">Resolve all your questions in busness in one place and understand all financial requirements, helping you creat a solid budget and monthly.</p>
                </div>
              </div>
            </div> 
        </div>
        <br><br><br>
        </div>
    </div>
</section>

<!--Benefits_hiring end css-->

<!--dedicated_gothourt start css-->

<section class="dedicated_gothourth">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-5">
                <div class="dedicated_gothourthtaxt text-align-left mt-3">
                    <h2 class="dedicated_gotaxt">Go through our <span class="simple_processTaxt">simple process</span> 
                        of hiring a accountant.</h2>
                </div>
            </div>
        </div>
        <div class="row text-align-center content_images">
            <div class="col-md-3">
                <a class="tel:0000000" href=""><img src="../assets/icons/send_us.svg" class="img-fluid" alt=""></a>
            </div>
            <div class="col-md-3 dedicated-image">
                <img src="../assets/icons/tell_us.svg" class="img-fluid" alt="">
            </div>
            <div class="col-md-3 dedicated-image">
                <img src="../assets/icons/will_proud.svg" class="img-fluid" alt="">
            </div>
            <div class="col-md-3 dedicated-image">
                <img src="../assets/icons/take_interviwe.svg" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</section>

 <!--dedicated_gothourt start end-->

  <!--testimonial_section start css-->

<section class="testimonial_section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-7 m-auto">
                        <h2 class="word_testimonial">A word from our
                            accountants</h2>
                            <p class="para_testimonial mt-3">Get to know the working environment of 
                                house of accounts from our accountants.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="carousel_section mb-5">
                    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active" data-bs-interval="10000">
                           <div class="col-12">
                               <div class="testimonial_doder">
                                <div class="testimonial_imagetaxt mt-4 mx-4">
                                 <img src="../assets/images/quart.svg" class="img-fluid" alt="">
                                 <p class="really_taxt">It’s really great to be a member of HOA team, all co workers are adipiscing enim lobortis sit condimentum lobortis aenean ultrices. Risus ornare dignissim condimentum elementum enim sit. Adipiscing vestibulum scelerisque condimentum consectetur. Elit amet amet elit orci arcu viverra lectus condimentum. Amet, quis mollis sapien venenatis vulputate vel, neque. Mattis purus.</p>
                                 </div>
                                 <div class="row mt-5">
                                    <div class="col-6 testimonial_left">
                                     <div class="play_taxt"><img src="../assets/icons/play_video_icon.svg" class="img-fluid" alt=""></div>
                                    </div>
                                    <div class="col-6 testimonial_right">
                                      <div class="image_content">
                                      <div class="shin_nametaxt">Shin twan</div>
                                      <div class="senior_taxt">Senior accountant</div>
                                      </div>
                                      <span ><img src="../assets/images/shin.svg" class="img-fluid circle_testimonial" alt=""></span>
                                    </div>
                                 </div>
                                </div>
                              
                           </div>
                            
                          </div>
                          <div class="carousel-item" data-bs-interval="2000">
                            <div class="col-12">
                                <div class="testimonial_doder">
                                 <div class="testimonial_imagetaxt mt-4 mx-4">
                                  <img src="../assets/images/quart.svg" class="img-fluid" alt="">
                                  <p class="really_taxt">It’s really great to be a member of HOA team, all co workers are adipiscing enim lobortis sit condimentum lobortis aenean ultrices. Risus ornare dignissim condimentum elementum enim sit. Adipiscing vestibulum scelerisque condimentum consectetur. Elit amet amet elit orci arcu viverra lectus condimentum. Amet, quis mollis sapien venenatis vulputate vel, neque. Mattis purus.</p>
                                   </div>
                                  <div class="row mt-5">
                                    <div class="col-6 testimonial_left">
                                        <div class="play_taxt"><img src="../assets/icons/play_video_icon.svg" class="img-fluid" alt=""></div>
                                    </div>
                                    <div class="col-6 testimonial_right">
                                        <div class="image_content">
                                        <div class="shin_nametaxt">Shin twan</div>
                                        <div class="senior_taxt">Senior accountant</div>
                                        </div>
                                        <span ><img src="../assets/images/shin.svg" class="img-fluid circle_testimonial" alt=""></span>
                                      </div>
                                 </div>
                                </div>
                            </div>
                            
                          </div>
                          <div class="carousel-item">
                            <div class="col-12">
                                <div class="testimonial_doder">
                                <div class="testimonial_imagetaxt mt-4 mx-4">
                                  <img src="../assets/images/quart.svg" class="img-fluid" alt="">
                                  <p class="really_taxt">It’s really great to be a member of HOA team, all co workers are adipiscing enim lobortis sit condimentum lobortis aenean ultrices. Risus ornare dignissim condimentum elementum enim sit. Adipiscing vestibulum scelerisque condimentum consectetur. Elit amet amet elit orci arcu viverra lectus condimentum. Amet, quis mollis sapien venenatis vulputate vel, neque. Mattis purus.</p>
                                  </div>
                                  <div class="row mt-5">
                                    <div class="col-6 testimonial_left">
                                        <div class="play_taxt"><img src="../assets/icons/play_video_icon.svg" class="img-fluid" alt=""></div>
                                    </div>
                                    <div class="col-6 testimonial_right">
                                        <div class="image_content">
                                        <div class="shin_nametaxt">Shin twan</div>
                                        <div class="senior_taxt">Senior accountant</div>
                                        </div>
                                        <span ><img src="../assets/images/shin.svg" class="img-fluid circle_testimonial" alt=""></span>
                                      </div>
                                 </div>
                                </div>
                            </div>
                            
                          </div>
                        </div>
                       
                        <button class="carousel-control-next left_testmonial" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                        <button class="carousel-control-prev right_testmonial" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                          </button>
                      </div>
                </div>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-6">
                <div class="carousel_section mb-5">
                    <div id="carouselExamplelight" class="carousel carousel-dark slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active" data-bs-interval="10000">
                           <div class="col-12">
                               <div class="testimonial_doder">
                                <div class="testimonial_imagetaxt mt-4 mx-4">
                                 <img src="../assets/images/quart.svg" class="img-fluid" alt="">
                                 <p class="really_taxt">It’s really great to be a member of HOA team, all co workers are adipiscing enim lobortis sit condimentum lobortis aenean ultrices. Risus ornare dignissim condimentum elementum enim sit. Adipiscing vestibulum scelerisque condimentum consectetur. </p>
                                 </div>
                                 <div class="row margin_content mt-5">
                                    <div class="col-6 testimonial_left mt-5">
                                        <div class="play_taxt"><img src="../assets/icons/play_video_icon.svg" class="img-fluid" alt=""></div>
                                    </div>
                                    <div class="col-6 testimonial_right mt-5"> 
                                      <div class="image_content">
                                      <div class="shin_nametaxt">Logo here</div>
                                      <div class="himanshu_taxtname">Himanshu goel</div>
                                      <div class="senior_taxt">Ceo of zuddl</div>
                                      </div>
                                      <span ><img src="../assets/images/Himanshu-image.svg" class="img-fluid circle_testimonial" alt=""></span>
                                    </div>
                                 </div>
                                </div>
                              
                           </div>
                            
                          </div>
                          <div class="carousel-item" data-bs-interval="2000">
                            <div class="col-12">
                                <div class="testimonial_doder">
                                 <div class="testimonial_imagetaxt mt-4 mx-4">
                                  <img src="../assets/images/quart.svg" class="img-fluid" alt="">
                                  <p class="really_taxt">It’s really great to be a member of HOA team, all co workers are adipiscing enim lobortis sit condimentum lobortis aenean ultrices. Risus ornare dignissim condimentum elementum enim sit. Adipiscing vestibulum scelerisque condimentum consectetur. </p>
                                   </div>
                                  <div class="row margin_content  mt-5">
                                    <div class="col-6 testimonial_left mt-5">
                                        <div class="play_taxt"><img src="../assets/icons/play_video_icon.svg" class="img-fluid" alt=""></div>
                                    </div>
                                    <div class="col-6 testimonial_right mt-5"> 
                                        <div class="image_content">
                                        <div class="shin_nametaxt">Logo here</div>
                                        <div class="himanshu_taxtname">Himanshu goel</div>
                                        <div class="senior_taxt">Ceo of zuddl</div>
                                        </div>
                                        <span ><img src="../assets/images/Himanshu-image.svg" class="img-fluid circle_testimonial" alt=""></span>
                                      </div>
                                 </div>
                                </div>
                            </div>
                            
                          </div>
                          <div class="carousel-item">
                            <div class="col-12">
                                <div class="testimonial_doder">
                                <div class="testimonial_imagetaxt mt-4 mx-4">
                                  <img src="../assets/images/quart.svg" class="img-fluid" alt="">
                                  <p class="really_taxt">It’s really great to be a member of HOA team, all co workers are adipiscing enim lobortis sit condimentum lobortis aenean ultrices. Risus ornare dignissim condimentum elementum enim sit. Adipiscing vestibulum scelerisque condimentum consectetur. </p>
                                  </div>
                                  <div class="row margin_content  mt-5">
                                    <div class="col-6 testimonial_left mt-5">
                                        <div class="play_taxt"><img src="../assets/icons/play_video_icon.svg" class="img-fluid" alt=""></div>
                                    </div>
                                    <div class="col-6 testimonial_right mt-5"> 
                                        <div class="image_content">
                                        <div class="shin_nametaxt">Logo here</div>
                                        <div class="himanshu_taxtname">Himanshu goel</div>
                                        <div class="senior_taxt">Ceo of zuddl</div>
                                        </div>
                                        <span ><img src="../assets/images/Himanshu-image.svg" class="img-fluid circle_testimonial" alt=""></span>
                                      </div>
                                 </div>
                                </div>
                            </div>
                            
                          </div>
                        </div>
                       
                        <button class="carousel-control-next left_testmonial" type="button" data-bs-target="#carouselExamplelight" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                        <button class="carousel-control-prev right_testmonial" type="button" data-bs-target="#carouselExamplelight" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                          </button>
                      </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-7 m-auto">
                        <h2 class="word_testimonial">What people say <br> about our services</h2>
                            <p class="para_testimonial mt-3">Get to know the working environment of 
                                house of accounts from our accountants.</p>
                    </div>
                </div>
            </div>
            
        </div>
        <br><br>
    </div>
</section>

<!--testimonial_section start end-->

<!--business_fitSetion start css-->

<section class="business_fitSetion">
    <div class="container">
        <div class="row py-5 m-auto">
            <div class="col-md-6 mt-5 mt-md-0">
                <img src="../assets/images/check_if.svg" class="img-fluid" alt="">
            </div>
            <div class="col-md-6 m-auto">
                <h2 class="need_headingTaxt">Check if your business fits in
                    our fixed price plan.</h2>
                <h6 class="benfits_taxt mt-4">BENEFITS</h6>
                <ul class="benifits_Ul">
                    <li class="nav_custtext">Mattis semper proin pellentesque a sit.</li>
                    <li class="nav_custtext">Natoque tempor quisque in purus.</li>
                    <li class="nav_custtext">Ut ut adipiscing facilisis ut fermentum.</li>
                    <li class="nav_custtext">Egestas egestas purus velit nullam odio.</li>
                </ul>
                <div class="mt-4">
                    <button class="btn-lg select_button">Go to Dashboard</button>
                </div>
            </div>
        </div>
    </div>
<!--business_fitSetion end css-->

<!--section for need a cust plan-->
<section class="customized_section">
    <div class="container">
        <div class="row py-5 m-auto">
            <div class="col-md-6 m-auto">
                <h2 class="need_headingTaxt">Need a Customized Plan ?</h2>
                <h6 class="benfits_taxt mt-4">BENEFITS</h6>
                <ul class="benifits_Ul">
                    <li class="nav_custtext">Mattis semper proin pellentesque a sit.</li>
                    <li class="nav_custtext">Natoque tempor quisque in purus.</li>
                    <li class="nav_custtext">Ut ut adipiscing facilisis ut fermentum.</li>
                    <li class="nav_custtext">Egestas egestas purus velit nullam odio.</li>
                </ul>
                <div class="mt-4">
                    <button class="btn-lg select_button">Go to Dashboard</button>
                </div>
            </div>
            <div class="col-md-6 mt-5 mt-md-0">
                <img src="../assets/images/add-more.svg" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</section>




<!--social section-->
<section class="social_medaiIcon">
    <div class="container py-5">
        <div class="social-too mt-5 pt-md-4 mb-5">We are social TOO !</div>

        <div style="padding-bottom: 7%;padding-top: 3%;">
            <div style="text-align: center;">
                <img src="../assets/icons/facebook.svg" style="margin-right: 2%;" />
                <img src="../assets/icons/linkedin.svg" style="margin-right: 2%;" />
                <img src="../assets/icons/instagram.svg" style="margin-right: 2%;" />
                <img src="../assets/icons/youtube.svg" style="margin-right: 2%;" />
            </div>

           
        </div>
    </div>
</section>
@endsection

@section('js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
 <!--script for setting country flag-->
 <script>
    var input = document.querySelector("#phone");
    intlTelInput(input, {
        initialCountry: "IN",
        geoIpLookup: function (success, failure) {
            $.get("https://ipinfo.io", function () { }, "jsonp").always(function (resp) {
                var countryCode = (resp && resp.country) ? resp.country : "us";
                success(countryCode);
            });
        },
    });
</script>
@endsection