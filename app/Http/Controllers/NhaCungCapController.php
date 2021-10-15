<?php

namespace App\Http\Controllers;

use App\Http\Requests\chinhSuaNhaCungCapRequest;
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

        toastr()->success('Thêm nhà cung cấp thành công');

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
    public function edit($id)
    {
        $nhaCungCap = NhaCungCap::find($id);
        return response()->json($nhaCungCap);
        // $data = NhaCungCap::paginate(5);
        // $data = NhaCungCap::where('id', $id)->first();
        // $data = NhaCungCap::where('id', $id)->get();
        // $data = NhaCungCap::where('id', $id)->paginate();
        // return view('admin.nhaCungCap.edit', compact('data','nhaCungCap'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\NhaCungCap  $nhaCungCap
     * @return \Illuminate\Http\Response
     */
    public function update(chinhSuaNhaCungCapRequest $request)
    {
        $nhaCungCap = NhaCungCap::find($request->idNhaCungCap);
        if(!empty($nhaCungCap)){
            $nhaCungCap->update($request->all());
        }

        $status = empty($nhaCungCap) ? false : true;

        return response()->json(['status' => $status, 'nhaCungCap' => $nhaCungCap]);
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
