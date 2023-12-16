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
        Schema::create('lamarans', function (Blueprint $table) {
            $table->increments('id_lamaran');
            $table->unsignedInteger('id_lowongan');
            $table->text('surat_lamaran');
            $table->text('cv');
            $table->text('ktp');
            $table->text('ijazah_pendidikan');
            $table->text('transkip_nilai');
            $table->text('sertifikat');
            $table->text('skck');
            $table->text('kartu_kuning');   
            $table->text('sks');
            $table->enum('status', ['Aktif','Tidak Aktif']);
            $table->foreign('id_lowongan')->references('id_lowongan')->on('lowongans')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lamarans');
    }
};
