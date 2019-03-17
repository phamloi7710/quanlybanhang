@section('title')
Tất Cả Tài Khoản
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
                        <h4 class="card-title">Tất cả tài khoản</h4>
                    </div>
                </div>
            </div>
            <div class="content-header-right col-md-6 col-12">
                <div class="dropdown float-md-right">
                    <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('getIndexAdmin')}}">{{__('general.home')}}</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{route('getListUsersAdmin')}}">Tài khoản</a>
                            </li>
                            <li class="breadcrumb-item active">Tất cả tài khoản
                            </li>
                        </ol>
                </div>
            </div>
        </div>
        <div class="content-detached">
            <div class="content-body">
                <section class="card">
                    <div class="card-header">
                        <form action="{{route('getListUsersAdmin')}}" method="get" class="form-horizontal">
                            <div class="row">
                                <div class="col-lg-2 col-md-6">
                                    <div class="form-group">
                                        <input value="{{$name}}" type="text" class="form-control" placeholder="Họ và tên" name="name">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-6">
                                    <div class="form-group">
                                        <input value="{{$email}}" type="text" class="form-control" placeholder="Email" name="email">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-6">
                                    <div class="form-group">
                                        <input value="{{$phone}}" type="text" class="form-control" placeholder="Số Điện Thoại" name="phone">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-6">
                                    <div class="form-group">
                                        <select name="type" class="form-control">
                                            <option value="">Loại Tài Khoản</option>
                                            <option value="true">Tài khoản quản trị</option>
                                            <option value="false">Tài khoản khách hàng</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-6">
                                    <div class="form-group">
                                        <select name="status" class="form-control">
                                            <option value="">Trạng Thái</option>
                                            <option value="active">Đang hoạt động</option>
                                            <option value="inActive">Đã khoá</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-6">
                                    <button type="submit" class="btn btn-primary">Lọc</button>
                                </div>
                            </div>
                        </form>
                        <!-- <div class="heading-elements">
                            <a href="{{route('getAddUserAdmin')}}" class="btn btn-success">{{__('general.addNew')}}</a>
                        </div> -->
                    </div>
                    <div class="card-content">
                        <div class="card-body table-responsive">
                            <table id="users-contacts" class="table table-white-space table-bordered row-grouping display no-wrap icheck table-middle">
                                <thead>
                                    <tr>
                                        <th class="text-center">Họ & Tên</th>
                                        <th class="text-center">Email</th>
                                        <th class="text-center">Số Điện Thoại</th>
                                        <th class="text-center">Loại Tài Khoản</th>
                                        <th class="text-center">Trạng Thái</th>
                                        <th class="text-center"><a href="{{route('getAddUserAdmin')}}" class="btn btn-success round btn-glow btn-sm">Thêm tài khoản</a></th>
                                    </tr>
                                </thead>
                                @if(count($users) > '0')
                                <tbody>
                                    @foreach($users as $user)
                                    <tr id="userRow-{{$user->id}}">
                                        <td>
                                            {{$user->name}}
                                        </td>
                                        <td class="text-center">
                                            <a href="mailto:{{$user->email}}">{{$user->email}}</a>
                                        </td>
                                        <td>{{$user->phone}}</td>
                                        <td class="text-center">
                                            @if($user->is_admin == 'true')
                                                <button type="button" class="btn btn-sm btn-outline-success round">Quản Trị Viên</button>
                                            @elseif($user->is_admin == 'false')
                                                <button type="button" class="btn btn-sm btn-outline-primary round">Khách Hàng</button>
                                            @else
                                                <button type="button" class="btn btn-sm btn-outline-danger round">Không Rõ</button>
                                            @endif
                                        </td>
                                        <td>
                                            @if($user->status == 'active')
                                                <span class="badge badge-default badge-success">
                                                    Đang Hoạt Động
                                                </span>
                                            @elseif($user->status == 'inActive')
                                                <span class="badge badge-default badge-danger">
                                                    Đã Khoá
                                                </span>
                                            @else
                                                <p>Không Rõ</p>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <span class="dropdown">
                                                <button id="btnSearchDrop2" type="button" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true" class="btn btn-primary btn-sm dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                                                <span aria-labelledby="btnSearchDrop2" class="dropdown-menu mt-1 dropdown-menu-right">
                                                
                                                    <a href="{{route('getEditUserAdmin', ['id'=>$user->id, 'slug'=>$user->slug])}}" class="dropdown-item"><i class="ft ft-edit-2"></i> Xem & Sửa</a>
                                                
                                                <a href="{{route('getChangePasswordUserAdmin', ['id'=>$user->id, 'slug'=>$user->slug])}}" class="dropdown-item"><i class="ft ft-lock"></i>Đổi mật khẩu</a>
                                                @if($user->supper_admin == 'false' && $user->id != Auth::user()->id)
                                                    <a href="javascript:;" id="deleteUser-{{$user->id}}" class="dropdown-item red"><i class="ft-trash-2"></i> Xoá</a>
                                                @endif
                                                </span>
                                            </span>
                                        </td>
                                    </tr>
                                    <script>
                                        $(document).ready(function(){
                                            $('#deleteUser-{{$user->id}}').on('click',function(){
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
                                                            url: "/admin/user/delete/"+id+".html",
                                                            method: 'get',
                                                            data: {
                                                                "id": id,
                                                            },
                                                            success: function(resp)
                                                            {
                                                                $('#userRow-{{$user->id}}').remove();
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
                            @else
                            </table>
                            <b style="text-align: center;">Không Có Tài Khoản Nào Được Tìm Thấy!</b>
                            @endif
                            <div class="text-center">
                                {{$users->links()}}
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
@stop