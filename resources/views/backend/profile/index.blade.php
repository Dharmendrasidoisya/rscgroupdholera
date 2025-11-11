@extends('backend.layout.master')
@section('contant')
<!--begin::Wrapper-->
<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">			
	<!--begin::Card-->
	<div class="card card-custom gutter-b example example-compact">
		<div class="card-header">
			<h3 class="card-title">Profile List</h3>
		</div>
		<!--begin::Form-->
		<div class="row">
			<div class="col-md-12">
				<div class="box">
					<div class="box-content">
						<div class="clearfix"></div>
						<div class="table-responsive" style="border: 0">
							<table class="table table-advance" id="table1">
								<thead>
									<tr>
										<th>SI.ID</th>
										<th>First Name</th>
										<th>Last Name</th>
										<th>Profile Image</th>
										<th>Status</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach (  $profiles as   $profile)
										<tr>
											<td>{{ $profile->id}}</td>
											<td>{{ $profile->fname}}</td>
											<td>{{ $profile->lname}}</td>
											<td><img src="{{asset('uploads/image/'.$profile->profile)}}" width="150px" height="150px"></td>
											<td> @if( $profile->status == '1') 
													Active
												@else
													Inactive 
												@endif</td>
											<td>
												
											<a class="btn btn-success" href="{{route('admin.profileedit', $profile->id)}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</a>
											<a class="btn btn-success" href="{{route('admin.profileview', $profile->id)}}"><i class="fa fa-eye" aria-hidden="true"></i></a>
											<a class="btn btn-danger" href="{{route('admin.profiledestroy', $profile->id)}}" ><i class="fa fa-trash" aria-hidden="true"></i></a>
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
	<!--end::Card-->
</div>
<!--end::Wrapper-->
			
@endsection
