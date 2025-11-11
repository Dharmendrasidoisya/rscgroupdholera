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
						<div class="card-header">
						<h3 class="card-title">News List</h3>
						<a class="btn btn-primary addbtn" href="{{route('admin.newscreate')}}" style="margin-bottom: 20px !important"><i class="fa fa-plus" aria-hidden="true"></i>Add</a>
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
												<button type="button" class="dropdown-item btn btn-success" onclick="submitFrom('{{route('admin.newsstatus')}}','1')" >Active</button>
												<button type="button" class="dropdown-item btn btn-danger" onclick="submitFrom('{{route('admin.newsstatus')}}','0')" >InActive</button>
											</div>
										</div>
										
										<table class="table table-advance" id="table1">
											<thead>
												<tr>
												<th><input type="checkbox" id="checkAll"/></th>
													<th></th>
													<th>News</th>
													<th>Image</th>
													<th>Status</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												@foreach ( $news as  $new)
													<tr>
													<td><input type="checkbox" class="check-item" value="{{$new->id}}" name="checkbox[]"/></td>
														<td>{{$new->id}}</td>
														<td>{{$new->title}}</td>
														<td><img src="{{asset('uploads/news/'.$new->image)}}" width="60px" height="60px"></td>
														<td> @if($new->status == '1') 
															<a class="btn " style="background-color:#46ff36d9;  color:#fff;">Active</a>
														@else
															<a class="btn btn-danger">Inactive</a>
														@endif</td>
														<td class="backtd">
															
														<a class="btn btn-success" href="{{route('admin.newsedit',$new->id)}}"><i class="fa fa-pencil-square-o " aria-hidden="true"></i></a>
														<a  class="btn btn-info" href="{{route('admin.newsshow',$new->id)}}"><i class="fa fa-eye " aria-hidden="true"></i></a>
														<a  class="btn btn-danger" href="{{route('admin.newsdestroy',$new->id)}}" ><i class="fa fa-trash" aria-hidden="true"></i></a>
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
