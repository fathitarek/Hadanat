<ul class="page-sidebar-menu @if(getUserSystem('backend_sidebar_menu_style')=='light') page-sidebar-menu-light @endif  page-header-fixed @if(Request::path()=='admin/notifications') page-sidebar-menu-closed @endif" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
    <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
    <li class="sidebar-toggler-wrapper hide">
        <div class="sidebar-toggler">
            <span></span>
        </div>
    </li>
    <!-- END SIDEBAR TOGGLER BUTTON -->
    <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
    <li class="sidebar-search-wrapper">
        <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
        <!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
        <!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
        <!--<form class="sidebar-search  " action="page_general_search_3.html" method="POST">
            <a href="javascript:;" class="remove">
                <i class="icon-close"></i>
            </a>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <a href="javascript:;" class="btn submit">
                        <i class="icon-magnifier"></i>
                    </a>
                </span>
            </div>
        </form>-->
        <!-- END RESPONSIVE QUICK SEARCH FORM -->
    </li>
    <li class="nav-item  @if(Request::path()=='admin') start active open @endif">
        <a href="{{ URL('admin') }}" class="nav-link nav-toggle">
            <i class="icon-home"></i>
            <span class="title">{{ Lang::get('main.dashboard') }}</span>
            <span class="selected"></span>
        </a>
    </li>
    @if(PerUser('profiles'))
        <li class="nav-item  @if(Request::path()=='admin/profiles') start active open @endif">
            <a href="{{ URL('admin/profiles') }}" class="nav-link ">
                <i class="fa fa-users"></i>
                <span class="title">{{ Lang::get('main.profiles') }}</span>
            </a>
        </li>
    @endif
    @if(PerUser('users'))
        <li class="nav-item  @if(Request::path()=='admin/users') start active open @endif">
            <a href="{{ URL('admin/users') }}" class="nav-link ">
                <i class="fa fa-users"></i>
                <span class="title">{{ Lang::get('main.users') }}</span>
            </a>
        </li>
    @endif
     @if(PerUser('categories'))
        <li class="nav-item  @if(Request::path()=='admin/categories') start active open @endif">
            <a href="{{ URL('admin/categories') }}" class="nav-link ">
                <i class="fa fa-users"></i>
                <span class="title">{{ Lang::get('main.categories') }}</span>
            </a>
        </li>
    @endif
    @if(PerUser('categories'))
        <li class="nav-item  @if(Request::path()=='admin/products') start active open @endif">
            <a href="{{ URL('admin/products') }}" class="nav-link ">
                <i class="fa fa-users"></i>
                <span class="title">{{ Lang::get('main.products') }}</span>
            </a>
        </li>
    @endif
    
    <li class="nav-item">
        <a href="javascript:;" class="nav-link nav-toggle">
            <i class="fa fa-wrench"></i>
            <span class="title">{{ Lang::get('main.settings') }}</span>
            <span class="arrow open"></span>
        </a>
        <ul class="sub-menu" >
            <li class="nav-item  ">
                <a href="{{ URL('admin/system') }}" class="nav-link ">
                    <i class="icon-settings"></i>
                    <span class="title">{{ Lang::get('main.system') }}</span>
                </a>
            </li>
        </ul>
    </li>
</ul>