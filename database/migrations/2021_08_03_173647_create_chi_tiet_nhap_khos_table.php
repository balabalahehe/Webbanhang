<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChiTietNhapKhosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chi_tiet_nhap_khos', function (Blueprint $table) {
            $table->id();
            $table->integer('sanPham_id');
            $table->integer('soLuong');
            $table->integer('nhaCungCap_id');
            $table->double('donGiaNhap');
            $table->integer('is_congNo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chi_tiet_nhap_khos');
    }
}
