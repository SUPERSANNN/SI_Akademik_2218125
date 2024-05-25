<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penjualan;
use App\Models\Laptop;
use Barryvdh\DomPDF\Facade\Pdf;

class PenjualanController extends Controller
{
    //Function yang memiliki return tampilan halaman data penjualan
    public function index(){
        //menampilkan data dari table penjualan agar bisa ditampilkan di tampilan
        $penjualan = Penjualan::all();
        //menampilkan data dari table laptop, karena ingin menampilkannya dalam dropdown
        $laptop = Laptop::all();
        return view("admin.penjualan.penjualan", compact("penjualan","laptop"));
   }

    //Function yang memiliki return tampilan halaman tambah data penjualan
    public function create(){
        //menampilkan data dari table laptop, karena ingin menampilkannya dalam dropdown
        $laptop = Laptop::all();
        return view("admin.penjualan.penjualan-entry", compact("laptop"));
    }

     // Function untuk menambahkan data ke dalam database
     public function store(Request $request) {
        //Disini server melakukan validate yang mana berarti field yang ada di dalam validate wajib diisi
        $request->validate([
            "laptop_id" => "required",
            "jumlah_jual"=> "required",
            "harga_jual"=> "required",
            "tanggal_penjualan"=> "required",
        ]);

        //function create ini digunakan untuk store data ke dalam database
        Penjualan::create($request->all());
        
        //ketika selesai akan di alihkan ke route dengan nama laptop
        return redirect()->route("penjualan");
    }

    //function untuk update data dalam database
    public function update(Request $request, $id) {
        //Disini server melakukan validate yang mana berarti field yang ada di dalam validate wajib diisi
        $request->validate([
            "laptop_id" => "required",
            "jumlah_jual"=> "required",
            "harga_jual"=> "required",
            "tanggal_penjualan"=> "required",
        ]);

         //Dibuat variable laptop untuk menampung data id dari table penjualan
         $penjualan = Penjualan::find($id);

         // Function update digunakan untuk update data di dalam table
         $penjualan->update($request->all());
 
         //ketika selesai akan di alihkan ke route dengan nama penjualan
         return redirect()->route("penjualan");
    }

     //Function untuk delete data database
     public function destroy($id) {
        //Dibuat variable laptop untuk menampung data id dari table penjualan
        $penjualan = Penjualan::find($id);

        //function delete digunakan untuk menghapus data yang ada di dalam table
        $penjualan->delete();

        //ketika selesai akan di alihkan ke route dengan nama penjualan
        return redirect()->route("penjualan");
    }

      //function untuk cetak pdf
      public function cetak()
      {
          //untuk mengambil data yang ada pada table laptop
          $laptop = Laptop::all();
          //untuk mengambil data yang ada pada table penjualan
          $penjualan = Penjualan::all();
          //untuk load tampilan dari pdfnya
          $pdf = Pdf::loadview('layouts.report-penjualan', compact('laptop','penjualan'));
          //setting nama file download pdf
          return $pdf->download('Laporan Data Penjualan.pdf');
      }
}
