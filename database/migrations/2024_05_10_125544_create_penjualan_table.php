<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Laptop;

return new class extends Migration
{
   // Function untuk membuat field pada database
    public function up(): void
    {
        Schema::create('penjualan', function (Blueprint $table) {
            $table->id();
            //ini menyatakan bahwa table penjualan mengambil id dari table laptop
            //dan id_laptop bersifat foreign_key
            $table->foreignIdFor(Laptop::class);
            $table->integer('jumlah_jual');
            $table->integer('harga_jual');
            $table->date('tanggal_penjualan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penjualan');
    }
};
