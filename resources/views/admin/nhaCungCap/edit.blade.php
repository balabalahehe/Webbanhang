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
                        <form method="post">
                            @csrf
                            <div class="position-relative form-group">
                                <label class="">Tên Nhà Cung Cấp</label>
                                <input value="{{$nhaCungCap->tenNhaCungCap}}" class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label class="">Địa Chỉ</label>
                                <input value="{{$nhaCungCap->diaChi}}" class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label class="">Số Điện Thoại</label>
                                <input value="{{$nhaCungCap->soDienThoai}}" class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label class="">Email</label>
                                <input value="{{$nhaCungCap->email}}" class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label class="">Tên Người Đại Diện</label>
                                <input value="{{$nhaCungCap->tenNguoiDaiDien}}" class="form-control">
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
                                        <a href="/admin/nhacungcap/{{ $value->id }}" class="btn btn-danger">Edit Old</a>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#laptrinhABC">
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

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
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
@endsection
