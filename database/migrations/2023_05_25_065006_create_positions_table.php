<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // membuat tabel positions dengan lima kolom di bawah ini di dalam schmema database phpmyadmin
    public function up(): void
    {
        Schema::create('positions', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('name');
            $table->string('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    // Fungsi down dalam file migrasi ini digunakan untuk mendefinisikan tindakan yang harus
    // dilakukan saat melakukan rollback atau mengembalikan migrasi ke keadaan sebelumnya.
    public function down(): void
    {
        Schema::dropIfExists('positions');
}
};