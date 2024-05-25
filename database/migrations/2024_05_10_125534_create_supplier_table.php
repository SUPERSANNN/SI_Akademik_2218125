<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // Function untuk membuat field pada database
    public function up(): void
    {
        Schema::create('supplier', function (Blueprint $table) {
            $table->id();
            //untuk mengisi table supploer dengan nama field nama dan bertipe data sting dst
            $table->string('nama');
            $table->string('alamat');
            $table->string('no_telp');
            $table->string('email');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('supplier');
    }
};
