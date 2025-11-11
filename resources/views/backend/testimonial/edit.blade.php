@extends('backend.layout.master')
@section('contant')
<!--begin::Wrapper-->
<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">

	<!--begin::Container-->
	<div class="container">
		<div class="row">
				<div class="col-lg-12">
					<!--begin::Card-->
					<div class="card card-custom gutter-b example example-compact">
						<div class="card-header">
			<h3 class="card-title"> Update Testimonial</h3>
		</div>
		<!--begin::Form-->
			<div class="row">
				<div class="col-md-12">
					<div class="box">
						<form method="post" action="{{route('admin.testimonialupdate', $testimonials->id)}}" enctype='multipart/form-data'>
							@csrf
							<div class="box-content">
								<div class="form-group-select">
									<label class="col-sm-3 col-lg-2 control-label" for="title">Name</label>
									<div class="col-sm-6 col-lg-4 controls">
										<input name="name" type="text"class="form-control" data-rule-required="true" data-rule-minlength="3" value="{{$testimonials->name}}"/>
									
									</div>
								</div>
								<div class="form-group-select">
									<label class="col-sm-3 col-lg-2 control-label" for="image">Image</label>
									<div class="col-sm-6 col-lg-4 controls">
										<input name="image" type="file"class="form-control" oninput="pic.src=window.URL.createObjectURL(this.files[0])" data-rule-required="true" data-rule-minlength="3" />
									
										<img src="{{asset('uploads/testimonial/'.$testimonials->image)}}" width="60px" height="60px" id="pic" >
										<label><strong style="color:red">image size 100*100</strong></label>
										
									</div>
								</div>
								
								<div class="form-group-select">
									<label class="col-sm-3 col-lg-2 control-label" for="short_description">Description</label>
									<div class="col-sm-9 col-lg-9 controls">
									<textarea type="text" class="form-control ckedspec" name="short_description"  placeholder="Enter Description" id="full-featured-editor">{{$testimonials->short_description}}</textarea>
									</div>
								</div>
								<div class="form-group-select">
									<lable class="col-sm-3 col-lg-2 control-label">Status</lable>
									<div class="col-sm-6 col-lg-4 controls">
										<select class="form-control" aria-label="Default select example" value="{{old('status')}}" name="status">
										<option value="1" {{$testimonials->status == '1' ? 'selected': ''}}>Active</option>
										<option value="0" {{$testimonials->status == '0' ? 'selected': ''}}>Inactive</option>
										</select>
									</div>
								</div>
								<hr>

								<div class="form-group-select">
									<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
										<input type="submit"  value="Submit"  class="btn btn-primary" />
									</div>
								</div>

							</div>
						</from>
					</div>
				</div>

			</div>
		<!--end::Form-->
		</div>
				<!--end::Card-->
			</div>
		</div>
	</div>
	<!--end::Container-->
</div>
<!--end::Wrapper-->
@endsection
