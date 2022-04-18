
<!DOCTYPE html>
<html lang="en">

<head>
    <title>House of Accounts</title>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width,height=device-height,initial-scale=1.0,maximum-scale=1,user-scalable=no" />
    <meta name="format-detection" content="telephone=no" />
    <meta http-equiv="default-style" content="text/html; charset=UTF-8" />
    <meta name="HandheldFriendly" content="true" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/css/intlTelInput.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,700;1,200;1,300;1,400;1,500;1,600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- <link href="assets/css/hc-offcanvas-nav.css" rel="stylesheet" /> -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="assets/css/navigation.css">
    <link href="{{asset('/')}}assets/css/steper.css" rel="stylesheet" />
    <link href="{{asset('/')}}assets/css/prototype.css" rel="stylesheet" />
    <link href="{{asset('/')}}assets/css/style.css" rel="stylesheet" />

    <!-------------owl carousel------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

        @livewireStyles
</head>

<body>
    @yield('content')


        <!--last section starts here-->
        <footer class="last-div">
            <section class="container">
                <div class="row col-lg-10 m-auto" style="padding-top: 6%;padding-bottom: 6%;">

                    <div class="col-lg-3 col-md-2 mt-3 mb-3 mt-md-0 align-middle">
                        <img src="{{asset('/')}}assets/images/logo-footer.png" />
                    </div>

                    <div class="col-lg-2 col-md-2 mt-3 mt-md-0 align-middle">
                        <div class="last-left-h">Quick links
                        </div>
                        <ul style="margin-right:6%;" class="no-bullets">
                            <li style="margin-top: 1%;"><a class="last-left-p" href="...">Home</a></li>
                            <li><a href="..." class="last-left-p">about us</a></li>
                            <li><a href="..." class="last-left-p">Blogs</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-5 mt-md-0 mt-3 align_items-middle ">
                        <div class="last-left-h">Services</div>
                        <ul style="float: left;" class="no-bullets">
                            <li><a class="last-left-p">Bookkeeping</a></li>
                            <li><a class="last-left-p">Reconciliation</a></li>
                            <li><a class="last-left-p">SEZ</a></li>
                            <li><a class="last-left-p">
                                    License for duty<br />
                                    Free Import
                                </a></li>
                            <li><a class="last-left-p mobile-certification">certification</a></li>
                            <li><a class="last-left-p">registration</a></li>
                        </ul>

                        <ul style="float: right;margin-right: 20%;" class="no-bullets">
                            <li><a class="last-left-p">TDS</a></li>
                            <li><a class="last-left-p">ITR</a></li>
                            <li><a class="last-left-p">TDS</a></li>
                            <li><a class="last-left-p">GST</a></li>
                            <li><a class="last-left-p">Complaince</a></li>
                            <li><a class="last-left-p">Legal</a></li>
                            <li><a class="last-left-p">Incorporation</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-3 mt-md-0 mt-5 align-items-center-desktop">
                        <ul class="no-bullets">
                            <li style="margin-bottom: 4%;" class="last-left-h">Connect us</li>
                            <li style="margin-bottom: 2%;"><a class="last-left-p">8245848534</a></li>
                            <li style="margin-bottom: 4%;"><a class="last-left-p">Caabhinavprakash@gmail.com</a></li>
                            <li style="margin-bottom: 4%;" class="last-left-h">Address</li>
                            <li><a class="last-left-p">L-316 sector -12 pratap vihar<br>
                                    Ghaziabad, 201009, U.P
                                </a></li>
                        </ul>

                    </div>

                </div>
                <div class="row m-auto">
                    <div class="col-lg-4 col-md-8 m-auto text-align-center">
                        <a href="" class="hoa_home-lastdiv-footer-blueLinks">Terms and conditions</a> &nbsp;&nbsp;
                        <a href="" class="hoa_home-lastdiv-footer-blueLinks">Privacy Policy</a>
                    </div>
                </div>
            </section>
            <hr style="border: 0.5px solid #A9A9A9;" />
            <div class="row pb-3 m-auto">
                <div class="col-lg-4 m-auto text-align-center">
                    <div class="hoa_home-lastdiv-copyright">
                        copyright&nbsp;&nbsp;<span>©</span><span>&nbsp;&nbsp;2021
                            house
                            of
                            accounts. All
                            rights
                            reserved</span></div>
                </div>
            </div>
        </footer>
        <!--last section ends here-->


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="row col-md-12">
                        <div class="col-md-6 hoa_dashboard-bookkeeping-lastdiv2 pt-5 pb-5">
                            <div class="fourth-left-h1 mt-5">Have any
                            </div>
                            <div class="fourth-left-h2 ChangeSize">Questions?</div>

                            <div class="fourth-left-body"><b>We’d love to help you,</b> Just
                                fill the details and
                                we will assign you an expert that will help you
                                answer all your queries.</div>
                        </div>


                        <div class="col-md-6" style="text-align: left;">

                            <div class="modal-header" style="border: transparent;background: #FFFFFF;">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>

                            <div class="modal-body">

                                <div class="mt-5 col-md-10 m-auto">
                                    <label for="fullname" style="opacity: 0.6;" class="col-md-12 mb-1">Your
                                        Name</label>
                                    <input id="firstName" type="text" class="form-control info-text" name="yourname"
                                        value="" placeholder="Your Name" required autofocus>
                                </div>

                                <div class="col-md-10 m-auto mt-4">
                                    <label class="col-12 col-md-8 mb-1" for="bussinessNumber"
                                        style="opacity: 0.6;">Bussiness
                                        Number</label>
                                    <input id="phone" value="+91" type="tel" class="form-control info-text"
                                        name="bussinessNumber" required>
                                </div>

                                <div class="col-md-10 m-auto mt-4">
                                    <label for="fullname" style="opacity: 0.6;" class="mb-1 col-md-12">Description
                                        for your query (optional)</label>
                                    <input id="firstName" type="text" class="form-control info-text" name="info"
                                        value="" placeholder="Your Name" required>
                                </div>
                            </div>

                            <div class="col-md-7 mt-3 m-auto">
                                <button class="btn hoa_home-button2" type="button"
                                    style="margin-left: 10%;margin-bottom: 25%;">Request a
                                    Call</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </main>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/intlTelInput.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/utils.min.js"></script>
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
    <script src="assets/js/navigation.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@yield('js')

@livewireScripts
    <script type="text/javascript">

        $('.logo-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            dots: false,
            responsive: {
                0: {
                    items: 2
                },
                700: {
                    items: 4
                },
                1000: {
                    items: 4
                }
            }
        })


        $('.sters-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            autoplay: true,
            lazyLoad: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            dots: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 4
                }
            }
        })



        // $('.sters-carousel').owlCarousel({
        //     loop: true,
        //     margin: 10,
        //     nav: false,
        //     autoplay: true,
        //     autoplayTimeout: 3000,
        //     autoplayHoverPause: true,
        //     dots: false,
        //     responsive: {
        //         0: {
        //             items: 1
        //         },
        //         600: {
        //             items: 2
        //         },
        //         1000: {
        //             items: 4
        //         }
        //     }
        // })

        //--script to change color on navbar scroll--//
        $(function () {
            $(document).scroll(function () {
                var $nav = $(".sticky-top");
                $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
            });
        });



        //--script for setting country flag--//
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


</body>

</html>