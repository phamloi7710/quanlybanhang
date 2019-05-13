@section('title')
{{__('title.languageList')}}
@stop
@extends('admin.general.master')
@section('content')
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12">
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <h4 class="card-title">{{__('title.languageList')}}</h4>
                    </div>
                </div>
            </div>
            <div class="content-header-right col-md-6 col-12">
                <div class="dropdown float-md-right">
                    <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('getIndexAdmin')}}">{{__('general.home')}}</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">{{__('general.management')}}</a>
                            </li>
                            <li class="breadcrumb-item active">{{__('title.languageList')}}
                            </li>
                        </ol>
                </div>
            </div>
        </div>

        <div class="content-detached">
            <div class="content-body">
            	<section class="row">
                    <div class="col-sm-12">
                        <!-- Kick start -->
                        <div id="kick-start" class="card">
		                  	<div class="card-header">
		                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
		                        <div class="heading-elements">
		                            <a href="javascript:;" class="btn btn-success round btn-glow" data-toggle="modal"
                          data-target="#success">{{__('general.addNew')}}</a>
		                        </div>
		                    </div>
                            <div class="card-content collapse show">
                            	<div class="card-body">
								    <table class="table table-white-space table-bordered">
								        <thead>
								            <tr>
								                <th style="width: 40%">{{__('general.languageName')}}</th>
								                <th style="width: 10%">{{__('general.languageCode')}}</th>
								                <th class="text-center" style="width: 10%">{{__('general.flag')}}</th>
								                <th style="width: 20%">{{__('general.userAdd')}}</th>
								                <th style="width: 20%">{{__('general.status')}}</th>
								                <th style="width: 10%"></th>
								            </tr>
								        </thead>
								        <tbody>
								        	@foreach($languages as $lang)
								            <tr id="langRow_{{$lang->id}}">
								                <td>{{$lang->name}}</td>
								                <td class="text-center">{{$lang->code}}</td>
								                <td class="text-center">
								                	@if($lang->image)
								                	<img width="50" src="{{url('')}}{{$lang->image}}">
								                	@else
								                	<img width="50" src="{{url('')}}/assets/admin/images/no-image.jpg">
								                	@endif
								                </td>
								                <td>
								                	@if($lang->user)
								                		{{$lang->user->name}}
							                		@else
							                			<p>Người Dùng Không Tồn Tại</p>
								                	@endif
								                </td>
								                <td class="text-center">
								                	@if($lang->status=='active')
								                	<div class="badge badge-success label-square">
							                            <i class="la la-check font-medium-2"></i>
							                            <span>{{__('general.active')}}</span>
						                          	</div>
						                          	@else
						                          	<div class="badge badge-danger label-square">
							                            <i class="la la-close font-medium-2"></i>
							                            <span>{{__('general.inActive')}}</span>
						                          	</div>
						                          	@endif
								                </td>
								                <td class="text-center">
		                                            <span class="dropdown">
		                                                <button id="btnSearchDrop2" type="button" data-toggle="dropdown" aria-haspopup="true"
		                                              aria-expanded="false" class="btn btn-info btn-sm dropdown-toggle">{{__('general.option')}}</button>
		                                                <span aria-labelledby="btnSearchDrop2" class="dropdown-menu mt-1 dropdown-menu-right">
		                                                    <button type="button" data-toggle="modal" data-target="#language_{{$lang->id}}" class="dropdown-item blue"><i class="ft-edit-2"></i> {{__('general.edit')}}</button>
		                                                    <button id="lang_{{$lang->id}}" type="button" class="dropdown-item red"><i class="ft-trash"></i> {{__('general.delete')}}</button>
		                                                </span>
		                                            </span>
		                                        </td>
								            </tr>
								            <script>
                                        $(document).ready(function () {
                                            $('#lang_{{$lang->id}}').on('click', function () {
                                                swal({
                                                    title: "Bạn có chắc chắn không?",
                                                    text: "Thao tác xoá này sẽ không thể hoàn tác!",
                                                    icon: "warning",
                                                    showCancelButton: true,
                                                    showLoaderOnConfirm: true,
                                                    buttons: {
                                                        cancel: {
                                                            text: "Không, dữ nguyên dữ liệu!",
                                                            value: null,
                                                            visible: true,
                                                            className: "btn-warning",
                                                            closeModal: false,
                                                        },
                                                        confirm: {
                                                            text: "Đống ý, xoá ngay?",
                                                            value: true,
                                                            visible: true,
                                                            className: "",
                                                            closeModal: false
                                                        }
                                                    }
                                                }).then(isConfirm => {
                                                    if (isConfirm) {
                                                        var id = {{$lang->id}};
                                                        $.ajaxSetup({
                                                            headers: {
                                                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                                            }
                                                        });
                                                        $.ajax({
                                                            url: "/admin/language/delete/"+id+"",
                                                            method: 'get',
                                                            type: 'delete',
                                                            data: {
                                                                "id": id,
                                                            },
                                                            success: function (responsive) {
                                                                if ( responsive.status === 'success' ) {
                                                                    $('#langRow_{{$lang->id}}').remove();
                                                                    swal({
                                                                        title: "Thành Công",
                                                                        text: "Dữ Liệu Của Bạn Đã Được Xoá Thành Công!",
                                                                        icon: "success",
                                                                    });
                                                                }
                                                                else if ( responsive.status === 'failed' ) {
                                                                    swal({
                                                                        title: "Đã Xảy Ra Lỗi",
                                                                        text: "Danh mục này đang chưa tin tức!",
                                                                        icon: "error",
                                                                    });
                                                                }
                                                            }
                                                        })
                                                    } else {
                                                        swal("Đã Huỷ", "Dữ liệu của bạn được dữ nguyên!", "error");
                                                    }
                                                });
                                            });
                                        });
                                        </script>
								            @endforeach
								        </tbody>
								        <tfoot>
								            <th style="width: 40%">{{__('general.languageName')}}</th>
							                <th style="width: 10%">{{__('general.languageCode')}}</th>
							                <th class="text-center" style="width: 10%">{{__('general.flag')}}</th>
							                <th style="width: 20%">{{__('general.userAdd')}}</th>
							                <th style="width: 20%">{{__('general.status')}}</th>
							                <th style="width: 10%"></th>
								        </tfoot>
								    </table>
								</div>
							</div>
						</div>
					</div>
				</section>
        	</div>
		</div>
	</div>
