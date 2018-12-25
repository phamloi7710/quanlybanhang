@section('title')
Quản Lý Hình Ảnh
@stop
@extends('admin.general.master')
@section('content')
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/app-assets/css/core/colors/palette-gradient.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/app-assets/css/pages/gallery.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/app-assets/vendors/js/gallery/photo-swipe/photoswipe.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/app-assets/vendors/js/gallery/photo-swipe/default-skin/default-skin.css">
<script src="{{url('')}}/assets/admin/app-assets/vendors/js/ui/headroom.min.js" type="text/javascript"></script>
<script src="{{url('')}}/assets/admin/app-assets/vendors/js/gallery/masonry/masonry.pkgd.min.js"
    type="text/javascript"></script>
<script src="{{url('')}}/assets/admin/app-assets/vendors/js/gallery/photo-swipe/photoswipe.min.js"
    type="text/javascript"></script>
<script src="{{url('')}}/assets/admin/app-assets/vendors/js/gallery/photo-swipe/photoswipe-ui-default.min.js"
    type="text/javascript"></script>
<script src="{{url('')}}/assets/admin/app-assets/js/scripts/gallery/photo-swipe/photoswipe-script.js"
    type="text/javascript"></script>
<link rel="shortcut icon" type="image/png" href="{{url('')}}/assets/admin/filemanager/img/folder.png">
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"> -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{url('')}}/assets/admin/filemanager/css/cropper.min.css">
<style>{!! \File::get(base_path('assets/admin/filemanager/css/lfm.css')) !!}</style>
{{-- Use the line below instead of the above if you need to cache the css. --}}
{{-- 
<link rel="stylesheet" href="{{url('')}}/assets/admin/filemanager/css/lfm.css">
--}}
<link rel="stylesheet" href="{{url('')}}/assets/admin/filemanager/css/mfb.css">
<link rel="stylesheet" href="{{url('')}}/assets/admin/filemanager/css/dropzone.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.css">
<div class="content-body">
    <div class="content-header row">
        <div class="content-header-left col-md-6 col-12">
            <h3 class="content-header-title">Breadcrumbs with buttons group </h3>
            <div class="row breadcrumbs-top">
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">Page headers</a>
                        </li>
                        <li class="breadcrumb-item active">Breadcrumbs bottom
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section id="image-gallery" class="card r" id="main">
        <div class="card-header" id="nav">
            <h4 class="card-title">
                <a class="navbar-brand clickable hide" id="to-previous">
                <i class="fa fa-arrow-left"></i>
                <span class="hidden-xs">{{ trans('laravel-filemanager::lfm.nav-back') }}</span>
                </a>
            </h4>
            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
            <div class="heading-elements" id="nav-buttons">
                <div class="btn-group mr-1 mb-1">
                    <button type="button" class="btn btn-icon btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="la la-eye"></i></button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#" id="thumbnail-display"><i class="la la-image"></i> {{ trans('laravel-filemanager::lfm.nav-thumbnails') }}</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" id="list-display"><i class="la la-list-alt"></i> {{ trans('laravel-filemanager::lfm.nav-list') }}</a>
                    </div>
                </div>
                <div class="btn-group mr-1 mb-1">
                    <button type="button" class="btn btn-icon btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="la la-list-ol"></i></button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#" id="list-sort-alphabetic"><i class="la la-sort-alpha-asc"></i> {{ trans('laravel-filemanager::lfm.nav-sort-alphabetic') }}</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" id="list-sort-time"><i class="la la-clock-o"></i> {{ trans('laravel-filemanager::lfm.nav-sort-time') }}</a>
                    </div>
                </div>
            </div>
            <!-- <div class="visible-xs" id="current_dir" style="padding: 5px 15px;background-color: #f8f8f8;color: #5e5e5e;"></div> -->
            <div id="alerts" style="padding-top: 20px;"></div>
            <div id="content" style="padding-top: 20px;"></div>
        </div>
    </section><!-- 
</div>
</div> -->

</div>
<ul id="fab">
    <li>
        <a href="#"></a>
        <ul class="hide">
            <li>
                <a href="#" id="add-folder" data-mfb-label="{{ trans('laravel-filemanager::lfm.nav-new') }}">
                <i class="fa fa-folder"></i>
                </a>
            </li>
            <li>
                <a href="#" data-toggle="modal"
                    data-target="#success" id="upload" data-mfb-label="{{ trans('laravel-filemanager::lfm.nav-upload') }}">
                <i class="fa fa-upload"></i>
                </a>
            </li>
        </ul>
    </li>
