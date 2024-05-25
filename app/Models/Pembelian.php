<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    use HasFactory;

    //untuk disable field timestamp pada database
    public $timestamps = false;

    //Menunjukkan table yang ada di database yaitu pembelian
    protected $table = 'pembelian';

    //fillable -> menentukan field mana yang diizinkan diisi secara massal
    protected $fillable = ['laptop_id','supplier_id','jumlah_beli','harga_beli','tanggal_pembelian'];

    //Function ini menandakan bahwa memiliki relasi dengan table laptop melalui id_supplier
    public function laptop() {
        return $this->belongsTo(Laptop::class,'laptop_id');
    }

    //Function ini menandakan bahwa memiliki relasi dengan table supplier melalui id_supplierr
    public function supplier() {
        return $this->belongsTo(Supplier::class,'supplier_id');
    }
}
