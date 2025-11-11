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
			<h3 class="card-title"> Only View</h3>
		</div>
		<!--begin::Form-->
			<div class="row">
				<div class="col-md-12">
					<div class="box">
						<form method="post" action="{{route('admin.newsupdate',$new->id)}}" enctype='multipart/form-data'>
							@csrf
							<div class="box-content">
								<div class="form-group-select">
									<label class="col-sm-3 col-lg-2 control-label" for="title">Title<span style="color: #a94442;">*</span></label>
									<div class="col-sm-6 col-lg-4 controls">
										<input name="title" type="text"class="form-control" data-rule-required="true" data-rule-minlength="3" value="{{$new->title}}" readonly/>
										<span class="text-danger">
											@error("title")
											{{$message}}
											@enderror
										</span>
									</div>
								</div>
								<div class="form-group-select">
								<label class="col-sm-3 col-lg-2 control-label" for="leatest">Home Page</label>
								<div class="col-sm-6 col-lg-6 controls">
									 <input type="checkbox" id="1" name="leatest" value="1" readonly>
									 <label for="1">Latest News</label><br>
								</div>
							</div>
								<div class="form-group-select">
									<label class="col-sm-3 col-lg-2 control-label" for="image">Image<span style="color: #a94442;">*</span></label>
									<div class="col-sm-6 col-lg-4 controls">
										<input name="image" type="file"class="form-control" data-rule-required="true" data-rule-minlength="3" value="{{$new->image}}"/>
										<label><strong style="color:red">image size 800*400</strong></label>
										<img src="{{asset('uploads/news/'.$new->image)}}" width="60px" height="60px">
										<span class="text-danger">
											@error("image")
											{{$message}}
											@enderror
										</span>
									</div>
								</div>
								<div class="form-group-select">
									<label class="col-sm-3 col-lg-2 control-label" for="title">Short Description<span style="color: #a94442;">*</span></label>
									<div class="col-sm-9 col-lg-9 controls">
										<textarea name="description" type="text"class="form-control" data-rule-required="true" data-rule-minlength="3" value="{{$new->description}}" readonly>{{$new->description}}</textarea>
										<span class="text-danger">
											@error("description")
											{{$message}}
											@enderror
										</span>
									</div>
								</div>
								<div class="form-group-select">
									<label class="col-sm-3 col-lg-2 control-label" for="long_description">Long description</label>
									<div class="col-sm-9 col-lg-9 controls">
									<textarea type="text" class="form-control ckedspec" name="long_description" value="{{$new->long_description}}"  placeholder="Enter long description" id="full-featured-editor" readonly>{{$new->long_description}}</textarea>
										<span class="text-danger">
											@error("long_description")
											{{$message}}
											@enderror
										</span>
									</div>
								</div>
								<div class="form-group-select">
									<lable class="col-sm-3 col-lg-2 control-label">Status</lable>
									<div class="col-sm-6 col-lg-4 controls">
									<select class="form-control" aria-label="Default select example"  name="status">
											<option value="1" {{$new->status == '1' ? 'selected': ''}}>Active</option>
											<option value="0" {{$new->status == '0' ? 'selected': ''}}>Inactive</option>
										</select>
									</div>
								</div>
								<hr>

									<!-- <div class="form-group-select">
										<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
											<input type="submit"  value="Submit"  class="btn btn-primary" />
										</div>
									</div> -->

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
