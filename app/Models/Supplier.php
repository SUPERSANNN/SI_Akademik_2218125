<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    //untuk disable field timestamp pada database
    public $timestamps = false;

    //Menunjukkan table yang ada di database yaitu supplier
    protected $table = 'supplier';

    //fillable -> menentukan field mana yang diizinkan diisi secara massal
    protected $fillable = ['nama','alamat','no_telp','email'];

    //Menunjukkan bahwa table supplier memiliki relasi di tabel pembelian berdasarkan supplier
    public function pembelian() {
        return $this->hasOne(Pembelian::class,'supplier_id');
    }
}
