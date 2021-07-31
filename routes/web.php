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

Route::get('/register', 'DangKyTaiKhoanFakeController@index');
Route::post('/register', 'DangKyTaiKhoanFakeController@store')->name('register');
Route::get('/login', 'DangKyTaiKhoanFakeController@viewLogin');
Route::post('/login', 'DangKyTaiKhoanFakeController@login')->name('login');

Route::prefix('/admin')->group(function () {
    Route::prefix('/nhacungcap')->group(function () {
        Route::get('/', 'NhaCungCapController@index')->name('indexNhaCungCap');
        Route::post('/', 'NhaCungCapController@store')->name('themNhaCungCap');
        Route::get('/{id}', 'NhaCungCapController@edit')->name('editNhaCungCap');
        Route::post('/update', 'NhaCungCapController@update')->name('updateNhaCungCap');
    });
    Route::get('/loaisanpham', 'LoaiSanPhamController@index')->name('indexLoaiSanPham');
    Route::get('/loaiSanPhamThayDoiTinhTrang/{id}', 'LoaiSanPhamController@loaiSanPhamThayDoiTinhTrang');
    Route::post('/loaisanphamindex', 'LoaiSanPhamController@store')->name('themLoaiSanPham');

    Route::get('/loaisanpham/{id}', 'LoaiSanPhamController@edit')->name('editLoaiSanPham');
    Route::post('/loaisanphamupdate', 'LoaiSanPhamController@update')->name('updateLoaiSanPham');

    Route::get('/loaisanpham/deleteType_1/{id}', 'LoaiSanPhamController@deleteType_1')->name('deleteType_1');
    Route::get('/loaisanpham/deleteType/{id}/{type}', 'LoaiSanPhamController@deleteType')->name('deleteType');
    Route::get('/loaisanpham/find/{slugName}', 'LoaiSanPhamController@findSlugName')->name('findSlugName');

    Route::prefix('/sanpham')->group(function () {
        Route::get('/create', 'SanPhamController@create')->name('viewThemSanPham');
        Route::post('/create', 'SanPhamController@store')->name('themSanPham');
        Route::get('/', 'SanPhamController@index')->name('indexSanPham');
    });

});
