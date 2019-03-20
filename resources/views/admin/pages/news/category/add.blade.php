@section('title')
{{__('general.addNewNewsCate')}}
@stop
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
@stop
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block">{{__('general.addNewNewsCate')}}</h3>
            </div>
            <div class="content-header-right col-md-6 col-12">
                <div class="dropdown float-md-right">
                    <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('getIndexAdmin')}}">{{__('general.home')}}</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">{{__('general.news')}}</a>
                            </li>
                            <li class="breadcrumb-item active">{{__('general.addNewNewsCate')}}
                            </li>
                        </ol>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Description -->
            <section class="card">
                <div class="card-content">
                    <div class="card-body">
                        <form class="form-horizontal" action="{{route('postAddNewsCategoryAdmin')}}" method="post" novalidate>
                            @csrf
                            <div class="row justify-content-md-center">
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <h5>{{__('general.categoryName')}}
                                            <span class="required red">(*)</span>
                                        </h5>
                                        <div class="controls">
                                            <input value="{{old('txtName')}}" type="text" id="txtName" class="form-control" placeholder="{{__('general.categoryName')}}" name="txtName"required data-validation-required-message="{{__('validation.required', ['attribute'=>__('general.categoryName')])}}" maxlength="128" data-validation-maxlength-message="{{__('validation.max.string', ['attribute'=>__('general.categoryName'), 'max'=>'128'])}}" minlength="4" data-validation-minlength-message="{{__('validation.min.string', ['attribute'=>__('general.categoryName'), 'min'=>'4'])}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>{{__('general.status')}}
                                            <span class="required">*</span>
                                        </h5>
                                        <div class="controls">
                                            <div class="skin skin-flat">
                                                <input type="radio" value="active" name="status" required id="active" checked>
                                                <label for="active">{{__('general.active')}}</label>
                                            </div>
                                            <div class="skin skin-flat">
                                                <input type="radio" value="inActive" name="status" id="inActive">
                                                <label for="inActive">{{__('general.inActive')}}</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions right">
                              <button onclick="location.href='{{route('getListCateAdmin')}}'" type="button" class="btn btn-danger mr-1">
                                <i class="ft-x"></i> {{__('general.cancel')}}
                              </button>
                            <button type="submit" class="btn btn-success">
                              <i class="la la-check-square-o"></i> {{__('general.saveChanges')}}
                            </button>
                          </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@stop