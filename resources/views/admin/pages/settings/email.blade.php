@section('title')
Cấu Hình Tin Mail Gửi Đi
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
								    <form method="POST" action="{{route('postEmailConfig')}}" class="form-horizontal form-label-left">
								    	@csrf
								    	<div class="row justify-content-md-center">
			                                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
			                                    <div class="form-group">
			                                        <h5>Người Gửi
			                                        </h5>
			                                        <div class="controls">
			                                            <input name="txtsender" value="{{$emailSetting['sender']}}" type="text" class="form-control">
			                                        </div>
			                                    </div>
			                                    <div class="form-group">
			                                        <h5>Địa Chỉ Email
			                                        </h5>
			                                        <div class="controls">
			                                            <input name="txtemail" value="{{$emailSetting['email']}}" type="text" class="form-control">
			                                        </div>
			                                    </div>
			                                    <div class="form-group">
			                                        <h5>Mật Khẩu
			                                        </h5>
			                                        <div class="controls">
			                                            <input name="txtpassword" value="{{$emailSetting['password']}}" type="password" class="form-control">
			                                        </div>
			                                    </div>
			                                    <div class="form-group">
			                                        <h5>Driver
			                                        </h5>
			                                        <div class="controls">
			                                            <input name="txtdriver" value="{{$emailSetting['driver']}}" type="text" class="form-control">
			                                        </div>
			                                    </div>
			                                    <div class="form-group">
			                                        <h5>SMTP Host
			                                        </h5>
			                                        <div class="controls">
			                                            <input name="txthost" value="{{$emailSetting['host']}}" type="text" class="form-control">
			                                        </div>
			                                    </div>
			                                    <div class="form-group">
			                                        <h5>SMTP Port
			                                        </h5>
			                                        <div class="controls">
			                                            <input name="txtport" value="{{$emailSetting['port']}}" type="text" class="form-control">
			                                        </div>
			                                    </div>status
			                                    <div class="form-group">
			                                        <h5>Encrypt
			                                        </h5>
			                                        <div class="controls">
			                                            <div class="skin skin-flat">
			                                                <input type="radio" name="radioencrypt" id="radio1" value="normal"
															<?php  
																if ($emailSetting['encrypt']=='normal') {
																	echo "checked";
																}
															?>
							                                >
							                                <label for="radio1">
							                                    Normal
							                                </label>
			                                            </div>
			                                            <div class="skin skin-flat">
			                                                <input type="radio" name="radioencrypt" id="radio2" value="ssl"
							                                <?php  
																if ($emailSetting['encrypt']=='ssl') {
																	echo "checked";
																}
															?>
							                                >
							                                <label for="radio2">
							                                     SSL
							                                </label>
			                                            </div>
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
@stop