<nav class="navbar sticky-top navbar-expand-lg navbar-light" style="background-color: transparent;">
    <div class="container-fluid m-auto">
        <a class="navbar-brand mx-3 mx-md-5 col-2 col-lg-2" href="{{route('home')}}"><img src="{{asset('/')}}assets/icons/homeLogo.svg" /></a>

        <a class="navbar-toggler x collapsed col-lg-0" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span> </a>

        <div class="collapse navbar-collapse hoa_home-navbar-list col-8" id="navbarText">
            <ul class="navbar-nav navbar-nav-custom nav-header align-items-end ms-auto">
                <li class="nav-item custom-nav animated fadeInDown">
                    <a class="nav-link active hoa_home-navbar-list-a" aria-current="page" href="#"
                        style="font-weight: 600;">About
                        us</a>
                </li>

                <li class="nav-item custom-nav ps-0 pe-0 dropdown btn-group animated fadeInDown"
                    style="max-width: 100%;">
                    <a class="nav-link hoa_home-navbar-list-a" type="button" id="dropdownMenu2"
                        data-bs-toggle="dropdown" aria-expanded="false">Services</a>
                    <ul class="dropdown-menu row dropdown-menu-center" aria-labelledby="dropdownMenu2">
                        <div class="row col-md-12">

                           @livewire('front.navservice')

                        
                        </div>
                    </ul>
                </li>

                <li class="nav-item custom-nav animated fadeInDown">
                    <a class="nav-link hoa_home-navbar-list-a" href="{{route('blog')}}">Learn</a>
                </li>
                <li class="nav-item custom-nav animated fadeInDown">
                    <a class="nav-link  hoa_home-navbar-list-a" href="{{route('contact')}} ">connect us</a>
                </li>

                <li class="nav-item">

                    @auth
<form method="POST" class="d-flex m-auto" action="{{ route('logout') }}">
@csrf

<x-responsive-nav-link :href="route('logout')"
        onclick="event.preventDefault();
                    this.closest('form').submit();">
                     <button class="btn hoa_home-button" type="button" style="color:black;font-weight: 600;">  {{ __('Log Out') }}</button>
  
</x-responsive-nav-link>

<a href="#">  <button class="btn hoa_home-button" type="button" style="background: black;font-weight: 600;">{{ Auth::user()->name }}</button></a>
</form>
@endauth
@guest


        <form class="d-flex">
          <a href="{{ route('login') }}">  <button class="btn hoa_home-button" type="button" style="color:black;font-weight: 600;">LOGIN</button></a>
          <a href="{{ route('register') }}">  <button class="btn hoa_home-button" type="button" style="background: black;font-weight: 600;">SIGN
                Up</button></a>
        </form>
        @endguest
                   {{--<form >
                        <a class="btn hoa_home-button" type="button" href="invoicePages/userLogin.html"
                            style="color:black;font-weight: 600;">LOGIN</a>

                        <a class="btn hoa_home-button" type="button" href="invoicePages/userSignUp.html"
                            style="background: black;font-weight: 600;">SIGN
                            UP</a>
                    </form>--}}
                </li>
            </ul>
        </div>
        <!-- <form class="d-flex mx-md-5 m-auto">
            <button class="btn hoa_home-button" type="button" style="color:black;font-weight: 600;">LOGIN</button>
            <button class="btn hoa_home-button" type="button" style="background: black;font-weight: 700;">SIGN
                UP</button>
        </form> -->
    </div>
</nav>




