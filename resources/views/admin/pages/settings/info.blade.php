@section('title')
Thiết Lập Thông Tin Chung Cho Wesite
@stop
@extends('admin.general.master')
@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12">
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <h4 class="card-title">Cập Nhật Thông Tin Chung Website</h4>
                    </div>
                </div>
            </div>
            <div class="content-header-right col-md-6 col-12">
                <div class="dropdown float-md-right">
                    <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('getIndexAdmin')}}">{{__('general.home')}}</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#"> Cài Đặt Hệ Thống</a>
                            </li>
                            <li class="breadcrumb-item active">Cập Nhật Thông Tin Chung Website
                            </li>
                        </ol>
                </div>
            </div>
        </div>

        <div class="content-detached">
            <div class="content-body">
            	<section class="row">

                    <div class="col-sm-12">
                        <!-- Kick start -->
                        <div id="kick-start" class="card">
                            <div class="card-content collapse show">
                            	<div class="card-body">
								    <form method="POST" action="{{route('postWebInfo',['key'=>'web-info'])}}" class="form-horizontal form-label-left">
								    	@csrf
								    	<div class="row justify-content-md-center">
			                                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
			                                    <div class="form-group">
			                                        <h5>Tên Website
			                                        </h5>
			                                        <div class="controls">
			                                            <input name="txtSiteName" value="@if($info){{$info->site_name}}@endif" type="text"  class="form-control" placeholder="Tên Website">
			                                        </div>
			                                    </div>
			                                    <div class="form-group">
			                                        <h5>Số Điện Thoại
			                                        </h5>
			                                        <div class="controls table-responsive">
			                                            <table class="table table-bordered mb-0">
									                      	<thead>
									                        	<tr>
								                          			<th class="text-center" style="width: 30%">Tiêu Đề</th>
								                          			<th class="text-center" style="width: 30%">Số Điện Thoại</th>
										                          	<th class="text-center" style="width: 5%">
										                          		<a onclick="addPhoneNumber();" href="javascript:;" class="btn mr-1 mb-1 btn-primary btn-sm"><i class="la la-plus-square"></i></a>
										                          	</th>
									                        	</tr>
									                      	</thead>
									                      	<tbody id="contentPhone">
									                      		@if($info)
									                      		@php $i=0 @endphp
						                                        @foreach (unserialize($info->phone) as $value)
								                        		<tr id="rowPhone{{$i}}">
																    <td class="center"> <input value="{{$value['title']}}" name="txtTitlePhone[]" value="" type="text" class="form-control" placeholder="Tiêu Đề"></td>
																    <td class="center"> <input value="{{$value['phone']}}" name="txtPhone[]" value="" type="number" class="form-control" placeholder="Số Điện Thoại"></td>
																    <td class="center"><a href="javascript:void(0)" onclick="$('#rowPhone{{$i}}').remove();" class="btn mr-1 mb-1 btn-danger btn-sm"><i class="la la-trash"></i></a></td>
																</tr>
																@php $i++ @endphp
						                                        @endforeach
						                                        @endif
									                      </tbody>
									                    </table>
			                                        </div>
			                                    </div>
			                                    <div class="form-group">
			                                        <h5>Địa Chỉ Email
			                                        </h5>
			                                        <div class="controls table-responsive">
			                                            <table class="table table-bordered mb-0">
									                      	<thead>
									                        	<tr>
								                          			<th class="center" style="width: 30%">Tiêu Đề</th>
								                          			<th class="center" style="width: 30%">Email</th>
										                          	<th class="center" style="width: 5%">
										                          		<div class="heading-elements">
										                          			<a onclick="addEmail();" href="javascript:;" class="btn mr-1 mb-1 btn-primary btn-sm"><i class="la la-plus-square"></i></a>
										                          		</div>
									                          		</th>
									                        	</tr>
									                      	</thead>
									                      	<tbody id="contentMail">
									                      		@if($info)
									                      		@php $i=0 @endphp
						                                        @foreach (unserialize($info->email) as $value)
						                                        <tr id="rowMail{{$i}}">
																	<td class="center"> <input value="{{$value['title']}}" name="txtTitleMail[]" value="" type="text" class="form-control" placeholder="Tiêu Đề"></td>
																	<td class="center"> <input value="{{$value['email']}}" name="txtMail[]" value="" type="email" class="form-control" placeholder="Email"></td>
																	<td class="center"><a href="javascript:void(0)" onclick="$('#rowMail{{$i}}').remove();" class="btn mr-1 mb-1 btn-danger btn-sm"><i class="la la-trash"></i></a></td>
																</tr>
																@php $i++ @endphp
						                                        @endforeach
						                                        @endif
									                      </tbody>
									                    </table>
			                                        </div>
			                                    </div>
			                                    <div class="form-group">
			                                        <h5>Địa Chỉ
			                                        </h5>
			                                        <div class="controls table-responsive">
			                                            <table class="table table-bordered mb-0">
									                      	<thead>
									                        	<tr>
								                          			<th class="center" style="width: 30%">Tiêu Đề</th>
								                          			<th class="center" style="width: 30%">Địa Chỉ</th>
										                          	<th class="center" style="width: 5%"><a onclick="addAddress();" href="javascript:;" class="btn mr-1 mb-1 btn-primary btn-sm"><i class="la la-plus-square"></i></a></th>
									                        	</tr>
									                      	</thead>
									                      	<tbody id="contentAddress">
									                      		@if($info)
								                        		@php $i=0 @endphp
						                                        @foreach (unserialize($info->address) as $value)
						                                        <tr id="rowAddress{{$i}}">
																	<td class="center"> <input value="{{$value['title']}}" name="txtTitleAddress[]" value="" type="text" class="form-control" placeholder="Tiêu Đề"></td>
																	<td class="center"> <input value="{{$value['address']}}" name="txtAddress[]" value="" type="text" class="form-control" placeholder="Địa Chỉ"></td>
																	<td class="center"><a href="javascript:void(0)" onclick="$('#rowAddress{{$i}}').remove();" class="btn mr-1 mb-1 btn-danger btn-sm"><i class="la la-trash"></i></a></td>
																</tr>
																@php $i++ @endphp
						                                        @endforeach
						                                        @endif
									                      </tbody>
									                    </table>
			                                        </div>
			                                    </div>
			                                    <div class="form-group">
			                                        <h5>Link Fanpage
			                                        </h5>
			                                        <div class="controls">
			                                            <input name="txtFanPage" value="@if($info){{$info->fanpage}}@endif" type="text" class="form-control">
			                                        </div>
			                                    </div>
			                                    <div class="form-group">
			                                        <h5>Link Twitter
			                                        </h5>
			                                        <div class="controls">
			                                            <input name="txtTwitter" value="@if($info){{$info->twitter}}@endif" type="text" class="form-control">
			                                        </div>
			                                    </div>
			                                    <div class="form-group">
			                                        <h5>Link Google Plus
			                                        </h5>
			                                        <div class="controls">
			                                            <input name="txtGooglePlus" value="@if($info){{$info->google_plus}}@endif" type="text" class="form-control">
			                                        </div>
			                                    </div>
			                                    <div class="form-group">
			                                        <h5>Link Youtube Channel
			                                        </h5>
			                                        <div class="controls">
			                                            <input name="txtYoutubeChannel" value="@if($info){{$info->youtube_channel}}@endif" type="text" class="form-control">
			                                        </div>
			                                    </div>
			                                    <div class="form-group">
			                                        <h5>Link Instagram
			                                        </h5>
			                                        <div class="controls">
			                                            <input name="txtInstagram" value="@if($info){{$info->instagram}}@endif" type="text" class="form-control">
			                                        </div>
			                                    </div>
			                                </div>
			                            </div>
			                            <div class="form-actions right">
			                              	<button onclick="location.href='{{route('getIndexAdmin')}}'" type="button" class="btn btn-danger mr-1">
			                                	<i class="ft-x"></i> {{__('general.cancel')}}
			                              	</button>
				                            <button type="submit" class="btn btn-success">
			                              		<i class="la la-check-square-o"></i> {{__('general.saveChange')}}
			                            	</button>
				                          </div>
								    </form>
								</div>
							</div>
						</div>
					</div>
				</section>
        	</div>
		</div>
	</div>
