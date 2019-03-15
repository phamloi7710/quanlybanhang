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
                    <div class="card-body table-responsive">
                        <table class="table table-bordered mb-0">
                            <thead>
                                <tr>
                                    <th>Tên Sản Phẩm</th>
                                    <th>Ảnh Đại Diện</th>
                                    <th>Danh Mục</th>
                                    <th>Số Lượng</th>
                                    <th>Giá</th>
                                    <th>Trạng Thái</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody class="font-small-3">
                                @foreach($products as $product)
                                <tr>
                                    <td>{{$product->name}}</td>
                                    <td class="center"><img width="50" src="{{url('')}}{{$product->avatar}}"></td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-outline-success round">{{$product->category->name}}</button>
                                    </td>
                                    <td>{{$product->qty}}</td>
                                    <td class="font-small-3">
                                        <p><span class="text-bold-700">Giá Nhập:</span> <span class="blue">{{number_format($product->price_import, 0,',','.')}} (đ)</span></p>
                                        <p><span class="text-bold-700">Giá Bán:</span> <span class="blue">{{number_format($product->price, 0,',','.')}} (đ)</span></p>
                                        <p><span class="text-bold-700">Giá Khuyến Mãi:</span> <span class="blue">{{number_format($product->price_sale, 0,',','.')}} (đ)</span></p>
                                    </td>
                                    <td>{{$product->status}}</td>
                                    <td>
                                        <span class="dropdown">
                                            <button id="btnSearchDrop2" type="button" data-toggle="dropdown" aria-haspopup="true"
                                          aria-expanded="false" class="btn btn-info btn-sm dropdown-toggle">{{__('general.option')}}</button>
                                            <span aria-labelledby="btnSearchDrop2" class="dropdown-menu mt-1 dropdown-menu-right">
                                                <a href="{{route('getEditProductAdmin', ['id'=>$product->id])}}" class="dropdown-item blue"><i class="ft-edit-2"></i> {{__('general.edit')}}</a>
                                                <a href="#" class="dropdown-item red"><i class="ft-trash"></i> {{__('general.delete')}}</a>
                                            </span>
                                        </span>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                          </table>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>