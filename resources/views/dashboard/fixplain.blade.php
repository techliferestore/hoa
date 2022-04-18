@extends('front.layout.frontlayout')
@section('content')

<body>
    @include('front.include.nav')
<section class="fixed_planbackground">
    <div class="container">
        <div class="row m-auto pt-5 pt-md-4 mb-5 mb-md-0">
            <div class="col-md-6 m-auto">
                <h1 class="plan_text">Fixed price plan</h1>
                <p class="plan_para mt-2">Every business require Different efforts to work, Choose a Service Plan
                    according
                    to your Bussiness Needs, Pick your Sevices and leave rest to us.</p>
            </div>
            <div class="col-md-6 mt-5 mt-md-0 mob-hide">
                <div class="col-md-10 ms-auto">
                    <img src="../assets/images/bg-fix.svg" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<!--section for tables-->
@livewire('front.fixplain')
<!--section for need a cust plan-->
<section class="customized_section">
    <div class="container">
        <div class="flex-container p-3 py-5 mt-5 mb-5 m-auto">

            <div class="col-md-6 m-auto">
                <img src="../assets/images/add-more.svg" class="img-fluid fixed-custIMage" alt="">
            </div>

            <div class="col-md-6 m-auto mt-5 mt-md-auto">
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
        </div>
    </div>
</section>


<!--Need a dedicated accountant-->
<section>
    <div class="container py-5 mt-5 mb-5">
        <div class="row m-auto p-2">
            <div class="col-md-6 m-auto">
                <img src="../assets/images/Dedicated.svg" class="img-fluid fixed-custIMage" alt="">
            </div>

            <div class="col-md-6 m-auto mt-5 mt-md-auto">
                <h2 class="need_headingTaxt">Need a Dedicated accountant ?</h2>

                <h6 class="benfits_taxt mt-4">BENEFITS</h6>
                <ul class="benifits_Ul">
                    <li class="nav_custtext">Mattis semper proin pellentesque a sit.</li>
                    <li class="nav_custtext">Natoque tempor quisque in purus.</li>
                    <li class="nav_custtext">Ut ut adipiscing facilisis ut fermentum.</li>
                    <li class="nav_custtext">Egestas egestas purus velit nullam odio.</li>
                </ul>
                <div class="mt-4">
                    <button class="btn-lg select_button">Get accountant</button>
                </div>
            </div>
        </div>
    </div>
</section>


<!--tenth section starts here-->
<section class="tenth-div">
    <div class="container">
        <div class="tenth-h1 pt-5 mb-5">We are social TOO !</div>

        <div style="padding-bottom: 4rem;">
            <div style="text-align: center;" class="row col-md-4 m-auto">
                <div class="col-md-3 col-6">
                    <img src="../assets/icons/facebook.svg" />
                </div>
                <div class="col-md-3 col-6">
                    <img src="../assets/icons/linkedin.svg" />
                </div>
                <div class="col-md-3 col-6 mt-4 mt-md-0">
                    <img src="../assets/icons/instagram.svg" />
                </div>
                <div class="col-md-3 col-6 mt-4 mt-md-0">
                    <img src="../assets/icons/youtube.svg" />
                </div>
            </div>
        </div>
    </div>
</section>
<!--tenth section ends here-->

@endsection


    