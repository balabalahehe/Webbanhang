<?php

namespace App\Http\Controllers;

use App\Models\ChiTietNhapKho;
use App\Models\NhaCungCap;
use App\Models\SanPham;
use App\Models\tmpChiTietNhapKho;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ChiTietNhapKhoController extends Controller
{
    public function index()
    {
        $tmpChiTietNhapKho = tmpChiTietNhapKho::all();
        $sanPham = SanPham::where('tinhTrang', 1)->get();
        $nhaCungCap = NhaCungCap::where('tinhTrang', 1)->get();

        return view('admin.nhapKho.index', compact('sanPham', 'nhaCungCap', 'tmpChiTietNhapKho'));
    }

    public function store()
    {
        DB::transaction(function () {
            $uuid = Str::uuid();
            //1. Là nó sẽ lấy toàn bộ thông tin ở cái thằng tmp Nhập kho để insert về cho mình
            $tmpChiTietNhapKho = tmpChiTietNhapKho::all();
            // Duyệt qua tất cả các phần tử trong này
            foreach($tmpChiTietNhapKho as $value){
                // Thêm mới cái value đó vào trong table Chi Tiết Nhập Kho
                ChiTietNhapKho::create([
                    'sanPham_id'    => $value->sanPham_id,
                    'soLuong'       => $value->soLuong,
                    'donGiaNhap'    => $value->donGiaNhap,
                    'is_congNo'     => $value->is_congNo,
                    'nhaCungCap_id' => $value->nhaCungCap_id,
                    'hoaDon'        => $uuid,
                ]);
                // Sau khi đưa thằng nào qua thì xóa thằng đó. Ta không sợ lỗi vì đã có transaction
                $value->delete();
            }
        });
    }

    public function show()
    {
        $data = ChiTietNhapKho::select('hoaDon', 'created_at')
                        ->groupBy('hoaDon', 'created_at')->get();

        dd($data->toArray());

        return view('admin.nhapKho.danhsach');
    }

    // public function store2(Request $request)
    // {
    //     $data = $request->toArray();
    //     foreach($data['myrows'] as $value){
    //         dd($value['Tên Sản Phẩm']);
    //     }
    // }
}
