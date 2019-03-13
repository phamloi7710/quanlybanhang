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
                            <strong itemprop="title">{{$page->title}}</strong>
                        </li>
                    
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="collection-template">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 collection-header">
                <div class="module-header">
                    <h1 class="title-head collection-title">
                        Sản phẩm khuyến mãi
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <section class="collection col-lg-9 col-md-9 col-sm-12 col-xs-12  col-lg-push-3 col-md-push-3 col-sm-12 col-xs-12">
                <div class="main_container">
                    <!--<h1 class="title-head collection-title">
                        Sản phẩm khuyến mãi
                        </h1>-->
                    <div class="collection_description fw bg-warning padding-15">
                        <p>Sản phẩm khuyến mãi</p>
                    </div>
                    <div class="category-products products">
                        <div class="module-header margin-bottom-15">
                            <div class="sortPagiBar">
                                <div id="sort-by">
                                    <div class="border_sort">
                                        <select onchange="sortby(this.value)">
                                            <option class="valued" value="default">Mặc định</option>
                                            <option value="price-asc">Giá tăng dần</option>
                                            <option value="price-desc">Giá giảm dần</option>
                                            <option value="alpha-asc">Từ A-Z</option>
                                            <option value="alpha-desc">Từ Z-A</option>
                                            <option value="created-asc">Cũ đến mới</option>
                                            <option value="created-desc">Mới đến cũ</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="module-content">
                            <section class="products-view products-view-grid">
                                <div class="row">
                                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 col-item">
                                        <div class="product-box">
                                            <div class="product-thumbnail">
                                                <div class="tag-item tag-sale sale-flash">-9%</div>
                                                <a href="/internet-tivi-sony-40-inch-kdl" title="Internet Tivi Sony 40 inch KDL">
                                                <img class="img-responsive" src="//bizweb.dktcdn.net/thumb/large/100/321/719/products/a29b6e93b0b479041f92d0ecd784f2.jpg?v=1530847043140" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/321/719/products/a29b6e93b0b479041f92d0ecd784f2.jpg?v=1530847043140" alt="Internet Tivi Sony 40 inch KDL">
                                                </a>
                                                <div class="product-action hidden-xs">
                                                    <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-12107375" enctype="multipart/form-data">
                                                        <input type="hidden" name="variantId" value="19426516">
                                                        <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
                                                        <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="fw product-review">
                                                    <div class="bizweb-product-reviews-badge" data-id="12107375">
                                                        <div class="bizweb-product-reviews-star" data-score="0" data-number="5" title="Not rated yet!" style="color: rgb(255, 190, 0);"><i data-alt="1" class="star-off-png" title="Not rated yet!"></i>&nbsp;<i data-alt="2" class="star-off-png" title="Not rated yet!"></i>&nbsp;<i data-alt="3" class="star-off-png" title="Not rated yet!"></i>&nbsp;<i data-alt="4" class="star-off-png" title="Not rated yet!"></i>&nbsp;<i data-alt="5" class="star-off-png" title="Not rated yet!"></i><input name="score" type="hidden" readonly=""></div>
                                                        <div>
                                                            <p>0</p>
                                                        </div>
                                                        <div><img src="https://productreviews.bizwebapps.vn//assets/images/user.png" width="18" height="17"></div>
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
                                                    <span class="price">
                                                    9.790.000₫
                                                    </span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 col-item">
                                        <div class="product-box">
                                            <div class="product-thumbnail">
                                                <div class="tag-item tag-sale sale-flash">-11%</div>
                                                <a href="/android-tivi-sony-49-inch-4k" title="Android Tivi Sony 49 inch 4K">
                                                <img class="img-responsive" src="//bizweb.dktcdn.net/thumb/large/100/321/719/products/f3be4635023407ec3031760273170f.jpg?v=1530847039123" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/321/719/products/f3be4635023407ec3031760273170f.jpg?v=1530847039123" alt="Android Tivi Sony 49 inch 4K">
                                                </a>
                                                <div class="product-action hidden-xs">
                                                    <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-12107368" enctype="multipart/form-data">
                                                        <input type="hidden" name="variantId" value="19426506">
                                                        <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
                                                        <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="fw product-review">
                                                    <div class="bizweb-product-reviews-badge" data-id="12107368">
                                                        <div class="bizweb-product-reviews-star" data-score="0" data-number="5" title="Not rated yet!" style="color: rgb(255, 190, 0);"><i data-alt="1" class="star-off-png" title="Not rated yet!"></i>&nbsp;<i data-alt="2" class="star-off-png" title="Not rated yet!"></i>&nbsp;<i data-alt="3" class="star-off-png" title="Not rated yet!"></i>&nbsp;<i data-alt="4" class="star-off-png" title="Not rated yet!"></i>&nbsp;<i data-alt="5" class="star-off-png" title="Not rated yet!"></i><input name="score" type="hidden" readonly=""></div>
                                                        <div>
                                                            <p>0</p>
                                                        </div>
                                                        <div><img src="https://productreviews.bizwebapps.vn//assets/images/user.png" width="18" height="17"></div>
                                                    </div>
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
                                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 col-item">
                                        <div class="product-box">
                                            <div class="product-thumbnail">
                                                <div class="tag-item tag-sale sale-flash">-24%</div>
                                                <a href="/smart-tivi-toshiba-43-inch-4k" title="Smart Tivi Toshiba 43 inch 4K">
                                                <img class="img-responsive" src="//bizweb.dktcdn.net/thumb/large/100/321/719/products/4121c4d0a678e4ff32ad91c8862b20.jpg?v=1530847048630" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/321/719/products/4121c4d0a678e4ff32ad91c8862b20.jpg?v=1530847048630" alt="Smart Tivi Toshiba 43 inch 4K">
                                                </a>
                                                <div class="product-action hidden-xs">
                                                    <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-12107380" enctype="multipart/form-data">
                                                        <input type="hidden" name="variantId" value="19426521">
                                                        <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
                                                        <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="fw product-review">
                                                    <div class="bizweb-product-reviews-badge" data-id="12107380">
                                                        <div class="bizweb-product-reviews-star" data-score="0" data-number="5" title="Not rated yet!" style="color: rgb(255, 190, 0);"><i data-alt="1" class="star-off-png" title="Not rated yet!"></i>&nbsp;<i data-alt="2" class="star-off-png" title="Not rated yet!"></i>&nbsp;<i data-alt="3" class="star-off-png" title="Not rated yet!"></i>&nbsp;<i data-alt="4" class="star-off-png" title="Not rated yet!"></i>&nbsp;<i data-alt="5" class="star-off-png" title="Not rated yet!"></i><input name="score" type="hidden" readonly=""></div>
                                                        <div>
                                                            <p>0</p>
                                                        </div>
                                                        <div><img src="https://productreviews.bizwebapps.vn//assets/images/user.png" width="18" height="17"></div>
                                                    </div>
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
                                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 col-item">
                                        <div class="product-box">
                                            <div class="product-thumbnail">
                                                <div class="tag-item tag-sale sale-flash">-22%</div>
                                                <a href="/man-hinh-lg-24mp88hv-s-24inch-fullhd" title="Màn hình LG 24MP88HV-S 24inch FullHD">
                                                <img class="img-responsive" src="//bizweb.dktcdn.net/thumb/large/100/321/719/products/f5f3ac20e04def435321cd85e4e72a.jpg?v=1530847055483" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/321/719/products/f5f3ac20e04def435321cd85e4e72a.jpg?v=1530847055483" alt="Màn hình LG 24MP88HV-S 24inch FullHD">
                                                </a>
                                                <div class="product-action hidden-xs">
                                                    <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-12107387" enctype="multipart/form-data">
                                                        <input type="hidden" name="variantId" value="19426528">
                                                        <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
                                                        <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="fw product-review">
                                                    <div class="bizweb-product-reviews-badge" data-id="12107387">
                                                        <div class="bizweb-product-reviews-star" data-score="0" data-number="5" title="Not rated yet!" style="color: rgb(255, 190, 0);"><i data-alt="1" class="star-off-png" title="Not rated yet!"></i>&nbsp;<i data-alt="2" class="star-off-png" title="Not rated yet!"></i>&nbsp;<i data-alt="3" class="star-off-png" title="Not rated yet!"></i>&nbsp;<i data-alt="4" class="star-off-png" title="Not rated yet!"></i>&nbsp;<i data-alt="5" class="star-off-png" title="Not rated yet!"></i><input name="score" type="hidden" readonly=""></div>
                                                        <div>
                                                            <p>0</p>
                                                        </div>
                                                        <div><img src="https://productreviews.bizwebapps.vn//assets/images/user.png" width="18" height="17"></div>
                                                    </div>
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
                                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 col-item">
                                        <div class="product-box">
                                            <div class="product-thumbnail">
                                                <div class="tag-item tag-sale sale-flash">-14%</div>
                                                <a href="/tivi-led-panasonic-32-inch" title="Tivi LED Panasonic 32 inch">
                                                <img class="img-responsive" src="//bizweb.dktcdn.net/thumb/large/100/321/719/products/7fb7c7533adc6066d00b43b38abd4f.jpg?v=1530847047583" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/321/719/products/7fb7c7533adc6066d00b43b38abd4f.jpg?v=1530847047583" alt="Tivi LED Panasonic 32 inch">
                                                </a>
                                                <div class="product-action hidden-xs">
                                                    <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-12107379" enctype="multipart/form-data">
                                                        <input type="hidden" name="variantId" value="19426520">
                                                        <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
                                                        <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="fw product-review">
                                                    <div class="bizweb-product-reviews-badge" data-id="12107379">
                                                        <div class="bizweb-product-reviews-star" data-score="0" data-number="5" title="Not rated yet!" style="color: rgb(255, 190, 0);"><i data-alt="1" class="star-off-png" title="Not rated yet!"></i>&nbsp;<i data-alt="2" class="star-off-png" title="Not rated yet!"></i>&nbsp;<i data-alt="3" class="star-off-png" title="Not rated yet!"></i>&nbsp;<i data-alt="4" class="star-off-png" title="Not rated yet!"></i>&nbsp;<i data-alt="5" class="star-off-png" title="Not rated yet!"></i><input name="score" type="hidden" readonly=""></div>
                                                        <div>
                                                            <p>0</p>
                                                        </div>
                                                        <div><img src="https://productreviews.bizwebapps.vn//assets/images/user.png" width="18" height="17"></div>
                                                    </div>
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
                                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 col-item">
                                        <div class="product-box">
                                            <div class="product-thumbnail">
                                                <div class="tag-item tag-sale sale-flash">-23%</div>
                                                <a href="/man-hinh-benq-gw2270-22inch-fullhd" title="Màn hình BenQ GW2270 22inch FullHD">
                                                <img class="img-responsive" src="//bizweb.dktcdn.net/thumb/large/100/321/719/products/gw22701u579d20161011t162311244.jpg?v=1530847059283" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/321/719/products/gw22701u579d20161011t162311244.jpg?v=1530847059283" alt="Màn hình BenQ GW2270 22inch FullHD">
                                                </a>
                                                <div class="product-action hidden-xs">
                                                    <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-12107391" enctype="multipart/form-data">
                                                        <input type="hidden" name="variantId" value="19426532">
                                                        <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
                                                        <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="fw product-review">
                                                    <div class="bizweb-product-reviews-badge" data-id="12107391">
                                                        <div class="bizweb-product-reviews-star" data-score="0" data-number="5" title="Not rated yet!" style="color: rgb(255, 190, 0);"><i data-alt="1" class="star-off-png" title="Not rated yet!"></i>&nbsp;<i data-alt="2" class="star-off-png" title="Not rated yet!"></i>&nbsp;<i data-alt="3" class="star-off-png" title="Not rated yet!"></i>&nbsp;<i data-alt="4" class="star-off-png" title="Not rated yet!"></i>&nbsp;<i data-alt="5" class="star-off-png" title="Not rated yet!"></i><input name="score" type="hidden" readonly=""></div>
                                                        <div>
                                                            <p>0</p>
                                                        </div>
                                                        <div><img src="https://productreviews.bizwebapps.vn//assets/images/user.png" width="18" height="17"></div>
                                                    </div>
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
                                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 col-item">
                                        <div class="product-box">
                                            <div class="product-thumbnail">
                                                <div class="tag-item tag-sale sale-flash">-24%</div>
                                                <a href="/may-giat-cua-ngang-inverter-lg" title="Máy giặt cửa ngang Inverter LG">
                                                <img class="img-responsive" src="//bizweb.dktcdn.net/thumb/large/100/321/719/products/0u2751d20170616t102747568611.jpg?v=1530847013373" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/321/719/products/0u2751d20170616t102747568611.jpg?v=1530847013373" alt="Máy giặt cửa ngang Inverter LG">
                                                </a>
                                                <div class="product-action hidden-xs">
                                                    <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-12107331" enctype="multipart/form-data">
                                                        <input type="hidden" name="variantId" value="19426467">
                                                        <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
                                                        <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="fw product-review">
                                                    <div class="bizweb-product-reviews-badge" data-id="12107331">
                                                        <div class="bizweb-product-reviews-star" data-score="0" data-number="5" title="Not rated yet!" style="color: rgb(255, 190, 0);"><i data-alt="1" class="star-off-png" title="Not rated yet!"></i>&nbsp;<i data-alt="2" class="star-off-png" title="Not rated yet!"></i>&nbsp;<i data-alt="3" class="star-off-png" title="Not rated yet!"></i>&nbsp;<i data-alt="4" class="star-off-png" title="Not rated yet!"></i>&nbsp;<i data-alt="5" class="star-off-png" title="Not rated yet!"></i><input name="score" type="hidden" readonly=""></div>
                                                        <div>
                                                            <p>0</p>
                                                        </div>
                                                        <div><img src="https://productreviews.bizwebapps.vn//assets/images/user.png" width="18" height="17"></div>
                                                    </div>
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
                                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 col-item">
                                        <div class="product-box">
                                            <div class="product-thumbnail">
                                                <div class="tag-item tag-sale sale-flash">-13%</div>
                                                <a href="/may-lanh-casper-lc-12tl11" title="Máy lạnh Casper LC-12TL11">
                                                <img class="img-responsive" src="//bizweb.dktcdn.net/thumb/large/100/321/719/products/lc12tl11u2751d20170116t2350437-d4ece7f7-2e70-46aa-8df3-fa53cffb7b78.jpg?v=1530847028600" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/321/719/products/lc12tl11u2751d20170116t2350437-d4ece7f7-2e70-46aa-8df3-fa53cffb7b78.jpg?v=1530847028600" alt="Máy lạnh Casper LC-12TL11">
                                                </a>
                                                <div class="product-action hidden-xs">
                                                    <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-12107353" enctype="multipart/form-data">
                                                        <input type="hidden" name="variantId" value="19426489">
                                                        <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
                                                        <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="fw product-review">
                                                    <div class="bizweb-product-reviews-badge" data-id="12107353">
                                                        <div class="bizweb-product-reviews-star" data-score="0" data-number="5" title="Not rated yet!" style="color: rgb(255, 190, 0);"><i data-alt="1" class="star-off-png" title="Not rated yet!"></i>&nbsp;<i data-alt="2" class="star-off-png" title="Not rated yet!"></i>&nbsp;<i data-alt="3" class="star-off-png" title="Not rated yet!"></i>&nbsp;<i data-alt="4" class="star-off-png" title="Not rated yet!"></i>&nbsp;<i data-alt="5" class="star-off-png" title="Not rated yet!"></i><input name="score" type="hidden" readonly=""></div>
                                                        <div>
                                                            <p>0</p>
                                                        </div>
                                                        <div><img src="https://productreviews.bizwebapps.vn//assets/images/user.png" width="18" height="17"></div>
                                                    </div>
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
                                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 col-item">
                                        <div class="product-box">
                                            <div class="product-thumbnail">
                                                <div class="tag-item tag-sale sale-flash">-18%</div>
                                                <a href="/may-giat-cua-truoc-lg" title="Máy giặt cửa trước Inverter LG">
                                                <img class="img-responsive" src="//bizweb.dktcdn.net/thumb/large/100/321/719/products/0u5488d20170918t184107496054.jpg?v=1530847005840" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/321/719/products/0u5488d20170918t184107496054.jpg?v=1530847005840" alt="Máy giặt cửa trước Inverter LG">
                                                </a>
                                                <div class="product-action hidden-xs">
                                                    <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-12107325" enctype="multipart/form-data">
                                                        <input type="hidden" name="variantId" value="19426461">
                                                        <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
                                                        <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="fw product-review">
                                                    <div class="bizweb-product-reviews-badge" data-id="12107325">
                                                        <div class="bizweb-product-reviews-star" data-score="0" data-number="5" title="Not rated yet!" style="color: rgb(255, 190, 0);"><i data-alt="1" class="star-off-png" title="Not rated yet!"></i>&nbsp;<i data-alt="2" class="star-off-png" title="Not rated yet!"></i>&nbsp;<i data-alt="3" class="star-off-png" title="Not rated yet!"></i>&nbsp;<i data-alt="4" class="star-off-png" title="Not rated yet!"></i>&nbsp;<i data-alt="5" class="star-off-png" title="Not rated yet!"></i><input name="score" type="hidden" readonly=""></div>
                                                        <div>
                                                            <p>0</p>
                                                        </div>
                                                        <div><img src="https://productreviews.bizwebapps.vn//assets/images/user.png" width="18" height="17"></div>
                                                    </div>
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
                                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 col-item">
                                        <div class="product-box">
                                            <div class="product-thumbnail">
                                                <div class="tag-item tag-sale sale-flash">-14%</div>
                                                <a href="/dien-thoai-xiaomi-mi-a1-64gb-4gb" title="Điện thoại Xiaomi Mi A1 64GB/4GB">
                                                <img class="img-responsive" src="//bizweb.dktcdn.net/thumb/large/100/321/719/products/0u4939d20170926t1409476909912.jpg?v=1530847074027" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/321/719/products/0u4939d20170926t1409476909912.jpg?v=1530847074027" alt="Điện thoại Xiaomi Mi A1 64GB/4GB">
                                                </a>
                                                <div class="product-action hidden-xs">
                                                    <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-12107400" enctype="multipart/form-data">
                                                        <input type="hidden" name="variantId" value="19426542">
                                                        <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
                                                        <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="fw product-review">
                                                    <div class="bizweb-product-reviews-badge" data-id="12107400">
                                                        <div class="bizweb-product-reviews-star" data-score="0" data-number="5" title="Not rated yet!" style="color: rgb(255, 190, 0);"><i data-alt="1" class="star-off-png" title="Not rated yet!"></i>&nbsp;<i data-alt="2" class="star-off-png" title="Not rated yet!"></i>&nbsp;<i data-alt="3" class="star-off-png" title="Not rated yet!"></i>&nbsp;<i data-alt="4" class="star-off-png" title="Not rated yet!"></i>&nbsp;<i data-alt="5" class="star-off-png" title="Not rated yet!"></i><input name="score" type="hidden" readonly=""></div>
                                                        <div>
                                                            <p>0</p>
                                                        </div>
                                                        <div><img src="https://productreviews.bizwebapps.vn//assets/images/user.png" width="18" height="17"></div>
                                                    </div>
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
                                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 col-item">
                                        <div class="product-box">
                                            <div class="product-thumbnail">
                                                <div class="tag-item tag-sale sale-flash">-21%</div>
                                                <a href="/dien-thoai-samsung-galaxy-j7-prime" title="Điện thoại Samsung Galaxy J7 Prime">
                                                <img class="img-responsive" src="//bizweb.dktcdn.net/thumb/large/100/321/719/products/samsunggalaxyj7black1u504d2016.jpg?v=1530847072897" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/321/719/products/samsunggalaxyj7black1u504d2016.jpg?v=1530847072897" alt="Điện thoại Samsung Galaxy J7 Prime">
                                                </a>
                                                <div class="product-action hidden-xs">
                                                    <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-12107399" enctype="multipart/form-data">
                                                        <input type="hidden" name="variantId" value="19426541">
                                                        <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
                                                        <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="fw product-review">
                                                    <div class="bizweb-product-reviews-badge" data-id="12107399">
                                                        <div class="bizweb-product-reviews-star" data-score="0" data-number="5" title="Not rated yet!" style="color: rgb(255, 190, 0);"><i data-alt="1" class="star-off-png" title="Not rated yet!"></i>&nbsp;<i data-alt="2" class="star-off-png" title="Not rated yet!"></i>&nbsp;<i data-alt="3" class="star-off-png" title="Not rated yet!"></i>&nbsp;<i data-alt="4" class="star-off-png" title="Not rated yet!"></i>&nbsp;<i data-alt="5" class="star-off-png" title="Not rated yet!"></i><input name="score" type="hidden" readonly=""></div>
                                                        <div>
                                                            <p>0</p>
                                                        </div>
                                                        <div><img src="https://productreviews.bizwebapps.vn//assets/images/user.png" width="18" height="17"></div>
                                                    </div>
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
                                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 col-item">
                                        <div class="product-box">
                                            <div class="product-thumbnail">
                                                <div class="tag-item tag-sale sale-flash">-25%</div>
                                                <a href="/noi-com-dien-nap-gai-happycook" title="Nồi cơm điện nắp gài HappyCook">
                                                <img class="img-responsive" src="//bizweb.dktcdn.net/thumb/large/100/321/719/products/1b1609da004e80bc04eb578cd3c0b0.jpg?v=1530846987127" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/321/719/products/1b1609da004e80bc04eb578cd3c0b0.jpg?v=1530846987127" alt="Nồi cơm điện nắp gài HappyCook">
                                                </a>
                                                <div class="product-action hidden-xs">
                                                    <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-12107314" enctype="multipart/form-data">
                                                        <input type="hidden" name="variantId" value="19426450">
                                                        <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
                                                        <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="fw product-review">
                                                    <div class="bizweb-product-reviews-badge" data-id="12107314">
                                                        <div class="bizweb-product-reviews-star" data-score="0" data-number="5" title="Not rated yet!" style="color: rgb(255, 190, 0);"><i data-alt="1" class="star-off-png" title="Not rated yet!"></i>&nbsp;<i data-alt="2" class="star-off-png" title="Not rated yet!"></i>&nbsp;<i data-alt="3" class="star-off-png" title="Not rated yet!"></i>&nbsp;<i data-alt="4" class="star-off-png" title="Not rated yet!"></i>&nbsp;<i data-alt="5" class="star-off-png" title="Not rated yet!"></i><input name="score" type="hidden" readonly=""></div>
                                                        <div>
                                                            <p>0</p>
                                                        </div>
                                                        <div><img src="https://productreviews.bizwebapps.vn//assets/images/user.png" width="18" height="17"></div>
                                                    </div>
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
                                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 col-item">
                                        <div class="product-box">
                                            <div class="product-thumbnail">
                                                <div class="tag-item tag-sale sale-flash">-8%</div>
                                                <a href="/combo-trang-diem-mat-moi-nhanh-gon" title="Combo trang điểm mắt môi nhanh gọn">
                                                <img class="img-responsive" src="//bizweb.dktcdn.net/100/321/719/themes/699729/assets/down.svg?1548428247318" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/321/719/products/3688805519957s01d20170720t1222.jpg?v=1530847080330" alt="Combo trang điểm mắt môi nhanh gọn">
                                                </a>
                                                <div class="product-action hidden-xs">
                                                    <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-12107408" enctype="multipart/form-data">
                                                        <input type="hidden" name="variantId" value="19426550">
                                                        <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
                                                        <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="fw product-review">
                                                    <div class="bizweb-product-reviews-badge" data-id="12107408">
                                                        <div class="bizweb-product-reviews-star" data-score="0" data-number="5" title="Not rated yet!" style="color: rgb(255, 190, 0);"><i data-alt="1" class="star-off-png" title="Not rated yet!"></i>&nbsp;<i data-alt="2" class="star-off-png" title="Not rated yet!"></i>&nbsp;<i data-alt="3" class="star-off-png" title="Not rated yet!"></i>&nbsp;<i data-alt="4" class="star-off-png" title="Not rated yet!"></i>&nbsp;<i data-alt="5" class="star-off-png" title="Not rated yet!"></i><input name="score" type="hidden" readonly=""></div>
                                                        <div>
                                                            <p>0</p>
                                                        </div>
                                                        <div><img src="https://productreviews.bizwebapps.vn//assets/images/user.png" width="18" height="17"></div>
                                                    </div>
                                                </div>
                                                <h3 class="product-name">
                                                    <a href="/combo-trang-diem-mat-moi-nhanh-gon" title="Combo trang điểm mắt môi nhanh gọn">
                                                    Combo trang điểm mắt môi nhanh gọn
                                                    </a>
                                                </h3>
                                                <div class="price-box price-loop-style res-item">
                                                    <span class="special-price">
                                                    <span class="price">499.000₫</span>
                                                    </span>
                                                    <span class="old-price">
                                                    <span class="price">
                                                    540.000₫
                                                    </span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 col-item">
                                        <div class="product-box">
                                            <div class="product-thumbnail">
                                                <div class="tag-item tag-sale sale-flash">-19%</div>
                                                <a href="/balo-ong-va-ng-bouncie-bp" title="Balo ong vàng Bouncie BP">
                                                <img class="img-responsive" src="//bizweb.dktcdn.net/100/321/719/themes/699729/assets/down.svg?1548428247318" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/321/719/products/99de9735eb8686e548d7efd6c666e5.jpg?v=1530846973493" alt="Balo ong vàng Bouncie BP">
                                                </a>
                                                <div class="product-action hidden-xs">
                                                    <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-12107303" enctype="multipart/form-data">
                                                        <input type="hidden" name="variantId" value="19426439">
                                                        <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
                                                        <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="fw product-review">
                                                    <div class="bizweb-product-reviews-badge" data-id="12107303">
                                                        <div class="bizweb-product-reviews-star" data-score="0" data-number="5" title="Not rated yet!" style="color: rgb(255, 190, 0);"><i data-alt="1" class="star-off-png" title="Not rated yet!"></i>&nbsp;<i data-alt="2" class="star-off-png" title="Not rated yet!"></i>&nbsp;<i data-alt="3" class="star-off-png" title="Not rated yet!"></i>&nbsp;<i data-alt="4" class="star-off-png" title="Not rated yet!"></i>&nbsp;<i data-alt="5" class="star-off-png" title="Not rated yet!"></i><input name="score" type="hidden" readonly=""></div>
                                                        <div>
                                                            <p>0</p>
                                                        </div>
                                                        <div><img src="https://productreviews.bizwebapps.vn//assets/images/user.png" width="18" height="17"></div>
                                                    </div>
                                                </div>
                                                <h3 class="product-name">
                                                    <a href="/balo-ong-va-ng-bouncie-bp" title="Balo ong vàng Bouncie BP">
                                                    Balo ong vàng Bouncie BP
                                                    </a>
                                                </h3>
                                                <div class="price-box price-loop-style res-item">
                                                    <span class="special-price">
                                                    <span class="price">259.000₫</span>
                                                    </span>
                                                    <span class="old-price">
                                                    <span class="price">
                                                    320.000₫
                                                    </span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 col-item">
                                        <div class="product-box">
                                            <div class="product-thumbnail">
                                                <div class="tag-item tag-sale sale-flash">-14%</div>
                                                <a href="/bo-cham-soc-mong-usa-store-salon-shaper-big" title="Dầu dưỡng da Phytoceuticals Argan">
                                                <img class="img-responsive" src="//bizweb.dktcdn.net/100/321/719/themes/699729/assets/down.svg?1548428247318" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/321/719/products/1.jpg?v=1531122843340" alt="Dầu dưỡng da Phytoceuticals Argan">
                                                </a>
                                                <div class="product-action hidden-xs">
                                                    <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-12126344" enctype="multipart/form-data">
                                                        <input type="hidden" name="variantId" value="19477404">
                                                        <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
                                                        <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="fw product-review">
                                                    <div class="bizweb-product-reviews-badge" data-id="12126344">
                                                        <div class="bizweb-product-reviews-star" data-score="0" data-number="5" title="Not rated yet!" style="color: rgb(255, 190, 0);"><i data-alt="1" class="star-off-png" title="Not rated yet!"></i>&nbsp;<i data-alt="2" class="star-off-png" title="Not rated yet!"></i>&nbsp;<i data-alt="3" class="star-off-png" title="Not rated yet!"></i>&nbsp;<i data-alt="4" class="star-off-png" title="Not rated yet!"></i>&nbsp;<i data-alt="5" class="star-off-png" title="Not rated yet!"></i><input name="score" type="hidden" readonly=""></div>
                                                        <div>
                                                            <p>0</p>
                                                        </div>
                                                        <div><img src="https://productreviews.bizwebapps.vn//assets/images/user.png" width="18" height="17"></div>
                                                    </div>
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
                                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 col-item">
                                        <div class="product-box">
                                            <div class="product-thumbnail">
                                                <div class="tag-item tag-sale sale-flash">-3%</div>
                                                <a href="/dung-dich-giup-loai-bo-son-mong" title="Dung dịch giúp loại bỏ sơn móng">
                                                <img class="img-responsive" src="//bizweb.dktcdn.net/100/321/719/themes/699729/assets/down.svg?1548428247318" data-lazyload="//bizweb.dktcdn.net/thumb/large/100/321/719/products/4ef3217c56c404220bdaba5057d92e.jpg?v=1531122849307" alt="Dung dịch giúp loại bỏ sơn móng">
                                                </a>
                                                <div class="product-action hidden-xs">
                                                    <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-12126376" enctype="multipart/form-data">
                                                        <input class="hidden" type="hidden" name="variantId" value="19477436">
                                                        <button class="btn-cart btn button-hover-3 left-to" title="Xem thêm" type="button" onclick="window.location.href='/dung-dich-giup-loai-bo-son-mong'">
                                                        <span><i class="fa fa-share-alt" aria-hidden="true"></i></span>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="fw product-review">
                                                    <div class="bizweb-product-reviews-badge" data-id="12126376">
                                                        <div class="bizweb-product-reviews-star" data-score="0" data-number="5" title="Not rated yet!" style="color: rgb(255, 190, 0);"><i data-alt="1" class="star-off-png" title="Not rated yet!"></i>&nbsp;<i data-alt="2" class="star-off-png" title="Not rated yet!"></i>&nbsp;<i data-alt="3" class="star-off-png" title="Not rated yet!"></i>&nbsp;<i data-alt="4" class="star-off-png" title="Not rated yet!"></i>&nbsp;<i data-alt="5" class="star-off-png" title="Not rated yet!"></i><input name="score" type="hidden" readonly=""></div>
                                                        <div>
                                                            <p>0</p>
                                                        </div>
                                                        <div><img src="https://productreviews.bizwebapps.vn//assets/images/user.png" width="18" height="17"></div>
                                                    </div>
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
                                </div>
                                <div class="text-xs-right">
                                    <script>
                                        var cuPage = 1;
                                    </script>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
            <aside class="dqdt-sidebar sidebar left left-content col-lg-3 col-md-3 col-sm-12 col-xs-12 col-lg-pull-9 col-md-pull-9 col-sm-12 col-xs-12">
                <!-- DANH MỤC SẢN PHẨM -->
                <div class="sidebar-item sidebar-menu sidebar-collection-menu item-border hidden-lg hidden-md">
                    <div class="module-header aniborder_title">
                        <h2 class="title-head module-title sidebar-title">
                            <a href="javascript:;">
                            <span>Danh mục sản phẩm</span>
                            </a>
                        </h2>
                        <div class="heading-line">
                            <span class="short-line"></span>
                            <span class="long-line"></span>
                        </div>
                    </div>
                    <div class="sidebar-menu-content module-content">
                        <div class="sidebar-linklists">
                            <ul>
                                <li class="sidebar-menu-list collection-sidebar-menu active">
                                    <a class="ajaxLayer" href="/san-pham-khuyen-mai" title="Hot Deal">
                                    <span>Hot Deal</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-list collection-sidebar-menu">
                                    <a class="ajaxLayer" href="/san-pham-noi-bat" title="Bán chạy nhất">
                                    <span>Bán chạy nhất</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-list collection-sidebar-menu">
                                    <a class="ajaxLayer" href="/" title="Giày dép">
                                    <span>Giày dép</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-list collection-sidebar-menu">
                                    <a class="ajaxLayer" href="/thoi-trang" title="Thời trang">
                                    <span>Thời trang</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-list collection-sidebar-menu">
                                    <a class="ajaxLayer" href="/nha-cua-doi-song" title="Nhà cửa, đời sống">
                                    <span>Nhà cửa, đời sống</span>
                                    </a><em><i class="fa fa-plus" aria-hidden="true"></i></em>
                                    <ul style="display: none" class="lv2">
                                        <li>
                                            <a class="ajaxLayer a_lv2" href="/noi-that" title="Nội thất">
                                            <span>Nội thất</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="ajaxLayer a_lv2" href="/do-gia-dung" title="Đồ gia dụng">
                                            <span>Đồ gia dụng</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sidebar-menu-list collection-sidebar-menu">
                                    <a class="ajaxLayer" href="/me-va-be" title="Mẹ và Bé">
                                    <span>Mẹ và Bé</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-list collection-sidebar-menu">
                                    <a class="ajaxLayer" href="/dieu-hoa" title="Điều hoà">
                                    <span>Điều hoà</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-list collection-sidebar-menu">
                                    <a class="ajaxLayer" href="/may-giat" title="Máy giặt">
                                    <span>Máy giặt</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-list collection-sidebar-menu">
                                    <a class="ajaxLayer" href="/dien-may" title="Điện máy">
                                    <span>Điện máy</span>
                                    </a><em><i class="fa fa-plus" aria-hidden="true"></i></em>
                                    <ul style="display: none" class="lv2">
                                        <li>
                                            <a class="ajaxLayer a_lv2" href="/tivi-tu-lanh" title="Tivi - Tủ lạnh">
                                            <span>Tivi - Tủ lạnh</span>
                                            </a><em><i class="fa fa-plus" aria-hidden="true"></i></em>
                                            <ul style="display: none;" class="lv3">
                                                <li>
                                                    <a class="ajaxLayer a_lv3" href="/tu-lanh" title="Tủ lạnh">
                                                    <span>Tủ lạnh</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="ajaxLayer a_lv3" href="/tivi" title="Tivi">
                                                    <span>Tivi</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="ajaxLayer a_lv2" href="/tivi" title="Tivi">
                                            <span>Tivi</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="ajaxLayer a_lv2" href="/dieu-hoa" title="Điều hoà">
                                            <span>Điều hoà</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="ajaxLayer a_lv2" href="/tu-lanh" title="Tủ lạnh">
                                            <span>Tủ lạnh</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="ajaxLayer a_lv2" href="/may-giat" title="Máy giặt">
                                            <span>Máy giặt</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sidebar-menu-list collection-sidebar-menu">
                                    <a class="ajaxLayer" href="/tivi-tu-lanh" title="Tivi - Tủ lạnh">
                                    <span>Tivi - Tủ lạnh</span>
                                    </a><em><i class="fa fa-plus" aria-hidden="true"></i></em>
                                    <ul style="display: none" class="lv2">
                                        <li>
                                            <a class="ajaxLayer a_lv2" href="/tu-lanh" title="Tủ lạnh">
                                            <span>Tủ lạnh</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="ajaxLayer a_lv2" href="/tivi" title="Tivi">
                                            <span>Tivi</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sidebar-menu-list collection-sidebar-menu">
                                    <a class="ajaxLayer" href="/tu-lanh" title="Tủ lạnh">
                                    <span>Tủ lạnh</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-list collection-sidebar-menu">
                                    <a class="ajaxLayer" href="/tivi" title="Tivi">
                                    <span>Tivi</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-list collection-sidebar-menu">
                                    <a class="ajaxLayer" href="/dien-thoai-may-tinh-bang" title="Điện thoại, Máy tính bảng">
                                    <span>Điện thoại, Máy tính bảng</span>
                                    </a><em><i class="fa fa-plus" aria-hidden="true"></i></em>
                                    <ul style="display: none" class="lv2">
                                        <li>
                                            <a class="ajaxLayer a_lv2" href="/dien-thoai-di-dong" title="Điện thoại di động">
                                            <span>Điện thoại di động</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="ajaxLayer a_lv2" href="/may-tinh-bang" title="Máy tính bảng">
                                            <span>Máy tính bảng</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sidebar-menu-list collection-sidebar-menu">
                                    <a class="ajaxLayer" href="/may-tinh-phu-kien" title="Máy tính &amp; phụ kiện">
                                    <span>Máy tính &amp; phụ kiện</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-list collection-sidebar-menu">
                                    <a class="ajaxLayer" href="/hoa-qua-sach" title="Hoa quả sạch">
                                    <span>Hoa quả sạch</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-list collection-sidebar-menu">
                                    <a class="ajaxLayer" href="/lam-dep-suc-khoe" title="Làm đẹp - Sức khoẻ">
                                    <span>Làm đẹp - Sức khoẻ</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-list collection-sidebar-menu">
                                    <a class="ajaxLayer" href="/laptop" title="Laptop">
                                    <span>Laptop</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- FILTERS -->
                <div class="aside-filter sidebar-item">
                    <div class="filter-container hidden">
                        <div class="filter-container__selected-filter" style="display: none;">
                            <div class="filter-container__selected-filter-header clearfix">
                                <span class="filter-container__selected-filter-header-title"><i class="fa fa-arrow-left hidden-sm-up"></i> Bạn chọn</span>
                                <a href="javascript:void(0)" onclick="clearAllFiltered()" class="filter-container__clear-all">Bỏ hết <i class="fa fa-angle-right"></i></a>
                            </div>
                            <div class="filter-container__selected-filter-list">
                                <ul></ul>
                            </div>
                        </div>
                    </div>
                    <!-- PRICE FILTER -->
                    <aside class="aside-item filter-price item-border">
                        <div class="aside-title module-header aniborder_title">
                            <h2 class="title-head module-title sidebar-title">
                                <a href="javascript:;">
                                <span>Giá thành</span>
                                </a>
                            </h2>
                            <div class="heading-line">
                                <span class="short-line"></span>
                                <span class="long-line"></span>
                            </div>
                        </div>
                        <div class="module-content aside-content filter-group">
                            <div class="field-search form-group">
                                <input type="text" placeholder="Tìm nhanh" class="form-control filter-price-list" onkeyup="filterItemInList(jQuery('.filter-price-list'))">
                            </div>
                            <ul>
                                <li class="filter-item filter-item--check-box filter-item--green">
                                    <span>
                                    <label data-filter="1-000-000d" for="filter-duoi-1-000-000d">
                                    <input type="checkbox" id="filter-duoi-1-000-000d" data-group="PRICE_RANGE" data-field="price_min" data-text="Giá dưới 1.000.000đ" value="(<1000000)" data-operator="OR">
                                    <i class="fa"></i>
                                    Giá dưới 1.000.000đ
                                    </label>
                                    </span>
                                </li>
                                <li class="filter-item filter-item--check-box filter-item--green">
                                    <span>
                                    <label data-filter="2-000-000d" for="filter-1-000-000d-2-000-000d">
                                    <input type="checkbox" id="filter-1-000-000d-2-000-000d" data-group="PRICE_RANGE" data-field="price_min" data-text="1.000.000đ - 2.000.000đ" value="(>1000000 AND <2000000)" data-operator="OR">
                                    <i class="fa"></i>
                                    1.000.000đ - 2.000.000đ                         
                                    </label>
                                    </span>
                                </li>
                                <li class="filter-item filter-item--check-box filter-item--green">
                                    <span>
                                    <label data-filter="3-000-000d" for="filter-2-000-000d-3-000-000d">
                                    <input type="checkbox" id="filter-2-000-000d-3-000-000d" data-group="PRICE_RANGE" data-field="price_min" data-text="2.000.000đ - 3.000.000đ" value="(>2000000 AND <3000000)" data-operator="OR">
                                    <i class="fa"></i>
                                    2.000.000đ - 3.000.000đ                         
                                    </label>
                                    </span>
                                </li>
                                <li class="filter-item filter-item--check-box filter-item--green">
                                    <span>
                                    <label data-filter="5-000-000d" for="filter-3-000-000d-5-000-000d">
                                    <input type="checkbox" id="filter-3-000-000d-5-000-000d" data-group="PRICE_RANGE" data-field="price_min" data-text="3.000.000đ - 5.000.000đ" value="(>3000000 AND <5000000)" data-operator="OR">
                                    <i class="fa"></i>
                                    3.000.000đ - 5.000.000đ                         
                                    </label>
                                    </span>
                                </li>
                                <li class="filter-item filter-item--check-box filter-item--green">
                                    <span>
                                    <label data-filter="10-000-000d" for="filter-5-000-000d-10-000-000d">
                                    <input type="checkbox" id="filter-5-000-000d-10-000-000d" data-group="PRICE_RANGE" data-field="price_min" data-text="5.000.000đ - 10.000.000đ" value="(>5000000 AND <10000000)" data-operator="OR">
                                    <i class="fa"></i>
                                    5.000.000đ - 10.000.000đ                            
                                    </label>
                                    </span>
                                </li>
                                <li class="filter-item filter-item--check-box filter-item--green">
                                    <span>
                                    <label data-filter="10-000-000d" for="filter-tren10-000-000d">
                                    <input type="checkbox" id="filter-tren10-000-000d" data-group="PRICE_RANGE" data-field="price_min" data-text="Trên 10.000.000đ" value="(>10000000)" data-operator="OR">
                                    <i class="fa"></i>
                                    Giá trên 10.000.000đ
                                    </label>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </aside>
                    <!-- LỌC TYPE -->
                    <aside class="aside-item filter-type item-border">
                        <div class="aside-title module-header aniborder_title">
                            <h2 class="title-head module-title sidebar-title">
                                <a href="javascript:;">
                                <span>Loại</span>
                                </a>
                            </h2>
                            <div class="heading-line">
                                <span class="short-line"></span>
                                <span class="long-line"></span>
                            </div>
                        </div>
                        <div class="module-content aside-content filter-group">
                            <div class="field-search form-group">
                                <input type="text" placeholder="Tìm nhanh" class="form-control filter-type-list" onkeyup="filterItemInList(jQuery('.filter-type-list'))">
                            </div>
                            <ul>
                                <li class="filter-item filter-item--check-box filter-item--green" title="Cho mẹ, cho bé">
                                    <span>
                                    <label for="filter-cho-me-cho-be">
                                    <input type="checkbox" id="filter-cho-me-cho-be" data-group="PRODUCT_TYPE" data-field="product_type" data-text="Cho mẹ, cho bé" value="(Cho mẹ, cho bé)" data-operator="OR">
                                    <i class="fa"></i>
                                    Cho mẹ, cho bé
                                    </label>
                                    </span>
                                </li>
                                <li class="filter-item filter-item--check-box filter-item--green" title="Điện thoại">
                                    <span>
                                    <label for="filter-dien-thoai">
                                    <input type="checkbox" id="filter-dien-thoai" data-group="PRODUCT_TYPE" data-field="product_type" data-text="Điện thoại" value="(Điện thoại)" data-operator="OR">
                                    <i class="fa"></i>
                                    Điện thoại
                                    </label>
                                    </span>
                                </li>
                                <li class="filter-item filter-item--check-box filter-item--green" title="Điều hòa">
                                    <span>
                                    <label for="filter-dieu-hoa">
                                    <input type="checkbox" id="filter-dieu-hoa" data-group="PRODUCT_TYPE" data-field="product_type" data-text="Điều hòa" value="(Điều hòa)" data-operator="OR">
                                    <i class="fa"></i>
                                    Điều hòa
                                    </label>
                                    </span>
                                </li>
                                <li class="filter-item filter-item--check-box filter-item--green" title="Đồ Trang điểm">
                                    <span>
                                    <label for="filter-do-trang-diem">
                                    <input type="checkbox" id="filter-do-trang-diem" data-group="PRODUCT_TYPE" data-field="product_type" data-text="Đồ Trang điểm" value="(Đồ Trang điểm)" data-operator="OR">
                                    <i class="fa"></i>
                                    Đồ Trang điểm
                                    </label>
                                    </span>
                                </li>
                                <li class="filter-item filter-item--check-box filter-item--green" title="Làm móng">
                                    <span>
                                    <label for="filter-lam-mong">
                                    <input type="checkbox" id="filter-lam-mong" data-group="PRODUCT_TYPE" data-field="product_type" data-text="Làm móng" value="(Làm móng)" data-operator="OR">
                                    <i class="fa"></i>
                                    Làm móng
                                    </label>
                                    </span>
                                </li>
                                <li class="filter-item filter-item--check-box filter-item--green" title="Màn hình">
                                    <span>
                                    <label for="filter-man-hinh">
                                    <input type="checkbox" id="filter-man-hinh" data-group="PRODUCT_TYPE" data-field="product_type" data-text="Màn hình" value="(Màn hình)" data-operator="OR">
                                    <i class="fa"></i>
                                    Màn hình
                                    </label>
                                    </span>
                                </li>
                                <li class="filter-item filter-item--check-box filter-item--green" title="Máy giặt">
                                    <span>
                                    <label for="filter-may-giat">
                                    <input type="checkbox" id="filter-may-giat" data-group="PRODUCT_TYPE" data-field="product_type" data-text="Máy giặt" value="(Máy giặt)" data-operator="OR">
                                    <i class="fa"></i>
                                    Máy giặt
                                    </label>
                                    </span>
                                </li>
                                <li class="filter-item filter-item--check-box filter-item--green" title="Nồi cơm điện">
                                    <span>
                                    <label for="filter-noi-com-dien">
                                    <input type="checkbox" id="filter-noi-com-dien" data-group="PRODUCT_TYPE" data-field="product_type" data-text="Nồi cơm điện" value="(Nồi cơm điện)" data-operator="OR">
                                    <i class="fa"></i>
                                    Nồi cơm điện
                                    </label>
                                    </span>
                                </li>
                                <li class="filter-item filter-item--check-box filter-item--green" title="Tẩy móng">
                                    <span>
                                    <label for="filter-tay-mong">
                                    <input type="checkbox" id="filter-tay-mong" data-group="PRODUCT_TYPE" data-field="product_type" data-text="Tẩy móng" value="(Tẩy móng)" data-operator="OR">
                                    <i class="fa"></i>
                                    Tẩy móng
                                    </label>
                                    </span>
                                </li>
                                <li class="filter-item filter-item--check-box filter-item--green" title="Tivi">
                                    <span>
                                    <label for="filter-tivi">
                                    <input type="checkbox" id="filter-tivi" data-group="PRODUCT_TYPE" data-field="product_type" data-text="Tivi" value="(Tivi)" data-operator="OR">
                                    <i class="fa"></i>
                                    Tivi
                                    </label>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </aside>
                    <!-- LỌC VENDOR -->
                    <aside class="aside-item filter-vendor item-border">
                        <div class="aside-title module-header aniborder_title">
                            <h2 class="title-head module-title sidebar-title">
                                <a href="javascript:;">
                                <span>Nhà cung cấp</span>
                                </a>
                            </h2>
                            <div class="heading-line">
                                <span class="short-line"></span>
                                <span class="long-line"></span>
                            </div>
                        </div>
                        <div class="module-content aside-content filter-group">
                            <div class="field-search form-group">
                                <input type="text" placeholder="Tìm nhanh" class="form-control filter-vendor-list" onkeyup="filterItemInList(jQuery('.filter-vendor-list'))">
                            </div>
                            <ul>
                                <li class="filter-item filter-item--check-box filter-item--green" title="Adayroi">
                                    <span>
                                    <label for="filter-adayroi">
                                    <input type="checkbox" id="filter-adayroi" data-group="PRODUCT_VENDOR" data-field="vendor" data-text="Adayroi" value="(Adayroi)" data-operator="OR">
                                    <i class="fa"></i>
                                    Adayroi
                                    </label>
                                    </span>
                                </li>
                                <li class="filter-item filter-item--check-box filter-item--green" title="Aroma">
                                    <span>
                                    <label for="filter-aroma">
                                    <input type="checkbox" id="filter-aroma" data-group="PRODUCT_VENDOR" data-field="vendor" data-text="Aroma" value="(Aroma)" data-operator="OR">
                                    <i class="fa"></i>
                                    Aroma
                                    </label>
                                    </span>
                                </li>
                                <li class="filter-item filter-item--check-box filter-item--green" title="Benq">
                                    <span>
                                    <label for="filter-benq">
                                    <input type="checkbox" id="filter-benq" data-group="PRODUCT_VENDOR" data-field="vendor" data-text="Benq" value="(Benq)" data-operator="OR">
                                    <i class="fa"></i>
                                    Benq
                                    </label>
                                    </span>
                                </li>
                                <li class="filter-item filter-item--check-box filter-item--green" title="Casper">
                                    <span>
                                    <label for="filter-casper">
                                    <input type="checkbox" id="filter-casper" data-group="PRODUCT_VENDOR" data-field="vendor" data-text="Casper" value="(Casper)" data-operator="OR">
                                    <i class="fa"></i>
                                    Casper
                                    </label>
                                    </span>
                                </li>
                                <li class="filter-item filter-item--check-box filter-item--green" title="HappyCook">
                                    <span>
                                    <label for="filter-happycook">
                                    <input type="checkbox" id="filter-happycook" data-group="PRODUCT_VENDOR" data-field="vendor" data-text="HappyCook" value="(HappyCook)" data-operator="OR">
                                    <i class="fa"></i>
                                    HappyCook
                                    </label>
                                    </span>
                                </li>
                                <li class="filter-item filter-item--check-box filter-item--green" title="LG">
                                    <span>
                                    <label for="filter-lg">
                                    <input type="checkbox" id="filter-lg" data-group="PRODUCT_VENDOR" data-field="vendor" data-text="LG" value="(LG)" data-operator="OR">
                                    <i class="fa"></i>
                                    LG
                                    </label>
                                    </span>
                                </li>
                                <li class="filter-item filter-item--check-box filter-item--green" title="Oriflame">
                                    <span>
                                    <label for="filter-oriflame">
                                    <input type="checkbox" id="filter-oriflame" data-group="PRODUCT_VENDOR" data-field="vendor" data-text="Oriflame" value="(Oriflame)" data-operator="OR">
                                    <i class="fa"></i>
                                    Oriflame
                                    </label>
                                    </span>
                                </li>
                                <li class="filter-item filter-item--check-box filter-item--green" title="Panasonic">
                                    <span>
                                    <label for="filter-panasonic">
                                    <input type="checkbox" id="filter-panasonic" data-group="PRODUCT_VENDOR" data-field="vendor" data-text="Panasonic" value="(Panasonic)" data-operator="OR">
                                    <i class="fa"></i>
                                    Panasonic
                                    </label>
                                    </span>
                                </li>
                                <li class="filter-item filter-item--check-box filter-item--green" title="Samsung">
                                    <span>
                                    <label for="filter-samsung">
                                    <input type="checkbox" id="filter-samsung" data-group="PRODUCT_VENDOR" data-field="vendor" data-text="Samsung" value="(Samsung)" data-operator="OR">
                                    <i class="fa"></i>
                                    Samsung
                                    </label>
                                    </span>
                                </li>
                                <li class="filter-item filter-item--check-box filter-item--green" title="Sony">
                                    <span>
                                    <label for="filter-sony">
                                    <input type="checkbox" id="filter-sony" data-group="PRODUCT_VENDOR" data-field="vendor" data-text="Sony" value="(Sony)" data-operator="OR">
                                    <i class="fa"></i>
                                    Sony
                                    </label>
                                    </span>
                                </li>
                                <li class="filter-item filter-item--check-box filter-item--green" title="Toshiba">
                                    <span>
                                    <label for="filter-toshiba">
                                    <input type="checkbox" id="filter-toshiba" data-group="PRODUCT_VENDOR" data-field="vendor" data-text="Toshiba" value="(Toshiba)" data-operator="OR">
                                    <i class="fa"></i>
                                    Toshiba
                                    </label>
                                    </span>
                                </li>
                                <li class="filter-item filter-item--check-box filter-item--green" title="USA Store Salon">
                                    <span>
                                    <label for="filter-usa-store-salon">
                                    <input type="checkbox" id="filter-usa-store-salon" data-group="PRODUCT_VENDOR" data-field="vendor" data-text="USA Store Salon" value="(USA Store Salon)" data-operator="OR">
                                    <i class="fa"></i>
                                    USA Store Salon
                                    </label>
                                    </span>
                                </li>
                                <li class="filter-item filter-item--check-box filter-item--green" title="Xiaomi">
                                    <span>
                                    <label for="filter-xiaomi">
                                    <input type="checkbox" id="filter-xiaomi" data-group="PRODUCT_VENDOR" data-field="vendor" data-text="Xiaomi" value="(Xiaomi)" data-operator="OR">
                                    <i class="fa"></i>
                                    Xiaomi
                                    </label>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </aside>
                    <!-- LỌC TAG 1 -->
                    <aside class="aside-item filter-tag-style-1 item-border">
                        <div class="aside-title module-header aniborder_title">
                            <h2 class="title-head module-title sidebar-title">
                                <a href="javascript:;">
                                <span>Màu sắc</span>
                                </a>
                            </h2>
                            <div class="heading-line">
                                <span class="short-line"></span>
                                <span class="long-line"></span>
                            </div>
                        </div>
                        <div class="module-content aside-content filter-group">
                            <ul style="overflow: visible;">
                                <li class="filter-item color filter-item--check-box filter-item--green" title="Đen">
                                    <span>
                                    <label for="filter-den">
                                    <input type="checkbox" id="filter-den" data-group="TAG1" data-field="tags" data-text="Đen" value="(Đen)" data-operator="OR">
                                    <i class="fa den" style="background-color:#000000;"></i>
                                    Đen
                                    </label>
                                    </span>
                                </li>
                                <li class="filter-item color filter-item--check-box filter-item--green" title="Trắng">
                                    <span>
                                    <label for="filter-trang">
                                    <input type="checkbox" id="filter-trang" data-group="TAG1" data-field="tags" data-text="Trắng" value="(Trắng)" data-operator="OR">
                                    <i class="fa trang" style="background-color:#ffffff;border:1px solid #ebebeb;"></i>
                                    Trắng
                                    </label>
                                    </span>
                                </li>
                                <li class="filter-item color filter-item--check-box filter-item--green" title="Xanh">
                                    <span>
                                    <label for="filter-xanh">
                                    <input type="checkbox" id="filter-xanh" data-group="TAG1" data-field="tags" data-text="Xanh" value="(Xanh)" data-operator="OR">
                                    <i class="fa xanh" style="background-color:#0000ff;"></i>
                                    Xanh
                                    </label>
                                    </span>
                                </li>
                                <li class="filter-item color filter-item--check-box filter-item--green" title="Vàng">
                                    <span>
                                    <label for="filter-vang">
                                    <input type="checkbox" id="filter-vang" data-group="TAG1" data-field="tags" data-text="Vàng" value="(Vàng)" data-operator="OR">
                                    <i class="fa vang" style="background-color:#ffff00;"></i>
                                    Vàng
                                    </label>
                                    </span>
                                </li>
                                <li class="filter-item color filter-item--check-box filter-item--green" title="Hồng">
                                    <span>
                                    <label for="filter-hong">
                                    <input type="checkbox" id="filter-hong" data-group="TAG1" data-field="tags" data-text="Hồng" value="(Hồng)" data-operator="OR">
                                    <i class="fa hong" style="background-color:#FF1493;"></i>
                                    Hồng
                                    </label>
                                    </span>
                                </li>
                                <li class="filter-item color filter-item--check-box filter-item--green" title="Tím">
                                    <span>
                                    <label for="filter-tim">
                                    <input type="checkbox" id="filter-tim" data-group="TAG1" data-field="tags" data-text="Tím" value="(Tím)" data-operator="OR">
                                    <i class="fa tim" style="background-color:#A020F0;"></i>
                                    Tím
                                    </label>
                                    </span>
                                </li>
                                <li class="filter-item color filter-item--check-box filter-item--green" title="Đỏ">
                                    <span>
                                    <label for="filter-do">
                                    <input type="checkbox" id="filter-do" data-group="TAG1" data-field="tags" data-text="Đỏ" value="(Đỏ)" data-operator="OR">
                                    <i class="fa do" style="background-color:#FF0000;"></i>
                                    Đỏ
                                    </label>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </aside>
                    <!-- LỌC TAG 2 -->
                </div>
                <!-- FEATURE PRODUCTS -->
                <div class="sidebar-item sidebar-menu sidebar-collection-menu item-border">
                    <div class="module-header aniborder_title">
                        <h2 class="title-head module-title sidebar-title">
                            <a href="javascript:;">
                            <span>Sản phẩm bán chạy</span>
                            </a>
                        </h2>
                        <div class="heading-line">
                            <span class="short-line"></span>
                            <span class="long-line"></span>
                        </div>
                    </div>
                    <div class="sidebar-menu-content module-content padding-0">
                        <div class="collection-sidebar-items owl-carousel owl-theme dots-enable dots-top-right padding-top-10 owl-loaded owl-drag" data-hg-items="1" data-lg-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1" data-xxs-items="1" data-margin="30" data-dot="true">
                            <!-- ADD DIV -->
                            <div class="owl-stage-outer">
                                <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 608px;">
                                    <div class="owl-item active" style="width: 274px; margin-right: 30px;">
                                        <div class="item">
                                            <div class="product-item product-sidebar">
                                                <a class="product-image" href="/may-lanh-inverter-daikin-ftkc35tvmv" title="Máy lạnh Inverter Daikin FTKC35TVMV">
                                                <img class="img-responsive" src="//bizweb.dktcdn.net/thumb/medium/100/321/719/themes/699729/assets/libra-smart-product.png?1548428247318" data-lazyload="//bizweb.dktcdn.net/thumb/medium/100/321/719/products/d6d54d513f554362b59c9f823e2396-2e5c3b90-dc30-4938-9226-1b32ff53b864.jpg?v=1530847035287" alt="Máy lạnh Inverter Daikin FTKC35TVMV">
                                                </a>
                                                <div class="product-info">
                                                    <h3 class="product-name">
                                                        <a href="/may-lanh-inverter-daikin-ftkc35tvmv" title="Máy lạnh Inverter Daikin FTKC35TVMV">
                                                        <span>Máy lạnh Inverter Daikin FTKC35TVMV</span>
                                                        </a>
                                                    </h3>
                                                    <div class="price-box price-loop-style res-item">
                                                        <span class="special-price">
                                                        <span class="price">11.390.000₫</span>
                                                        </span>
                                                        <span class="old-price">
                                                        <span class="price">
                                                        </span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item product-sidebar">
                                                <a class="product-image" href="/may-lanh-inverter-lg-v13ens" title="Máy lạnh Inverter LG V13ENS">
                                                <img class="img-responsive" src="//bizweb.dktcdn.net/thumb/medium/100/321/719/themes/699729/assets/libra-smart-product.png?1548428247318" data-lazyload="//bizweb.dktcdn.net/thumb/medium/100/321/719/products/60ada10e7f2974a46a979d00e5b887-40a1fcd7-9b83-48b3-9d55-ef7b139ec510.jpg?v=1530847034510" alt="Máy lạnh Inverter LG V13ENS">
                                                </a>
                                                <div class="product-info">
                                                    <h3 class="product-name">
                                                        <a href="/may-lanh-inverter-lg-v13ens" title="Máy lạnh Inverter LG V13ENS">
                                                        <span>Máy lạnh Inverter LG V13ENS</span>
                                                        </a>
                                                    </h3>
                                                    <div class="price-box price-loop-style res-item">
                                                        <span class="special-price">
                                                        <span class="price">8.090.000₫</span>
                                                        </span>
                                                        <span class="old-price">
                                                        <span class="price">
                                                        </span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item product-sidebar">
                                                <a class="product-image" href="/may-lanh-inverter-daikin-ftkc25tvmv" title="Máy lạnh Inverter Daikin FTKC25TVMV">
                                                <img class="img-responsive" src="//bizweb.dktcdn.net/thumb/medium/100/321/719/themes/699729/assets/libra-smart-product.png?1548428247318" data-lazyload="//bizweb.dktcdn.net/thumb/medium/100/321/719/products/d07ff03b981e99d4b9b660ae9d3106.jpg?v=1530847034437" alt="Máy lạnh Inverter Daikin FTKC25TVMV">
                                                </a>
                                                <div class="product-info">
                                                    <h3 class="product-name">
                                                        <a href="/may-lanh-inverter-daikin-ftkc25tvmv" title="Máy lạnh Inverter Daikin FTKC25TVMV">
                                                        <span>Máy lạnh Inverter Daikin FTKC25TVMV</span>
                                                        </a>
                                                    </h3>
                                                    <div class="price-box price-loop-style res-item">
                                                        <span class="special-price">
                                                        <span class="price">9.390.000₫</span>
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
                                    <div class="owl-item" style="width: 274px; margin-right: 30px;">
                                        <div class="item">
                                            <div class="product-item product-sidebar">
                                                <a class="product-image" href="/may-lanh-inverter-electrolux-esv09crk-a2" title="Máy lạnh Inverter Electrolux ESV09CRK-A2">
                                                <img class="img-responsive" src="//bizweb.dktcdn.net/thumb/medium/100/321/719/themes/699729/assets/libra-smart-product.png?1548428247318" data-lazyload="//bizweb.dktcdn.net/thumb/medium/100/321/719/products/imageexternalu2751d20161202t11.jpg?v=1530847027257" alt="Máy lạnh Inverter Electrolux ESV09CRK-A2">
                                                </a>
                                                <div class="product-info">
                                                    <h3 class="product-name">
                                                        <a href="/may-lanh-inverter-electrolux-esv09crk-a2" title="Máy lạnh Inverter Electrolux ESV09CRK-A2">
                                                        <span>Máy lạnh Inverter Electrolux ESV09CRK-A2</span>
                                                        </a>
                                                    </h3>
                                                    <div class="price-box price-loop-style res-item">
                                                        <span class="special-price">
                                                        <span class="price">6.490.000₫</span>
                                                        </span>
                                                        <span class="old-price">
                                                        <span class="price">
                                                        </span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item product-sidebar">
                                                <a class="product-image" href="/dieu-hoa-inverter-lg-v13ens" title="Điều hòa Inverter LG V13ENS">
                                                <img class="img-responsive" src="//bizweb.dktcdn.net/thumb/medium/100/321/719/themes/699729/assets/libra-smart-product.png?1548428247318" data-lazyload="//bizweb.dktcdn.net/thumb/medium/100/321/719/products/ab1fdbc9f60673a543ab42f3aad926.jpg?v=1530847024657" alt="Điều hòa Inverter LG V13ENS">
                                                </a>
                                                <div class="product-info">
                                                    <h3 class="product-name">
                                                        <a href="/dieu-hoa-inverter-lg-v13ens" title="Điều hòa Inverter LG V13ENS">
                                                        <span>Điều hòa Inverter LG V13ENS</span>
                                                        </a>
                                                    </h3>
                                                    <div class="price-box price-loop-style res-item">
                                                        <span class="special-price">
                                                        <span class="price">8.190.000₫</span>
                                                        </span>
                                                        <span class="old-price">
                                                        <span class="price">
                                                        </span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- chan le = true -->
                                            <div class="product-item product-sidebar">
                                                <a class="product-image" href="/may-lanh-inverter-toshiba-h18pkcvg" title="Máy lạnh Inverter Toshiba H18PKCVG">
                                                <img class="img-responsive" src="//bizweb.dktcdn.net/thumb/medium/100/321/719/themes/699729/assets/libra-smart-product.png?1548428247318" data-lazyload="//bizweb.dktcdn.net/thumb/medium/100/321/719/products/ed6cd5df9bcec769a5c2f36de857a1.jpg?v=1530847023657" alt="Máy lạnh Inverter Toshiba H18PKCVG">
                                                </a>
                                                <div class="product-info">
                                                    <h3 class="product-name">
                                                        <a href="/may-lanh-inverter-toshiba-h18pkcvg" title="Máy lạnh Inverter Toshiba H18PKCVG">
                                                        <span>Máy lạnh Inverter Toshiba H18PKCVG</span>
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
                                    </div>
                                </div>
                            </div>
                            <div class="owl-nav disabled">
                                <div class="owl-prev"><i class="fa fa-angle-left"></i></div>
                                <div class="owl-next"><i class="fa fa-angle-right"></i></div>
                            </div>
                            <div class="owl-dots">
                                <div class="owl-dot active"><span></span></div>
                                <div class="owl-dot"><span></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
            <div id="open-filters" class="open-filters hidden-lg hidden-md">
                <i class="fa fa-filter"></i>
                <span>Lọc</span>
            </div>
        </div>
    </div>
</section>
@stop