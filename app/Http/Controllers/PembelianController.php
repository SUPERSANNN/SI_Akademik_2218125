<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pembelian;
use App\Models\Supplier;
use App\Models\Laptop;

class PembelianController extends Controller
{
     //Function yang memiliki return tampilan halaman data pembelian
     public function index(){
        //menampilkan data dari table pembelian, karena ingin menampilkannya dalam table
        $pembelian = Pembelian::all();  
        //menampilkan data dari table laptop, karena ingin menampilkannya dalam dropdown
        $laptop = Laptop::all();
        //menampilkan data dari table supplier, karena ingin menampilkannya dalam dropdown
        $supplier = Supplier::all();
        return view("admin.pembelian.pembelian",compact("pembelian","laptop","supplier"));
    }

    //Function yang memiliki return tampilan halaman tambah data pembelian
    public function create(){
        //menampilkan data dari table laptop, karena ingin menampilkannya dalam dropdown
        $laptop = Laptop::all();
        //menampilkan data dari table supplier, karena ingin menampilkannya dalam dropdown
        $supplier = Supplier::all();
        return view("admin.pembelian.pembelian-entry", compact("laptop","supplier"));
    }

    // Function untuk menambahkan data ke dalam database
    public function store(Request $request) {
        //Disini server melakukan validate yang mana berarti field yang ada di dalam validate wajib diisi
        $request->validate([
            "laptop_id" => "required",
            "supplier_id"=> "required",
            "jumlah_beli"=> "required",
            "harga_beli"=> "required",
            "tanggal_pembelian"=> "required",
        ]);

        //function create ini digunakan untuk store data ke dalam database
        Pembelian::create($request->all());
        
        //ketika selesai akan di alihkan ke route dengan nama pembelian
        return redirect()->route("pembelian");
    }

    //function untuk update data dalam database
    public function update(Request $request, $id) {
        //Disini server melakukan validate yang mana berarti field yang ada di dalam validate wajib diisi
        $request->validate([
            "laptop_id" => "required",
            "supplier_id"=> "required",
            "jumlah_beli"=> "required",
            "harga_beli"=> "required",
            "tanggal_pembelian"=> "required",
        ]);

         //Dibuat variable laptop untuk menampung data id dari table pembelian
         $pembelian = Pembelian::find($id);

         // Function update digunakan untuk update data di dalam table
         $pembelian->update($request->all());
 
         //ketika selesai akan di alihkan ke route dengan nama pembelian
         return redirect()->route("pembelian");
    }

     //Function untuk delete data database
     public function destroy($id) {
        //Dibuat variable laptop untuk menampung data id dari table pembelian
        $pembelian = Pembelian::find($id);

        //function delete digunakan untuk menghapus data yang ada di dalam table
        $pembelian->delete();

        //ketika selesai akan di alihkan ke route dengan nama pembelian
        return redirect()->route("pembelian");
    }
}
