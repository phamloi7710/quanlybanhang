@section('title')
Tất Cả Tài Khoản
@stop
@extends('admin.general.master')
@section('content') 
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12">
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <h4 class="card-title">@if(getUrl() == route('getListUsersAdmin')) Tất Cả Tài Khoản @elseif(getUrl() == route('getListUsersAdmin', ['is_admin'=>'true'])) Tài Khoản Quản Trị @elseif(getUrl() == route('getListUsersAdmin', ['is_admin'=>'false'])) Tài Khoản Khách Hàng @endif</h4>
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
                            <li class="breadcrumb-item active">@if(getUrl() == route('getListUsersAdmin')) Tất Cả Tài Khoản @elseif(getUrl() == route('getListUsersAdmin', ['is_admin'=>'true'])) Tài Khoản Quản Trị @elseif(getUrl() == route('getListUsersAdmin', ['is_admin'=>'false'])) Tài Khoản Khách Hàng @endif
                            </li>
                        </ol>
                </div>
            </div>
        </div>
        <div class="content-detached content-left">
            <div class="content-body">
                <section class="card">
                    <div class="card-header">
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <a href="{{route('getAddUserAdmin')}}" class="btn btn-success round btn-glow">{{__('general.addNew')}}</a>
                    </div>
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
                                        <th class="text-center"></th>
                                    </tr>
                                </thead>
                                @if(count($users) > '0')
                                <tbody>
                                    @foreach($users as $user)
                                    <tr>
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
                                        <td>
                                            <span class="dropdown">
                                                <button id="btnSearchDrop2" type="button" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                                                <span aria-labelledby="btnSearchDrop2" class="dropdown-menu mt-1 dropdown-menu-right">
                                                <a href="#" class="dropdown-item"><i class="ft ft-edit-2"></i> Xem & Sửa</a>
                                                <a href="{{route('getChangePasswordUserAdmin', ['id'=>$user->id, 'slug'=>$user->slug])}}" class="dropdown-item"><i class="ft ft-lock"></i> Đổi mật khẩu</a>
                                                <a href="javascript:;" id="deleteContact-" class="dropdown-item red"><i class="ft-trash-2"></i> Xoá</a>
                                                </span>
                                                </span>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                
                            </table>
                            @else
                            </table>
                            <b style="text-align: center;">Không Có Tài Khoản Nào Được Tìm Thấy!</b>
                            @endif
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="sidebar-detached sidebar-right sidebar-sticky" ,=",">
            
                <div class="sidebar">
                    <div class="sidebar-content card d-none d-lg-block">
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
@stop