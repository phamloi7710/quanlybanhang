@extends('admin.general.master')
@section('content') 
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block">Bordered Navigation</h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Trang Chủ</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Hàng Hóa</a>
                            </li>
                            <li class="breadcrumb-item active">Thêm Mới Hàng Hóa
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <section id="description" class="card">
                <div class="card-header">
                    <div class="content-header-right col-md-6 col-12 pull-right">
                        <div class="dropdown float-md-right">
                            <a href="{{route('getAddProduct')}}" class="btn btn-outline-success btn-min-width btn-glow mr-1 mb-1">{{__('general.save')}}</a>
                        </div>
                    </div>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form">
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
                                                <label for="projectinput1">{{__('general.productName')}}</label>
                                                <input name="txtName" type="text" class="form-control round" placeholder="{{__('placeholder.productName')}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput1">{{__('general.productCode')}}</label>
                                                <input name="txtCode" type="text" class="form-control round" placeholder="{{__('placeholder.productCode')}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="projectinput1">{{__('general.category')}}</label>
                                                <select name="sltCate" class="form-control round">
                                                    <option>100</option>
                                                    <option>2</option> 

                                                    <option><a href="">Thêm Mới Danh Mục</a></option>
                                                    <option>Quản Lý Danh Mục</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-1">
                                            <a href="javascript:;" style="margin-top: 30px;" href="#" class="btn btn-outline-info mb-10 btn-sm">
                                               <span class="la la-cog font-medium-4"></span>
                                            </a>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="projectinput1">{{__('general.manufacturer')}}</label>
                                                <select name="sltManufacturer" class="form-control round">
                                                    <option>100</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-1">
                                            <a href="javascript:;" style="margin-top: 30px;" href="#" class="btn btn-outline-info mb-10 btn-sm">
                                               <span class="la la-cog font-medium-4"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@stop