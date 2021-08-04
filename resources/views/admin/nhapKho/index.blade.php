@extends('admin.share.master')
@section('title')
<div class="page-title-wrapper">
    <div class="page-title-heading">
        <div class="page-title-icon">
            <i class="pe-7s-display1 icon-gradient bg-premium-dark">
            </i>
        </div>
        <div>
            Nhập Kho Sản Phẩm
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="tab-content">
    <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
        <div class="row">
            <div class="col-md-3">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title">Nhập kho sản phẩm</h5>
                        <div class="position-relative form-group">
                            <label class="">Tên Sản Phẩm</label>
                            <select name="sanPham_id" id="sanPham_id" class="form-control">
                                @foreach ($sanPham as $value)
                                <option value="{{ $value->id }}">{{ $value->tenSanPham }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="position-relative form-group">
                            <label class="">Số Lượng</label>
                            <input type="number" id="soLuong" name="soLuong" class="form-control">
                        </div>
                        <div class="position-relative form-group">
                            <label class="">Đơn Giá Nhập</label>
                            <input type="number" id="donGiaNhap" name="donGiaNhap" class="form-control">
                        </div>
                        <div class="position-relative form-group">
                            <label class="">Nhà Cung Cấp</label>
                            <select name="nhaCungCap_id" id="nhaCungCap_id" class="form-control">
                                @foreach ($nhaCungCap as $value)
                                <option value="{{ $value->id }}">{{ $value->tenNhaCungCap }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="position-relative form-group">
                            <label class="">Công Nợ</label>
                            <select name="is_congNo" id="is_congNo" class="form-control">
                                <option value="1"> Nợ Chưa Thanh Toán</option>
                                <option value="0"> Đã Thanh Toán Tiền</option>
                            </select>
                        </div>
                        <div class="d-block text-right card-footer">
                            <button type="submit" class="mt-1 btn btn-primary" id="themTmp">Thêm Tạm</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title">Danh sách Nhập Kho</h5>
                        <table id="myTable" class="mb-0 table table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center">Tên Sản Phẩm</th>
                                    <th class="text-center">Số Lượng</th>
                                    <th class="text-center">Đơn Giá</th>
                                    <th class="text-center">Nhà Cung Cấp</th>
                                    <th class="text-center">Công Nợ</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tmpChiTietNhapKho as $value)
                                <tr>
                                    <td>{{ $value->sanPham->tenSanPham }}</td>
                                    <td>{{ $value->soLuong }}</td>
                                    <td>{{ $value->donGiaNhap }}</td>
                                    <td>{{ $value->nhaCungCap->tenNhaCungCap }}</td>
                                    <td>{{ $value->is_congNo }}</td>
                                    <td></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-block text-right card-footer">
                            <button class="mt-1 btn btn-primary" id="nhapKho">Nhập Kho</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script src='/Admin/js/TableToJson.min.js'></script>
<script>
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
    $(document).ready(function(){
        $("#themTmp").click(function(){
            var sanPham_id      = $("#sanPham_id").val();
            var sanPham_view    = $("#sanPham_id option:selected").text();
            var soLuong         = $("#soLuong").val();
            var donGiaNhap      = $("#donGiaNhap").val();
            var nhaCungCap_id   = $("#nhaCungCap_id").val();
            var nhaCungCap_view = $("#nhaCungCap_id option:selected").text();
            var is_congNo       = $("#is_congNo").val();

            console.log(sanPham_view);
            var html = '<tr>';
            html += '<td>' + sanPham_view + '</td>';
            html += '<td>' + soLuong + '</td>';
            html += '<td>' + donGiaNhap + '</td>';
            html += '<td>' + nhaCungCap_view + '</td>';
            html += '<td>' + is_congNo + '</td>';
            html += '<td class="text-center">' + '7' + '</td>';
            html += '</tr>';
            $('#myTable > tbody').append(html);

            $.ajax({
            url: "{{ Route('tmpChiTietNhapKho') }}",
                type: 'post',
                data: {
                    sanPham_id      : sanPham_id,
                    soLuong         : soLuong,
                    donGiaNhap      : donGiaNhap,
                    nhaCungCap_id   : nhaCungCap_id,
                    is_congNo       : is_congNo,
                },
                success: function($status){
                    if($status == false){
                        // toastr.error("Trùng thông tin, cho nên sẽ reload!");
                        location.reload();
                    }
                },
            });
        });
        $("#nhapKho").click(function(){
            $.ajax({
                url: "{{ Route('nhapKhoSanPham') }}",
                type: 'get',
                success: function(){

                },
            });
        });
    });

</script>
@endsection
