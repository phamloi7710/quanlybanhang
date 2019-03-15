@section('title')
Quản Lý Tài Khoản
@stop
@extends('admin.general.master')
@section('content') 
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12">
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <h4 class="card-title">Quản Lý Tài Khoản</h4>
                    </div>
                </div>
            </div>
            <div class="content-header-right col-md-6 col-12">
                <div class="dropdown float-md-right">
                    <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('getIndexAdmin')}}">{{__('general.home')}}</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Tài Khoản</a>
                            </li>
                            <li class="breadcrumb-item active">Quản Lý Tài Khoản
                            </li>
                        </ol>
                </div>
            </div>
        </div>
        <div class="content-detached content-right">
            <div class="content-body">
                <section class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <button onclick="location.href='{{route('getAddUserAdmin')}}'" class="btn btn-primary btn-sm"><i class="ft-plus white"></i> Thêm Tài Khoản</button>
                                    <span class="dropdown">
                                    <button id="btnSearchDrop1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="btn btn-warning dropdown-toggle dropdown-menu-right btn-sm"><i class="ft-download-cloud white"></i></button>
                                    <span aria-labelledby="btnSearchDrop1" class="dropdown-menu mt-1 dropdown-menu-right">
                                    <a href="#" class="dropdown-item"><i class="ft-upload"></i> Import</a>
                                    <a href="#" class="dropdown-item"><i class="ft-download"></i> Export</a>
                                    <a href="#" class="dropdown-item"><i class="ft-shuffle"></i> Find Duplicate</a>
                                    </span>
                                    </span>
                                    <button class="btn btn-default btn-sm"><i class="ft-settings white"></i></button>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div id="users-contacts_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                                        <div class="row">
                                            <div class="col-sm-12 table-responsive">
                                                <table id="contactData" class="table table-white-space table-bordered row-grouping display no-wrap icheck table-middle">
                                                    <thead>
                                                        <tr>
                                                            <th>Họ Tên</th>
                                                            <th>Email</th>
                                                            <th>Số Điện Thoại</th>
                                                            <th>Trạng Thái</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($users as $user)
                                                        <tr id="contactRow-{{$user->id}}">
                                                            <td class="text-center">
                                                                {{$user->name}}
                                                            </td>
                                                            <td class="text-center">
                                                                {{$user->email}}
                                                            </td>
                                                            <td class="text-center">
                                                                {{$user->phone}}
                                                            </td>
                                                            <td class="text-center">
                                                                <span class="badge badge-default @if($user->status=='true') badge-success @else badge-danger @endif">@if($user->status=='true') Đã Liên Hệ @else Chưa Liên Hệ @endif</span>
                                                            </td>
                                                            <td>
                                                                <span class="dropdown">
                                                                <button id="btnSearchDrop2" type="button" data-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                                                                <span aria-labelledby="btnSearchDrop2" class="dropdown-menu mt-1 dropdown-menu-right">
                                                                <a href="#" class="dropdown-item" data-toggle="modal" data-target=".modalUpdateContact-{{$user->id}}"><i class="ft-edit-2"></i> Xem & Sửa</a>
                                                                <a href="javascript:;" id="deleteContact-{{$user->id}}" class="dropdown-item red"><i class="ft-trash-2"></i> Xoá</a>
                                                                </span>
                                                                </span>
                                                            </td>
                                                        </tr>
                                                        <script>
                                                            $(document).ready(function(){
                                                                $('#deleteContact-{{$user->id}}').on('click',function(){
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
                                                                            var id = {{$user->id}};
                                                                            $.ajaxSetup({
                                                                                headers: {
                                                                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                                                                }
                                                                            });
                                                                            $.ajax({
                                                                                url: "/admin/contact/delete/"+id+".html",
                                                                                method: 'get',
                                                                                data: {
                                                                                    "id": id,
                                                                                },
                                                                                success: function(resp)
                                                                                {
                                                                                    $('#contactRow-{{$user->id}}').remove();
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
                                                    <tfoot>
                                                        <tr>
                                                            <th>Họ Tên</th>
                                                            <th>Email</th>
                                                            <th>Số Điện Thoại</th>
                                                            <th>Trạng Thái</th>
                                                            <th></th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                                <div class="text-center">
                                                {{$users->links()}}
                                            </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="sidebar-detached sidebar-left" ,=",">
            <div class="sidebar">
                <div class="bug-list-sidebar-content">
                    <div class="card">
                        <div class="card-body">
                            <div class="list-group">
                                <a href="{{route('getListUsersAdmin')}}" class="list-group-item @if(getUrl() == route('getListUsersAdmin')) active @else list-group-item-action @endif">Tất Cả Tài Khoản</a>
                                <a href="{{route('getListUsersAdmin', ['is_admin'=>'true'])}}" class="list-group-item @if(getUrl() == route('getListUsersAdmin', ['is_admin'=>'true'])) active @else list-group-item-action @endif">Tài Khoản Quản Trị</a>
                                <a href="{{route('getListUsersAdmin', ['is_admin'=>'false'])}}" class="list-group-item @if(getUrl() == route('getListUsersAdmin', ['is_admin'=>'false'])) active @else list-group-item-action @endif">Tài Khoản Khách Hàng</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop