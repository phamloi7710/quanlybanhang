@section('title')
Tất Cả Danh Mục Sản Phẩm
@stop
@extends('admin.general.master')
@section('content') 
<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12">
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <h4 class="card-title">{{__('general.categoryList')}}</h4>
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
                        <li class="breadcrumb-item active">{{__('general.allCategory')}}
                        </li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="content-body">
            <section class="card">
                <div class="card-content">
                    <div class="card-header">
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <a href="{{route('getAddCateAdmin')}}" class="btn btn-success round btn-glow">{{__('general.addNew')}}</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered mb-0">
                                <thead>
                                    <tr>
                                        <th>{{__('general.id')}}</th>
                                        <th>{{__('general.categoryName')}}</th>
                                        <th>{{__('general.status')}}</th>
                                        <th>{{__('general.createdAt')}}</th>
                                        <th>{{__('general.updateAt')}}</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($categories as $value)
                                    <tr id="cateRow-{{$value->id}}">
                                        <td class="text-center">{{$value->id}}</td>
                                        <td>{{$value->name}}</td>
                                        <td class="text-center">
                                            @if($value->status=='active')
                                            <span class="badge badge-default badge-success">{{__('general.active')}}</span>
                                            @else
                                            <span class="badge badge-default badge-danger">{{__('general.inActive')}}</span>
                                            @endif
                                        </td>
                                        <td>{{date_format($value->created_at,"H:i d/m/Y")}}</td>
                                        <td>{{date_format($value->updated_at,"H:i d/m/Y")}}</td>
                                        <td class="text-center">
                                            <span class="dropdown">
                                                <button id="btnSearchDrop2" type="button" data-toggle="dropdown" aria-haspopup="true"
                                              aria-expanded="false" class="btn btn-info btn-sm dropdown-toggle">{{__('general.option')}}</button>
                                                <span aria-labelledby="btnSearchDrop2" class="dropdown-menu mt-1 dropdown-menu-right">
                                                    <a href="{{route('getEditCateAdmin', ['id'=>$value->id])}}" class="dropdown-item blue"><i class="ft-edit-2"></i> {{__('general.edit')}}</a>
                                                    <a href="javascript:;" id="deleteCate-{{$value->id}}" class="dropdown-item red"><i class="ft-trash"></i> {{__('general.delete')}}</a>
                                                </span>
                                            </span>
                                        </td>
                                    </tr>
                                    <script>
                                        $(document).ready(function () {
                                            $('#deleteCate-{{$value->id}}').on('click', function () {
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
                                                        var id = {{$value -> id}};
                                                        $.ajaxSetup({
                                                            headers: {
                                                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                                            }
                                                        });
                                                        $.ajax({
                                                            url: "/admin/category/delete/" + id + "",
                                                            method: 'get',
                                                            type: 'delete',
                                                            data: {
                                                                "id": id,
                                                            },
                                                            success: function (responsive) {
                                                                if ( responsive.status === 'success' ) {
                                                                    $('#cateRow-{{$value->id}}').remove();
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
                                    <tr>
                                        <th>{{__('general.id')}}</th>
                                        <th>{{__('general.categoryName')}}</th>
                                        <th>{{__('general.status')}}</th>
                                        <th>{{__('general.createdAt')}}</th>
                                        <th>{{__('general.updateAt')}}</th>
                                        <th></th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@stop