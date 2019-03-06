@extends('admin.general.master')
@section('content') 
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
                                    <tr>
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
                                                    <a href="#" class="dropdown-item red"><i class="ft-trash"></i> {{__('general.delete')}}</a>
                                                </span>
                                            </span>
                                        </td>
                                    </tr>
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