<!DOCTYPE html>
<html lang="en">
<head>
    <title>home page 1</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="/client/css/style.css">

</head>
<body class="cms-index-index index-opt-1">

    <div class="wrapper">
       @include('client.banner-top')
       @include('client.header')
        <!-- MAIN -->
        <main class="site-main">
            <div class="block-section-top block-section-top1">
                <div class="container">
                    <div class="box-section-top">

                        <!-- categori -->
                        @include('client.menu')
                        <!-- categori -->

                        {{-- @include('client.slide') --}}

                    </div>
                </div>
            </div>
            @yield('san-pham')
            <div class="clearfix" style="background-color: #eeeeee;margin-bottom: 40px; padding-top:30px;">

                @yield('content-loai-san-pham')

                <!-- Banner -->
                <div class="block-banner-opt1 effect-banner3">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <a href="" class="box-img"><img src="/client/images/media/index1/banner7-1.jpg" alt="banner"></a>
                            </div>
                            <div class="col-sm-6">
                                <a href="" class="box-img"><img src="/client/images/media/index1/banner7-2.jpg" alt="banner"></a>
                            </div>
                        </div>
                    </div>
                </div><!-- Banner -->

            </div>

            <!-- block  showcase-->
            <div class="block-showcase block-showcase-opt1 block-brand-tabs">
                <div class="container">

                    <div class="block-title">
                        <span class="title">brand showcase</span>
                    </div>

                    <div class="block-content" >

                        <ul class="nav-brand owl-carousel"
                            data-nav="true"
                            data-loop="true"
                            data-dots="false"
                            data-margin="1"
                            data-responsive='{
                            "0":{"items":3},
                            "380":{"items":4},
                            "480":{"items":5},
                            "640":{"items":7},
                            "992":{"items":8}
                        }'>
                            <li  class="active" data-tab="brand1-1">
                                <img src="/client/images/media/index1/brand-nav1.png" alt="img">
                            </li>
                            <li   data-tab="brand1-2">
                                <img src="/client/images/media/index1/brand-nav2.png" alt="img">
                            </li>
                            <li   data-tab="brand1-3">
                                <img src="/client/images/media/index1/brand-nav3.png" alt="img">
                            </li>
                            <li   data-tab="brand1-4">
                                <img src="/client/images/media/index1/brand-nav4.png" alt="img">
                            </li>
                            <li  data-tab="brand1-5">
                                <img src="/client/images/media/index1/brand-nav5.png" alt="img">
                            </li>
                            <li   data-tab="brand1-6">
                                <img src="/client/images/media/index1/brand-nav6.png" alt="img">
                            </li>
                            <li   data-tab="brand1-7">
                                <img src="/client/images/media/index1/brand-nav7.png" alt="img">
                            </li>
                            <li   data-tab="brand1-8">
                                <img src="/client/images/media/index1/brand-nav8.png" alt="img">
                            </li>
                            <li data-tab="brand1-9">
                                <img src="/client/images/media/index1/brand-nav1.png" alt="img">
                            </li>
                        </ul>
                        <div class="tab-content">

                            <div class="tab-pane active  " role="tabpanel" id="brand1-1">
                                <div class="row">
                                    <div class="col-md-4">

                                        <div class="col-title">
                                            <img src="/client/images/media/index1/logo-showcase.jpg" alt="logo" class="logo-showcase">
                                            <div class="des">
                                                Whatever the occasion, complete your outfit with one of Hermes Fashion's stylish women's bags. Discover our spring collection.
                                            </div>
                                            <div class="actions">
                                                <a href="" class="btn btn-default">shop this brand <i aria-hidden="true" class="fa fa-caret-right"></i></a>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-8">

                                        <div class="col-product">
                                            <div class="owl-carousel"
                                                data-nav="true"
                                                data-dots="false"
                                                data-margin="0"
                                                data-responsive='{
                                                "0":{"items":1},
                                                "380":{"items":1},
                                                "480":{"items":1},
                                                "640":{"items":2},
                                                "992":{"items":2}
                                            }'>
                                                <div class="item">
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href=""><img alt="product name" src="/client/images/media/index1/showcase1.jpg" ></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <span class="price">$45.00</span>
                                                                    </div>
                                                                    <div class="product-reviews-summary">
                                                                        <div class="rating-summary">
                                                                            <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href=""><img alt="product name" src="/client/images/media/index1/showcase2.jpg" ></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <span class="price">$45.00</span>
                                                                    </div>
                                                                    <div class="product-reviews-summary">
                                                                        <div class="rating-summary">
                                                                            <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href=""><img alt="product name" src="/client/images/media/index1/showcase3.jpg" ></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <span class="price">$45.00</span>
                                                                        <span class="old-price">$52.00</span>
                                                                    </div>
                                                                    <div class="product-reviews-summary">
                                                                        <div class="rating-summary">
                                                                            <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href=""><img alt="product name" src="/client/images/media/index1/showcase4.jpg"></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <span class="price">$45.00</span>
                                                                    </div>
                                                                    <div class="product-reviews-summary">
                                                                        <div class="rating-summary">
                                                                            <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href=""><img alt="product name" src="/client/images/media/index1/showcase3.jpg" ></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <span class="price">$45.00</span>
                                                                        <span class="old-price">$52.00</span>
                                                                    </div>
                                                                    <div class="product-reviews-summary">
                                                                        <div class="rating-summary">
                                                                            <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href=""><img alt="product name" src="/client/images/media/index1/showcase4.jpg"></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <span class="price">$45.00</span>
                                                                    </div>
                                                                    <div class="product-reviews-summary">
                                                                        <div class="rating-summary">
                                                                            <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane " role="tabpanel" id="brand1-2">
                                <div class="row">
                                    <div class="col-md-4">

                                        <div class="col-title">
                                            <img src="/client/images/media/index1/logo-showcase.jpg" alt="logo" class="logo-showcase">
                                            <div class="des">
                                                Whatever the occasion, complete your outfit with one of Hermes Fashion's stylish women's bags. Discover our spring collection.
                                            </div>
                                            <div class="actions">
                                                <a href="" class="btn btn-default">shop this brand <i aria-hidden="true" class="fa fa-caret-right"></i></a>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-8">

                                        <div class="col-product">
                                            <div class="owl-carousel"
                                                data-nav="true"
                                                data-dots="false"
                                                data-margin="0"
                                                data-responsive='{
                                                "0":{"items":1},
                                                "380":{"items":1},
                                                "480":{"items":1},
                                                "640":{"items":2},
                                                "992":{"items":2}
                                            }'>
                                                <div class="item">
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href=""><img alt="product name" src="/client/images/media/index1/showcase1.jpg" ></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <span class="price">$45.00</span>
                                                                    </div>
                                                                    <div class="product-reviews-summary">
                                                                        <div class="rating-summary">
                                                                            <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href=""><img alt="product name" src="/client/images/media/index1/showcase2.jpg" ></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <span class="price">$45.00</span>
                                                                    </div>
                                                                    <div class="product-reviews-summary">
                                                                        <div class="rating-summary">
                                                                            <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href=""><img alt="product name" src="/client/images/media/index1/showcase3.jpg" ></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <span class="price">$45.00</span>
                                                                        <span class="old-price">$52.00</span>
                                                                    </div>
                                                                    <div class="product-reviews-summary">
                                                                        <div class="rating-summary">
                                                                            <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href=""><img alt="product name" src="/client/images/media/index1/showcase4.jpg"></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <span class="price">$45.00</span>
                                                                    </div>
                                                                    <div class="product-reviews-summary">
                                                                        <div class="rating-summary">
                                                                            <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane  " role="tabpanel" id="brand1-3">
                                <div class="row">
                                    <div class="col-md-4">

                                        <div class="col-title">
                                            <img src="/client/images/media/index1/logo-showcase.jpg" alt="logo" class="logo-showcase">
                                            <div class="des">
                                                Whatever the occasion, complete your outfit with one of Hermes Fashion's stylish women's bags. Discover our spring collection.
                                            </div>
                                            <div class="actions">
                                                <a href="" class="btn btn-default">shop this brand <i aria-hidden="true" class="fa fa-caret-right"></i></a>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-8">

                                        <div class="col-product">
                                            <div class="owl-carousel"
                                                data-nav="true"
                                                data-dots="false"
                                                data-margin="0"
                                                data-responsive='{
                                                "0":{"items":1},
                                                "380":{"items":1},
                                                "480":{"items":1},
                                                "640":{"items":2},
                                                "992":{"items":2}
                                            }'>
                                                <div class="item">
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href=""><img alt="product name" src="/client/images/media/index1/showcase1.jpg" ></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <span class="price">$45.00</span>
                                                                    </div>
                                                                    <div class="product-reviews-summary">
                                                                        <div class="rating-summary">
                                                                            <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href=""><img alt="product name" src="/client/images/media/index1/showcase2.jpg" ></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <span class="price">$45.00</span>
                                                                    </div>
                                                                    <div class="product-reviews-summary">
                                                                        <div class="rating-summary">
                                                                            <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href=""><img alt="product name" src="/client/images/media/index1/showcase3.jpg" ></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <span class="price">$45.00</span>
                                                                        <span class="old-price">$52.00</span>
                                                                    </div>
                                                                    <div class="product-reviews-summary">
                                                                        <div class="rating-summary">
                                                                            <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href=""><img alt="product name" src="/client/images/media/index1/showcase4.jpg"></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <span class="price">$45.00</span>
                                                                    </div>
                                                                    <div class="product-reviews-summary">
                                                                        <div class="rating-summary">
                                                                            <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane  " role="tabpanel" id="brand1-4">
                                <div class="row">
                                    <div class="col-md-4">

                                        <div class="col-title">
                                            <img src="/client/images/media/index1/logo-showcase.jpg" alt="logo" class="logo-showcase">
                                            <div class="des">
                                                Whatever the occasion, complete your outfit with one of Hermes Fashion's stylish women's bags. Discover our spring collection.
                                            </div>
                                            <div class="actions">
                                                <a href="" class="btn btn-default">shop this brand <i aria-hidden="true" class="fa fa-caret-right"></i></a>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-8">

                                        <div class="col-product">
                                            <div class="owl-carousel"
                                                data-nav="true"
                                                data-dots="false"
                                                data-margin="0"
                                                data-responsive='{
                                                "0":{"items":1},
                                                "380":{"items":1},
                                                "480":{"items":1},
                                                "640":{"items":2},
                                                "992":{"items":2}
                                            }'>
                                                <div class="item">
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href=""><img alt="product name" src="/client/images/media/index1/showcase1.jpg" ></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <span class="price">$45.00</span>
                                                                    </div>
                                                                    <div class="product-reviews-summary">
                                                                        <div class="rating-summary">
                                                                            <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href=""><img alt="product name" src="/client/images/media/index1/showcase2.jpg" ></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <span class="price">$45.00</span>
                                                                    </div>
                                                                    <div class="product-reviews-summary">
                                                                        <div class="rating-summary">
                                                                            <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href=""><img alt="product name" src="/client/images/media/index1/showcase3.jpg" ></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <span class="price">$45.00</span>
                                                                        <span class="old-price">$52.00</span>
                                                                    </div>
                                                                    <div class="product-reviews-summary">
                                                                        <div class="rating-summary">
                                                                            <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href=""><img alt="product name" src="/client/images/media/index1/showcase4.jpg"></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <span class="price">$45.00</span>
                                                                    </div>
                                                                    <div class="product-reviews-summary">
                                                                        <div class="rating-summary">
                                                                            <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane  " role="tabpanel" id="brand1-5">
                                <div class="row">
                                    <div class="col-md-4">

                                        <div class="col-title">
                                            <img src="/client/images/media/index1/logo-showcase.jpg" alt="logo" class="logo-showcase">
                                            <div class="des">
                                                Whatever the occasion, complete your outfit with one of Hermes Fashion's stylish women's bags. Discover our spring collection.
                                            </div>
                                            <div class="actions">
                                                <a href="" class="btn btn-default">shop this brand <i aria-hidden="true" class="fa fa-caret-right"></i></a>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-8">

                                        <div class="col-product">
                                            <div class="owl-carousel"
                                                data-nav="true"
                                                data-dots="false"
                                                data-margin="0"
                                                data-responsive='{
                                                "0":{"items":1},
                                                "380":{"items":1},
                                                "480":{"items":1},
                                                "640":{"items":2},
                                                "992":{"items":2}
                                            }'>
                                                <div class="item">
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href=""><img alt="product name" src="/client/images/media/index1/showcase1.jpg" ></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <span class="price">$45.00</span>
                                                                    </div>
                                                                    <div class="product-reviews-summary">
                                                                        <div class="rating-summary">
                                                                            <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href=""><img alt="product name" src="/client/images/media/index1/showcase2.jpg" ></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <span class="price">$45.00</span>
                                                                    </div>
                                                                    <div class="product-reviews-summary">
                                                                        <div class="rating-summary">
                                                                            <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href=""><img alt="product name" src="/client/images/media/index1/showcase3.jpg" ></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <span class="price">$45.00</span>
                                                                        <span class="old-price">$52.00</span>
                                                                    </div>
                                                                    <div class="product-reviews-summary">
                                                                        <div class="rating-summary">
                                                                            <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href=""><img alt="product name" src="/client/images/media/index1/showcase4.jpg"></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <span class="price">$45.00</span>
                                                                    </div>
                                                                    <div class="product-reviews-summary">
                                                                        <div class="rating-summary">
                                                                            <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane  " role="tabpanel" id="brand1-6">
                                <div class="row">
                                    <div class="col-md-4">

                                        <div class="col-title">
                                            <img src="/client/images/media/index1/logo-showcase.jpg" alt="logo" class="logo-showcase">
                                            <div class="des">
                                                Whatever the occasion, complete your outfit with one of Hermes Fashion's stylish women's bags. Discover our spring collection.
                                            </div>
                                            <div class="actions">
                                                <a href="" class="btn btn-default">shop this brand <i aria-hidden="true" class="fa fa-caret-right"></i></a>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-8">

                                        <div class="col-product">
                                            <div class="owl-carousel"
                                                data-nav="true"
                                                data-dots="false"
                                                data-margin="0"
                                                data-responsive='{
                                                "0":{"items":1},
                                                "380":{"items":1},
                                                "480":{"items":1},
                                                "640":{"items":2},
                                                "992":{"items":2}
                                            }'>
                                                <div class="item">
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href=""><img alt="product name" src="/client/images/media/index1/showcase1.jpg" ></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <span class="price">$45.00</span>
                                                                    </div>
                                                                    <div class="product-reviews-summary">
                                                                        <div class="rating-summary">
                                                                            <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href=""><img alt="product name" src="/client/images/media/index1/showcase2.jpg" ></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <span class="price">$45.00</span>
                                                                    </div>
                                                                    <div class="product-reviews-summary">
                                                                        <div class="rating-summary">
                                                                            <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href=""><img alt="product name" src="/client/images/media/index1/showcase3.jpg" ></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <span class="price">$45.00</span>
                                                                        <span class="old-price">$52.00</span>
                                                                    </div>
                                                                    <div class="product-reviews-summary">
                                                                        <div class="rating-summary">
                                                                            <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href=""><img alt="product name" src="/client/images/media/index1/showcase4.jpg"></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <span class="price">$45.00</span>
                                                                    </div>
                                                                    <div class="product-reviews-summary">
                                                                        <div class="rating-summary">
                                                                            <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane  " role="tabpanel" id="brand1-7">
                                <div class="row">
                                    <div class="col-md-4">

                                        <div class="col-title">
                                            <img src="/client/images/media/index1/logo-showcase.jpg" alt="logo" class="logo-showcase">
                                            <div class="des">
                                                Whatever the occasion, complete your outfit with one of Hermes Fashion's stylish women's bags. Discover our spring collection.
                                            </div>
                                            <div class="actions">
                                                <a href="" class="btn btn-default">shop this brand <i aria-hidden="true" class="fa fa-caret-right"></i></a>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-8">

                                        <div class="col-product">
                                            <div class="owl-carousel"
                                                data-nav="true"
                                                data-dots="false"
                                                data-margin="0"
                                                data-responsive='{
                                                "0":{"items":1},
                                                "380":{"items":1},
                                                "480":{"items":1},
                                                "640":{"items":2},
                                                "992":{"items":2}
                                            }'>
                                                <div class="item">
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href=""><img alt="product name" src="/client/images/media/index1/showcase1.jpg" ></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <span class="price">$45.00</span>
                                                                    </div>
                                                                    <div class="product-reviews-summary">
                                                                        <div class="rating-summary">
                                                                            <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href=""><img alt="product name" src="/client/images/media/index1/showcase2.jpg" ></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <span class="price">$45.00</span>
                                                                    </div>
                                                                    <div class="product-reviews-summary">
                                                                        <div class="rating-summary">
                                                                            <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href=""><img alt="product name" src="/client/images/media/index1/showcase3.jpg" ></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <span class="price">$45.00</span>
                                                                        <span class="old-price">$52.00</span>
                                                                    </div>
                                                                    <div class="product-reviews-summary">
                                                                        <div class="rating-summary">
                                                                            <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href=""><img alt="product name" src="/client/images/media/index1/showcase4.jpg"></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <span class="price">$45.00</span>
                                                                    </div>
                                                                    <div class="product-reviews-summary">
                                                                        <div class="rating-summary">
                                                                            <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane  " role="tabpanel" id="brand1-8">
                                <div class="row">
                                    <div class="col-md-4">

                                        <div class="col-title">
                                            <img src="/client/images/media/index1/logo-showcase.jpg" alt="logo" class="logo-showcase">
                                            <div class="des">
                                                Whatever the occasion, complete your outfit with one of Hermes Fashion's stylish women's bags. Discover our spring collection.
                                            </div>
                                            <div class="actions">
                                                <a href="" class="btn btn-default">shop this brand <i aria-hidden="true" class="fa fa-caret-right"></i></a>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-8">

                                        <div class="col-product">
                                            <div class="owl-carousel"
                                                data-nav="true"
                                                data-dots="false"
                                                data-margin="0"
                                                data-responsive='{
                                                "0":{"items":1},
                                                "380":{"items":1},
                                                "480":{"items":1},
                                                "640":{"items":2},
                                                "992":{"items":2}
                                            }'>
                                                <div class="item">
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href=""><img alt="product name" src="/client/images/media/index1/showcase1.jpg" ></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <span class="price">$45.00</span>
                                                                    </div>
                                                                    <div class="product-reviews-summary">
                                                                        <div class="rating-summary">
                                                                            <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href=""><img alt="product name" src="/client/images/media/index1/showcase2.jpg" ></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <span class="price">$45.00</span>
                                                                    </div>
                                                                    <div class="product-reviews-summary">
                                                                        <div class="rating-summary">
                                                                            <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href=""><img alt="product name" src="/client/images/media/index1/showcase3.jpg" ></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <span class="price">$45.00</span>
                                                                        <span class="old-price">$52.00</span>
                                                                    </div>
                                                                    <div class="product-reviews-summary">
                                                                        <div class="rating-summary">
                                                                            <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href=""><img alt="product name" src="/client/images/media/index1/showcase4.jpg"></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <span class="price">$45.00</span>
                                                                    </div>
                                                                    <div class="product-reviews-summary">
                                                                        <div class="rating-summary">
                                                                            <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane  " role="tabpanel" id="brand1-9">
                                <div class="row">
                                    <div class="col-md-4">

                                        <div class="col-title">
                                            <img src="/client/images/media/index1/logo-showcase.jpg" alt="logo" class="logo-showcase">
                                            <div class="des">
                                                Whatever the occasion, complete your outfit with one of Hermes Fashion's stylish women's bags. Discover our spring collection.
                                            </div>
                                            <div class="actions">
                                                <a href="" class="btn btn-default">shop this brand <i aria-hidden="true" class="fa fa-caret-right"></i></a>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-8">

                                        <div class="col-product">
                                            <div class="owl-carousel"
                                                data-nav="true"
                                                data-dots="false"
                                                data-margin="0"
                                                data-responsive='{
                                                "0":{"items":1},
                                                "380":{"items":1},
                                                "480":{"items":1},
                                                "640":{"items":2},
                                                "992":{"items":2}
                                            }'>
                                                <div class="item">
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href=""><img alt="product name" src="/client/images/media/index1/showcase1.jpg" ></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <span class="price">$45.00</span>
                                                                    </div>
                                                                    <div class="product-reviews-summary">
                                                                        <div class="rating-summary">
                                                                            <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href=""><img alt="product name" src="/client/images/media/index1/showcase2.jpg" ></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <span class="price">$45.00</span>
                                                                    </div>
                                                                    <div class="product-reviews-summary">
                                                                        <div class="rating-summary">
                                                                            <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href=""><img alt="product name" src="/client/images/media/index1/showcase3.jpg" ></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <span class="price">$45.00</span>
                                                                        <span class="old-price">$52.00</span>
                                                                    </div>
                                                                    <div class="product-reviews-summary">
                                                                        <div class="rating-summary">
                                                                            <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item  product-item-opt-1 ">
                                                        <div class="product-item-info">
                                                            <div class="product-item-photo">
                                                                <a class="product-item-img" href=""><img alt="product name" src="/client/images/media/index1/showcase4.jpg"></a>
                                                            </div>
                                                            <div class="product-item-detail">
                                                                <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                                                                <div class="clearfix">
                                                                    <div class="product-item-price">
                                                                        <span class="price">$45.00</span>
                                                                    </div>
                                                                    <div class="product-reviews-summary">
                                                                        <div class="rating-summary">
                                                                            <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div><!-- block  showcase-->

            <!-- block  hot categories-->
            <div class="block-hot-categories-opt1">
                <div class="container">

                    <div class="block-title ">
                        <span class="title">Hot categories</span>
                    </div>

                    <div class="block-content">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="item">

                                    <div class="description" style="background-image: url(/client/images/media/index1/hot-categories1.png)">
                                        <div class="title"><span>Electronics</span></div>
                                        <a href="" class="btn">shop now</a>
                                    </div>
                                    <ul>
                                        <li><a href="">Batteries & Chargers</a></li>
                                        <li><a href="">Headphone, Headset</a></li>
                                        <li><a href="">Home Audio</a></li>
                                        <li><a href="">Mp3 Player Accessories</a></li>
                                    </ul>
                                </div>
                                <div class="item">
                                    <div class="description" style="background-image: url(/client/images/media/index1/hot-categories2.png)">
                                        <div class="title"><span>Jewelry &  <br>Watches</span></div>
                                        <a href="" class="btn">shop now</a>
                                    </div>
                                    <ul>
                                        <li><a href="">Men Watches</a></li>
                                        <li><a href="">Wedding Rings</a></li>
                                        <li><a href="">Earring</a></li>
                                        <li><a href="">Necklaces</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="item">
                                    <div class="description" style="background-image: url(/client/images/media/index1/hot-categories3.png)">
                                        <div class="title"><span>Sport &  <br>Outdoors</span></div>
                                        <a href="" class="btn">shop now</a>
                                    </div>
                                    <ul>
                                        <li><a href="">Golf Supplies</a></li>
                                        <li><a href="">Outdoor & Traveling Supplies</a></li>
                                        <li><a href="">Camping & Hiking</a></li>
                                        <li><a href="">Fishing</a></li>
                                    </ul>
                                </div>
                                <div class="item">
                                    <div class="description" style="background-image: url(/client/images/media/index1/hot-categories4.png)">
                                        <div class="title"><span>Digital</span></div>
                                        <a href="" class="btn">shop now</a>
                                    </div>
                                    <ul>
                                        <li><a href="">Accessories for iPhone</a></li>
                                        <li><a href="">Accessories for iPad</a></li>
                                        <li><a href="">Accessories for Tablet PC</a></li>
                                        <li><a href="">Tablet PC</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="item">
                                    <div class="description" style="background-image: url(/client/images/media/index1/hot-categories5.png)">
                                        <div class="title"><span>Fashion</span></div>
                                        <a href="" class="btn">shop now</a>
                                    </div>
                                    <ul>
                                        <li><a href="">Batteries & Chargers</a></li>
                                        <li><a href="">Headphone, Headset</a></li>
                                        <li><a href="">Home Audio</a></li>
                                        <li><a href="">Mp3 Player Accessories</a></li>
                                    </ul>
                                </div>
                                <div class="item">
                                    <div class="description" style="background-image: url(/client/images/media/index1/hot-categories6.png)">
                                        <div class="title"><span>Furniture</span></div>
                                        <a href="" class="btn">shop now</a>
                                    </div>
                                    <ul>
                                        <li><a href="">Batteries & Chargers </a></li>
                                        <li><a href="">Headphone, Headset</a></li>
                                        <li><a href="">Home Audio</a></li>
                                        <li><a href="">Mp3 Player Accessories</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="item">
                                    <div class="description" style="background-image: url(/client/images/media/index1/hot-categories7.png)">
                                        <div class="title"><span>Health & <br>Beauty</span></div>
                                        <a href="" class="btn">shop now</a>
                                    </div>
                                    <ul>
                                        <li><a href="">Bath & Body</a></li>
                                        <li><a href="">Shaving & Hair Removal</a></li>
                                        <li><a href="">Fragrances</a></li>
                                        <li><a href="">Salon & Spa Equipment</a></li>
                                    </ul>
                                </div>
                                <div class="item">
                                    <div class="description" style="background-image: url(/client/images/media/index1/hot-categories8.png)">
                                        <div class="title"><span>Toys &   <br>Hobbies</span></div>
                                        <a href="" class="btn">shop now</a>
                                    </div>
                                    <ul>
                                        <li><a href="">Walkera</a></li>
                                        <li><a href="">Fpv System & Parts</a></li>
                                        <li><a href="">RC Cars & Parts</a></li>
                                        <li><a href="">Helicopters & Part</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div><!--block  hot categories-->

        </main><!-- end MAIN -->

        <!-- FOOTER -->
        <footer class="site-footer footer-opt-1">

            <div class="container">
                <div class="footer-column">

                    <div class="row">
                        <div class="col-md-3 col-lg-3 col-xs-6 col">
                            <strong class="logo-footer">
                                <a href=""><img src="/client/images/media/index1/logo-footer.png" alt="logo"></a>
                            </strong>

                            <table class="address">
                                <tr>
                                    <td><b>Address:  </b></td>
                                    <td>Example Street 68, Mahattan,New York, USA</td>
                                </tr>
                                <tr>
                                    <td><b>Phone: </b></td>
                                    <td>+ 65 123 456 789</td>
                                </tr>
                                <tr>
                                    <td><b>Email:</b></td>
                                    <td>Support@ovicsoft.com</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-2 col-lg-2 col-xs-6 col">
                            <div class="links">
                            <h3 class="title">Company</h3>
                            <ul>
                                <li><a href="">About Us</a></li>
                                <li><a href="">Testimonials</a></li>
                                <li><a href="">Affiliate Program</a></li>
                                <li><a href="">Terms & Conditions</a></li>
                                <li><a href="">Terms & Conditions</a></li>
                            </ul>
                            </div>
                        </div>
                        <div class="col-md-2 col-lg-2 col-xs-6 col">
                            <div class="links">
                            <h3 class="title">My Account</h3>
                            <ul>
                                <li><a href="">My Order</a></li>
                                <li><a href="">My Wishlist</a></li>
                                <li><a href="">My Credit Slip</a></li>
                                <li><a href="">My Addresses</a></li>
                                <li><a href="">My Account</a></li>
                            </ul>
                            </div>
                        </div>
                        <div class="col-md-2 col-lg-2 col-xs-6 col">
                            <div class="links">
                            <h3 class="title">Support</h3>
                            <ul>
                                <li><a href="">New User Guide</a></li>
                                <li><a href="">Help Center</a></li>
                                <li><a href="">Refund Policy</a></li>
                                <li><a href="">Report Spam</a></li>
                                <li><a href="">FAQ</a></li>
                            </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 col-xs-6 col">
                            <div class="block-newletter">
                                <div class="block-title">NEWSLETTER</div>
                                <div class="block-content">
                                    <form>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Your Email Address">
                                        <span class="input-group-btn">
                                            <button class="btn btn-subcribe" type="button"><span>ok</span></button>
                                        </span>
                                    </div>
                                </form>
                                </div>
                            </div>
                            <div class="block-social">
                                <div class="block-title">Let???s Socialize </div>
                                <div class="block-content">
                                    <a href="" class="sh-facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="" class="sh-pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                                    <a href="" class="sh-vk"><i class="fa fa-vk" aria-hidden="true"></i></a>
                                    <a href="" class="sh-twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="" class="sh-google"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="payment-methods">
                    <div class="block-title">
                        Accepted Payment Methods
                    </div>
                    <div class="block-content">
                        <img alt="payment" src="/client/images/media/index1/payment1.png">
                        <img alt="payment" src="/client/images/media/index1/payment2.png">
                        <img alt="payment" src="/client/images/media/index1/payment3.png">
                        <img alt="payment" src="/client/images/media/index1/payment4.png">
                        <img alt="payment" src="/client/images/media/index1/payment5.png">
                        <img alt="payment" src="/client/images/media/index1/payment6.png">
                        <img alt="payment" src="/client/images/media/index1/payment7.png">
                        <img alt="payment" src="/client/images/media/index1/payment8.png">
                        <img alt="payment" src="/client/images/media/index1/payment9.png">
                        <img alt="payment" src="/client/images/media/index1/payment10.png">
                    </div>
                </div>

                <div class="footer-links">


                    <ul class="links">
                        <li><strong class="title">HOT SEARCHED KEYWORDS:</strong></li>
                        <li><a href="">Xiaomi Mi3 </a></li>
                        <li><a href="">Digiflip Pro XT 712 Tablet</a></li>
                        <li><a href="">Mi 3 Phones  </a></li>
                        <li><a href="">Iphone 6 Plus  </a></li>
                        <li><a href="">Women's Messenger Bags</a></li>
                        <li><a href="">Wallets   </a></li>
                        <li><a href="">Women's Clutches   </a></li>
                        <li><a href="">Backpacks Totes</a></li>
                    </ul>



                    <ul class="links">
                        <li><strong class="title">tvs: </strong></li>
                        <li><a href="">Sony TV  </a></li>
                        <li><a href=""> Samsung TV  </a></li>
                        <li><a href="">LG TV  </a></li>
                        <li><a href="">Panasonic TV  </a></li>
                        <li><a href=""> Onida TV  </a></li>
                        <li><a href=""> Toshiba TV  </a></li>
                        <li><a href=""> Philips TV</a></li>
                        <li><a href="">Micromax TV</a></li>
                        <li><a href="">LED TV </a></li>
                        <li><a href="">  LCD TV  </a></li>
                        <li><a href="">Plasma TV </a></li>
                        <li><a href="">3D TV    </a></li>
                        <li><a href="">Smart TV </a></li>
                    </ul>



                    <ul  class="links">
                        <li><strong class="title">MOBILES: </strong></li>
                        <li><a href="">Moto E </a></li>
                        <li><a href=""> Samsung Mobile </a></li>
                        <li><a href="">Micromax Mobile</a></li>
                        <li><a href="">Nokia Mobile </a></li>
                        <li><a href=""> HTC Mobile </a></li>
                        <li><a href="">Sony Mobile  </a></li>
                        <li><a href=""> Apple Mobile  </a></li>
                        <li><a href=""> LG Mobile  </a></li>
                        <li><a href="">Karbonn Mobile</a></li>
                    </ul>


                    <ul class="links">
                        <li><strong class="title">LAPTOPS:</strong></li>
                        <li><a href="">Apple Laptop  </a></li>
                        <li><a href="">Acer Laptop </a></li>
                        <li><a href="">Samsung Laptop</a></li>
                        <li><a href="">Lenovo Laptop </a></li>
                        <li><a href="">Sony Laptop</a></li>
                        <li><a href="">Dell Laptop</a></li>
                        <li><a href="">Asus Laptop </a></li>
                        <li><a href="">  Toshiba Laptop</a></li>
                        <li><a href="">LG Laptop </a></li>
                        <li><a href="">HP Laptop</a></li>
                        <li><a href="">Notebook</a></li>
                    </ul>



                    <ul class="links">
                        <li><strong class="title">WATCHES:</strong></li>
                        <li><a href="">FCUK Watches</a></li>
                        <li><a href="">Titan Watches  </a></li>
                        <li><a href="">  Casio Watches </a></li>
                        <li><a href="">  Fastrack Watches </a></li>
                        <li><a href="">Timex Watches </a></li>
                        <li><a href="">Fossil Watches</a></li>
                        <li><a href="">Diesel Watches  </a></li>
                        <li><a href=""> Luxury Watches</a></li>
                    </ul>


                    <ul class="links">
                        <li><strong class="title">FOOTWEAR: </strong></li>
                        <li><a href="">Shoes  </a></li>
                        <li><a href="">Casual Shoes </a></li>
                        <li><a href=""> Sports Shoes </a></li>
                        <li><a href="">Formal Shoes </a></li>
                        <li><a href=""> Adidas Shoes  </a></li>
                        <li><a href="">Gas Shoes</a></li>
                        <li><a href=""> Puma Shoes</a></li>
                        <li><a href="">Reebok Shoes </a></li>
                        <li><a href="">Woodland Shoes  </a></li>
                        <li><a href="">Red tape Shoes</a></li>
                        <li><a href="">Nike Shoes</a></li>
                    </ul>

                </div>

                <div class="footer-bottom">
                    <div class="links">
                        <ul>
                            <li><a href="">    Company Info ??? Partnerships    </a></li>
                        </ul>
                        <ul>
                            <li><a href="">Online Shopping </a></li>
                            <li><a href="">Promotions </a></li>
                            <li><a href="">My Orders  </a></li>
                            <li><a href="">Help  </a></li>
                            <li><a href="">Site Map </a></li>
                            <li><a href="">Customer Service </a></li>
                            <li><a href="">Support  </a></li>
                        </ul>
                        <ul>
                            <li><a href="">Most Populars </a></li>
                            <li><a href="">Best Sellers  </a></li>
                            <li><a href="">New Arrivals  </a></li>
                            <li><a href="">Special Products  </a></li>
                            <li><a href=""> Manufacturers     </a></li>
                            <li><a href="">Our Stores   </a></li>
                            <li><a href="">Shipping      </a></li>
                            <li><a href="">Payments      </a></li>
                            <li><a href="">Payments      </a></li>
                            <li><a href="">Refunds  </a></li>
                        </ul>
                        <ul>
                            <li><a href="">Terms & Conditions  </a></li>
                            <li><a href="">Policy      </a></li>
                            <li><a href="">Policy      </a></li>
                            <li><a href=""> Shipping     </a></li>
                            <li><a href="">Payments      </a></li>
                            <li><a href="">Returns      </a></li>
                            <li><a href="">Refunds      </a></li>
                            <li><a href="">Warrantee      </a></li>
                            <li><a href="">FAQ      </a></li>
                            <li><a href="">Contact  </a></li>
                        </ul>
                    </div>
                </div>

                <div class="copyright">

                    Copyright ?? 2016 KoolShop. All Rights Reserved. Designed by KoolShop

                </div>

            </div>

        </footer><!-- end FOOTER -->

        <!--back-to-top  -->
        <a href="#" class="back-to-top">
            <i aria-hidden="true" class="fa fa-angle-up"></i>
        </a>

    </div>

    <!-- jQuery -->
    <script type="text/javascript" src="/client/js/jquery.min.js"></script>

    <!-- sticky -->
    <script type="text/javascript" src="/client/js/jquery.sticky.js"></script>

    <!-- OWL CAROUSEL Slider -->
    <script type="text/javascript" src="/client/js/owl.carousel.min.js"></script>

    <!-- Boostrap -->
    <script type="text/javascript" src="/client/js/bootstrap.min.js"></script>

    <!-- Countdown -->
    <script type="text/javascript" src="/client/js/jquery.countdown.min.js"></script>

    <!--jquery Bxslider  -->
    <script type="text/javascript" src="/client/js/jquery.bxslider.min.js"></script>

    <!-- actual -->
    <script type="text/javascript" src="/client/js/jquery.actual.min.js"></script>

    <!-- jQuery UI -->
    <script type="text/javascript" src="/client/js/jquery-ui.min.js"></script>

    <!-- Chosen jquery-->
    <script type="text/javascript" src="/client/js/chosen.jquery.min.js"></script>

    <!-- parallax jquery-->
    <script type="text/javascript" src="/client/js/jquery.parallax-1.1.3.js"></script>

    <!-- elevatezoom -->
    <script type="text/javascript" src="/client/js/jquery.elevateZoom.min.js"></script>

    <!-- fancybox -->
    <script src="/client/js/fancybox/source/jquery.fancybox.pack.js"></script>
    <script src="/client/js/fancybox/source/helpers/jquery.fancybox-media.js"></script>
    <script src="/client/js/fancybox/source/helpers/jquery.fancybox-thumbs.js"></script>

    <!-- arcticmodal -->
    <script src="/client/js/arcticmodal/jquery.arcticmodal.js"></script>

    <!-- Main -->
    <script type="text/javascript" src="/client/js/main.js"></script>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/61279893649e0a0a5cd315bf/1fe1ao0mi';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
</body>
</html>
