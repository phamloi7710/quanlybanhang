@section('title')
{{__('general.editNews')}}
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
                <h3 class="content-header-title mb-0 d-inline-block">{{__('general.editNews')}}</h3>
            </div>
            <div class="content-header-right col-md-6 col-12">
                <div class="dropdown float-md-right">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('getIndexAdmin')}}">{{__('general.home')}}</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">{{__('general.news')}}</a>
                        </li>
                        <li class="breadcrumb-item active">{{__('general.editNews')}}
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
                        <form class="form form-horizontal" action="{{route('postEditNewsAdmin', ['id'=>$news->id])}}" method="post" novalidate>
                            @csrf
                            <div class="row<!--  justify-content-md-center -->">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>
                                                <b>{{__('general.title')}}</b>
                                                <span class="required red">(*)</span>
                                            </h5>
                                            <div class="controls">
                                                <input value="{{$news->title}}" type="text" id="txtTitle" class="form-control" placeholder="{{__('general.title')}}" name="txtTitle"required data-validation-required-message="Tiêu đề không được bỏ trống" maxlength="128" data-validation-maxlength-message="{{__('validation.max.string', ['attribute'=>__('general.title'), 'max'=>'128'])}}" minlength="4" data-validation-minlength-message="{{__('validation.min.string', ['attribute'=>__('general.title'), 'min'=>'4'])}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>
                                                <b>{{__('general.cateNews')}}</b>
                                                <span class="required red">(*)</span>
                                            </h5>
                                            <div class="controls">
                                                <select name="sltCate" class="form-control" required data-validation-required-message="{{__('validation.required', ['attribute'=>__('general.cateNews')])}}">
                                                    <option value="">{{__('general.selectCategory')}}</option>
                                                    @foreach($categories as $category)
                                                    <option value="{{$category->id}}" @if($news->cate_id == $category->id) selected @endif>{{$category->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>
                                                <b>{{__('general.avatar')}}</b>
                                            </h5>
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <div class="controls">
                                                        <input value="{{$news->image}}" name="txtAvatarUrl" id="image" class="form-control" placeholder="{{__('general.avatarUrl')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <a style="color: red;" href="javascript:;" class="deleteImage">{{__('general.delete')}}</a>
                                                    <a data-input="image" data-preview="previewImage" href="javascript:;" class="selectImage">{{__('general.selectImage')}}</a>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>
                                                <b>{{__('general.description')}}</b>
                                            </h5>
                                            <div class="controls">
                                                <textarea name="description" rows="4" class="form-control">{{$news->description}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>
                                                <b>{{__('general.status')}}</b>
                                            </h5>
                                            <div class="controls">
                                                <div class="controls">
                                                    <div class="skin skin-flat">
                                                        <input type="radio" value="active" name="status" required id="active" @if($news->status == 'active') checked @endif>
                                                        <label for="active">{{__('general.active')}}</label>
                                                    </div>
                                                    <div class="skin skin-flat">
                                                        <input type="radio" value="inActive" name="status" id="inActive" @if($news->status == 'inActive') checked @endif>
                                                        <label for="inActive">{{__('general.inActive')}}</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>
                                                <b>{{__('general.statusHome')}}</b>
                                            </h5>
                                            <div class="controls">
                                                <div class="controls">
                                                    <div class="skin skin-flat">
                                                        <input type="radio" value="active" name="status_home" required id="active" @if($news->status_home == 'active') checked @endif>
                                                        <label for="active">{{__('general.displayed')}}</label>
                                                    </div>
                                                    <div class="skin skin-flat">
                                                        <input type="radio" value="inActive" name="status_home" id="inActive" @if($news->status_home == 'inActive') checked @endif>
                                                        <label for="inActive">{{__('general.notDisplayed')}}</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <h5>
                                                <b>{{__('general.content')}}</b>
                                            </h5>
                                            <div class="controls">
                                                <div class="controls">
                                                    <textarea name="content" id="ckeditor" class="form-control">{{$news->content}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h4 class="form-section"><i class="ft ft-arrow-down"></i> SEO</h4>
                            <div class="row justify-content-center">
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <h5>
                                            {{__('general.seoTitle')}}
                                        </h5>
                                        <div class="controls">
                                            <input value="{{$news->seo_title}}" type="text" class="form-control" placeholder="{{__('general.seoTitle')}}" name="txtSeoTitle">
                                            <i>{{__('general.seoTitleHelp')}}</i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <h5>
                                            {{__('general.seoDescription')}}
                                        </h5>
                                        <div class="controls">
                                            <input value="{{$news->seo_description}}" type="text" class="form-control" placeholder="{{__('general.seoDescription')}}" name="txtSeoDescription">
                                            <i>{{__('general.seoDescriptionHelp')}}</i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <h5>
                                            {{__('general.seoKeywords')}}
                                        </h5>
                                        <div class="controls">
                                            <input value="{{$news->seo_key_words}}" type="text" class="form-control" placeholder="{{__('general.seoKeywords')}}" name="txtSeoKeywords">
                                            <i>{{__('general.seoKeywordsHelp')}}</i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions right">
                                <button onclick="location.href='{{route('getListNewsAdmin')}}'" type="button" class="btn btn-danger mr-1">
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
<script src="https://cdn.ckeditor.com/4.11.3/full/ckeditor.js"></script>
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