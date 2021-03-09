<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePekerjaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pekerjaans', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('perusahaan1')->nullable();
            $table->string('posisi1')->nullable();
            $table->string('pendapatan1')->nullable();
            $table->string('tahun1')->nullable();
            $table->string('perusahaan2')->nullable();
            $table->string('posisi2')->nullable();
            $table->string('pendapatan2')->nullable();
            $table->string('tahun2')->nullable();
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
        Schema::dropIfExists('pekerjaans');
    }
}
