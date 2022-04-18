@extends('front.layout.frontlayout')

@section('content')

    @include('front.include.nav')
    <section class="" style="background-color:#E9F5F5;">
        <div class="container contact_uspags ps-0 pe-0">
            <div class="row m-auto pt-5 pt-md-4">
                <div class="col-lg-5">
                    <div class="contact_headingTaxt">
                        <h1 class="contact_heading">Connect With us</h1>
                        <p class="contant-para mt-md-3"><span class="contact_span">We’d love to help you,</span>Just
                            fill
                            the
                            details and
                            we will assign you an expert that will help you
                            answer all your queries. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--section for tables-->

    <!--hoa_dedicated_section start css-->

    <section class="hoa_dedicated_section">
        <div class="container">
            <div style="background: #fff;">
                <div class="col-lg-9 col-md-11 m-auto ">
                    <div class="row" style="margin-top: 10%;margin-bottom: 10%;">
                        <div class="col-md-6 contact-us pt-5 pb-5">
                            <div class="row">
                                <div class="col-md-8 m-auto">
                                    <div class="contact_helpTaxt">
                                        <h6 class="contact_other">Other Help lines</h6>
                                    </div>
                                </div>
                                <div class="col-md-8 mt-3 mb-4 m-auto">
                                    <div class="contact_mail_imageandTaxt">
                                        <img src="assets/icons/con-mail_icon.svg" class="img_fluid" alt="">
                                        <span class="mail_us">Mail us</span>
                                    </div>
                                    <div>
                                        <a class="contact_mail_taxt"
                                            href="mailto:Houseofaccounts.info@gmail.com">Houseofaccounts.info@gmail.com</a>
                                    </div>
                                </div>

                                <div class="col-md-8 mt-3 mb-4 m-auto">
                                    <div class="contact_mail_imageandTaxt">
                                        <img src="assets/icons/con_phone_icon.svg" class="img_fluid" alt="">
                                        <span class="mail_us">Call us</span>
                                    </div>
                                    <a class="contact_mail_taxt" href="tel:+918820505567">+91 8820505567</a>
                                </div>

                                <div class="col-md-8 mt-3 m-auto">
                                    <div class="contact_mail_imageandTaxt">
                                        <img src="assets/icons/con_loct_icon.svg" class="img_fluid" alt="">
                                        <span class="mail_us">Locate us</span>
                                    </div>

                                    <div class="contact_mail_taxt">
                                        L-344, sector-12, pratap vihar,
                                        Ghaziabad, 201009
                                    </div>
                                </div>
                            </div>

                        </div>
                      @livewire('front.contactus')
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="contact_mapSection">
        <div class="container">


            <div class="col-lg-9 m-auto">
                <div class="contact_sections py-5" style="margin-top: 10%;margin-bottom: 10%;">
                    <div class="col-md-6">
                        <div class="col-md-10 m-auto">
                            <div class="contact_Image">
                                <img src="assets/images/cont_map.svg" class="img_fluid" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="col-lg-8 col-md-10 m-auto">
                            <div class="contact_mapheading">
                                <h1 class="contact_mapheadingtaxt">You Can find us on
                                    <span class="contact_googlespan">Google Maps</span>
                                </h1>
                            </div>
                            <div class="contact_justpara">
                                <p class="contact_para">Just come across to our place
                                    and we can have our Discussion
                                    on your business requirements.</p>
                            </div>

                            <button class="btn-lg lastDiv-right-button mt-4 mb-5 col-8 col-md-6 m-auto" id="btnSubmit"
                                type="button">Open maps</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--hoa_dedicated_section end css-->


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