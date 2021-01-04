<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                <li class="app-sidebar__heading">Dashboards</li>
                <li>
                    <a href="{{ route('admin.index') }}" class="mm-active">
                        <i class="metismenu-icon pe-7s-graph1"></i>
                        Dashboard
                    </a>
                </li>
                <li class="app-sidebar__heading">Quản lý sản phẩm</li>
                <li>
                    <a href="{{ route('admin.product.list') }}">
                        <i class="metismenu-icon pe-7s-box2"></i>
                        Danh sách sản phẩm
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.product.list') }}">
                        <i class="metismenu-icon pe-7s-plus"></i>
                        Thêm sản phẩm mới
                    </a>
                </li>
                <li class="app-sidebar__heading">Quản lý đơn hàng</li>
                <li>
                    <a href=""> <i class="metismenu-icon pe-7s-cart"> </i>Đơn hàng</a>
                </li>
            </ul>
        </div>
    </div>
</div>
