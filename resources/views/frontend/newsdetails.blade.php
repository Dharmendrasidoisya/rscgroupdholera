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
								@foreach($news as $new)
								@if($new->status=='1')
									<ul class="breadcrumb breadcrumb-light d-block py-34 ">
										<li><a href="{{url('/')}}">Home</a></li>
										<li><a href="{{route('dholerainsights')}}">News</a></li>
										<li class="active">{{$new->title}}</li>
									</ul>
									@endif
                				@endforeach
								</div>
							</div>
						</div>

					</section>	
				</div>	

				@foreach($news as $new)
				@if($new->status == '0')
				<script>window.location = "{{route('nofound')}}";</script>
				@endif
				@endforeach
			
				@if( $news->isNotEmpty())
				@else
				<script>window.location = "{{route('nofound')}}";</script>
				@endif
				<div class="container py-5 p-relative z-index-2">
					<div class="row">
						<div class="col-lg-12">
						@foreach($news as $new)
                		@if($new->status=='1')
							<div class="row">
								<div class="col pb-5">
									<article>
										 <p class="custom-font-tertiary text-uppercase custom-text-2 mb-1 appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;color: rgb(236, 50, 55) !important;">{{ \Carbon\Carbon::parse($new->updated_at)->isoFormat(' ddd DD MMM YYYY')}}</p>
										<h4 class="text-color-dark custom-text-8 font-weight-bold mb-3 appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400" style="animation-delay: 400ms;">{{$new->title}}</h4>
										<div class="col-lg-8">
										<img src="{{asset('uploads/news/'.$new->image)}}" style="width: 100%;" class="mb-3">
											</div>
										
										{{-- <p class="custom-text-4 mb-2 appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600" style="animation-delay: 600ms;">{{$new->description}}</p> --}}
										<p class="custom-text-4 mb-2 appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600" style="animation-delay: 600ms;">{!!($new->long_description)!!}</p>
										
									</article>
								</div>
							</div>
						@endif
                		@endforeach
						

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