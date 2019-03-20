@section('title')
{{__('general.listNewsCate')}}
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
                        <h4 class="card-title">{{__('general.listNewsCate')}}</h4>
                    </div>
                </div>
            </div>
            <div class="content-header-right col-md-6 col-12">
                <div class="dropdown float-md-right">
                    <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('getIndexAdmin')}}">{{__('general.home')}}</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">{{__('general.news')}}</a>
                            </li>
                            <li class="breadcrumb-item active">{{__('general.listNewsCate')}}
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
                            <a href="{{route('getAddNewsCategoryAdmin')}}" class="btn btn-success round btn-glow">{{__('general.addNew')}}</a>
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
                                                    <a href="{{route('getEditNewsCategoryAdmin', ['id'=>$value->id])}}" class="dropdown-item blue"><i class="ft-edit-2"></i> {{__('general.edit')}}</a>
                                                    <a href="javascript:;" id="deleteNewsCate-{{$value->id}}" class="dropdown-item red"><i class="ft-trash"></i> {{__('general.delete')}}</a>
                                                </span>
                                            </span>
                                        </td>
                                    </tr>
                                    <script>
                                        $(document).ready(function () {
                                            $('#deleteNewsCate-{{$value->id}}').on('click', function () {
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
                                                        var id = {{$value -> id}};
                                                        $.ajaxSetup({
                                                            headers: {
                                                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                                            }
                                                        });
                                                        $.ajax({
                                                            url: "/admin/news/news-category/delete/" + id + "",
                                                            method: 'get',
                                                            type: 'delete',
                                                            data: {
                                                                "id": id,
                                                            },
                                                            success: function (responsive) {
                                                                if ( responsive.status === 'success' ) {
                                                                    $('#cateRow-{{$value->id}}').remove();
                                                                    swal({
                                                                    title: "{{__('swal.title.success')}}",
                                                                    text: "{{__('swal.text.successDelete')}}",
                                                                    icon: "success",
                                                                });
                                                                }
                                                                else if ( responsive.status === 'failed' ) {
                                                                    swal({
                                                                        title: "{{__('swal.title.error')}}",
                                                                        text: "{{__('swal.text.errorDeleteNewsCate')}}",
                                                                        icon: "error",
                                                                    });
                                                                }
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