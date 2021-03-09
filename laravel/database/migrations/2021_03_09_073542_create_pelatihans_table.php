<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePelatihansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelatihans', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('kursus1')->nullable();
            $table->string('sertifikat1')->nullable();
            $table->string('tahun1')->nullable();
            $table->string('kursus2')->nullable();
            $table->string('sertifikat2')->nullable();
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
        Schema::dropIfExists('pelatihans');
    }
}
