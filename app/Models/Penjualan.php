<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;

    //untuk disable field timestamp pada database
    public $timestamps = false;

    //Menunjukkan table yang ada di database yaitu penjualan
    protected $table = 'penjualan';

    //fillable -> menentukan field mana yang diizinkan diisi secara massal
    protected $fillable = ['laptop_id','jumlah_jual','harga_jual','tanggal_penjualan'];

    //Function ini menandakan bahwa memiliki relasi dengan table laptop melalui id_laptop 
    public function laptop() {
        return $this->belongsTo(Laptop::class,'laptop_id');
    }
}