</ul>
<div class="modal fade text-left" id="success" tabindex="-1" role="dialog" aria-labelledby="myModalLabel9"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success white">
                <h4 class="modal-title white" id="myModalLabel9"><i class="la la-tree"></i> {{__('general.uploadImage')}}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('unisharp.lfm.upload') }}" role='form' id='uploadForm' name='uploadForm' method='post' enctype='multipart/form-data' class="dropzone">
                    <div class="form-group" id="attachment">
                        <div class="controls text-center">
                            <div class="input-group" style="width: 100%">
                                <a class="btn btn-outline-success block btn-lg" id="upload-button">{{ trans('laravel-filemanager::lfm.message-choose') }}</a>
                            </div>
                        </div>
                    </div>
                    <input type='hidden' name='working_dir' id='working_dir'>
                    <input type='hidden' name='type' id='type' value='{{ request("type") }}'>
                    <input type='hidden' name='_token' value='{{csrf_token()}}'>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">{{__('general.close')}}</button>
            </div>
        </div>
    </div>
</div>
<div id="lfm-loader">
    <img src="{{asset('assets/admin/filemanager/img/loader.svg')}}">
</div>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<script src="{{ asset('assets/admin/filemanager/js/cropper.min.js') }}"></script>
<script src="{{ asset('assets/admin/filemanager/js/jquery.form.min.js') }}"></script>
<script src="{{ asset('assets/admin/filemanager/js/dropzone.min.js') }}"></script>
<script>
    var route_prefix = "{{ url('/') }}";
    var lfm_route = "{{ url(config('lfm.url_prefix', config('lfm.prefix'))) }}";
    var lang = {!! json_encode(trans('laravel-filemanager::lfm')) !!};
</script>
<script>{!! \File::get(base_path('assets/admin/filemanager/js/script.js')) !!}</script>
{{-- Use the line below instead of the above if you need to cache the script. --}}
{{-- <script src="{{ asset('assets/admin/filemanager/js/script.js') }}"></script> --}}
<script>
    $.fn.fab = function () {
      var menu = this;
      menu.addClass('mfb-component--br mfb-zoomin').attr('data-mfb-toggle', 'hover');
      var wrapper = menu.children('li');
      wrapper.addClass('mfb-component__wrap');
      var parent_button = wrapper.children('a');
      parent_button.addClass('mfb-component__button--main')
        .append($('<i>').addClass('mfb-component__main-icon--resting fa fa-plus'))
        .append($('<i>').addClass('mfb-component__main-icon--active fa fa-times'));
      var children_list = wrapper.children('ul');
      children_list.find('a').addClass('mfb-component__button--child');
      children_list.find('i').addClass('mfb-component__child-icon');
      children_list.addClass('mfb-component__list').removeClass('hide');
    };
    $('#fab').fab({
      buttons: [
        {
          icon: 'fa fa-folder',
          label: "{{ trans('laravel-filemanager::lfm.nav-new') }}",
          attrs: {id: 'add-folder'}
        },
        {
          icon: 'fa fa-upload',
          label: "{{ trans('laravel-filemanager::lfm.nav-upload') }}",
          attrs: {id: 'upload'}
        }
      ]
    });
    
    Dropzone.options.uploadForm = {
      paramName: "upload[]", // The name that will be used to transfer the file
      uploadMultiple: false,
      parallelUploads: 5,
      clickable: '#upload-button',
      dictDefaultMessage: 'Or drop files here to upload',
      init: function() {
        var _this = this; // For the closure
        this.on('success', function(file, response) {
          if (response == 'OK') {
            refreshFoldersAndItems('OK');
          } else {
            this.defaultOptions.error(file, response.join('\n'));
          }
      });
      },
      acceptedFiles: "{{ lcfirst(str_singular(request('type') ?: '')) == 'image' ? implode(',', config('lfm.valid_image_mimetypes')) : implode(',', config('lfm.valid_file_mimetypes')) }}",
      maxFilesize: ({{ lcfirst(str_singular(request('type') ?: '')) == 'image' ? config('lfm.max_image_size') : config('lfm.max_file_size') }} / 1000)
    }
</script>
@stop