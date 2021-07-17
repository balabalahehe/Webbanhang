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
                                <input id="tenLoaiSanPhamThemMoi" name="tenLoaiSanPham" class="form-control">
                            </div>
                            <div class="d-block text-right card-footer">
                                <button class="mt-1 btn btn-primary">Thêm Mới</button>
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
                            <input name="id" class="form-control" value="{{ empty($loaiSanPham->id) ? '' : $loaiSanPham->id }}" hidden>

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
                                <button class="mt-1 btn btn-primary">Chỉnh sửa</button>
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
                                        <a class="btn btn-primary" href="/admin/loaisanpham/{{ $value->id }}">
                                            Edit
                                        </a>
                                        <a data-id={{ $value->id }} class="xoaLoaiSanPham btn btn-warning" type="button" data-toggle="modal" data-target="#exampleModal">
                                            Delete
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
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Xóa Loại Sản Phẩm</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input id="idCanXoa" hidden>
                <p class="mb-0">Bạn có muốn xóa loại sản phẩm này không???</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button id="taoChacChan" type="button" class="btn btn-primary" data-dismiss="modal">Tao Chắc Chắn</button>
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
        let row;
        $(".xoaLoaiSanPham").click(function(){
            let id = $(this).data('id');
            row = $(this).parents('tr');
            $("#idCanXoa").val(id);
            console.log('Đã bấm nút xóa loại sản phẩm có id ' + id);
        })

        $("#taoChacChan").click(function(){
            let idCanXoa = $("#idCanXoa").val();
            console.log('Đã bấm nút tao chắc chắn rồi đó hỉ' + idCanXoa);
            $.ajax({
                url: '/admin/loaisanpham/delete/' + idCanXoa,
                type: 'get',
                success:function(){
                    // row.remove();
                    toastr.success('Đã xóa sản phẩm thành công');
                },
                error:function(){
                    toastr.error('Có lỗi rồi chú ơi');
                }
            });
        });

        $("#tenLoaiSanPhamThemMoi").blur(function(){
            let value = $("#tenLoaiSanPhamThemMoi").val();
            console.log('value vừa điề là: ' + string_to_slug(value));
        });
    });
</script>
@endsection
