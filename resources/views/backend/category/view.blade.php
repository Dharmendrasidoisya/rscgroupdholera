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
			<h3 class="card-title">List Projects</h3>
		</div>
		<!--begin::Form-->
		<div class="row">
			<div class="col-md-12">
				<div class="box">
						<div class="box-content">
							<input type="hidden" name="hdnpids" id="hdnpids" />

							<div class="form-group-select">
								<label for="menu_id" class="col-sm-3 col-lg-2 control-label">Chosen Menu</label>
								<div class="col-sm-6 col-lg-4 controls">
									<select name="menu_id"   class="form-control"  data-rule-required="true">
									<option  value="{{$category->menu_id}}" selected>@if($category->menu_id == '1') Product  @endif</option>
										
									</select>
								</div>
							</div>

							<div class="form-group-select">
								<label class="col-sm-3 col-lg-2 control-label" for="category_name">Projects Name</label>
								<div class="col-sm-6 col-lg-4 controls">
									<input name="category_name" type="text"class="form-control" data-rule-required="true" data-rule-minlength="3" value="{{$category->category_name}}" readonly/>
								</div>
							</div>
							<!-- <div class="form-group-select">
								<label for="category_id" class="col-sm-3 col-lg-2 control-label">Parent Category</label>
								<div class="col-sm-6 col-lg-4 controls">
									<select name="category_id"  class="form-control" >
										<option selected="selected" value="{{$category->category_name}}">{{$category->category_name}}</option>
									</select>
								</div>
							</div> -->
							<div class="form-group-select">
								<label for="category_themnail" class="col-sm-3 col-lg-2 control-label">Image </label>
								<div class="col-sm-6 col-lg-4 controls">
									<img src="{{asset('uploads/image/'.$category->category_themnail)}}" width="150px" height="150px">
								</div>
							</div>
							<div class="form-group-select">
								<label class="col-sm-3 col-lg-2 control-label">Description</label>
								<div class="col-sm-9 col-lg-6 controls">
									<textarea name="category_description" id="full-featured-editor" class="form-control wysihtml6" rows="6" readonly>{{$category->category_description}}</textarea>
								</div>
							</div>
							<div class="form-group-select">
								<label class="col-sm-3 col-lg-2 control-label">Active</label>
								<div class="col-sm-9 col-lg-4 controls">
									<span class="switch switch-sm">
										<label>
											<!-- <input type="checkbox" checked="checked" name="status" > -->
											<input type="checkbox" name="status" checked data-toggle="toggle" data-on="1" data-off="0" value="1">
											<span></span>
										</label>
									</span>
								</div>
							</div>
							<hr>
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
