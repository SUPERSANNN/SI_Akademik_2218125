<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        // Function untuk membuat field pada database
        Schema::create('laptop', function (Blueprint $table) {
            $table->id();
            //untuk mengisi table laptop dengan nama field merk dan bertipe data sting dst
            $table->string('merk');
            $table->string('model');
            $table->string('spesifikasi');
            $table->integer('stok');
            $table->integer('harga_beli');
            $table->integer('harga_jual');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laptop');
    }
};
