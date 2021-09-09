@extends('clientnew.master')
@section('content')
<!-- MAIN -->
<main class="site-main">
    <div class="columns container">
        <!-- Block  Breadcrumb-->
        <ol class="breadcrumb no-hide">
        </ol><!-- Block  Breadcrumb-->
        <div class="row">
            <!-- Main Content -->
            <div class="col-md-9 col-md-push-3  col-main">
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="product-media media-horizontal">
                            <div class="image_preview_container images-large">
                                <img id="img_zoom" data-zoom-image="images/media/detail/thumb-lag1.jpg"
                                    src="{{ $sanPham->hinhAnh }}" alt="">
                            </div>
                        </div><!-- image product -->
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="product-info-main">
                            <h1 class="page-title">
                                {{ $sanPham->tenSanPham }}
                            </h1>
                            <div class="product-reviews-summary">
                                <div class="rating-summary">
                                    @php
                                        $rate = rand(5, 10)*10;
                                    @endphp
                                    <div class="rating-result" title="{{$rate}}%">
                                        <span style="width:{{$rate}}%">
                                            <span><span>{{$rate}}</span>% of <span>100</span></span>
                                        </span>
                                    </div>
                                </div>
                                <div class="reviews-actions">
                                    <a href="" class="action view">Based on {{$rate/20}} ratings</a>
                                </div>
                            </div>
                            <div class="product-info-price">
                                <div class="price-box">
                                    <span class="price">{{number_format($sanPham->giaKhuyenMai,0)}}đ</span>
                                    <span class="old-price">{{number_format($sanPham->giaBan,0)}}đ</span>
                                    <span class="label-sale">-{{number_format(($sanPham->giaBan-$sanPham->giaKhuyenMai)/$sanPham->giaBan*100, 0)}}%</span>
                                </div>
                            </div>
                            <div class="product-code">
                                Item Code: <span id="sanPhamId">{{$sanPham->id}}</span>
                            </div>
                            <div class="product-info-stock">
                                <div class="stock available">
                                    <span class="label">Availability: </span>In stock
                                </div>
                            </div>
                            <div class="product-overview">
                                <div class="overview-content">
                                    {{$sanPham->moTaNgan}}
                                </div>
                            </div>

                            <div class="product-add-form">
                                <p>Available Options:</p>
                                <form>
                                    <div class="product-options-wrapper">
                                        <div class="form-qty">
                                            <label class="label">Qty: </label>
                                            <div class="control">
                                                <input type="text" class="form-control input-qty" value='1' id="qty1"
                                                    name="qty1" maxlength="12" minlength="1">
                                                <button class="btn-number  qtyminus" data-type="minus"
                                                    data-field="qty1"><span>-</span></button>
                                                <button class="btn-number  qtyplus" data-type="plus"
                                                    data-field="qty1"><span>+</span></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-options-bottom clearfix">
                                        <div class="actions">
                                            @if($user)
                                                <a id="addToCart" class="btn action btn-cart">Đã Login</a>
                                            @else
                                                <a class="btn action btn-cart" href="#login" data-toggle="modal">Add to Cart</a>
                                            @endif
                                            {{-- <button type="submit" title="Add to Cart" class="action btn-cart">
                                                <span>Add to Cart</span>
                                            </button> --}}
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
                        <li role="presentation" class="active"><a href="#description" role="tab"
                                data-toggle="tab">Product Details </a></li>
                        <li role="presentation"><a href="#tags" role="tab" data-toggle="tab">information </a></li>
                        <li role="presentation"><a href="#reviews" role="tab" data-toggle="tab">reviews</a></li>
                        <li role="presentation"><a href="#additional" role="tab" data-toggle="tab">Extra Tabs</a></li>
                        <li role="presentation"><a href="#tab-cust" role="tab" data-toggle="tab">Guarantees</a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="description">
                            <div class="block-title">Product Details</div>
                            <div class="block-content">
                                {!! $sanPham->moTaDai !!}
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="tags">
                            <div class="block-title">information</div>
                            <div class="block-content">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                                    It has survived not only five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                                    the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                    with desktop publishing software like Aldus PageMaker including versions of Lorem
                                    Ipsum</p>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="reviews">
                            <div class="block-title">reviews</div>
                            <div class="block-content">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                                    It has survived not only five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                                    the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                    with desktop publishing software like Aldus PageMaker including versions of Lorem
                                    Ipsum</p>

                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                                    It has survived not only five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                                    the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                    with desktop publishing software like Aldus PageMaker including versions of Lorem
                                    Ipsum</p>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                                    It has survived not only five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                                    the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                    with desktop publishing software like Aldus PageMaker including versions of Lorem
                                    Ipsum</p>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="additional">
                            <div class="block-title">Extra Tabs</div>
                            <div class="block-content">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                                    It has survived not only five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                                    the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                    with desktop publishing software like Aldus PageMaker including versions of Lorem
                                    Ipsum</p>

                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                                    It has survived not only five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                                    the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                    with desktop publishing software like Aldus PageMaker including versions of Lorem
                                    Ipsum</p>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                                    It has survived not only five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                                    the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                    with desktop publishing software like Aldus PageMaker including versions of Lorem
                                    Ipsum</p>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                                    It has survived not only five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                                    the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                    with desktop publishing software like Aldus PageMaker including versions of Lorem
                                    Ipsum</p>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="tab-cust">
                            <div class="block-title">Guarantees</div>
                            <div class="block-content">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                                    It has survived not only five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                                    the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                    with desktop publishing software like Aldus PageMaker including versions of Lorem
                                    Ipsum</p>

                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                                    It has survived not only five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                                    the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                    with desktop publishing software like Aldus PageMaker including versions of Lorem
                                    Ipsum</p>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                                    It has survived not only five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                                    the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                    with desktop publishing software like Aldus PageMaker including versions of Lorem
                                    Ipsum</p>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                                    It has survived not only five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                                    the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                    with desktop publishing software like Aldus PageMaker including versions of Lorem
                                    Ipsum</p>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                                    It has survived not only five centuries, but also Aldus PageMaker including versions
                                    of Lorem Ipsum</p>

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
                        <ol class="product-items owl-carousel " data-nav="true" data-dots="false" data-margin="30"
                            data-responsive='{"0":{"items":1},"480":{"items":2},"600":{"items":3},"992":{"items":3}}'>
                            @foreach ($danhSachSanPham as $value)
                            <li class="product-item product-item-opt-2">
                                <div class="product-item-info">
                                    <div class="product-item-photo">
                                        <a href="" class="product-item-img"><img
                                                src="{{$value->hinhAnh}}" alt="product name"></a>
                                        <button class="btn btn-cart" type="button"><span>Add to Cart</span></button>
                                    </div>
                                    <div class="product-item-detail">
                                        <strong class="product-item-name">
                                            <a href=""></a>{{$value->tenSanPham}}</strong>
                                        <div class="clearfix">
                                            <div class="product-item-price">
                                                <span class="price">{{number_format($value->giaKhuyenMai,0)}}đ</span>
                                                <span class="old-price">{{number_format($value->giaBan,0)}}đ</span>
                                            </div>
                                            <div class="product-reviews-summary">
                                                @php
                                                    $rate = rand(5, 10)*10;
                                                @endphp
                                                <div class="rating-summary">
                                                    <div class="rating-result" title="{{$rate}}%">
                                                        <span style="width:{{$rate}}%">
                                                            <span><span>{{$rate}}</span>% of <span>100</span></span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ol>
                    </div>
                </div><!-- block-related product -->
            </div><!-- Main Content -->

            <!-- Sidebar -->
            <div class=" col-md-3 col-md-pull-9   col-sidebar">

                <!-- Block  bestseller products-->
                <div class="block-sidebar block-sidebar-categorie">
                    <div class="block-title">
                        <strong>PRODUCT TYPES</strong>
                    </div>
                    <div class="block-content">
                        <ul class="items">
                            @foreach ($loaiSanPham as $value)
                            <li class="parent">
                                <a href="">{{$value->tenLoaiSanPham}}</a>
                            </li>
                            @endforeach

                        </ul>
                    </div>
                </div><!-- Block  bestseller products-->

                <!-- Block  bestseller products-->
                <div class="block-sidebar block-sidebar-products">
                    <div class="block-title">
                        <strong>BEST SALES</strong>
                    </div>
                    <div class="block-content">
                        <div class="owl-carousel" data-nav="false" data-dots="true" data-margin="0"
                            data-autoplayTimeout="700" data-autoplay="true" data-loop="true" data-responsive='{
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
                                            <a class="product-item-img" href=""><img alt="product name"
                                                    src="client/images/media/detail/best1.jpg"></a>
                                        </div>
                                        <div class="product-item-detail">
                                            <strong class="product-item-name"><a href="">Man’s Within Plus Size
                                                    Flared</a></strong>
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
                                            <a class="product-item-img" href=""><img alt="product name"
                                                    src="client/images/media/detail/best2.jpg"></a>
                                        </div>
                                        <div class="product-item-detail">
                                            <strong class="product-item-name"><a href="">Woman Within Plus Size
                                                    Flared</a></strong>
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
                                            <a class="product-item-img" href=""><img alt="product name"
                                                    src="client/images/media/detail/best3.jpg"></a>
                                        </div>
                                        <div class="product-item-detail">
                                            <strong class="product-item-name"><a href="">Plus Size Rock Star
                                                    Skirt</a></strong>
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
                                            <a class="product-item-img" href=""><img alt="product name"
                                                    src="client/images/media/detail/best1.jpg"></a>
                                        </div>
                                        <div class="product-item-detail">
                                            <strong class="product-item-name"><a href="">Man’s Within Plus Size
                                                    Flared</a></strong>
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
                                            <a class="product-item-img" href=""><img alt="product name"
                                                    src="client/images/media/detail/best2.jpg"></a>
                                        </div>
                                        <div class="product-item-detail">
                                            <strong class="product-item-name"><a href="">Woman Within Plus Size
                                                    Flared</a></strong>
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
                                            <a class="product-item-img" href=""><img alt="product name"
                                                    src="client/images/media/detail/best3.jpg"></a>
                                        </div>
                                        <div class="product-item-detail">
                                            <strong class="product-item-name"><a href="">Plus Size Rock Star
                                                    Skirt</a></strong>
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
            </div><!-- Sidebar -->
        </div>
    </div>
</main><!-- end MAIN -->

@endsection
@section('js')
<script>
    (function($) {
        "use strict";
        $(document).ready(function() {
            $("#addToCart").click(function(){
                var idSanPham = $("#sanPhamId").text();
                var soLuong   = $("#qty1").val();
                var payload = {
                    'id_sanPham'    : idSanPham,
                    'soLuong'       : soLuong,
                };
                console.log(payload);
                axios
                    .post('/gio-hang', payload)
                    .then(function(data){
                        if(data){
                            toastr.success('Đã thêm vào giỏ hàng thành công!!!');
                            location.reload();
                        } else{
                            toastr.error('Có lỗi hệ thống!!!');
                        }
                    });
            });


            $('#slider-range').slider({
                range: true,
                min: 0,
                max: 500,
                values: [0, 300],
                slide: function (event, ui) {
                    $('#amount-left').text(ui.values[0] );
                    $('#amount-right').text(ui.values[1] );
                }
            });
            $('#amount-left').text($('#slider-range').slider('values', 0));
            $('#amount-right').text($('#slider-range').slider('values', 1));
        });
    })(jQuery);
</script>
@endsection
