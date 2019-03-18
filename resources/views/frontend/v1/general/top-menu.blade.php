<div class="hidden-xs hidden-sm col-md-9 col-lg-9 no-padding">
                <nav>
                    <ul id="nav" class="nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="{{route('getIntroduceFrontend')}}">Về chúng tôi</a>
                        </li>
                        <li class="nav-item ">
                            <a href="/collections/all" class="nav-link">Dành cho bạn <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item-lv2">
                                    <a class="nav-link" href="/san-pham-moi">Hàng mới về</a>
                                </li>
                                <li class="nav-item-lv2">
                                    <a class="nav-link" href="/san-pham-noi-bat">Top nổi bật</a>
                                </li>
                                <li class="nav-item-lv2">
                                    <a class="nav-link" href="/san-pham-khuyen-mai">Hot Deal</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item ">
                            <a href="#" class="nav-link">Tin tổng hợp <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                @if(count($newsCategories) > 0)
                                @foreach($newsCategories as $news_cate)
                                <li class="nav-item-lv2">
                                    <a class="nav-link" href="{{route('getNewsCateFrontend', ['slug'=>$news_cate->slug])}}">{{$news_cate->name}}</a>
                                </li>
                                @endforeach
                                @else
                                <li class="nav-item-lv2">
                                    Đang cập nhật
                                </li>
                                @endif
                            </ul>
                        </li>
                        <li class="nav-item ">
                            <a href="{{route('getContactFrontend')}}" class="nav-link">Liên hệ </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
</header>