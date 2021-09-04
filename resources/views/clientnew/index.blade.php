@extends('clientnew.master')
@section('content')
<!-- MAIN -->
<main class="site-main">
    <div class="block-section-top block-section-top1">
        <div class="container">
            <div class="box-section-top">
                <!-- categori -->
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
                                    {{$value->tenLoaiSanPham}}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                        <div class="view-all-categori">
                            <a  class="open-cate btn-view-all">All Categories</a>
                        </div>
                    </div>

                </div><!-- categori -->

                <!-- block slide top -->
                <div class="block-slide-main slide-opt-1">

                    <!-- slide -->
                    <div class="owl-carousel dotsData"
                        data-nav="true"
                        data-dots="true"
                        data-margin="0"
                        data-items='1'
                        data-autoplayTimeout="700"
                        data-autoplay="true"
                        data-loop="true">
                        @foreach ($slideMain as $key => $value)
                            <div class="item item{{$key++}}" style="background-image: url({{$value->url}});" data-dot="{{$key++}}"></div>
                        @endforeach
                    </div> <!-- slide -->
                </div><!-- block slide top -->

                <!-- banner -->
                <div class="banner-slide">
                    <a href="" class="box-img"><img src="{{$sildeSub[0]->url}}" alt="banner-slide"></a>
                    <a href="" class="box-img"><img src="{{$sildeSub[1]->url}}" alt="banner-slide"></a>
                </div><!-- banner -->

            </div>
        </div>
    </div>

    <!-- block  service-->
    <div class="container ">
        <div class="block-service-opt1">
            <div class="clearfix">
                <div class="col-md-3 col-sm-6">
                    <div class="item">
                        <span class="icon">
                            <img src="/client/images/media/index1/service1.png" alt="service">
                        </span>
                        <strong class="title">Free Shipping </strong>
                        <span>On order over $200</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="item">
                        <span class="icon">
                            <img src="/client/images/media/index1/service2.png" alt="service">
                        </span>
                        <strong class="title">30-day return</strong>
                        <span>Moneyback guarantee</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="item">
                        <span class="icon">
                            <img src="/client/images/media/index1/service3.png" alt="service">
                        </span>
                        <strong class="title">24/7 support</strong>
                        <span>Online consultations</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="item">
                        <span class="icon">
                            <img src="/client/images/media/index1/service4.png" alt="service">
                        </span>
                        <strong class="title">SAFE SHOPPING </strong>
                        <span>Safe Shopping Guarantee</span>
                    </div>
                </div>

            </div>
        </div>
    </div><!-- block  service-->


    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <!-- block tab products -->
                <div class="block-tab-products-opt1">
                    <div class="block-title">
                        <ul class="nav" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#tabproduct1"  role="tab" data-toggle="tab">best SELLERS </a>
                            </li>
                            <li role="presentation">
                                <a href="#tabproduct2" role="tab" data-toggle="tab">ON SALE</a>
                            </li>
                            <li role="presentation">
                                <a href="#tabproduct3"  role="tab" data-toggle="tab">NEW PRODUCTS</a>
                            </li>
                        </ul>
                    </div>

                    <div class="block-content tab-content">

                        <!-- tab 1 -->
                        <div role="tabpanel" class="tab-pane active fade in " id="tabproduct1">
                            <div class="owl-carousel"
                                data-nav="true"
                                data-dots="false"
                                data-margin="30"
                                data-responsive='{
                                "0":{"items":1},
                                "480":{"items":2},
                                "480":{"items":2},
                                "768":{"items":3},
                                "992":{"items":3}
                            }'>

                                <div class="product-item  product-item-opt-1 ">
                                    <div class="product-item-info">
                                        <div class="product-item-photo">
                                            <a class="product-item-img" href=""><img alt="product name" src="/client/images/media/index1/sellers1.jpg"></a>
                                            <div class="product-item-actions">
                                                <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                <a class="btn btn-compare" href=""><span>compare</span></a>
                                                <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                            </div>
                                            <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                            <span class="product-item-label label-price">30% <span>off</span></span>
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
                                            <a class="product-item-img" href=""><img alt="product name" src="/client/images/media/index1/sellers2.jpg"></a>
                                            <div class="product-item-actions">
                                                <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                <a class="btn btn-compare" href=""><span>compare</span></a>
                                                <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                            </div>
                                            <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                            <span class="product-item-label label-new">New</span>
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
                                            <a class="product-item-img" href=""><img alt="product name" src="/client/images/media/index1/sellers3.jpg"></a>
                                            <div class="product-item-actions">
                                                <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                <a class="btn btn-compare" href=""><span>compare</span></a>
                                                <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                            </div>
                                            <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
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
                                            <a class="product-item-img" href=""><img alt="product name" src="/client/images/media/index1/sellers2.jpg"></a>
                                            <div class="product-item-actions">
                                                <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                <a class="btn btn-compare" href=""><span>compare</span></a>
                                                <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                            </div>
                                            <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
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
                                            <a class="product-item-img" href=""><img alt="product name" src="/client/images/media/index1/sellers3.jpg"></a>
                                            <div class="product-item-actions">
                                                <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                <a class="btn btn-compare" href=""><span>compare</span></a>
                                                <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                            </div>
                                            <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
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
                        </div><!-- tab 1 -->

                        <!-- tab 2 -->
                        <div role="tabpanel" class="tab-pane fade" id="tabproduct2">
                            <div class="owl-carousel"
                                data-nav="true"
                                data-dots="false"
                                data-margin="30"
                                data-responsive='{
                                "0":{"items":1},
                                "480":{"items":2},
                                "480":{"items":2},
                                "768":{"items":3},
                                "992":{"items":3}
                            }'>

                                <div class="product-item  product-item-opt-1 ">
                                    <div class="product-item-info">
                                        <div class="product-item-photo">
                                            <a class="product-item-img" href=""><img alt="product name" src="/client/images/media/index1/sellers1.jpg"></a>
                                            <div class="product-item-actions">
                                                <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                <a class="btn btn-compare" href=""><span>compare</span></a>
                                                <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                            </div>
                                            <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
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
                                            <a class="product-item-img" href=""><img alt="product name" src="/client/images/media/index1/sellers2.jpg"></a>
                                            <div class="product-item-actions">
                                                <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                <a class="btn btn-compare" href=""><span>compare</span></a>
                                                <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                            </div>
                                            <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
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
                                            <a class="product-item-img" href=""><img alt="product name" src="/client/images/media/index1/sellers3.jpg"></a>
                                            <div class="product-item-actions">
                                                <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                <a class="btn btn-compare" href=""><span>compare</span></a>
                                                <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                            </div>
                                            <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
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
                                            <a class="product-item-img" href=""><img alt="product name" src="/client/images/media/index1/sellers2.jpg"></a>
                                            <div class="product-item-actions">
                                                <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                <a class="btn btn-compare" href=""><span>compare</span></a>
                                                <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                            </div>
                                            <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
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
                                            <a class="product-item-img" href=""><img alt="product name" src="/client/images/media/index1/sellers3.jpg"></a>
                                            <div class="product-item-actions">
                                                <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                <a class="btn btn-compare" href=""><span>compare</span></a>
                                                <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                            </div>
                                            <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
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
                        </div><!-- tab 2 -->

                        <!-- tab 3-->
                        <div role="tabpanel" class="tab-pane fade" id="tabproduct3">
                            <div class="owl-carousel"
                                data-nav="true"
                                data-dots="false"
                                data-margin="30"
                                data-responsive='{
                                "0":{"items":1},
                                "480":{"items":2},
                                "480":{"items":2},
                                "768":{"items":3},
                                "992":{"items":3}
                            }'>

                                <div class="product-item  product-item-opt-1 ">
                                    <div class="product-item-info">
                                        <div class="product-item-photo">
                                            <a class="product-item-img" href=""><img alt="product name" src="/client/images/media/index1/sellers1.jpg"></a>
                                            <div class="product-item-actions">
                                                <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                <a class="btn btn-compare" href=""><span>compare</span></a>
                                                <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                            </div>
                                            <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
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
                                            <a class="product-item-img" href=""><img alt="product name" src="/client/images/media/index1/sellers2.jpg"></a>
                                            <div class="product-item-actions">
                                                <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                <a class="btn btn-compare" href=""><span>compare</span></a>
                                                <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                            </div>
                                            <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
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
                                            <a class="product-item-img" href=""><img alt="product name" src="/client/images/media/index1/sellers3.jpg"></a>
                                            <div class="product-item-actions">
                                                <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                <a class="btn btn-compare" href=""><span>compare</span></a>
                                                <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                            </div>
                                            <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
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
                                            <a class="product-item-img" href=""><img alt="product name" src="/client/images/media/index1/sellers2.jpg"></a>
                                            <div class="product-item-actions">
                                                <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                <a class="btn btn-compare" href=""><span>compare</span></a>
                                                <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                            </div>
                                            <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
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
                                            <a class="product-item-img" href=""><img alt="product name" src="/client/images/media/index1/sellers3.jpg"></a>
                                            <div class="product-item-actions">
                                                <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                <a class="btn btn-compare" href=""><span>compare</span></a>
                                                <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                            </div>
                                            <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
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
                        </div><!-- tab 3-->

                    </div>

                </div><!-- block tab products -->

            </div>

            <div class="col-md-3">

                <!-- block deals  of -->
                <div class="block-deals-of block-deals-of-opt1">
                    <div class="block-title ">
                        <span class="icon"></span>
                        <div class="heading-title">latest deals</div>
                    </div>
                    <div class="block-content">

                        <div class="owl-carousel"
                            data-nav="false"
                            data-dots="false"
                            data-margin="30"
                            data-responsive='{
                            "0":{"items":1},
                            "480":{"items":2},
                            "768":{"items":3},
                            "992":{"items":1},
                            "1200":{"items":1}
                            }'>

                            <div class="product-item  product-item-opt-1 ">
                                <div class="deals-of-countdown">

                                    <div class="count-down-time" data-countdown="2016/12/25"></div>
                                </div>
                                <div class="product-item-info">
                                    <div class="product-item-photo">
                                        <a class="product-item-img" href=""><img alt="product name" src="/client/images/media/index1/deals-of1.jpg" ></a>
                                        <div class="product-item-actions">
                                            <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                            <a class="btn btn-compare" href=""><span>compare</span></a>
                                            <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                        </div>
                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                    </div>
                                    <div class="product-item-detail">
                                        <strong class="product-item-name"><a href="">Maecenas consequat mauris</a></strong>
                                        <div class="clearfix">
                                            <div class="product-item-price">
                                                <span class="price">$108.00</span>
                                                <span class="old-price">(-20%)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item  product-item-opt-1 ">
                                <div class="deals-of-countdown">

                                    <div class="count-down-time" data-countdown="2016/11/25"></div>
                                </div>
                                <div class="product-item-info">
                                    <div class="product-item-photo">
                                        <a class="product-item-img" href=""><img alt="product name" src="/client/images/media/index1/deals-of2.jpg" ></a>
                                        <div class="product-item-actions">
                                            <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                            <a class="btn btn-compare" href=""><span>compare</span></a>
                                            <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                        </div>
                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                    </div>
                                    <div class="product-item-detail">
                                        <strong class="product-item-name"><a href="">Sale Couple of Smartphones</a></strong>
                                        <div class="clearfix">
                                            <div class="product-item-price">
                                                <span class="price">$45.00</span>
                                                <span class="old-price">(-20%)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item  product-item-opt-1 ">
                                <div class="deals-of-countdown">

                                    <div class="count-down-time" data-countdown="2016/12/30"></div>
                                </div>
                                <div class="product-item-info">
                                    <div class="product-item-photo">
                                        <a class="product-item-img" href=""><img alt="product name" src="/client/images/media/index1/deals-of3.jpg" ></a>
                                        <div class="product-item-actions">
                                            <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                            <a class="btn btn-compare" href=""><span>compare</span></a>
                                            <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                        </div>
                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                    </div>
                                    <div class="product-item-detail">
                                        <strong class="product-item-name"><a href="">Sale Couple of Smartphones</a></strong>
                                        <div class="clearfix">
                                            <div class="product-item-price">
                                                <span class="price">$45.00</span>
                                                <span class="old-price">(-20%)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- block deals  of -->

            </div>

        </div>
    </div>

    <div class="clearfix" style="background-color: #eeeeee;margin-bottom: 40px; padding-top:30px;">

        @foreach ($loaiSanPhamCha as $keyCha => $dataSanPhamCha)
        <!-- block -floor -products / floor 1 :Fashion-->
        <div class="block-floor-products block-floor-products-opt1 floor-products{{$keyCha+1}}" id="floor{{$keyCha}}-1">
            <div class="container">
                <div class="block-title ">
                    <span class="title"><img alt="img"  src="/client/images/media/index1/floor1.png">{{ $dataSanPhamCha->tenLoaiSanPham }}</span>
                    <div class="links dropdown">
                        <button class="dropdown-toggle"  type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </button>
                        <div class="dropdown-menu" >
                            <ul>
                                @php
                                    $dem = 1;
                                @endphp
                                @foreach ($loaiSanPhamCon as $keyCon => $dataSanPhamCon)
                                    @if($dataSanPhamCon->idCha == $dataSanPhamCha->id)
                                        <li class="{{ $keyCon == 0 ? 'active' : '' }}"  role="presentation"><a href="#floor{{$keyCha+1}}-{{$dem++}}"  role="tab" data-toggle="tab">{{ $dataSanPhamCon->tenLoaiSanPham }}</a></li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Banner -->
                <div class="block-banner-floor">

                    <div class="col-sm-6">
                        <a href="" class="box-img"><img src="/client/images/media/index1/banner1-1.jpg" alt="banner"></a>
                    </div>
                    <div class="col-sm-6">
                        <a href="" class="box-img"><img src="/client/images/media/index1/banner1-2.jpg" alt="banner"></a>
                    </div>

                </div><!-- Banner -->

                <div class="block-content">
                    <div class="col-banner">
                        <span class="label-featured"><img src="/client/images/icon/index1/label-featured.png" alt="label-featured"></span>
                        <a href="" class="box-img"><img src="{{  $dataSanPhamCha->image }}" alt="baner-floor"></a>
                    </div>
                    <div class="col-products tab-content">
                        {{-- {{ dd($loaiSanPhamCon->toArray(), $sanPham->toArray()) }} --}}
                    @php
                        $dem = 1;
                    @endphp
                    @foreach ($loaiSanPhamCon as $key => $value)
                        @if($value->idCha == $dataSanPhamCha->id)
                        <!-- tab 1 -->
                        <div class="tab-pane in fade {{ $dem == 1 ? 'active' : ''}}" id="floor{{$keyCha+1}}-{{$dem++}}" role="tabpanel">
                            <div class="owl-carousel"
                                data-nav="true"
                                data-dots="false"
                                data-margin="0"
                                data-responsive='{
                                "0":{"items":1},
                                "420":{"items":2},
                                "600":{"items":3},
                                "768":{"items":3},
                                "992":{"items":3},
                                "1200":{"items":4}
                            }'>
                                @foreach ($sanPham as $key => $valueSanPham)
                                    @if($valueSanPham->loaiSanPham_id == $value->id)
                                    <div class="product-item product-item-opt-1">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="/san-pham/{{$valueSanPham->slugTenSanPham."-".$valueSanPham->id}}"><img alt="product name" src="{{$valueSanPham->hinhAnh}}"></a>
                                                <div class="product-item-actions">
                                                    <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                    <a class="btn btn-compare" href=""><span>compare</span></a>
                                                    <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                                </div>
                                                <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                <span class="product-item-label label-price">{{ number_format(($valueSanPham->giaBan - $valueSanPham->giaKhuyenMai)*100/$valueSanPham->giaBan, 0)}}% <span>off</span></span>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="">{{ $valueSanPham->tenSanPham }}</a></strong>
                                                <div class="clearfix">
                                                    <div class="product-item-price">
                                                        <span class="price">{{ number_format($valueSanPham->giaKhuyenMai, 0) }} đ</span>
                                                        <span class="old-price">{{ number_format($valueSanPham->giaBan, 0) }} đ</span>
                                                    </div>
                                                    <div class="product-reviews-summary">
                                                        <div class="rating-summary">
                                                            <div title="80%" class="rating-result">
                                                                @php
                                                                    $number = rand(6,10) * 10;
                                                                @endphp
                                                                <span style="width:{{$number}}%">
                                                                    <span><span>{{ $number }}</span>% of <span>100</span></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @php
                                        unset($sanPham[$key])
                                    @endphp
                                    @endif
                                @endforeach

                            </div>
                        </div>
                        <!-- tab 1 -->
                        @endif
                    @endforeach
                    </div>

                </div>

            </div>
        </div>
        <!-- block -floor -products / floor :Fashion-->
        @endforeach

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
</main><!-- end MAIN -->
@endsection
