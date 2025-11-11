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
									<li class="active">Gallery</li>
								</ul>
							</div>
						</div>
					</div>

				</section>

				<section class="our-services p-relative py-5 my-5">
					<span class="custom-circle custom-circle-2 bg-color-quaternary appear-animation animated zoomIn appear-animation-visible" data-appear-animation="zoomIn" data-appear-animation-delay="100" style="animation-delay: 100ms;"></span>
					<div class="container">
						<div class="row justify-content-center">
							<h4 class="text-color-dark custom-text-10 font-weight-bold text-center custom-title-with-icon-center custom-title-with-icon custom-title-with-icon-primary pb-5 mb-4 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">Why Invest In Dholera </h4>
						</div>
						<div class="row">
							@foreach($gallerys as $gallery)
							@if($gallery->status=='1')
							<div class="col-xl-4 appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400" style="animation-delay: 400ms;">
								<a href="javascript:(0)" class="text-decoration-none">
									<img class="" src="{{asset('uploads/image/'.$gallery->gallery_image)}}" alt="" style="width: 100%;" loading="lazy">
									<h4 style="text-align: center; font-weight: 600; margin-bottom: 10px; margin-top: 10px;">{{$gallery->title}}</h4>
								</a>
							</div>
							@endif
							@endforeach
							
						</div>

						
						<div class="row justify-content-center" style="display: none;">
							<div class="col-xl-9">
								<p class="custom-text-4 mt-4 mb-0 text-center appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris at massa quam. Maecenas et sem accumsan, dictum arcu eu, consectetur eros. Nulla tortor est, lobortis vestibulum turpis sed, mollis commodo orci.
								</p>
							</div>
						</div>
					</div>
				</section>

				<section class="get-in-touch bg-color-after-secondary overlay overlay-color-primary overlay-show p-relative overflow-hidden" style="background-image: url('imgnew/abc.jpg'); background-size: cover; background-position: center;">
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