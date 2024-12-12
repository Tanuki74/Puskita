<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pendaftaran_pasiens', function (Blueprint $table) {
            $table->id();
            $table->string('noRegistrasi');
            $table->string('nik');
            $table->string('namaLengkap');
            $table->string('tanggalLahir');
            $table->string('tempatLahir');
            $table->string('jenisKelamin');
            $table->string('kebangsaan');
            $table->string('alamat');
            $table->string('wilayah');
            $table->string('kodePos');
            $table->string('noTelp');
            $table->string('goldar');
            $table->string('agama');
            $table->string('status');
            $table->string('pekerjaan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftaran_pasiens');
    }
};
