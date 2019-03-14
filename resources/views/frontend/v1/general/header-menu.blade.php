<?php $url = route('getIndex');?>
<div class="header-menu">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 category">
                <div class="category-title">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                    <span>Danh mục sản phẩm</span>
                </div>
                <div class="category-nav sidebar-linklists @if($url != url('')) category-nav-index @endif ">
                    <ul id="nav-cate">
                        @foreach($categories as $cate)
                        <li class="sidebar-menu-list">
                            <a class="ajaxLayer" href="{{route('getProductCateFrontend', ['url'=>$cate->slug])}}" title="Hot Deal">
                            <img src="{{url('')}}/assets/frontend/v1.0/images/icons/swing.svg" data-lazyload="{{url('')}}/assets/frontend/v1.0/images/icons/link_icon_1.png" alt="hot-deal">
                            <span>{{$cate->name}}</span>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            