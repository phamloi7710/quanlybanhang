@section('title')
Cấu Hình Thông Tin SEO
@stop
@extends('admin.general.master')
@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12">
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <h4 class="card-title">Cấu Hình Thông Tin SEO</h4>
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
                            <li class="breadcrumb-item active">Cấu Hình Thông Tin SEO
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
								    <form method="POST" action="{{route('postMetaSEO')}}" class="form-horizontal form-label-left">
								    	@csrf
								    	<div class="row justify-content-md-center">
			                                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
			                                    <div class="form-group">
			                                        <h5>Tiêu Đề (Meta Title)
			                                        </h5>
			                                        <div class="controls">
			                                            <input name="txttitle" value="{{$meta['title']}}" type="text" class="form-control">
			                                        </div>
			                                    </div>
			                                    <div class="form-group">
			                                        <h5>Thẻ Từ Khoá (Meta Keyword)
			                                        </h5>
			                                        <div class="controls">
			                                            <input name="txtkeyword" value="{{$meta['keyword']}}" type="text" class="form-control">
			                                        </div>
			                                    </div>
			                                    <div class="form-group">
			                                        <h5>Thẻ Mô Tả (Meta Description)
			                                        </h5>
			                                        <div class="controls">
			                                            <input name="txtdescription" value="{{$meta['description']}}" type="text" class="form-control">
			                                        </div>
			                                    </div>
			                                    <div class="form-group">
			                                        <h5>Charset
			                                        </h5>
			                                        <div class="controls">
			                                            <input name="txtcharset" value="{{$meta['charset']}}" type="text" class="form-control">
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