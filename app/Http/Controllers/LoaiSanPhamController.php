<?php

namespace App\Http\Controllers;

use App\Http\Requests\chinhSuaLoaiSanPhamRequest;
use App\Http\Requests\themMoiLoaiSanPhamRequest;
use App\Models\LichSuThaoTac;
use App\Models\LoaiSanPham;
use App\Models\SanPham;
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
        // $data = LoaiSanPham::where('id', '>', 2)->paginate(10);
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
        if($id < 3){
            return -1;
        }
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
    public function deleteType_1($id)
    {
        $status = true;
        if($id < 3){
            $status = false;
            return response()->json($status);
        }
        $loaiSanPham = LoaiSanPham::find($id);

        if(!empty($loaiSanPham)){
            $sanPham = SanPham::where('loaiSanPham_id', $id);
            $sanPham->delete();
            $loaiSanPham->delete();
            return response()->json([$loaiSanPham, $status]);
        }
    }

    public function deleteType($id, $type)
    {
        $status = true;
        if($id < 3 || $type > 2 || $type < 1){
            $status = false;
            return response()->json($status);
        }
        $loaiSanPham = LoaiSanPham::find($id);
        
        DB::transaction(function () use($id, $type, $status) {
            if(!empty($loaiSanPham)){
                $sanPham = SanPham::where('loaiSanPham_id', $id)->get();
                foreach($sanPham as $value){
                    $value->loaiSanPham_id = $type;
                    $value->save();
                }
                $loaiSanPham->is_delete = true;
                $loaiSanPham->sav();
                return response()->json([$loaiSanPham, $status]);
            }
        });
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
