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
            <!-- <div class="content-header-right col-md-6 col-12">
                <div class="dropdown float-md-right">
                    <a href="{{route('getAddProduct')}}" class="btn btn-outline-success btn-min-width btn-glow mr-1 mb-1">Thêm Mới</a>
                </div>
            </div> -->
        </div>
        <div class="content-body">
            <!-- Description -->
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
                                <div class="col-md-3">
                                    <div class="card border-pink border-lighten-2">
                                        <div class="text-center">
                                            <div class="card-body">
                                                <img src="{{url('')}}/assets/admin/app-assets/images/portrait/medium/avatar-m-1.png" class="rounded-circle  height-150"
                                                    alt="Card image">
                                            </div>
                                            <!-- <div class="card-body">
                                                <h4 class="card-title">Joseph Ryan</h4>
                                                <h6 class="card-subtitle text-muted">Marketing Head</h6>
                                            </div> -->
                                            <div class="text-center">
                                                <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-facebook">
                                                <span class="la la-facebook"></span>
                                                </a>
                                                <a href="#" class="btn btn-social-icon mb-1 btn-outline-linkedin">
                                                <span class="la la-linkedin font-medium-4"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput1">{{__('general.productName')}}</label>
                                                <input name="txtName" type="text" class="form-control" placeholder="First Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput1">{{__('general.productName')}}</label>
                                                <input name="txtName" type="text" class="form-control" placeholder="First Name">
                                            </div>
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