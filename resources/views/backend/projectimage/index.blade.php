@extends('backend.layout.master')
@section('contant')
<!--begin::Wrapper-->
<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">

	<!--begin::Container-->
	<div class="container">
		<div class="row rowcomindex" >
			<div class="col-lg-12">
				<!--begin::Card-->
				<form method="POST" action="" id="MyForm">
					@csrf
					<div class="card card-custom gutter-b example example-compact">
						<div class="card-header">
						<h3 class="card-title">projects Images List</h3>
						<a class="btn btn-primary addbtn" href="{{route('admin.project.create')}}" style="margin-bottom: 20px !important"><i class="fa fa-plus" aria-hidden="true"></i>Add</a>
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
												<button type="button" class="dropdown-item btn btn-success" onclick="submitFrom('{{route('admin.project.status')}}','1')" >Active</button>
												<button type="button" class="dropdown-item btn btn-danger" onclick="submitFrom('{{route('admin.project.status')}}','0')" >InActive</button>
											</div>
										</div>
										
										<table class="table table-advance" id="table1">
											<thead>
												<tr>
												<th><input type="checkbox" id="checkAll"/></th>
													<th></th>
													<th>Title</th>
													<th>Projects Image</th>
													<th>Status</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												@php 
												($i = 1)
												@endphp
												@foreach ($projects as  $project)
													<tr>
													<td><input type="checkbox" class="check-item" value="{{$project->id}}" name="checkbox[]"/></td>

														<td>{{ $i++}}</td>
														<td>{{ $project->title}}</td>
														<td><img src="{{asset('uploads/projectimage/'.$project->gallery_image)}}" width="100px" height="100px"></td>
														<td> @if($project->status == '1') 
															<a class="btn" style="background-color:#46ff36d9;  color:#fff;">Active</a>
														@else
															<a class="btn btn-danger">Inactive</a>
														@endif</td>
														<td>
															
														<a class="btn btn-success" href="{{route('admin.project.edit', $project->id)}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
														<a class="btn btn-success" href="{{route('admin.project.view', $project->id)}}"><i class="fa fa-eye" aria-hidden="true"></i></a>
														<a class="btn btn-danger" href="{{route('admin.project.destroy', $project->id)}}" ><i class="fa fa-trash" aria-hidden="true"></i></a>
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
