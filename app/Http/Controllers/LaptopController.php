<?php

namespace App\Http\Controllers;

use App\Models\Laptop;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class LaptopController extends Controller
{
    //Function yang memiliki return tampilan halaman data laptop
    public function index(){
        //menampilkan data dari table laptop agar bisa ditampilkan di tampilan
        $laptop = Laptop::all();
        return view("admin.laptop.laptop", compact("laptop"));
    }

    //Function yang memiliki return tampilan halaman tambah data laptop
    public function create(){
        return view("admin.laptop.laptop-entry");
    }

    // Function untuk menambahkan data ke dalam database
    public function store(Request $request) {
        //Disini server melakukan validate yang mana berarti field yang ada di dalam validate wajib diisi
        $request->validate([
            "merk" => "required",
            "model"=> "required",
            "spesifikasi"=> "required",
            "stok"=> "required",
            "harga_beli"=> "required",
            "harga_jual"=> "required",
        ]);

        //function create ini digunakan untuk store data ke dalam database
        Laptop::create($request->all());
        
        //ketika selesai akan di alihkan ke route dengan nama laptop
        return redirect()->route("laptop");
    }

    //function untuk update data dalam database
    public function update(Request $request, $id) {
        //Disini server melakukan validate yang mana berarti field yang ada di dalam validate wajib diisi
        $request->validate([
            "merk" => "required",
            "model"=> "required",
            "spesifikasi"=> "required",
            "stok"=> "required",
            "harga_beli"=> "required",
            "harga_jual"=> "required",
        ]);

         //Dibuat variable laptop untuk menampung data id dari table laptop
         $laptop = Laptop::find($id);

         // Function update digunakan untuk update data di dalam table
         $laptop->update($request->all());
 
         //ketika selesai akan di alihkan ke route dengan nama laptop
         return redirect()->route("laptop");
    }

     //Function untuk delete data database
     public function destroy($id) {
        //Dibuat variable laptop untuk menampung data id dari table laptop
        $laptop = Laptop::find($id);

        //function delete digunakan untuk menghapus data yang ada di dalam table
        $laptop->delete();

        //ketika selesai akan di alihkan ke route dengan nama jbarang
        return redirect()->route("laptop");
    }

    //function untuk cetak pdf
    public function cetak()
    {
        //untuk mengambil data yang ada pada table laptop
        $laptop = Laptop::all();
        //untuk load tampilan dari pdfnya
        $pdf = Pdf::loadview('layouts.report-laptop', compact('laptop'));
        //setting nama file download pdf
        return $pdf->download('Laporan Data Laptop.pdf');
    }
}
