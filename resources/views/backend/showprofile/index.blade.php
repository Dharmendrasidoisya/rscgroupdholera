@extends('backend.layout.master')
@section('contant')
<!--begin::Wrapper-->
<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">

	<!--begin::Container-->
	<div class="container">
		<div class="row">
				<div class="col-lg-8">
					<!--begin::Card-->
					<div class="card card-custom gutter-b example example-compact">
						<div class="card-header">
			<h3 class="card-title text-center"> Profile show</h3>
		</div>
		<!--begin::Form-->
			<div class="row">
				<div class="col-md-12">
					<div class="box">
							<div class="box-content">
								<div class="form-group-select">
									<label class="col-sm-6 col-lg-6 control-label" for="brand_name">Image</label>
									<div class="col-sm-6 col-lg-6 controls">
									<img src="{{asset('backend/profile.jpg')}}" style="width: 100px;">
									</div>
								</div>
								<div class="form-group-select">
									<label class="col-sm-6 col-lg-6 control-label" for="brand_name">User Name</label>
									<div class="col-sm-6 col-lg-6 controls">
									{{$profile->name}}
									</div>
								</div>
								<div class="form-group-select">
									<label class="col-sm-6 col-lg-6 control-label" for="brand_name">Email</label>
									<div class="col-sm-6 col-lg-6 controls">
									{{$profile->email}}
									</div>
								</div>
								<div class="form-group-select">
								<label class="col-sm-6 col-lg-6 control-label" for="brand_name"></label>
								<div class="col-sm-6 col-lg-6 controls">
								<a class="btn btn-primary">Changes password</a>
								</div>
								</div>
							</div>
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
