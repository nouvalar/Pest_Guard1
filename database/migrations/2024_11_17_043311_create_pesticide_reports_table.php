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
        Schema::create('pesticide_reports', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->date('tanggal');
            $table->time('jam');
            $table->string('nama_pestisida');
            $table->string('jenis_pestisida');
            $table->string('dosis');
            $table->text('catatan')->nullable();
            $table->string('document_path')->nullable();
            $table->string('status_verifikasi')->default('Belum Diverifikasi');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesticide_reports');
    }
};
