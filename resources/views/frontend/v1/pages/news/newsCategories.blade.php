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
                        <a itemprop="url" href="/tin-tuc">
                        <span itemprop="title">Danh mục tin tức</span>
                        </a>
                    </li>
                    <li>
                        <strong itemprop="title">{{$categories->name}}</strong>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="blog-article blog">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="fw module-header no-border">
                    <div class="fw article-item article-large item-border">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 aniborder_title">
                                <h2 class="title-head module-title">
                                    <a href="/tin-tuc" title="Tin nổi bật">
                                    <span>Tin nổi bật</span>
                                    </a>
                                </h2>
                                <div class="heading-line">
                                    <span class="short-line"></span>
                                    <span class="long-line"></span>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="owl-carousel owl-theme dots-enable dots-top-right padding-top-10 owl-loaded owl-drag" data-hg-items="3" data-lg-items="2" data-md-items="2" data-sm-items="2" data-xs-items="1" data-xxs-items="1" data-margin="30" data-dot="true">
                                    <div class="owl-stage-outer">
                                        <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1755px;">
                                            <div class="owl-item active" style="width: 555px; margin-right: 30px;">
                                                <div class="fw item">
                                                    <div class="fw article-thumbnail">
                                                        <a href="/nokia-5-1-plus-se-ra-mat-vao-11-7-hai-model-khac-voi-chipset-sd710-va-sd845-se-ra-mat-vao-q3" title="Nokia 5.1 Plus sẽ ra mắt vào 11/7, hai model khác với chipset SD710 và SD845 sẽ ra mắt vào Q3">
                                                        <img src="https://bizweb.dktcdn.net/thumb/grande/100/321/719/articles/9-0.jpg?v=1531109494443" data-lazyload="https://bizweb.dktcdn.net/thumb/grande/100/321/719/articles/9-0.jpg?v=1531109494443" class="img-responsive" alt="Nokia 5.1 Plus sẽ ra mắt vào 11/7, hai model khác với chipset SD710 và SD845 sẽ ra mắt vào Q3">
                                                        </a>
                                                    </div>
                                                    <div class="fw article-info">
                                                        <h4 class="fw article-blog">
                                                            <span>Tin nổi bật</span>
                                                        </h4>
                                                        <h3 class="fw article-title">
                                                            <a href="/nokia-5-1-plus-se-ra-mat-vao-11-7-hai-model-khac-voi-chipset-sd710-va-sd845-se-ra-mat-vao-q3" title="Nokia 5.1 Plus sẽ ra mắt vào 11/7, hai model khác với chipset SD710 và SD845 sẽ ra mắt vào Q3">
                                                            <span>Nokia 5.1 Plus sẽ ra mắt vào 11/7, hai model khác với chipset SD710 và SD845 sẽ ra mắt vào Q3</span>
                                                            </a>
                                                        </h3>
                                                        <div class="fw article-detail hidden-xs">
                                                            <span>Libra Team</span><span>09 Tháng Bảy 2018</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="owl-item active" style="width: 555px; margin-right: 30px;">
                                                <div class="fw item">
                                                    <div class="fw article-thumbnail">
                                                        <a href="/elon-musk-chinh-thuc-cu-ky-su-den-thai-lan-giup-giai-cuu-doi-bong-mac-ket-trong-hang-dong" title="Elon Musk chính thức cử kỹ sư đến Thái Lan giúp giải cứu đội bóng mắc kẹt trong hang động">
                                                        <img src="https://bizweb.dktcdn.net/thumb/grande/100/321/719/articles/8-1.jpg?v=1531108889320" data-lazyload="https://bizweb.dktcdn.net/thumb/grande/100/321/719/articles/8-1.jpg?v=1531108889320" class="img-responsive" alt="Elon Musk chính thức cử kỹ sư đến Thái Lan giúp giải cứu đội bóng mắc kẹt trong hang động">
                                                        </a>
                                                    </div>
                                                    <div class="fw article-info">
                                                        <h4 class="fw article-blog">
                                                            <span>Tin nổi bật</span>
                                                        </h4>
                                                        <h3 class="fw article-title">
                                                            <a href="/elon-musk-chinh-thuc-cu-ky-su-den-thai-lan-giup-giai-cuu-doi-bong-mac-ket-trong-hang-dong" title="Elon Musk chính thức cử kỹ sư đến Thái Lan giúp giải cứu đội bóng mắc kẹt trong hang động">
                                                            <span>Elon Musk chính thức cử kỹ sư đến Thái Lan giúp giải cứu đội bóng mắc kẹt trong hang động</span>
                                                            </a>
                                                        </h3>
                                                        <div class="fw article-detail hidden-xs">
                                                            <span>Libra Team</span><span>09 Tháng Bảy 2018</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="owl-item" style="width: 555px; margin-right: 30px;">
                                                <div class="fw item">
                                                    <div class="fw article-thumbnail">
                                                        <a href="/ceo-facebook-mark-zuckerberg-vuot-warren-buffett-chinh-thuc-tro-thanh-nguoi-giau-thu-ba-the-gioi" title="CEO Facebook Mark Zuckerberg vượt Warren Buffett, chính thức trở thành người giàu thứ ba thế giới">
                                                        <img src="https://bizweb.dktcdn.net/thumb/grande/100/321/719/articles/7-1.jpg?v=1531108763267" data-lazyload="https://bizweb.dktcdn.net/thumb/grande/100/321/719/articles/7-1.jpg?v=1531108763267" class="img-responsive" alt="CEO Facebook Mark Zuckerberg vượt Warren Buffett, chính thức trở thành người giàu thứ ba thế giới">
                                                        </a>
                                                    </div>
                                                    <div class="fw article-info">
                                                        <h4 class="fw article-blog">
                                                            <span>Tin nổi bật</span>
                                                        </h4>
                                                        <h3 class="fw article-title">
                                                            <a href="/ceo-facebook-mark-zuckerberg-vuot-warren-buffett-chinh-thuc-tro-thanh-nguoi-giau-thu-ba-the-gioi" title="CEO Facebook Mark Zuckerberg vượt Warren Buffett, chính thức trở thành người giàu thứ ba thế giới">
                                                            <span>CEO Facebook Mark Zuckerberg vượt Warren Buffett, chính thức trở thành người giàu thứ ba thế giới</span>
                                                            </a>
                                                        </h3>
                                                        <div class="fw article-detail hidden-xs">
                                                            <span>Libra Team</span><span>09 Tháng Bảy 2018</span>
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
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 col-sm-push-4 col-md-push-4 col-lg-push-4">
                <div class="article-list item-border">
                    <h1 class="title-head blog-title">
                        <span>Tin công nghệ - Máy tính</span>
                    </h1>
                    <div class="fw">
                        <article class="fw article-item article-common-3">
                            <div class="article-thumbnail image-hover-1">
                                <a href="/microsoft-chiu-nhuong-nhin-khong-ep-nguoi-dung-phai-moi-link-dinh-kem-bang-trinh-duyet-edge-nua" title="Microsoft chịu 'nhường nhịn' không ép người dùng phải mởi link đính kèm bằng trình duyệt Edge nữa">
                                <img src="https://bizweb.dktcdn.net/thumb/1024x1024/100/321/719/articles/4-0.jpg?v=1531107917567" data-lazyload="https://bizweb.dktcdn.net/thumb/1024x1024/100/321/719/articles/4-0.jpg?v=1531107917567" class="img-responsive" alt="Microsoft chịu 'nhường nhịn' không ép người dùng phải mởi link đính kèm bằng trình duyệt Edge nữa">
                                </a>
                            </div>
                            <div class="article-info">
                                <h3 class="fw article-title">
                                    <a href="/microsoft-chiu-nhuong-nhin-khong-ep-nguoi-dung-phai-moi-link-dinh-kem-bang-trinh-duyet-edge-nua" title="Microsoft chịu 'nhường nhịn' không ép người dùng phải mởi link đính kèm bằng trình duyệt Edge nữa">
                                    <span>Microsoft chịu 'nhường nhịn' không ép người dùng phải mởi link đính kèm bằng trình duyệt Edge nữa</span>
                                    </a>
                                </h3>
                                <div class="article-summary">
                                    <i class="fa fa-quote-left" aria-hidden="true"></i> Vào đầu năm nay, Microsoft từng tuyên bố sẽ thêm tính băng buộc người dùng Windows 10 khi mở một liên kết thì sẽ chuyển ngay sang trình duyệt Edge để “tăng cường bảo mật", nhung cuối cùng hãng đã suy nghĩ lại và quyết định biết tính năng này thành một tuỳ chọn.......
                                </div>
                                <div class="article-detail">
                                    <i class="fa fa-pencil" aria-hidden="true"></i><span>Libra Team</span>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="fw ext-xs-left">
                    </div>
                </div>
                <ul class="tags-list margin-bottom-20">
                    <li class="tag-item">
                        <a class="tag_hover_style_1" href="/blogs/all/tagged/edge">edge</a>
                    </li>
                    <li class="tag-item">
                        <a class="tag_hover_style_1" href="/blogs/all/tagged/microsoft">microsoft</a>
                    </li>
                    <li class="tag-item">
                        <a class="tag_hover_style_1" href="/blogs/all/tagged/win10">win10</a>
                    </li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-sm-pull-8 col-md-pull-8 col-lg-pull-8">
                <!-- DANH MỤC BLOG -->
                <div class="sidebar-item sidebar-menu sidebar-blog-menu item-border">
                    <div class="module-header aniborder_title">
                        <h2 class="title-head module-title sidebar-title">
                            <a href="javascript:;">
                            <span>Danh mục tin tức</span>
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
                                <li class="sidebar-menu-list blog-sidebar-menu">
                                    <a class="ajaxLayer" href="/gioi-thieu" title="Về chúng tôi">
                                    <span>Về chúng tôi</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-list blog-sidebar-menu">
                                    <a class="ajaxLayer" href="/collections/all" title="Dành cho bạn">
                                    <span>Dành cho bạn</span>
                                    </a><em><i class="fa fa-plus" aria-hidden="true"></i></em>
                                    <ul style="display: none" class="lv2">
                                        <li>
                                            <a class="ajaxLayer a_lv2" href="/san-pham-moi" title="Hàng mới về">
                                            <span>Hàng mới về</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="ajaxLayer a_lv2" href="/san-pham-noi-bat" title="Top nổi bật">
                                            <span>Top nổi bật</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="ajaxLayer a_lv2" href="/san-pham-khuyen-mai" title="Hot Deal">
                                            <span>Hot Deal</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sidebar-menu-list blog-sidebar-menu">
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
                                <li class="sidebar-menu-list blog-sidebar-menu">
                                    <a class="ajaxLayer" href="/blogs/all" title="Tin tổng hợp">
                                    <span>Tin tổng hợp</span>
                                    </a><em><i class="fa fa-plus" aria-hidden="true"></i></em>
                                    <ul style="display: none" class="lv2">
                                        <li>
                                            <a class="ajaxLayer a_lv2" href="/tin-tuc" title="Tin tức">
                                            <span>Tin tức</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="ajaxLayer a_lv2" href="/tin-cong-nghe-dien-thoai" title="Tin công nghệ - Điện thoại">
                                            <span>Tin công nghệ - Điện thoại</span>
                                            </a>
                                        </li>
                                        <li class="active">
                                            <a class="ajaxLayer a_lv2" href="/tin-cong-nghe-may-tinh" title="Tin công nghệ - Máy tính">
                                            <span>Tin công nghệ - Máy tính</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sidebar-menu-list blog-sidebar-menu">
                                    <a class="ajaxLayer" href="/lien-he" title="Liên hệ">
                                    <span>Liên hệ</span>
                                    </a><em><i class="fa fa-plus" aria-hidden="true"></i></em>
                                    <ul style="display: none" class="lv2">
                                        <li>
                                            <a class="ajaxLayer a_lv2" href="/huong-dan-su-dung-libra-mart" title="Hướng dẫn sử dụng theme Libra Mart">
                                            <span>Hướng dẫn sử dụng theme Libra Mart</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- DANH MỤC LỰA CHỌN -->
                <div class="sidebar-item item-border">
                    <div class="module-header aniborder_title">
                        <h2 class="title-head module-title sidebar-title">
                            <a href="tin-tuc" title="Xem nhiều nhất">
                            <span>Xem nhiều nhất</span>
                            </a>
                        </h2>
                        <div class="heading-line">
                            <span class="short-line"></span>
                            <span class="long-line"></span>
                        </div>
                    </div>
                    <div class="module-body">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="article-sidebar-items owl-carousel owl-theme dots-enable dots-top-right owl-loaded owl-drag" data-hg-items="1" data-lg-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1" data-xxs-items="1" data-margin="30" data-dot="true">
                                    <!-- ADD DIV -->
                                    <div class="owl-stage-outer">
                                        <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 780px;">
                                            <div class="owl-item active" style="width: 360px; margin-right: 30px;">
                                                <div class="item">
                                                    <div class="article-item article-sidebar">
                                                        <div class="article-thumbnail">
                                                            <a href="/nokia-5-1-plus-se-ra-mat-vao-11-7-hai-model-khac-voi-chipset-sd710-va-sd845-se-ra-mat-vao-q3" title="Nokia 5.1 Plus sẽ ra mắt vào 11/7, hai model khác với chipset SD710 và SD845 sẽ ra mắt vào Q3">
                                                            <img src="https://bizweb.dktcdn.net/thumb/large/100/321/719/articles/9-0.jpg?v=1531109494443" data-lazyload="https://bizweb.dktcdn.net/thumb/large/100/321/719/articles/9-0.jpg?v=1531109494443" class="img-responsive" alt="Nokia 5.1 Plus sẽ ra mắt vào 11/7, hai model khác với chipset SD710 và SD845 sẽ ra mắt vào Q3">
                                                            </a>
                                                        </div>
                                                        <div class="article-info">
                                                            <h3 class="fw article-title">
                                                                <a href="/nokia-5-1-plus-se-ra-mat-vao-11-7-hai-model-khac-voi-chipset-sd710-va-sd845-se-ra-mat-vao-q3" title="Nokia 5.1 Plus sẽ ra mắt vào 11/7, hai model khác với chipset SD710 và SD845 sẽ ra mắt vào Q3">
                                                                <span>Nokia 5.1 Plus sẽ ra mắt vào 11/7, hai model khác với chipset SD710 và SD845 sẽ ra mắt vào Q3</span>
                                                                </a>
                                                            </h3>
                                                            <div class="fw article-summary">
                                                                Sau các ảnh render, một số hình ảnh poster của chiếc Nokia 5.1 Plus đã bắt đầu bị rò rỉ, theo đó......
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="article-item article-sidebar">
                                                        <div class="article-thumbnail">
                                                            <a href="/elon-musk-chinh-thuc-cu-ky-su-den-thai-lan-giup-giai-cuu-doi-bong-mac-ket-trong-hang-dong" title="Elon Musk chính thức cử kỹ sư đến Thái Lan giúp giải cứu đội bóng mắc kẹt trong hang động">
                                                            <img src="https://bizweb.dktcdn.net/thumb/large/100/321/719/articles/8-1.jpg?v=1531108889320" data-lazyload="https://bizweb.dktcdn.net/thumb/large/100/321/719/articles/8-1.jpg?v=1531108889320" class="img-responsive" alt="Elon Musk chính thức cử kỹ sư đến Thái Lan giúp giải cứu đội bóng mắc kẹt trong hang động">
                                                            </a>
                                                        </div>
                                                        <div class="article-info">
                                                            <h3 class="fw article-title">
                                                                <a href="/elon-musk-chinh-thuc-cu-ky-su-den-thai-lan-giup-giai-cuu-doi-bong-mac-ket-trong-hang-dong" title="Elon Musk chính thức cử kỹ sư đến Thái Lan giúp giải cứu đội bóng mắc kẹt trong hang động">
                                                                <span>Elon Musk chính thức cử kỹ sư đến Thái Lan giúp giải cứu đội bóng mắc kẹt trong hang động</span>
                                                                </a>
                                                            </h3>
                                                            <div class="fw article-summary">
                                                                Những ngày qua, bên cạnh World Cup 2018, việc 12 cậu bé từ độ tuổi 11 đến 16 cùng HLV 25 tuổi bị......
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="owl-item" style="width: 360px; margin-right: 30px;">
                                                <div class="item">
                                                    <div class="article-item article-sidebar">
                                                        <div class="article-thumbnail">
                                                            <a href="/ceo-facebook-mark-zuckerberg-vuot-warren-buffett-chinh-thuc-tro-thanh-nguoi-giau-thu-ba-the-gioi" title="CEO Facebook Mark Zuckerberg vượt Warren Buffett, chính thức trở thành người giàu thứ ba thế giới">
                                                            <img src="https://bizweb.dktcdn.net/thumb/large/100/321/719/articles/7-1.jpg?v=1531108763267" data-lazyload="https://bizweb.dktcdn.net/thumb/large/100/321/719/articles/7-1.jpg?v=1531108763267" class="img-responsive" alt="CEO Facebook Mark Zuckerberg vượt Warren Buffett, chính thức trở thành người giàu thứ ba thế giới">
                                                            </a>
                                                        </div>
                                                        <div class="article-info">
                                                            <h3 class="fw article-title">
                                                                <a href="/ceo-facebook-mark-zuckerberg-vuot-warren-buffett-chinh-thuc-tro-thanh-nguoi-giau-thu-ba-the-gioi" title="CEO Facebook Mark Zuckerberg vượt Warren Buffett, chính thức trở thành người giàu thứ ba thế giới">
                                                                <span>CEO Facebook Mark Zuckerberg vượt Warren Buffett, chính thức trở thành người giàu thứ ba thế giới</span>
                                                                </a>
                                                            </h3>
                                                            <div class="fw article-summary">
                                                                Dù gần đây Facebook đang dính phải khá nhiều vụ bê bối dữ liệu, nhưng điều này không ảnh hưởng g......
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- chan le = true -->
                                                    <div class="article-item article-sidebar">
                                                        <div class="article-thumbnail">
                                                            <a href="/nghien-cuu-cho-thay-dung-iphone-chung-to-ban-la-nguoi-co-thu-nhap-cao" title="Nghiên cứu cho thấy: dùng iPhone chứng tỏ bạn là người có thu nhập cao">
                                                            <img src="https://bizweb.dktcdn.net/thumb/large/100/321/719/articles/6-0.jpg?v=1531108536403" data-lazyload="https://bizweb.dktcdn.net/thumb/large/100/321/719/articles/6-0.jpg?v=1531108536403" class="img-responsive" alt="Nghiên cứu cho thấy: dùng iPhone chứng tỏ bạn là người có thu nhập cao">
                                                            </a>
                                                        </div>
                                                        <div class="article-info">
                                                            <h3 class="fw article-title">
                                                                <a href="/nghien-cuu-cho-thay-dung-iphone-chung-to-ban-la-nguoi-co-thu-nhap-cao" title="Nghiên cứu cho thấy: dùng iPhone chứng tỏ bạn là người có thu nhập cao">
                                                                <span>Nghiên cứu cho thấy: dùng iPhone chứng tỏ bạn là người có thu nhập cao</span>
                                                                </a>
                                                            </h3>
                                                            <div class="fw article-summary">
                                                                Có rất nhiều cách để thể hiện sự giàu có, như đi xe xịn, ở nhà to, mặc đồ hiệu, hay tốt hơn hết ......
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
                    </div>
                </div>
                <!-- BÀI VIẾT LIÊN QUAN -->
            </div>
        </div>
    </div>
</section>
@stop