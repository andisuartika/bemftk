<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateValidasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('validasis', function (Blueprint $table) {
            $table->id();
            $table->string('nim');
            $table->integer('id_validator');
            $table->string('tahun');
            $table->string('semester');
            $table->string('jenis_prestasi');
            $table->string('nama_prestasi');
            $table->string('keterangan');
            $table->string('status');
            $table->string('file');
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
        Schema::dropIfExists('validasis');
    }
}
