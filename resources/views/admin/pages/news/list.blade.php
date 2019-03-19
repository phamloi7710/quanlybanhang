@section('title')
{{__('general.listNews')}}
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
                            <li class="breadcrumb-item"><a href="#">{{__('general.news')}}</a>
                            </li>
                            <li class="breadcrumb-item active">{{__('general.listNews')}}
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
                                        <th class="text-center">{{__('general.title')}}</th>
                                        <th class="text-center">{{__('general.avatar')}}</th>
                                        <th class="text-center">{{__('general.cateNews')}}</th>
                                        <th class="text-center">{{__('general.view')}}</th>
                                        <th class="text-center">{{__('general.status')}}</th>
                                        <th class="text-center">{{__('general.home')}}</th>
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
                                            <span class="badge badge-default badge-success">{{__('general.active')}}</span>
                                            @else
                                            <span class="badge badge-default badge-danger">{{__('general.inActive')}}</span>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            @if($value->status_home=='active')
                                            <span class="badge badge-default badge-success">{{__('general.displayed')}}</span>
                                            @else
                                            <span class="badge badge-default badge-danger">{{__('general.notDisplayed')}}</span>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <span class="dropdown">
                                                <button id="btnSearchDrop2" type="button" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true" class="btn btn-primary btn-sm dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                                                <span aria-labelledby="btnSearchDrop2" class="dropdown-menu mt-1 dropdown-menu-right">
                                                    <a href="{{route('getEditNewsAdmin', ['id'=>$value->id])}}" class="dropdown-item"><i class="ft ft-edit-2"></i> {{__('general.viewAndEdit')}}</a>
                                                    <a href="javascript:;" id="deleteNews-{{$value->id}}" class="dropdown-item red"><i class="ft-trash-2"></i> {{__('general.delete')}}</a>
                                                </span>
                                            </span>
                                        </td>
                                    </tr>
                                    <script>
                                        $(document).ready(function(){
                                            $('#deleteNews-{{$value->id}}').on('click',function(){
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
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@stop