<!DOCTYPE html>
<html lang="en">
<head>
    @include('clientnew.head-css')
</head>
<body class="catalog-product-view catalog-view_op1">

    <div class="wrapper">

        <!-- alert banner top -->
        <div role="alert" class="qc-top-site qc-top-site1 alert  fade in" style="background-image: url(client/images/media/index1/bg-qc-top.jpg);">
            <div class="container">
                <button class="close" type="button"><span aria-hidden="true">×</span></button>
                <div class="description">
                    <span class="title">Special Offer!</span>
                    <span class="subtitle">Rewarding all customers with a 15% discount. </span>
                    <span class="des">This offer is available from 9th December to 19th December 2015.</span>

                </div>
            </div>
        </div><!-- alert banner top -->

        @include('clientnew.header')

        @yield('content')

        @include('clientnew.footer')

        <!--back-to-top  -->
        <a href="#" class="back-to-top">
            <i aria-hidden="true" class="fa fa-angle-up"></i>
        </a>

    </div>

    @include('clientnew.foot-js')
    @yield('js')
</body>
</html>
