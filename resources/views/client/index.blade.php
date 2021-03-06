@extends('client.master')
@section('content-loai-san-pham')
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
                                                    <span class="price">{{ number_format($valueSanPham->giaKhuyenMai, 0) }} ??</span>
                                                    <span class="old-price">{{ number_format($valueSanPham->giaBan, 0) }} ??</span>
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
@endsection
