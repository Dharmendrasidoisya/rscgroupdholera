@extends('backend.layout.master')
@section('contant')
<!--begin::Wrapper-->
<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">

	<!--begin::Container-->
	<div class="container">
		<div class="row rowcomp">
			<div class="col-lg-12">
				<!--begin::Card-->
				<div class="card card-custom gutter-b example example-compact">
					<div class="card-header">
			<h3 class="card-title">Update Projects Image</h3>
		</div>							
		<div class="row">
			<div class="col-md-12">
				<div class="box">
					<form method="post" action="{{route('admin.project.update',$projects->id)}}" enctype='multipart/form-data'>
					@csrf
						<div class="box-content">
							<div class="form-group-select">
								<label for="select1" class="col-sm-3 col-lg-2 control-label">Gallery Title<span style="color: #a94442;">*</span></label>
								<div class="col-sm-6 col-lg-4 controls">
								<select class="form-control" aria-label="Default select example" name="category_id" value="{{$projects->category_id}}">
										@foreach ($categorys as $title)
												@if($title->status == '1')
												
												<option  value="{{$title->id}}" @if($title->id == $projects->category_id) selected @endif> {{$title->category_name}}</option>
												@else
												@endif
										@endforeach
										</select>
									<span class="text-danger">
										@error("category_id")
										{{$message}}
										@enderror
									</span>
								</div>
							</div>
						</div>	
						<div class="box-content">
							
							<div class="form-group-select">
								<label class="col-sm-3 col-lg-2 control-label" for="username">Title<span style="color: #a94442;">*</span></label>
								<div class="col-sm-6 col-lg-4 controls">
									<input name="title" type="text" class="form-control" data-rule-required="true" value="{{$projects->title}}" />
									<span class="text-danger">
										@error("title")
										{{$message}}
										@enderror
									</span>
								</div>
							</div>
							<div class="form-group-select">
								<label class="col-sm-3 col-lg-2 control-label" for="username">Image<span style="color: #a94442;">*</span></label>
								<div class="col-sm-6 col-lg-4 controls">
                                <img  id="pic" src="{{asset('uploads/projectimage/'.$projects->gallery_image)}}" width="150px" height="150px">
									<input name="gallery_image" type="file" class="form-control" data-rule-required="true" oninput="pic.src=window.URL.createObjectURL(this.files[0])" value="{{$projects->gallery_image}}"/>
									<label><strong style="color:red">image size 400*400</strong></label>
									<span class="text-danger">
										@error("gallery_image")
										{{$message}}
										@enderror
									</span>
								</div>
							</div>
							<div class="form-group-select">
								<lable class="col-sm-3 col-lg-2 control-label">Status</lable>
									<div class="col-sm-6 col-lg-4 controls">
										<select class="form-control" aria-label="Default select example" value="{{old('status')}}" name="status">
									
										<option value="1" {{$projects->status == '1' ? 'selected': ''}}>Active</option>
										<option value="0" {{$projects->status == '0' ? 'selected': ''}}>Inactive</option>
										</select>
									</div>
							</div>
							<hr>
							<div class="form-group-select">
								<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
									<input type="submit"  value="Submit" class="btn btn-primary" /> 
								</div>
							</div>
						</div>
					</form>
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
