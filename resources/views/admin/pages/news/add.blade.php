@section('title')
Thêm Mới Tin Tức
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
                <h3 class="content-header-title mb-0 d-inline-block">Thêm Mới Tin Tức</h3>
            </div>
            <div class="content-header-right col-md-6 col-12">
                <div class="dropdown float-md-right">
                    <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('getIndexAdmin')}}">{{__('general.home')}}</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Tin Tức</a>
                            </li>
                            <li class="breadcrumb-item active">Thêm Mới Tin Tức
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
                        <form class="form form-horizontal" action="{{route('postAddNewsAdmin')}}" method="post" novalidate>
                            @csrf
                            <div class="row<!--  justify-content-md-center -->">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>
                                                <b>Tiêu Đề</b>
                                                <span class="required red">(*)</span>
                                            </h5>
                                            <div class="controls">
                                                <input value="{{old('txtTitle')}}" type="text" id="txtTitle" class="form-control" placeholder="Tiêu đề của tin tức" name="txtTitle"required data-validation-required-message="Tiêu đề không được bỏ trống" maxlength="128" data-validation-maxlength-message="Tiêu đề không được nhiều hơn 128 ký tự" minlength="4" data-validation-minlength-message="Tiêu đề không được ít hơn 4 ký tự">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>
                                                <b>Thuộc Danh Mục</b>
                                                <span class="required red">(*)</span>
                                            </h5>
                                            <div class="controls">
                                                <select name="sltCate" class="form-control" required data-validation-required-message="Vui lòng chọn danh mục">
                                                    <option value="">Chọn Danh Mục</option>
                                                    @foreach($categories as $category)
                                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>
                                                <b>Ảnh Đại Diện</b>
                                            </h5>
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <div class="controls">
                                                        <input name="txtAvatarUrl" id="image" class="form-control" placeholder="Đường Dẫn Ảnh Đại Diện">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <a style="color: red;" href="javascript:;" class="deleteImage">Xoá</a>
                                                    <a data-input="image" data-preview="previewImage" href="javascript:;" class="selectImage">Chọn Ảnh</a>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>
                                                <b>Tóm tắt</b>
                                            </h5>
                                            <div class="controls">
                                                <textarea name="description" rows="4" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>
                                                <b>Trạng Thái Hoạt Động</b>
                                            </h5>
                                            <div class="controls">
                                                <div class="controls">
                                                    <div class="skin skin-flat">
                                                        <input type="radio" value="active" name="status" required id="active" checked>
                                                        <label for="active">Hoạt động</label>
                                                    </div>
                                                    <div class="skin skin-flat">
                                                        <input type="radio" value="inActive" name="status" id="inActive">
                                                        <label for="inActive">Không hoạt động</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>
                                                <b>Trạng Thái Hiển Thị Ở Trang Chủ</b>
                                            </h5>
                                            <div class="controls">
                                                <div class="controls">
                                                    <div class="skin skin-flat">
                                                        <input type="radio" value="active" name="status_home" required id="active">
                                                        <label for="active">Hiển thị</label>
                                                    </div>
                                                    <div class="skin skin-flat">
                                                        <input type="radio" value="inActive" name="status_home" id="inActive" checked>
                                                        <label for="inActive">Không hiển thị</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <h5>
                                                <b>Nội Dung Của Tin Tức</b>
                                            </h5>
                                            <div class="controls">
                                                <div class="controls">
                                                    <textarea name="content" id="ckeditor" class="form-control"></textarea>
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
                                            SEO Title
                                        </h5>
                                        <div class="controls">
                                            <input value="{{old('txtSeoTitle')}}" type="text" class="form-control" placeholder="SEO Title" name="txtSeoTitle">
                                            <i>Một tiêu đề tùy chỉnh xuất hiện trong thẻ tiêu đề cho trang này</i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <h5>
                                            SEO Description
                                        </h5>
                                        <div class="controls">
                                            <input value="{{old('txtSeoDescription')}}" type="text" class="form-control" placeholder="SEO Description" name="txtSeoDescription">
                                            <i>Mô tả META cho trang này. Điều này sẽ ghi đè bất kỳ mô tả tự phát</i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <h5>
                                            SEO Keywords
                                        </h5>
                                        <div class="controls">
                                            <input value="{{old('txtSeoKeywords')}}" type="text" class="form-control" placeholder="SEO Keywords" name="txtSeoKeywords">
                                            <i>Danh sách các từ khóa quan trọng nhất được phân tách bằng dấu phẩy cho trang này sẽ được viết dưới dạng từ khóa META</i>
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