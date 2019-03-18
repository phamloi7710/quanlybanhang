@section('title')
Danh Sách Tin Tức
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
                        <h4 class="card-title">Danh Sách Tin Tức</h4>
                    </div>
                </div>
            </div>
            <div class="content-header-right col-md-6 col-12">
                <div class="dropdown float-md-right">
                    <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('getIndexAdmin')}}">{{__('general.home')}}</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Tin Tức</a>
                            </li>
                            <li class="breadcrumb-item active">Danh Sách Tin Tức
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
                            <a href="{{route('getAddNewsAdmin')}}" class="btn btn-success round btn-glow">{{__('general.addNew')}}</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-center">Tiêu Đề</th>
                                        <th class="text-center">Ảnh Đại Diện</th>
                                        <th class="text-center">Danh Mục</th>
                                        <th class="text-center">Lượt Xem</th>
                                        <th class="text-center">Trạng Thái</th>
                                        <th class="text-center">Trang Chủ</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($news as $value)
                                    <tr id="cateRow-{{$value->id}}">
                                        <td>{{$value->title}}</td>
                                        <td class="text-center"><img width="100" src="{{url('')}}/{{$value->image}}" alt=""></td>
                                        <td class="text-center">{{$value->category->name}}</td>
                                        <td class="text-center">{{$value->views}}</td>
                                        <td class="text-center">
                                            @if($value->status=='active')
                                            <span class="badge badge-default badge-success">Đang Hoạt Động</span>
                                            @else
                                            <span class="badge badge-default badge-danger">Không Hoạt Động</span>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            @if($value->status_home=='active')
                                            <span class="badge badge-default badge-success">Đang Hiển Thị</span>
                                            @else
                                            <span class="badge badge-default badge-danger">Không Hiển Thị</span>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <span class="dropdown">
                                                <button id="btnSearchDrop2" type="button" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true" class="btn btn-primary btn-sm dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                                                <span aria-labelledby="btnSearchDrop2" class="dropdown-menu mt-1 dropdown-menu-right">
                                                    <a href="{{route('getEditNewsAdmin', ['id'=>$value->id])}}" class="dropdown-item"><i class="ft ft-edit-2"></i> Xem & Sửa</a>
                                                    <a href="javascript:;" id="deleteNews-{{$value->id}}" class="dropdown-item red"><i class="ft-trash-2"></i> Xoá</a>
                                                </span>
                                            </span>
                                        </td>
                                    </tr>
                                    <script>
                                        $(document).ready(function(){
                                            $('#deleteNews-{{$value->id}}').on('click',function(){
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
                                                        var id = {{$value->id}};
                                                        $.ajaxSetup({
                                                            headers: {
                                                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                                            }
                                                        });
                                                        $.ajax({
                                                            url: "/admin/news/delete/"+id+"",
                                                            method: 'get',
                                                            data: {
                                                                "id": id,
                                                            },
                                                            success: function(resp)
                                                            {
                                                                $('#cateRow-{{$value->id}}').remove();
                                                                swal({
                                                                        title: "Thành Công",
                                                                        text: "Dữ Liệu Của Bạn Đã Được Xoá Thành Công!",
                                                                        icon: "success",
                                                                });
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
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@stop