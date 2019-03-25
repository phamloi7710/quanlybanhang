@section('title')Trang Chủ - @stop
@section('description'){{$seoDescription}}@stop
@section('keywords'){{$seoKeywords}}@stop
@extends('frontend.v1.general.master')
@section('content')
<section class="lib-section-0">
    <div class="section_slider">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3 col-lg-6 smart_sliders">
                    <div class="home-slider owl-carousel owl-theme dots-enable" data-hg-items="1" data-lg-items='1' data-md-items='1' data-sm-items='1' data-xs-items="1" data-margin='0' data-dot="true" data-loop="true">
                        <div class="item image-item">
                            <a href="#" title="Slider 1" class="clearfix">
                            <img class="img-responsive" src="{{url('')}}/assets/frontend/v1.0/images/icons/slider_image_1.png" alt="slider-1"/>
                            </a>    
                        </div>
                        <div class="item image-item">
                            <a href="#" title="Slider 2" class="clearfix">
                            <img class="img-responsive" src="{{url('')}}/assets/frontend/v1.0/images/icons/slider_image_2.png" alt="slider-2"/>
                            </a>    
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 smart_banners">
                    <div class="item image-hover-line" onclick="window.location.href='/'" title="">
                        <img class="img-responsive" src="{{url('')}}/assets/frontend/v1.0/images/icons/banner_image_1.png" alt="libra-mart"/>
                        <span class="image-line"></span>
                        <span class="effect-line"></span>
                    </div>
                    <div class="item image-hover-line" onclick="window.location.href='/'" title="">
                        <img class="img-responsive" src="{{url('')}}/assets/frontend/v1.0/images/icons/banner_image_2.png" alt="libra-mart"/>
                        <span class="image-line"></span>
                        <span class="effect-line"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Start HOT DEAL -->
