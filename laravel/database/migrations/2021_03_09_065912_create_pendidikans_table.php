<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendidikansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendidikans', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('pendidikan1')->nullable();
            $table->string('institusi1')->nullable();
            $table->string('jurusan1')->nullable();
            $table->string('lulus1')->nullable();
            $table->string('ipk1')->nullable();
            $table->string('pendidikan2')->nullable();
            $table->string('institusi2')->nullable();
            $table->string('jurusan2')->nullable();
            $table->string('lulus2')->nullable();
            $table->string('ipk2')->nullable();
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
        Schema::dropIfExists('pendidikans');
    }
}
