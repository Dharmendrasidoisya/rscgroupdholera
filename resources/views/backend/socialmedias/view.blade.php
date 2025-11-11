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
						<form method="post" action="{{route('admin.socialupdate',$socal->id)}}">
							@csrf
							<div class="box-content">
								<div class="form-group-select">
									<label class="col-sm-3 col-lg-2 control-label" for="facebook"> Facebook</label>
									<div class="col-sm-8 col-lg-8 controls">
										<input name="facebook" type="text" class="form-control" data-rule-required="true" data-rule-minlength="3" value="{{$socal->facebook}}" readonly/>
										
									</div>
								</div>
								<div class="form-group-select">
									<label class="col-sm-3 col-lg-2 control-label" for="twitter"> Twitter</label>
									<div class="col-sm-8 col-lg-8 controls">
										<input name="twitter" type="text" class="form-control" data-rule-required="true" data-rule-minlength="3" value="{{$socal->facebook}}" readonly/>
										
									</div>
								</div>
								<div class="form-group-select">
									<label class="col-sm-3 col-lg-2 control-label" for="youtube"> Youtube</label>
									<div class="col-sm-8 col-lg-8 controls">
										<input name="youtube" type="text" class="form-control" data-rule-required="true" data-rule-minlength="3" value="{{$socal->youtube}}" readonly/>
										
									</div>
								</div>
								<div class="form-group-select">
									<label class="col-sm-3 col-lg-2 control-label" for="linkedin"> Linkedin</label>
									<div class="col-sm-8 col-lg-8 controls">
										<input name="linkedin" type="text" class="form-control" data-rule-required="true" data-rule-minlength="3" value="{{$socal->linkedin}}" readonly/>
										
									</div>
								</div>
								<div class="form-group-select">
									<label class="col-sm-3 col-lg-2 control-label" for="instagram"> Instagram</label>
									<div class="col-sm-8 col-lg-8 controls">
										<input name="instagram" type="text" class="form-control" data-rule-required="true" data-rule-minlength="3" value="{{$socal->instagram}}" readonly/>
										
									</div>
								</div>
								<div class="form-group-select">
									<label class="col-sm-3 col-lg-2 control-label" for="pinterest"> Pinterest</label>
									<div class="col-sm-8 col-lg-8 controls">
										<input name="pinterest" type="text" class="form-control" data-rule-required="true" data-rule-minlength="3" value="{{$socal->pinterest}}" readonly/>
										
									</div>
								</div>
								<div class="form-group-select">
									<lable class="col-sm-3 col-lg-2 control-label">Status</lable>
									<div class="col-sm-6 col-lg-4 controls">
										<select class="form-control" aria-label="Default select example" value="{{$socal->status}}" name="status">
										<option value="1" {{$socal->status == '1' ? 'selected': ''}}>Active</option>
											<option value="0" {{$socal->status == '0' ? 'selected': ''}}>Inactive</option>
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
