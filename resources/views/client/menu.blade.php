<div class="block-nav-categori">

    <div class="block-title">
        <span>Categories</span>
    </div>

    <div class="block-content">
        <ul class="ui-categori">
            @foreach ($menuLeft as $value)
            <li class="parent">
                <a href="">
                    <span class="icon"><img src="/client/images/icon/index1/nav-cat1.png" alt="nav-cat"></span>
                    {{ $value->tenLoaiSanPham }}
                </a>
            </li>
            @endforeach
        </ul>

        <div class="view-all-categori">
            <a  class="open-cate btn-view-all">All Categories</a>
        </div>
    </div>

</div>