</div>
<div class="modal fade text-left" id="success" tabindex="-1" role="dialog" aria-labelledby="myModalLabel9" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success white">
                <h4 class="modal-title white" id="myModalLabel9"><i class="la la-plus-circle"></i> {{__('general.addNewLanguage')}}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="{{route('postAddLanguage')}}" class="form-horizontal" novalidate>
        	@csrf
	            <div class="modal-body">
	            	<div class="form-group">
	                  	<h5>{{__('general.languageName')}}
                          	<span class="required">*</span>
                        </h5>
                        <div class="controls">
	                  		<input type="text" class="form-control round" placeholder="{{__('placeholder.languageName')}}" name="txtLanguageName" required data-validation-required-message="{{__('validation.required', ['attribute'=>__('general.languageName')])}}">
	                  	</div>
	                </div>
	                <div class="form-group">
	                  	<h5>{{__('general.languageCode')}}
                          	<span class="required">*</span>
                        </h5>
                        <div class="controls">
	                  		<input type="text" class="form-control round" placeholder="{{__('placeholder.languageCode')}}" name="txtLanguageCode" required data-validation-required-message="{{__('validation.required', ['attribute'=>__('general.languageCode')])}}">
	                  	</div>
	                </div>
	                <div class="form-group">
	                  	<h5>{{__('general.image')}}</h5>
                        <div class="card border-blue border-lighten-2">
                            <div class="text-center">
                                <div class="card-body">
                                    <img class="imagePreview" style="width: 100%; height: 100%;" id="previewImage" src="{{url('')}}/assets/admin/images/no-image.jpg" alt="{{__('general.productImage')}}">
                                    <input id="image" name="image" class="form-control" type="hidden">
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
	                <div class="form-group">
	                  	<label>{{__('general.status')}}</label>
	                  	<div class="row skin skin-flat">
	                  		<div class="col-md-6 col-sm-12">
	                    		<fieldset>
	                      			<input value="active" type="radio" name="status" id="input-radio-15" checked>
	                      			<label for="input-radio-15">{{__('general.active')}}</label>
	                    		</fieldset>
	                    		<fieldset>
	                      			<input value="inActive" type="radio" name="status" id="input-radio-16">
	                      			<label for="input-radio-16">{{__('general.inActive')}}</label>
	                    		</fieldset>
	                    	</div>
	                  	</div>
	                </div>
	            </div>
	            <div class="modal-footer">
	                <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">{{__('general.close')}}</button>
	                <button type="submit" class="btn btn-outline-success">{{__('general.save')}}</button>
	            </div>
            </form>
        </div>
    </div>
