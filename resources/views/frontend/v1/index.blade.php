@extends('frontend.v1.general.master')
@section('content')
<!-- <section class="lib-section-0">
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
</section> -->
<!-- Start HOT DEAL -->
<!-- <section class="lib-section-1">
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
                                            <span class="price">
                                            9.790.000₫
                                            </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-box">
                                    <div class="product-thumbnail">
                                        <div class="tag-item tag-sale sale-flash">-11%</div>
                                        <a href="/android-tivi-sony-49-inch-4k" title="Android Tivi Sony 49 inch 4K">
                                        <img class="img-responsive" src="{{url('')}}/assets/frontend/v1.0/images/icons/down.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/products/f3be4635023407ec3031760273170f.jpg?v=1530847039123" alt="Android Tivi Sony 49 inch 4K">
                                        </a>
                                        <div class="product-action hidden-xs">
                                            <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-12107368" enctype="multipart/form-data">
                                                <input type="hidden" name="variantId" value="19426506" />
                                                <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
                                                <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="fw product-review">
                                            <div class="bizweb-product-reviews-badge" data-id="12107368"></div>
                                        </div>
                                        <h3 class="product-name">
                                            <a href="/android-tivi-sony-49-inch-4k" title="Android Tivi Sony 49 inch 4K">
                                            Android Tivi Sony 49 inch 4K
                                            </a>
                                        </h3>
                                        <div class="price-box price-loop-style res-item">
                                            <span class="special-price">
                                            <span class="price">8.000.000₫</span>
                                            </span>
                                            <span class="old-price">
                                            <span class="price">
                                            9.000.000₫
                                            </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-box">
                                    <div class="product-thumbnail">
                                        <div class="tag-item tag-sale sale-flash">-24%</div>
                                        <a href="/smart-tivi-toshiba-43-inch-4k" title="Smart Tivi Toshiba 43 inch 4K">
                                        <img class="img-responsive" src="{{url('')}}/assets/frontend/v1.0/images/icons/down.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/products/4121c4d0a678e4ff32ad91c8862b20.jpg?v=1530847048630" alt="Smart Tivi Toshiba 43 inch 4K">
                                        </a>
                                        <div class="product-action hidden-xs">
                                            <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-12107380" enctype="multipart/form-data">
                                                <input type="hidden" name="variantId" value="19426521" />
                                                <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
                                                <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="fw product-review">
                                            <div class="bizweb-product-reviews-badge" data-id="12107380"></div>
                                        </div>
                                        <h3 class="product-name">
                                            <a href="/smart-tivi-toshiba-43-inch-4k" title="Smart Tivi Toshiba 43 inch 4K">
                                            Smart Tivi Toshiba 43 inch 4K
                                            </a>
                                        </h3>
                                        <div class="price-box price-loop-style res-item">
                                            <span class="special-price">
                                            <span class="price">7.290.000₫</span>
                                            </span>
                                            <span class="old-price">
                                            <span class="price">
                                            9.590.000₫
                                            </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-box">
                                    <div class="product-thumbnail">
                                        <div class="tag-item tag-sale sale-flash">-22%</div>
                                        <a href="/man-hinh-lg-24mp88hv-s-24inch-fullhd" title="Màn hình LG 24MP88HV-S 24inch FullHD">
                                        <img class="img-responsive" src="{{url('')}}/assets/frontend/v1.0/images/icons/down.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/products/f5f3ac20e04def435321cd85e4e72a.jpg?v=1530847055483" alt="Màn hình LG 24MP88HV-S 24inch FullHD">
                                        </a>
                                        <div class="product-action hidden-xs">
                                            <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-12107387" enctype="multipart/form-data">
                                                <input type="hidden" name="variantId" value="19426528" />
                                                <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
                                                <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="fw product-review">
                                            <div class="bizweb-product-reviews-badge" data-id="12107387"></div>
                                        </div>
                                        <h3 class="product-name">
                                            <a href="/man-hinh-lg-24mp88hv-s-24inch-fullhd" title="Màn hình LG 24MP88HV-S 24inch FullHD">
                                            Màn hình LG 24MP88HV-S 24inch FullHD
                                            </a>
                                        </h3>
                                        <div class="price-box price-loop-style res-item">
                                            <span class="special-price">
                                            <span class="price">4.690.000₫</span>
                                            </span>
                                            <span class="old-price">
                                            <span class="price">
                                            5.990.000₫
                                            </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-box">
                                    <div class="product-thumbnail">
                                        <div class="tag-item tag-sale sale-flash">-14%</div>
                                        <a href="/tivi-led-panasonic-32-inch" title="Tivi LED Panasonic 32 inch">
                                        <img class="img-responsive" src="{{url('')}}/assets/frontend/v1.0/images/icons/down.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/products/7fb7c7533adc6066d00b43b38abd4f.jpg?v=1530847047583" alt="Tivi LED Panasonic 32 inch">
                                        </a>
                                        <div class="product-action hidden-xs">
                                            <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-12107379" enctype="multipart/form-data">
                                                <input type="hidden" name="variantId" value="19426520" />
                                                <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
                                                <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="fw product-review">
                                            <div class="bizweb-product-reviews-badge" data-id="12107379"></div>
                                        </div>
                                        <h3 class="product-name">
                                            <a href="/tivi-led-panasonic-32-inch" title="Tivi LED Panasonic 32 inch">
                                            Tivi LED Panasonic 32 inch
                                            </a>
                                        </h3>
                                        <div class="price-box price-loop-style res-item">
                                            <span class="special-price">
                                            <span class="price">4.300.000₫</span>
                                            </span>
                                            <span class="old-price">
                                            <span class="price">
                                            4.990.000₫
                                            </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-box">
                                    <div class="product-thumbnail">
                                        <div class="tag-item tag-sale sale-flash">-23%</div>
                                        <a href="/man-hinh-benq-gw2270-22inch-fullhd" title="Màn hình BenQ GW2270 22inch FullHD">
                                        <img class="img-responsive" src="{{url('')}}/assets/frontend/v1.0/images/icons/down.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/products/gw22701u579d20161011t162311244.jpg?v=1530847059283" alt="Màn hình BenQ GW2270 22inch FullHD">
                                        </a>
                                        <div class="product-action hidden-xs">
                                            <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-12107391" enctype="multipart/form-data">
                                                <input type="hidden" name="variantId" value="19426532" />
                                                <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
                                                <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="fw product-review">
                                            <div class="bizweb-product-reviews-badge" data-id="12107391"></div>
                                        </div>
                                        <h3 class="product-name">
                                            <a href="/man-hinh-benq-gw2270-22inch-fullhd" title="Màn hình BenQ GW2270 22inch FullHD">
                                            Màn hình BenQ GW2270 22inch FullHD
                                            </a>
                                        </h3>
                                        <div class="price-box price-loop-style res-item">
                                            <span class="special-price">
                                            <span class="price">1.990.000₫</span>
                                            </span>
                                            <span class="old-price">
                                            <span class="price">
                                            2.590.000₫
                                            </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-box">
                                    <div class="product-thumbnail">
                                        <div class="tag-item tag-sale sale-flash">-24%</div>
                                        <a href="/may-giat-cua-ngang-inverter-lg" title="Máy giặt cửa ngang Inverter LG">
                                        <img class="img-responsive" src="{{url('')}}/assets/frontend/v1.0/images/icons/down.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/products/0u2751d20170616t102747568611.jpg?v=1530847013373" alt="Máy giặt cửa ngang Inverter LG">
                                        </a>
                                        <div class="product-action hidden-xs">
                                            <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-12107331" enctype="multipart/form-data">
                                                <input type="hidden" name="variantId" value="19426467" />
                                                <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
                                                <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="fw product-review">
                                            <div class="bizweb-product-reviews-badge" data-id="12107331"></div>
                                        </div>
                                        <h3 class="product-name">
                                            <a href="/may-giat-cua-ngang-inverter-lg" title="Máy giặt cửa ngang Inverter LG">
                                            Máy giặt cửa ngang Inverter LG
                                            </a>
                                        </h3>
                                        <div class="price-box price-loop-style res-item">
                                            <span class="special-price">
                                            <span class="price">7.590.000₫</span>
                                            </span>
                                            <span class="old-price">
                                            <span class="price">
                                            9.990.000₫
                                            </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-box">
                                    <div class="product-thumbnail">
                                        <div class="tag-item tag-sale sale-flash">-13%</div>
                                        <a href="/may-lanh-casper-lc-12tl11" title="Máy lạnh Casper LC-12TL11">
                                        <img class="img-responsive" src="{{url('')}}/assets/frontend/v1.0/images/icons/down.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/products/lc12tl11u2751d20170116t2350437-d4ece7f7-2e70-46aa-8df3-fa53cffb7b78.jpg?v=1530847028600" alt="Máy lạnh Casper LC-12TL11">
                                        </a>
                                        <div class="product-action hidden-xs">
                                            <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-12107353" enctype="multipart/form-data">
                                                <input type="hidden" name="variantId" value="19426489" />
                                                <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
                                                <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="fw product-review">
                                            <div class="bizweb-product-reviews-badge" data-id="12107353"></div>
                                        </div>
                                        <h3 class="product-name">
                                            <a href="/may-lanh-casper-lc-12tl11" title="Máy lạnh Casper LC-12TL11">
                                            Máy lạnh Casper LC-12TL11
                                            </a>
                                        </h3>
                                        <div class="price-box price-loop-style res-item">
                                            <span class="special-price">
                                            <span class="price">7.059.000₫</span>
                                            </span>
                                            <span class="old-price">
                                            <span class="price">
                                            8.090.000₫
                                            </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-box">
                                    <div class="product-thumbnail">
                                        <div class="tag-item tag-sale sale-flash">-18%</div>
                                        <a href="/may-giat-cua-truoc-lg" title="Máy giặt cửa trước Inverter LG">
                                        <img class="img-responsive" src="{{url('')}}/assets/frontend/v1.0/images/icons/down.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/products/0u5488d20170918t184107496054.jpg?v=1530847005840" alt="Máy giặt cửa trước Inverter LG">
                                        </a>
                                        <div class="product-action hidden-xs">
                                            <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-12107325" enctype="multipart/form-data">
                                                <input type="hidden" name="variantId" value="19426461" />
                                                <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
                                                <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="fw product-review">
                                            <div class="bizweb-product-reviews-badge" data-id="12107325"></div>
                                        </div>
                                        <h3 class="product-name">
                                            <a href="/may-giat-cua-truoc-lg" title="Máy giặt cửa trước Inverter LG">
                                            Máy giặt cửa trước Inverter LG
                                            </a>
                                        </h3>
                                        <div class="price-box price-loop-style res-item">
                                            <span class="special-price">
                                            <span class="price">13.790.000₫</span>
                                            </span>
                                            <span class="old-price">
                                            <span class="price">
                                            16.900.000₫
                                            </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-box">
                                    <div class="product-thumbnail">
                                        <div class="tag-item tag-sale sale-flash">-14%</div>
                                        <a href="/dien-thoai-xiaomi-mi-a1-64gb-4gb" title="Điện thoại Xiaomi Mi A1 64GB/4GB">
                                        <img class="img-responsive" src="{{url('')}}/assets/frontend/v1.0/images/icons/down.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/products/0u4939d20170926t1409476909912.jpg?v=1530847074027" alt="Điện thoại Xiaomi Mi A1 64GB/4GB">
                                        </a>
                                        <div class="product-action hidden-xs">
                                            <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-12107400" enctype="multipart/form-data">
                                                <input type="hidden" name="variantId" value="19426542" />
                                                <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
                                                <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="fw product-review">
                                            <div class="bizweb-product-reviews-badge" data-id="12107400"></div>
                                        </div>
                                        <h3 class="product-name">
                                            <a href="/dien-thoai-xiaomi-mi-a1-64gb-4gb" title="Điện thoại Xiaomi Mi A1 64GB/4GB">
                                            Điện thoại Xiaomi Mi A1 64GB/4GB
                                            </a>
                                        </h3>
                                        <div class="price-box price-loop-style res-item">
                                            <span class="special-price">
                                            <span class="price">4.790.000₫</span>
                                            </span>
                                            <span class="old-price">
                                            <span class="price">
                                            5.590.000₫
                                            </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-box">
                                    <div class="product-thumbnail">
                                        <div class="tag-item tag-sale sale-flash">-21%</div>
                                        <a href="/dien-thoai-samsung-galaxy-j7-prime" title="Điện thoại Samsung Galaxy J7 Prime">
                                        <img class="img-responsive" src="{{url('')}}/assets/frontend/v1.0/images/icons/down.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/products/samsunggalaxyj7black1u504d2016.jpg?v=1530847072897" alt="Điện thoại Samsung Galaxy J7 Prime">
                                        </a>
                                        <div class="product-action hidden-xs">
                                            <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-12107399" enctype="multipart/form-data">
                                                <input type="hidden" name="variantId" value="19426541" />
                                                <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
                                                <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="fw product-review">
                                            <div class="bizweb-product-reviews-badge" data-id="12107399"></div>
                                        </div>
                                        <h3 class="product-name">
                                            <a href="/dien-thoai-samsung-galaxy-j7-prime" title="Điện thoại Samsung Galaxy J7 Prime">
                                            Điện thoại Samsung Galaxy J7 Prime
                                            </a>
                                        </h3>
                                        <div class="price-box price-loop-style res-item">
                                            <span class="special-price">
                                            <span class="price">4.690.000₫</span>
                                            </span>
                                            <span class="old-price">
                                            <span class="price">
                                            5.900.000₫
                                            </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-box">
                                    <div class="product-thumbnail">
                                        <div class="tag-item tag-sale sale-flash">-25%</div>
                                        <a href="/noi-com-dien-nap-gai-happycook" title="Nồi cơm điện nắp gài HappyCook">
                                        <img class="img-responsive" src="{{url('')}}/assets/frontend/v1.0/images/icons/down.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/products/1b1609da004e80bc04eb578cd3c0b0.jpg?v=1530846987127" alt="Nồi cơm điện nắp gài HappyCook">
                                        </a>
                                        <div class="product-action hidden-xs">
                                            <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-12107314" enctype="multipart/form-data">
                                                <input type="hidden" name="variantId" value="19426450" />
                                                <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
                                                <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="fw product-review">
                                            <div class="bizweb-product-reviews-badge" data-id="12107314"></div>
                                        </div>
                                        <h3 class="product-name">
                                            <a href="/noi-com-dien-nap-gai-happycook" title="Nồi cơm điện nắp gài HappyCook">
                                            Nồi cơm điện nắp gài HappyCook
                                            </a>
                                        </h3>
                                        <div class="price-box price-loop-style res-item">
                                            <span class="special-price">
                                            <span class="price">599.000₫</span>
                                            </span>
                                            <span class="old-price">
                                            <span class="price">
                                            799.000₫
                                            </span>
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
</section> -->
<!-- End HOT DEAL -->
<!-- Start Banner Top -->
<!-- <section class="lib-section-2">
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
</section> -->
<!-- End Banner Top -->
@foreach($category as $cate)
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
                                            <a href="{{route('getDetailProduct', ['slug'=>$product->slug, 'cate_name'=>$product->category->slug])}}" title="{{$product->name}}">
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
                                                <a href="{{route('getDetailProduct', ['slug'=>$product->slug, 'cate_name'=>$product->category->slug])}}" title="{{$product->name}}">
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
                <!-- <div class="hidden-xs hidden-sm col-md-3 col-lg-3 col-hg-2">
                    <div class="category_brands">
                        <div class="module-header index-header aniborder_title">
                            <h2 class="title-head module-title index-title">
                                <a href="dien-may">
                                <span>Thương hiệu</span>
                                </a>
                            </h2>
                            <div class="heading-line">
                                <span class="short-line"></span>
                                <span class="long-line"></span>
                            </div>
                        </div>
                        <div class="module-content">
                            <ul class="category_vendor_list">
                                <li class="category_vendor_item">
                                    <a href="/collections/all?q=vendor:(Daikin)" title="Daikin">
                                        <img src="{{url('')}}/assets/frontend/v1.0/images/icons/swing.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/icons/category_vendor_image_daikin.png" class="category-vendor-image-daikin img-responsive" alt="daikin">
                                        <script>
                                            $(".section_category_6 .category-vendor-image-daikin").error(function(){
                                                $(this).attr("src","{{url('')}}/assets/frontend/v1.0/images/icons/logo.png");
                                            });
                                        </script>
                                    </a>
                                </li>
                                <li class="category_vendor_item">
                                    <a href="/collections/all?q=vendor:(Electrolux)" title="Electrolux">
                                        <img src="{{url('')}}/assets/frontend/v1.0/images/icons/swing.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/icons/category_vendor_image_electrolux.png" class="category-vendor-image-electrolux img-responsive" alt="electrolux">
                                        <script>
                                            $(".section_category_6 .category-vendor-image-electrolux").error(function(){
                                                $(this).attr("src","{{url('')}}/assets/frontend/v1.0/images/icons/logo.png");
                                            });
                                        </script>
                                    </a>
                                </li>
                                <li class="category_vendor_item">
                                    <a href="/collections/all?q=vendor:(Hitachi)" title="Hitachi">
                                        <img src="{{url('')}}/assets/frontend/v1.0/images/icons/swing.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/icons/category_vendor_image_hitachi.png" class="category-vendor-image-hitachi img-responsive" alt="hitachi">
                                        <script>
                                            $(".section_category_6 .category-vendor-image-hitachi").error(function(){
                                                $(this).attr("src","{{url('')}}/assets/frontend/v1.0/images/icons/logo.png");
                                            });
                                        </script>
                                    </a>
                                </li>
                                <li class="category_vendor_item">
                                    <a href="/collections/all?q=vendor:(LG)" title="LG">
                                        <img src="{{url('')}}/assets/frontend/v1.0/images/icons/swing.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/icons/category_vendor_image_lg.png" class="category-vendor-image-lg img-responsive" alt="lg">
                                        <script>
                                            $(".section_category_6 .category-vendor-image-lg").error(function(){
                                                $(this).attr("src","{{url('')}}/assets/frontend/v1.0/images/icons/logo.png");
                                            });
                                        </script>
                                    </a>
                                </li>
                                <li class="category_vendor_item">
                                    <a href="/collections/all?q=vendor:(Midea)" title="Midea">
                                        <img src="{{url('')}}/assets/frontend/v1.0/images/icons/swing.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/icons/category_vendor_image_midea.png" class="category-vendor-image-midea img-responsive" alt="midea">
                                        <script>
                                            $(".section_category_6 .category-vendor-image-midea").error(function(){
                                                $(this).attr("src","{{url('')}}/assets/frontend/v1.0/images/icons/logo.png");
                                            });
                                        </script>
                                    </a>
                                </li>
                                <li class="category_vendor_item">
                                    <a href="/collections/all?q=vendor:(Panasonic)" title="Panasonic">
                                        <img src="{{url('')}}/assets/frontend/v1.0/images/icons/swing.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/icons/category_vendor_image_panasonic.png" class="category-vendor-image-panasonic img-responsive" alt="panasonic">
                                        <script>
                                            $(".section_category_6 .category-vendor-image-panasonic").error(function(){
                                                $(this).attr("src","{{url('')}}/assets/frontend/v1.0/images/icons/logo.png");
                                            });
                                        </script>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</section>
