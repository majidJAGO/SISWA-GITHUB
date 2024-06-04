<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jurusanpplg', function (Blueprint $table) {
            $table->id();
            $table->integer('nis');
            $table->string('nama', 200);
            $table->string('kelas_jurusan', 100);
            $table->string('nama_ibu', 100);
            $table->string('nama_ayah', 100);
            $table->string('nama_wali', 100)->nullable();
            $table->string('no_telp_ibu', 15);
            $table->string('no_telp_ayah', 15);
            $table->string('no_telp_wali', 15)->nullable();
            $table->string('foto_siswa', 500);
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
        Schema::dropIfExists('jurusanpplg');
    }
};
