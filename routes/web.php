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
Route::get('/register', 'AdminController@registerView');
Route::post('/register', 'AdminController@register')->name('adminRegister');
Route::get('/admin/login', 'AdminController@loginView');
Route::get('/admin/logout', 'AdminController@logout');
Route::post('/admin/login', 'AdminController@login')->name('adminLogin');


Route::group(['prefix' => 'admin'], function() {
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

    Route::get('/nhapKhoSanPham', 'ChiTietNhapKhoController@index')->name('nhapKhoSanPham');
    Route::get('/nhapKho', 'ChiTietNhapKhoController@store');

    Route::post('/tmpChiTietNhapKho', 'TmpChiTietNhapKhoController@store');

    Route::get('/tmpChiTietNhapKho/{id}', 'TmpChiTietNhapKhoController@destroy');
    Route::get('/danhSachNhapKho', 'ChiTietNhapKhoController@show')->name('danhSachNhapKho');


    Route::get('/homeSlide', 'HomeSlideController@create');
    Route::post('/homeSlide', 'HomeSlideController@store')->name('homeSlideCreate');

});

Route::get('/', 'HomeController@index');
Route::get('/location', 'HomeController@index');

// Route::get('/', function(){
//     return view('client.master');
// });

Route::post('/register', 'UserController@store')->name('clientRegister');
Route::post('/login', 'UserController@login')->name('clientLogin');
Route::get('/active/{hash}', 'UserController@active');


// Route::get('/chat', 'ChatController@index');
// Route::post('/chat', 'ChatController@create');
// Route::get('/load', 'ChatController@load');

// Route::get('/logout', 'UserController@logout');
// Route::get('chat/delete', 'ChatController@deleteALl');


Route::get('/GetView', 'NewChatController@index');
Route::get('/DeleteAllMessage', 'NewChatController@deleteAll');
Route::get('/newlogin/{id}', 'NewChatController@newLogin');
Route::get('/newLogout', 'NewChatController@newLogout');
Route::post('/newMessage', 'NewChatController@newMessage');
Route::get('/loadAllMessage', 'NewChatController@loadAllMessage');
Route::get('/loadFake', 'NewChatController@loadFake');
