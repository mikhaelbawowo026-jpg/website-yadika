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
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->string('registration_number')->unique(); // Nomor registrasi pendaftar
            $table->string('full_name'); // Nama Calon Peserta Didik
            $table->text('address'); // Alamat
            $table->string('origin_school'); // Asal Sekolah (SMP/MTs)
            $table->enum('gender', ['Laki-laki', 'Perempuan']); // Jenis Kelamin
            $table->string('birth_place'); // Tempat Lahir
            $table->date('birth_date'); // Tanggal Lahir
            $table->string('selected_major'); // Pilihan Jurusan
            $table->enum('status', ['Menunggu', 'Terverifikasi', 'Ditolak'])->default('Menunggu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};