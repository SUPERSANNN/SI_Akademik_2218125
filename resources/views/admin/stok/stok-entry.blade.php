@extends('layouts.index')

@section('title', 'Form Data Stok Barang')

@section('content')
    <div class="container-fluid mt-5">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Form Data Stok Barang</h1>
        </div>


        <div class="form-add p-4 bg-white rounded-5 shadow mb-5">
            <form action="{{ route('stok-store') }}" method="post">
                @csrf
                <div class="mb-4">
                    <label for="laptop_id" class="form-label">Merk Laptop <span>*</span></label>
                    <select class="form-control input" id="laptop_id" name="laptop_id">
                        <option value="" disabled selected id="defautlSelect">Pilih Merk Laptop
                        </option>
                        @foreach ($laptop as $item)
                        <option value="{{ $item->id }}">{{ $item->merk }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <label for="jumlah" class="form-label">Jumlah <span>*</span></label>
                    <input type="number" class="form-control input " id="jumlah" name="jumlah"
                        placeholder="Masukkan Jumlah" required value="">
                </div>
                <div class="mb-4">
                    <label for="tipe_transaksi" class="form-label">Tipe Transaksi <span>*</span></label>
                    <select class="form-control input" id="tipe_transaksi" name="tipe_transaksi">
                        <option value="" disabled selected id="defautlSelect">Pilih Tipe Transaksi
                        </option>
                        <option value="Pembelian">Pembelian</option>
                        <option value="Penjualan">Penjualan</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="tanggal" class="form-label">Tanggal <span>*</span></label>
                    <input type="date" class="form-control input " id="tanggal" name="tanggal"
                        placeholder="Masukkan Tanggal" required>
                </div>
                <button type="submit" class="btn btn-success py-2 px-5 rounded-3 w-100">Submit</button>
            </form>
        </div>

    </div>
@endsection
