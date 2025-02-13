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
        Schema::create('messages', function (Blueprint $table) {
            $table->id(); // ID untuk setiap pesan
            $table->foreignId('sender_id')->constrained('users'); // Pengirim pesan (relasi ke tabel users)
            $table->foreignId('receiver_id')->constrained('users'); // Penerima pesan (relasi ke tabel users)
            $table->text('message'); // Isi pesan
            $table->timestamps(); // Waktu pengiriman pesan
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
