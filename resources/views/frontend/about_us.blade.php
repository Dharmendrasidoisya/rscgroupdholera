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
									<li class="active">About Us</li>
								</ul>
							</div>
						</div>
					</div>

				</section>

				<style>
					.text-7{
						font-size: 16px !important;
					}
					@media only screen and (max-width: 600px) {
						.lblwhy {
							margin-bottom: 40px;
						}
					}
				</style>

				<div class="container py-5 my-4">
					<div class="row">
						<div class="col">
							<div class="container ">
								<div class="row align-items-center">
									
									<div class="mt-4 mt-md-0 col-md-7 " style="text-align: justify;">
									@if($abouts->isNotempty())
										@foreach($abouts as $about)
										@if($about->status=='1')
										<h2 class="font-weight-bold text-color-dark text-10 mb-4">{{$about->titel}}</h2>

										@endif
										@endforeach
										@else
										<h2 class="font-weight-bold text-color-dark text-10 mb-4">RSC Realty</h2>
										
										@endif	
									@foreach($abouts as $about)
									@if($about->status=='1')
										<p class="text-7 lblmargin">{{$about->shout_description}}</p>
										@endif
										@endforeach   
									</div>
									@foreach($abouts as $about)
									@if($about->status=='1')
                                    <div class="col-md-5 text-center lblwhy">
                                        <img src="{{asset('uploads/image/'.$about->about_image)}}" class="img-fluid rounded-0 p-relative top-10 " data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" alt="" />
                                    </div> 
									@endif
									@endforeach  
									
									@foreach($abouts as $about)
									@if($about->status=='1')
									

										<p class="lblmargin">{!!($about->about_description)!!}
										</p>

										@endif
										@endforeach  
								</div>
							</div>
                        </div>
					</div>
				</div>
			
				<section class="get-in-touch bg-color-after-secondary overlay overlay-color-primary overlay-show p-relative overflow-hidden" style="background-image: url('{{asset('frontend/imgnew/abc.jpg')}}'); background-size: cover; background-position: center;">
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
           
				

@endsection