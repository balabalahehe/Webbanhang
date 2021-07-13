<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSanPhamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('san_phams', function (Blueprint $table) {
            $table->id();
            $table->string('tenSanPham');
            $table->string('slugTenSanPham');
            $table->string('hinhAnh')->nullable();
            $table->string('moTaNgan')->nullable();
            $table->string('moTaDai')->nullable();
            $table->integer('loaiSanPham_id');
            $table->double('trongLuong');
            $table->double('giaKhuyenMai')->nullable();
            $table->double('giaBan');
            $table->integer('tinhTrang');
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
        Schema::dropIfExists('san_phams');
    }
}
