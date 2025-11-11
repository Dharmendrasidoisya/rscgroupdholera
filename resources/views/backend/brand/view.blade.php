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
			<h3 class="card-title"> View Video</h3>
		</div>
		<!--begin::Form-->
			<div class="row">
				<div class="col-md-12">
					<div class="box">
							<div class="box-content">
								<div class="form-group-select">
									<label class="col-sm-3 col-lg-2 control-label" for="brand_name">Video</label>
									<div class="col-sm-6 col-lg-4 controls">
									{!! html_entity_decode($brand->brand_name) !!}
									</div>
								</div>
								<div class="form-group-select">
									<label class="col-sm-3 col-lg-2 control-label">Active</label>
									<div class="col-sm-9 col-lg-4 controls">
										<span class="switch switch-sm">
											<label>
												<input type="checkbox" name="status" checked data-toggle="toggle" data-on="1" data-off="0" value="1">
												<span></span>
											</label>
										</span>
									</div>
								</div>
								<hr>
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
