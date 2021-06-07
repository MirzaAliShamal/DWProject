<nav class="header-navbar navbar-expand-lg navbar navbar-with-menu navbar-fixed navbar-shadow navbar-brand-center">
    <div class="navbar-header d-xl-block d-none">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item">
                <a class="navbar-brand" href="{{ route('admin.dashboard') }}">
                    <div class="brand-logo"></div>
                </a>
            </li>
        </ul>
    </div>
    <div class="navbar-wrapper">
        <div class="navbar-container content">
            <div class="navbar-collapse" id="navbar-mobile">
                <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                    <ul class="nav navbar-nav">
                        <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ficon feather icon-menu"></i></a></li>
                    </ul>
                </div>
                <ul class="nav navbar-nav float-right">
                    <li class="dropdown dropdown-user nav-item">
                        <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                            <div class="user-nav d-sm-flex d-none">
                                <span class="user-name text-bold-600">John Doe</span>
                                <span class="user-status">Available</span>
                            </div>
                            <span><img class="round" src="{{ asset('app-assets/images/portrait/small/avatar-s-11.jpg') }}" alt="avatar" height="40" width="40"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="page-user-profile.html"><i class="feather icon-user"></i> Edit Profile</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:;" onclick="document.getElementById('logout-form').submit();"><i class="feather icon-power"></i> Logout</a>
                            <form action="{{ route('logout') }}" method="POST" id="logout-form">@csrf</form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<div class="horizontal-menu-wrapper">
    <div class="header-navbar navbar-expand-sm navbar navbar-horizontal floating-nav navbar-light navbar-without-dd-arrow navbar-shadow menu-border" role="navigation" data-menu="menu-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto">
                    <a class="navbar-brand" href="{{ route('admin.dashboard') }}">
                        <div class="brand-logo"></div>
                        <h2 class="brand-text mb-0">DW Project</h2>
                    </a>
                </li>
                <li class="nav-item nav-toggle">
                    <a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
                        <i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i>
                        <i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Horizontal menu content-->
        <div class="navbar-container main-menu-content" data-menu="menu-container">
            <!-- include ../../../includes/mixins-->
            <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="nav-item @routeis('admin.dashboard') active @endrouteis">
                    <a class="nav-link" href="{{ route('admin.dashboard') }}">
                        <i class="feather icon-home"></i><span data-i18n="Dashboard">Dashboard</span>
                    </a>
                </li>
                <li class="dropdown nav-item @routeis('admin.producer.*') active @endrouteis" data-menu="dropdown">
                    <a class="dropdown-toggle nav-link" href="{{ route('admin.producer.list') }}" data-toggle="dropdown">
                        <i class="feather icon-package"></i><span data-i18n="Producers">Producers</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li data-menu="Producer List">
                            <a class="dropdown-item" href="{{ route('admin.producer.list') }}" data-toggle="dropdown" data-i18n="List">
                                <i class="feather icon-circle"></i>List
                            </a>
                        </li>
                        <li data-menu="Producer Add">
                            <a class="dropdown-item" href="{{ route('admin.producer.add') }}" data-toggle="dropdown" data-i18n="Add">
                                <i class="feather icon-circle"></i>Add New
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
