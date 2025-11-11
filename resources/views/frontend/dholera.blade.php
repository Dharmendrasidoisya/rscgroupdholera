@extends('frontend.layout.master')
@section('content')

		<div class="body">
		
			<div role="main" class="main">
	
				<section class="page-header page-header-modern bg-primary custom-page-header">

					<div class="custom-svg-style-1 svg-fill-color-primary position-absolute top-0 left-50pct transform3dx-n50 h-100 z-index-0">
						
					</div>

					<style>
						.py-34{
							padding-top: 13rem!important;
   							padding-bottom: 5rem!important;
						}
					</style>

					<div class="container position-relative  ">
						<div class="row h-100">
							<div class="col align-self-end">
								
								<ul class="breadcrumb breadcrumb-light d-block py-34 ">
									<li><a href="{{url('/')}}">Home</a></li>
									<li class="active">Dholera SIR</li>
								</ul>
							</div>
						</div>
					</div>

				</section>

				<style>
					.text-7{
						font-size: 16px !important;
					}
				</style>

				<div class="container py-5 my-4">
					<div class="row">
						<div class="col">
							<div class="container ">
								<div class="row align-items-center">
									
									<div class="mt-4 mt-md-0 col-md-12 " style="text-align: justify;">
									@if($dholeras->isNotempty())
										@foreach($dholeras as $dholera)
										@if($dholera->status=='1')
										<p class="text-7 lblmargin">{!!($dholera->description)!!}</p>
										@endif
                                     	@endforeach
										@else
										<h2 class="font-weight-bold text-color-dark text-10 mb-4">ABOUT DHOLERA SIR</h2>
									@endif
										
                                        
                                          
									</div>
                                    <!-- <div class="col-md-6 text-center ">
                                        <img src="imgnew/commercial (2).jpg" class="img-fluid rounded-0 p-relative top-10 " data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" alt="" />
                                    </div>  -->

								</div>
							</div>
                        </div>
					</div>
				</div>
				<style>
					.card-img-top {
				width: 70px;
				height: 70px;
				border-top-left-radius: calc(0.25rem - 1px);
				border-top-right-radius: calc(0.25rem - 1px);
			}
					.our-services .service-card {
						padding: 20px 0 20px 0px !important;
						text-align: center !important;
					}

					@media only screen and (max-width: 600px) {
						.our-services .service-card {
							padding: 65px 0 65px 0px !important;
                  			text-align: center !important;
						}
						#popup {
							background-image: none !important;
						}
					}
				</style>
				<section class="our-services p-relative my-5">
					<span class="custom-circle custom-circle-2 bg-color-quaternary appear-animation" data-appear-animation="zoomIn" data-appear-animation-delay="100"></span>
					<div class="container">
						<div class="row justify-content-center">
							<h4 class="text-color-dark custom-text-10 font-weight-bold text-center custom-title-with-icon-center custom-title-with-icon custom-title-with-icon-primary pb-5 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">Advantage Dholera Smart City</h4>
						</div>
						<div class="row">
							<div class="col-xl-4 appear-animation text-center" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
								<a  class="text-decoration-none">
									<img class="card-img-top" src="{{asset('frontend/imgnew/icon/1.png')}}" alt="" loading="lazy">
									<div class="service-card mb-4 bg-color-tertiary bg-color-hover-primary text-color-hover-light w-100 font-weight-semibold custom-text-6 line-height-6 text-color-dark p-relative">
										
									Worldclass Infrastructure
									</div>
								</a>
							</div>
							<div class="col-xl-4 appear-animation text-center" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
								<a  class="text-decoration-none">
									<img class="card-img-top" src="{{asset('frontend/imgnew/icon/2.png')}}" alt="" loading="lazy">
									<div class="service-card mb-4 bg-color-dark bg-color-hover-primary w-100 font-weight-semibold custom-text-6 line-height-6 text-color-light p-relative">
										
										Ease of Governance
									</div>
								</a>
							</div>
							<div class="col-xl-4 appear-animation text-center" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
								<a  class="text-decoration-none">
									<img class="card-img-top" src="{{asset('frontend/imgnew/icon/3.png')}}" alt="" loading="lazy">
									<div class="service-card mb-4 bg-color-tertiary bg-color-hover-primary text-color-hover-light w-100 font-weight-semibold custom-text-6 line-height-6 text-color-dark p-relative">
									
										Plug & Play
									</div>
								</a>
							</div>
						</div>
						<div class="row">
							<div class="col-xl-4 appear-animation text-center" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="500">
								<a  class="text-decoration-none">
									<img class="card-img-top" src="{{asset('frontend/imgnew/icon/4.png')}}" alt="" loading="lazy">
									<div class="service-card mb-4 bg-color-dark bg-color-hover-primary w-100 font-weight-semibold custom-text-6 line-height-6 text-color-light p-relative">
										
										Social Infrastructure
									</div>
								</a>
							</div>
							<div class="col-xl-4 appear-animation text-center" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600">
								<a  class="text-decoration-none">
									<img class="card-img-top" src="{{asset('frontend/imgnew/icon/5.png')}}" alt="" loading="lazy">
									<div class="service-card mb-4 bg-color-tertiary bg-color-hover-primary text-color-hover-light w-100 font-weight-semibold custom-text-6 line-height-6 text-color-dark p-relative">
										Ease of Business
									</div>
								</a>
							</div>
							<div class="col-xl-4 appear-animation text-center" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="700">
								<a  class="text-decoration-none">
									<img class="card-img-top" src="{{asset('frontend/imgnew/icon/6.png')}}" alt="" loading="lazy">
									<div class="service-card mb-4 bg-color-dark bg-color-hover-primary w-100 font-weight-semibold custom-text-6 line-height-6 text-color-light p-relative">
										
										External Connectivity
									</div>
								</a>
							</div>
						</div>
						<div class="row">
							<div class="col-xl-4 appear-animation text-center" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="800">
								<a  class="text-decoration-none">
									<img class="card-img-top" src="{{asset('frontend/imgnew/icon/7.png')}}" alt="" loading="lazy">
									<div class="service-card mb-4 bg-color-tertiary bg-color-hover-primary text-color-hover-light w-100 font-weight-semibold custom-text-6 line-height-6 text-color-dark p-relative">
										
										Live, Work and Play
									</div>
								</a>
							</div>
							<div class="col-xl-4 appear-animation text-center" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="900">
								<a  class="text-decoration-none">
									<img class="card-img-top" src="{{asset('frontend/imgnew/icon/8.png')}}" alt="" loading="lazy">
									<div class="service-card mb-4 bg-color-dark bg-color-hover-primary w-100 font-weight-semibold custom-text-6 line-height-6 text-color-light p-relative">
										
										Technology
									</div>
								</a>
							</div>
							<div class="col-xl-4 appear-animation text-center" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1000">
								<a  class="text-decoration-none">
									<img class="card-img-top" src="{{asset('frontend/imgnew/icon/9.png')}}" alt="" loading="lazy">
									<div class="service-card mb-4 bg-color-tertiary bg-color-hover-primary text-color-hover-light w-100 font-weight-semibold custom-text-6 line-height-6 text-color-dark p-relative">
										
										Sustainability
									</div>
								</a>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-xl-9">
								<p class="custom-text-4 mt-4 mb-0 text-center appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
									The notable features of Dholera include green spaces, commercial spaces, ICT based control center and availability of residential area for the working capital. Dholera, with a huge land parcel of 920 square kilometers promises to be a world-class destination and is expected to be fully developed by 2030
								</p>
							</div>
						</div>
					</div>
				</section>
				<section class="get-in-touch bg-color-after-secondary overlay overlay-color-primary overlay-show p-relative overflow-hidden" style="background-image: url({{asset('frontend/imgnew/abc.jpg')}}); background-size: cover; background-position: center;">
					<span class="custom-circle custom-circle-1 bg-color-light appear-animation" data-appear-animation="zoomIn" data-appear-animation-delay="100"></span>
					<span class="custom-circle custom-circle-2 bg-color-light appear-animation" data-appear-animation="zoomIn" data-appear-animation-delay="100"></span>
					<div class="container">
						<div class="row">
							<div class="col-lg-8">
								<p class="mb-2 text-color-tertiary custom-text-7 custom-title-with-icon custom-title-with-icon-light appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">Let’s Get in Touch</p>
								<h4 class="text-color-light font-weight-bold custom-text-10 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
									Connecting is a click away,<br/>
									Reach out to us today.
								</h4>
							</div>
							<div class="col-lg-4 d-flex align-items-center justify-content-start justify-content-lg-end mt-5 mt-lg-0">
								<a href="{{route('contactus')}}" class="btn btn-outline custom-btn-outline btn-light border-white rounded-0 px-4 py-3 text-color-light text-color-hover-dark bg-color-hover-light custom-text-6 line-height-6 font-weight-semibold custom-btn-with-arrow appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="600">Let’s Talk!</a>
							</div>
						</div>
					</div>
				</section>
				

		</div>

@endsection