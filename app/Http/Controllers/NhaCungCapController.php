<?php

namespace App\Http\Controllers;

use App\Http\Requests\themMoiNhaCungCapRequest;
use App\Models\NhaCungCap;
use Illuminate\Http\Request;

class NhaCungCapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = NhaCungCap::paginate(10);

        return view('admin.nhaCungCap.index', compact('data'));
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
    public function store(themMoiNhaCungCapRequest $request)
    {
        // dd($request->toArray());
        $data = NhaCungCap::create([
                'tenNhaCungCap'     => $request->tenNhaCungCap,
                'diaChi'            => $request->diaChi,
                'soDienThoai'       => $request->soDienThoai,
                'email'             => $request->email,
                'maSoThue'          => $request->maSoThue,
                'tinhTrang'         => 1,
                'tenNguoiDaiDien'   => $request->tenNguoiDaiDien,
        ]);

        toastr()->success('Ê, Thêm được rồi đó hỉ');

        return redirect()->Route('indexNhaCungCap');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\NhaCungCap  $nhaCungCap
     * @return \Illuminate\Http\Response
     */
    public function show(NhaCungCap $nhaCungCap)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\NhaCungCap  $nhaCungCap
     * @return \Illuminate\Http\Response
     */
    public function edit(NhaCungCap $nhaCungCap)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\NhaCungCap  $nhaCungCap
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NhaCungCap $nhaCungCap)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\NhaCungCap  $nhaCungCap
     * @return \Illuminate\Http\Response
     */
    public function destroy(NhaCungCap $nhaCungCap)
    {
        //
    }
}