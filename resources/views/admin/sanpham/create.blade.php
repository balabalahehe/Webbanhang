@extends('admin.share.master')
@section('title')
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-display1 icon-gradient bg-premium-dark">
                </i>
            </div>
            <div>
                Quản Lý Sản phẩm
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
                    <div class="card-body">
                        <h5 class="card-title">Thông Tin Sản Phẩm</h5>
                        <form method="post" action="{{ Route('themSanPham') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label class="">Tên Sản Phẩm</label>
                                        <input id="tenSanPham" name="tenSanPham" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label class="">Slug Tên Sản Phẩm</label>
                                        <input id="slugTenSanPham" name="slugTenSanPham" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="position-relative form-group">
                                <div class="input-group">
                                    <a id="lfm" data-input="thumbnail" data-preview="holder" class="mt-1 btn btn-light">
                                        Choose
                                    </a>
                                    <input id="thumbnail" name="hinhAnh" class="form-control" type="text" name="filepath">
                                </div>
                                <img id="holder" style="margin-top:15px;max-height:100px;">
                            </div>
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                            <script src="/vendor/laravel-filemanager/js/lfm.js"></script>
                            <script>
                                 $('#lfm').filemanager('image');
                            </script>
                            <div class="position-relative form-group">
                                <label class="">Mô Tả Ngắn</label>
                                <textarea name="moTaNgan" class="form-control" row=5></textarea>
                            </div>
                            <div class="position-relative form-group">
                                <label class="">Nội Dung</label>
                                <textarea id="my-editor-2" name="moTaDai" class="form-control">

                                </textarea>
                                <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
                                <script>
                                    var options = {
                                        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                                        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
                                        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                                        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
                                    };
                                </script>
                                <script>
                                    CKEDITOR.replace('my-editor-2', options);
                                </script>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label class="">Loại Sản Phẩm</label>
                                        <select name="loaiSanPham_id" class="form-control">
                                        @foreach ($loaiSanPham as $value)
                                            <option value="{{ $value->id }}">{{ $value->tenLoaiSanPham }}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label class="">Trọng Lượng</label>
                                        <div class="input-group">
                                            <input name="trongLuong" class="form-control">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroupPrepend">gram</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label class="">Tình Trạng</label>
                                        <select name="tinhTrang" class="form-control">
                                            <option value=1>Còn kinh doanh</option>
                                            <option value=0>Tạm dừng kinh doanh</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label class="">Giá Khuyến Mãi</label>
                                        <div class="input-group">
                                            <input id="giaKhuyenMai" name="giaKhuyenMai" class="form-control">
                                            {{-- <input id="giaKhuyenMaiA" name="giaKhuyenMai" class="form-control" hidden> --}}
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroupPrepend">đ</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label class="">Giá Bán</label>
                                        <div class="input-group">
                                            <input id="giaBan" name="giaBan" class="form-control">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroupPrepend">đ</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-block text-right card-footer">
                                <button id="submit" class="mt-1 btn btn-primary">Submit</button>
                            </div>
                        </form>
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
        $("#tenSanPham").blur(function(){
            var tenSanPham = $("#tenSanPham").val();
            $('#slugTenSanPham').val(ChangeToSlug(tenSanPham));
        });
        // $("#giaKhuyenMai").keyup(function(){
        //     var giaKM = $("#giaKhuyenMai").val();
        //     $("#giaKhuyenMai").val(new Intl.NumberFormat().format(giaKM));
        // });
        // $("#giaKhuyenMai").blur(function(){
        //     var giaKM = $("#giaKhuyenMai").val();
        //     var number = parseInt(giaKM);
        //     $("#giaKhuyenMai").val(new Intl.NumberFormat().format(giaKM));
        //     $("#giaKhuyenMaiA").val(number);
        // });
        // $("#giaBan").blur(function(){
        //     var giaKM = $("#giaKhuyenMai").val();
        //
        //     if(giaBan < giaKM){
        //         toastr.error("Giá bán không được nhỏ hơn giá khuyến mãi");
        //         $("#submit").prop('disabled', true);
        //     } else {
        //         $("#submit").prop('disabled', false);
        //     }
        // });

    });

</script>
@endsection
