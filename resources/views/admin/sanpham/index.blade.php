@extends('admin.share.master')
@section('title')
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-display1 icon-gradient bg-premium-dark">
                </i>
            </div>
            <div>
                Danh sách sản phẩm
            </div>
        </div>
    </div>
@endsection
@section('content')
<div class="tab-content">
    <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-body"><h5 class="card-title">Danh sách Sản Phẩm</h5>
                        <table id="example" class="mb-0 table table-bordered" style="font-size: 14px !important">
                            <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Tên Sản Phẩm</th>
                                <th class="text-center">Hình Ảnh</th>
                                <th class="text-center text-nowrap">Loại Sản Phẩm</th>
                                <th class="text-center">Mô Tả</th>
                                <th class="text-center">Thông Tin</th>
                                <th class="text-center">Tình Trạng</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                                @foreach ($data as $key => $value)
                                <tr>
                                    <th class="text-center"> {{ $key + 1 }}</th>
                                    <td class="text-nowrap">{{ $value->tenSanPham }}</td>
                                    <td>
                                        <img src="{{ $value->hinhAnh }}" width="300" height="200">
                                    </td>
                                    <td class="text-nowrap">
                                        {{-- @foreach ($loaiSanPham as $item)
                                            @if($item->id == $value->loaiSanPham_id)
                                                {{ $item->tenLoaiSanPham }}
                                            @endif
                                        @endforeach --}}
                                        {{ $value->loaiSanPham->tenLoaiSanPham }}
                                    </td>
                                    <td>{!! Str::limit($value->moTaNgan , 100) !!}</td>
                                    <td class="text-nowrap">
                                        <p><span class="font-weight-bold">Giá bán:</span> <span class="text-danger"><del> {{ number_format($value->giaBan) }} đ</del></span></p>
                                        <p><span class="font-weight-bold">Giá khuyến mãi:</span> <span  class="text-primary"> {{ number_format($value->giaKhuyenMai) }} đ</></span></p>
                                        <p><span class="font-weight-bold">Trọng lượng:</span><span  class="text-info"> {{ $value->trongLuong }} gram</span></p>
                                    </td>
                                    <td class="text-nowrap">{{ $value->tinhTrang == 1 ? 'Còn kinh doanh' : 'Tạm dừng' }}</td>
                                    <td class="text-nowrap">
                                        <button class="mb-2 mr-2 btn btn-danger active" data-toggle="modal" data-target="#deleteModel">Xóa</button>
                                    </td>
                                </tr>
                                @endforeach
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<!-- Modal Delete -->
<div class="modal fade" id="deleteModel" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Bạn có chắc chắn muốn xóa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="mb-0">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal Delete -->
