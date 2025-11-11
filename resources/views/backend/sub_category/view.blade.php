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
			<h3 class="card-title"> Only View SubCategory</h3>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="box">
					<form method="POST" action="{{route('admin.subcategoryupdate',$subcategory->id)}}" enctype='multipart/form-data'>
						@csrf
						<div class="box-content">
							<div class="form-group-select">
								<label for="select1" class="col-sm-3 col-lg-3 control-label">Select Category</label>
								<div class="col-sm-6 col-lg-6 controls">
									<select name="category_id" class="form-control" name="select1" data-rule-required="true">
										@foreach ($categorys as $category)
											
											<option  value="{{$category->id}}">{{$category->category_name}}</option>
										@endforeach
									</select>
								</div>
							</div>
							<div class="form-group-select">
								<label class="col-sm-3 col-lg-3 control-label" for="subcategory">SubCategory:</label>
                                
								<div class="col-sm-6 col-lg-6 controls">
									<input name="subcategory" type="text" class="form-control" data-rule-required="true" data-rule-minlength="3"  value="{{$subcategory->subcategory}}"/>
								</div>
							</div>
							<div class="form-group-select">
								<label class="col-sm-3 col-lg-3 control-label" for="subcategory_image">Image Upload</label>
								<div class="col-sm-6 col-lg-6 controls">
                                <img src="{{asset('uploads/image/'.$subcategory->subcategory_image)}}" width="150px" height="150px">
									<input name="subcategory_image" type="file"  class="form-control" data-rule-required="true" data-rule-minlength="3" />
								</div>
							</div>
							<div class="form-group-select">
								<label class="col-sm-3 col-lg-3 control-label">Category Description</label>
								<div class="col-sm-9 col-lg-6 controls">
									<textarea name="subcategory_description" class="form-control wysihtml6" rows="6">{{$subcategory->subcategory_description}}</textarea>
								</div>
							</div>
							<div class="form-group-select">                          
							<lable class="col-sm-3 col-lg-3 control-label">Status</lable>
								<div class="col-sm-6 col-lg-4 controls">
									<select class="form-control" aria-label="Default select example" value="{{old('status')}}" name="status">
									<option value="1" {{$subcategory->status == '1' ? 'selected': ''}}>Active</option>
									<option value="0" {{$subcategory->status == '0' ? 'selected': ''}}>Inactive</option>
									</select>
								</div>
							</div>
							<hr>
							<!-- <div class="form-group-select">
								<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
									<input type="submit" value="Submit" class="btn btn-primary" />
								</div>
							</div> -->
						</div>
					</form>
				</div>
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
