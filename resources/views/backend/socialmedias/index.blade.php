@extends('backend.layout.master')
@section('contant')
<!--begin::Wrapper-->
<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">

	<!--begin::Container-->
	<div class="container">
		<div class="row">
				<div class="col-lg-12">
					<!--begin::Card-->
					<form method="POST" action="" id="MyForm">
						@csrf
					<div class="card card-custom gutter-b example example-compact">
						<div class="card-header" >
							<h3 class="card-title">Social Medias List</h3>
							@if( $socals->isNotEmpty())
							@else
								<a class="btn btn-primary addbtn" href="{{route('admin.socialcreate')}}" style="margin-bottom: 20px !important"><i class="fa fa-plus" aria-hidden="true" ></i>Add</a>
							@endif
					</div>
				<!--begin::Form-->
					<div class="row">
						<div class="col-md-12">
							<div class="box">
								<div class="box-content">
									<div class="clearfix"></div>
									<div class="table-responsive" style="border: 0">
									<div class="btn-group">
											<button type="button" class="btn btn-default dropdown-toggle btn btn-success" disabled data-toggle="dropdown" aria-haspopup="true" style="margin-bottom: 20px !important">Active</button>
											<div class="dropdown-menu" style="">
												<button type="button" class="dropdown-item btn btn-success" onclick="submitFrom('{{route('admin.socialstatus')}}','1')" >Active</button>
												<button type="button" class="dropdown-item btn btn-danger" onclick="submitFrom('{{route('admin.socialstatus')}}','0')" >InActive</button>
											</div>
										</div>
										
										<table class="table table-advance" id="table1">
											<thead>
												<tr>
												<th><input type="checkbox" id="checkAll"/></th>
													<th></th>
													<th>Link</th>
													<th>Status</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												@foreach ( $socals as  $socal)
													<tr>
													<td><input type="checkbox" class="check-item" value="{{$socal->id}}" name="checkbox[]"/></td>
														<td>{{$socal->id}}</td>
														<td>{{$socal->facebook}}</td>
														<td> @if($socal->status == '1') 
															<a class="btn" style="background-color:#46ff36d9;  color:#fff;">Active</a>
														@else
															<a class="btn btn-danger">Inactive</a>
														@endif</td>
														<td class="backtd">
															
														<a class="btn btn-success" href="{{route('admin.socialedit',$socal->id)}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
														<a class="btn btn-info" href="{{route('admin.socialview',$socal->id)}}"><i class="fa fa-eye" aria-hidden="true"></i></a>
														<a class="btn btn-danger" href="{{route('admin.socialdestroy',$socal->id)}}" ><i class="fa fa-trash" aria-hidden="true"></i></a>
													</td>
													</tr>
												@endforeach
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				<!--end::Form-->
				</div>
					</form>
				<!--end::Card-->
			</div>
		</div>
	</div>
	<!--end::Container-->
</div>
<!--end::Wrapper-->
@endsection