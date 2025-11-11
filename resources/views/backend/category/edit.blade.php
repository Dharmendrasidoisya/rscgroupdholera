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
			<h3 class="card-title">Update Projects</h3>
		</div>
		<!--begin::Form-->
		<div class="row">
			<div class="col-md-12">
				<div class="box">
					<form method="post" action="{{route('admin.categoryupdate',$category->id)}}" enctype='multipart/form-data'>
						@csrf
						<div class="box-content">
									<div class="form-group-select">
										<label for="menu_id" class="col-sm-3 col-lg-2 control-label">
											Chosen Menu <span style="color: #a94442;">*</span>
										</label>
										<div class="col-sm-6 col-lg-4 controls">
											<select name="menu_id" class="form-control" data-rule-required="true">
												<option value="">-- Please select --</option>
												<option value="1" {{ $category->menu_id == '1' ? 'selected' : '' }}>Ongoing Project</option>
												<option value="2" {{ $category->menu_id == '2' ? 'selected' : '' }}>Sold Out</option>
											</select>
											<span class="text-danger">
												@error("menu_id")
													{{$message}}
												@enderror
											</span>
										</div>
									</div>
								</div>

							
							<div class="form-group-select">
								<label class="col-sm-3 col-lg-2 control-label" for="category_name">Project Name<span style="color: #a94442;">*</span></label>
								<div class="col-sm-6 col-lg-4 controls">
									<input name="category_name" type="text"class="form-control" data-rule-required="true" data-rule-minlength="3" value="{{$category->category_name}}"/>
									<span class="text-danger">
										@error("category_name")
										{{$message}}
										@enderror
									</span>
								</div>
							</div>
						
							<div class="form-group-select">
								<label for="category_themnail" class="col-sm-3 col-lg-2 control-label">Image <span style="color: #a94442;">*</span></label>
								<div class="col-sm-6 col-lg-4 controls">
									<img src="{{asset('uploads/image/'.$category->category_themnail)}}" id="pic" width="150px" height="150px">
									<input name="category_themnail" oninput="pic.src=window.URL.createObjectURL(this.files[0])" type="file" class="form-control" data-rule-required="true" data-rule-minlength="3" value="{{$category->category_themnail}}"/>
									<label><strong style="color:red">image size 500*500</strong></label>
									<span class="text-danger">
										@error("category_themnail")
										{{$message}}
										@enderror
									</span>
								</div>
							</div>
							<div class="form-group-select">
								<label class="col-sm-3 col-lg-2 control-label" for="brochure">Brochure</label>
								<div class="col-sm-9 col-lg-8 controls">
								@if($category->brochure != null)
								<img src="{{asset('pdf.png')}}" width="150px" height="150px">
								{{$category->brochure}}
								@endif
								<br>
									<input name="brochure" type="file" value="{{$category->brochure}}" class="form-control" data-rule-required="true" data-rule-minlength="3" />
								</div>
							</div>
							<div class="form-group-select mt-3">
								<label class="col-sm-3 col-lg-2 control-label" for="map_link">Google Map Link</label>
								<div class="col-sm-9 col-lg-8 controls">
									@if(!empty($category->map_link))
										<a href="{{ $category->map_link }}" target="_blank" class="btn btn-sm btn-primary mb-2">
											View Map
										</a>
									@endif
									<input name="map_link" type="text" value="{{ old('map_link', $category->map_link ?? '') }}"
										placeholder="Enter Google Maps link (e.g. https://maps.app.goo.gl/...)" class="form-control"
										data-rule-required="true" data-rule-minlength="5" />
								</div>
							</div>
							<div class="form-group-select">
								<label class="col-sm-3 col-lg-2 control-label" for="video">Video</label>
								<div class="col-sm-9 col-lg-8 controls">
									<input name="video" type="text" class="form-control" value="{{$category->video}}" data-rule-required="true" data-rule-minlength="3" />
									{!! html_entity_decode($category->video)!!}
								</div>
								
							</div>
							<div class="form-group-select">
								<label class="col-sm-3 col-lg-2 control-label">Description</label>
								<div class="col-sm-9 col-lg-6 controls">
									<textarea name="category_description" id="editor1" class="form-control wysihtml6" rows="6">{{$category->category_description}}</textarea>
									
								</div>
							</div>
							<div class="form-group-select">
								<lable class="col-sm-3 col-lg-2 control-label">Status</lable>
								<div class="col-sm-6 col-lg-4 controls">
									<select class="form-control" aria-label="Default select example"  name="status">
										<option value="1" {{$category->status == '1' ? 'selected': ''}}>Active</option>
										<option value="0" {{$category->status == '0' ? 'selected': ''}}>Inactive</option>
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
