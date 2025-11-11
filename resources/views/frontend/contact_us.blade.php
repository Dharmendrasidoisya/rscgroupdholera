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
									<li class="active">Contact Us</li>
								</ul>
							</div>
						</div>
					</div>

				</section>

				<section class="mt-3 mt-xl-0 py-5 p-relative z-index-2">
					<div class="container">
					
						<div class="row">
							<div class="col-lg-12">
								<h4 class="d-block w-100 text-color-dark custom-text-10 font-weight-bold text-center mb-4 pb-3 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">We Are Where You Are<span class="text-color-primary">.</span></h4>
								@foreach($companys as $company)
                        		 @if($company->status=='1')
								<div class="d-flex flex-row flex-wrap align-items-center justify-content-center mb-4 pb-3">
									<span class="d-flex flex-column flex-md-row text-center text-md-start px-5 px-md-0 mb-4 mb-md-0 align-items-center custom-text-5 font-weight-medium appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
										<i class="far fa-envelope text-color-primary text-4 me-2" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600"></i> 
										<a href="mailto:{{$company->email1}}" class="text-color-default">
										{{$company->email1}}
										</a>
									</span><br>
									@if($company->email2!=null)
									<span class="d-flex flex-column flex-md-row text-center text-md-start px-5 px-md-0 mb-4 mb-md-0 align-items-center custom-text-5 font-weight-medium appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400"  style="margin-left: 15px;">
										<i class="far fa-envelope text-color-primary text-4 me-2" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600"></i> 
										<a href="mailto:{{$company->email2}}" class="text-color-default">
										{{$company->email2}}
										</a>
									</span>
									@endif
									
									<span class="d-flex flex-column flex-md-row text-center text-md-start px-5 px-md-0 align-items-center custom-text-5 font-weight-medium appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600">
										<i class="fa fa-phone text-color-primary text-4 ms-md-4 me-md-2"></i>
										<a href="tel:+91{{str_replace(' ', '',$company->contact_no1)}}">+91 {{$company->contact_no1}}</a>
									</span>
									

								</div>
								@endif
								@endforeach
								<p class="custom-text-4 text-center appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="800"></p>
							</div>
						</div>
						
						<div class="row">
							<div class="col-xl-12 pt-lg-5 mt-4 p-relative where-you-are-postal-cards appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="100">
								<span class="custom-circle custom-circle-2 bg-color-tertiary appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400"></span>
								<span class="custom-circle custom-circle-3 bg-color-tertiary appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="600"></span>
								<span class="custom-circle custom-circle-3 bg-color-tertiary appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="800"></span>
								<div class="row px-3">
								@foreach($companys as $company)
                        		 @if($company->status=='1')
								 	@if($company->address2!=null)
									<div class="col-xl-6 me-0 overflow-hidden col-where-you-are-postal">
										<div class="row justify-content-end p-relative h-100">
											<img src="{{('frontend/imgnew/contact-us-1.jpg')}}" class="img-fluid">
											<div class="col-lg-6 bg-color-primary d-flex flex-column align-items-center justify-content-center col-where-you-are-postal-text position-relative py-5 py-lg-0">
												<h4 class="text-color-light custom-text-9">Dholera Office</h4>
												<p class="mb-1 text-color-light custom-text-4 text-center">{{$company->address2}}</p>
										
											</div>
										</div>
									</div>
									@endif
									@if($company->address1!=null)
									<div class="col-xl-6 ms-0 overflow-hidden col-where-you-are-postal">
										<div class="row justify-content-end p-relative h-100">
											<img src="{{asset('frontend/imgnew/contact-us-2.jpg')}}" class="img-fluid">
											<div class="col-lg-6 bg-color-primary d-flex flex-column align-items-center justify-content-center col-where-you-are-postal-text position-relative py-5 py-lg-0">
												<h4 class="text-color-light custom-text-9">Corporate Office</h4>
												<p class="mb-1 text-color-light custom-text-4 text-center">{{$company->address1}}</p>
											
											</div>
										</div>
									</div>
									@endif
									@endif
								@endforeach
									<span class="text-center mt-5" style="font-size: 22px; font-weight: 700;">RSC Realty is subsidiary owned by RSC Group. For More detail visit <a target="_blank" href="https://www.rscdholera.com/">RSC Group Dholera</a></span>
								
								</div>
							</div>
							<div class="col-lg-12">
								<h4 class="text-color-dark custom-text-10 font-weight-bold text-center custom-title-with-icon-center custom-title-with-icon custom-title-with-icon-primary  mt-5 mb-5">Send us a Message</h4>
								<form  action="config.php" id="form" method="post">
									@csrf
									{{-- <div class="contact-form-success alert alert-success d-none mt-4">
										<strong>Success!</strong> Your message has been sent to us.
									</div> --}}
                                     {{-- 
									<input name="vind" type="hidden" id="vind" value="44917" ifkey="vind" />
									<input name="ctype" type="hidden" id="ctype" value="I1116" ifkey="ctype" />
									<input name="pname" type="hidden" id="pname" value="RSC Realty" ifkey="pname" /> --}}

									{{-- <div class="contact-form-error alert alert-danger d-none mt-4">
										<strong>Error!</strong> There was an error sending your message.
										<span class="mail-error-message text-1 d-block"></span>
									</div> --}}
									<!-- ✅ Hidden Source Field Added -->
   												 <input type="hidden" name="source" value="Contact Us">

									<div class="row">
										<div class="form-group col-lg-6">
											<input type="text" name="name" id="name" placeholder="Your Name" class="form-control py-4 px-4 rounded-0 text-color-quaternary bg-color-tertiary border-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200" >
										</div>
										<div class="form-group col-lg-6">
											<input type="text" name="email" id="email" class="form-control py-4 px-4 rounded-0 text-color-quaternary bg-color-tertiary border-0 appear-animation" placeholder="Your Email" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400" >
										</div>
									</div>
									<div class="row">
										<div class="form-group col-lg-6">
											<input type="text" name="phone" id="phone" class="form-control py-4 px-4 rounded-0 text-color-quaternary bg-color-tertiary border-0 appear-animation" placeholder="Your Phone No" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
										</div>
										<div class="form-group col-lg-6">
											<input type="text" name="location" id="location" class="form-control py-4 px-4 rounded-0 text-color-quaternary bg-color-tertiary border-0 appear-animation" placeholder="Your Location" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400" >
										</div>
									</div>
									<div class="row">
										<div class="form-group col">
											<textarea rows="8" class="form-control py-4 px-4 rounded-0 text-color-quaternary bg-color-tertiary border-0 appear-animation" name="message" id="mes" placeholder="Your Message" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200" ></textarea>
										</div>
									</div>
									<div class="g-recaptcha" data-sitekey="6LfgxgcsAAAAAEbaD4FTV__iuf7Jt8M5Aa-pz02G" style="margin:20px 0;"></div>
									<div class="row">
										<div class="form-group col">
											{{-- <button type="button" name="Submit" onclick="PostData(this.form)" class="btn btn-outline custom-btn-outline btn-primary rounded-0 text-color-dark custom-text-4 bg-color-hover-transparent text-color-hover-light font-weight-semibold custom-button-with-arrow px-4 py-3 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600">Submit</button> --}}
											<button type="submit" class="btn btn-outline custom-btn-outline btn-primary rounded-0 text-color-dark custom-text-4 bg-color-hover-transparent text-color-hover-light font-weight-semibold custom-button-with-arrow px-4 py-3 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600">Submit</button>
										</div>
									</div>
								</form>
							</div>
							
						</div>
					</div>
				</section>

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

			
		</div>

@endsection