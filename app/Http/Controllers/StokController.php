<?php

namespace App\Http\Controllers;

use App\Models\Stok;
use App\Models\Laptop;
use Illuminate\Http\Request;

class StokController extends Controller
{
    //Function yang memiliki return tampilan halaman data stok
    public function index(){
        //menampilkan data dari table stok agar bisa ditampilkan di tampilan
        $stok = Stok::all();
        //menampilkan data dari table laptop, karena ingin menampilkannya dalam dropdown
        $laptop = Laptop::all();
        return view("admin.stok.stok",compact("stok","laptop"));
    }
 
     //Function yang memiliki return tampilan halaman tambah data stok
     public function create(){
         //menampilkan data dari table laptop, karena ingin menampilkannya dalam dropdown
         $laptop = Laptop::all();
         return view("admin.stok.stok-entry",compact("laptop"));
     }

     // Function untuk menambahkan data ke dalam database
    public function store(Request $request) {
        //Disini server melakukan validate yang mana berarti field yang ada di dalam validate wajib diisi
        $request->validate([
            "laptop_id" => "required",
            "jumlah"=> "required",
            "tipe_transaksi"=> "required",
            "tanggal"=> "required",
        ]);

        //function create ini digunakan untuk store data ke dalam database
        Stok::create($request->all());
        
        //ketika selesai akan di alihkan ke route dengan nama stok
        return redirect()->route("stok");
    }

    //function untuk update data dalam database
    public function update(Request $request, $id) {
        //Disini server melakukan validate yang mana berarti field yang ada di dalam validate wajib diisi
        $request->validate([
            "laptop_id" => "required",
            "jumlah"=> "required",
            "tipe_transaksi"=> "required",
            "tanggal"=> "required",
        ]);

         //Dibuat variable laptop untuk menampung data id dari table stok
         $stok = Stok::find($id);

         // Function update digunakan untuk update data di dalam table
         $stok->update($request->all());
 
         //ketika selesai akan di alihkan ke route dengan nama stok
         return redirect()->route("stok");
    }

     //Function untuk delete data database
     public function destroy($id) {
        //Dibuat variable laptop untuk menampung data id dari table stok
        $stok = Stok::find($id);

        //function delete digunakan untuk menghapus data yang ada di dalam table
        $stok->delete();

        //ketika selesai akan di alihkan ke route dengan nama stok
        return redirect()->route("stok");
    }

}
