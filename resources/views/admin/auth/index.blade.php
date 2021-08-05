@extends('admin.share.master')
@section('title')
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-display1 icon-gradient bg-premium-dark">
                </i>
            </div>
            <div>
                Quản Lý Thành Viên
            </div>
        </div>
    </div>
@endsection
@section('content')
<div class="tab-content">
    <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
        <div class="row">
            <div class="col-md-4">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title">Thêm Mới Tài Khoản Admin</h5>
                        <form method="post" action="{{ Route('adminRegister') }}">
                            @csrf
                            <div class="position-relative form-group">
                                <label class="">Họ Và Tên</label>
                                <input name="hovaten" class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label class="">Email</label>
                                <input name="email" class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label class="">Mật khẩu</label>
                                <input name="password" class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label class="">Quyền</label>
                                <select name="role" class="form-control">
                                    <option value="0">Admin Master</option>
                                    <option value="1">Trưởng Phòng</option>
                                    <option value="2">Phá Phòng</option>
                                    <option value="3">Tổ Trưởng</option>
                                    <option value="4">Nhân Viên</option>
                                </select>
                            </div>
                            <div class="d-block text-right card-footer">
                                <button class="mt-1 btn btn-primary">Thêm Mới</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="main-card mb-3 card">
                    <div class="card-body"><h5 class="card-title">Danh sách Nhân Viên</h5>
                        <table id="example" class="mb-0 table table-bordered">
                            @php
                                $role = [
                                    'Master Admin',
                                    'Trưởng Phòng',
                                    'Phá Phòng',
                                    'Tổ Trưởng',
                                    'Nhân Viên',
                                ];
                            @endphp
                            <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Họ Lót</th>
                                <th class="text-center">Tên</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Quyền</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $key => $value)
                                <tr>
                                    <th class="text-center">{{ $key + 1}}</th>
                                    <td>{{ $value->first_name }}</td>
                                    <td>{{ $value->last_name }}</td>
                                    <td>{{ $value->email }}</td>
                                    <td>{{ $role[$value->role] }}</td>
                                    <td>Action</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