<section class="lib-section-1">
    <link href="{{url('')}}/assets/frontend/v1.0/css/dealtime_countdown.scss.css" rel="stylesheet" type="text/css" />
    <script src="{{url('')}}/assets/frontend/v1.0/script/dealtime_countdown.js" type="text/javascript"></script>
    <div class="section_hotdeal">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="module-header">
                        <div class="index-header fw aniborder_title">
                            <div class="dealtime_header">
                                <div class="index-image-title">
                                    <img src="{{url('')}}/assets/frontend/v1.0/images/icons/down.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/icons/star.png" class="img-responsive" alt="hot-deal">
                                </div>
                                <h2 class="title-head module-title index-title">
                                    <a href="san-pham-khuyen-mai" title="HOT DEAL">
                                    <span>HOT DEAL</span>
                                    </a>
                                </h2>
                                <div class="index-desc">
                                    Cập nhật hàng giờ tất cả những deal giảm giá đặc biệt trên Smart Market
                                </div>
                            </div>
                            <div class="heading-line">
                                <span class="short-line"></span>
                                <span class="long-line"></span>
                            </div>
                            <div class="dealtime_countdown">
                                <div class="dealtime_countdown_item" data-time="4/30/2019 15:10:00"></div>
                                <script>
                                    var cendtime_content = "4/30/2019 15:10:00",
                                    cd = new Countdown({
                                        cont: document.querySelector('.dealtime_countdown_item'),
                                        endDate: Date.parse(cendtime_content),
                                        outputTranslation: {
                                            year: 'Năm',
                                            week: 'Tuần',
                                            day: 'Ngày',
                                            hour: 'Giờ',
                                            minute: 'Phút',
                                            second: 'Giây',
                                        },
                                        endCallback: null,
                                        outputFormat: 'day|hour|minute|second',
                                    });
                                    cd.start();
                                </script>
                            </div>
                        </div>
                    </div>
                    <div class="module-content">
                        <div class="owl-carousel owl-theme nav-enable nav-left-right" data-hg-items="6" data-lg-items="5" data-md-items="4" data-sm-items="3" data-xs-items="2" data-xxs-items="1" data-margin="30" data-nav="true">
                            <div class="item">
                                <div class="product-box">
                                    <div class="product-thumbnail">
                                        <div class="tag-item tag-sale sale-flash">-9%</div>
                                        
                                        <a href="/internet-tivi-sony-40-inch-kdl" title="Internet Tivi Sony 40 inch KDL">
                                        <img class="img-responsive" src="{{url('')}}/assets/frontend/v1.0/images/icons/down.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/products/a29b6e93b0b479041f92d0ecd784f2.jpg?v=1530847043140" alt="Internet Tivi Sony 40 inch KDL">
                                        </a>
                                        <div class="product-action hidden-xs">
                                            <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-12107375" enctype="multipart/form-data">
                                                <input type="hidden" name="variantId" value="19426516" />
                                                <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
                                                <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="fw product-review">
                                            <div class="bizweb-product-reviews-badge" data-id="12107375"></div>
                                            <div class="countdown" id="js-countdown">
                                        <div class="countdown__item">
                                            <div class="countdown__timer js-countdown-days" aria-labelledby="day-countdown">
                                            </div>
                                            <div class="countdown__label" id="day-countdown">Ngày</div>
                                        </div>
                                        <div class="countdown__item">
                                            <div class="countdown__timer js-countdown-hours" aria-labelledby="hour-countdown">
                                            </div>
                                            <div class="countdown__label" id="hour-countdown">Giờ</div>
                                        </div>
                                        <div class="countdown__item">
                                            <div class="countdown__timer js-countdown-minutes" aria-labelledby="minute-countdown">
                                            </div>
                                            <div class="countdown__label" id="minute-countdown">Phút</div>
                                        </div>
                                        <div class="countdown__item">
                                            <div class="countdown__timer js-countdown-seconds" aria-labelledby="second-countdown">
                                            </div>
                                            <div class="countdown__label" id="second-countdown">Giây</div>
                                        </div>
                                    </div>
                                        </div>
                                        <h3 class="product-name">
                                            <a href="/internet-tivi-sony-40-inch-kdl" title="Internet Tivi Sony 40 inch KDL">
                                            Internet Tivi Sony 40 inch KDL
                                            </a>
                                        </h3>
                                        <div class="price-box price-loop-style res-item">
                                            <span class="special-price">
                                                <span class="price">8.900.000₫</span>
                                            </span>
                                            <span class="old-price">
                                                <span class="price">9.790.000₫</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End HOT DEAL -->
<!-- Start Banner Top -->
<section class="lib-section-2">
    <div class="section_banners mid_banners">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-hg-6 mid_banner_image">
                    <div class="item image-hover-line" onclick="window.location.href='/#'" title="Tiêu đề">
                        <img src="{{url('')}}/assets/frontend/v1.0/images/icons/swing.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/mid_banner_image_1.jpg" class="img-responsive" alt="tieu-de">
                        <span class="image-line"></span>
                        <span class="effect-line"></span>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-hg-6 mid_banner_image">
                    <div class="item image-hover-line" onclick="window.location.href='/#'" title="Tiêu đề">
                        <img src="{{url('')}}/assets/frontend/v1.0/images/icons/swing.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/mid_banner_image_2.jpg" class="img-responsive" alt="tieu-de">
                        <span class="image-line"></span>
                        <span class="effect-line"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Top -->