</div>
@foreach($languages as $lang)
<div class="modal fade text-left" id="language_{{$lang->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel9" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success white">
                <h4 class="modal-title white" id="myModalLabel9"><i class="la la-plus-circle"></i> {{__('general.addNewLanguage')}}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="{{route('postEditLanguage', ['id'=>$lang->id])}}" class="form-horizontal" novalidate>
        	@csrf
	            <div class="modal-body">
	            	<div class="form-group">
	                  	<h5>{{__('general.languageName')}}
                          	<span class="required">*</span>
                        </h5>
                        <div class="controls">
	                  		<input value="{{$lang->name}}" type="text" class="form-control round" placeholder="{{__('placeholder.languageName')}}" name="txtLanguageName" required data-validation-required-message="{{__('validation.required', ['attribute'=>__('general.languageName')])}}">
	                  	</div>
	                </div>
	                <div class="form-group">
	                  	<h5>{{__('general.languageCode')}}
                          	<span class="required">*</span>
                        </h5>
                        <div class="controls">
	                  		<input value="{{$lang->code}}" type="text" class="form-control round" placeholder="{{__('placeholder.languageCode')}}" name="txtLanguageCode" required data-validation-required-message="{{__('validation.required', ['attribute'=>__('general.languageCode')])}}">
	                  	</div>
	                </div>
	                <div class="form-group">
	                  	<h5>{{__('general.image')}}</h5>
                        <div class="card border-blue border-lighten-2">
                            <div class="text-center">
                                <div class="card-body">
                                    <img class="imagePreview{{$lang->id}}" style="width: 100%; height: 100%;" id="previewImage{{$lang->id}}" src="{{url('')}}{{$lang->image}}" alt="{{__('general.productImage')}}">
                                    <input value="{{$lang->image}}" id="image{{$lang->id}}" name="image" class="form-control" type="hidden">
                                </div>
                                <div class="text-center">
                                    <a href="javascript:;" class="btn btn-social-icon btn-outline-danger mr-1 mb-1 deleteImage{{$lang->id}}" data-trigger="hover" data-toggle="tooltip" data-placement="bottom" data-popup="tooltip-custom" data-original-title="{{__('general.deleteImage')}}" data-bg-color="pink">
                                    <span class="la la-trash"></span>
                                    </a>
                                    <a data-input="image{{$lang->id}}" data-preview="previewImage{{$lang->id}}" href="javascript:;" class="btn btn-social-icon btn-outline-success mb-1 selectImage" data-trigger="hover" data-toggle="tooltip" data-placement="bottom" data-popup="tooltip-custom" data-original-title="{{__('general.selectImage')}}" data-bg-color="pink">
                                    <span class="la la-plus-circle font-medium-4"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
	                </div>
	                <div class="form-group">
	                  	<label>{{__('general.status')}}</label>
	                  	<div class="row skin skin-flat">
	                  		<div class="col-md-6 col-sm-12">
	                    		<fieldset>
	                      			<input value="active" type="radio" name="status" id="input-radio-15" checked>
	                      			<label for="input-radio-15">{{__('general.active')}}</label>
	                    		</fieldset>
	                    		<fieldset>
	                      			<input value="inActive" type="radio" name="status" id="input-radio-16">
	                      			<label for="input-radio-16">{{__('general.inActive')}}</label>
	                    		</fieldset>
	                    	</div>
	                  	</div>
	                </div>
	            </div>
	            <div class="modal-footer">
	                <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">{{__('general.close')}}</button>
	                <button type="submit" class="btn btn-outline-success">{{__('general.save')}}</button>
	            </div>
            </form>
        </div>
    </div>
</div>
@endforeach

@section('script')
@foreach($languages as $lang)
<script type="text/javascript">
	$(document).ready(function(){
	    $('.selectImage{{$lang->id}}').filemanager('image');
	        var lfm = function(options, cb) {
	            var route_prefix = (options && options.prefix) ? options.prefix : '/uploads';
	            window.open(route_prefix + '?type=' + options.type || 'file', 'FileManager', 'width=1200,height=800');
	            window.SetUrl = cb;
	        };
	        $(".deleteImage{{$lang->id}}").click(function(){
	            $(".imagePreview{{$lang->id}}").attr('src','');
	            $(".imagePreview{{$lang->id}}").attr('src','../../assets/admin/images/no-image.jpg');
	            $("#image{{$lang->id}}").val('');
	        });
	});
</script>
@endforeach
@stop

@stop