@extends('admin.general.master')
@section('content')
@section('script') 
<script src="{{url('')}}/assets/admin/app-assets/vendors/js/editors/ckeditor/ckeditor.js" type="text/javascript"></script>
@stop
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12">
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <h4 class="card-title">Cập Nhật Nội Dung Trang Giới Thiệu</h4>
                    </div>
                </div>
            </div>
            <div class="content-header-right col-md-6 col-12">
                <div class="dropdown float-md-right">
                    <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('getIndexAdmin')}}">{{__('general.home')}}</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Thiết Lập Trang</a>
                            </li>
                            <li class="breadcrumb-item active">Cập Nhật Nội Dung Trang Giới Thiệu
                            </li>
                        </ol>
                </div>
            </div>
        </div>
        <div class="content-body">
            <section class="card">
                <div class="card-content">
                    <div class="card-body">
                        <form action="{{route('postIntroduceAdmin')}}" method="POST" class="form-horizontal form-label-left">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="controls">
                                            <textarea name="content" id="ckeditor" class="form-control">@if($introduce){!!$introduce->content!!}@endif</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                            <div class="form-actions right">
                                
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