<?php

namespace App\Http\Controllers;

use App\Http\Requests\chinhSuaLoaiSanPhamRequest;
use App\Http\Requests\themMoiLoaiSanPhamRequest;
use App\Models\LichSuThaoTac;
use App\Models\LoaiSanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
class LoaiSanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = LoaiSanPham::paginate(10);
        $loaiSanPham = null;
        return view('admin.loaisanpham.index', compact('data', 'loaiSanPham'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(themMoiLoaiSanPhamRequest $request)
    {
        $loaiSanPham = LoaiSanPham::create([
            'tenLoaiSanPham'    => $request->tenLoaiSanPham,
            'slugLoaiSanPham'   => Str::slug($request->tenLoaiSanPham),
            'tinhTrang'         => 1,
        ]);

        LichSuThaoTac::create([
            'page'      =>  '/admin/loaisanpham',
            'action'    =>  'Thêm Mới',
            'content'   =>  'Thêm mới loại sản phẩm có id: ' . $loaiSanPham->id . ' có tên là: ' . $loaiSanPham->tenLoaiSanPham,
            'user_id'   =>  1,
        ]);

        toastr()->success('Thêm mới loại sản phẩm thành công');

        return redirect()->Route('indexLoaiSanPham');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\LoaiSanPham  $loaiSanPham
     * @return \Illuminate\Http\Response
     */
    public function show(LoaiSanPham $loaiSanPham)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LoaiSanPham  $loaiSanPham
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $loaiSanPham = LoaiSanPham::where('id', $id)->get();

        if(!empty($loaiSanPham)){
            $data = LoaiSanPham::paginate(10);
            return view('admin.loaisanpham.index', compact('data', 'loaiSanPham'));
        } else {
            toastr()->error('Đi đâu thế bạn???');
            return redirect()->route('indexLoaiSanPham');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LoaiSanPham  $loaiSanPham
     * @return \Illuminate\Http\Response
     */
    public function update(chinhSuaLoaiSanPhamRequest $request)
    {
        $loaiSanPham = LoaiSanPham::where('slugLoaiSanPham', Str::slug($request->tenLoaiSanPham))
                                    ->where('id', '<>', $request->id)
                                    ->get();

        if(count($loaiSanPham) > 0){
            toastr()->error('Tên loại sản phẩm đã tồn tại!');
            return redirect()->back();
        }

        $loaiSanPham = LoaiSanPham::find($request->id);
        $loaiSanPham->tenLoaiSanPham = $request->tenLoaiSanPham;
        $loaiSanPham->slugLoaiSanPham = Str::slug($request->tenLoaiSanPham);
        $loaiSanPham->tinhTrang = $request->tinhTrang;
        $loaiSanPham->save();

        toastr()->success('Đã cập nhật loại sản phẩm thành công!');
        return redirect()->route('indexLoaiSanPham');
    }

    public function loaiSanPhamThayDoiTinhTrang($id)
    {
        $loaiSanPham = LoaiSanPham::find($id);
        $loaiSanPham->tinhTrang = ($loaiSanPham->tinhTrang + 1) % 2;
        $loaiSanPham->save();
        // dd($loaiSanPham);
        return response()->json($loaiSanPham);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LoaiSanPham  $loaiSanPham
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $loaiSanPham = LoaiSanPham::find($id);

        if(!empty($loaiSanPham)){
            $loaiSanPham->delete();
            return response()->json($loaiSanPham);
        }
    }

    public function findSlugName($slugName)
    {
        DB::enableQueryLog();

        $loaiSanPham = LoaiSanPham::where('slugLoaiSanPham', $slugName)->first();

        dd(DB::getQueryLog());
        if(empty($loaiSanPham)){
            $status = true;
        } else {
            $status = false;
        }

        return response()->json(['status' => $status]);
    }

}
