@section('title')
Thêm Mới Tài Khoản
@stop
@extends('admin.general.master')
@section('content') 
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12">
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <h4 class="card-title">Thêm Mới Tài Khoản</h4>
                    </div>
                </div>
            </div>
            <div class="content-header-right col-md-6 col-12">
                <div class="dropdown float-md-right">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('getIndexAdmin')}}">{{__('general.home')}}</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">Tài Khoản</a>
                        </li>
                        <li class="breadcrumb-item active">Thêm Mới Tài Khoản
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <form class="form-horizontal" action="{{route('postAddUserAdmin')}}" method="post" novalidate>
        @csrf
            <div class="sidebar-detached sidebar-left" ,=",">
                <div class="sidebar">
                    <div class="bug-list-sidebar-content">
                        <div class="card">

                            <div class="card-body">
                                <h3 class="card-title text-center">Ảnh Đại Diện</h3>
                                <div class="card border-blue border-lighten-2">
                                    <div class="text-center">

                                        <div class="card-body">
                                            <img class="imagePreview" style="width: 100%; height: 100%;" id="previewImage" src="{{url('')}}/assets/admin/images/no-image.jpg" alt="{{__('general.productImage')}}">
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
                                                    
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="form-group">
                                                                <h5>
                                                                    Họ và Tên
                                                                </h5>
                                                                <div class="controls">
                                                                    <input value="{{old('txtName')}}" type="text" id="txtName" class="form-control" placeholder="Họ và tên" name="txtName" maxlength="128" data-validation-maxlength-message="Họ và tên không được vượt quá 128 ký tự" minlength="4" data-validation-minlength-message="Họ và tên phải có ít nhất 4 ký tự">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="form-group">
                                                                <h5>
                                                                    Giới Tính
                                                                </h5>
                                                                <div class="controls">
                                                                    <select name="gender" class="form-control">
                                                                        <option value="">Chọn giới tính</option>
                                                                        <option value="male">Nam</option>
                                                                        <option value="famale">Nữ</option>
                                                                        <option value="other">Khác</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="form-group">
                                                                <h5>Địa Chỉ Email
                                                                    <span class="required red">(*)</span>
                                                                </h5>
                                                                <div class="controls">
                                                                    <input value="{{old('txtEmail')}}" type="email" id="txtEmail" class="form-control" placeholder="Địa chỉ email" name="txtEmail" required data-validation-required-message="Địa chỉ email không được bỏ trống" maxlength="128" data-validation-maxlength-message="Địa chỉ email không được vượt quá 128 ký tự" minlength="4" data-validation-minlength-message="Địa chỉ email phải có ít nhất 4 ký tự" data-validation-email-message="Địa chỉ email không đúng định dạng">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="form-group">
                                                                <h5>
                                                                    Số Điện Thoại Liên Hệ
                                                                </h5>
                                                                <div class="controls">
                                                                    <input value="{{old('txtPhone')}}" type="text" id="txtPhone" class="form-control" placeholder="Số điện thoại liên lạc" name="txtPhone" maxlength="24" data-validation-maxlength-message="Số điện thoại không được vượt quá 24 ký tự" minlength="10" data-validation-minlength-message="Số điện thoại phải có ít nhất 10 ký tự" data-validation-containsnumber-regex="(\d)+" data-validation-containsnumber-message="Chỉ cho phép nhập số">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4">
                                                            <div class="form-group">
                                                                <h5>Tên Đăng Nhập
                                                                    <span class="required red">(*)</span>
                                                                </h5>
                                                                <div class="controls">
                                                                    <input value="{{old('txtUsername')}}" type="text" id="txtUsername" class="form-control" placeholder="Tên đăng nhập" name="txtUsername" required data-validation-required-message="Tên đăng nhập không được bỏ trống" maxlength="32" data-validation-maxlength-message="Tên đăng nhập không được vượt quá 32 ký tự" minlength="4" data-validation-minlength-message="Tên đăng nhập phải có ít nhất 4 ký tự">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4">
                                                            <div class="form-group">
                                                                <h5>Mật Khẩu
                                                                    <span class="required red">(*)</span>
                                                                </h5>
                                                                <div class="controls">
                                                                    <input value="{{old('txtPassword')}}" type="password" id="txtPassword" class="form-control" placeholder="Mật khẩu" name="txtPassword" required data-validation-required-message="Mật khẩu không được bỏ trống" maxlength="32" data-validation-maxlength-message="Mật khẩu không được vượt quá 32 ký tự" minlength="4" data-validation-minlength-message="Mật khẩu phải có ít nhất 4 ký tự">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4">
                                                            <div class="form-group">
                                                                <h5>Nhập Lại Mật Khẩu
                                                                    <span class="required red">(*)</span>
                                                                </h5>
                                                                <div class="controls">
                                                                    <input value="{{old('txtRePassword')}}" type="password" id="txtRePassword" class="form-control" placeholder="Nhập lại mật khẩu" name="txtRePassword" required data-validation-required-message="Mật khẩu nhập lại không được bỏ trống" maxlength="32" data-validation-maxlength-message="Mật khẩu nhập lại không được vượt quá 32 ký tự" minlength="4" data-validation-minlength-message="Mật khẩu nhập lại phải có ít nhất 4 ký tự" data-validation-match-match="txtPassword" data-validation-match-message="Mật khẩu nhập lại không trùng khớp">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="form-group">
                                                                <h5>
                                                                    Cấp quyền truy cập trang quản trị
                                                                </h5>
                                                                <div class="controls">
                                                                    <div class="skin skin-flat">
                                                                        <input type="radio" value="true" name="is_admin" id="true">
                                                                        <label for="true">Cho phép</label>
                                                                    </div>
                                                                    <div class="skin skin-flat">
                                                                        <input type="radio" value="false" name="is_admin" id="false" checked>
                                                                        <label for="false">Không cho phép</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="form-group">
                                                                <h5>
                                                                    Trạng Thái
                                                                </h5>
                                                                <div class="controls">
                                                                    <div class="skin skin-flat">
                                                                        <input type="radio" value="active" name="status" id="active" checked>
                                                                        <label for="active">Hoạt động</label>
                                                                    </div>
                                                                    <div class="skin skin-flat">
                                                                        <input type="radio" value="inActive" name="status" id="inActive">
                                                                        <label for="inActive">Ngưng hoạt động</label>
                                                                    </div>
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
        </form>
    </div>
</div>
@stop