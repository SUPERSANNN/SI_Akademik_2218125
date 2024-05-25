@extends('layouts.index')

@section('title', 'Form Data Laptop')

@section('content')
    <div class="container-fluid mt-5">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Form Data Laptop</h1>
        </div>


        <div class="form-add p-4 bg-white rounded-5 shadow mb-5">
            <form action="{{ route('laptop-store') }}" method="post">
                @csrf
                <div class="mb-4">
                    <label for="merk" class="form-label">Merk Laptop <span>*</span></label>
                    <input type="text" class="form-control input " id="merk" name="merk"
                        placeholder="Masukkan Merk Laptop" required>
                </div>
                <div class="mb-4">
                    <label for="model" class="form-label">Model Laptop <span>*</span></label>
                    <input type="text" class="form-control input " id="model" name="model"
                        placeholder="Masukkan Model Laptop" required>
                </div>
                <div class="mb-4">
                    <label for="spesifikasi" class="form-label">Spesifikasi Laptop</label>
                    <textarea class="form-control input id="spesifikasi" name="spesifikasi" rows="5" placeholder="Masukkan Spesifikasi" required></textarea>
                </div>
                <div class="mb-4">
                    <label for="stok" class="form-label">Stok Barang<span>*</span></label>
                    <input type="number" class="form-control input " id="stok" name="stok"
                        placeholder="Masukkan Stok" required>
                </div>
                <div class="mb-4">
                    <label for="harga_beli" class="form-label">Harga Beli <span>*</span></label>
                    <input type="tel" class="form-control input " id="harga_beli" name="harga_beli"
                        placeholder="Masukkan Harga Beli" required>
                </div>
                <div class="mb-4">
                    <label for="harga_jual" class="form-label">Harga Jual <span>*</span></label>
                    <input type="tel" class="form-control input " id="harga_jual" name="harga_jual"
                        placeholder="Masukkan Harga Jual" required>
                </div>
               
                <button type="submit" class="btn btn-success py-2 px-5 rounded-3 w-100">Submit</button>
            </form>
        </div>
    </div>
@endsection
