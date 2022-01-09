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
                                        <button class="xoaSanPham mb-2 mr-2 btn btn-danger active" data-toggle="modal" data-target="#deleteModel">Xóa</button>
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
                <input id="idCanXoa">
                <p class="mb-0">Xác Nhận Xoá Khỏi Danh Sách Sản Phẩm </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"> Hủy </button>
                <button id="xoaSanPham1" type="button" class="btn btn-primary"> Xoá </button>
            </div>
        </div>
    </div>
</div>
<!-- Modal Delete -->
@section('js')
<script>
    @if(count($errors) > 0)
        @foreach($errors->all() as $error)
            toastr.error("{{ $error }}");
        @endforeach
    @endif
</script>
<script>
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(document).ready(function(){
        let row;
        $(".xoaSanPham").click(function(){
            let id = $(this).data('id');
            row = $(this).parents('tr');
            $("#idCanXoa").val(id);
            console.log('Đã bấm nút xóa loại sản phẩm có id ' + id);
        })

        $("#xoaSanPham1").click(function(){
            let idCanXoa = $("#idCanXoa").val();
            $.ajax({
                url: '/admin/sanpham/xoaSanPham1/' + idCanXoa,
                type: 'get',
                success:function($data){
                    row.remove();
                    // console.log($data[1]);
                    if($data[1] == true){
                        toastr.success('Đã xóa sản phẩm thành công');
                    } else {
                        toastr.error("Ê ku!, chơi rứa đủ rồi!");
                    }
                },
                error:function(){
                    toastr.error('Có lỗi rồi chú ơi');
                }
            });
        });
    })
</script>
@endsection