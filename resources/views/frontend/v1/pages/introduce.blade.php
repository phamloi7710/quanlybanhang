@extends('frontend.v1.general.master')
@section('content')
<section class="bread-crumb">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <ul class="breadcrumb" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                    <li class="home">
                        <a itemprop="url" href="/"><span itemprop="title">Trang chủ</span></a>
                    </li>
                        <li>
                            <strong itemprop="title">Giới Thiệu</strong>
                        </li>
                    
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="page page-template">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="box-heading box-heading-line relative">
                </div>
                <div class="content-page rte">
                    @if($introduce) {!!$introduce->content!!} @else Nội Dung Đang Được Cập Nhật @endif
                    
                </div>
            </div>
        </div>
    </div>
</section>
@stop