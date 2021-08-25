@extends('admin.share.master')
@section('title')
<div class="page-title-wrapper">
    <div class="page-title-heading">
        <div class="page-title-icon">
            <i class="pe-7s-display1 icon-gradient bg-premium-dark">
            </i>
        </div>
        <div>
            Danh Sách Đơn Hàng Nhập Kho
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
                      <h5 class="card-title">Danh Sách Đơn Hàng</h5>
                      <table class="mb-0 table table-bordered">
                        <thead>
                          <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">UUID</th>
                            <th class="text-center">Ngày Nhập</th>
                            <th class="text-center">Tổng Tiền</th>
                            <th class="text-center">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th class="text-center" scope="row">1</th>
                            <td class="text-center">Mark</td>
                            <td class="text-center">Mark</td>
                            <td>Mark</td>
                            <td class="text-center">Chi Tiết</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                      <h5 class="card-title">Chi Tiết Đơn Hàng</h5>
                      <table class="mb-0 table table-bordered">
                        <thead>
                          <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Tên Sản Phẩm</th>
                            <th class="text-center">Số Lượng</th>
                            <th class="text-center">Đơn Giá</th>
                            <th class="text-center">Thành Tiền</th>
                            <th class="text-center">Nhà Cung Cấp</th>
                            <th class="text-center">Công Nợ</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th class="text-center" scope="row">1</th>
                            <td>Mark</td>
                            <td>Mark</td>
                            <td>Mark</td>
                            <td>Mark</td>
                            <td>Mark</td>
                            <td>Mark</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
