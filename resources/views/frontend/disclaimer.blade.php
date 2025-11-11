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
									<li class="active">Disclaimer</li>
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
									
									<div class="mt-4 mt-md-0 col-md-12 " style="text-align: justify;">
			
										<h2 class="font-weight-bold text-color-dark text-10 mb-4">Legal Disclaimer</h2>
										<p class="text-7 lblmargin">The Website Content is intended to promote the Honorable Government initiative to develop Dholera Greenfield region into a smart city of the future. Investors are advised to verify all the documents and details of any project, including area, services, terms of payments and other relevant terms independently with RSC Group Dholera.</p>
										<p class="text-7 lblmargin">The Information available on our website and social media channels are general information about Dholera SIR. The Website Content is only indicative and artistic, and does not represent the actual buildings, landscapes or facilities. Dholera Greenfield region may be a wise choice for futuristic investment, as the Government is planning to develop it with advanced infrastructure and amenities. However, the investments made are subject to market risks and uncertainties.</p>
										<p class="text-7 lblmargin">The Website Content shall not be deemed to constitute any advertisement, invitation, solicitation, offer or sale of any product offerings and we shall not be responsible for any consequences of any action taken by any person or authority relying on material / information or otherwise. Rather the main purpose of the Website Content will be just to encourage the Government initiative to develop Dholera Greenfield region into a very well sophisticated smart city. Investors are required to verify all the details including area, services, terms of sales and payments and other relevant terms independently with RSC Group.</p>
										<p class="text-7 lblmargin">Please do NOT visit any unauthorised or unverified website/broker (online / offline) to receive any information about any projects of RSC Group Dholera. Information about projects on the website(s) is indicative. Artist’s impressions, products, features etc. are shown as illustrations and for reference only. The land parcels purchased and the final price of the plots may differ from the actual site and are subject to future alterations. We have made all efforts to ensure accuracy of the Website, but RSC Group Dholera shall not be liable for any loss, claim, damage, errors directly or indirectly, consequential or incidental, suffered by any person due to use or inability to use this website.</p>
                                    </div>
                                </div>
							</div>
                        </div>
					</div>
				</div>

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