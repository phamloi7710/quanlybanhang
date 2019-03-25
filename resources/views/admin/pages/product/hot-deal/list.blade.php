@section('title')
@lang('general.hotDeal')
@stop
@extends('admin.general.master')
@section('link')
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/app-assets/vendors/css/pickers/daterange/daterangepicker.css">
  <link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/app-assets/css/plugins/pickers/daterange/daterange.css">
@stop
@section('script')
<script src="{{url('')}}/assets/admin/app-assets/vendors/js/pickers/dateTime/moment-with-locales.min.js"
  type="text/javascript"></script>
  <script src="{{url('')}}/assets/admin/app-assets/vendors/js/pickers/daterange/daterangepicker.js"
  type="text/javascript"></script>
  <script type="text/javascript">
    $(function() {
        $('.timeseconds').daterangepicker({
            timePicker: true,
            timePickerIncrement: 30,
            timePicker24Hour: true,
            timePickerSeconds: true,
            locale: {
                format: 'MM-DD-YYYY h:mm:ss'
            }
        });
        $('.timeseconds').on('apply.daterangepicker', function(ev, picker) {
            $(this).val(picker.startDate.format('MM-DD-YYYY h:mm:ss') + ' - ' + picker.endDate.format('MM-DD-YYYY h:mm:ss'));
            $('input[name="startDate"]').val(picker.startDate.format('MM-DD-YYYY h:mm:ss'));
            $('input[name="endDate"]').val(picker.endDate.format('MM-DD-YYYY h:mm:ss'));
            // alert($('input[name="startDate"]').val());   

        });

        $('.timeseconds').on('cancel.daterangepicker', function(ev, picker) {
            $(this).val('');
        });
    });
        
    </script>
  @stop
@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12">
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <h4 class="card-title">@lang('general.hotDeal')</h4>
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
                        <li class="breadcrumb-item active">@lang('general.hotDeal')
                        </li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="content-body">
            <!-- Description -->
            <form action="{{route('postHotDealAdmin')}}" method="post">
            @csrf
                <section id="description" class="card">
                    <div class="card-header">
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <button type="submit" class="btn btn-success round btn-glow">@lang('general.saveChanges')</button>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="card-body table-responsive">

                                <table class="table table-bordered mb-0">
                                <thead>
                                    <tr>
                                        <th>@lang('general.productName')</th>
                                        <th>@lang('general.startDateEndDate')</th>
                                        <!-- <th>@lang('general.endDate')</th> -->
                                        <th>{{__('general.priceHotDeal')}}</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody class="font-small-3">
                                    <tr>
                                        <td>
                                            <select name="sltProduct" class="form-control">
                                                @foreach($products as $product)
                                                <option value="{{$product->id}}">{{$product->name}}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <div class='input-group'>
                                                    <input name="date" type='text' class="form-control timeseconds">
                                                    <input name="startDate" type="hidden">
                                                    <input name="endDate" type="hidden">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">
                                                            <span class="la la-calendar"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </form>
        </div>
    </div>
</div>
@stop