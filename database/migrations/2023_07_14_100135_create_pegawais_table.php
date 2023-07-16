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
        Schema::create('pegawais', function (Blueprint $table) {
            $table->id();
            $table->string('nama_depan', 50);
            $table->string('nama_belakang', 50)->nullable();
            $table->string('nip', '20')->unique();
            $table->string('pangkat', 20);
            $table->enum('golongan', ['IV-A', 'III-A', 'III-B', 'III-C']);
            $table->enum('jenkel', ['Laki-laki', 'Perempuan']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegawais');
    }
};
