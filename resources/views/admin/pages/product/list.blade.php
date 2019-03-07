@extends('admin.general.master')
@section('content') 
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12">
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <h4 class="card-title">{{__('title.listProduct')}}</h4>
                    </div>
                </div>
            </div>
            <div class="content-header-right col-md-6 col-12">
                <div class="dropdown float-md-right">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('getIndexAdmin')}}">{{__('general.home')}}</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">{{__('general.product')}}</a>
                        </li>
                        <li class="breadcrumb-item active">{{__('title.listProduct')}}
                        </li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="content-body">
            <!-- Description -->
            <section id="description" class="card">
                <div class="card-header">
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <a href="{{route('getAddProductAdmin')}}" class="btn btn-success round btn-glow">{{__('general.addNew')}}</a>
                                </div>
                            </div>
                <div class="card-content">
                    <div class="card-body">
                        <table class="table table-bordered mb-0">
                            <thead>
                                <tr>
                                    <th>Hàng Hóa</th>
                                    <th>Mã Hàng</th>
                                    <th>Số Lượng</th>
                                    <th>Giá Bán</th>
                                    <th>Nhóm Hàng</th>
                                    <th>Nhà Sản Suất</th>
                                    <th>Hình Ảnh</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>John</td>
                                    <td>John</td>
                                    <td>John</td>
                                    <td>John</td>
                                    <td>John</td>
                                    <td>John</td>
                                    <td>John</td>
                                    <td>John</td>
                                </tr>
                            </tbody>
                          </table>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>