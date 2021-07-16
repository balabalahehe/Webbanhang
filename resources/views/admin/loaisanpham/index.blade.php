@extends('admin.share.master')
@section('title')
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-display1 icon-gradient bg-premium-dark">
                </i>
            </div>
            <div>
                Quản Lý Loại Sản Phẩm
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
                        <h5 class="card-title">Thêm Mới Loại Sản Phẩm</h5>
                        <form method="post" action="{{ Route('themLoaiSanPham') }}">
                            @csrf
                            <div class="position-relative form-group">
                                <label class="">Tên Loại Sản Phẩm</label>
                                <input name="tenLoaiSanPham" class="form-control">
                            </div>
                            <div class="d-block text-right card-footer">
                                <button class="mt-1 btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title">Chỉnh Sửa Loại Sản Phẩm</h5>
                        <form method="post" action="{{ Route('updateLoaiSanPham') }}">
                            @csrf
                            <div class="position-relative form-group">
                                <label class="">ID</label>
                                <input name="id" class="form-control" value="{{ empty($loaiSanPham->id) ? '' : $loaiSanPham->id }}">
                            </div>
                            <div class="position-relative form-group">
                                <label class="">Tên Loại Sản Phẩm</label>
                                <input name="tenLoaiSanPham" class="form-control" value="{{ empty($loaiSanPham->tenLoaiSanPham) ? '' : $loaiSanPham->tenLoaiSanPham }}">
                            </div>
                            <div class="position-relative form-group">
                                <label for="exampleSelect" class="">Tình trạng</label>
                                <select name="tinhTrang" id="exampleSelect" class="form-control">
                                    <option value="1">Còn hoạt động</option>
                                    <option value="0">Tạm dừng</option>
                                </select>
                            </div>
                            <div class="d-block text-right card-footer">
                                <button class="mt-1 btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="main-card mb-3 card">
                    <div class="card-body"><h5 class="card-title">Danh sách Loại Sản Phẩm</h5>
                        <table id="example" class="mb-0 table table-bordered">
                            <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Tên Loại Sản Phẩm</th>
                                <th class="text-center">Link Loại Sản Phẩm</th>
                                <th class="text-center">Tình Trạng</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $key => $value)
                                <tr>
                                    <th class="text-center"> {{ $key + 1 }}</th>
                                    <td>{{ $value->tenLoaiSanPham }}</td>
                                    <td>{{ $value->slugLoaiSanPham }}</td>
                                    <td class="tinhTrang" data-id={{$value->id}}>{{ $value->tinhTrang == 0 ? 'Tạm dừng' : 'Còn hoạt động'}}</td>
                                    <td class="text-center">
                                        <a href="/admin/loaisanpham/{{ $value->id }}">
                                            <i class="pe-7s-pen"></i>
                                        </a>
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
        $(".tinhTrang").click(function(){
            let id = $(this).data('id');
            let self = this;
            console.log('Tao click được rồi' + id);
            $.ajax({
                url  : '/admin/loaiSanPhamThayDoiTinhTrang/' + id,
                type : 'get',
                success:function($loaiSanPham){
                    if($loaiSanPham['tinhTrang'] == 0){
                        self.innerText  = 'Tạm dừng';
                    } else {
                        self.innerText  = 'Còn hoạt động';
                    }
                }
            });
        });
    });
</script>
@endsection
