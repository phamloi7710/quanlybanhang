@section('title')
Đổi mật khẩu cho tài khoản
@stop
@extends('admin.general.master')
@section('content') 
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12">
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <h4 class="card-title">Đổi mật khẩu</h4>
                    </div>
                </div>
            </div>
            <div class="content-header-right col-md-6 col-12">
                <div class="dropdown float-md-right">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('getIndexAdmin')}}">{{__('general.home')}}</a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{route('getListUsersAdmin')}}">Tài Khoản</a>
                        </li>
                        <li class="breadcrumb-item active">Đổi mật khẩu
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="sidebar-detached sidebar-left" ,=",">
            <div class="sidebar">
                <div class="bug-list-sidebar-content">
                    <div class="card">

                        <div class="card-body">
                            <h3 class="card-title text-center">Ảnh Đại Diện</h3>
                            <div class="card border-blue border-lighten-2">
                                <div class="text-center">

                                    <div class="card-body">
                                        @if($user->avatar != null)
                                        <img class="imagePreview" style="width: 100%; height: 100%;" id="previewImage" src="{{url('')}}/{{$user->avatar}}" alt="{{__('general.productImage')}}">
                                        @else
                                        <img class="imagePreview" style="width: 100%; height: 100%;" id="previewImage" src="{{url('')}}/assets/admin/images/no-image.jpg" alt="{{__('general.productImage')}}">
                                        @endif
                                    </div>
                                    <div class="text-center">
                                        <a href="javascript:;" class="btn btn-social-icon btn-outline-danger mr-1 mb-1 deleteImage" data-trigger="hover" data-toggle="tooltip" data-placement="bottom" data-popup="tooltip-custom" data-original-title="{{__('general.deleteImage')}}" data-bg-color="pink">
                                        <span class="la la-trash"></span>
                                        </a>
                                        <a data-input="image" data-preview="previewImage" href="javascript:;" class="btn btn-social-icon btn-outline-success mb-1 selectImage" data-trigger="hover" data-toggle="tooltip" data-placement="bottom" data-popup="tooltip-custom" data-original-title="{{__('general.selectImage')}}" data-bg-color="pink">
                                        <span class="la la-plus-circle font-medium-4"></span>
                                        </a>
                                    </div>
                                    <input type="hidden" id="image" type="text" class="form-control" placeholder="{{__('general.imageUrl')}}" name="avatar">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-detached content-right">
            <div class="content-body">
                <section class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="dataTables_wrapper container-fluid dt-bootstrap4">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <ul class="nav nav-tabs nav-top-border no-hover-bg">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" id="base-tab11" data-toggle="tab" aria-controls="tab11"
                                                            href="#tab11" aria-expanded="true">Khôi phục mật khẩu</a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content px-1 pt-1">
                                                <div role="tabpanel" class="tab-pane active" id="tab11" aria-expanded="true" aria-labelledby="base-tab11">
                                                    <form class="form-horizontal" action="" method="post" novalidate>
                                                    @csrf
                                                        <div class="row justify-content-md-center">
                                                            <div class="col-lg-8 col-md-8">
                                                                @if(Session('success'))
                                                              <div class="alert alert-success alert-dismissible mb-2" role="alert">
                                                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                  </button>
                                                                  <strong>Thành công!</strong>   {{Session('success')}} <b>{{$user->password_value}}</b>
                                                                </div>
                                                              @endif
                                                              @if(Session('error'))
                                                              <div class="alert alert-danger alert-dismissible mb-2" role="alert">
                                                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                  </button>
                                                                  <strong>Đã xảy ra lỗi!</strong>   {{Session('error')}}
                                                                </div>
                                                              @endif
                                                                <div class="form-group">
                                                                    <h5>
                                                                        Địa Chỉ Email
                                                                    </h5>
                                                                    <div class="controls">
                                                                        <input value="{{$user->email}}" type="text" class="form-control" disabled="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-8 col-md-8">
                                                                <div class="form-group">
                                                                    <h5>Mật khẩu mới
                                                                        <span class="required red">(*)</span>
                                                                    </h5>
                                                                    <div class="controls">
                                                                        <input value="{{old('txtNewPass')}}" type="password" id="txtNewPass" class="form-control" placeholder="Mật khẩu mới" name="txtNewPass" required data-validation-required-message="Mật khẩu mới  không được bỏ trống" maxlength="32" data-validation-maxlength-message="Mật khẩu mới  không được vượt quá 32 ký tự" minlength="4" data-validation-minlength-message="Mật khẩu mới  phải có ít nhất 4 ký tự">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-8 col-md-8">
                                                                <div class="form-group">
                                                                    <h5>Nhập lại mật khẩu mới
                                                                        <span class="required red">(*)</span>
                                                                    </h5>
                                                                    <div class="controls">
                                                                        <input value="{{old('txtReNewPass')}}" type="password" id="txtReNewPass" class="form-control" placeholder="Nhập lại mật khẩu mới" name="txtReNewPass" required data-validation-required-message="Mật khẩu nhập lại không được bỏ trống" maxlength="32" data-validation-maxlength-message="Mật khẩu mới nhập lại không được vượt quá 32 ký tự" minlength="4" data-validation-minlength-message="Mật khẩu mới nhập lại phải có ít nhất 4 ký tự" data-validation-match-match="txtNewPass" data-validation-match-message="Mật khẩu mới nhập lại không trùng khớp">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-actions right">
                                                            <button onclick="location.href='{{route('getListUsersAdmin')}}'" type="button" class="btn btn-danger mr-1">
                                                            <i class="ft-x"></i> {{__('general.cancel')}}
                                                            </button>
                                                            <button type="submit" class="btn btn-success">
                                                            <i class="la la-check-square-o"></i> {{__('general.saveChange')}}
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="tab-pane" id="tab12" aria-labelledby="base-tab12">
                                                    <p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie
                                                        pastry cotton candy oat cake fruitcake jelly chupa chups.
                                                        Pudding caramels pastry powder cake soufflé wafer caramels.
                                                        Jelly-o pie cupcake.
                                                    </p>
                                                </div>
                                            </div>                                            
                                        </div>
                                    </div>
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