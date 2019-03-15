@extends('admin.general.master')
@section('content') 
<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/app-assets/vendors/css/tables/datatable/datatables.min.css">
<script src="{{url('')}}/assets/admin/app-assets/vendors/js/tables/datatable/datatables.min.js" type="text/javascript"></script>
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12">
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <h4 class="card-title">Tất cả liên hệ</h4>
                    </div>
                </div>
            </div>
            <div class="content-header-right col-md-6 col-12">
                <div class="dropdown float-md-right">
                    <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('getIndexAdmin')}}">{{__('general.home')}}</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Liên hệ</a>
                            </li>
                            <li class="breadcrumb-item active">Tất cả liên hệ
                            </li>
                        </ol>
                </div>
            </div>
        </div>
        <div class="content-detached content-left">
            <div class="content-body">
                <section class="row">
                    <div class="col-12">
                        <div class="card">
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
                                                        @foreach($contacts as $contact)
                                                        <tr id="contactRow-{{$contact->id}}">
                                                            <td class="text-center">
                                                                {{$contact->name}}
                                                            </td>
                                                            <td class="text-center">
                                                                {{$contact->email}}
                                                            </td>
                                                            <td class="text-center">
                                                                {{$contact->phone}}
                                                            </td>
                                                            <td class="text-center">
                                                                <span class="badge badge-default @if($contact->status=='true') badge-success @else badge-danger @endif">@if($contact->status=='true') Đã Liên Hệ @else Chưa Liên Hệ @endif</span>
                                                            </td>
                                                            <td>
                                                                <span class="dropdown">
                                                                <button id="btnSearchDrop2" type="button" data-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                                                                <span aria-labelledby="btnSearchDrop2" class="dropdown-menu mt-1 dropdown-menu-right">
                                                                <a href="#" class="dropdown-item" data-toggle="modal" data-target=".modalUpdateContact-{{$contact->id}}"><i class="ft-edit-2"></i> Xem & Sửa</a>
                                                                <a href="javascript:;" id="deleteContact-{{$contact->id}}" class="dropdown-item red"><i class="ft-trash-2"></i> Xoá</a>
                                                                </span>
                                                                </span>
                                                            </td>
                                                        </tr>
                                                        <script>
                                                            $(document).ready(function(){
                                                                $('#deleteContact-{{$contact->id}}').on('click',function(){
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
                                                                            var id = {{$contact->id}};
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
                                                                                    $('#contactRow-{{$contact->id}}').remove();
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
                                                {{$contacts->links()}}
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
        <div class="sidebar-detached sidebar-right" ,=",">
            <div class="sidebar">
                <div class="bug-list-sidebar-content">
                    <div class="card">
                        <div class="card-body">
                            <div class="list-group">
                                <a href="{{route('getContactAdmin')}}" class="list-group-item @if(getUrl() == route('getContactAdmin')) active @else list-group-item-action @endif">Tất Cả Liên Hệ</a>
                                <a href="{{route('getContactAdmin', ['status'=>'true'])}}" class="list-group-item @if(getUrl() == route('getContactAdmin', ['status'=>'true'])) active @else list-group-item-action @endif">Đã Liên Hệ</a>
                                <a href="{{route('getContactAdmin', ['status'=>'false'])}}" class="list-group-item @if(getUrl() == route('getContactAdmin', ['status'=>'false'])) active @else list-group-item-action @endif">Chưa Liên Hệ</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@foreach($contacts as $contact)
<div class="modal fade text-left modalUpdateContact-{{$contact->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h3 class="modal-title white"> Thông Tin Chi Tiết Liên Hệ</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="{{route('postContactAdmin', ['id'=>$contact->id])}}">
                @csrf
                <div class="modal-body">
                    <fieldset class="form-group floating-label-form-group">
                        <label>Họ Và Tên</label>
                        <input value="{{$contact->name}}" type="text" class="form-control" disabled="">
                    </fieldset>
                    <fieldset class="form-group floating-label-form-group">
                        <label>Địa Chỉ Email</label>
                        <input value="{{$contact->email}}" type="email" class="form-control" disabled="">
                    </fieldset>
                    <fieldset class="form-group floating-label-form-group">
                        <label>Số Điện Thoại</label>
                        <input value="{{$contact->phone}}" type="text" class="form-control" disabled="">
                    </fieldset>
                    <fieldset class="form-group floating-label-form-group">
                        <label for="title1">Nội Dung</label>
                        <textarea class="form-control" id="title1" rows="4" placeholder="Nội dung của người muốn liên hệ" disabled="">{{$contact->content}}</textarea>
                    </fieldset>
                    <fieldset class="form-group floating-label-form-group">
                        <label for="title1">Trạng Thái</label>
                        <div class="controls">
                            <div class="skin skin-flat">
                                <input type="radio" value="true" name="status" id="true" @if($contact->status == 'true') checked @endif>
                                <label for="true">Đã Liên Hệ</label>
                            </div>
                            <div class="skin skin-flat">
                                <input type="radio" value="false" name="status" id="false" @if($contact->status == 'false') checked @endif>
                                <label for="false">Chưa Liên Hệ</label>
                            </div>
                        </div>
                    </fieldset>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Đóng</button>
                    <button type="submit" class="btn btn-outline-success">Cập Nhật Thay Đổi</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach


@stop