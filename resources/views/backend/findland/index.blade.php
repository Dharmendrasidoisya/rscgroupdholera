
@extends('backend.layout.master')
@section('contant')
<!--begin::Wrapper-->
<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">

	<!--begin::Container-->
	<div class="container">
		<div class="row bconta">
				<div class="col-lg-12">
					<!--begin::Card-->
					<form method="POST" action="" id="MyForm">
						@csrf
					<div class="card card-custom gutter-b example example-compact">
						<div class="card-header">
						<h3 class="card-title">Inquiry Find Land List</h3>
						
					</div>
				<!--begin::Form-->
					<div class="row">
						<div class="col-md-12">
							<div class="box">
								<div class="box-content">
									<div class="clearfix"></div>
									<div class="table-responsive" style="border: 0;">
										<br>
										<br>
										<br></br>
										<table class="table table-advance" id="table1">
											<thead>
												<tr>
													<th>#Sr No</th>
													<th> Name</th>
													<th>Phone Number</th>
													<th>Budget</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
											@foreach ( $finds as  $find)
													<tr>
														<td>{{$find->id}}</td>
														<td>{{$find->name}}</td>
														<td>+91 {{$find->phone}}</td>
														<td>{{$find->budget}}</td>
														
														<td>
														<a class="btn btn-info" href="{{route('admin.findlandshow',$find->id)}}"><i class="fa fa-eye" aria-hidden="true"></i></a>
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


