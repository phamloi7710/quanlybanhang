@section('title'){{$news->title}}@stop
@section('description'){{$news->seo_description}}@stop
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
                        <span itemprop="title">Tin tức</span>
                        </a>
                    </li>
                    <li>
                        <strong itemprop="title">{{$news->title}}</strong>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="blog-article article">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 col-sm-push-4 col-md-push-4 col-lg-push-4">
                <article class="article-main module-content item-border" itemscope="" itemtype="http://schema.org/Article">
                    <meta itemprop="mainEntityOfPage" content="ceo-facebook-mark-zuckerberg-vuot-warren-buffett-chinh-thuc-tro-thanh-nguoi-giau">
                    <meta itemprop="description" content="">
                    <meta itemprop="author" content="Libra Team">
                    <meta itemprop="headline" content="{{$news->title}}">
                    <meta itemprop="image" content="https://bizweb.dktcdn.net/100/321/719/articles/7-1.jpg?v=1531108763267">
                    <meta itemprop="datePublished" content="09-07-2018">
                    <meta itemprop="dateModified" content="09-07-2018">
                    <div class="hidden" itemprop="publisher" itemscope="" itemtype="https://schema.org/Organization">
                        <div itemprop="logo" itemscope="" itemtype="https://schema.org/ImageObject">
                            <img src="//bizweb.dktcdn.net/100/321/719/themes/699729/assets/logo.png?1548428247318" alt="Libra Mart">
                            <meta itemprop="url" content="https://bizweb.dktcdn.net/100/321/719/themes/699729/assets/logo.png?1548428247318">
                            <meta itemprop="width" content="275">
                            <meta itemprop="height" content="85">
                        </div>
                        <meta itemprop="name" content="Libra Mart">
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <h1 class="title-head article-title">
                                <span>{{$news->title}}</span>
                            </h1>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="fw article-info margin-bottom-30">
                                <div class="fw article-detail">
                                    <span>@if($news->user) {{$news->user->name}} @else @endif </span><span>{{date_format($news->created_at,"H:i - d/m/Y")}}</span>
                                    <span><i class="fa fa-eye"></i>  {{$news->views}} lượt xem</span>
                                </div>
                                <div class="article-image margin-top-15">
                                    <img class="img-responsive" src="{{url('')}}/{{$news->image}}" alt="{{$news->slug}}">
                                </div>
                            </div>
                            <div class="article-summary">
                                <div class="article-content">
                                    <div class="rte">
                                        {!!$news->content!!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tags_and_social">
                            <!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <ul class="article_tags tags-list">
                                    <li class="tag-item">
                                        <a class="tag_hover_style_1" href="/blogs/all/tagged/ceo" title="Các bài viết có tag : ceo">ceo</a>
                                        <a class="tag_hover_style_1" href="/blogs/all/tagged/facebook" title="Các bài viết có tag : facebook">facebook</a>
                                        <a class="tag_hover_style_1" href="/blogs/all/tagged/mark-zuckerberg" title="Các bài viết có tag : mark zuckerberg">mark zuckerberg</a>
                                        <a class="tag_hover_style_1" href="/blogs/all/tagged/warren-buffett" title="Các bài viết có tag : warren buffett">warren buffett</a>
                                    </li>
                                </ul>
                            </div> -->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="social-sharing article-sharing">
                                    <div class="social-media social-icons" data-permalink="{{getUrl()}}">
                                        <div class="sharing-item">
                                            <a target="_blank" href="//www.facebook.com/sharer.php?u={{getUrl()}}" class="share-facebook txt-facebook hv-bg-facebook hv-bd-facebook" title="Chia sẻ lên Facebook">
                                            <span class="icon icon-facebook" aria-hidden="true">
                                            <i class="fa fa-facebook"></i>
                                            </span>
                                            </a>
                                            <a target="_blank" href="https://twitter.com/share?text={{$news->slug}}&amp;url={{getUrl()}}" class="share-twitter txt-twitter hv-bg-twitter hv-bd-twitter" title="Chia sẻ lên Twitter">
                                            <span class="icon icon-twitter" aria-hidden="true">
                                            <i class="fa fa-twitter"></i>
                                            </span>
                                            </a>
                                            <a target="_blank" href="//plus.google.com/share?url={{getUrl()}}" class="share-google txt-google-plus hv-bg-google-plus hv-bd-google-plus" title="+1 lên Google Plus">
                                            <span class="icon icon-google-plus" aria-hidden="true">
                                            <i class="fa fa-google-plus"></i>
                                            </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="comments">
                                <div class="bg-warning padding-15">
                                    <div class="text-warning">
                                        Nội dung này chưa có bình luận, hãy gửi bình luận đầu tiên của bạn.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <form accept-charset="UTF-8" action="/posts/ceo-facebook-mark-zuckerberg-vuot-warren-buffett-chinh-thuc-tro-thanh-nguoi-giau-thu-ba-the-gioi/comments" id="article_comments" method="post">
                                <input name="FormType" type="hidden" value="article_comments">
                                <input name="utf8" type="hidden" value="true">
                                <div class="notification">
                                    <!-- Thông báo -->
                                    <!-- Thông báo lỗi -->
                                </div>
                                <!-- Bình luận -->
                                <fieldset class="form-comment">
                                    <legend>Viết bình luận</legend>
                                    <div class="row margin-bottom-15">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <fieldset class="form-group">
                                                <label>Nội dung <span class="text-danger">*</span></label>
                                                <textarea class="form-control form-control-lg input-control" id="comment" name="Body" rows="6" maxlength="500" minlength="5" placeholder="Nội dung" required=""></textarea>
                                            </fieldset>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                            <fieldset class="form-group margin-top-15">
                                                <label>Họ tên <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control form-control-lg input-control" value="" id="full-name" name="Author" placeholder="Họ tên" required="">
                                            </fieldset>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                            <fieldset class="form-group margin-top-15">
                                                <label>Email <span class="text-danger">*</span></label>
                                                <input type="email" class="form-control form-control-lg input-control" value="" id="email" name="Email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,63}$" placeholder="Email" required="">
                                            </fieldset>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn button-hover-3">
                                    <span>Gửi bình luận</span>
                                    </button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </article>
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
                    </div>
                    <div class="sidebar-menu-content module-content">
                        <div class="sidebar-linklists">
                            <ul>
                                @foreach($getAllNewsCate as $allCate)
                                <li class="sidebar-menu-list blog-sidebar-menu">
                                    <a class="ajaxLayer" href="{{route('getNewsCateFrontend', ['slug'=>$allCate->slug])}}" title="Về chúng tôi">
                                        <i class="fa fa-hand-o-right"></i> <span> {{$allCate->name}}</span>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- DANH MỤC LỰA CHỌN -->
                <!-- BÀI VIẾT LIÊN QUAN -->
                <div class="sidebar-item item-border">
                    <div class="module-header aniborder_title">
                        <h2 class="title-head module-title sidebar-title">
                            <a href="/tin-tuc" title="Bài viết cùng chủ để">
                            <span>Bài viết cùng chủ để</span>
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
                                <div class="related_articles">
                                    <ul>
                                    	@if(count($more) > 0)
                                    	@foreach($more as $value)
                                        <li class="item">
                                            <a class="article_title" href="{{route('getNewsDetailFrontend', ['slug'=>$value->slug])}}" title="{{$value->title}}">
                                            <span>{{$value->title}}</span>
                                            </a>
                                        </li>
                                        @endforeach
                                        @else
                                        <p style="text-align: center;">Không có bài viết nào cùng chủ đề với bài viết này</p>
                                        @endif
                                    </ul>
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