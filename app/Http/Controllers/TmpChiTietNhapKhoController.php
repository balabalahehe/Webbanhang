<?php

namespace App\Http\Controllers;

use App\Models\tmpChiTietNhapKho;
use Illuminate\Http\Request;

class TmpChiTietNhapKhoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        $data = tmpChiTietNhapKho::all();
        $status = true;
        foreach($data as $value){
            if($value->sanPham_id == $request->sanPham_id && $value->nhaCungCap_id == $request->nhaCungCap_id && $value->donGiaNhap == $request->donGiaNhap){
                $value->soLuong += $request->soLuong;
                $value->save();
                $status = false;
                break;
            }
        }
        if($status == true){
            $data = tmpChiTietNhapKho::create($request->all());
            return response()->json(['status' => $status, 'data' => $data->id]);
        } else {
            // status = false;
            return response()->json(['status' => $status]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tmpChiTietNhapKho  $tmpChiTietNhapKho
     * @return \Illuminate\Http\Response
     */
    public function show(tmpChiTietNhapKho $tmpChiTietNhapKho)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tmpChiTietNhapKho  $tmpChiTietNhapKho
     * @return \Illuminate\Http\Response
     */
    public function edit(tmpChiTietNhapKho $tmpChiTietNhapKho)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tmpChiTietNhapKho  $tmpChiTietNhapKho
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tmpChiTietNhapKho $tmpChiTietNhapKho)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tmpChiTietNhapKho  $tmpChiTietNhapKho
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dataDelete = tmpChiTietNhapKho::find($id);
        if($dataDelete){
            $dataDelete->delete();
            return response()->json(['trangThai' => 'success']);
        } else {
            return response()->json(['trangThai' => 'error']);
        }
    }
}
