
<div class="main-menu menu-fixed menu-light menu-accordion menu-bordered menu-shadow"
            data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item">
                <a href="{{route('getFileManagement')}}?type=image"><i class="la la-image"></i><span class="menu-title" data-i18n="nav.dash.main">{{__('general.imageManagement')}}</span></a>
            </li>  
            <li class=" nav-item">
                <a href="index.html"><i class="la la-hand-o-right"></i><span class="menu-title" data-i18n="nav.dash.main">{{__('general.productManagement')}}</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="{{route('getListCateAdmin')}}">{{__('general.category')}}</a>
                    </li>
                    <li><a class="menu-item" href="{{route('getListProductsAdmin')}}">{{__('general.product')}}</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item">
                <a href="{{route('getFileManagement')}}?type=image"><i class="la la-cog"></i><span class="menu-title" data-i18n="nav.dash.main">{{__('general.systemManagement')}}</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="{{route('getListLanguages')}}">{{__('general.language')}}</a>
                    </li>
                </ul>
            </li> 
            <li class=" nav-item">
                <a href="#"><i class="la la-newspaper-o"></i><span class="menu-title" data-i18n="nav.dash.main">Cài Đặt Trang</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="{{route('getIntroduceAdmin')}}">Trang Giới Thiệu</a>
                    </li>
                </ul>
            </li> 
            <li class=" nav-item">
                <a href="{{route('getContactAdmin')}}"><i class="la la-user-plus"></i><span class="menu-title" data-i18n="nav.dash.main">Liên Hệ Mới</span></a>
            </li>  
        </ul>
    </div>
</div>