</div>
<?php
	if(isset($phoneData))
	{
		$phoneData = unserialize($info->phone);
	}
	if(isset($emailData))
	{
		$emailData = unserialize($info->email);
	}
	
	if(isset($addressData))
	{
		$addressData = unserialize($info->address);
	}
	
?>
<script>

var row = <?php if(isset($phoneData)){echo count($phoneData);}else{echo '0';} ?>;
function addPhoneNumber(){
    html = '<tr id="rowPhone'+row+'">';
    html += '<td class="center"> <input name="txtTitlePhone[]" value="" type="text" class="form-control" placeholder="Tiêu Đề"></td>';
    html += '<td class="center"> <input name="txtPhone[]" value="" type="number" class="form-control" placeholder="Số Điện Thoại"></td>';
    html += '<td class="center"><a href="javascript:void(0)" onclick="$(\'#rowPhone'+row+'\').remove();" class="btn mr-1 mb-1 btn-danger btn-sm"><i class="la la-trash"></i></a></td></tr>';
    $('#contentPhone').append(html);
    row++;
}
</script>
<script>
function addEmail(){
	var row = <?php if(isset($emailData)){echo count($phoneData);}else{echo '0';} ?>;
    html = '<tr id="rowMail'+row+'">';
    html += '<td class="center"> <input name="txtTitleMail[]" value="" type="text" class="form-control" placeholder="Tiêu Đề"></td>';
    html += '<td class="center"> <input name="txtMail[]" value="" type="email" class="form-control" placeholder="Email"></td>';
    html += '<td class="center"><a href="javascript:void(0)" onclick="$(\'#rowMail'+row+'\').remove();" class="btn mr-1 mb-1 btn-danger btn-sm"><i class="la la-trash"></i></a></td></tr>';
    $('#contentMail').append(html);
    row++;
}
</script>
<script>
function addAddress(){
	var row = <?php if(isset($addressData)){echo count($phoneData);}else{echo '0';} ?>;
    html = '<tr id="rowAddress'+row+'">';
    html += '<td class="center"> <input name="txtTitleAddress[]" value="" type="text" class="form-control" placeholder="Tiêu Đề"></td>';
    html += '<td class="center"> <input name="txtAddress[]" value="" type="text" class="form-control" placeholder="Địa Chỉ"></td>';
    html += '<td class="center"><a href="javascript:void(0)" onclick="$(\'#rowAddress'+row+'\').remove();" class="btn mr-1 mb-1 btn-danger btn-sm"><i class="la la-trash"></i></a></td></tr>';
    $('#contentAddress').append(html);
    row++;
}
</script>
@stop