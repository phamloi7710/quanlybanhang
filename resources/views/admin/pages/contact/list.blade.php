@section('title')
{{__('general.contact')}}
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
                            <li class="breadcrumb-item"><a href="#">{{__('general.contact')}}</a>
                            </li>
                            <li class="breadcrumb-item active">{{__('general.allContact')}}
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
                                                            <th>{{__('general.fullName')}}</th>
                                                            <th>{{__('general.emailAddress')}}</th>
                                                            <th>{{__('general.phoneNumber')}}</th>
                                                            <th>{{__('general.status')}}</th>
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
                                                                <span class="badge badge-default @if($contact->status=='true') badge-success @else badge-danger @endif">@if($contact->status=='true') {{__('general.contacted')}} @else {{__('general.notContactedYet')}} @endif</span>
                                                            </td>
                                                            <td>
                                                                <span class="dropdown">
                                                                <button id="btnSearchDrop2" type="button" data-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                                                                <span aria-labelledby="btnSearchDrop2" class="dropdown-menu mt-1 dropdown-menu-right">
                                                                <a href="#" class="dropdown-item" data-toggle="modal" data-target=".modalUpdateContact-{{$contact->id}}"><i class="ft-edit-2"></i> {{__('general.viewAndEdit')}}</a>
                                                                <a href="javascript:;" id="deleteContact-{{$contact->id}}" class="dropdown-item red"><i class="ft-trash-2"></i> {{__('general.delete')}}</a>
                                                                </span>
                                                                </span>
                                                            </td>
                                                        </tr>
                                                        <script>
                                                            $(document).ready(function(){
                                                                $('#deleteContact-{{$contact->id}}').on('click',function(){
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
                                                            <th>{{__('general.fullName')}}</th>
                                                            <th>{{__('general.emailAddress')}}</th>
                                                            <th>{{__('general.phoneNumber')}}</th>
                                                            <th>{{__('general.status')}}</th>
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
                                <a href="{{route('getContactAdmin')}}" class="list-group-item @if(getUrl() == route('getContactAdmin')) active @else list-group-item-action @endif">{{__('general.allContact')}}</a>
                                <a href="{{route('getContactAdmin', ['status'=>'true'])}}" class="list-group-item @if(getUrl() == route('getContactAdmin', ['status'=>'true'])) active @else list-group-item-action @endif">{{__('general.contacted')}}</a>
                                <a href="{{route('getContactAdmin', ['status'=>'false'])}}" class="list-group-item @if(getUrl() == route('getContactAdmin', ['status'=>'false'])) active @else list-group-item-action @endif">{{__('general.notContactedYet')}}</a>
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
                <h3 class="modal-title white"> {{__('general.contactDetail')}}</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="{{route('postContactAdmin', ['id'=>$contact->id])}}">
                @csrf
                <div class="modal-body">
                    <fieldset class="form-group floating-label-form-group">
                        <label>{{__('general.fullName')}}</label>
                        <input value="{{$contact->name}}" type="text" class="form-control" disabled="">
                    </fieldset>
                    <fieldset class="form-group floating-label-form-group">
                        <label>{{__('general.emailAddress')}}</label>
                        <input value="{{$contact->email}}" type="email" class="form-control" disabled="">
                    </fieldset>
                    <fieldset class="form-group floating-label-form-group">
                        <label>{{__('general.phoneNumber')}}</label>
                        <input value="{{$contact->phone}}" type="text" class="form-control" disabled="">
                    </fieldset>
                    <fieldset class="form-group floating-label-form-group">
                        <label for="title1">{{__('general.content')}}</label>
                        <textarea class="form-control" id="title1" rows="4" placeholder="{{__('general.content')}}" disabled="">{{$contact->content}}</textarea>
                    </fieldset>
                    <fieldset class="form-group floating-label-form-group">
                        <label for="title1">{{__('general.status')}}</label>
                        <div class="controls">
                            <div class="skin skin-flat">
                                <input type="radio" value="true" name="status" id="true" @if($contact->status == 'true') checked @endif>
                                <label for="true">{{__('general.contacted')}}</label>
                            </div>
                            <div class="skin skin-flat">
                                <input type="radio" value="false" name="status" id="false" @if($contact->status == 'false') checked @endif>
                                <label for="false">{{__('general.notContactedYet')}}</label>
                            </div>
                        </div>
                    </fieldset>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">{{__('general.close')}}</button>
                    <button type="submit" class="btn btn-outline-success">{{__('general.saveChanges')}}</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach


@stop