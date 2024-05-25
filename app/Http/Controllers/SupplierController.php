<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;

class SupplierController extends Controller
{
     //Function yang memiliki return tampilan halaman data supplier
     public function index(){
        //menampilkan data dari table supplier agar bisa ditampilkan di tampilan
        $supplier = Supplier::all();
        return view("admin.supplier.supplier",compact("supplier"));
    }
 
     //Function yang memiliki return tampilan halaman tambah data supplier
     public function create(){
         return view("admin.supplier.supplier-entry");
     }

     // Function untuk menambahkan data ke dalam database
    public function store(Request $request) {
        //Disini server melakukan validate yang mana berarti field yang ada di dalam validate wajib diisi
        $request->validate([
            "nama" => "required",
            "alamat"=> "required",
            "no_telp"=> "required",
            "email"=> "required",
        ]);

        //function create ini digunakan untuk store data ke dalam database
        Supplier::create($request->all());
        
        //ketika selesai akan di alihkan ke route dengan nama laptop
        return redirect()->route("supplier");
    }

    //function untuk update data dalam database
    public function update(Request $request, $id) {
        //Disini server melakukan validate yang mana berarti field yang ada di dalam validate wajib diisi
        $request->validate([
            "nama" => "required",
            "alamat"=> "required",
            "no_telp"=> "required",
            "email"=> "required",
        ]);

         //Dibuat variable supplier untuk menampung data id dari table supplier
         $supplier = Supplier::find($id);

         // Function update digunakan untuk update data di dalam table
         $supplier->update($request->all());
 
         //ketika selesai akan di alihkan ke route dengan nama supplier
         return redirect()->route("supplier");
    }

     //Function untuk delete data database
     public function destroy($id) {
        //Dibuat variable laptop untuk menampung data id dari table supplier
        $supplier = Supplier::find($id);

        //function delete digunakan untuk menghapus data yang ada di dalam table
        $supplier->delete();

        //ketika selesai akan di alihkan ke route dengan nama supplier
        return redirect()->route("supplier");
    }
}
