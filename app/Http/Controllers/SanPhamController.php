<?php

namespace App\Http\Controllers;

use App\Http\Requests\themMoiSanPhamRequest;
use App\Models\LoaiSanPham;
use App\Models\SanPham;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class SanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = DB::table('san_phams')
        //     ->join('loai_san_phams', 'san_phams.loaiSanPham_id', '=', 'loai_san_phams.id')
        //     ->select('san_phams.*', 'loai_san_phams.tenLoaiSanPham')
        //     ->get();

        // $data = SanPham::all();
        // $loaiSanPham = LoaiSanPham::all();
        // return view('admin.sanpham.index', compact('data', 'loaiSanPham'));

        $data = SanPham::all();
        return view('admin.sanpham.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $loaiSanPham = LoaiSanPham::where('tinhTrang', \App\Models\LoaiSanPham::tinhTrang_Open)
                                    ->where('is_delete', false)
                                    ->where('id', '>', 2)
                                    ->get();

        return view('admin.sanpham.create', compact('loaiSanPham'));
    }

    public function store(themMoiSanPhamRequest $request)
    {
        if($request->giaKhuyenMai >= $request->giaBan){
            toastr()->error('Gía khuyến mãi không lớn hơn giá bán');
            return redirect()->back()->withInput($request->all());
        }
        for($i = 0; $i < 20; $i++){
            SanPham::create($request->all());
        }
        toastr()->success('Thêm mới sản phẩm thành công');

        return redirect()->route('indexSanPham');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SanPham  $sanPham
     * @return \Illuminate\Http\Response
     */
    public function show($name)
    {
        $begin = 0;
        for($i = Str::length($name) - 1; $i>=0; $i--){
            if($name[$i] == '-'){
                $begin = $i + 1;
                break;
            }
        }
        $id = Str::substr($name, $begin, Str::length($name) - $begin);

        $sanPham = SanPham::find($id);

        if($sanPham){
            return view('client.san-pham', compact('sanPham'));
        } else {
            return redirect('/');
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SanPham  $sanPham
     * @return \Illuminate\Http\Response
     */
    public function edit(SanPham $sanPham)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SanPham  $sanPham
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SanPham $sanPham)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SanPham  $sanPham
     * @return \Illuminate\Http\Response
     */
    public function destroy(SanPham $sanPham)
    {
        //
    }
}
