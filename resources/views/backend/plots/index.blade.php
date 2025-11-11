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
						<h3 class="card-title">Plots List</h3>
						<a class="btn btn-primary addbtn" href="{{route('admin.menucreate')}}" style="margin-bottom: 20px !important"><i class="fa fa-plus" aria-hidden="true"></i>Add</a>
					</div>
				<!--begin::Form-->
				<form method="POST" action="" id="MyForm">
					@csrf
					<div class="row">
						<div class="col-md-12">
							<div class="box">
								<div class="box-content">
									<div class="clearfix"></div>
									<div class="table-responsive" style="border: 0">
										<div class="btn-group">
											<button type="button" class="btn btn-default dropdown-toggle btn btn-success" disabled data-toggle="dropdown" aria-haspopup="true" style="margin-bottom: 20px !important">Active</button>
											<div class="dropdown-menu" style="">
												<button type="button" class="dropdown-item btn btn-success" onclick="submitFrom('{{route('admin.menustatus')}}','1')" >Active</button>
												<button type="button" class="dropdown-item btn btn-danger" onclick="submitFrom('{{route('admin.menustatus')}}','0')" >InActive</button>
											</div>
										</div>
										
										<table class="table table-advance" id="table1">
											<thead>
												<tr>
												<th><input type="checkbox" id="checkAll"/></th>
													<th>SI.ID</th>
													<th>Menu Name</th>
													<th>Status</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												@foreach ( $plots as  $plot)
													<tr>
													<td><input type="checkbox" class="check-item" value="{{$menu->id}}" name="checkbox[]"/></td>
														<td>{{$plot->id}}</td>
														<td>{{$plot->name}}</td>
														
															
														<a class="btn btn-success" href="{{route('admin.menuedit',$plot->id)}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
														<a class="btn btn-success" href="{{route('admin.menuview',$plot->id)}}"><i class="fa fa-eye" aria-hidden="true"></i></a>
														<a class="btn btn-danger" href="{{route('admin.menudestroy',$plot->id)}}" ><i class="fa fa-trash" aria-hidden="true"></i></a>
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
				</form>
				<!--end::Form-->
				</div>
				<!--end::Card-->
			</div>
		</div>
	</div>
	<!--end::Container-->
</div>
<!--end::Wrapper-->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>	
<script>
	
		$(document).on('click','#checkAll',function(){
			if(this.checked) {
				$('.check-item').each(function(){
					this.checked = true;
				})
			}else{
				$('.check-item').each(function(){
					this.checked = false;
				})
			}

			buttonisabled()

		})


		$(document).on('click','.check-item',function(){
		if($('.check-item').length === $('.check-item:checked').length){
			$('#checkAll').prop('checked',true);
		}else{
			$('#checkAll').prop('checked',false);
		}

		buttonisabled()
	})

	function buttonisabled(){
		if($('.check-item:checked').length>0){
			$('.dropdown-toggle').removeAttr('disabled')
		}else{
			$('.dropdown-toggle').attr('disabled',true)
		}
	}

	function submitFrom(url, status){
		// console.log(status)
		$.ajax({
			url:url,
			type:'post',
			data:$('#MyForm').serialize() + '&status='+ status,
			success:function (data) {
				if(data.success){
					toastr.success(data.success);
					let page = $('li.page-item.active.page-link').html();
					getData(page);
				}
			}
		})
	}

</script>
@endsection