@foreach($category as $cate)
@if(count($cate->product) != '0')
<section class="lib-section-13">
    <div class="section_category section_category_8">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-hg-12">
                    <div class="category_content">
                        <div class="module-header index-header">
                            <div class="index-image-title">
                                <img src="{{url('')}}/assets/frontend/v1.0/images/icons/down.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/icons/category_8_image.png" class="img-responsive" alt="Điện máy">
                            </div>
                            <h2 class="title-head module-title index-title">
                                <a href="dien-may" title="Điện máy">
                                <span>{{$cate->name}}</span>
                                </a>
                            </h2>
                            <!-- <div class="index-title-links hidden-xs">
                                <div class="index-title-link-items owl-theme owl-carousel nav-enable nav-right" data-hg-items="5" data-lg-items="6" data-md-items="3" data-sm-items="2" data-xs-items="2" data-xxs-items="1" data-nav="true" data-margin="20">
                                    @foreach($cate->product as $product)
                                    <div class="index-title-link-item">
                                        <a href="/tivi" title="Tivi">
                                        <span>{{$product->name}}</span>
                                        </a>
                                    </div>
                                    @endforeach
                                </div>
                            </div> -->
                            <!-- <div class="index-title-links hidden-sm hidden-md hidden-lg hidden-hg">
                                <div class="index-title-link-items owl-theme owl-carousel nav-enable nav-right" data-xs-items="2" data-xxs-items="1" data-nav="true" data-margin="20">
                                    <div class="index-title-link-item">
                                        <a href="/tivi-tu-lanh">
                                        <span>Tivi - Tủ lạnh</span>
                                        </a>
                                    </div>
                                    <div class="index-title-link-item">
                                        <a href="/tivi">
                                        <span>Tivi</span>
                                        </a>
                                    </div>
                                    <div class="index-title-link-item">
                                        <a href="/dieu-hoa">
                                        <span>Điều hoà</span>
                                        </a>
                                    </div>
                                    <div class="index-title-link-item">
                                        <a href="/tu-lanh">
                                        <span>Tủ lạnh</span>
                                        </a>
                                    </div>
                                    <div class="index-title-link-item">
                                        <a href="/may-giat">
                                        <span>Máy giặt</span>
                                        </a>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        <div class="module-content">
                            <div class="owl-theme owl-carousel nav-enable nav-left-right" data-hg-items="6" data-lg-items="5" data-md-items="4" data-sm-items="4" data-xs-items="3" data-xxs-items="2" data-nav="true" data-margin="10">
                                @foreach($cate->product as $product)
                                <div class="item">
                                    <div class="product-box">
                                        <div class="product-thumbnail">
                                            <a href="{{route('getDetailProduct', ['slug'=>$product->slug])}}" title="{{$product->name}}">
                                            <img class="img-responsive" src="{{url('')}}/assets/frontend/v1.0/images/icons/down.svg" data-lazyload="{{url('')}}/{{$product->avatar}}" alt="{{$product->name}}">
                                            </a>
                                            <div class="product-action hidden-xs">
                                                <form action="#" method="post" class="variants form-nut-grid" enctype="multipart/form-data">
                                                    <input type="hidden" name="variantId" value="19426472" />
                                                    <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
                                                    <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="fw product-review">
                                                <div class="bizweb-product-reviews-badge"></div>
                                            </div>
                                            <h3 class="product-name">
                                                <a href="{{route('getDetailProduct', ['slug'=>$product->slug])}}" title="{{$product->name}}">
                                                {{$product->name}}
                                                </a>
                                            </h3>
                                            <div class="price-box price-loop-style res-item">
                                                <span class="special-price">
                                                    <span class="price">@if(isset($product->price_sale)) {{number_format($product->price_sale, 0,',','.')}} (₫) @else {{number_format($product->price, 0,',','.')}} (₫) @endif</span>
                                                </span>
                                                @if(isset($product->price_sale))
                                                <span class="old-price">
                                                    <span class="price">{{number_format($product->price, 0,',','.')}} (₫)</span>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
@endforeach
<section class="lib-section-14">
    <div class="section_banners large_banner">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="item image-hover-line large_banner_4">
                        <a href="#" title="Tân trang nhà cửa, miễn phí vận chuyển">
                        <img src="{{url('')}}/assets/frontend/v1.0/images/icons/swing.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/large_banner_4.jpg" class="img-responsive" alt="tan-trang-nha-cua-mien-phi-van-chuyen">
                        </a>
                        <span class="image-line"></span>
                        <span class="effect-line"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Start Tin Nổi Bật -->
