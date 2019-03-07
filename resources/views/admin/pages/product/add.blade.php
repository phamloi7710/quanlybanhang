@extends('admin.general.master')
@section('content') 
@section('link')
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/app-assets/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css">
  <link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/app-assets/vendors/css/forms/icheck/icheck.css">
  <link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/app-assets/vendors/css/forms/toggle/bootstrap-switch.min.css">
  <link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/app-assets/vendors/css/forms/toggle/switchery.min.css">
  <link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/app-assets/css/plugins/forms/validation/form-validation.css">css
  <link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/app-assets/css/pages/login-register.css">
@stop
@section('script')
<script src="{{url('')}}/assets/admin/app-assets/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js"
  type="text/javascript"></script>
  <script src="{{url('')}}/assets/admin/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js"
  type="text/javascript"></script>
  <script src="{{url('')}}/assets/admin/app-assets/vendors/js/forms/icheck/icheck.min.js" type="text/javascript"></script>
  <script src="{{url('')}}/assets/admin/app-assets/vendors/js/forms/toggle/bootstrap-switch.min.js"
  type="text/javascript"></script>
  <script src="{{url('')}}/assets/admin/app-assets/vendors/js/forms/toggle/switchery.min.js" type="text/javascript"></script>
  <script src="{{url('')}}/assets/admin/app-assets/js/scripts/forms/validation/form-validation.js"
  type="text/javascript"></script>
  <script src="{{url('')}}/assets/admin/app-assets/vendors/js/editors/ckeditor/ckeditor.js" type="text/javascript"></script>
  
@stop
<div class="app-content content">
    <div class="content-wrapper">
        <form class="form" novalidate>
            <div class="content-header row">
            <div class="content-header-left col-md-6 col-12">
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <h4 class="card-title">{{__('title.addNewProduct')}}</h4>
                    </div>
                </div>
            </div>
            <div class="content-header-right col-md-6 col-12">
                <div class="dropdown float-md-right">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('getIndexAdmin')}}">{{__('general.home')}}</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">{{__('general.product')}}</a>
                        </li>
                        <li class="breadcrumb-item active">{{__('title.addNewProduct')}}
                        </li>
                    </ol>
                </div>
            </div>
        </div>
            <div class="content-body">
                <section id="description" class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
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
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h5>{{__('general.productName')}}
                                                    <span class="required red">(*)</span>
                                                </h5>
                                                <div class="controls">
                                                    <input value="{{old('txtName')}}" type="text" id="txtName" class="form-control" placeholder="{{__('placeholder.productName')}}" name="txtName"required data-validation-required-message="{{__('validation.required', ['attribute'=>__('general.categoryName')])}}" maxlength="128" data-validation-maxlength-message="{{__('validation.max.string', ['attribute'=>__('general.categoryName'), 'max'=>'128'])}}" minlength="4" data-validation-minlength-message="{{__('validation.min.string', ['attribute'=>__('general.categoryName'), 'min'=>'4'])}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h5>{{__('general.category')}}
                                                    <span class="required red">(*)</span>
                                                </h5>
                                                <div class="controls">
                                                    <select name="sltCate" class="form-control round">
                                                        <option><a href="">Thêm Mới Danh Mục</a></option>
                                                        <option>Quản Lý Danh Mục</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h5>{{__('general.price')}}
                                                </h5>
                                                <div class="controls">
                                                    <input value="{{old('txtPrice')}}" type="text" id="txtPrice" class="form-control" placeholder="{{__('placeholder.price')}}" name="txtPrice"required data-validation-required-message="{{__('validation.required', ['attribute'=>__('general.categoryName')])}}" maxlength="128" data-validation-maxlength-message="{{__('validation.max.string', ['attribute'=>__('general.categoryName'), 'max'=>'128'])}}" minlength="4" data-validation-minlength-message="{{__('validation.min.string', ['attribute'=>__('general.categoryName'), 'min'=>'4'])}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h5>{{__('general.salePrice')}}
                                                </h5>
                                                <div class="controls">
                                                    <input value="{{old('txtSalePrice')}}" type="text" id="txtSalePrice" class="form-control" placeholder="{{__('placeholder.salePrice')}}" name="txtSalePrice"required data-validation-required-message="{{__('validation.required', ['attribute'=>__('general.categoryName')])}}" maxlength="128" data-validation-maxlength-message="{{__('validation.max.string', ['attribute'=>__('general.categoryName'), 'max'=>'128'])}}" minlength="4" data-validation-minlength-message="{{__('validation.min.string', ['attribute'=>__('general.categoryName'), 'min'=>'4'])}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <h5>{{__('general.contentProduct')}}
                                                </h5>
                                                <div class="controls">
                                                    <textarea id="ckeditor" name="content" class="form-control">{!! old('content') !!}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions right">
                                    <button onclick="location.href='{{route('getListProductsAdmin')}}'" type="button" class="btn btn-danger mr-1">
                                        <i class="ft-x"></i> {{__('general.cancel')}}
                                    </button>
                                    <button type="submit" class="btn btn-success">
                                        <i class="la la-check-square-o"></i> {{__('general.saveChange')}}
                                    </button>
                                </div>
                        </div>
                    </div>
                </section>
            </div>
        </form>
    </div>
</div>
<script src="https://cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script>
    var options = {
    filebrowserImageBrowseUrl: '/admin/uploads?type=images',
    filebrowserImageUploadUrl: '/admin/uploads/upload?type=Images&_token=',
    filebrowserBrowseUrl: '/admin/uploads?type=Files',
    filebrowserUploadUrl: '/admin/uploads/upload?type=Files&_token='
    };
</script>
<script>
CKEDITOR.replace('ckeditor', options);
</script>
@stop