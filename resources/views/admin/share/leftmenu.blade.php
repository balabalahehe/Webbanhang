<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                    data-class="closed-sidebar">
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
            <button type="button"
                class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                <li class="app-sidebar__heading">Loại Sản Phẩm</li>
                <li>
                    <a href="{{ Route('indexLoaiSanPham') }}">
                        <i class="metismenu-icon pe-7s-bookmarks"></i>
                        Quản lý loại sản phẩm
                    </a>
                </li>
                <li class="app-sidebar__heading">Nhà Cung Cấp</li>
                <li>
                    <a href="{{ Route('indexNhaCungCap') }}">
                        <i class="metismenu-icon pe-7s-home"></i>
                        Quản lý nhà cung cấp
                    </a>
                </li>
                <li class="app-sidebar__heading">Sản Phẩm</li>
                <li>
                    <a href="{{ Route('indexSanPham') }}">
                        <i class="metismenu-icon pe-7s-keypad"></i>
                        Danh sách
                    </a>
                    <a href="{{ Route('viewThemSanPham') }}">
                        <i class="metismenu-icon pe-7s-plus"></i>
                        Thêm mới
                    </a>
                </li>
                <li class="app-sidebar__heading">Quản Lý Kho</li>
                <li>
                    <a href="{{ Route('nhapKhoSanPham') }}">
                        <i class="metismenu-icon pe-7s-cloud-download"></i>
                        Nhập Kho Sản Phẩm
                    </a>
                    <a href="{{ Route('danhSachNhapKho') }}">
                        <i class="metismenu-icon pe-7s-server"></i>
                        Danh Sách Nhập Kho
                    </a>
                </li>
                <li>
                    <a href="/admin/logout">
                        <i class="metismenu-icon pe-7s-rocket"></i>
                        Đăng xuất
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
