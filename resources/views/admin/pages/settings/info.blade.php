@section('title')
{{__('general.settingBasicInfo')}}
@stop
@extends('admin.general.master')
@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12">
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <h4 class="card-title">{{__('general.settingBasicInfo')}}</h4>
                    </div>
                </div>
            </div>
            <div class="content-header-right col-md-6 col-12">
                <div class="dropdown float-md-right">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('getIndexAdmin')}}">{{__('general.home')}}</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#"> {{__('general.systemSetting')}}</a>
                        </li>
                        <li class="breadcrumb-item active">{{__('general.settingBasicInfo')}}
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
                            <div class="card-content collapse show">
                            	<div class="card-body">
								    <form method="POST" action="{{route('postWebInfo',['key'=>'web-info'])}}" class="form-horizontal form-label-left">
								    	@csrf
								    	<div class="row justify-content-center">
								    		<div class="col-md-12">
								    			<ul class="nav nav-tabs nav-top-border no-hover-bg">
												    <li class="nav-item">
												        <a class="nav-link active" id="base-tab11" data-toggle="tab" aria-controls="tab11"
												            href="#tab11" aria-expanded="true">@lang('general.basicInfo')</a>
												    </li>
												    <li class="nav-item">
												        <a class="nav-link" id="base-tab12" data-toggle="tab" aria-controls="tab12" href="#tab12"
												            aria-expanded="false">@lang('general.phoneNumber')</a>
												    </li>
												    <li class="nav-item">
												        <a class="nav-link" id="base-tab13" data-toggle="tab" aria-controls="tab13" href="#tab13"
												            aria-expanded="false">@lang('general.emailAddress')</a>
												    </li>
												    <li class="nav-item">
												        <a class="nav-link" id="base-tab14" data-toggle="tab" aria-controls="tab14" href="#tab14"
												            aria-expanded="false">@lang('general.socialNetwork')</a>
												    </li>
												    <li class="nav-item">
												        <a class="nav-link" id="base-tab15" data-toggle="tab" aria-controls="tab15" href="#tab15"
												            aria-expanded="false">@lang('general.seoInfo')</a>
												    </li>
												    <li class="nav-item">
												        <a class="nav-link" id="base-tab15" data-toggle="tab" aria-controls="tab16" href="#tab16"
												            aria-expanded="false">@lang('general.logoAndShortcutIcon')</a>
												    </li>
												</ul>
								    		</div>
								    		<div class="col-md-8">
								    			<div class="tab-content px-1 pt-1"><div role="tabpanel" class="tab-pane active align-items-center justify-content-center" id="tab11" aria-expanded="true" aria-labelledby="base-tab11">
											    <div class="form-group">
			                                        <h5>
			                                        	@lang('general.websiteName')
			                                        </h5>
			                                        <div class="controls">
			                                            <input name="txtSiteName" value="@if($info){{$info->site_name}}@endif" type="text"  class="form-control" placeholder="@lang('general.websiteName')">
			                                        </div>
			                                    </div>
			                                    <div class="form-group">
			                                        <h5>
			                                        	@lang('general.address')
			                                        </h5>
			                                        <div class="controls table-responsive">
			                                            <table class="table table-bordered mb-0">
									                      	<thead>
									                        	<tr>
								                          			<th class="center" style="width: 30%">@lang('general.title')</th>
								                          			<th class="center" style="width: 30%">@lang('general.address')</th>
										                          	<th class="center" style="width: 5%"><a onclick="addAddress();" href="javascript:;" class="btn mr-1 mb-1 btn-primary btn-sm"><i class="la la-plus-square"></i></a></th>
									                        	</tr>
									                      	</thead>
									                      	<tbody id="contentAddress">
									                      		@if($info)
								                        		@php $i=0 @endphp
						                                        @foreach (unserialize($info->address) as $value)
						                                        <tr id="rowAddress{{$i}}">
																	<td class="center"> <input value="{{$value['title']}}" name="txtTitleAddress[]" value="" type="text" class="form-control" placeholder="@lang('general.title')"></td>
																	<td class="center"> <input value="{{$value['address']}}" name="txtAddress[]" value="" type="text" class="form-control" placeholder="Địa Chỉ"></td>
																	<td class="center"><a href="javascript:void(0)" onclick="$('#rowAddress{{$i}}').remove();" class="btn mr-1 mb-1 btn-danger btn-sm"><i class="la la-trash"></i></a></td>
																</tr>
																@php $i++ @endphp
						                                        @endforeach
						                                        @endif
									                      </tbody>
									                    </table>
			                                        </div>
			                                    </div>
											</div>
											<div class="tab-pane" id="tab12" aria-labelledby="base-tab12">
											    <div class="form-group">
			                                        <h5>
			                                        	@lang('general.phoneNumber')
			                                        </h5>
			                                        <div class="controls table-responsive">
			                                            <table class="table table-bordered mb-0">
									                      	<thead>
									                        	<tr>
								                          			<th class="text-center" style="width: 30%">@lang('general.title')</th>
								                          			<th class="text-center" style="width: 30%">@lang('general.phoneNumber')</th>
										                          	<th class="text-center" style="width: 5%">
										                          		<a onclick="addPhoneNumber();" href="javascript:;" class="btn mr-1 mb-1 btn-primary btn-sm"><i class="la la-plus-square"></i></a>
										                          	</th>
									                        	</tr>
									                      	</thead>
									                      	<tbody id="contentPhone">
									                      		@if($info)
									                      		@php $i=0 @endphp
						                                        @foreach (unserialize($info->phone) as $value)
								                        		<tr id="rowPhone{{$i}}">
																    <td class="center"> <input value="{{$value['title']}}" name="txtTitlePhone[]" value="" type="text" class="form-control" placeholder="@lang('general.title')"></td>
																    <td class="center"> <input value="{{$value['phone']}}" name="txtPhone[]" value="" type="number" class="form-control" placeholder="@lang('general.phoneNumber')"></td>
																    <td class="center"><a href="javascript:void(0)" onclick="$('#rowPhone{{$i}}').remove();" class="btn mr-1 mb-1 btn-danger btn-sm"><i class="la la-trash"></i></a></td>
																</tr>
																@php $i++ @endphp
						                                        @endforeach
						                                        @endif
									                      </tbody>
									                    </table>
			                                        </div>
			                                    </div>
											</div>
											<div class="tab-pane" id="tab13" aria-labelledby="base-tab13">
											    <div class="form-group">
			                                        <h5>
			                                        	@lang('general.emailAddress')
			                                        </h5>
			                                        <div class="controls table-responsive">
			                                            <table class="table table-bordered mb-0">
									                      	<thead>
									                        	<tr>
								                          			<th class="center" style="width: 30%">@lang('general.title')</th>
								                          			<th class="center" style="width: 30%">@lang('general.emailAddress')</th>
										                          	<th class="center" style="width: 5%">
										                          		<div class="heading-elements">
										                          			<a onclick="addEmail();" href="javascript:;" class="btn mr-1 mb-1 btn-primary btn-sm"><i class="la la-plus-square"></i></a>
										                          		</div>
									                          		</th>
									                        	</tr>
									                      	</thead>
									                      	<tbody id="contentMail">
									                      		@if($info)
									                      		@php $i=0 @endphp
						                                        @foreach (unserialize($info->email) as $value)
						                                        <tr id="rowMail{{$i}}">
																	<td class="center"> <input value="{{$value['title']}}" name="txtTitleMail[]" value="" type="text" class="form-control" placeholder="@lang('general.title')"></td>
																	<td class="center"> <input value="{{$value['email']}}" name="txtMail[]" value="" type="email" class="form-control" placeholder="@lang('general.emailAddress')"></td>
																	<td class="center"><a href="javascript:void(0)" onclick="$('#rowMail{{$i}}').remove();" class="btn mr-1 mb-1 btn-danger btn-sm"><i class="la la-trash"></i></a></td>
																</tr>
																@php $i++ @endphp
						                                        @endforeach
						                                        @endif
									                      </tbody>
									                    </table>
			                                        </div>
			                                    </div>
											</div>
											<div class="tab-pane" id="tab14" aria-labelledby="base-tab12">
												<div class="form-group">
			                                        <h5>
			                                        	@lang('general.fanpageLink')
			                                        </h5>
			                                        <div class="controls">
			                                            <input name="txtFanPage" value="@if($info){{$info->fanpage}}@endif" type="text" class="form-control">
			                                        </div>
			                                    </div>
			                                    <div class="form-group">
			                                        <h5>
			                                        	@lang('general.twitterLink')
			                                        </h5>
			                                        <div class="controls">
			                                            <input name="txtTwitter" value="@if($info){{$info->twitter}}@endif" type="text" class="form-control">
			                                        </div>
			                                    </div>
			                                    <div class="form-group">
			                                        <h5>
			                                        	@lang('general.googlePlusLink')
			                                        </h5>
			                                        <div class="controls">
			                                            <input name="txtGooglePlus" value="@if($info){{$info->google_plus}}@endif" type="text" class="form-control">
			                                        </div>
			                                    </div>
			                                    <div class="form-group">
			                                        <h5>
			                                        	@lang('general.youtubeChannelLink')
			                                        </h5>
			                                        <div class="controls">
			                                            <input name="txtYoutubeChannel" value="@if($info){{$info->youtube_channel}}@endif" type="text" class="form-control">
			                                        </div>
			                                    </div>
			                                    <div class="form-group">
			                                        <h5>
			                                        	@lang('general.instagramChannelLink')
			                                        </h5>
			                                        <div class="controls">
			                                            <input name="txtInstagram" value="@if($info){{$info->instagram}}@endif" type="text" class="form-control">
			                                        </div>
			                                    </div>
											</div>
											<div class="tab-pane" id="tab15" aria-labelledby="base-tab12">
												<div class="form-group">
			                                        <h5>
			                                        	@lang('general.seoTitle')
			                                        </h5>
			                                        <div class="controls">
			                                            <input name="txtSeoTitle" value="@if($info){{$info->seo_title}}@endif" type="text"  class="form-control" placeholder="@lang('general.seoTitle')">
			                                        </div>
			                                    </div>
			                                    <div class="form-group">
			                                        <h5>
			                                        	@lang('general.seoDescription')
			                                        </h5>
			                                        <div class="controls">
			                                            <input name="txtSeoDescription" value="@if($info){{$info->seo_description}}@endif" type="text"  class="form-control" placeholder="@lang('general.seoDescription')">
			                                        </div>
			                                    </div>
			                                    <div class="form-group">
			                                        <h5>
			                                        	@lang('general.seoKeywords')
			                                        </h5>
			                                        <div class="controls">
			                                            <input name="txtSeoKeywords" value="@if($info){{$info->seo_key_words}}@endif" type="text"  class="form-control" placeholder="@lang('general.seoKeywords')">
			                                        </div>
			                                    </div>
											</div>
											<div class="tab-pane" id="tab16" aria-labelledby="base-tab12">
												<div class="row">
													<div class="col-md-6">
														<h3 class="card-title text-center">{{__('general.logo')}}</h3>
						                                <div class="card border-blue border-lighten-2">
						                                    <div class="text-center">
						                                        <div class="card-body">
						                                            <img class="imagePreview" style="width: 100%; height: 100%;" id="previewImage" @if($info->logo_url) src="{{url('')}}/{{$info->logo_url}}"@else src="{{url('')}}/assets/admin/images/no-image.jpg" @endif alt="{{__('general.image')}}">
						                                            
						                                        </div>
						                                        <div class="text-center">
						                                            <a href="javascript:;" class="btn btn-social-icon btn-outline-danger mr-1 mb-1 deleteImage" data-trigger="hover" data-toggle="tooltip" data-placement="bottom" data-popup="tooltip-custom" data-original-title="{{__('general.deleteImage')}}" data-bg-color="pink">
						                                            <span class="la la-trash"></span>
						                                            </a>
						                                            <a data-input="image" data-preview="previewImage" href="javascript:;" class="btn btn-social-icon btn-outline-success mb-1 selectImage" data-trigger="hover" data-toggle="tooltip" data-placement="bottom" data-popup="tooltip-custom" data-original-title="{{__('general.selectImage')}}" data-bg-color="pink">
						                                            <span class="la la-plus-circle font-medium-4"></span>
						                                            </a>
						                                        </div>
						                                        <input value="{{$info->logo_url}}" type="hidden" id="image" type="text" class="form-control" placeholder="{{__('general.imageUrl')}}" name="logoUrl">
						                                    </div>
						                                </div>
													</div>
													<div class="col-md-6">
														<h3 class="card-title text-center">{{__('general.favicon')}}</h3>
						                                <div class="card border-blue border-lighten-2">
						                                    <div class="text-center">
						                                        <div class="card-body">
						                                            <img class="imagePreviewFavicon" style="width: 100%; height: 100%;" id="previewImageFavicon" @if($info->favicon_url) src="{{url('')}}/{{$info->favicon_url}}"@else src="{{url('')}}/assets/admin/images/no-image.jpg" @endif alt="{{__('general.favicon')}}">
						                                        </div>
						                                        <div class="text-center">
						                                            <a href="javascript:;" class="btn btn-social-icon btn-outline-danger mr-1 mb-1 deleteImageFavicon" data-trigger="hover" data-toggle="tooltip" data-placement="bottom" data-popup="tooltip-custom" data-original-title="{{__('general.deleteImage')}}" data-bg-color="pink">
						                                            <span class="la la-trash"></span>
						                                            </a>
						                                            <a data-input="imageFavicon" data-preview="previewImageFavicon" href="javascript:;" class="btn btn-social-icon btn-outline-success mb-1 selectImageFavicon" data-trigger="hover" data-toggle="tooltip" data-placement="bottom" data-popup="tooltip-custom" data-original-title="{{__('general.selectImage')}}" data-bg-color="pink">
						                                            <span class="la la-plus-circle font-medium-4"></span>
						                                            </a>
						                                        </div>
						                                        <input value="{{$info->favicon_url}}" type="hidden" id="imageFavicon" type="text" class="form-control" placeholder="{{__('general.imageUrl')}}" name="faviconUrl">
						                                    </div>
						                                </div>
													</div>
												</div>
											</div>
			                            </div>
			                            <div class="form-actions right">
			                              	<button onclick="location.href='{{route('getIndexAdmin')}}'" type="button" class="btn btn-danger mr-1">
			                                	<i class="ft-x"></i> {{__('general.cancel')}}
			                              	</button>
				                            <button type="submit" class="btn btn-success">
			                              		<i class="la la-check-square-o"></i> {{__('general.saveChanges')}}
			                            	</button>
			                          	</div>
								    </form>
								</div>
							</div>
						</div>
					</div>
				</section>
        	</div>
		</div>
	</div>
