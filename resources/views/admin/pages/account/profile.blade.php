@section('title')
Trang cá nhân
@stop
@extends('admin.general.master')
@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12">
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <h4 class="card-title">Trang cá nhân</h4>
                    </div>
                </div>
            </div>
            <div class="content-header-right col-md-6 col-12">
                <div class="dropdown float-md-right">
                    <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('getIndexAdmin')}}">{{__('general.home')}}</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Người Dùng</a>
                            </li>
                            <li class="breadcrumb-item active">Trang cá nhân
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
                        <div class="card">
		                  	<div class="card-header">
		                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
		                        <div class="heading-elements">
		                            <a href="javascript:;" class="btn btn-success round btn-glow" data-toggle="modal"
                          data-target="#success">{{__('general.addNew')}}</a>
		                        </div>
		                    </div>
                            <div class="card-content collapse show">
                            	<div class="card-body">
								    
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