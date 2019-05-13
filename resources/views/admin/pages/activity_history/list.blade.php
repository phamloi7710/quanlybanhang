@section('title')
{{__('general.activityHistory')}}
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
                        <h4 class="card-title">{{__('general.allContact')}}</h4>
                    </div>
                </div>
            </div>
            <div class="content-header-right col-md-6 col-12">
                <div class="dropdown float-md-right">
                    <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('getIndexAdmin')}}">{{__('general.home')}}</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">{{__('general.system')}}</a>
                            </li>
                            <li class="breadcrumb-item active">{{__('general.activityHistory')}}
                            </li>
                        </ol>
                </div>
            </div>
        </div>
        <div class="content-detached">
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
                                                            <th>Hoạt Động</th>
                                                            <th>Thao Tác Bởi</th>
                                                            <th>Chi Tiết Thay Đổi</th>
                                                            <th>Thời Gian</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($activity as $item)
                                                        <tr id="contactRow-">
                                                            <td>
                                                                {{$item->description}}
                                                            </td>
                                                            <td class="text-center">
                                                                {{$item->user['name']}}
                                                            </td>
                                                            <td>
                                                                @foreach($item->properties as $property)
                                                                {{$property}} <br>
                                                                @endforeach
                                                            </td>
                                                            <td class="text-center">
                                                                {{date_format($item->created_at,"H:i d/m/Y")}}
                                                            </td>
                                                            <td>
                                                                <span class="dropdown">
                                                                <button id="btnSearchDrop2" type="button" data-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                                                                <span aria-labelledby="btnSearchDrop2" class="dropdown-menu mt-1 dropdown-menu-right">
                                                                <a href="#" class="dropdown-item" data-toggle="modal" data-target=".modalUpdateContact-"><i class="ft-edit-2"></i> {{__('general.viewAndEdit')}}</a>
                                                                <a href="javascript:;" id="deleteContact-" class="dropdown-item red"><i class="ft-trash-2"></i> {{__('general.delete')}}</a>
                                                                </span>
                                                                </span>
                                                            </td>
                                                        </tr>
                                                        <script>
                                                            $(document).ready(function(){
                                                                $('#deleteContact-').on('click',function(){
                                                                    swal({
                                                                        title: "{{__('swal.title.titleDelete')}}",
                                                                        text: "{{__('swal.text.textDelete')}}",
                                                                        icon: "warning",
                                                                        showCancelButton: true,
                                                                        showLoaderOnConfirm: true,
                                                                        buttons: {
                                                                            cancel: {
                                                                                text: "{{__('swal.button.cancel')}}",
                                                                                value: null,
                                                                                visible: true,
                                                                                className: "btn-warning",
                                                                                closeModal: false,
                                                                            },
                                                                            confirm: {
                                                                                text: "{{__('swal.button.confirm')}}",
                                                                                value: true,
                                                                                visible: true,
                                                                                className: "",
                                                                                closeModal: false
                                                                            }
                                                                        }
                                                                    }).then(isConfirm => {
                                                                        if (isConfirm) {
                                                                            var id = ;
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
                                                                                    $('#contactRow-').remove();
                                                                                    swal({
                                                                                            title: "{{__('swal.title.success')}}",
                                                                                            text: "{{__('swal.text.successDelete')}}",
                                                                                            icon: "success",
                                                                                    });
                                                                                }
                                                                            })
                                                                            
                                                                        } else {
                                                                            swal("{{__('swal.title.cancel')}}", "{{__('swal.text.errorDelete')}}", "error");
                                                                        }
                                                                    });
                                                                });
                                                            });
                                                            </script>
                                                        @endforeach
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Hoạt Động</th>
                                                            <th>Thao Tác Bởi</th>
                                                            <th>Chi Tiết Thay Đổi</th>
                                                            <th>Thời Gian</th>
                                                            <th></th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                                <div class="text-center">
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
    </div>
</div>
@stop