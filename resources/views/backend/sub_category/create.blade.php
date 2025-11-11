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
			<h3 class="card-title"> Add SubCategory</h3>
		</div>
		<!--begin::Form-->
				<div class="row">
					<div class="col-md-12">
						<div class="box">
							<form method="POST" action="{{route('admin.subcategorystore')}}" enctype='multipart/form-data'>
								@csrf
								<div class="box-content">
									<div class="form-group-select">
										<label for="select1" class="col-sm-3 col-lg-2 control-label">Select Category</label>
										<div class="col-sm-6 col-lg-4 controls">
											<select name="category_id" class="form-control" name="select1" data-rule-required="true">
												<option selected="selected" value="">- - Please Select - -</option>
												@foreach ($categorys as $category)
													<option  value="{{$category->id}}">{{$category->category_name}}</option>
												@endforeach
											</select>
											<span class="text-danger">
											@error("category_id")
											{{$message}}
											@enderror
										</span>
										</div>
									</div>
									<div class="form-group-select">
										<label class="col-sm-3 col-lg-2 control-label" for="subcategory">SubCategory:</label>
										<div class="col-sm-6 col-lg-4 controls">
											<input name="subcategory" type="text" class="form-control" data-rule-required="true" data-rule-minlength="3" />
											<span class="text-danger">
											@error("subcategory")
											{{$message}}
											@enderror
										</span>
										</div>
										
									</div>
									<div class="form-group-select">
										<label class="col-sm-3 col-lg-2 control-label" for="subcategory_image">Image Upload</label>
										<div class="col-sm-6 col-lg-4 controls">
											<input name="subcategory_image" type="file"  class="form-control" data-rule-required="true" data-rule-minlength="3" />
											<span class="text-danger">
											@error("subcategory_image")
											{{$message}}
											@enderror
										</span>
										</div>
									</div>
									<div class="form-group-select">
										<label class="col-sm-3 col-lg-2 control-label">Description</label>
										<div class="col-sm-9 col-lg-6 controls">
										<textarea type="text" class="form-control ckedspec" name="subcategory_description" value="{{old('subcategory_description')}}"  placeholder="Enter subcategory description" id="full-featured-editor"></textarea>
										</div>
									</div>
									<div class="form-group-select">                          
										<label class="col-sm-3 col-lg-2 control-label">Active</label>
										<div class="col-sm-9 col-lg-4 controls">
											<span class="switch switch-sm">
												<label>
													<input type="checkbox" checked="checked" name="status" value="1">
													<span></span>
												</label>
											</span>
										</div>
									</div>
									<hr>
									<div class="form-group-select">
										<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
											<input type="submit" value="Submit" class="btn btn-primary" />
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>

				</div>
				</div>
				<!--end::Card-->
			</div>
		</div>
	</div>
	<!--end::Container-->
</div>
<!--end::Wrapper-->

@endsection
