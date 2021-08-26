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
                                <label id="yeuCauBanDieu" class="text-danger font-italic pl-2"></label>
                            </div>
                            <div class="position-relative form-group">
                                <label class="">Hiển Thị</label>
                                <select name="hienThi" id="exampleSelect" class="form-control">
                                    <option value=0>Trên Và Bên Trái</option>
                                    <option value=1>Chỉ Hiển Thị Ở Trên</option>
                                    <option value=2>Chỉ Hiển Thị Bên Trái</option>
                                    <option value=3>Không Hiển Thị</option>
                                </select>
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
                                <th class="text-center">Hiển Thị</th>
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
                                    <td>
                                        {{$value->is_view_top ? 'Top: Yes':'Top: No'}}
                                        <br>
                                        {{$value->is_view_left ? 'Left: Yes':'Left: No'}}
                                    </td>
                                    @if($value->id < 3)
                                        <td colspan="2" class="text-danger text-center">Hệ thống</td>
                                    @else
                                        <td class="tinhTrang" data-id={{$value->id}}>
                                            @if($value->is_delete == true)
                                                <span class="text-danger">Đã bị xóa</span>
                                            @else
                                                {{ $value->tinhTrang == 0 ? 'Tạm dừng' : 'Còn hoạt động'}}
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            @if($value->is_delete == true)
                                                <a data-id={{ $value->id }} class="btn btn-primary" href="">
                                                    Phục Hồi
                                                </a>
                                            @else
                                            <a class="btn btn-primary" href="/admin/loaisanpham/{{ $value->id }}">
                                                Edit
                                            </a>
                                            <a data-id={{ $value->id }} class="xoaLoaiSanPham btn btn-warning" type="button" data-toggle="modal" data-target="#exampleModal">
                                                    Delete
                                            </a>
                                            @endif
                                        </td>
                                    @endif
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
                <p><span style="color: #ff0000;"><strong>X&oacute;a kiểu 1:</strong></span> X&oacute;a v&agrave; Tất Cả Sản Phẩm c&oacute; T&ecirc;n Loại Sản Phẩm L&agrave;</p>
                <p><span style="color: #ff0000;"><strong>X&oacute;a kiểu 2:</strong> </span>X&oacute;a Mềm v&agrave; Chuyển Sản Phẩm th&agrave;nh Chưa Ph&acirc;n Loại</p>
                <p><span style="color: #ff0000;"><strong>X&oacute;a kiểu 3:</strong></span> X&oacute;a Mềm v&agrave; Chuyển Sản Phẩm th&agrave;nh Khuyến M&atilde;i</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button id="deleteType_1" type="button" class="btn btn-primary" data-dismiss="modal">Xóa Type 1</button>
                <button id="deleteType_2" type="button" class="btn btn-primary" data-dismiss="modal">Xóa Type 2</button>
                <button id="deleteType_3" type="button" class="btn btn-primary" data-dismiss="modal">Xóa Type 3</button>
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
                        toastr.error('Đã thay đổi trạng thái!');
                    } else {
                        self.innerText  = 'Còn hoạt động';
                        toastr.success('Đã thay đổi trạng thái!');
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

        $("#deleteType_1").click(function(){
            let idCanXoa = $("#idCanXoa").val();
            $.ajax({
                url: '/admin/loaisanpham/deleteType_1/' + idCanXoa,
                type: 'get',
                success:function($data){
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

        $("#deleteType_2").click(function(){
            let idCanXoa = $("#idCanXoa").val();
            $.ajax({
                url: '/admin/loaisanpham/deleteType/' + idCanXoa + '/' + 2,
                type: 'get',
                success:function($data){
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

        $("#deleteType_3").click(function(){
            let idCanXoa = $("#idCanXoa").val();
            $.ajax({
                url: '/admin/loaisanpham/deleteType/' + idCanXoa + '/' + 1,
                type: 'get',
                success:function($data){
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

        function ChangeToSlug(title) {
            var slug = title.toLowerCase();

            //Đổi ký tự có dấu thành không dấu
            slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
            slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
            slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
            slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
            slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
            slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
            slug = slug.replace(/đ/gi, 'd');
            //Xóa các ký tự đặt biệt
            slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
            //Đổi khoảng trắng thành ký tự gạch ngang
            slug = slug.replace(/ /gi, "-");
            //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
            //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
            slug = slug.replace(/\-\-\-\-\-/gi, '-');
            slug = slug.replace(/\-\-\-\-/gi, '-');
            slug = slug.replace(/\-\-\-/gi, '-');
            slug = slug.replace(/\-\-/gi, '-');
            //Xóa các ký tự gạch ngang ở đầu và cuối
            slug = '@' + slug + '@';
            slug = slug.replace(/\@\-|\-\@|\@/gi, '');
            //In slug ra textbox có id “slug”

            return slug;
        }

        $("#tenLoaiSanPhamThemMoi").blur(function(){
            let value = $("#tenLoaiSanPhamThemMoi").val();
            let tenLoaiSanPham = ChangeToSlug(value);
            console.log('value vừa điền là: ' + ChangeToSlug(value));
            $.ajax({
                url: '/admin/loaisanpham/find/' + tenLoaiSanPham,
                type: 'get',
                success:function($status){
                    if($status.status == false){
                        $("#yeuCauBanDieu").text("Tên sản phẩm này có rồi!");
                        $("#tenLoaiSanPhamThemMoi").css("border-color", "red");
                        toastr.error('Tên sản phẩm này có rồi!');
                    }
                },
            });
        });
    });
</script>
@endsection
