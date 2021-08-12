<!doctype html>
<html lang="en">

<head>
    @include('admin.share.header')
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        @include('admin.share.title')
        <div class="app-main">
            @include('admin.share.leftmenu')
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="app-page-title">

                        @yield('title')
                    </div>
                    @yield('content')
                </div>
            </div>
        </div>
        @include('admin.share.footer')
    </div>
</body>

</html>
