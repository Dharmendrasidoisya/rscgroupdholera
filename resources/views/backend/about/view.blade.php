@extends('backend.layout.master')
@section('contant')
<!--begin::Wrapper-->
<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">

	<!--begin::Container-->
	<div class="container">
		<div class="row" style="margin-top: 40px;">
			<div class="col-lg-12">
				<!--begin::Card-->
				<div class="card card-custom gutter-b example example-compact">
					<div class="card-header">
			<h3 class="card-title">Only View About</h3>
		</div>
		<!--begin::Form-->
			<div class="row">
				<div class="col-md-12">
					<div class="box">
						<form method="post" action="{{route('admin.aboutupdate',$about->id)}}" enctype='multipart/form-data'>
							@csrf
							<div class="box-content">
							<div class="form-group-select">
									<label class="col-sm-3 col-lg-2 control-label" for="titel">Titel<span style="color: #a94442;">*</span></label>
									<div class="col-sm-6 col-lg-4 controls">
									{{$about->titel}}
									</div>
								</div>
								<div class="form-group-select">
									<label class="col-sm-3 col-lg-2 control-label" for="menu_name">Image upload<span style="color: #a94442;">*</span></label>
									<div class="col-sm-6 col-lg-4 controls">
                                    <img id="pic" src="{{asset('uploads/image/'.$about->about_image)}}" >
									</div>
								</div>
								<div class="form-group-select">
								<label class="col-sm-3 col-lg-2 control-label" for="shout_description">Short Description<span style="color: #a94442;">*</span></label>
								<div class="col-sm-6 col-lg-6 controls">
								{{$about->shout_description}}
								</div>
							</div>
								<div class="form-group-select">
									<label class="col-sm-3 col-lg-2 control-label" for="menu_name">About Description<span style="color: #a94442;">*</span></label>
									<div class="col-sm-3 col-lg-6 controls" >
									{{$about->about_description}}
										
									</div>
								</div>
								<div class="form-group-select">
									<label class="col-sm-3 col-lg-2 control-label" for="menu_name">Display<span style="color: #a94442;">*</span></label>
									<div class="col-sm-6 col-lg-6 controls">
										 <input type="radio" id="1" name="onhome" value="1" {{$about->onhome == '1' ? 'checked': ''}}>
										 <label for="1">About</label><br>
										 <input type="radio" id="0" name="onhome" value="0" {{$about->onhome == '0' ? 'checked': ''}}>
										 <label for="0">Homoe Page</label><br>
										<span class="text-danger">
											@error("onhome")
											{{$message}}
											@enderror
										</span>
									</div>
								</div>
								
								<div class="form-group-select">
									<lable class="col-sm-3 col-lg-2 control-label">Status</lable>
									<div class="col-sm-6 col-lg-4 controls">
										<select class="form-control" aria-label="Default select example"  name="status">
											<option value="1" {{$about->status == '1' ? 'selected': ''}}>Active</option>
											<option value="0" {{$about->status == '0' ? 'selected': ''}}>Inactive</option>
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