</div>
<?php
	if(isset($phoneData))
	{
		$phoneData = unserialize($info->phone);
	}
	if(isset($emailData))
	{
		$emailData = unserialize($info->email);
	}
	
	if(isset($addressData))
	{
		$addressData = unserialize($info->address);
	}
	
?>
<script>

var row = <?php if(isset($phoneData)){echo count($phoneData);}else{echo '0';} ?>;
function addPhoneNumber(){
    html = '<tr id="rowPhone'+row+'">';
    html += '<td class="center"> <input name="txtTitlePhone[]" value="" type="text" class="form-control" placeholder="@lang("general.title")"></td>';
    html += '<td class="center"> <input name="txtPhone[]" value="" type="number" class="form-control" placeholder="Số Điện Thoại"></td>';
    html += '<td class="center"><a href="javascript:void(0)" onclick="$(\'#rowPhone'+row+'\').remove();" class="btn mr-1 mb-1 btn-danger btn-sm"><i class="la la-trash"></i></a></td></tr>';
    $('#contentPhone').append(html);
    row++;
}
</script>
<script>
function addEmail(){
	var row = <?php if(isset($emailData)){echo count($phoneData);}else{echo '0';} ?>;
    html = '<tr id="rowMail'+row+'">';
    html += '<td class="center"> <input name="txtTitleMail[]" value="" type="text" class="form-control" placeholder="@lang("general.title")"></td>';
    html += '<td class="center"> <input name="txtMail[]" value="" type="email" class="form-control" placeholder="Email"></td>';
    html += '<td class="center"><a href="javascript:void(0)" onclick="$(\'#rowMail'+row+'\').remove();" class="btn mr-1 mb-1 btn-danger btn-sm"><i class="la la-trash"></i></a></td></tr>';
    $('#contentMail').append(html);
    row++;
}
</script>
<script>
function addAddress(){
	var row = <?php if(isset($addressData)){echo count($phoneData);}else{echo '0';} ?>;
    html = '<tr id="rowAddress'+row+'">';
    html += '<td class="center"> <input name="txtTitleAddress[]" value="" type="text" class="form-control" placeholder="@lang("general.title")"></td>';
    html += '<td class="center"> <input name="txtAddress[]" value="" type="text" class="form-control" placeholder="Địa Chỉ"></td>';
    html += '<td class="center"><a href="javascript:void(0)" onclick="$(\'#rowAddress'+row+'\').remove();" class="btn mr-1 mb-1 btn-danger btn-sm"><i class="la la-trash"></i></a></td></tr>';
    $('#contentAddress').append(html);
    row++;
}
</script>
@stop