@endforeach
<!-- <section class="lib-section-14">
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
</section> -->
<!-- Start Tin Nổi Bật -->
<!-- <section class="lib-section-15">
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
                            <div class="item article-item">
                                <div class="fw article-thumbnail">
                                    <a href="/nokia-5-1-plus-se-ra-mat-vao-11-7-hai-model-khac-voi-chipset-sd710-va-sd845-se-ra-mat-vao-q3" title="Nokia 5.1 Plus sẽ ra mắt vào 11/7, hai model khác với chipset SD710 và SD845 sẽ ra mắt vào Q3">
                                    <img src="{{url('')}}/assets/frontend/v1.0/images/libra-smart-article.png" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/articles/9-0.jpg?v=1531109494443" class="img-responsive" alt="nokia-5-1-plus-se-ra-mat-vao-11-7-hai-model-khac-voi-chipset-sd710-va-sd845-se-r">
                                    </a>
                                </div>
                                <div class="fw article-info">
                                    <h3 class="fw article-title">
                                        <a href="/nokia-5-1-plus-se-ra-mat-vao-11-7-hai-model-khac-voi-chipset-sd710-va-sd845-se-ra-mat-vao-q3" title="Nokia 5.1 Plus sẽ ra mắt vào 11/7, hai model khác với chipset SD710 và SD845 sẽ ra mắt vào Q3">
                                        <span>Nokia 5.1 Plus sẽ ra mắt vào 11/7, hai model khác với chipset SD710 và SD845 sẽ ra mắt vào Q3</span>
                                        </a>
                                    </h3>
                                    <div class="fw article-summary">
                                        <i class="fa fa-quote-left" aria-hidden="true"></i> Sau các ảnh render, một số hình ảnh poster của chiếc Nokia 5.1 Plus đã bắt đầu bị rò rỉ, theo đó, thiết bị này sẽ được ra mắt tại Trung Quốc vào ngày 11/7 tới với tên gọi Nokia X5. 
                                        Một......
                                    </div>
                                </div>
                            </div>
                            <div class="item article-item">
                                <div class="fw article-thumbnail">
                                    <a href="/elon-musk-chinh-thuc-cu-ky-su-den-thai-lan-giup-giai-cuu-doi-bong-mac-ket-trong-hang-dong" title="Elon Musk chính thức cử kỹ sư đến Thái Lan giúp giải cứu đội bóng mắc kẹt trong hang động">
                                    <img src="{{url('')}}/assets/frontend/v1.0/images/libra-smart-article.png" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/articles/8-1.jpg?v=1531108889320" class="img-responsive" alt="elon-musk-chinh-thuc-cu-ky-su-den-thai-lan-giup-giai-cuu-doi-bong-mac-ket-trong-">
                                    </a>
                                </div>
                                <div class="fw article-info">
                                    <h3 class="fw article-title">
                                        <a href="/elon-musk-chinh-thuc-cu-ky-su-den-thai-lan-giup-giai-cuu-doi-bong-mac-ket-trong-hang-dong" title="Elon Musk chính thức cử kỹ sư đến Thái Lan giúp giải cứu đội bóng mắc kẹt trong hang động">
                                        <span>Elon Musk chính thức cử kỹ sư đến Thái Lan giúp giải cứu đội bóng mắc kẹt trong hang động</span>
                                        </a>
                                    </h3>
                                    <div class="fw article-summary">
                                        <i class="fa fa-quote-left" aria-hidden="true"></i> Những ngày qua, bên cạnh World Cup 2018, việc 12 cậu bé từ độ tuổi 11 đến 16 cùng HLV 25 tuổi bị mắc kẹt trong hang Tham Luang Nang Non, Chiang Rai, Thái Lan do mưa lớn gây ra ngập lụt cũng thu hú......
                                    </div>
                                </div>
                            </div>
                            <div class="item article-item">
                                <div class="fw article-thumbnail">
                                    <a href="/ceo-facebook-mark-zuckerberg-vuot-warren-buffett-chinh-thuc-tro-thanh-nguoi-giau-thu-ba-the-gioi" title="CEO Facebook Mark Zuckerberg vượt Warren Buffett, chính thức trở thành người giàu thứ ba thế giới">
                                    <img src="{{url('')}}/assets/frontend/v1.0/images/libra-smart-article.png" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/articles/7-1.jpg?v=1531108763267" class="img-responsive" alt="ceo-facebook-mark-zuckerberg-vuot-warren-buffett-chinh-thuc-tro-thanh-nguoi-giau">
                                    </a>
                                </div>
                                <div class="fw article-info">
                                    <h3 class="fw article-title">
                                        <a href="/ceo-facebook-mark-zuckerberg-vuot-warren-buffett-chinh-thuc-tro-thanh-nguoi-giau-thu-ba-the-gioi" title="CEO Facebook Mark Zuckerberg vượt Warren Buffett, chính thức trở thành người giàu thứ ba thế giới">
                                        <span>CEO Facebook Mark Zuckerberg vượt Warren Buffett, chính thức trở thành người giàu thứ ba thế giới</span>
                                        </a>
                                    </h3>
                                    <div class="fw article-summary">
                                        <i class="fa fa-quote-left" aria-hidden="true"></i> Dù gần đây Facebook đang dính phải khá nhiều vụ bê bối dữ liệu, nhưng điều này không ảnh hưởng gì đến khối tài sản của CEO Mark Zuckerberg, thậm chí vừa Zuckerberg đã chính thức vượt qua nhà đầu t......
                                    </div>
                                </div>
                            </div>
                            <div class="item article-item">
                                <div class="fw article-thumbnail">
                                    <a href="/nghien-cuu-cho-thay-dung-iphone-chung-to-ban-la-nguoi-co-thu-nhap-cao" title="Nghiên cứu cho thấy: dùng iPhone chứng tỏ bạn là người có thu nhập cao">
                                    <img src="{{url('')}}/assets/frontend/v1.0/images/libra-smart-article.png" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/articles/6-0.jpg?v=1531108536403" class="img-responsive" alt="nghien-cuu-cho-thay-dung-iphone-chung-to-ban-la-nguoi-co-thu-nhap-cao">
                                    </a>
                                </div>
                                <div class="fw article-info">
                                    <h3 class="fw article-title">
                                        <a href="/nghien-cuu-cho-thay-dung-iphone-chung-to-ban-la-nguoi-co-thu-nhap-cao" title="Nghiên cứu cho thấy: dùng iPhone chứng tỏ bạn là người có thu nhập cao">
                                        <span>Nghiên cứu cho thấy: dùng iPhone chứng tỏ bạn là người có thu nhập cao</span>
                                        </a>
                                    </h3>
                                    <div class="fw article-summary">
                                        <i class="fa fa-quote-left" aria-hidden="true"></i> Có rất nhiều cách để thể hiện sự giàu có, như đi xe xịn, ở nhà to, mặc đồ hiệu, hay tốt hơn hết là… dùng iPhone. Một nghiên cứu mới công bố của Đại học Chicago và Cục Nghiên cứu Kinh tế Mỹ đã cho ......
                                    </div>
                                </div>
                            </div>
                            <div class="item article-item">
                                <div class="fw article-thumbnail">
                                    <a href="/xiaomi-mi-mix-3-se-co-gia-tu-12-trieu-vnd-ra-mat-thang-9-co-ca-ban-cao-cap-ferrari" title="Xiaomi Mi Mix 3 sẽ có giá từ 12 triệu VND, ra mắt tháng 9, có cả bản cao cấp 'Ferrari'">
                                    <img src="{{url('')}}/assets/frontend/v1.0/images/libra-smart-article.png" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/articles/5-0.jpg?v=1531108094393" class="img-responsive" alt="xiaomi-mi-mix-3-se-co-gia-tu-12-trieu-vnd-ra-mat-thang-9-co-ca-ban-cao-cap-ferra">
                                    </a>
                                </div>
                                <div class="fw article-info">
                                    <h3 class="fw article-title">
                                        <a href="/xiaomi-mi-mix-3-se-co-gia-tu-12-trieu-vnd-ra-mat-thang-9-co-ca-ban-cao-cap-ferrari" title="Xiaomi Mi Mix 3 sẽ có giá từ 12 triệu VND, ra mắt tháng 9, có cả bản cao cấp 'Ferrari'">
                                        <span>Xiaomi Mi Mix 3 sẽ có giá từ 12 triệu VND, ra mắt tháng 9, có cả bản cao cấp 'Ferrari'</span>
                                        </a>
                                    </h3>
                                    <div class="fw article-summary">
                                        <i class="fa fa-quote-left" aria-hidden="true"></i> Năm nay, Xiaomi dự kiến sẽ tiếp tục đem đến cho người dùng smartphone Mi Mix 3 với rất nhiều nâng cấp khác nhau từ người tiền nhiệm là Mi Mix 2 và Mix 2S. 
                                        Flagship của Xiaomi theo các nguồn tin......
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- End Tin Nổi Bật -->
<!-- Start Chính Sách -->
<!-- <section class="lib-section-16">
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
</section>  --> 
<!-- End Chính Sách -->      
@stop