@extends('admin.general.master')
@section('content') 
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block">Danh Sách Hàng Hóa</h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Trang Chủ</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Hàng Hóa</a>
                            </li>
                            <li class="breadcrumb-item active">Danh Sách Hàng Hóa
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="content-header-right col-md-6 col-12">
                <div class="dropdown float-md-right">
                    <a href="{{route('getAddProduct')}}" class="btn btn-outline-success btn-min-width btn-glow mr-1 mb-1">Thêm Mới</a>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Description -->
            <section id="description" class="card">
                <div class="card-header">
                    <h4 class="card-title">Description</h4>
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