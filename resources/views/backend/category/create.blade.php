@extends('backend.layout.master')
@section('contant')
<!--begin::Wrapper-->
<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">

	<!--begin::Container-->
	<div class="container" style="padding-top: inherit;">
		<div class="row">
			<div class="col-lg-12">
				<!--begin::Card-->
				<div class="card card-custom gutter-b example example-compact">
					<div class="card-header">
			<h3 class="card-title">Add Project</h3>
		</div>
				<!--begin::Form-->
				<div class="row">
					<div class="col-md-12">
						<div class="box">
							<form  method="post" action="{{route('admin.categorystore')}}" enctype='multipart/form-data'>
								@csrf
								<div class="box-content">

									{{-- <div class="form-group-select">
										<label for="menu_id" class="col-sm-3 col-lg-3 control-label">Chosen Menu<span style="color: #a94442;">*</span></label>
										<div class="col-sm-6 col-lg-4 controls">
											<select name="menu_id"   class="form-control"  data-rule-required="true">
											<option selected="selected" value="">-- Please select --</option>
												
												<option  value="1">Our Projects</option>
											</select>
											<span class="text-danger">
												@error("menu_id")
												{{$message}}
												@enderror
											</span>
										</div>
									</div> --}}

									<div class="form-group-select">
									<label for="menu_id" class="col-sm-3 col-lg-3 control-label">
										Chosen Menu <span style="color: #a94442;">*</span>
									</label>
									<div class="col-sm-6 col-lg-4 controls">
										<select name="menu_id" class="form-control" data-rule-required="true">
											<option selected="selected" value="">-- Please select --</option>
											<option value="1">Ongoing Project</option>
											<option value="2">Sold Out</option>
										</select>
										<span class="text-danger">
											@error("menu_id")
												{{$message}}
											@enderror
										</span>
									</div>
								</div>
								
									<div class="form-group-select">
										<label class="col-sm-4 col-lg-3 control-label" for="category_name">Project Name<span style="color: #a94442;">*</span></label>
										<div class="col-sm-8 col-lg-8 controls">
											<input name="category_name" type="text"class="form-control" data-rule-required="true" data-rule-minlength="3" value="{{old('category_name')}}"/>
											<span class="text-danger">
												@error("category_name")
												{{$message}}
												@enderror
											</span>
										</div>
									</div>
									
									<div class="form-group-select">
										<label class="col-sm-3 col-lg-3 control-label" for="username">Image <span style="color: #a94442;">*</span></label>
										<div class="col-sm-8 col-lg-8 controls">
											<input name="category_themnail" type="file" oninput="pic.src=window.URL.createObjectURL(this.files[0])" class="form-control" data-rule-required="true" data-rule-minlength="3" />
											<label><strong style="color:red">image size 500*500</strong></label>
											<img id="pic"  />
											<span class="text-danger">
												@error("category_themnail")
												{{$message}}
												@enderror
											</span>
										</div>
									</div>
									<div class="form-group-select">
										<label class="col-sm-3 col-lg-3 control-label" for="brochure">Brochure</label>
										<div class="col-sm-9 col-lg-4 controls">
											<input name="brochure" type="file" class="form-control" data-rule-required="true" data-rule-minlength="3" />
										</div>
									</div>
									{{-- <div class="form-group-select">
										<label class="col-sm-3 col-lg-3 control-label" for="map_link">Map</label>
										<div class="col-sm-9 col-lg-4 controls">
											<input name="map_link" type="file" class="form-control" data-rule-required="true" data-rule-minlength="3" />
										</div>
									</div> --}}
									<div class="form-group-select">
										<label class="col-sm-3 col-lg-3 control-label" for="video">Video</label>
										<div class="col-sm-9 col-lg-8 controls">
											<input name="video" type="text" class="form-control" data-rule-required="true" data-rule-minlength="3" />
										</div>
									</div>
									<div class="form-group-select">
										<label class="col-sm-3 col-lg-3 control-label">Description</label>
										<div class="col-sm-9 col-lg-8 controls">
											<textarea name="category_description" id="editor1" class="form-control wysihtml6" rows="6"></textarea>
										</div>
									</div>
									<div class="form-group-select">
										<lable class="col-sm-3 col-lg-3 control-label">Status</lable>
										<div class="col-sm-6 col-lg-4 controls">
										<select class="form-control" aria-label="Default select example" value="{{old('status')}}" name="status">
											<option value="1" selected>Active</option>
											<option value="0">Inactive</option>
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
