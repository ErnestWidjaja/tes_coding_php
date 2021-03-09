<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiodatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodatas', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->string('nama')->nullable();
            $table->string('posisi')->nullable();
            $table->string('no_ktp')->nullable();
            $table->string('ttl')->nullable();
            $table->string('jk')->nullable();
            $table->string('agama')->nullable();
            $table->string('golongan_darah')->nullable();
            $table->string('status')->nullable();
            $table->string('alamat_ktp')->nullable();
            $table->string('alamat_tinggal')->nullable();
            $table->string('email')->nullable();
            $table->string('telp')->nullable();
            $table->string('orang_terdekat')->nullable();
            $table->string('skill')->nullable();
            $table->string('ditempatkan')->nullable();
            $table->string('penghasilan')->nullable();
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
        Schema::dropIfExists('biodatas');
    }
}
