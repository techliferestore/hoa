@extends('dashboard.layout.dlayout')
@section('nav')
@include('dashboard.include.nav')
@endsection

@section('content')

	<main id="main" class="home-section deshboard_mobile">
@auth
	

	 <!--dashboard card start-->

        <!--dashboard card start-->
        <section class="dashboard-bg pb-5">
            <div class="container-fluid">
                
                <div class="row m-auto hoa-custom-container">
                    <div class="col-lg-2 col-md-12 col-3"></div>
                    @if($message = Session::get('error'))
                    <div class="alert alert-danger alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <strong>Error!</strong> {{ $message }}
                    </div>
                @endif
    
                @if($message = Session::get('success'))
                    <div style="    width: 82%;" class="alert alert-success alert-dismissible fade {{ Session::has('success') ? 'show' : 'in' }}" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <strong>Success!</strong> {{ $message }}
                    </div>
                @endif
                    <div class="col-lg-6 col-md-8 m-auto card-bg">
                        <h3 class="title">Upload documents</h3>
                        <p class="subtitle mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Arcu
                            felis.
                        </p>
                        <a href="{{route('dashboard.upload')}}  ">
                            <button class="uploadbutton orange-bg px-4 mt-4 btn-lg">
                            <span>
                                <img src="../assets/icons/upload_upicon.svg" class="img-fluid" alt="">
                            </span>
                            &nbsp; Upload files
                        </button>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-8 m-md-auto ms-lg-auto pt-4 pt-lg-0 ps-0 pe-0">
                        <div class="col-lg-10 m-auto">

                            <div class="card-bg2 orange-bg">
                                <p class="title mb-2">documents uploaded.</p>
                                <h2 class="percentage mb-2">20 %</h2>
                                <p class="title" style="font-weight: normal;">Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit. Gravida nec
                                    leo Lorem ipsum
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row m-auto mt-4 mt-md-5 mt-lg-4 hoa-custom-container">
                    <div class="col-lg-2 col-md-12 col-3"></div>
                    <div class="col-lg-6 col-md-8 card-bg m-auto">
                        <h3 class="title">MIS Reports</h3>
                        <p class="subtitle mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing
                        </p>
                   
                   <a href="{{route('dashboard.misreport')}}  ">
                        <button class="uploadbutton px-4 mt-4 btn-lg" style="background-color: #459BFF;">
                            <span style="opacity: 0;">
                                <img src="../assets/icons/upload_upicon.svg" class="img-fluid" alt="">
                            </span>
                            &nbsp; View report
                        </button>
                    </a>
                    </div>
                    <div class="col-md-8 col-lg-4 m-md-auto ms-lg-auto pt-4 pt-lg-0 pe-0 ps-0">
                        <div class="col-lg-10 m-auto">

                            <div class="card-bg2" style="background-color: #459BFF;">
                                <p class="title mb-2">Latest updates from stocks.</p>
                                <h2 class="percentage mb-2">20 %</h2>
                                <p class="title" style="font-weight: normal;">Lorem ipsum dolor sit amet,
                                    consectetur
                                    adipiscing elit. Gravida nec
                                    leo Lorem ipsum
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row m-auto hoa-custom-container mt-4 mt-md-5 mt-lg-4">
                    <div class="col-lg-2 col-md-12 col-3"></div>
                    <div class="col-md-8 col-lg-6 m-auto card-bg">
                  
                            <h3 class="title">My services</h3>
                 
                      
                        <p class="subtitle mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Arcu
                            felis.
                        </p>
                        <a href="{{route('dashboard.checkservice')}}  ">   <button class="uploadbutton px-4 mt-4 btn-lg" style="background-color: #2DA601;">
                            <span>
                                <img src="../assets/icons/upload_upicon.svg" class="img-fluid" alt="">
                            </span>
                            &nbsp; Check Services
                        </button> </a>
                    </div>
                    <div class="col-md-8 col-lg-4 m-md-auto ms-lg-auto pt-4 pt-lg-0 pe-0 ps-0">
                        <div class="col-lg-10 m-auto">

                            <div class="card-bg2" style="background-color: #2DA601;">
                                <p class="title mb-2">pending docs since last month .</p>
                                <h2 class="percentage mb-2">20 %</h2>
                                <p class="title" style="font-weight: normal;">Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit. Gravida nec
                                    leo Lorem ipsum
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--dashboard card ends-->
 
	<!--dashboard card ends-->
	@endauth

	@guest
	<!-- steper Start -->
	<section class=" bg_white container" style="margin-top: 8%;">
		<div class="row hoa-custom-container m-auto">
			<div class="col-lg-1 col-md-1 col-3"></div>

			<div class="col-lg-7 col-md-8 m-auto">
				<div class="wrapper">
					<div class="hoa_dashboard-mainDiv">
						<div class="hoa_dashboard-homePage-h1">HEY !</div>
						<div class="hoa_dashboard-homePage-h2">WELCOME ONBOARD</div>
						<div class="hoa_dashboard-homePage-h3 col-lg-8 m-auto mt-4">We take care of your Accounting
							Problems and
							helps you grow your business faster.</div>

						<P class="hoa_dashboard-homePage-p">Start Your Journey by Creating Account.</P>

						<div class="col-12 col-md-7 col-lg-5">
						<a href="{{route('login')}} ">	<button class="hoa_dashboard-homePage-button btn"><span><img
										src="../assets/icons/DashboardLock.svg" /></span> Create account</button>
									</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	@endguest

</main>
@endsection