<section class="lib-section-15">
    <div class="section_news">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-hg-12">
                    <div class="module-header aniborder_title index-header">
                        <div class="index-image-title">
                            <img src="{{url('')}}/assets/frontend/v1.0/images/icons/down.svg" class="img-responsive" alt="icon">
                        </div>
                        <h2 class="title-head module-title index-title">
                            <a href="tin-tuc">
                            <span>Tin nổi bật</span>
                            </a>
                        </h2>
                        <div class="heading-line">
                            <span class="short-line"></span>
                            <span class="long-line"></span>
                        </div>
                    </div>
                    <div class="module-content">
                        <div class="owl-theme owl-carousel dots-enable dots-top-right" data-hg-items="4" data-lg-items="3" data-md-items="3" data-sm-items="2" data-xs-items="2" data-xxs-items="1" data-margin="30" data-dot="true">
                            @foreach($featuredNews as $news)
                            <div class="item article-item">
                                <div class="fw article-thumbnail">
                                    <a href="{{route('getNewsDetailFrontend', ['slug'=>$news->slug])}}" title="{{$news->title}}">
                                    <img src="{{url('')}}/{{$news->image}}" data-lazyload="{{url('')}}/{{$news->image}}" class="img-responsive" alt="{{$news->slug}}">
                                    </a>
                                </div>
                                <div class="fw article-info">
                                    <h3 class="fw article-title">
                                        <a href="{{route('getNewsDetailFrontend', ['slug'=>$news->slug])}}" title="{{$news->title}}">
                                        <span>{{$news->title}}</span>
                                        </a>
                                    </h3>
                                    <div class="fw article-summary">
                                        <i class="fa fa-quote-left" aria-hidden="true"></i> {{$news->description}}...
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Tin Nổi Bật -->
<!-- Start Chính Sách -->
<section class="lib-section-16">
    <div class="section_privacy">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-hg-12">
                    <div class="owl-theme owl-carousel" data-hg-items="4" data-lg-items="4" data-md-items="3" data-sm-items="2" data-xs-items="1" data-xxs-items="1" data-margin="30" data-autoplay="true">
                        <div class="item">
                            <div class="privacy_icon">
                                <img src="{{url('')}}/assets/frontend/v1.0/images/icons/down.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/icons/privacy_1_icon.png" alt="van-chuyen-mien-phi">
                            </div>
                            <div class="privacy_content">
                                <div class="privacy_title">
                                    Vận chuyển miễn phí
                                </div>
                                <div class="privacy_desc">
                                    Vận chuyển miễn phí nội thành với đơn hàng từ 1.000.000
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="privacy_icon">
                                <img src="{{url('')}}/assets/frontend/v1.0/images/icons/down.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/icons/privacy_2_icon.png" alt="thanh-toan-tien-loi">
                            </div>
                            <div class="privacy_content">
                                <div class="privacy_title">
                                    Thanh toán tiện lợi
                                </div>
                                <div class="privacy_desc">
                                    Hỗ trợ thanh toán tiền mặt hoặc thẻ từ các ngân hàng
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="privacy_icon">
                                <img src="{{url('')}}/assets/frontend/v1.0/images/icons/down.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/icons/privacy_3_icon.png" alt="cham-soc-24-7">
                            </div>
                            <div class="privacy_content">
                                <div class="privacy_title">
                                    Chăm sóc 24/7
                                </div>
                                <div class="privacy_desc">
                                    Chăm sóc khách hàng 24/7. Giải đáp mọi thắc mắc
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="privacy_icon">
                                <img src="{{url('')}}/assets/frontend/v1.0/images/icons/down.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/icons/privacy_4_icon.png" alt="san-pham-chinh-hang">
                            </div>
                            <div class="privacy_content">
                                <div class="privacy_title">
                                    Sản phẩm chính hãng
                                </div>
                                <div class="privacy_desc">
                                    Sản phẩm chính hãng đến từ các thương hiệu uy tín
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>  
<!-- End Chính Sách -->      
@stop