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
</section>
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
<section class="lib-section-3">
    <div class="section_category section_category_7">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-hg-10">
                    <div class="category_content">
                        <div class="module-header index-header">
                            <div class="index-image-title">
                                <img src="{{url('')}}/assets/frontend/v1.0/images/icons/down.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/icons/category_7_image.png" class="img-responsive" alt="Mỹ phẩm">
                            </div>
                            <h2 class="title-head module-title index-title">
                                <a href="lam-dep-suc-khoe" title="Mỹ phẩm">
                                <span>Mỹ phẩm</span>
                                </a>
                            </h2>
                        </div>
                        <div class="module-content">
                            <div class="owl-theme owl-carousel nav-enable nav-left-right" data-hg-items="6" data-lg-items="5" data-md-items="4" data-sm-items="4" data-xs-items="3" data-xxs-items="2" data-nav="true" data-margin="10">
                                <div class="item">
                                    <div class="product-box">
                                        <div class="product-thumbnail">
                                            <a href="/sua-duong-givenchy-le-soin-noir-lotion" title="Kem dưỡng Givenchy Le Soin Noir Lotion">
                                            <img class="img-responsive" src="{{url('')}}/assets/frontend/v1.0/images/icons/down.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/products/11.jpg?v=1531122859717" alt="Kem dưỡng Givenchy Le Soin Noir Lotion">
                                            </a>
                                            <div class="product-action hidden-xs">
                                                <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-12126384" enctype="multipart/form-data">
                                                    <input type="hidden" name="variantId" value="19477446" />
                                                    <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
                                                    <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="fw product-review">
                                                <div class="bizweb-product-reviews-badge" data-id="12126384"></div>
                                            </div>
                                            <h3 class="product-name">
                                                <a href="/sua-duong-givenchy-le-soin-noir-lotion" title="Kem dưỡng Givenchy Le Soin Noir Lotion">
                                                Kem dưỡng Givenchy Le Soin Noir Lotion
                                                </a>
                                            </h3>
                                            <div class="price-box price-loop-style res-item">
                                                <span class="special-price">
                                                <span class="price">1.720.000₫</span>
                                                </span>
                                                <span class="old-price">
                                                <span class="price">
                                                </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product-box">
                                        <div class="product-thumbnail">
                                            <a href="/kem-duong-am-l-occitane-pivoine-sublime-skin-perfecting-cream" title="Kem dưỡng ẩm L Occitane Pivoine">
                                            <img class="img-responsive" src="{{url('')}}/assets/frontend/v1.0/images/icons/down.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/products/18.jpg?v=1531122856067" alt="Kem dưỡng ẩm L Occitane Pivoine">
                                            </a>
                                            <div class="product-action hidden-xs">
                                                <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-12126382" enctype="multipart/form-data">
                                                    <input type="hidden" name="variantId" value="19477444" />
                                                    <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
                                                    <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="fw product-review">
                                                <div class="bizweb-product-reviews-badge" data-id="12126382"></div>
                                            </div>
                                            <h3 class="product-name">
                                                <a href="/kem-duong-am-l-occitane-pivoine-sublime-skin-perfecting-cream" title="Kem dưỡng ẩm L Occitane Pivoine">
                                                Kem dưỡng ẩm L Occitane Pivoine
                                                </a>
                                            </h3>
                                            <div class="price-box price-loop-style res-item">
                                                <span class="special-price">
                                                <span class="price">840.000₫</span>
                                                </span>
                                                <span class="old-price">
                                                <span class="price">
                                                </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product-box">
                                        <div class="product-thumbnail">
                                            <a href="/nuoc-hoa-giorgio-valenti" title="Nước hoa Giorgio Valenti">
                                            <img class="img-responsive" src="{{url('')}}/assets/frontend/v1.0/images/icons/down.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/products/16.jpg?v=1531122854777" alt="Nước hoa Giorgio Valenti">
                                            </a>
                                            <div class="product-action hidden-xs">
                                                <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-12126381" enctype="multipart/form-data">
                                                    <input type="hidden" name="variantId" value="19477443" />
                                                    <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
                                                    <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="fw product-review">
                                                <div class="bizweb-product-reviews-badge" data-id="12126381"></div>
                                            </div>
                                            <h3 class="product-name">
                                                <a href="/nuoc-hoa-giorgio-valenti" title="Nước hoa Giorgio Valenti">
                                                Nước hoa Giorgio Valenti
                                                </a>
                                            </h3>
                                            <div class="price-box price-loop-style res-item">
                                                <span class="special-price">
                                                <span class="price">489.000₫</span>
                                                </span>
                                                <span class="old-price">
                                                <span class="price">
                                                </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product-box">
                                        <div class="product-thumbnail">
                                            <a href="/son-thoi-chanel-rouge-allure-velvet-so-38" title="Son thỏi Chanel Rouge Allure Velvet số 38">
                                            <img class="img-responsive" src="{{url('')}}/assets/frontend/v1.0/images/icons/down.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/products/19.jpg?v=1531122853730" alt="Son thỏi Chanel Rouge Allure Velvet số 38">
                                            </a>
                                            <div class="product-action hidden-xs">
                                                <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-12126380" enctype="multipart/form-data">
                                                    <input type="hidden" name="variantId" value="19477442" />
                                                    <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
                                                    <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="fw product-review">
                                                <div class="bizweb-product-reviews-badge" data-id="12126380"></div>
                                            </div>
                                            <h3 class="product-name">
                                                <a href="/son-thoi-chanel-rouge-allure-velvet-so-38" title="Son thỏi Chanel Rouge Allure Velvet số 38">
                                                Son thỏi Chanel Rouge Allure Velvet số 38
                                                </a>
                                            </h3>
                                            <div class="price-box price-loop-style res-item">
                                                <span class="special-price">
                                                <span class="price">890.000₫</span>
                                                </span>
                                                <span class="old-price">
                                                <span class="price">
                                                </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product-box">
                                        <div class="product-thumbnail">
                                            <a href="/kem-nen-make-up-for-ever" title="Kem nền Make Up Forever Ultra HD Foundation">
                                            <img class="img-responsive" src="{{url('')}}/assets/frontend/v1.0/images/icons/down.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/products/10.jpg?v=1531122852340" alt="Kem nền Make Up Forever Ultra HD Foundation">
                                            </a>
                                            <div class="product-action hidden-xs">
                                                <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-12126378" enctype="multipart/form-data">
                                                    <input type="hidden" name="variantId" value="19477440" />
                                                    <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
                                                    <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="fw product-review">
                                                <div class="bizweb-product-reviews-badge" data-id="12126378"></div>
                                            </div>
                                            <h3 class="product-name">
                                                <a href="/kem-nen-make-up-for-ever" title="Kem nền Make Up Forever Ultra HD Foundation">
                                                Kem nền Make Up Forever Ultra HD Foundation
                                                </a>
                                            </h3>
                                            <div class="price-box price-loop-style res-item">
                                                <span class="special-price">
                                                <span class="price">860.000₫</span>
                                                </span>
                                                <span class="old-price">
                                                <span class="price">
                                                </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product-box">
                                        <div class="product-thumbnail">
                                            <a href="/phan-phu-luxury-17g" title="Phấn phủ Luxury 17g">
                                            <img class="img-responsive" src="{{url('')}}/assets/frontend/v1.0/images/icons/down.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/products/9.jpg?v=1531122850833" alt="Phấn phủ Luxury 17g">
                                            </a>
                                            <div class="product-action hidden-xs">
                                                <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-12126377" enctype="multipart/form-data">
                                                    <input type="hidden" name="variantId" value="19477439" />
                                                    <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
                                                    <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="fw product-review">
                                                <div class="bizweb-product-reviews-badge" data-id="12126377"></div>
                                            </div>
                                            <h3 class="product-name">
                                                <a href="/phan-phu-luxury-17g" title="Phấn phủ Luxury 17g">
                                                Phấn phủ Luxury 17g
                                                </a>
                                            </h3>
                                            <div class="price-box price-loop-style res-item">
                                                <span class="special-price">
                                                <span class="price">799.000₫</span>
                                                </span>
                                                <span class="old-price">
                                                <span class="price">
                                                </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product-box">
                                        <div class="product-thumbnail">
                                            <div class="tag-item tag-sale sale-flash">-3%</div>
                                            <a href="/dung-dich-giup-loai-bo-son-mong" title="Dung dịch giúp loại bỏ sơn móng">
                                            <img class="img-responsive" src="{{url('')}}/assets/frontend/v1.0/images/icons/down.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/products/4ef3217c56c404220bdaba5057d92e.jpg?v=1531122849307" alt="Dung dịch giúp loại bỏ sơn móng">
                                            </a>
                                            <div class="product-action hidden-xs">
                                                <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-12126376" enctype="multipart/form-data">
                                                    <input class="hidden" type="hidden" name="variantId" value="19477436" />
                                                    <button class="btn-cart btn button-hover-3 left-to" title="Xem thêm"  type="button" onclick="window.location.href='/dung-dich-giup-loai-bo-son-mong'" >
                                                    <span><i class="fa fa-share-alt" aria-hidden="true"></i></span>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="fw product-review">
                                                <div class="bizweb-product-reviews-badge" data-id="12126376"></div>
                                            </div>
                                            <h3 class="product-name">
                                                <a href="/dung-dich-giup-loai-bo-son-mong" title="Dung dịch giúp loại bỏ sơn móng">
                                                Dung dịch giúp loại bỏ sơn móng
                                                </a>
                                            </h3>
                                            <div class="price-box price-loop-style res-item">
                                                <span class="special-price">
                                                <span class="price">145.000₫</span>
                                                </span>
                                                <span class="old-price">
                                                <span class="price">
                                                150.000₫
                                                </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product-box">
                                        <div class="product-thumbnail">
                                            <a href="/nuoc-son-ve-mong-mira-aroma-art-club" title="Nước sơn vẽ móng Mira AROMA art club">
                                            <img class="img-responsive" src="{{url('')}}/assets/frontend/v1.0/images/icons/down.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/products/3.jpg?v=1531122845607" alt="Nước sơn vẽ móng Mira AROMA art club">
                                            </a>
                                            <div class="product-action hidden-xs">
                                                <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-12126358" enctype="multipart/form-data">
                                                    <a href="/nuoc-son-ve-mong-mira-aroma-art-club" class="btn button-hover-3" title="Xem chi tiết">
                                                    <span><i class="fa fa-info-circle" aria-hidden="true"></i></span>
                                                    </a>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="fw product-review">
                                                <div class="bizweb-product-reviews-badge" data-id="12126358"></div>
                                            </div>
                                            <h3 class="product-name">
                                                <a href="/nuoc-son-ve-mong-mira-aroma-art-club" title="Nước sơn vẽ móng Mira AROMA art club">
                                                Nước sơn vẽ móng Mira AROMA art club
                                                </a>
                                            </h3>
                                            <div class="price-box price-loop-style res-item">
                                                <span class="special-price">
                                                <span class="price">Liên hệ</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product-box">
                                        <div class="product-thumbnail">
                                            <div class="tag-item tag-sale sale-flash">-14%</div>
                                            <a href="/bo-cham-soc-mong-usa-store-salon-shaper-big" title="Dầu dưỡng da Phytoceuticals Argan">
                                            <img class="img-responsive" src="{{url('')}}/assets/frontend/v1.0/images/icons/down.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/products/1.jpg?v=1531122843340" alt="Dầu dưỡng da Phytoceuticals Argan">
                                            </a>
                                            <div class="product-action hidden-xs">
                                                <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-12126344" enctype="multipart/form-data">
                                                    <input type="hidden" name="variantId" value="19477404" />
                                                    <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
                                                    <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="fw product-review">
                                                <div class="bizweb-product-reviews-badge" data-id="12126344"></div>
                                            </div>
                                            <h3 class="product-name">
                                                <a href="/bo-cham-soc-mong-usa-store-salon-shaper-big" title="Dầu dưỡng da Phytoceuticals Argan">
                                                Dầu dưỡng da Phytoceuticals Argan
                                                </a>
                                            </h3>
                                            <div class="price-box price-loop-style res-item">
                                                <span class="special-price">
                                                <span class="price">169.000₫</span>
                                                </span>
                                                <span class="old-price">
                                                <span class="price">
                                                196.000₫
                                                </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product-box">
                                        <div class="product-thumbnail">
                                            <a href="/nuoc-hoa-nu-jeanne-arthes-love-generation-leopard" title="Nước hoa nữ Jeanne Arthes Love Generation Leopard">
                                            <img class="img-responsive" src="{{url('')}}/assets/frontend/v1.0/images/icons/down.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/products/34307500374191u2409d20161228t0.jpg?v=1530847081543" alt="Nước hoa nữ Jeanne Arthes Love Generation Leopard">
                                            </a>
                                            <div class="product-action hidden-xs">
                                                <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-12107409" enctype="multipart/form-data">
                                                    <input type="hidden" name="variantId" value="19426551" />
                                                    <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
                                                    <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="fw product-review">
                                                <div class="bizweb-product-reviews-badge" data-id="12107409"></div>
                                            </div>
                                            <h3 class="product-name">
                                                <a href="/nuoc-hoa-nu-jeanne-arthes-love-generation-leopard" title="Nước hoa nữ Jeanne Arthes Love Generation Leopard">
                                                Nước hoa nữ Jeanne Arthes Love Generation Leopard
                                                </a>
                                            </h3>
                                            <div class="price-box price-loop-style res-item">
                                                <span class="special-price">
                                                <span class="price">1.300.000₫</span>
                                                </span>
                                                <span class="old-price">
                                                <span class="price">
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
                <div class="hidden-xs hidden-sm col-md-3 col-lg-3 col-hg-2">
                    <div class="category_brands">
                        <div class="module-header index-header aniborder_title">
                            <h2 class="title-head module-title index-title">
                                <a href="lam-dep-suc-khoe">
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
                                    <a href="/collections/all?q=vendor:(Aroma)" title="Aroma">
                                        <img src="{{url('')}}/assets/frontend/v1.0/images/icons/swing.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/icons/category_vendor_image_aroma.png" class="category-vendor-image-aroma img-responsive" alt="aroma">
                                        <script>
                                            $(".section_category_7 .category-vendor-image-aroma").error(function(){
                                                $(this).attr("src","{{url('')}}/assets/frontend/v1.0/images/icons/logo.png");
                                            });
                                        </script>
                                    </a>
                                </li>
                                <li class="category_vendor_item">
                                    <a href="/collections/all?q=vendor:(Chanel)" title="Chanel">
                                        <img src="{{url('')}}/assets/frontend/v1.0/images/icons/swing.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/icons/category_vendor_image_chanel.png" class="category-vendor-image-chanel img-responsive" alt="chanel">
                                        <script>
                                            $(".section_category_7 .category-vendor-image-chanel").error(function(){
                                                $(this).attr("src","{{url('')}}/assets/frontend/v1.0/images/icons/logo.png");
                                            });
                                        </script>
                                    </a>
                                </li>
                                <li class="category_vendor_item">
                                    <a href="/collections/all?q=vendor:(Givenchy)" title="Givenchy">
                                        <img src="{{url('')}}/assets/frontend/v1.0/images/icons/swing.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/icons/category_vendor_image_givenchy.png" class="category-vendor-image-givenchy img-responsive" alt="givenchy">
                                        <script>
                                            $(".section_category_7 .category-vendor-image-givenchy").error(function(){
                                                $(this).attr("src","{{url('')}}/assets/frontend/v1.0/images/icons/logo.png");
                                            });
                                        </script>
                                    </a>
                                </li>
                                <li class="category_vendor_item">
                                    <a href="/collections/all?q=vendor:(Lancôme)" title="Lancôme">
                                        <img src="{{url('')}}/assets/frontend/v1.0/images/icons/swing.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/icons/category_vendor_image_lancome.png" class="category-vendor-image-lancome img-responsive" alt="lancome">
                                        <script>
                                            $(".section_category_7 .category-vendor-image-lancome").error(function(){
                                                $(this).attr("src","{{url('')}}/assets/frontend/v1.0/images/icons/logo.png");
                                            });
                                        </script>
                                    </a>
                                </li>
                                <li class="category_vendor_item">
                                    <a href="/collections/all?q=vendor:(L'Occitane)" title="L'Occitane">
                                        <img src="{{url('')}}/assets/frontend/v1.0/images/icons/swing.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/icons/category_vendor_image_l-occitane.png" class="category-vendor-image-l-occitane img-responsive" alt="l-occitane">
                                        <script>
                                            $(".section_category_7 .category-vendor-image-l-occitane").error(function(){
                                                $(this).attr("src","{{url('')}}/assets/frontend/v1.0/images/icons/logo.png");
                                            });
                                        </script>
                                    </a>
                                </li>
                                <li class="category_vendor_item">
                                    <a href="/collections/all?q=vendor:(Luxury)" title="Luxury">
                                        <img src="{{url('')}}/assets/frontend/v1.0/images/icons/swing.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/icons/category_vendor_image_luxury.png" class="category-vendor-image-luxury img-responsive" alt="luxury">
                                        <script>
                                            $(".section_category_7 .category-vendor-image-luxury").error(function(){
                                                $(this).attr("src","{{url('')}}/assets/frontend/v1.0/images/icons/logo.png");
                                            });
                                        </script>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="lib-section-5">
    <div class="section_banners large_banner">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="item image-hover-line large_banner_1">
                        <a href="#" title="Thời trang năng động ngày hè">
                        <img src="{{url('')}}/assets/frontend/v1.0/images/icons/swing.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/icons/large_banner_1.jpg" class="img-responsive" alt="thoi-trang-nang-dong-ngay-he">
                        </a>
                        <span class="image-line"></span>
                        <span class="effect-line"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="lib-section-6">
    <div class="section_category section_category_3">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-hg-10">
                    <div class="category_content">
                        <div class="module-header index-header">
                            <div class="index-image-title">
                                <img src="{{url('')}}/assets/frontend/v1.0/images/icons/down.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/icons/category_3_image.png" class="img-responsive" alt="Gia dụng">
                            </div>
                            <h2 class="title-head module-title index-title">
                                <a href="nha-cua-doi-song" title="Gia dụng">
                                <span>Gia dụng</span>
                                </a>
                            </h2>
                        </div>
                        <div class="module-content">
                            <div class="owl-theme owl-carousel nav-enable nav-left-right" data-hg-items="6" data-lg-items="5" data-md-items="4" data-sm-items="4" data-xs-items="3" data-xxs-items="2" data-nav="true" data-margin="10">
                                <div class="item">
                                    <div class="product-box">
                                        <div class="product-thumbnail">
                                            <a href="/bep-hong-ngoai-goldsun-ecc-ghy116" title="Bếp hồng ngoại Goldsun ECC-GHY116">
                                            <img class="img-responsive" src="{{url('')}}/assets/frontend/v1.0/images/icons/down.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/products/101007161u2769d20161031t060629.jpg?v=1530846996540" alt="Bếp hồng ngoại Goldsun ECC-GHY116">
                                            </a>
                                            <div class="product-action hidden-xs">
                                                <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-12107319" enctype="multipart/form-data">
                                                    <input type="hidden" name="variantId" value="19426455" />
                                                    <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
                                                    <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="fw product-review">
                                                <div class="bizweb-product-reviews-badge" data-id="12107319"></div>
                                            </div>
                                            <h3 class="product-name">
                                                <a href="/bep-hong-ngoai-goldsun-ecc-ghy116" title="Bếp hồng ngoại Goldsun ECC-GHY116">
                                                Bếp hồng ngoại Goldsun ECC-GHY116
                                                </a>
                                            </h3>
                                            <div class="price-box price-loop-style res-item">
                                                <span class="special-price">
                                                <span class="price">629.000₫</span>
                                                </span>
                                                <span class="old-price">
                                                <span class="price">
                                                </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product-box">
                                        <div class="product-thumbnail">
                                            <a href="/bep-hong-ngoai-argo-acc-s03" title="Bếp hồng ngoại Argo ACC-S03">
                                            <img class="img-responsive" src="{{url('')}}/assets/frontend/v1.0/images/icons/down.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/products/2081714269.jpg?v=1530846990410" alt="Bếp hồng ngoại Argo ACC-S03">
                                            </a>
                                            <div class="product-action hidden-xs">
                                                <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-12107318" enctype="multipart/form-data">
                                                    <input type="hidden" name="variantId" value="19426454" />
                                                    <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
                                                    <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="fw product-review">
                                                <div class="bizweb-product-reviews-badge" data-id="12107318"></div>
                                            </div>
                                            <h3 class="product-name">
                                                <a href="/bep-hong-ngoai-argo-acc-s03" title="Bếp hồng ngoại Argo ACC-S03">
                                                Bếp hồng ngoại Argo ACC-S03
                                                </a>
                                            </h3>
                                            <div class="price-box price-loop-style res-item">
                                                <span class="special-price">
                                                <span class="price">549.000₫</span>
                                                </span>
                                                <span class="old-price">
                                                <span class="price">
                                                </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product-box">
                                        <div class="product-thumbnail">
                                            <a href="/bep-hong-ngoai-asanzo-acc-s03" title="Bếp hồng ngoại Asanzo ACC-S03">
                                            <img class="img-responsive" src="{{url('')}}/assets/frontend/v1.0/images/icons/down.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/products/1u4064d20170725t161405364490.jpg?v=1530846989203" alt="Bếp hồng ngoại Asanzo ACC-S03">
                                            </a>
                                            <div class="product-action hidden-xs">
                                                <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-12107317" enctype="multipart/form-data">
                                                    <input type="hidden" name="variantId" value="19426453" />
                                                    <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
                                                    <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="fw product-review">
                                                <div class="bizweb-product-reviews-badge" data-id="12107317"></div>
                                            </div>
                                            <h3 class="product-name">
                                                <a href="/bep-hong-ngoai-asanzo-acc-s03" title="Bếp hồng ngoại Asanzo ACC-S03">
                                                Bếp hồng ngoại Asanzo ACC-S03
                                                </a>
                                            </h3>
                                            <div class="price-box price-loop-style res-item">
                                                <span class="special-price">
                                                <span class="price">719.000₫</span>
                                                </span>
                                                <span class="old-price">
                                                <span class="price">
                                                </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product-box">
                                        <div class="product-thumbnail">
                                            <a href="/bep-hong-ngoai-fujicook-dd" title="Bếp hồng ngoại Fujicook DD">
                                            <img class="img-responsive" src="{{url('')}}/assets/frontend/v1.0/images/icons/down.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/products/1u5387d20170922t093246484478.jpg?v=1530846988053" alt="Bếp hồng ngoại Fujicook DD">
                                            </a>
                                            <div class="product-action hidden-xs">
                                                <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-12107316" enctype="multipart/form-data">
                                                    <input type="hidden" name="variantId" value="19426452" />
                                                    <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
                                                    <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="fw product-review">
                                                <div class="bizweb-product-reviews-badge" data-id="12107316"></div>
                                            </div>
                                            <h3 class="product-name">
                                                <a href="/bep-hong-ngoai-fujicook-dd" title="Bếp hồng ngoại Fujicook DD">
                                                Bếp hồng ngoại Fujicook DD
                                                </a>
                                            </h3>
                                            <div class="price-box price-loop-style res-item">
                                                <span class="special-price">
                                                <span class="price">699.000₫</span>
                                                </span>
                                                <span class="old-price">
                                                <span class="price">
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
                                <div class="item">
                                    <div class="product-box">
                                        <div class="product-thumbnail">
                                            <a href="/noi-com-dien-nap-gai-happycook-hc-060n" title="Nồi cơm điện nắp gài HappyCook HC-060N">
                                            <img class="img-responsive" src="{{url('')}}/assets/frontend/v1.0/images/icons/down.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/products/89f089ff701686bbf75bffbcbdd69d.jpg?v=1530846983317" alt="Nồi cơm điện nắp gài HappyCook HC-060N">
                                            </a>
                                            <div class="product-action hidden-xs">
                                                <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-12107313" enctype="multipart/form-data">
                                                    <input type="hidden" name="variantId" value="19426449" />
                                                    <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
                                                    <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="fw product-review">
                                                <div class="bizweb-product-reviews-badge" data-id="12107313"></div>
                                            </div>
                                            <h3 class="product-name">
                                                <a href="/noi-com-dien-nap-gai-happycook-hc-060n" title="Nồi cơm điện nắp gài HappyCook HC-060N">
                                                Nồi cơm điện nắp gài HappyCook HC-060N
                                                </a>
                                            </h3>
                                            <div class="price-box price-loop-style res-item">
                                                <span class="special-price">
                                                <span class="price">599.000₫</span>
                                                </span>
                                                <span class="old-price">
                                                <span class="price">
                                                </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product-box">
                                        <div class="product-thumbnail">
                                            <a href="/noi-com-dien-nap-gai-pensonic" title="Nồi cơm điện nắp gài Pensonic">
                                            <img class="img-responsive" src="{{url('')}}/assets/frontend/v1.0/images/icons/down.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/products/09f8de1496d3f060aa0df3d359eb59.jpg?v=1530846982170" alt="Nồi cơm điện nắp gài Pensonic">
                                            </a>
                                            <div class="product-action hidden-xs">
                                                <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-12107312" enctype="multipart/form-data">
                                                    <input type="hidden" name="variantId" value="19426448" />
                                                    <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
                                                    <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="fw product-review">
                                                <div class="bizweb-product-reviews-badge" data-id="12107312"></div>
                                            </div>
                                            <h3 class="product-name">
                                                <a href="/noi-com-dien-nap-gai-pensonic" title="Nồi cơm điện nắp gài Pensonic">
                                                Nồi cơm điện nắp gài Pensonic
                                                </a>
                                            </h3>
                                            <div class="price-box price-loop-style res-item">
                                                <span class="special-price">
                                                <span class="price">399.000₫</span>
                                                </span>
                                                <span class="old-price">
                                                <span class="price">
                                                </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product-box">
                                        <div class="product-thumbnail">
                                            <a href="/noi-com-dien-philips-hd3119" title="Nồi cơm điện Philips HD3119">
                                            <img class="img-responsive" src="{{url('')}}/assets/frontend/v1.0/images/icons/down.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/products/1u2409d20171110t200140122634.jpg?v=1530846981320" alt="Nồi cơm điện Philips HD3119">
                                            </a>
                                            <div class="product-action hidden-xs">
                                                <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-12107311" enctype="multipart/form-data">
                                                    <input type="hidden" name="variantId" value="19426447" />
                                                    <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
                                                    <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="fw product-review">
                                                <div class="bizweb-product-reviews-badge" data-id="12107311"></div>
                                            </div>
                                            <h3 class="product-name">
                                                <a href="/noi-com-dien-philips-hd3119" title="Nồi cơm điện Philips HD3119">
                                                Nồi cơm điện Philips HD3119
                                                </a>
                                            </h3>
                                            <div class="price-box price-loop-style res-item">
                                                <span class="special-price">
                                                <span class="price">1.399.000₫</span>
                                                </span>
                                                <span class="old-price">
                                                <span class="price">
                                                </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product-box">
                                        <div class="product-thumbnail">
                                            <a href="/lo-vi-song-co-nuong-samsung" title="Lò vi sóng có nướng Samsung">
                                            <img class="img-responsive" src="{{url('')}}/assets/frontend/v1.0/images/icons/down.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/products/ge731kxsvu579d20160705t155832.jpg?v=1530846980400" alt="Lò vi sóng có nướng Samsung">
                                            </a>
                                            <div class="product-action hidden-xs">
                                                <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-12107310" enctype="multipart/form-data">
                                                    <input type="hidden" name="variantId" value="19426446" />
                                                    <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
                                                    <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="fw product-review">
                                                <div class="bizweb-product-reviews-badge" data-id="12107310"></div>
                                            </div>
                                            <h3 class="product-name">
                                                <a href="/lo-vi-song-co-nuong-samsung" title="Lò vi sóng có nướng Samsung">
                                                Lò vi sóng có nướng Samsung
                                                </a>
                                            </h3>
                                            <div class="price-box price-loop-style res-item">
                                                <span class="special-price">
                                                <span class="price">1.900.000₫</span>
                                                </span>
                                                <span class="old-price">
                                                <span class="price">
                                                </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product-box">
                                        <div class="product-thumbnail">
                                            <a href="/lo-vi-song-co-nuong-aqua" title="Lò vi sóng có nướng Aqua">
                                            <img class="img-responsive" src="{{url('')}}/assets/frontend/v1.0/images/icons/down.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/products/s2195w1u579d20160613t173935.jpg?v=1530846979387" alt="Lò vi sóng có nướng Aqua">
                                            </a>
                                            <div class="product-action hidden-xs">
                                                <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-12107309" enctype="multipart/form-data">
                                                    <input type="hidden" name="variantId" value="19426445" />
                                                    <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
                                                    <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="fw product-review">
                                                <div class="bizweb-product-reviews-badge" data-id="12107309"></div>
                                            </div>
                                            <h3 class="product-name">
                                                <a href="/lo-vi-song-co-nuong-aqua" title="Lò vi sóng có nướng Aqua">
                                                Lò vi sóng có nướng Aqua
                                                </a>
                                            </h3>
                                            <div class="price-box price-loop-style res-item">
                                                <span class="special-price">
                                                <span class="price">990.000₫</span>
                                                </span>
                                                <span class="old-price">
                                                <span class="price">
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
                <div class="hidden-xs hidden-sm col-md-3 col-lg-3 col-hg-2">
                    <div class="category_brands">
                        <div class="module-header index-header aniborder_title">
                            <h2 class="title-head module-title index-title">
                                <a href="nha-cua-doi-song">
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
                                    <a href="/collections/all?q=vendor:(Argo)" title="Argo">
                                        <img src="{{url('')}}/assets/frontend/v1.0/images/icons/swing.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/icons/category_vendor_image_argo.png" class="category-vendor-image-argo img-responsive" alt="argo">
                                        <script>
                                            $(".section_category_3 .category-vendor-image-argo").error(function(){
                                                $(this).attr("src","{{url('')}}/assets/frontend/v1.0/images/icons/logo.png");
                                            });
                                        </script>
                                    </a>
                                </li>
                                <li class="category_vendor_item">
                                    <a href="/collections/all?q=vendor:(Asanzo)" title="Asanzo">
                                        <img src="{{url('')}}/assets/frontend/v1.0/images/icons/swing.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/icons/category_vendor_image_asanzo.png" class="category-vendor-image-asanzo img-responsive" alt="asanzo">
                                        <script>
                                            $(".section_category_3 .category-vendor-image-asanzo").error(function(){
                                                $(this).attr("src","{{url('')}}/assets/frontend/v1.0/images/icons/logo.png");
                                            });
                                        </script>
                                    </a>
                                </li>
                                <li class="category_vendor_item">
                                    <a href="/collections/all?q=vendor:(Diamond)" title="Diamond">
                                        <img src="{{url('')}}/assets/frontend/v1.0/images/icons/swing.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/icons/category_vendor_image_diamond.png" class="category-vendor-image-diamond img-responsive" alt="diamond">
                                        <script>
                                            $(".section_category_3 .category-vendor-image-diamond").error(function(){
                                                $(this).attr("src","{{url('')}}/assets/frontend/v1.0/images/icons/logo.png");
                                            });
                                        </script>
                                    </a>
                                </li>
                                <li class="category_vendor_item">
                                    <a href="/collections/all?q=vendor:(Fujicook)" title="Fujicook">
                                        <img src="{{url('')}}/assets/frontend/v1.0/images/icons/swing.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/icons/category_vendor_image_fujicook.png" class="category-vendor-image-fujicook img-responsive" alt="fujicook">
                                        <script>
                                            $(".section_category_3 .category-vendor-image-fujicook").error(function(){
                                                $(this).attr("src","{{url('')}}/assets/frontend/v1.0/images/icons/logo.png");
                                            });
                                        </script>
                                    </a>
                                </li>
                                <li class="category_vendor_item">
                                    <a href="/collections/all?q=vendor:(Goldsun)" title="Goldsun">
                                        <img src="{{url('')}}/assets/frontend/v1.0/images/icons/swing.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/icons/category_vendor_image_goldsun.png" class="category-vendor-image-goldsun img-responsive" alt="goldsun">
                                        <script>
                                            $(".section_category_3 .category-vendor-image-goldsun").error(function(){
                                                $(this).attr("src","{{url('')}}/assets/frontend/v1.0/images/icons/logo.png");
                                            });
                                        </script>
                                    </a>
                                </li>
                                <li class="category_vendor_item">
                                    <a href="/collections/all?q=vendor:(HappyCook)" title="HappyCook">
                                        <img src="{{url('')}}/assets/frontend/v1.0/images/icons/swing.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/icons/category_vendor_image_happycook.png" class="category-vendor-image-happycook img-responsive" alt="happycook">
                                        <script>
                                            $(".section_category_3 .category-vendor-image-happycook").error(function(){
                                                $(this).attr("src","{{url('')}}/assets/frontend/v1.0/images/icons/logo.png");
                                            });
                                        </script>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="lib-section-8">
    <div class="section_banners large_banner">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="item image-hover-line large_banner_2">
                        <a href="#" title="Hè rộn ràng">
                        <img src="{{url('')}}/assets/frontend/v1.0/images/icons/swing.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/icons/large_banner_2.jpg" class="img-responsive" alt="he-ron-rang">
                        </a>
                        <span class="image-line"></span>
                        <span class="effect-line"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="lib-section-9">
    <div class="section_category section_category_5">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-hg-10">
                    <div class="category_content">
                        <div class="module-header index-header">
                            <div class="index-image-title">
                                <img src="{{url('')}}/assets/frontend/v1.0/images/icons/down.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/icons/category_5_image.png" class="img-responsive" alt="Điện thoại">
                            </div>
                            <h2 class="title-head module-title index-title">
                                <a href="dien-thoai-may-tinh-bang" title="Điện thoại">
                                <span>Điện thoại</span>
                                </a>
                            </h2>
                        </div>
                        <div class="module-content">
                            <div class="owl-theme owl-carousel nav-enable nav-left-right" data-hg-items="6" data-lg-items="5" data-md-items="4" data-sm-items="4" data-xs-items="3" data-xxs-items="2" data-nav="true" data-margin="10">
                                <div class="item">
                                    <div class="product-box">
                                        <div class="product-thumbnail">
                                            <a href="/dien-thoai-honor-7x-64gb-4gb-3-camera" title="Điện thoại Honor 7X 64GB/4GB 3 camera">
                                            <img class="img-responsive" src="{{url('')}}/assets/frontend/v1.0/images/icons/down.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/products/7329f4ef40e4ead01e089872faf6ae.jpg?v=1530847076703" alt="Điện thoại Honor 7X 64GB/4GB 3 camera">
                                            </a>
                                            <div class="product-action hidden-xs">
                                                <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-12107403" enctype="multipart/form-data">
                                                    <input type="hidden" name="variantId" value="19426545" />
                                                    <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
                                                    <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="fw product-review">
                                                <div class="bizweb-product-reviews-badge" data-id="12107403"></div>
                                            </div>
                                            <h3 class="product-name">
                                                <a href="/dien-thoai-honor-7x-64gb-4gb-3-camera" title="Điện thoại Honor 7X 64GB/4GB 3 camera">
                                                Điện thoại Honor 7X 64GB/4GB 3 camera
                                                </a>
                                            </h3>
                                            <div class="price-box price-loop-style res-item">
                                                <span class="special-price">
                                                <span class="price">5.490.000₫</span>
                                                </span>
                                                <span class="old-price">
                                                <span class="price">
                                                </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product-box">
                                        <div class="product-thumbnail">
                                            <a href="/dien-thoai-xiaomi-redmi-note-4" title="Điện thoại Xiaomi Redmi Note 4">
                                            <img class="img-responsive" src="{{url('')}}/assets/frontend/v1.0/images/icons/down.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/products/mph1075h1u2769d20170708t101837-ea2857ff-b65d-4b95-acfa-1ee679d7aacf.jpg?v=1530847075887" alt="Điện thoại Xiaomi Redmi Note 4">
                                            </a>
                                            <div class="product-action hidden-xs">
                                                <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-12107402" enctype="multipart/form-data">
                                                    <input type="hidden" name="variantId" value="19426544" />
                                                    <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
                                                    <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="fw product-review">
                                                <div class="bizweb-product-reviews-badge" data-id="12107402"></div>
                                            </div>
                                            <h3 class="product-name">
                                                <a href="/dien-thoai-xiaomi-redmi-note-4" title="Điện thoại Xiaomi Redmi Note 4">
                                                Điện thoại Xiaomi Redmi Note 4
                                                </a>
                                            </h3>
                                            <div class="price-box price-loop-style res-item">
                                                <span class="special-price">
                                                <span class="price">3.990.000₫</span>
                                                </span>
                                                <span class="old-price">
                                                <span class="price">
                                                </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product-box">
                                        <div class="product-thumbnail">
                                            <a href="/iphone-6-32gb-hang-chinh-hang" title="iPhone 6 32GB - hàng chính hãng">
                                            <img class="img-responsive" src="{{url('')}}/assets/frontend/v1.0/images/icons/down.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/products/f08e0e8a8c06ae2d12cbd3ccaedbf9.jpg?v=1530847074947" alt="iPhone 6 32GB - hàng chính hãng">
                                            </a>
                                            <div class="product-action hidden-xs">
                                                <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-12107401" enctype="multipart/form-data">
                                                    <input type="hidden" name="variantId" value="19426543" />
                                                    <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
                                                    <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="fw product-review">
                                                <div class="bizweb-product-reviews-badge" data-id="12107401"></div>
                                            </div>
                                            <h3 class="product-name">
                                                <a href="/iphone-6-32gb-hang-chinh-hang" title="iPhone 6 32GB - hàng chính hãng">
                                                iPhone 6 32GB - hàng chính hãng
                                                </a>
                                            </h3>
                                            <div class="price-box price-loop-style res-item">
                                                <span class="special-price">
                                                <span class="price">6.990.000₫</span>
                                                </span>
                                                <span class="old-price">
                                                <span class="price">
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
                                            <a href="/dien-thoai-xiaomi-redmi-5-16gb" title="Điện Thoại Xiaomi Redmi 5 16GB">
                                            <img class="img-responsive" src="{{url('')}}/assets/frontend/v1.0/images/icons/down.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/products/1348fb2bd0f05cdebcf54b3f03d8bf.jpg?v=1530847071463" alt="Điện Thoại Xiaomi Redmi 5 16GB">
                                            </a>
                                            <div class="product-action hidden-xs">
                                                <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-12107398" enctype="multipart/form-data">
                                                    <input type="hidden" name="variantId" value="19426540" />
                                                    <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
                                                    <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="fw product-review">
                                                <div class="bizweb-product-reviews-badge" data-id="12107398"></div>
                                            </div>
                                            <h3 class="product-name">
                                                <a href="/dien-thoai-xiaomi-redmi-5-16gb" title="Điện Thoại Xiaomi Redmi 5 16GB">
                                                Điện Thoại Xiaomi Redmi 5 16GB
                                                </a>
                                            </h3>
                                            <div class="price-box price-loop-style res-item">
                                                <span class="special-price">
                                                <span class="price">2.700.000₫</span>
                                                </span>
                                                <span class="old-price">
                                                <span class="price">
                                                </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product-box">
                                        <div class="product-thumbnail">
                                            <a href="/dien-thoai-blackberry-keyone-black-edition" title="Điện thoại BlackBerry KEYone Black Edition">
                                            <img class="img-responsive" src="{{url('')}}/assets/frontend/v1.0/images/icons/down.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/products/779db757e1a7de8820fb21a47e2af4.jpg?v=1530847070043" alt="Điện thoại BlackBerry KEYone Black Edition">
                                            </a>
                                            <div class="product-action hidden-xs">
                                                <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-12107397" enctype="multipart/form-data">
                                                    <input type="hidden" name="variantId" value="19426539" />
                                                    <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
                                                    <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="fw product-review">
                                                <div class="bizweb-product-reviews-badge" data-id="12107397"></div>
                                            </div>
                                            <h3 class="product-name">
                                                <a href="/dien-thoai-blackberry-keyone-black-edition" title="Điện thoại BlackBerry KEYone Black Edition">
                                                Điện thoại BlackBerry KEYone Black Edition
                                                </a>
                                            </h3>
                                            <div class="price-box price-loop-style res-item">
                                                <span class="special-price">
                                                <span class="price">15.890.000₫</span>
                                                </span>
                                                <span class="old-price">
                                                <span class="price">
                                                </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product-box">
                                        <div class="product-thumbnail">
                                            <a href="/dien-thoai-oppo-f3-hang-chinh-hang" title="Điện thoại OPPO F3 - hàng chính hãng">
                                            <img class="img-responsive" src="{{url('')}}/assets/frontend/v1.0/images/icons/down.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/products/1u5395d20170803t122400533902.jpg?v=1530847063917" alt="Điện thoại OPPO F3 - hàng chính hãng">
                                            </a>
                                            <div class="product-action hidden-xs">
                                                <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-12107394" enctype="multipart/form-data">
                                                    <input class="hidden" type="hidden" name="variantId" value="19426535" />
                                                    <button class="btn-cart btn button-hover-3 left-to" title="Xem thêm"  type="button" onclick="window.location.href='/dien-thoai-oppo-f3-hang-chinh-hang'" >
                                                    <span><i class="fa fa-share-alt" aria-hidden="true"></i></span>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="fw product-review">
                                                <div class="bizweb-product-reviews-badge" data-id="12107394"></div>
                                            </div>
                                            <h3 class="product-name">
                                                <a href="/dien-thoai-oppo-f3-hang-chinh-hang" title="Điện thoại OPPO F3 - hàng chính hãng">
                                                Điện thoại OPPO F3 - hàng chính hãng
                                                </a>
                                            </h3>
                                            <div class="price-box price-loop-style res-item">
                                                <span class="special-price">
                                                <span class="price">5.100.000₫</span>
                                                </span>
                                                <span class="old-price">
                                                <span class="price">
                                                </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product-box">
                                        <div class="product-thumbnail">
                                            <a href="/ipad-pro-10-5-inch-64gb-wifi" title="iPad Pro 10.5 inch 64GB Wifi">
                                            <img class="img-responsive" src="{{url('')}}/assets/frontend/v1.0/images/icons/down.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/products/1u2769d20170622t151452947848.jpg?v=1530847051740" alt="iPad Pro 10.5 inch 64GB Wifi">
                                            </a>
                                            <div class="product-action hidden-xs">
                                                <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-12107384" enctype="multipart/form-data">
                                                    <input type="hidden" name="variantId" value="19426525" />
                                                    <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
                                                    <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="fw product-review">
                                                <div class="bizweb-product-reviews-badge" data-id="12107384"></div>
                                            </div>
                                            <h3 class="product-name">
                                                <a href="/ipad-pro-10-5-inch-64gb-wifi" title="iPad Pro 10.5 inch 64GB Wifi">
                                                iPad Pro 10.5 inch 64GB Wifi
                                                </a>
                                            </h3>
                                            <div class="price-box price-loop-style res-item">
                                                <span class="special-price">
                                                <span class="price">17.000.000₫</span>
                                                </span>
                                                <span class="old-price">
                                                <span class="price">
                                                </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product-box">
                                        <div class="product-thumbnail">
                                            <a href="/ipad-mini-4-128gb-wifi" title="iPad Mini 4 128GB WiFi">
                                            <img class="img-responsive" src="{{url('')}}/assets/frontend/v1.0/images/icons/down.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/products/ebbcb9e41038659c714722e1e287f1.jpg?v=1530847050510" alt="iPad Mini 4 128GB WiFi">
                                            </a>
                                            <div class="product-action hidden-xs">
                                                <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-12107382" enctype="multipart/form-data">
                                                    <input type="hidden" name="variantId" value="19426523" />
                                                    <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
                                                    <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="fw product-review">
                                                <div class="bizweb-product-reviews-badge" data-id="12107382"></div>
                                            </div>
                                            <h3 class="product-name">
                                                <a href="/ipad-mini-4-128gb-wifi" title="iPad Mini 4 128GB WiFi">
                                                iPad Mini 4 128GB WiFi
                                                </a>
                                            </h3>
                                            <div class="price-box price-loop-style res-item">
                                                <span class="special-price">
                                                <span class="price">12.000.000₫</span>
                                                </span>
                                                <span class="old-price">
                                                <span class="price">
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
                <div class="hidden-xs hidden-sm col-md-3 col-lg-3 col-hg-2">
                    <div class="category_brands">
                        <div class="module-header index-header aniborder_title">
                            <h2 class="title-head module-title index-title">
                                <a href="dien-thoai-may-tinh-bang">
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
                                    <a href="/collections/all?q=vendor:(BlackBerry)" title="BlackBerry">
                                        <img src="{{url('')}}/assets/frontend/v1.0/images/icons/swing.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/icons/category_vendor_image_blackberry.png" class="category-vendor-image-blackberry img-responsive" alt="blackberry">
                                        <script>
                                            $(".section_category_5 .category-vendor-image-blackberry").error(function(){
                                                $(this).attr("src","{{url('')}}/assets/frontend/v1.0/images/icons/logo.png");
                                            });
                                        </script>
                                    </a>
                                </li>
                                <li class="category_vendor_item">
                                    <a href="/collections/all?q=vendor:(Honor)" title="Honor">
                                        <img src="{{url('')}}/assets/frontend/v1.0/images/icons/swing.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/icons/category_vendor_image_honor.png" class="category-vendor-image-honor img-responsive" alt="honor">
                                        <script>
                                            $(".section_category_5 .category-vendor-image-honor").error(function(){
                                                $(this).attr("src","{{url('')}}/assets/frontend/v1.0/images/icons/logo.png");
                                            });
                                        </script>
                                    </a>
                                </li>
                                <li class="category_vendor_item">
                                    <a href="/collections/all?q=vendor:(OPPO)" title="OPPO">
                                        <img src="{{url('')}}/assets/frontend/v1.0/images/icons/swing.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/icons/category_vendor_image_oppo.png" class="category-vendor-image-oppo img-responsive" alt="oppo">
                                        <script>
                                            $(".section_category_5 .category-vendor-image-oppo").error(function(){
                                                $(this).attr("src","{{url('')}}/assets/frontend/v1.0/images/icons/logo.png");
                                            });
                                        </script>
                                    </a>
                                </li>
                                <li class="category_vendor_item">
                                    <a href="/collections/all?q=vendor:(Samsung)" title="Samsung">
                                        <img src="{{url('')}}/assets/frontend/v1.0/images/icons/swing.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/icons/category_vendor_image_samsung.png" class="category-vendor-image-samsung img-responsive" alt="samsung">
                                        <script>
                                            $(".section_category_5 .category-vendor-image-samsung").error(function(){
                                                $(this).attr("src","{{url('')}}/assets/frontend/v1.0/images/icons/logo.png");
                                            });
                                        </script>
                                    </a>
                                </li>
                                <li class="category_vendor_item">
                                    <a href="/collections/all?q=vendor:(Xiaomi)" title="Xiaomi">
                                        <img src="{{url('')}}/assets/frontend/v1.0/images/icons/swing.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/icons/category_vendor_image_xiaomi.png" class="category-vendor-image-xiaomi img-responsive" alt="xiaomi">
                                        <script>
                                            $(".section_category_5 .category-vendor-image-xiaomi").error(function(){
                                                $(this).attr("src","{{url('')}}/assets/frontend/v1.0/images/icons/logo.png");
                                            });
                                        </script>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="lib-section-11">
    <div class="section_banners large_banner">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="item image-hover-line large_banner_3">
                        <a href="#" title="Đồ chơi cho bé">
                        <img src="{{url('')}}/assets/frontend/v1.0/images/icons/swing.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/icons/large_banner_3.jpg" class="img-responsive" alt="do-choi-cho-be">
                        </a>
                        <span class="image-line"></span>
                        <span class="effect-line"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="lib-section-13">
    <div class="section_category section_category_8">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-hg-10">
                    <div class="category_content">
                        <div class="module-header index-header">
                            <div class="index-image-title">
                                <img src="{{url('')}}/assets/frontend/v1.0/images/icons/down.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/icons/category_8_image.png" class="img-responsive" alt="Điện máy">
                            </div>
                            <h2 class="title-head module-title index-title">
                                <a href="dien-may" title="Điện máy">
                                <span>Điện máy</span>
                                </a>
                            </h2>
                            <div class="index-title-links hidden-xs">
                                <div class="index-title-link-items owl-theme owl-carousel nav-enable nav-right" data-hg-items="5" data-lg-items="4" data-md-items="3" data-sm-items="2" data-xs-items="2" data-xxs-items="1" data-nav="true" data-margin="20">
                                    <div class="index-title-link-item">
                                        <a href="/tivi-tu-lanh" title="Tivi - Tủ lạnh">
                                        <span>Tivi - Tủ lạnh</span>
                                        </a>
                                    </div>
                                    <div class="index-title-link-item">
                                        <a href="/tivi" title="Tivi">
                                        <span>Tivi</span>
                                        </a>
                                    </div>
                                    <div class="index-title-link-item">
                                        <a href="/dieu-hoa" title="Điều hoà">
                                        <span>Điều hoà</span>
                                        </a>
                                    </div>
                                    <div class="index-title-link-item">
                                        <a href="/tu-lanh" title="Tủ lạnh">
                                        <span>Tủ lạnh</span>
                                        </a>
                                    </div>
                                    <div class="index-title-link-item">
                                        <a href="/may-giat" title="Máy giặt">
                                        <span>Máy giặt</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="index-title-links hidden-sm hidden-md hidden-lg hidden-hg">
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
                            </div>
                        </div>
                        <div class="module-content">
                            <div class="owl-theme owl-carousel nav-enable nav-left-right" data-hg-items="6" data-lg-items="5" data-md-items="4" data-sm-items="4" data-xs-items="3" data-xxs-items="2" data-nav="true" data-margin="10">
                                <div class="item">
                                    <div class="product-box">
                                        <div class="product-thumbnail">
                                            <a href="/tu-lanh-side-by-side-electrolux" title="Tủ lạnh Side By Side Electrolux">
                                            <img class="img-responsive" src="{{url('')}}/assets/frontend/v1.0/images/icons/down.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/products/ese5687sbthu2751d20161026t1746.jpg?v=1530847018187" alt="Tủ lạnh Side By Side Electrolux">
                                            </a>
                                            <div class="product-action hidden-xs">
                                                <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-12107336" enctype="multipart/form-data">
                                                    <input type="hidden" name="variantId" value="19426472" />
                                                    <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
                                                    <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="fw product-review">
                                                <div class="bizweb-product-reviews-badge" data-id="12107336"></div>
                                            </div>
                                            <h3 class="product-name">
                                                <a href="/tu-lanh-side-by-side-electrolux" title="Tủ lạnh Side By Side Electrolux">
                                                Tủ lạnh Side By Side Electrolux
                                                </a>
                                            </h3>
                                            <div class="price-box price-loop-style res-item">
                                                <span class="special-price">
                                                <span class="price">43.990.000₫</span>
                                                </span>
                                                <span class="old-price">
                                                <span class="price">
                                                </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product-box">
                                        <div class="product-thumbnail">
                                            <a href="/may-giat-say-cua-truoc-inverter" title="Máy giặt sấy cửa trước Inverter">
                                            <img class="img-responsive" src="{{url('')}}/assets/frontend/v1.0/images/icons/down.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/products/2e2029eb86097da239e55318289b6c.jpg?v=1530847004613" alt="Máy giặt sấy cửa trước Inverter">
                                            </a>
                                            <div class="product-action hidden-xs">
                                                <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-12107324" enctype="multipart/form-data">
                                                    <input type="hidden" name="variantId" value="19426460" />
                                                    <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
                                                    <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="fw product-review">
                                                <div class="bizweb-product-reviews-badge" data-id="12107324"></div>
                                            </div>
                                            <h3 class="product-name">
                                                <a href="/may-giat-say-cua-truoc-inverter" title="Máy giặt sấy cửa trước Inverter">
                                                Máy giặt sấy cửa trước Inverter
                                                </a>
                                            </h3>
                                            <div class="price-box price-loop-style res-item">
                                                <span class="special-price">
                                                <span class="price">42.790.000₫</span>
                                                </span>
                                                <span class="old-price">
                                                <span class="price">
                                                </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product-box">
                                        <div class="product-thumbnail">
                                            <a href="/tu-lanh-side-by-side-inverter-hitachi" title="Tủ lạnh Side By Side Inverter Hitachi">
                                            <img class="img-responsive" src="{{url('')}}/assets/frontend/v1.0/images/icons/down.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/products/hitachirm700pgv21u579d20160608.jpg?v=1530847016280" alt="Tủ lạnh Side By Side Inverter Hitachi">
                                            </a>
                                            <div class="product-action hidden-xs">
                                                <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-12107334" enctype="multipart/form-data">
                                                    <input type="hidden" name="variantId" value="19426470" />
                                                    <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
                                                    <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="fw product-review">
                                                <div class="bizweb-product-reviews-badge" data-id="12107334"></div>
                                            </div>
                                            <h3 class="product-name">
                                                <a href="/tu-lanh-side-by-side-inverter-hitachi" title="Tủ lạnh Side By Side Inverter Hitachi">
                                                Tủ lạnh Side By Side Inverter Hitachi
                                                </a>
                                            </h3>
                                            <div class="price-box price-loop-style res-item">
                                                <span class="special-price">
                                                <span class="price">38.900.000₫</span>
                                                </span>
                                                <span class="old-price">
                                                <span class="price">
                                                </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product-box">
                                        <div class="product-thumbnail">
                                            <a href="/tu-lanh-inverter-samsung-rs552nruasl" title="Tủ lạnh Inverter Samsung RS552NRUASL">
                                            <img class="img-responsive" src="{{url('')}}/assets/frontend/v1.0/images/icons/down.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/products/10325935615681u2751d20161220t1.jpg?v=1530847021563" alt="Tủ lạnh Inverter Samsung RS552NRUASL">
                                            </a>
                                            <div class="product-action hidden-xs">
                                                <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-12107339" enctype="multipart/form-data">
                                                    <input type="hidden" name="variantId" value="19426475" />
                                                    <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
                                                    <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="fw product-review">
                                                <div class="bizweb-product-reviews-badge" data-id="12107339"></div>
                                            </div>
                                            <h3 class="product-name">
                                                <a href="/tu-lanh-inverter-samsung-rs552nruasl" title="Tủ lạnh Inverter Samsung RS552NRUASL">
                                                Tủ lạnh Inverter Samsung RS552NRUASL
                                                </a>
                                            </h3>
                                            <div class="price-box price-loop-style res-item">
                                                <span class="special-price">
                                                <span class="price">27.900.000₫</span>
                                                </span>
                                                <span class="old-price">
                                                <span class="price">
                                                </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product-box">
                                        <div class="product-thumbnail">
                                            <a href="/tu-lanh-inverter-hitachi-r-w660pgv3" title="Tủ lạnh Inverter Hitachi R-W660PGV3">
                                            <img class="img-responsive" src="{{url('')}}/assets/frontend/v1.0/images/icons/down.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/products/hitachirw660pgv3gbk1u579d20160.jpg?v=1530847017097" alt="Tủ lạnh Inverter Hitachi R-W660PGV3">
                                            </a>
                                            <div class="product-action hidden-xs">
                                                <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-12107335" enctype="multipart/form-data">
                                                    <input type="hidden" name="variantId" value="19426471" />
                                                    <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
                                                    <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="fw product-review">
                                                <div class="bizweb-product-reviews-badge" data-id="12107335"></div>
                                            </div>
                                            <h3 class="product-name">
                                                <a href="/tu-lanh-inverter-hitachi-r-w660pgv3" title="Tủ lạnh Inverter Hitachi R-W660PGV3">
                                                Tủ lạnh Inverter Hitachi R-W660PGV3
                                                </a>
                                            </h3>
                                            <div class="price-box price-loop-style res-item">
                                                <span class="special-price">
                                                <span class="price">22.990.000₫</span>
                                                </span>
                                                <span class="old-price">
                                                <span class="price">
                                                </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product-box">
                                        <div class="product-thumbnail">
                                            <a href="/may-giat-say-cua-truoc-lg-204" title="Máy giặt sấy cửa trước LG 204">
                                            <img class="img-responsive" src="{{url('')}}/assets/frontend/v1.0/images/icons/down.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/products/f2514dtgwu2751d20161004t221203.jpg?v=1530847002530" alt="Máy giặt sấy cửa trước LG 204">
                                            </a>
                                            <div class="product-action hidden-xs">
                                                <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-12107321" enctype="multipart/form-data">
                                                    <input type="hidden" name="variantId" value="19426457" />
                                                    <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
                                                    <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="fw product-review">
                                                <div class="bizweb-product-reviews-badge" data-id="12107321"></div>
                                            </div>
                                            <h3 class="product-name">
                                                <a href="/may-giat-say-cua-truoc-lg-204" title="Máy giặt sấy cửa trước LG 204">
                                                Máy giặt sấy cửa trước LG 204
                                                </a>
                                            </h3>
                                            <div class="price-box price-loop-style res-item">
                                                <span class="special-price">
                                                <span class="price">22.690.000₫</span>
                                                </span>
                                                <span class="old-price">
                                                <span class="price">
                                                </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product-box">
                                        <div class="product-thumbnail">
                                            <a href="/may-lanh-inverter-toshiba-h18pkcvg" title="Máy lạnh Inverter Toshiba H18PKCVG">
                                            <img class="img-responsive" src="{{url('')}}/assets/frontend/v1.0/images/icons/down.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/products/ed6cd5df9bcec769a5c2f36de857a1.jpg?v=1530847023657" alt="Máy lạnh Inverter Toshiba H18PKCVG">
                                            </a>
                                            <div class="product-action hidden-xs">
                                                <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-12107342" enctype="multipart/form-data">
                                                    <input type="hidden" name="variantId" value="19426478" />
                                                    <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
                                                    <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="fw product-review">
                                                <div class="bizweb-product-reviews-badge" data-id="12107342"></div>
                                            </div>
                                            <h3 class="product-name">
                                                <a href="/may-lanh-inverter-toshiba-h18pkcvg" title="Máy lạnh Inverter Toshiba H18PKCVG">
                                                Máy lạnh Inverter Toshiba H18PKCVG
                                                </a>
                                            </h3>
                                            <div class="price-box price-loop-style res-item">
                                                <span class="special-price">
                                                <span class="price">17.900.000₫</span>
                                                </span>
                                                <span class="old-price">
                                                <span class="price">
                                                </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product-box">
                                        <div class="product-thumbnail">
                                            <a href="/tu-lanh-inverter-toshiba-wg66vdaz-gg" title="Tủ lạnh Inverter Toshiba WG66VDAZ-GG">
                                            <img class="img-responsive" src="{{url('')}}/assets/frontend/v1.0/images/icons/down.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/products/wg66vdazggu2751d20161107t11013.jpg?v=1530847014557" alt="Tủ lạnh Inverter Toshiba WG66VDAZ-GG">
                                            </a>
                                            <div class="product-action hidden-xs">
                                                <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-12107332" enctype="multipart/form-data">
                                                    <input type="hidden" name="variantId" value="19426468" />
                                                    <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
                                                    <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="fw product-review">
                                                <div class="bizweb-product-reviews-badge" data-id="12107332"></div>
                                            </div>
                                            <h3 class="product-name">
                                                <a href="/tu-lanh-inverter-toshiba-wg66vdaz-gg" title="Tủ lạnh Inverter Toshiba WG66VDAZ-GG">
                                                Tủ lạnh Inverter Toshiba WG66VDAZ-GG
                                                </a>
                                            </h3>
                                            <div class="price-box price-loop-style res-item">
                                                <span class="special-price">
                                                <span class="price">17.490.000₫</span>
                                                </span>
                                                <span class="old-price">
                                                <span class="price">
                                                </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product-box">
                                        <div class="product-thumbnail">
                                            <a href="/tu-lanh-inverter-toshiba-wg58vdaz" title="Tủ lạnh Inverter Toshiba WG58VDAZ">
                                            <img class="img-responsive" src="{{url('')}}/assets/frontend/v1.0/images/icons/down.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/products/toshibagrwg58vdaz3org02u600d20.jpg?v=1530847020497" alt="Tủ lạnh Inverter Toshiba WG58VDAZ">
                                            </a>
                                            <div class="product-action hidden-xs">
                                                <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-12107338" enctype="multipart/form-data">
                                                    <input type="hidden" name="variantId" value="19426474" />
                                                    <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
                                                    <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="fw product-review">
                                                <div class="bizweb-product-reviews-badge" data-id="12107338"></div>
                                            </div>
                                            <h3 class="product-name">
                                                <a href="/tu-lanh-inverter-toshiba-wg58vdaz" title="Tủ lạnh Inverter Toshiba WG58VDAZ">
                                                Tủ lạnh Inverter Toshiba WG58VDAZ
                                                </a>
                                            </h3>
                                            <div class="price-box price-loop-style res-item">
                                                <span class="special-price">
                                                <span class="price">16.900.000₫</span>
                                                </span>
                                                <span class="old-price">
                                                <span class="price">
                                                </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product-box">
                                        <div class="product-thumbnail">
                                            <a href="/tu-lanh-inverter-sharp-sj-x176e-sl" title="Tủ lạnh Inverter Sharp SJ-X176E-SL">
                                            <img class="img-responsive" src="{{url('')}}/assets/frontend/v1.0/images/icons/down.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/products/6370ac59ea1fc493d283d305bd105b.jpg?v=1530847018947" alt="Tủ lạnh Inverter Sharp SJ-X176E-SL">
                                            </a>
                                            <div class="product-action hidden-xs">
                                                <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-12107337" enctype="multipart/form-data">
                                                    <input type="hidden" name="variantId" value="19426473" />
                                                    <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
                                                    <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="fw product-review">
                                                <div class="bizweb-product-reviews-badge" data-id="12107337"></div>
                                            </div>
                                            <h3 class="product-name">
                                                <a href="/tu-lanh-inverter-sharp-sj-x176e-sl" title="Tủ lạnh Inverter Sharp SJ-X176E-SL">
                                                Tủ lạnh Inverter Sharp SJ-X176E-SL
                                                </a>
                                            </h3>
                                            <div class="price-box price-loop-style res-item">
                                                <span class="special-price">
                                                <span class="price">16.900.000₫</span>
                                                </span>
                                                <span class="old-price">
                                                <span class="price">
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
                <div class="hidden-xs hidden-sm col-md-3 col-lg-3 col-hg-2">
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
                </div>
            </div>
        </div>
    </div>
</section>
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
</section>
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
@stop