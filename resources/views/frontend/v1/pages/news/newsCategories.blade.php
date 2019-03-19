@section('title')
{{$categories->name}}
@stop
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
            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 col-sm-push-4 col-md-push-4 col-lg-push-4">
                <div class="article-list item-border">
                    <h1 class="title-head blog-title">
                        <span>{{$categories->name}}</span>
                    </h1>
                    <div class="fw">
                        @foreach($categories->news as $news)
                        <article class="fw article-item article-common-3">
                            <div class="article-thumbnail image-hover-1">
                                <a href="{{route('getNewsDetailFrontend', ['slug'=>$news->slug])}}" title="{{$news->title}}">
                                <img src="{{url('')}}/{{$news->image}}" data-lazyload="{{url('')}}/{{$news->image}}" class="img-responsive" alt="{{$news->title}}">
                                </a>
                            </div>
                            <div class="article-info">
                                <h3 class="fw article-title">
                                    <a href="{{route('getNewsDetailFrontend', ['slug'=>$news->slug])}}" title="{{$news->title}}">
                                    <span>{{$news->title}}</span>
                                    </a>
                                </h3>
                                <div class="article-summary">
                                    <i class="fa fa-quote-left" aria-hidden="true"></i>{{$news->description}}.......
                                </div>
                                <div class="article-detail">
                                    <i class="fa fa-pencil" aria-hidden="true"></i><span>@if($news->user) {{$news->user->name}} @else @endif</span>
                                </div>
                            </div>
                        </article>
                        @endforeach
                    </div>
                    <div class="fw ext-xs-left">
                    </div>
                </div>
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
                <div class="sidebar-item item-border">
                    <div class="module-header aniborder_title">
                        <h2 class="title-head module-title sidebar-title">
                            <a href="tin-tuc" title="Xem nhiều nhất">
                            <span>Xem nhiều nhất</span>
                            </a>
                        </h2>
                    </div>
                    <div class="module-body">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="article-sidebar-items owl-theme dots-enable dots-top-right owl-loaded owl-drag">
                                    <!-- ADD DIV -->
                                    <div class="owl-stage-outer">
                                        <div class="owl-stage">
                                            <div class="owl-item">
                                                @foreach($xemnhieu as $value)
                                                <div class="item">
                                                    <div class="article-item article-sidebar">
                                                        <div class="article-thumbnail">
                                                            <a href="{{route('getNewsDetailFrontend', ['slug'=>$value->slug])}}" title="{{$value->title}}">
                                                            <img src="{{url('')}}/{{$value->image}}" data-lazyload="{{url('')}}/{{$value->image}}" class="img-responsive" alt="{{$value->title}}">
                                                            </a>
                                                        </div>
                                                        <div class="article-info">
                                                            <h3 class="fw article-title">
                                                                <a href="{{route('getNewsDetailFrontend', ['slug'=>$value->slug])}}" title="{{$value->title}}">
                                                                <span>{{$value->title}}</span>
                                                                </a>
                                                            </h3>
                                                            <div class="fw article-summary">
                                                                <?php echo substr($value->description, 0, 120); ?>...
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
                </div>
                <!-- BÀI VIẾT LIÊN QUAN -->
            </div>
        </div>
    </div>
</section>
@section('script')
@stop
@stop