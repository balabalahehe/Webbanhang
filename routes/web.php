<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::prefix('/admin')->group(function () {
    Route::get('/nhacungcap', 'NhaCungCapController@index')->name('indexNhaCungCap');
    Route::post('/nhacungcap', 'NhaCungCapController@store')->name('themNhaCungCap');
    Route::get('/nhacungcap/{id}', 'NhaCungCapController@edit')->name('editNhaCungCap');


    Route::get('/loaisanpham', 'LoaiSanPhamController@index')->name('indexLoaiSanPham');
    Route::get('/loaiSanPhamThayDoiTinhTrang/{id}', 'LoaiSanPhamController@loaiSanPhamThayDoiTinhTrang');
    Route::post('/loaisanphamindex', 'LoaiSanPhamController@store')->name('themLoaiSanPham');

    Route::get('/loaisanpham/{id}', 'LoaiSanPhamController@edit')->name('editLoaiSanPham');
    Route::post('/loaisanphamupdate', 'LoaiSanPhamController@update')->name('updateLoaiSanPham');

});
