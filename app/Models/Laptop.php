<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laptop extends Model
{
    use HasFactory;

    //untuk disable field timestamp pada database
    public $timestamps = false;

    //Menunjukkan table yang ada di database yaitu barang
    protected $table = 'laptop';

    //fillable -> menentukan field mana yang diizinkan diisi secara massal
    protected $fillable = ['merk','model','spesifikasi','stok','harga_beli','harga_jual'];

    //Menunjukkan bahwa table laptop memiliki relasi di tabel penjualan berdasarkan laptop_id
    public function penjualan() {
        return $this->hasOne(Penjualan::class,'laptop_id');
    }

    //Menunjukkan bahwa table laptop memiliki relasi di tabel stok berdasarkan laptop_id
    public function stokBarang() {
        return $this->hasOne(Stok::class,'laptop_id');
    }

    //Menunjukkan bahwa table laptop memiliki relasi di tabel pembelian berdasarkan laptop_id
    public function pembelian() {
        return $this->hasOne(Pembelian::class,'laptop_id');
    }

    
}
