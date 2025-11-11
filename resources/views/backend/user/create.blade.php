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
			<h3 class="card-title"> Master User Store</h3>
		</div>
		<!--begin::Form-->
			<div class="row">
				<div class="col-md-12">
					<div class="box">
						<form method="post" action="{{route('admin.userstore')}}">
							@csrf
							<div class="box-content">
							<div class="form-group-select">
									<lable class="col-sm-3 col-lg-2 control-label">Select Member</lable>
									<div class="col-sm-6 col-lg-4 controls">
										<select class="form-control" aria-label="Default select example"  name="user_id">
											
											@foreach ($admins as $admin)
											<option value="" selected>--Select Member--</option>
											<option value="{{$admin->id}}" >{{$admin->name}}</option>
											@endforeach
										</select>
										<span class="text-danger">
											@error("user_id")
											{{$message}}
											@enderror
										</span>
									</div>
								</div>
							<div class="form-group-select">
								<lable class="col-sm-3 col-lg-2 control-label">User Type</lable>
								<div class="col-sm-6 col-lg-4 controls">
									<select class="form-control" aria-label="Default select example" name="user_type">
										<option value="" >--Select User Type--</option>
										<option value="Superadmin" >Superadmin</option>
										<option value="Admin" >Admin</option>
										<option value="User"> User</option>
									</select>
									<span class="text-danger">
										@error("user_type")
										{{$message}}
										@enderror
									</span>
								</div>
							</div>
							<div class="form-group-select" style="display:none;">
									<lable class="col-sm-3 col-lg-2 control-label">Choose Depatment</lable>
									<div class="col-sm-6 col-lg-4 controls">
										<select class="form-control" aria-label="Default select example" value="{{old('status')}}" name="status">
											<option value="1" selected>--Select Choose Depatment--</option>
											
										</select>
									</div>
								</div>
								<div class="form-group-select">
									<label class="col-sm-3 col-lg-2 control-label" for="f_name">First Name<span style="color: #a94442;">*</span></label>
									<div class="col-sm-6 col-lg-4 controls">
										<input name="f_name" type="text"class="form-control" data-rule-required="true" data-rule-minlength="3" value="{{old('f_name')}}" placeholder="Fist Name"/>
										<span class="text-danger">
											@error("f_name")
											{{$message}}
											@enderror
										</span>

									</div>
								</div>
								<div class="form-group-select">
									<label class="col-sm-3 col-lg-2 control-label" for="l_name">Last Name<span style="color: #a94442;">*</span></label>
									<div class="col-sm-6 col-lg-4 controls">
										<input name="l_name" type="text"class="form-control" data-rule-required="true" data-rule-minlength="3" value="{{old('l_name')}}" placeholder="Last Name"/>
										<span class="text-danger">
											@error("l_name")
											{{$message}}
											@enderror
										</span>
									</div>
								</div>
								<div class="form-group-select" style="display:none;">
									<label class="col-sm-3 col-lg-2 control-label" for="user_name">User Name<span style="color: #a94442;">*</span></label>
									<div class="col-sm-6 col-lg-4 controls">
										<input name="user_name" type="text"class="form-control" data-rule-required="true" data-rule-minlength="3" value="{{old('user_name')}}" placeholder="User Name" />
										<span class="text-danger">
											@error("user_name")
											{{$message}}
											@enderror
										</span>
									</div>
								</div>
								<div class="form-group-select">
									<label class="col-sm-3 col-lg-2 control-label" for="email">Email<span style="color: #a94442;">*</span></label>
									<div class="col-sm-6 col-lg-4 controls">
										<input name="email" type="email"class="form-control" data-rule-required="true" data-rule-minlength="3" value="{{old('email')}}" placeholder="Email"/>
										<span class="text-danger">
											@error("email")
											{{$message}}
											@enderror
										</span>
									</div>
								</div>
								</div>
								<div class="form-group-select">
									<label class="col-sm-3 col-lg-2 control-label" for="password">Password<span style="color: #a94442;">*</span></label>
									<div class="col-sm-6 col-lg-4 controls">
										<input name="password" type="password"class="form-control" data-rule-required="true" data-rule-minlength="3"  placeholder="Password"/>
										<span class="text-danger">
											@error("password")
											{{$message}}
											@enderror
										</span>
									</div>
								</div>
								<div class="form-group-select">
									<label class="col-sm-3 col-lg-2 control-label" for="assign_user">Assign User Rights<span style="color: #a94442;">*</span></label>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="Add" id="flexCheckDefault" name="assign_user[]">
										<label class="form-check-label" for="flexCheckDefault">
											Add
										</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="Edit" id="flexCheckDefault" name="assign_user[]">
										<label class="form-check-label" for="flexCheckDefault">
											Edit
										</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="View" id="flexCheckDefault" name="assign_user[]">
										<label class="form-check-label" for="flexCheckDefault">
											View
										</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="Assign" id="flexCheckDefault" name="assign_user[]">
										<label class="form-check-label" for="flexCheckDefault">
											Assign
										</label>
									</div>
								</div>
								<div class="form-group-select">
									<lable class="col-sm-3 col-lg-2 control-label">Status</lable>
									<div class="col-sm-6 col-lg-4 controls">
										<select class="form-control" aria-label="Default select example" value="{{old('status')}}" name="status">
											<option value="1" selected>Active</option>
											<option value="0">Inactive</option>
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
