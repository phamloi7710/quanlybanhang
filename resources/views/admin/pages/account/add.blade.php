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
        <div class="content-detached content-right">
            <div class="content-body">
                <section class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div id="users-contacts_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <form class="form-horizontal" action="{{route('postAddCateAdmin')}}" method="post" novalidate>
                                                @csrf
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="form-group">
                                                            <h5>Họ và Tên
                                                                <span class="required red">(*)</span>
                                                            </h5>
                                                            <div class="controls">
                                                                <input value="{{old('txtName')}}" type="text" id="txtName" class="form-control" placeholder="{{__('general.categoryName')}}" name="txtName"required data-validation-required-message="Họ và tên không được bỏ trống" maxlength="128" data-validation-maxlength-message="Họ và tên không được vượt quá 128 ký tự" minlength="4" data-validation-minlength-message="Họ và tên phải có ít nhất 4 ký tự">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="form-group">
                                                            <h5>Giới Tính
                                                                <span class="required red">(*)</span>
                                                            </h5>
                                                            <div class="controls">
                                                                <select name="" class="form-control" required data-validation-required-message="Vui lòng chọn giới tính">
                                                                    <option value="">Chọn giới tính</option>
                                                                    <option value="nam">Nam</option>
                                                                    <option value="nu">Nữ</option>
                                                                    <option value="khac">Khác</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-actions right">
                                                  <button onclick="location.href='{{route('getListCateAdmin')}}'" type="button" class="btn btn-danger mr-1">
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
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="sidebar-detached sidebar-left" ,=",">
            <div class="sidebar">
                <div class="bug-list-sidebar-content">
                    <div class="card">
                        <div class="card-body">
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
    </div>
</div>
@stop