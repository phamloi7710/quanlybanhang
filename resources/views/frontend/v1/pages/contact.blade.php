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
                        <strong itemprop="title">Đăng nhập tài khoản</strong>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<div class="contact page-template">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="item-border padding-10 margin-bottom-30">
                    <div class="module-title module-header margin-0 margin-bottom-30">
                        <h1 class="title-head page_title">Liên hệ với chúng tôi</h1>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <h2>Thông tin liên hệ</h2>
                            <form accept-charset="UTF-8" action="{{route('postContactFrontend')}}" id="contact" method="post">
                                @csrf
                                <div id="emtry_contact" class="form-signup form_contact clearfix">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                            <fieldset class="form-group">	
                                                                <label>Họ tên</label>
                                                                <input type="text" placeholder="Họ tên" name="txtName" id="name" class="form-control form-control-lg" required="">
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                            <fieldset class="form-group">
                                                                <label>Số Điện Thoại</label>
                                                                <input type="text" placeholder="Số điện thoại liên lạc" name="txtPhone" class="form-control form-control-lg" required="">
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                            <fieldset class="form-group">
                                                                <label>Email</label>
                                                                <input type="email" placeholder="Email" name="txtEmail" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,63}$" data-validation="email" id="email" class="form-control form-control-lg" required="">
                                                            </fieldset>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                                    <fieldset class="fw form-group contact-content">
                                                        <label>Nội dung</label>
                                                        <textarea name="content" placeholder="Nhập nội dung" id="comment" class="form-control form-control-lg" required=""></textarea>
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pull-right">
                                                    <button tyle="submit" class="btn button-hover-3">
                                                    <span>Gửi liên hệ</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="related_products">
                                                <div class="module-header aniborder_title">
                                                    <h2 class="title-head module-title">
                                                        <a href="dien-may" title="Xem thêm các sản phẩm cùng danh mục">
                                                        <span>Thông Tin Liên Hệ</span>
                                                        </a>
                                                    </h2>
                                                    <div class="heading-line">
                                                        <span class="short-line"></span>
                                                        <span class="long-line"></span>
                                                    </div>
                                                </div>
                                                <div style="margin-top: 100px;">
                                                    <img src="{{url('')}}/assets/frontend/v1.0/images/icons/logo.png" class="img-responsive" alt="logo">
                                                    <h4 class="footer-title">
                                                        <span>Siêu thị trực tuyến Smart Market</span>
                                                    </h4>
                                                    <div class="rte">
                                                        ☎️ Hotline: 0939 080603 --- 0915 080603 (24/24)
                                                    </div>
                                                    <div class="rte">
                                                        🌏 Website: {{url('')}}
                                                    </div>
                                                    <div class="rte">
                                                        📩 Email: osimivietnam@gmail.com
                                                    </div>
                                                    <div class="rte">
                                                        🏠 Địa chỉ: 
                                                    </div>
                                                    <div class="rte">
                                                        ✔️ Trụ sở 1: 93 Nguyễn Bỉnh Khiêm, Phường Đa Kao, Quận 1, TP.HCM
                                                    </div>
                                                    <div class="rte">
                                                        ✔️ Trụ sở 2: Tòa nhà Lexington Residence, 67 Mai Chí Thọ, P.An Phú, Q.2, TP.HCM 
                                                    </div> 
                                                    <div class="rte">
                                                        ✔️ Trụ sở 3: 113 Nguyễn Thái Học, TP. Vũng Tàu
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop