@extends('layouts.index')

@section('title', 'Data Laptop')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid mt-5">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Laptop</h1>
        <div class="d-flex">
            <a href="{{ route('report-laptop') }}" class="d-flex align-items-center btn-sm btn-info shadow-sm mr-4 px-3 py-2"><i
                    class="far fa-clipboard fa-sm text-white mr-2"></i> Generate Report</a>
            <a href="{{ route('laptop-create') }}"
                class="d-flex align-items-center btn-sm btn-primary shadow-sm px-3 py-2""><i
                        class=" fas fa-plus fa-sm text-white mr-2"></i> Add Data</a>
        </div>

    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Laptop</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Merk</th>
                            <th>Model</th>
                            <th>Spesifikasi</th>
                            <th>Stok</th>
                            <th>Harga Beli</th>
                            <th>Harga Jual</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @forelse ($laptop as $data)
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->merk }}</td>
                            <td>{{ $data->model }}</td>
                            <td>{{ $data->spesifikasi }}</td>
                            <td>{{ $data->stok }}</td>
                            <td>{{ $data->harga_beli }}</td>
                            <td>{{ $data->harga_jual }}</td>
                            <td class="d-flex align-items-center justify-content-center">
                                <button class="btn btn-primary px-4 mr-3" data-toggle="modal" data-target="#target{{ $data->id }}">
                                    Edit
                                </button>
                                <button type="submit" class="btn btn-danger delete-btn" data-toggle="modal"
                                    data-target="#delete{{ $data->id }}">Delete</button>
                            </td>
                        </tr>
                        {{-- Modal Edit --}}
                        <div class="modal fade" id="target{{ $data->id }}" data-bs-backdrop="static" data-bs-keyboard="false"
                            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Data</h1>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('laptop-update',['id' => $data->id]) }}" method="post">
                                            @csrf
                                            <div class="mb-4">
                                                <label for="merk" class="form-label">Merk Laptop <span>*</span></label>
                                                <input type="text" class="form-control input " id="merk" name="merk"
                                                    placeholder="Masukkan Merk Laptop" required value="{{ $data->merk }}">
                                            </div>
                                            <div class="mb-4">
                                                <label for="model" class="form-label">Model Laptop <span>*</span></label>
                                                <input type="text" class="form-control input " id="model" name="model"
                                                    placeholder="Masukkan Model Laptop" required value="{{ $data->model }}">
                                            </div>
                                            <div class="mb-4">
                                                <label for="spesifikasi" class="form-label">Spesifikasi Laptop</label>
                                                <textarea class="form-control input id="spesifikasi" name="spesifikasi" rows="5" placeholder="Masukkan Spesifikasi" required>{{ $data->spesifikasi }}</textarea>
                                            </div>
                                            <div class="mb-4">
                                                <label for="stok" class="form-label">Stok Barang<span>*</span></label>
                                                <input type="number" class="form-control input " id="stok" name="stok"
                                                    placeholder="Masukkan Stok" required value="{{ $data->stok }}">
                                            </div>
                                            <div class="mb-4">
                                                <label for="harga_beli" class="form-label">Harga Beli <span>*</span></label>
                                                <input type="tel" class="form-control input " id="harga_beli" name="harga_beli"
                                                    placeholder="Masukkan Harga Beli" required value="{{ $data->harga_beli }}">
                                            </div>
                                            <div class="mb-4">
                                                <label for="harga_jual" class="form-label">Harga Jual <span>*</span></label>
                                                <input type="tel" class="form-control input " id="harga_jual" name="harga_jual"
                                                    placeholder="Masukkan Harga Jual" required value="{{ $data->harga_jual }}">
                                            </div>
                                            <button type="submit"
                                                class="btn btn-success py-2 px-5 rounded-3 w-100">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- End Modal Edit --}}

                        {{-- Modal Delete --}}
                        <div class="modal delete fade" id="delete{{ $data->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div
                                        class="modal-body d-flex flex-column align-items-center justify-content-center">
                                        <img src="{{ asset('img/ask.png') }}" width="300">
                                        <h1 class="fs-2 text-center fw-semibold text-black-50">Are you sure wan't to
                                            delete this data?
                                        </h1>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary border-0 px-4"
                                            data-bs-dismiss="modal" style="background-color: #d33">No</button>
                                        <form action="{{ route('laptop-delete', ['id' =>  $data->id ]) }}" method="delete">
                                            @csrf
                                            <button type="submit" class="btn btn-primary border-0 px-4"
                                                style="background-color: #3085d6">Yes</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- End Modal Delete --}}
                        @empty
                        <tr>
                            <td colspan="8" align="center">Tidak Ada Data</td>
                        </tr> 
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection
