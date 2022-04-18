@extends('dashboard.layout.dlayout')
@section('nav')
@include('dashboard.include.nav')
@endsection
@section('content')
<main id="main" class="home-section serivceList_mobile">
	<!-- steper Start -->
	<section class="steper-bg2 hoa_dashboard-serviceList-header-bg">
		<div class="hoa-custom-container">
			<div class="row m-auto">
				<div class="col-lg-2 col-md-1 col-3"></div>
				<div class="mt-2 col-md-10">
					<h3 class="hoa_dashboard-serviceList-header-h3 serviceList">Order Summary</h3>
				</div>
			</div>
		</div>
	</section>
	<!-- steper End -->

	<section>
		<div class="hoa-custom-container pe-0">
			<div class="row m-auto">
				<div class="col-lg-2 col-md-1 col-3"></div>

				<div class="col-md-7 hoa_dashboard-left-div ps-lg-0">

					<div class="accordion col-lg-10" id="accordionExample">
						{{--<div class="accordion-item accordion_itemservice">
							<h2 class="accordion-header" id="headingOne">
								<button class="accordion-button accrdion_servicelist py-1" type="button"
									data-bs-toggle="collapse" style="background: #FAFAFA;"
									data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									<span class="chevron_icon"><i class="bi bi-chevron-down"></i></span> TDS <span
										class="right_span" style="text-align: right;"> <span
											style="font-size: 14px;opacity: 0.5;">Price/Service -</span>
										<span style="font-weight: 600;">2000</span></span>
								</button>
							</h2>
							<div id="collapseOne" class="accordion-collapse collapse show"
								aria-labelledby="headingOne" data-bs-parent="#accordionExample">
								<div class="accordion-body pt-0 pb-0">
									<div class="hoa_dashboard_right-h3 col-lg-11 m-auto mb-2"
										style="font-size: 14px;border-style: none;">Service
										Includes</div>
									<div style="opacity: 0.8;">
										<ul class="hoa_dashboard-ul-rightTick" style="font-size: 14px;">
											<li class="">Tax saving & Planning advice</li>
											<li class="">TAN saving & Planning advice</li>
											<li class="">Preparation of Financials (BS, PL)</li>
											<li class="">Email & Phone Support</li>
										</ul>
									</div>
								</div>
							</div>
						</div>--}}
	                @if (count($services)>0)
				


                      <div class="accordion-item accordion_itemservice mt-2">
							<h2 class="accordion-header" id="headingTwo">
								<button class="accordion-button accrdion_servicelist collapsed py-1" type="button"
									data-bs-toggle="collapse" style="background: #FAFAFA;"
									data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									<span class="chevron_icon"><i class="bi bi-chevron-down"></i></span> TDS <span
										class="right_span" style="text-align: right;">
										<span style="font-size: 14px;opacity: 0.5;">Price/Service -</span>
										<span style="font-weight: 600;">                        {{$services['amount'] }}
										</span></span>
								</button>
							</h2>
							<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
								data-bs-parent="#accordionExample">
								<div class="accordion-body pt-0 pb-0">
									<div class="hoa_dashboard_right-h3 col-lg-11 m-auto mb-2"
										style="font-size: 14px;border-style: none;">Service
										Includes</div>
									<div style="opacity: 0.8;">
										<ul class="hoa_dashboard-ul-rightTick" style="font-size: 14px;">
											<li class="">   {{$services['include'] }}</li>
											<li class="">TAN saving & Planning advice</li>
											<li class="">Preparation of Financials (BS, PL)</li>
											<li class="">Email & Phone Support</li>
										</ul>
									</div>
								</div>
							</div>
						</div>	
						@endif	
						
					</div>

					<div class="col-lg-10 addnew_service mt-4 mt-md-4 m-auto ms-lg-0">
						<button class="btn-lg form-control mb-4">Add
							New
							Service</button>
					</div>
				</div>
				<!-- <hr style="transform: rotate(90deg);"> -->
				@if($message = Session::get('error'))
				<div class="alert alert-danger alert-dismissible fade in" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
					<strong>Error!</strong> {{ $message }}
				</div>
			@endif

			
				<div class="col-lg-3 col-md-4" style="border: 0.5px solid rgba(130, 130, 130, 0.29);">
					<div class="col-md-10 m-auto mt-5">
						@isset($services)							
					
						<table class="table table-borderless" id="myServiceList">
							<tbody>
								<tr>
									<th scope="row">Service total</th>
									<td>
										<b>   {{$services['amount'] }}</b>
									</td>
								</tr>
								<tr>
									<th scope="row">CGST</th>
									<td>500</td>
								</tr>
								<tr>
									<th scope="row">SGST</th>
									<td>100</td>
								</tr>
								<tr>
									<th scope="row">IGST</th>
									<td>-</td>
								</tr>
							</tbody>

							<tfoot>
								<tr class="hoa_dashboard-tableFooter-border">
									<td style="text-align: center;">Grand total</td>
									<td style="text-align: center;">
										<h4>   {{$services['amount'] }}</h4>
									</td>
								</tr>
							</tfoot>
						</table>
						@endisset
<style>

.razorpay-payment-button{

	background: #FBA43F;
    border: transparent;
    box-sizing: border-box;
    border-radius: 10px;
    font-family: 'Inter';
    color: #FFFFFF !important;
    height: 48px;
    padding: 0;
    margin-left: 12%;
	width: 80%;
    text-align: center;
    /* padding-top: 10px; */
}
</style>
						
						<div style="position: relative;">
							<form action="{{ route('razorpay.payment.store') }}" method="POST" >
								@csrf
								<script src="https://checkout.razorpay.com/v1/checkout.js"
										data-key="{{ env('RAZORPAY_KEY') }}"
										data-amount="{{$services['amount']*100 }}"
										data-buttontext="PAY"
										data-name="Hoa"
										data-description="Rozerpay"
										data-image="{{asset('/')}}assets/icons/symbolOnlyLogo.svg"
										data-prefill.name="{{ Auth::user()->name }}"
										data-prefill.email="{{ Auth::user()->email }}"
								     	data-prefill.phone="{{ Auth::user()->mobile}}"
										data-theme.color="#ff7529">
								</script>
							</form>
							
						{{--<button type="submit" class="bg_orange btn hoa_dashboard-servicelist-button mb-4">PAY
							</button>--}}
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row m-auto hoa-custom-container pe-0">
			<div class="col-lg-2 col-md-1 col-3"></div>
			<div class="col-md-7"></div>
			<div class="col-lg-3 col-md-4 hoa_dashboard-serviceList-borderBottom2">
				<div class="col-md-10 m-auto mt-5">
					<div class="hao_dashboard-inquery-h3 mt-5">Have any questions?</div>
					<div class="hao_dashboard-inquery-p mt-1"> Fill up the details and we</div>
					<div class="hao_dashboard-inquery-p">will assign you an expert.</div>

					<div style="display: flex;align-items: center;flex-direction: column;" class="mt-4 mb-5">
						<button class="hoa_dashboard-inquery-button btn">Request a call</button>
					</div>
				</div>
			</div>
		</div>
	</section>


</main>
@endsection