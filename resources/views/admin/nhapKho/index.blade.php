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
                                    <td>
                                        <button class="delete btn btn-danger" data-id="{{ $value->id }}">Xóa</button>
                                    </td>
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
<script>
    $(document).ready(function(){
        $("#themTmp").click(function(){
            const payload = {
                sanPham_id      : $("#sanPham_id").val(),
                sanPham_view    : $("#sanPham_id option:selected").text(),
                soLuong         : $("#soLuong").val(),
                donGiaNhap      : $("#donGiaNhap").val(),
                nhaCungCap_id   : $("#nhaCungCap_id").val(),
                nhaCungCap_view : $("#nhaCungCap_id option:selected").text(),
                is_congNo       : $("#is_congNo").val(),
            };

            axios
                .post('/admin/tmpChiTietNhapKho', payload)
                .then((e) => {
                    if(e.status == 'true'){
                        var html = '<tr>';
                        html += '<td>' + sanPham_view + '</td>';
                        html += '<td>' + soLuong + '</td>';
                        html += '<td>' + donGiaNhap + '</td>';
                        html += '<td>' + nhaCungCap_view + '</td>';
                        html += '<td>' + is_congNo + '</td>';
                        html += '<td class="text-center">' + '<button class="delete btn btn-danger" data-id="' + e.data +'">Xóa</button>' + '</td>';
                        html += '</tr>';
                        $('#myTable > tbody').append(html);

                    } else {
                        location.reload();
                    }
                });
        });

        $(".delete").click(function(){
            var idXoa = $(this).data('id');
            console.log(idXoa);
            axios
                .get('/admin/tmpChiTietNhapKho/' + idXoa)
                .then((e) => {
                    if(e.data.trangThai == 'success'){
                        $(this).closest("tr").remove();
                    } else {
                        toastr.error('Vui lòng không can thiệp hệ thống!');
                    }
                });
        });

        $("#nhapKho").click(function(){
            axios
                .get('/admin/nhapKho');
            $('#myTable > tbody').html("");
            toastr.success('Đã Nhập Kho Thành Công!!!');
        });

    });
</script>
@endsection
