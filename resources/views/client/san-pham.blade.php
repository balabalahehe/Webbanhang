@extends('client.master')
@section('san-pham')
<div class="columns container">
    <!-- Block  Breadcrumb-->

    <div class="row">
       <!-- Main Content -->
        <div class="col-md-9 col-md-push-3  col-main">

            <div class="row">

                <div class="col-sm-6 col-md-6 col-lg-6">

                    <div class="product-media media-horizontal">
                        <div class="image_preview_container images-large">
                            <img id="img_zoom" src="images/media/detail/thumb-img1.jpg" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-6">

                    <div class="product-info-main">

                        <h1 class="page-title">
                            {{ $sanPham->tenSanPham }}
                        </h1>
                        <div class="product-reviews-summary">
                            <div class="rating-summary">
                                <div class="rating-result" title="70%">
                                    <span style="width:70%">
                                        <span><span>70</span>% of <span>100</span></span>
                                    </span>
                                </div>
                            </div>
                            <div class="reviews-actions">
                                <a href="" class="action view">Based  on 3 ratings</a>
                                <a href="" class="action add"><img alt="img" src="{{ $sanPham->hinhAnh }}">&#160;&#160;write a review</a>
                            </div>
                        </div>

                        <div class="product-info-price">
                            <div class="price-box">
                                <span class="price" style="font-weight: 700;color: #f36;font-size: 18px;"> {{ number_format($sanPham->giaKhuyenMai) }} đ</span>
                                <span class="old-price" style="font-size: 14px;color: #666;text-decoration: line-through;margin-left: 12px;">{{ number_format($sanPham->giaBan) }} đ</span>
                                <span class="label-sale" style="    display: inline-block;line-height: 23px;background-color: #f90;color: #fff;padding: 0 12px;font-size: 14px;margin-left: 12px">-{{ number_format(($sanPham->giaBan - $sanPham->giaKhuyenMai) / $sanPham->giaBan * 100) }} %</span>
                            </div>
                        </div>
                        <div class="product-code">
                            Item Code: #453217907 :
                        </div>
                        <div class="product-info-stock">
                            <div class="stock available">
                                <span class="label">Availability: </span>In stock
                            </div>
                        </div>
                        <div class="product-condition">
                            Condition: New
                        </div>
                        <div class="product-overview">
                            <div class="overview-content">
                                Vestibulum eu odio. Suspendisse potenti. Morbi mollis tellus ac sapien. Praesent egestas tristique nibh. Nullam dictum felis eu pede mollis pretium. Fusce egestas elit eget lorem.
                            </div>
                        </div>

                        <div class="product-add-form">
                            <p>Available Options:</p>
                            <form>

                                <div class="product-options-wrapper">
                                    <div class="form-qty">
                                        <label class="label">Qty: </label>
                                        <div class="control">
                                            <input type="text" class="form-control input-qty" value='1' id="qty1" name="qty1"  maxlength="12"  minlength="1">
                                            <button class="btn-number  qtyminus" data-type="minus" data-field="qty1"><span>-</span></button>
                                            <button class="btn-number  qtyplus" data-type="plus" data-field="qty1"><span>+</span></button>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-options-bottom clearfix">
                                    <div class="actions">
                                        <button type="submit" title="Add to Cart" class="action btn-cart">
                                            <span>Add to Cart</span>
                                        </button>
                                    </div>

                                </div>

                            </form>
                        </div>
                    </div><!-- detail- product -->
                </div><!-- Main detail -->
            </div>

            <!-- product tab info -->

            <div class="product-info-detailed ">

                <!-- Nav tabs -->
                <ul class="nav nav-pills" role="tablist">
                    <li role="presentation" class="active"><a href="#description"  role="tab" data-toggle="tab">Product Details   </a></li>
                    <li role="presentation"><a href="#tags"  role="tab" data-toggle="tab">information </a></li>
                    <li role="presentation"><a href="#reviews"  role="tab" data-toggle="tab">reviews</a></li>
                    <li role="presentation"><a href="#additional"  role="tab" data-toggle="tab">Extra Tabs</a></li>
                    <li role="presentation"><a href="#tab-cust"  role="tab" data-toggle="tab">Guarantees</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="description">
                        <div class="block-title">Product Details</div>
                        <div class="block-content">
                            <p>Morbi mollis tellus ac sapien. Nunc nec neque. Praesent nec nisl a purus blandit viverra. Nunc nec neque. Pellentesque auctor neque nec urna.</p>
                            <br>
                            <p>Curabitur suscipit suscipit tellus. Cras id dui. Nam ipsum risus, rutrum vitae, vestibulum eu, molestie vel, lacus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Maecenas vestibulum mollis diam.</p>
                            <br>
                            <p>Vestibulum facilisis, purus nec pulvinar iaculis, ligula mi congue nunc, vitae euismod ligula urna in dolor. Sed lectus. Phasellus leo dolor, tempus non, auctor et, hendrerit quis, nisi. Nam at tortor in tellus interdum sagittis. Pellentesque egestas, neque sit amet convallis pulvinar, justo nulla eleifend augue, ac auctor orci leo non est.</p>
                            <br>
                            <p>Morbi mollis tellus ac sapien. Nunc nec neque. Praesent nec nisl a purus blandit viverra. Nunc nec neque. Pellentesque auctor neque nec urna.</p>

                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="tags">
                        <div class="block-title">information</div>
                        <div class="block-content">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="reviews">
                        <div class="block-title">reviews</div>
                        <div class="block-content">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>

                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="additional">
                        <div class="block-title">Extra Tabs</div>
                        <div class="block-content">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>

                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="tab-cust">
                        <div class="block-title">Guarantees</div>
                        <div class="block-content">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>

                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also Aldus PageMaker including versions of Lorem Ipsum</p>

                        </div>
                    </div>
                </div>
            </div>
            <!-- product tab info -->

            <!-- block-related product -->
            <div class="block-related ">
                <div class="block-title">
                    <strong class="title">RELATED products</strong>
                </div>
                <div class="block-content ">
                    <ol class="product-items owl-carousel " data-nav="true" data-dots="false" data-margin="30" data-responsive='{"0":{"items":1},"480":{"items":2},"600":{"items":3},"992":{"items":3}}'>


                        <li class="product-item product-item-opt-2">
                            <div class="product-item-info">
                                <div class="product-item-photo">
                                    <a href="" class="product-item-img"><img src="images/media/detail/related2-1.jpg" alt="product name"></a>
                                    <div class="product-item-actions">
                                        <a href="" class="btn btn-wishlist"><span>wishlist</span></a>
                                        <a href="" class="btn btn-compare"><span>compare</span></a>
                                        <a href="" class="btn btn-quickview"><span>quickview</span></a>
                                    </div>
                                    <button class="btn btn-cart" type="button"><span>Add to Cart</span></button>

                                </div>
                                <div class="product-item-detail">
                                    <strong class="product-item-name"><a href="">Brown Short 100% Cotton</a></strong>
                                    <div class="clearfix">
                                        <div class="product-item-price">
                                            <span class="price">$45.00</span>
                                            <span class="old-price">$52.00</span>
                                        </div>
                                        <div class="product-reviews-summary">
                                            <div class="rating-summary">
                                                <div class="rating-result" title="70%">
                                                    <span style="width:70%">
                                                        <span><span>70</span>% of <span>100</span></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="product-item product-item-opt-2">
                            <div class="product-item-info">
                                <div class="product-item-photo">
                                    <a href="" class="product-item-img"><img src="images/media/detail/related2-2.jpg" alt="product name"></a>
                                    <div class="product-item-actions">
                                        <a href="" class="btn btn-wishlist"><span>wishlist</span></a>
                                        <a href="" class="btn btn-compare"><span>compare</span></a>
                                        <a href="" class="btn btn-quickview"><span>quickview</span></a>
                                    </div>
                                    <button class="btn btn-cart" type="button"><span>Add to Cart</span></button>

                                </div>
                                <div class="product-item-detail">
                                    <strong class="product-item-name"><a href="">Summer T-Shirt</a></strong>
                                    <div class="clearfix">
                                        <div class="product-item-price">
                                            <span class="price">$45.00</span>
                                            <span class="old-price">$52.00</span>
                                        </div>
                                        <div class="product-reviews-summary">
                                            <div class="rating-summary">
                                                <div class="rating-result" title="70%">
                                                    <span style="width:70%">
                                                        <span><span>70</span>% of <span>100</span></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item product-item-opt-2">
                            <div class="product-item-info">
                                <div class="product-item-photo">
                                    <a href="" class="product-item-img"><img src="images/media/detail/related2-3.jpg" alt="product name"></a>
                                    <div class="product-item-actions">
                                        <a href="" class="btn btn-wishlist"><span>wishlist</span></a>
                                        <a href="" class="btn btn-compare"><span>compare</span></a>
                                        <a href="" class="btn btn-quickview"><span>quickview</span></a>
                                    </div>
                                    <button class="btn btn-cart" type="button"><span>Add to Cart</span></button>

                                </div>
                                <div class="product-item-detail">
                                    <strong class="product-item-name"><a href="">Blue Short 50% Cotton</a></strong>
                                    <div class="clearfix">
                                        <div class="product-item-price">
                                            <span class="price">$45.00</span>
                                            <span class="old-price">$52.00</span>
                                        </div>
                                        <div class="product-reviews-summary">
                                            <div class="rating-summary">
                                                <div class="rating-result" title="70%">
                                                    <span style="width:70%">
                                                        <span><span>70</span>% of <span>100</span></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item product-item-opt-2">
                            <div class="product-item-info">
                                <div class="product-item-photo">
                                    <a href="" class="product-item-img"><img src="images/media/detail/related2-1.jpg" alt="product name"></a>
                                    <div class="product-item-actions">
                                        <a href="" class="btn btn-wishlist"><span>wishlist</span></a>
                                        <a href="" class="btn btn-compare"><span>compare</span></a>
                                        <a href="" class="btn btn-quickview"><span>quickview</span></a>
                                    </div>
                                    <button class="btn btn-cart" type="button"><span>Add to Cart</span></button>

                                </div>
                                <div class="product-item-detail">
                                    <strong class="product-item-name"><a href="">Brown Short 100% Cotton</a></strong>
                                    <div class="clearfix">
                                        <div class="product-item-price">
                                            <span class="price">$45.00</span>
                                            <span class="old-price">$52.00</span>
                                        </div>
                                        <div class="product-reviews-summary">
                                            <div class="rating-summary">
                                                <div class="rating-result" title="70%">
                                                    <span style="width:70%">
                                                        <span><span>70</span>% of <span>100</span></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                    </ol>
                </div>
            </div><!-- block-related product -->

        </div><!-- Main Content -->

        <!-- Sidebar -->
        <div class=" col-md-3 col-md-pull-9   col-sidebar">
            <!-- Block  bestseller products-->
            <div class="block-sidebar block-sidebar-categorie">

            </div><!-- Block  bestseller products-->

            <!-- Block  bestseller products-->
            <div class="block-sidebar block-sidebar-products">
                <div class="block-title">
                    <strong>BEST SALES</strong>
                </div>
                <div class="block-content">
                    <div class="owl-carousel"
                    data-nav="false"
                    data-dots="true"
                    data-margin="0"
                    data-autoplayTimeout="700"
                    data-autoplay="true"
                    data-loop="true"
                    data-responsive='{
                    "0":{"items":1},
                    "420":{"items":1},
                    "480":{"items":2},
                    "600":{"items":2},
                    "992":{"items":1}
                    }'>
                        <div class="item">
                            <div class="product-item product-item-opt-2">
                                <div class="product-item-info">
                                    <div class="product-item-photo">
                                        <a class="product-item-img" href=""><img alt="product name" src="images/media/detail/best1.jpg"></a>
                                    </div>
                                    <div class="product-item-detail">
                                        <strong class="product-item-name"><a href="">Man’s Within Plus Size Flared</a></strong>
                                        <div class="clearfix">
                                            <div class="product-item-price">
                                                <span class="price">$45.00</span>
                                            </div>
                                            <div class="product-reviews-summary">
                                                <div class="rating-summary">
                                                    <div title="70%" class="rating-result">
                                                        <span style="width:70%">
                                                            <span><span>70</span>% of <span>100</span></span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item product-item-opt-2">
                                <div class="product-item-info">
                                    <div class="product-item-photo">
                                        <a class="product-item-img" href=""><img alt="product name" src="images/media/detail/best2.jpg"></a>
                                    </div>
                                    <div class="product-item-detail">
                                        <strong class="product-item-name"><a href="">Woman Within Plus Size Flared</a></strong>
                                        <div class="clearfix">
                                            <div class="product-item-price">
                                                <span class="price">$45.00</span>
                                            </div>
                                            <div class="product-reviews-summary">
                                                <div class="rating-summary">
                                                    <div title="70%" class="rating-result">
                                                        <span style="width:70%">
                                                            <span><span>70</span>% of <span>100</span></span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item product-item-opt-2">
                                <div class="product-item-info">
                                    <div class="product-item-photo">
                                        <a class="product-item-img" href=""><img alt="product name" src="images/media/detail/best3.jpg"></a>
                                    </div>
                                    <div class="product-item-detail">
                                        <strong class="product-item-name"><a href="">Plus Size Rock Star Skirt</a></strong>
                                        <div class="clearfix">
                                            <div class="product-item-price">
                                                <span class="price">$45.00</span>
                                            </div>
                                            <div class="product-reviews-summary">
                                                <div class="rating-summary">
                                                    <div title="70%" class="rating-result">
                                                        <span style="width:70%">
                                                            <span><span>70</span>% of <span>100</span></span>
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
                            <div class="product-item product-item-opt-2">
                                <div class="product-item-info">
                                    <div class="product-item-photo">
                                        <a class="product-item-img" href=""><img alt="product name" src="images/media/detail/best1.jpg"></a>
                                    </div>
                                    <div class="product-item-detail">
                                        <strong class="product-item-name"><a href="">Man’s Within Plus Size Flared</a></strong>
                                        <div class="clearfix">
                                            <div class="product-item-price">
                                                <span class="price">$45.00</span>
                                            </div>
                                            <div class="product-reviews-summary">
                                                <div class="rating-summary">
                                                    <div title="70%" class="rating-result">
                                                        <span style="width:70%">
                                                            <span><span>70</span>% of <span>100</span></span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item product-item-opt-2">
                                <div class="product-item-info">
                                    <div class="product-item-photo">
                                        <a class="product-item-img" href=""><img alt="product name" src="images/media/detail/best2.jpg"></a>
                                    </div>
                                    <div class="product-item-detail">
                                        <strong class="product-item-name"><a href="">Woman Within Plus Size Flared</a></strong>
                                        <div class="clearfix">
                                            <div class="product-item-price">
                                                <span class="price">$45.00</span>
                                            </div>
                                            <div class="product-reviews-summary">
                                                <div class="rating-summary">
                                                    <div title="70%" class="rating-result">
                                                        <span style="width:70%">
                                                            <span><span>70</span>% of <span>100</span></span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item product-item-opt-2">
                                <div class="product-item-info">
                                    <div class="product-item-photo">
                                        <a class="product-item-img" href=""><img alt="product name" src="images/media/detail/best3.jpg"></a>
                                    </div>
                                    <div class="product-item-detail">
                                        <strong class="product-item-name"><a href="">Plus Size Rock Star Skirt</a></strong>
                                        <div class="clearfix">
                                            <div class="product-item-price">
                                                <span class="price">$45.00</span>
                                            </div>
                                            <div class="product-reviews-summary">
                                                <div class="rating-summary">
                                                    <div title="70%" class="rating-result">
                                                        <span style="width:70%">
                                                            <span><span>70</span>% of <span>100</span></span>
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
            </div><!-- Block  bestseller products-->

            <!-- block slide top -->
            <div class="block-sidebar block-banner-sidebar">
                <div class="owl-carousel"
                    data-nav="false"
                    data-dots="true"
                    data-margin="0"
                    data-items='1'
                    data-autoplayTimeout="700"
                    data-autoplay="true"
                    data-loop="true">
                    <div class="item item1" >
                       <img src="images/media/detail/banner-slide2.jpg" alt="images">
                    </div>
                    <div class="item item2" >
                       <img src="images/media/detail/banner-slide2.jpg" alt="images">
                    </div>
                    <div class="item item3" >
                       <img src="images/media/detail/banner-slide2.jpg" alt="images">
                    </div>
                </div>
            </div><!-- block slide top -->

            <!-- Block  SALE products-->
            <div class="block-sidebar block-sidebar-products-opt2">
                <div class="block-title">
                    <strong>SALE PRODUCTS</strong>
                </div>
                <div class="block-content">
                    <div class="owl-carousel"
                    data-nav="false"
                    data-dots="true"
                    data-margin="0"
                    data-autoplayTimeout="700"
                    data-autoplay="true"
                    data-loop="true"
                    data-responsive='{
                    "0":{"items":1},
                    "420":{"items":2},
                    "480":{"items":2},
                    "600":{"items":2},
                    "992":{"items":1}
                    }'>
                        <div class="product-item product-item-opt-2">
                            <div class="product-item-info">
                                <div class="product-item-photo">
                                    <a href="" class="product-item-img"><img src="images/media/detail/sale1.jpg" alt="product name"></a>
                                    <div class="product-item-actions">
                                        <a href="" class="btn btn-wishlist"><span>wishlist</span></a>
                                        <a href="" class="btn btn-compare"><span>compare</span></a>
                                        <a href="" class="btn btn-quickview"><span>quickview</span></a>
                                    </div>
                                    <button class="btn btn-cart" type="button"><span>Add to Cart</span></button>
                                    <span class="product-item-label label-price">30% <span>off</span></span>
                                </div>
                                <div class="product-item-detail">
                                    <strong class="product-item-name"><a href="">Luxury Dark Blue Coast</a></strong>
                                    <div class="clearfix">
                                        <div class="product-item-price">
                                            <span class="price">$45.00</span>
                                            <span class="old-price">$52.00</span>
                                        </div>
                                        <div class="product-reviews-summary">
                                            <div class="rating-summary">
                                                <div class="rating-result" title="70%">
                                                    <span style="width:70%">
                                                        <span><span>70</span>% of <span>100</span></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-item product-item-opt-2">
                            <div class="product-item-info">
                                <div class="product-item-photo">
                                    <a href="" class="product-item-img"><img src="images/media/product1.jpg" alt="product name"></a>
                                    <div class="product-item-actions">
                                        <a href="" class="btn btn-wishlist"><span>wishlist</span></a>
                                        <a href="" class="btn btn-compare"><span>compare</span></a>
                                        <a href="" class="btn btn-quickview"><span>quickview</span></a>
                                    </div>
                                    <button class="btn btn-cart" type="button"><span>Add to Cart</span></button>

                                </div>
                                <div class="product-item-detail">
                                    <strong class="product-item-name"><a href="">Asus Ispiron 20</a></strong>
                                    <div class="clearfix">
                                        <div class="product-item-price">
                                            <span class="price">$45.00</span>
                                            <span class="old-price">$52.00</span>
                                        </div>
                                        <div class="product-reviews-summary">
                                            <div class="rating-summary">
                                                <div class="rating-result" title="70%">
                                                    <span style="width:70%">
                                                        <span><span>70</span>% of <span>100</span></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-item product-item-opt-2">
                            <div class="product-item-info">
                                <div class="product-item-photo">
                                    <a href="" class="product-item-img"><img src="images/media/product1.jpg" alt="product name"></a>
                                    <div class="product-item-actions">
                                        <a href="" class="btn btn-wishlist"><span>wishlist</span></a>
                                        <a href="" class="btn btn-compare"><span>compare</span></a>
                                        <a href="" class="btn btn-quickview"><span>quickview</span></a>
                                    </div>
                                    <button class="btn btn-cart" type="button"><span>Add to Cart</span></button>
                                    <span class="product-item-label label-price">30% <span>off</span></span>
                                </div>
                                <div class="product-item-detail">
                                    <strong class="product-item-name"><a href="">Asus Ispiron 20</a></strong>
                                    <div class="clearfix">
                                        <div class="product-item-price">
                                            <span class="price">$45.00</span>
                                            <span class="old-price">$52.00</span>
                                        </div>
                                        <div class="product-reviews-summary">
                                            <div class="rating-summary">
                                                <div class="rating-result" title="70%">
                                                    <span style="width:70%">
                                                        <span><span>70</span>% of <span>100</span></span>
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
            </div><!-- Block  SALE products-->

            <!-- block slide top -->
            <div class="block-sidebar block-sidebar-testimonials2">

                <div class="block-content">
                    <div class="owl-carousel"
                        data-nav="false"
                        data-dots="true"
                        data-margin="0"
                        data-items='1'
                        data-autoplayTimeout="700"
                        data-autoplay="true"
                        data-loop="true">
                        <div class="item " >
                            <div class="img">
                                <img src="images/icon/icon1.png" alt="icon1">
                           </div>
                           <strong class="title">100% Money Back Guaranteed</strong>
                           <div class="des">
                            Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt .
                           </div>
                           <a href="" class="btn">Read more <i aria-hidden="true" class="fa fa-angle-double-right"></i></a>
                        </div>

                    </div>
                </div>
            </div><!-- block slide top -->


        </div><!-- Sidebar -->

    </div>
</div>
@endsection
