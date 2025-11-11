
@extends('backend.layout.master')
@section('contant')
<!--begin::Wrapper-->
<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">

	<!--begin::Container-->
	<div class="container">
		<div class="row" style="margin-top:10px;">
			<div class="col-lg-12">
				<!--begin::Card-->
				<div class="card card-custom gutter-b example example-compact">
					<div class="card-header">
			<h3 class="card-title">Inquiry Form View</h3>
            <a class="btn btn-primary addbtn" href="{{route('admin.contactshow')}}" style="margin-bottom: 20px !important"><i class="fa fa-list" aria-hidden="true"></i>Back List</a>
		</div>
		<!--begin::Form-->							
		<div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-content">
                        <div class="form-group-select">
                            <label class="col-sm-3 col-lg-2 control-label" >Product Name/Company Name</label>
                            <div class="col-sm-6 col-lg-4 controls">
                                <input name="pname" type="text" value="{{$contact->pname}}" class="form-control" value="{{$contact->pname}}" placeholder="pname" readonly>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="box-content">
                        <div class="form-group-select">
                            <label class="col-sm-3 col-lg-2 control-label" >Name</label>
                            <div class="col-sm-6 col-lg-4 controls">
                                <input name="name" type="text" value="{{$contact->name}}" class="form-control" value="{{$contact->name}}" placeholder="Name" readonly>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="box-content">
                        <div class="form-group-select">
                            <label class="col-sm-3 col-lg-2 control-label" >Email</label>
                            <div class="col-sm-6 col-lg-4 controls">
                                <input name="name" type="text" value="{{$contact->email}}" class="form-control" value="{{$contact->email}}" placeholder="Name" readonly>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="box-content">
                        <div class="form-group-select">
                            <label class="col-sm-3 col-lg-2 control-label" >Phone</label>
                            <div class="col-sm-6 col-lg-4 controls">
                                <input name="name" type="text" value="{{$contact->phone}}" class="form-control" placeholder="Name" readonly>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="box-content">
                        <div class="form-group-select">
                            <label class="col-sm-3 col-lg-2 control-label" >Location</label>
                            <div class="col-sm-6 col-lg-4 controls">
                                <input name="subject" type="text" value="{{$contact->subject}}" class="form-control"  placeholder="Location" readonly>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="box-content">
                        <div class="form-group-select">
                            <label class="col-sm-3 col-lg-2 control-label" >Message</label>
                            <div class="col-sm-6 col-lg-4 controls">
                                <textarea name="name" type="text" class="form-control"  placeholder="Name" readonly>{{$contact->message}}</textarea>
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

