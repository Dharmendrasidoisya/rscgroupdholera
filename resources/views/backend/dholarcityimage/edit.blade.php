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
			<h3 class="card-title">Update Dholar City Image</h3>
		</div>							
		<div class="row">
			<div class="col-md-12">
				<div class="box">
					<form method="post" action="{{route('admin.dholarcityupdate',$dholarcity->id)}}" enctype='multipart/form-data'>
					@csrf
						
							<div class="form-group-select">
								<label class="col-sm-3 col-lg-2 control-label" for="username">Image<span style="color: #a94442;">*</span></label>
								<div class="col-sm-6 col-lg-4 controls">
                                <img  id="pic" src="{{asset('uploads/dholara/'.$dholarcity->image)}}" width="150px" height="150px">
									<input name="image" type="file" class="form-control" data-rule-required="true" oninput="pic.src=window.URL.createObjectURL(this.files[0])" value="{{$dholarcity->image}}"/>
									<label><strong style="color:red">image size 400*400</strong></label>
									<span class="text-danger">
										@error("image")
										{{$message}}
										@enderror
									</span>
								</div>
							</div>
							<div class="form-group-select">
								<lable class="col-sm-3 col-lg-2 control-label">Status</lable>
									<div class="col-sm-6 col-lg-4 controls">
										<select class="form-control" aria-label="Default select example" value="{{old('status')}}" name="status">
									
										<option value="1" {{$dholarcity->status == '1' ? 'selected': ''}}>Active</option>
										<option value="0" {{$dholarcity->status == '0' ? 'selected': ''}}>Inactive</option>
										</select>
									</div>
							</div>
							<hr>
							<div class="form-group-select">
								<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
									<input type="submit"  value="Update" class="btn btn-primary" /> 
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
