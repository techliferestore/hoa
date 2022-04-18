<!DOCTYPE html>
<html lang="en">
    <head>
    
        <title>House of Accounts</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,height=device-height" />
        <meta name="format-detection" content="telephone=no" />
        <meta http-equiv="default-style" content="text/html; charset=UTF-8" />
        <meta name="HandheldFriendly" content="true" />

     
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,height=device-height" />
    <meta name="format-detection" content="telephone=no" />
    <meta http-equiv="default-style" content="text/html; charset=UTF-8" />
    <meta name="HandheldFriendly" content="true" />
    @yield('head')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,700;1,200;1,300;1,400;1,500;1,600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="{{asset('/')}}assets/css/hc-offcanvas-nav.css" rel="stylesheet" />
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{asset('/')}}assets/css/navigation.css">
    <link href="{{asset('/')}}assets/css/steper.css" rel="stylesheet" />
    <link href="{{asset('/')}}assets/css/prototype.css" rel="stylesheet" />
    <link href="{{asset('/')}}assets/css/style.css" rel="stylesheet" />
        @livewireStyles
     
    </head>

<body>

  

   @yield('nav')
    <!-- Header Start -->
    <header class="p-0 mb-0 sticky-top bg_white">
        <a class="toggle" href="#">
            <span></span>
        </a>

        <div class="container">
            <div class="row navbar-padding">

                <!--this toggler is for sidebar-->
                <a class="navbar-toggler x collapsed col-1 m-auto sidebarToggler" type="button"
                    data-bs-toggle="collapse" data-bs-target="#sideBarToggler" type="button" id="navTogglerBtn"
                    aria-controls="sideBarToggler" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a href="/" class="col-lg-1 col-md-2 col-3 mt-1 ps-0 ps-md-4 text-dark text-decoration-none">
                    <img src="{{ asset('/') }}assets/icons/symbolOnlyLogo.svg" alt="House of Accounts" />
                </a>
                <!-- breadcrumb start-->
                <div class="topnav nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <ul class="breadcrumb"
                        style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
                        aria-label="breadcrumb">
                        <?php $link = "" ?>
@for($i = 1; $i <= count(Request::segments()); $i++)
    @if($i < count(Request::segments()) & $i > 0)
    <?php $link .= "/" . Request::segment($i); ?>
    <li class="breadcrumb-item"><a href="{{route('home')}} ">Home</a></li>
    <li class="breadcrumb-item"><a href="<?= $link ?>/profile">{{ ucwords(str_replace('-',' ',Request::segment($i)))}}</a> ></li>
    @else {{ucwords(str_replace('-',' ',Request::segment($i)))}}
    @endif
@endfor
                        
                        
                    </ul>
                </div>
                <!-- breadcrumb end-->
                <div class="profilebar col-lg-2 col-6 col-md-3 ms-auto">
                    <div class="profilebar_right">
                        <div class="notifications">
                            <div class="icon_wrap"><img src="{{asset('/')}}assets/icons/cart.svg" /></div>
                        </div>
                        <div class="notifications">
                            <div class="icon_wrap"><img src="{{asset('/')}}assets/icons/bellGreen.svg"></div>
                            <div class="notification_dd">
                                <ul class="notification_ul">
                                    <li class="starbucks success">
                                        <div class="notify_data">
                                            <div class="title">
                                                Lorem, ipsum dolor.
                                            </div>
                                            <div class="sub_title">
                                                Lorem ipsum dolor sit amet consectetur.
                                            </div>
                                        </div>
                                        <div class="notify_status">
                                            <p>Success</p>
                                        </div>
                                    </li>
                                    <li class="baskin_robbins failed">
                                        <div class="notify_data">
                                            <div class="title">
                                                Lorem, ipsum dolor.
                                            </div>
                                            <div class="sub_title">
                                                Lorem ipsum dolor sit amet consectetur.
                                            </div>
                                        </div>
                                        <div class="notify_status">
                                            <p>Failed</p>
                                        </div>
                                    </li>
                                    <li class="mcd success">
                                        <div class="notify_data">
                                            <div class="title">
                                                Lorem, ipsum dolor.
                                            </div>
                                            <div class="sub_title">
                                                Lorem ipsum dolor sit amet consectetur.
                                            </div>
                                        </div>
                                        <div class="notify_status">
                                            <p>Success</p>
                                        </div>
                                    </li>
                                    <li class="pizzahut failed">
                                        <div class="notify_data">
                                            <div class="title">
                                                Lorem, ipsum dolor.
                                            </div>
                                            <div class="sub_title">
                                                Lorem ipsum dolor sit amet consectetur.
                                            </div>
                                        </div>
                                        <div class="notify_status">
                                            <p>Failed</p>
                                        </div>
                                    </li>
                                    <li class="kfc success">
                                        <div class="notify_data">
                                            <div class="title">
                                                Lorem, ipsum dolor.
                                            </div>
                                            <div class="sub_title">
                                                Lorem ipsum dolor sit amet consectetur.
                                            </div>
                                        </div>
                                        <div class="notify_status">
                                            <p>Success</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>@auth
                        <div class="profile">
                            <div class="icon_wrap holder justify-content-center">
                                <img src="{{asset('/')}}assets/icons/userGreen.svg" />
                            </div>

	

                            <div class="profile_dd">
                                <ul class="profile_ul">
                                    <li><a class="settings" href="#">Settings</a></li>
                                    <li>
                                      <form method="POST" action="{{ route('logout') }}">
                                          @csrf
                                      
                                          <x-responsive-nav-link :href="route('logout')"
                                                  onclick="event.preventDefault();
                                                              this.closest('form').submit();">
                                                                {{ __('Log Out') }}
                                            
                                          </x-responsive-nav-link>
                                      
                                          
                                        </form>	
          
                                      
                                  </li>
                                            
                                      
                                      
                                      
                                  
                                  </ul>
                            </div>
							
                        </div>
						
@endauth
                    </div>


                </div>
            </div>

        </div>
        </div>
    </header>
    <!-- Header End -->
    <!-- Main container -->
@yield('content')

@livewireScripts
</main>
@yield('js')

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
<script src=" {{asset('/')}}assets/js/navigation.js"></script>

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

</body>



</html>