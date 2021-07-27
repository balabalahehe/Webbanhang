@extends('admin.share.master')
@section('title')
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-display1 icon-gradient bg-premium-dark">
                </i>
            </div>
            <div>
                Quản Lý Nhà Cung Cấp
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
                        <h5 class="card-title">Thông Tin Nhà Cung Cấp</h5>
                        <form method="post" action="{{ Route('themNhaCungCap') }}">
                            @csrf
                            <div class="position-relative form-group">
                                <label class="">Tên Nhà Cung Cấp</label>
                                <input name="tenNhaCungCap" class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label class="">Địa Chỉ</label>
                                <input name="diaChi" class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label class="">Số Điện Thoại</label>
                                <input name="soDienThoai" class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label class="">Email</label>
                                <input name="email" class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label class="">Tên Người Đại Diện</label>
                                <input name="tenNguoiDaiDien" class="form-control">
                            </div>
                            <div class="d-block text-right card-footer">
                                <button class="mt-1 btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="main-card mb-3 card">
                    <div class="card-body"><h5 class="card-title">Danh sách nhà cung cấp</h5>
                        <table id="example" class="mb-0 table table-bordered">
                            <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Tên Nhà Cung Cấp</th>
                                <th class="text-center">Địa Chỉ</th>
                                <th class="text-center">Số Điện Thoại</th>
                                <th class="text-center">Tên Người Đại Diện</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Tình Trạng</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $key => $value)
                                <tr>
                                    <th class="text-center"> {{ $key + 1 }}</th>
                                    <td>{{ $value->tenNhaCungCap }}</td>
                                    <td>{{ $value->diaChi }}</td>
                                    <td>{{ $value->soDienThoai }}</td>
                                    <td class="text-nowrap">{{ $value->tenNguoiDaiDien }}</td>
                                    <td>{{ $value->email }}</td>
                                    <td class="text-nowrap">{{ $value->tinhTrang == 0 ? 'Tạm dừng' : 'Còn hoạt động'}}</td>
                                    <td class="text-nowrap">
                                        {{-- <a href="/admin/nhacungcap/{{ $value->id }}" class="btn btn-danger">Edit Old</a> --}}
                                        <button type="button" class="editModal btn btn-primary" data-id={{ $value->id }} data-toggle="modal" data-target="#laptrinhABC">
                                            Edit
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <br>
                        {{ $data->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<!-- Modal -->
<div class="modal fade" id="laptrinhABC" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Chỉnh sửa nhà cung cấp</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="text" name="idNhaCungCap" id="idNhaCungCap" hidden>
                <div class="position-relative form-group">
                    <label class="">Tên Nhà Cung Cấp</label>
                    <input id="tenNhaCungCap" name="tenNhaCungCap" class="form-control">
                </div>
                <div class="position-relative form-group">
                    <label class="">Địa Chỉ</label>
                    <input id="diaChi" name="diaChi" class="form-control">
                </div>
                <div class="position-relative form-group">
                    <label class="">Số Điện Thoại</label>
                    <input id="soDienThoai" name="soDienThoai" class="form-control">
                </div>
                <div class="position-relative form-group">
                    <label class="">Email</label>
                    <input id="email" name="email" class="form-control">
                </div>
                <div class="position-relative form-group">
                    <label class="">Tên Người Đại Diện</label>
                    <input id="tenNguoiDaiDien" name="tenNguoiDaiDien" class="form-control">
                </div>
                <div class="position-relative form-group">
                    <label class="">Tình Trạng</label>
                    <select name="tinhTrang" id="tinhTrang" class="form-control">
                        <option value="1">Còn hoạt động</option>
                        <option value="0">Tạm dừng</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button id="updateNhaCungCap" type="button" class="btn btn-primary" data-dismiss="modal">Save changes</button>
            </div>
        </div>
    </div>
</div>
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
        var currentRow;
        $(".editModal").click(function(){
            let id = $(this).data('id');
            currentRow = $(this).closest("tr");

            $.ajax({
                url: '/admin/nhacungcap/' + id,
                type: 'get',
                success: function($nhaCungCap){
                    if(jQuery.isEmptyObject($nhaCungCap) == false){
                        $("#idNhaCungCap").val($nhaCungCap.id);
                        $("#tenNhaCungCap").val($nhaCungCap.tenNhaCungCap);
                        $("#diaChi").val($nhaCungCap.diaChi);
                        $("#soDienThoai").val($nhaCungCap.soDienThoai);
                        $("#email").val($nhaCungCap.email);
                        $("#tenNguoiDaiDien").val($nhaCungCap.tenNguoiDaiDien);
                        $("#tinhTrang").val($nhaCungCap.tinhTrang).change();
                    } else {
                        toastr.error('Hết việc làm hả???');
                    }
                },
            });
        });

        $("#updateNhaCungCap").click(function(){
            let tenNhaCungCapUp   = $("#tenNhaCungCap").val();
            let diaChiUp          = $("#diaChi").val();
            let soDienThoaiUp     = $("#soDienThoai").val();
            let emailUp           = $("#email").val();
            let tenNguoiDaiDienUp = $("#tenNguoiDaiDien").val();
            let idNhaCungCapUp    = $("#idNhaCungCap").val();
            let tinhTrangUp       = $("#tinhTrang").val();

            // var col1 = currentRow.find("td:eq(0)").text();
            // var col2 = currentRow.find("td:eq(1)").text();
            // var col3 = currentRow.find("td:eq(2)").text();

            // alert(col1 + ' ' + col2 + ' ' + col3);
            // console.log(idNhaCungCap);

            $.ajax({
                url: " {{ Route('updateNhaCungCap') }}",
                type: 'post',
                data: {
                    tenNhaCungCap       :   tenNhaCungCapUp,
                    diaChi              :   diaChiUp,
                    soDienThoai         :   soDienThoaiUp,
                    email               :   emailUp,
                    tenNguoiDaiDien     :   tenNguoiDaiDienUp,
                    idNhaCungCap        :   idNhaCungCapUp,
                    tinhTrang           :   tinhTrangUp,
                },
                success: function($nhaCungCap){
                    console.log($nhaCungCap.nhaCungCap.tenNguoiDaiDien);
                    currentRow.find("td:eq(0)").text($nhaCungCap.nhaCungCap.tenNhaCungCap);
                    currentRow.find("td:eq(1)").text($nhaCungCap.nhaCungCap.diaChi);
                    currentRow.find("td:eq(2)").text($nhaCungCap.nhaCungCap.email);
                    currentRow.find("td:eq(3)").text($nhaCungCap.nhaCungCap.tenNguoiDaiDien);
                    currentRow.find("td:eq(4)").text($nhaCungCap.nhaCungCap.tinhTrang == 0 ? 'Tạm dừng' : 'Còn hoạt động');
                    // toastr.success("Đã cập nhật nhà cung cấp thành công!");
                },
                error: function($errors){
                    var err = jQuery.parseJSON($errors.responseText);
                    console.log(err);
                    $.each(err.errors, function(index, value ) {
                        toastr.error(value);
                    });
                },
            });
        });
    });
</script>
@endsection
