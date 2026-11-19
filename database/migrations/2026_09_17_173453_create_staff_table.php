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
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('position'); // Contoh: Kepala Sekolah, Ka. TU, Waka Kurikulum, Guru Produktif TJKT, Satpam
            $table->enum('category', ['pimpinan', 'kaprodi', 'guru', 'pegawai']);
            $table->string('sub_category')->nullable(); // Umum, Kejuruan, Operator, Administrasi, Pembukuan, Sopir, Logistik, CS, Satpam
            $table->string('photo')->nullable();
            $table->integer('order_num')->default(0); // Untuk pengurutan hierarki tampilan
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staff');
    }
};