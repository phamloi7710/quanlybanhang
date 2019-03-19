@section('title')
{{__('general.addNewAccount')}}
@stop
@extends('admin.general.master')
@section('content') 
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12">
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <h4 class="card-title">{{__('general.addNewAccount')}}</h4>
                    </div>
                </div>
            </div>
            <div class="content-header-right col-md-6 col-12">
                <div class="dropdown float-md-right">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('getIndexAdmin')}}">{{__('general.home')}}</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">{{__('general.account')}}</a>
                        </li>
                        <li class="breadcrumb-item active">{{__('general.addNewAccount')}}
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
                                <h3 class="card-title text-center">{{__('general.avatar')}}</h3>
                                <div class="card border-blue border-lighten-2">
                                    <div class="text-center">

                                        <div class="card-body">
                                            <img class="imagePreview" style="width: 100%; height: 100%;" id="previewImage" src="{{url('')}}/assets/admin/images/no-image.jpg" alt="{{__('general.image')}}">
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
                                                                    {{__('general.fullName')}}
                                                                </h5>
                                                                <div class="controls">
                                                                    <input value="{{old('txtName')}}" type="text" id="txtName" class="form-control" placeholder="{{__('general.fullName')}}" name="txtName" maxlength="64" data-validation-maxlength-message="{{__('validation.max.string', ['attribute'=>__('general.fullName'), 'max'=>'64'])}}" minlength="4" data-validation-minlength-message="{{__('validation.min.string', ['attribute'=>__('general.fullName'), 'min'=>'4'])}}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="form-group">
                                                                <h5>
                                                                    {{__('general.gender')}}
                                                                </h5>
                                                                <div class="controls">
                                                                    <select name="gender" class="form-control">
                                                                        <option value="">{{__('general.selectGender')}}</option>
                                                                        <option value="male">{{__('general.male')}}</option>
                                                                        <option value="famale">{{__('general.famale')}}</option>
                                                                        <option value="other">{{__('general.other')}}</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="form-group">
                                                                <h5>{{__('general.emailAddress')}}
                                                                    <span class="required red">(*)</span>
                                                                </h5>
                                                                <div class="controls">
                                                                    <input value="{{old('txtEmail')}}" type="email" id="txtEmail" class="form-control" placeholder="{{__('general.emailAddress')}}" name="txtEmail" required data-validation-required-message="{{__('validation.required', ['attribute'=>__('general.emailAddress')])}}" maxlength="64" data-validation-maxlength-message="{{__('validation.max.string', ['attribute'=>__('general.emailAddress'), 'max'=>'64'])}}" minlength="4" data-validation-minlength-message="{{__('validation.min.string', ['attribute'=>__('general.emailAddress'), 'min'=>'4'])}}" data-validation-email-message="{{__('validation.regex', ['attribute'=>__('general.email')])}}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="form-group">
                                                                <h5>
                                                                    {{__('general.phoneNumber')}}
                                                                </h5>
                                                                <div class="controls">
                                                                    <input value="{{old('txtPhone')}}" type="text" id="txtPhone" class="form-control" placeholder="{{__('general.phoneNumber')}}" name="txtPhone" maxlength="24" data-validation-maxlength-message="{{__('validation.max.string', ['attribute'=>__('general.phoneNumber'), 'max'=>'24'])}}" minlength="10" data-validation-minlength-message="{{__('validation.min.string', ['attribute'=>__('general.phoneNumber'), 'min'=>'10'])}}" data-validation-containsnumber-regex="(\d)+" data-validation-containsnumber-message="{{__('validation.numeric', ['attribute'=>__('general.phoneNumber')])}}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4">
                                                            <div class="form-group">
                                                                <h5>{{__('general.username')}}
                                                                    <span class="required red">(*)</span>
                                                                </h5>
                                                                <div class="controls">
                                                                    <input value="{{old('txtUsername')}}" type="text" id="txtUsername" class="form-control" placeholder="{{__('general.username')}}" name="txtUsername" required data-validation-required-message="{{__('validation.required', ['attribute'=>__('general.username')])}}" maxlength="32" data-validation-maxlength-message="{{__('validation.max.string', ['attribute'=>__('general.username'), 'max'=>'32'])}}" minlength="4" data-validation-minlength-message="{{__('validation.min.string', ['attribute'=>__('general.username'), 'min'=>'4'])}}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4">
                                                            <div class="form-group">
                                                                <h5>{{__('general.password')}}
                                                                    <span class="required red">(*)</span>
                                                                </h5>
                                                                <div class="controls">
                                                                    <input value="{{old('txtPassword')}}" type="password" id="txtPassword" class="form-control" placeholder="{{__('general.password')}}" name="txtPassword" required data-validation-required-message="{{__('validation.required', ['attribute'=>__('general.rePassword')])}}" maxlength="32" data-validation-maxlength-message="{{__('validation.max.string', ['attribute'=>__('general.password'), 'max'=>'32'])}}" minlength="4" data-validation-minlength-message="{{__('validation.min.string', ['attribute'=>__('general.password'), 'min'=>'4'])}}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4">
                                                            <div class="form-group">
                                                                <h5>{{__('general.rePassword')}}
                                                                    <span class="required red">(*)</span>
                                                                </h5>
                                                                <div class="controls">
                                                                    <input value="{{old('txtRePassword')}}" type="password" id="txtRePassword" class="form-control" placeholder="{{__('general.rePassword')}}" name="txtRePassword" required data-validation-required-message="{{__('validation.required', ['attribute'=>__('general.rePassword')])}}" maxlength="32" data-validation-maxlength-message="{{__('validation.max.string', ['attribute'=>__('general.rePassword'), 'max'=>'32'])}}" minlength="4" data-validation-minlength-message="{{__('validation.min.string', ['attribute'=>__('general.rePassword'), 'min'=>'4'])}}" data-validation-match-match="txtPassword" data-validation-match-message="Mật khẩu nhập lại không trùng khớp">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="form-group">
                                                                <h5>
                                                                    {{__('general.isAdmin')}}
                                                                </h5>
                                                                <div class="controls">
                                                                    <div class="skin skin-flat">
                                                                        <input type="radio" value="true" name="is_admin" id="true">
                                                                        <label for="true">{{__('general.allow')}}</label>
                                                                    </div>
                                                                    <div class="skin skin-flat">
                                                                        <input type="radio" value="false" name="is_admin" id="false" checked>
                                                                        <label for="false">{{__('general.doNotAllow')}}</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="form-group">
                                                                <h5>
                                                                    {{__('general.status')}}
                                                                </h5>
                                                                <div class="controls">
                                                                    <div class="skin skin-flat">
                                                                        <input type="radio" value="active" name="status" id="active" checked>
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
                                                      <button onclick="location.href='{{route('getListUsersAdmin')}}'" type="button" class="btn btn-danger mr-1">
                                                        <i class="ft-x"></i> {{__('general.cancel')}}
                                                      </button>
                                                    <button type="submit" class="btn btn-success">
                                                      <i class="la la-check-square-o"></i> {{__('general.saveChanges')}}
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