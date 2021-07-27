<?php

namespace App\Http\Controllers;

use App\DangKyTaiKhoanFake;
use App\Models\DangKyTaiKhoanFake as ModelsDangKyTaiKhoanFake;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DangKyTaiKhoanFakeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ModelsDangKyTaiKhoanFake::create($request->all());
    }

    public function viewLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $sql = "select * from dang_ky_tai_khoan_fakes where user_name = '" . $request->user_name . "' and password = '" . $request->password . "'";
        $kq = DB::select($sql);
        if(!empty($kq))
            echo 'Đăng nhập thành công';
        else
            echo 'Đăng nhập thất bại';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DangKyTaiKhoanFake  $dangKyTaiKhoanFake
     * @return \Illuminate\Http\Response
     */
    public function show(DangKyTaiKhoanFake $dangKyTaiKhoanFake)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DangKyTaiKhoanFake  $dangKyTaiKhoanFake
     * @return \Illuminate\Http\Response
     */
    public function edit(DangKyTaiKhoanFake $dangKyTaiKhoanFake)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DangKyTaiKhoanFake  $dangKyTaiKhoanFake
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DangKyTaiKhoanFake $dangKyTaiKhoanFake)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DangKyTaiKhoanFake  $dangKyTaiKhoanFake
     * @return \Illuminate\Http\Response
     */
    public function destroy(DangKyTaiKhoanFake $dangKyTaiKhoanFake)
    {
        //
    }
}
