@extends('admin.general.master')
@section('content') 
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block">{{__('general.categoryList')}}</h3>
            </div>
            <div class="content-header-right col-md-6 col-12">
                <div class="dropdown float-md-right">
                    <a href="{{route('getAddCateAdmin')}}" class="btn btn-danger round btn-glow px-2">{{__('general.addNew')}}</a>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Description -->
            <section class="card">
                <!-- <div class="card-header">
                    <h4 class="card-title">List Category</h4>
                </div> -->
                <div class="card-content">
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
                                              aria-expanded="false" class="btn btn-info btn-sm dropdown-toggle">Tuỳ Chọn</button>
                                                <span aria-labelledby="btnSearchDrop2" class="dropdown-menu mt-1 dropdown-menu-right">
                                                    <a href="{{route('getEditCateAdmin', ['id'=>$value->id])}}" class="dropdown-item blue"><i class="ft-edit-2"></i> {{__('general.edit')}}</a>
                                                    <a href="#" class="dropdown-item red"><i class="ft-trash"></i> {{__('general.delete')}}</a>
                                                </span>
                                            </span>
                                        </td>
                                    </tr>
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