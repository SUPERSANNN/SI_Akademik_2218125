<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Laptop;
use App\Models\Supplier;

return new class extends Migration
{
    // Function untuk membuat field pada database
    public function up(): void
    {
        Schema::create('pembelian', function (Blueprint $table) {
            $table->id();
             //ini menyatakan bahwa table penjualan mengambil id dari table laptop
            //dan id_laptop bersifat foreign_key
            $table->foreignIdFor(Laptop::class);
             //ini menyatakan bahwa table penjualan mengambil id dari table supplier
            //id_supplierbersifat foreign_key
            $table->foreignIdFor(Supplier::class);
            //field bertipe integer dengan nama field jumlah_beli
            $table->integer('jumlah_beli');
            $table->integer('harga_beli');
            $table->date('tanggal_pembelian');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembelian');
    }
};
