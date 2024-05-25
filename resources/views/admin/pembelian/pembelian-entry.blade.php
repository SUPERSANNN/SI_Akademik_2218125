@extends('layouts.index')

@section('title', 'Form Data Pembelian')

@section('content')
    <div class="container-fluid mt-5">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Form Data Pembelian</h1>
        </div>


        <div class="form-add p-4 bg-white rounded-5 shadow mb-5">
            <form action="{{ route('pembelian-store') }}" method="post">
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
                    <label for="supplier_id" class="form-label">Nama Supplier <span>*</span></label>
                    <select class="form-control input" id="supplier_id" name="supplier_id">
                        <option value="" disabled selected id="defautlSelect">Pilih Nama Supplier
                        </option>
                        @foreach ($supplier as $item)
                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <label for="jumlah_beli" class="form-label">Jumlah Beli <span>*</span></label>
                    <input type="number" class="form-control input " id="jumlah_beli" name="jumlah_beli"
                        placeholder="Masukkan Jumlah Beli" required>
                </div>
                <div class="mb-4">
                    <label for="harga_beli" class="form-label">Harga Beli <span>*</span></label>
                    <input type="number" class="form-control input " id="harga_beli" name="harga_beli"
                        placeholder="Masukkan Harga Beli" required >
                </div>
                <div class="mb-4">
                    <label for="tanggal_pembelian" class="form-label">Tanggal Pembelian <span>*</span></label>
                    <input type="date" class="form-control input " id="tanggal_pembelian" name="tanggal_pembelian"
                        placeholder="Masukkan Tanggal Pembelian" required>
                </div>
                <button type="submit" class="btn btn-success py-2 px-5 rounded-3 w-100">Submit</button>
            </form>
        </div>

    </div>
@endsection
