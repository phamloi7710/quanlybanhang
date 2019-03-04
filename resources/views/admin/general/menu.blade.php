
<div class="main-menu menu-fixed menu-dark menu-accordion menu-bordered menu-shadow"
            data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item">
                <a href="{{route('getFileManagement')}}?type=image"><i class="la la-image"></i><span class="menu-title" data-i18n="nav.dash.main">{{__('general.imageManagement')}}</span></a>
            </li>  
            <li class=" nav-item">
                <a href="index.html"><i class="la la-home"></i><span class="menu-title" data-i18n="nav.dash.main">{{__('general.management')}}</span><span class="badge badge badge-info badge-pill float-right mr-2">3</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="{{route('getListCateAdmin')}}">{{__('general.category')}}</a>
                    </li>
                </ul>
            </li>   
        </ul>
    </div>
</div>