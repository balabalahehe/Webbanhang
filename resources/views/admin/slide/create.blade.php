@extends('admin.share.master')
@section('title')
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-display1 icon-gradient bg-premium-dark">
                </i>
            </div>
            <div>
                Quản Lý Slide Trang Chủ
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
                        <h5 class="card-title">Thêm Mới Silde Trang Chủ</h5>
                        <form method="post" action="{{ Route('homeSlideCreate') }}">
                            @csrf
                            <div class="position-relative form-group">
                                <label class="">Tiêu Đề</label>
                                <input name="title" class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label class="">Sub Tiêu Đề</label>
                                <input name="subtitle" class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label class="">Mô Tả</label>
                                <input name="des" class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label class="">Link Href</label>
                                <input name="href" class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label class="">Button</label>
                                <input name="btn" class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label class="">Nơi Hiển Thị</label>
                                <select name="where_view" class="form-control">
                                    <option value="1">Hiển Thị Slide Chính</option>
                                    <option value="2">Hiển Thị Slide Phụ</option>
                                    <option value="0">Không Hiển Thị</option>
                                </select>
                            </div>
                            <div class="position-relative form-group">
                                <div class="input-group">
                                    <a id="lfm" data-input="thumbnail" data-preview="holder" href="" class="btn btn-primary">
                                        Choose
                                    </a>
                                    <input id="thumbnail" name="url" class="form-control" type="text" name="filepath">
                                </div>
                                <img id="holder" style="margin-top:15px;max-height:100px;">
                            </div>
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                            <script src="/vendor/laravel-filemanager/js/lfm.js"></script>
                            <script>
                                 $('#lfm').filemanager('image');
                            </script>
                            <div class="d-block text-right card-footer">
                                <button class="mt-1 btn btn-primary">Thêm Mới</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="main-card mb-3 card">
                    <div class="card-body"><h5 class="card-title">Danh sách Silde Trang Chủ</h5>
                        <table id="example" class="mb-0 table table-bordered">
                            <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Hình Ảnh</th>
                                <th class="text-center">Tiêu Đề</th>
                                <th class="text-center">Sub Tiêu Đề</th>
                                <th class="text-center">Button</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $key => $value)
                                <tr>
                                    <th class="text-center">{{ $key + 1 }}</th>
                                    <td>
                                        <img src="{{ $value->url }}" style="width: 200px">
                                    </td>
                                    <td> {{ $value->title }}</td>
                                    <td> {{ $value->subtitle }}</td>
                                    <td> <a href="{{$value->href}}" class="btn btn-danger" target="_blank">{{ $value->btn }}</a></td>
                                    <td> Mấy đứa Tự code</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
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
    $(document).ready(function(){
    });
</script>
@endsection
