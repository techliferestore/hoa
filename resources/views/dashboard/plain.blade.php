@extends('dashboard.layout.dlayout')

@section('nav')
@include('dashboard.include.nav')
@endsection
@section('content')
<main id="main" class="home-section">
	<!-- steper Start -->
	<section class=" bg_white" style="margin-top: 8%;">
		
			<div class="container" style="background: #F2F2F2;padding-bottom: 5%">
				<div class="hoa_home-fourthBanner-head text-center pt-5">Service Plans</div>
				<div class="col-md-7 hoa_home-fourthBanner-para text-center">Every business require Different efforts to work,
					Choose
					a Service Plan according
					to your Bussiness Needs, Pick your Sevices and leave rest to us.</div>

				<div class="row" style="margin-bottom: 37%;">
					<div class="col-md-3 col-9 mt-5 m-auto rectangle hoverDiv">
						<p class="rectangle-header">Fixed Price Plan</p>
						<div class="rectangle-div">
							<div class="m-auto mt-3 rectangle-card-pill">
							</div>
							<img src="{{ asset('/') }}assets/images/homePrice.svg" class="mt-md-5 hideImg" />
							<div class="rectangle-p mb-5">This plan is Good for all the companies that
								generate fixed
								number of sales invoices
								every month</div>

							<!-- Button trigger modal -->
							<a data-bs-toggle="modal" data-bs-target="#exampleModal" id="proceed1" type="button"
								class="proceed">
								Proceed
							</a>

							<a href="{{ route('fixprice') }}" id="learnMore1" class="learnMore mt-4" type="button">Learn
								more</a>
						</div>
					</div>

					<div class="col-md-3 col-9 mt-5 m-auto rectangle hoverDiv">
						<p class="rectangle-header">Customizeable Plan</p>
						<span>
							<div class="rectangle-div">
								<div class="m-auto mt-3 rectangle-card-pill"></div>
								<img src="{{ asset('/') }}assets/images/homePrice.svg" class="mt-md-5 hideImg" />
								<div class="rectangle-p mb-5">This plan is Good for all the
									companies that generate fixed
									number of sales invoices
									every month
								</div>


								<!-- Button trigger modal -->
								<a data-bs-toggle="modal" data-bs-target="#exampleModal" id="proceed2" type="button"
									class="proceed">
									Proceed
								</a>

								<a href="..." id="learnMore2" class="learnMore mt-4" type="button">Learn
									more</a>

							</div>
						</span>
					</div>

					<div class="col-md-3 col-9 mt-5 m-auto rectangle hoverDiv">
						<p class="rectangle-header">Dedicated Accountant Plan</p>
						<span>
							<div class="rectangle-div">
								<div class="m-auto mt-3 rectangle-card-pill"></div>
								<img src="{{ asset('/') }}assets/images/homeAccountant.svg" class="mt-md-5 hideImg" />
								<div class="rectangle-p mb-4">Not Comfortable working with Multiple
									workers ? Hire a
									Dedicated Accountant for yourself and you can handle your
									services personally.</div>

								<!-- Button trigger modal -->
								<a data-bs-toggle="modal" data-bs-target="#exampleModal" id="proceed3" type="button"
									class="proceed">
									Proceed
								</a>

								<a href="..." id="learnMore3" class="learnMore mt-4" type="button">Learn
									more</a>
							</div>
						</span>
					</div>
				</div>


			</div>
		
	</section>


</main>
@endsection