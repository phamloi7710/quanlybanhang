@section('title'){{$product->seo_title}} - @stop
@section('description'){{$product->seo_description}}@stop
@section('keywords'){{$product->seo_key_words}}@stop
@extends('frontend.v1.general.master')
@section('content')
<link href="{{url('')}}/assets/frontend/v1.0/css/product_tabs.scss.css?1548428247318" rel="stylesheet" type="text/css">
<section class="bread-crumb">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <ul class="breadcrumb" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                    <li class="home">
                        <a itemprop="url" href="/"><span itemprop="title">Trang chủ</span></a>
                    </li>
                    <li>
                        <a itemprop="url" href="/dien-may">
                        <span itemprop="title">{{$product->category->name}}</span>
                        </a>
                    </li>
                    <li>
                        <strong><span itemprop="title">{{$product->name}}</span></strong>
                    </li>
                    <li>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="product product-template" itemscope="" itemtype="#">
    <meta itemprop="url" content="{{route('getDetailProduct', ['slug'=>$product->slug, 'cate_name'=>$product->category->slug])}}">
    <meta itemprop="image" content="{{url('')}}/assets/frontend/v1/images/products/hitachirm700pgv21u579d20160608.jpg?v=1530847016280">
    <meta itemprop="description" content="">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 details-product">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-hg-4 product_images_list">
                        <div class="large-image">
                            <a href="javascript:;">
                            <img id="img_01" src="{{url('')}}/{{$product->avatar}}" alt="{{$product->name}}">
                            </a>
                        </div>
                        <div id="gallery_01" class="owl-carousel owl-theme thumbnail-product owl-loaded owl-drag" data-hg-items="5" data-lg-items="5" data-md-items="4" data-sm-items="6" data-xs-items="4" data-xxs-items="3" data-margin="10" data-nav="true">
                            <div class="owl-stage-outer">
                                <div class="owl-stage" style="width: 100%">
                                    <div class="owl-item active" style="width: 20%;">
                                        <div class="item">
                                            <a href="#" data-image="{{url('')}}/{{$product->avatar}}" data-zoom-image="{{url('')}}/{{$product->avatar}}">
                                            <img src="{{url('')}}/{{$product->avatar}}" data-lazyload="{{url('')}}/{{$product->avatar}}" alt="{{$product->name}}">
                                            </a>
                                        </div>
                                    </div>
                                    @foreach($dataImage as $imageData)
                                    <div class="owl-item" style="width: 20%;">
                                        <div class="item">
                                            <a href="#" data-image="{{url('')}}/{{$imageData['url_image']}}" data-zoom-image="{{url('')}}/{{$imageData['url_image']}}">
                                            <img src="{{url('')}}/{{$imageData['url_image']}}" data-lazyload="{{url('')}}/{{$imageData['url_image']}}" alt="{{$product->name}}">
                                            </a>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="owl-nav disabled">
                                <div class="owl-prev"><i class="fa fa-angle-left"></i></div>
                                <div class="owl-next"><i class="fa fa-angle-right"></i></div>
                            </div>
                            <div class="owl-dots disabled"></div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-7 col-md-4 col-lg-4 col-hg-4 details-pro">
                        <h1 class="title-head product-title" itemprop="name">{{$product->name}}</h1>
                        <div class="product_info product-type">
                            <label>Danh Mục: </label><span class="type_item" itemprop="model">{{$product->category->name}}</span>
                        </div>
                        <!-- <div class="product_info product-vendor" itemprop="brand" itemscope="" itemtype="http://schema.org/Organization">
                            <label>Cung cấp bởi: </label><span class="vendor_item" itemprop="name">Sharp</span>
                            </div> -->
                        <div class="product_info product-inventory" itemscope="" itemtype="http://schema.org/ItemAvailability">
                            <label>Tình trạng: </label>
                            <span class="quantity_item" itemprop="supersededBy">
                                @if($product->qty > '0') Còn Hàng @else 
                                <p style="color: red;">Hết Hàng</p>
                                @endif<em></em>
                            </span>
                        </div>
                        <div class="price-box price-box-product" itemscope="" itemtype="http://schema.org/Offer">
                            <span class="special-price">
                                <span class="price" itemprop="price">@if(isset($product->price_sale)) {{number_format($product->price_sale, 0,',','.')}} (₫) @else {{number_format($product->price, 0,',','.')}} (₫) @endif</span>
                            </span>
                            @if(isset($product->price_sale))
                            <span class="old-price">
                                <span class="price" itemprop="priceSpecification">{{number_format($product->price, 0,',','.')}} (₫)</span>
                            </span>
                            @endif
                        </div>
                        <!-- <div class="vat_enable ">
                            * <em>
                            Giá sản phẩm chưa bao gồm VAT
                            </em>
                            </div> -->
                        <div class="product_detail_countdown">
                        </div>
                        <div class="form-product">
                            <form enctype="multipart/form-data" action="#" method="post" class="form-inline">
                                <div class="box-variant fw clearfix  hidden ">
                                    <input type="hidden" name="variantId" value="19426470">
                                </div>
                                <div class="quantity_contact">
                                    <div class="form-group product_quantity">
                                        <label class="form-control-label">
                                        Số lượng
                                        </label>
                                        <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty > 1 ) result.value--;return false;" class="reduced btn btn-ipnb" type="button">-</button>
                                        <input type="text" class="form-control text-xs-center qty" title="Số lượng" value="1" maxlength="3" id="qty" name="quantity" onkeyup="valid(this,'numbers')" onblur="valid(this,'numbers')">
                                        <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="increase btn btn-ipnb" type="button">+</button>
                                    </div>
                                </div>
                                <!-- BUTTON ACTIONS -->
                                <div class="button_actions">
                                    <button type="submit" class="btn btn-buy button-hover-3" title="Mua ngay">
                                    <span><i class="fa fa-shopping-bag" aria-hidden="true"></i> Mua ngay</span>
                                    </button>
                                </div>
                                <!-- END BUTTON ACTIONS -->
                            </form>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-5 col-md-3 col-lg-3 col-hg-4 product-extra-info">
                        <!-- MÔ TẢ NGẮN -->
                        <div class="product-summary product_description">
                            <div class="module-header aniborder_title">
                                <h2 class="title-head module-title sidebar-title">
                                    <a href="javascript:;">
                                    <span>Giới thiệu sản phẩm</span>
                                    </a>
                                </h2>
                                <div class="heading-line">
                                    <span class="short-line"></span>
                                    <span class="long-line"></span>
                                </div>
                                <em class="fa fa-eye" aria-hidden="true"></em>
                            </div>
                            <br>
                            <br>
                            <br>
                            <div class="description">
                                <!-- <em>(Đang cập nhật ...)</em> -->
                                {{$product->description}}
                            </div>
                        </div>
                        <!-- END MÔ TẢ NGẮN -->
                        <!-- CHIA SẺ MẠNG XÃ HỘI -->
                        <div class="social-sharing">
                            <div class="social-media social-icons" data-permalink="{{route('getDetailProduct', ['slug'=>$product->slug, 'cate_name'=>$product->category->slug])}}">
                                <div class="sharing-item">
                                    <a target="_blank" href="https://www.facebook.com/sharer.php?u={{route('getDetailProduct', ['slug'=>$product->slug, 'cate_name'=>$product->category->slug])}}" class="share-facebook txt-facebook hv-bg-facebook hv-bd-facebook" title="Chia sẻ lên Facebook">
                                    <span class="icon icon-facebook" aria-hidden="true">
                                    <i class="fa fa-facebook"></i>
                                    </span>
                                    </a>
                                    <a target="_blank" href="https://twitter.com/share?text=tu-lanh-side-by-side-inverter-hitachi&amp;url={{route('getDetailProduct', ['slug'=>$product->slug, 'cate_name'=>$product->category->slug])}}" class="share-twitter txt-twitter hv-bg-twitter hv-bd-twitter" title="Chia sẻ lên Twitter">
                                    <span class="icon icon-twitter" aria-hidden="true">
                                    <i class="fa fa-twitter"></i>
                                    </span>
                                    </a>
                                    <a target="_blank" href="https://plus.google.com/share?url={{route('getDetailProduct', ['slug'=>$product->slug, 'cate_name'=>$product->category->slug])}}" class="share-google txt-google-plus hv-bg-google-plus hv-bd-google-plus" title="+1 lên Google Plus">
                                    <span class="icon icon-google-plus" aria-hidden="true">
                                    <i class="fa fa-google-plus"></i>
                                    </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- END CHIA SẺ -->
                        <!-- VISITOR COUNTER -->
                        <div class="product-single__visitor mb__20 flex fw">
                            <i class="fa fa-users" aria-hidden="true"></i> Đang có <span class="product-single__visitor-number" data-min="10">68</span> người cùng xem sản phẩm này
                        </div>
                        <style type="text/css">
                            /*Viewer*/
                            .product-single__visitor{
                            color: #494949;
                            font-size: 14px;
                            }
                            .product-single__visitor-number{
                            color: #f26a29;
                            font-weight: 700;
                            }
                        </style>
                        <script>
                            function LibCounters(){
                                window.setInterval(function(){
                                    var counterNumber = $('.product-single__visitor-number'),
                                    min = counterNumber.data('min'),
                                    max = 100,
                                    randomNumber = Math.floor(Math.random() * (max - min + 1)) + min;
                                    counterNumber.text(randomNumber);
                                }, 15000);
                            }
                            $(window).load(function(){
                                var starter = ['50','51','52','53','54','55','56','57','58','59','60','61','62','63','64','65','66','67','68','69','70','71','72','73','74','75','76','77','78','79','80','81','82','83','84','85','86','87','88','89','90','91','92','93','94','95','96','97','98','99',],
                                starterCounter = Math.floor(Math.random() * starter.length);
                                $('.product-single__visitor-number').text(starterCounter);
                                $('.product-single__visitor').removeClass('hidden');
                            });
                            $(document).ready(function(){
                                LibCounters();
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-hg-8">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="product-overview-tab">
                            <div class="product_tabs panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading current" role="tab" id="heading-1">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                                            <i class="fa fa-info-circle" aria-hidden="true"></i> <span>Mô tả</span>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse-1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading-1" aria-expanded="true" style="">
                                        <div class="panel-body rte">
                                            {!! $product->content!!}
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="heading-2">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-2" aria-expanded="true" aria-controls="collapse-2">
                                            <i class="fa fa-shield" aria-hidden="true"></i> <span>Chính sách</span>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse-2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-2" aria-expanded="false" style="height: 0px;">
                                        <div class="panel-body rte">
                                            <p>Cám ơn quý khách đã quan tâm và truy cập vào website. Chúng tôi tôn trọng và cam kết sẽ bảo mật những thông tin mang tính riêng tư của Quý khách.</p>
                                            <p>Chính sách bảo mật sẽ giải thích cách chúng tôi tiếp nhận, sử dụng và (trong trường hợp nào đó) tiết lộ thông tin cá nhân của Quý khách.</p>
                                            <p>Bảo vệ dữ liệu cá nhân và gây dựng được niềm tin cho quý khách là vấn đề rất quan trọng với chúng tôi. Vì vậy, chúng tôi sẽ dùng tên và các thông tin khác liên quan đến quý khách tuân thủ theo nội dung của Chính sách bảo mật. Chúng tôi chỉ thu thập những thông tin cần thiết liên quan đến giao dịch mua bán.</p>
                                            <p>Chúng tôi sẽ giữ thông tin của khách hàng trong thời gian luật pháp quy định hoặc cho mục đích nào đó. Quý khách có thể truy cập vào website và trình duyệt mà không cần phải cung cấp chi tiết cá nhân. Lúc đó, Quý khách đang ẩn danh và chúng tôi không thể biết bạn là ai nếu Quý khách không đăng nhập vào tài khoản của mình.</p>
                                            <p><strong>1. Thu thập thông tin cá nhân</strong></p>
                                            <p>- Chúng tôi thu thập, lưu trữ và xử lý thông tin của bạn cho quá trình mua hàng và cho những thông báo sau này liên quan đến đơn hàng, và để cung cấp dịch vụ, bao gồm một số thông tin cá nhân: danh hiệu, tên, giới tính, ngày sinh, email, địa chỉ, địa chỉ giao hàng, số điện thoại, fax, chi tiết thanh toán, chi tiết thanh toán bằng thẻ hoặc chi tiết tài khoản ngân hàng.</p>
                                            <p>- Chúng tôi sẽ dùng thông tin quý khách đã cung cấp để xử lý đơn đặt hàng, cung cấp các dịch vụ và thông tin yêu cầu thông qua website và theo yêu cầu của bạn.</p>
                                            <p>- Hơn nữa, chúng tôi sẽ sử dụng các thông tin đó để quản lý tài khoản của bạn; xác minh và thực hiện giao dịch trực tuyến, nhận diện khách vào web, nghiên cứu nhân khẩu học, gửi thông tin bao gồm thông tin sản phẩm và dịch vụ. Nếu quý khách không muốn nhận bất cứ thông tin tiếp thị của chúng tôi thì có thể từ chối bất cứ lúc nào.</p>
                                            <p>- Chúng tôi có thể chuyển tên và địa chỉ cho bên thứ ba để họ giao hàng cho bạn (ví dụ cho bên chuyển phát nhanh hoặc nhà cung cấp).</p>
                                            <p>- Chi tiết đơn đặt hàng của bạn được chúng tôi lưu giữ nhưng vì lí do bảo mật nên chúng tôi không công khai trực tiếp được. Tuy nhiên, quý khách có thể tiếp cận thông tin bằng cách đăng nhập tài khoản trên web. Tại đây, quý khách sẽ thấy chi tiết đơn đặt hàng của mình, những sản phẩm đã nhận và những sản phẩm đã gửi và chi tiết email, ngân hàng và bản tin mà bạn đặt theo dõi dài hạn.</p>
                                            <p>- Quý khách cam kết bảo mật dữ liệu cá nhân và không được phép tiết lộ cho bên thứ ba. Chúng tôi không chịu bất kỳ trách nhiệm nào cho việc dùng sai mật khẩu nếu đây không phải lỗi của chúng tôi.</p>
                                            <p>- Chúng tôi có thể dùng thông tin cá nhân của bạn để nghiên cứu thị trường. mọi thông tin chi tiết sẽ được ẩn và chỉ được dùng để thống kê. Quý khách có thể từ chối không tham gia bất cứ lúc nào.</p>
                                            <p><strong>2. Bảo mật</strong></p>
                                            <p>- Chúng tôi có biện pháp thích hợp về kỹ thuật và an ninh để ngăn chặn truy cập trái phép hoặc trái pháp luật hoặc mất mát hoặc tiêu hủy hoặc thiệt hại cho thông tin của bạn.</p>
                                            <p>- Chúng tôi khuyên quý khách không nên đưa thông tin chi tiết về việc thanh toán với bất kỳ ai bằng e-mail, chúng tôi không chịu trách nhiệm về những mất mát quý khách có thể gánh chịu trong việc trao đổi thông tin của quý khách qua internet hoặc email.</p>
                                            <p>- Quý khách tuyệt đối không sử dụng bất kỳ chương trình, công cụ hay hình thức nào khác để can thiệp vào hệ thống hay làm thay đổi cấu trúc dữ liệu. Nghiêm cấm việc phát tán, truyền bá hay cổ vũ cho bất kỳ hoạt động nào nhằm can thiệp, phá hoại hay xâm nhập vào dữ liệu của hệ thống website. Mọi vi phạm sẽ bị tước bỏ mọi quyền lợi cũng như sẽ bị truy tố trước pháp luật nếu cần thiết.</p>
                                            <p>- Mọi thông tin giao dịch sẽ được bảo mật nhưng trong trường hợp cơ quan pháp luật yêu cầu, chúng tôi sẽ buộc phải cung cấp những thông tin này cho các cơ quan pháp luật.</p>
                                            <p>Các điều kiện, điều khoản và nội dung của trang web này được điều chỉnh bởi luật pháp Việt Nam và tòa án Việt Nam có thẩm quyền xem xét.</p>
                                            <p><strong>3. Quyền lợi khách hàng</strong></p>
                                            <p>- Quý khách có quyền yêu cầu truy cập vào dữ liệu cá nhân của mình, có quyền yêu cầu chúng tôi sửa lại những sai sót trong dữ liệu của bạn mà không mất phí. Bất cứ lúc nào bạn cũng có quyền yêu cầu chúng tôi ngưng sử dụng dữ liệu cá nhân của bạn cho mục đích tiếp thị.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="heading-3">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-3" aria-expanded="true" aria-controls="collapse-3">
                                            <i class="fa fa-shield" aria-hidden="true"></i> <span>Hướng dẫn mua hàng</span>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse-3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-3" aria-expanded="false" style="height: 0px;">
                                        <div class="panel-body rte">
                                            <p><strong>Bước 1:</strong> Truy cập website và lựa chọn sản phẩm cần mua để mua hàng</p>
                                            <p><strong>Bước 2:</strong> Click và sản phẩm muốn mua, màn hình hiển thị ra pop up với các lựa chọn sau</p>
                                            <p>Nếu bạn muốn tiếp tục mua hàng: Bấm vào phần tiếp tục mua hàng để lựa chọn thêm sản phẩm vào giỏ hàng</p>
                                            <p>Nếu bạn muốn xem giỏ hàng để cập nhật sản phẩm: Bấm vào xem giỏ hàng</p>
                                            <p>Nếu bạn muốn đặt hàng và thanh toán cho sản phẩm này vui lòng bấm vào: Đặt hàng và thanh toán</p>
                                            <p><strong>Bước 3:</strong> Lựa chọn thông tin tài khoản thanh toán</p>
                                            <p>Nếu bạn đã có tài khoản vui lòng nhập thông tin tên đăng nhập là email và mật khẩu vào mục đã có tài khoản trên hệ thống</p>
                                            <p>Nếu bạn chưa có tài khoản và muốn đăng ký tài khoản vui lòng điền các thông tin cá nhân để tiếp tục đăng ký tài khoản. Khi có tài khoản bạn sẽ dễ dàng theo dõi được đơn hàng của mình</p>
                                            <p>Nếu bạn muốn mua hàng mà không cần tài khoản vui lòng nhấp chuột vào mục đặt hàng không cần tài khoản</p>
                                            <p><strong>Bước 4:</strong> Điền các thông tin của bạn để nhận đơn hàng, lựa chọn hình thức thanh toán và vận chuyển cho đơn hàng của mình</p>
                                            <p><strong>Bước 5:</strong> Xem lại thông tin đặt hàng, điền chú thích và gửi đơn hàng</p>
                                            <p>Sau khi nhận được đơn hàng bạn gửi chúng tôi sẽ liên hệ bằng cách gọi điện lại để xác nhận lại đơn hàng và địa chỉ của bạn.</p>
                                            <p>Trân trọng cảm ơn.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <script type="text/javascript">
                                $(document).ready(function(){
                                    $('.product_tabs .panel .panel-collapse').each(function(){
                                        if($(this).hasClass('in')){
                                            $(this).parent().find('.panel-heading').addClass('current');
                                        } else {
                                            $(this).parent().find('.panel-heading').removeClass('current');
                                        }
                                    });
                                
                                    $('.product_tabs .panel .panel-heading').on('click', function(){
                                        $('.product_tabs .panel .panel-heading').removeClass('current');
                                        $(this).addClass('current');
                                    });
                                });
                            </script>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="module-comment-facebook">
                            <div class="module-header aniborder_title">
                                <h2 class="title-head module-title">
                                    <a href="javascript:;">
                                    <span>Hỏi &amp; Đáp</span>
                                    </a>
                                </h2>
                                <div class="heading-line">
                                    <span class="short-line"></span>
                                    <span class="long-line"></span>
                                </div>
                            </div>
                            <div class="module-content fw">
                                <div class="fb-comments fb_iframe_widget fb_iframe_widget_fluid_desktop" data-href="libra-mart.bizwebvietnam.net/tu-lanh-side-by-side-inverter-hitachi" data-width="100%" data-numposts="5" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=&amp;container_width=848&amp;height=100&amp;href=http%3A%2F%2Flibra-mart.bizwebvietnam.net%2Ftu-lanh-side-by-side-inverter-hitachi&amp;locale=vi_VN&amp;numposts=5&amp;sdk=joey&amp;version=v2.10" style="width: 100%;"><span style="vertical-align: bottom; width: 100%; height: 179px;"><iframe name="f2508fd6c54298" width="1000px" height="100px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" title="fb:comments Facebook Social Plugin" src="https://www.facebook.com/v2.10/plugins/comments.php?app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2Fvy-MhgbfL4v.js%3Fversion%3D44%23cb%3Df2cd406da0a182%26domain%3Dlibra-mart.bizwebvietnam.net%26origin%3Dhttps%253A%252F%252Flibra-mart.bizwebvietnam.net%252Ff29648f145de93c%26relation%3Dparent.parent&amp;container_width=848&amp;height=100&amp;href=http%3A%2F%2Flibra-mart.bizwebvietnam.net%2Ftu-lanh-side-by-side-inverter-hitachi&amp;locale=vi_VN&amp;numposts=5&amp;sdk=joey&amp;version=v2.10" style="border: none; visibility: visible; width: 100%; height: 179px;" class=""></iframe></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-hg-4">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="related_products">
                            <div class="module-header aniborder_title">
                                <h2 class="title-head module-title">
                                    <a href="dien-may" title="Xem thêm các sản phẩm cùng danh mục">
                                    <span>Sản phẩm cùng danh mục</span>
                                    </a>
                                </h2>
                                <div class="heading-line">
                                    <span class="short-line"></span>
                                    <span class="long-line"></span>
                                </div>
                            </div>
                            <div class="module-content">
                                <div class="owl-carousel owl-theme dots-enable dots-top-right padding-top-10 owl-loaded owl-drag">
                                    <div class="owl-stage-outer">
                                        <div class="owl-stage" style="width: 100%;">
                                            @foreach($productRelate as $relate)
                                            <div class="owl-item" style="width: 50%">
                                                <div class="item">
                                                    <div class="product-box">
                                                        <div class="product-thumbnail">
                                                            <a href="{{route('getDetailProduct', ['slug'=>$relate->slug, 'cate_name'=>$relate->category->slug])}}" title="{{$relate->name}}">
                                                            <img class="img-responsive" src="{{url('')}}/{{$relate->avatar}}" data-lazyload="{{$relate->avatar}}" alt="{{$relate->name}}">
                                                            </a>
                                                            <div class="product-action hidden-xs">
                                                                <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-12107332" enctype="multipart/form-data">
                                                                    <input type="hidden" name="variantId" value="19426468">
                                                                    <button class="btn-buy btn-cart btn button-hover-3 left-to add_to_cart" title="Mua ngay">
                                                                    <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <div class="product-info">
                                                            <h3 class="product-name">
                                                                <a href="{{route('getDetailProduct', ['slug'=>$relate->slug, 'cate_name'=>$relate->category->slug])}}" title="{{$relate->name}}">
                                                                {{$relate->name}}
                                                                </a>
                                                            </h3>
                                                            <div class="price-box price-loop-style res-item">
                                                                <span class="special-price">
                                                                <span class="price">@if(isset($relate->price_sale)) {{number_format($relate->price_sale, 0,',','.')}} (₫) @else {{number_format($relate->price, 0,',','.')}} (₫) @endif</span>
                                                                </span>
                                                                @if(isset($relate->price_sale))
                                                                <span class="old-price">
                                                                <span class="price">
                                                                    {{number_format($relate->price, 0,',','.')}} (₫)
                                                                </span>
                                                                </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="owl-nav disabled">
                                        <div class="owl-prev"><i class="fa fa-angle-left"></i></div>
                                        <div class="owl-next"><i class="fa fa-angle-right"></i></div>
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
<script src="{{url('')}}/assets/frontend/v1.0/script/product.js" type="text/javascript"></script>
<script src="{{url('')}}/assets/frontend/v1.0/jquery/jquery.elevatezoom308.min.js" type="text/javascript"></script>
@stop