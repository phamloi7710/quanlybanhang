<div class="main-menu menu-fixed menu-light menu-accordion menu-bordered menu-shadow"
            data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="@if(getUrl() == route('getFileManagement', ['type'=>'image'])) active @endif">
                <a href="{{route('getFileManagement')}}?type=image"><i class="la la-image"></i><span class="menu-title" data-i18n="nav.dash.main">{{__('general.imageManagement')}}</span></a>
            </li>  
            <li class=" nav-item">
                <a href="javascript:;"><i class="la la-hand-o-right"></i><span class="menu-title" data-i18n="nav.dash.main">{{__('general.productManagement')}}</span></a>
                <ul class="menu-content">
                    <li class="@if(getUrl() == route('getListCateAdmin')) active @endif"><a class="menu-item" href="{{route('getListCateAdmin')}}">{{__('general.category')}}</a>
                    </li>
                    <li class="@if(getUrl() == route('getListProductsAdmin')) active @endif"><a class="menu-item" href="{{route('getListProductsAdmin')}}">{{__('general.product')}}</a>
                    </li>
                    <li class="@if(getUrl() == route('getHotDealAdmin')) active @endif"><a class="menu-item" href="{{route('getHotDealAdmin')}}">{{__('general.hotDeal')}}</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item">
                <a href="javascript:;"><i class="la la-cogs"></i><span class="menu-title" data-i18n="nav.dash.main">{{__('general.systemManagement')}}</span></a>
                <ul class="menu-content">
                    <li class=""><a href="{{route('getActivityLogs')}}"><span class="menu-title" data-i18n="nav.menu_levels.main">{{__('general.activityHistory')}}</span></a>
                    </li>
                    <li class="@if(getUrl() == route('getListLanguages')) active @endif"><a class="menu-item" href="{{route('getListLanguages')}}">{{__('general.language')}}</a>
                    </li>
                    <li class="@if(getUrl() == route('getWebInfo')) active @endif"><a class="menu-item" href="{{route('getWebInfo')}}">{{__('general.basicInformation')}}</a>
                    </li>
                    <li class="@if(getUrl() == route('getEmailConfig')) active @endif"><a class="menu-item" href="{{route('getEmailConfig')}}">{{__('general.emailConfig')}}</a>
                    </li>
                    <li class="@if(getUrl() == route('getMetaSEO')) active @endif"><a class="menu-item" href="{{route('getMetaSEO')}}">{{__('general.metaSeo')}}</a>
                    </li>
                    
                    <li><a class="menu-item" href="#">{{__('general.emailTemplate')}}</a>
                    </li>
                </ul>
            </li> 
            <li class=" nav-item">
                <a href="javascript:;"><i class="la la-newspaper-o"></i><span class="menu-title" data-i18n="nav.dash.main">{{__('general.pageSettings')}}</span></a>
                <ul class="menu-content">
                    <li class="@if(getUrl() == route('getIntroduceAdmin')) active @endif"><a class="menu-item" href="{{route('getIntroduceAdmin')}}">{{__('general.introducePage')}}</a>
                    </li>
                </ul>
            </li> 
            <li class="@if(getUrl() == route('getContactAdmin')) active @endif">
                <a href="{{route('getContactAdmin')}}"><i class="la la-user-plus"></i><span class="menu-title" data-i18n="nav.dash.main">{{__('general.newContact')}}</span></a>
            </li> 
            <li class="@if(getUrl() == route('getListUsersAdmin')) active @endif">
                <a href="{{route('getListUsersAdmin')}}"><i class="la la-users"></i><span class="menu-title" data-i18n="nav.dash.main">{{__('general.account')}}</span></a>
            </li>
            <li class=" nav-item">
                <a href="javascript:;"><i class="la la-newspaper-o"></i><span class="menu-title" data-i18n="nav.menu_levels.main">{{__('general.news')}}</span></a>
                <ul class="menu-content">
                    <li>
                        <a class="menu-item" href="javascript:;" data-i18n="nav.menu_levels.second_level_child.main">{{__('general.newsCategory')}}</a>
                        <ul class="menu-content">
                            <li class="@if(getUrl() == route('getListNewsCategoriesAdmin')) active @endif"><a class="menu-item" href="{{route('getListNewsCategoriesAdmin')}}" data-i18n="nav.menu_levels.second_level_child.third_level">{{__('general.list')}}</a>
                            </li>
                            <li class="@if(getUrl() == route('getAddNewsCategoryAdmin')) active @endif"><a class="menu-item" href="{{route('getAddNewsCategoryAdmin')}}" data-i18n="nav.menu_levels.second_level_child.third_level">{{__('general.addNew')}}</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="menu-item" href="javascript:;" data-i18n="nav.menu_levels.second_level_child.main">{{__('general.news')}}</a>
                        <ul class="menu-content">
                            <li class="@if(getUrl() == route('getListNewsAdmin')) active @endif"><a class="menu-item" href="{{route('getListNewsAdmin')}}" data-i18n="nav.menu_levels.second_level_child.third_level">{{__('general.list')}}</a>
                            </li>
                            <li class="@if(getUrl() == route('getAddNewsAdmin')) active @endif"><a class="menu-item" href="{{route('getAddNewsAdmin')}}" data-i18n="nav.menu_levels.second_level_child.third_level">{{__('general.addNew')}}</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class=" nav-item">
                <a href="javascript:;"><i class="la la-image"></i><span class="menu-title" data-i18n="nav.menu_levels.main">{{__('general.bannerManager')}}</span></a>
                <ul class="menu-content">
                    <li>
                        <a class="menu-item" href="">{{__('general.bannerTop')}}</a>
                    </li>
                    <li>
                        <a class="menu-item" href="">{{__('general.bannerIndex')}}</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>