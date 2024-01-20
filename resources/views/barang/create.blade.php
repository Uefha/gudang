@extends('template.index')

@section('content')
    <div class="container">
        <form action="/store" method="POST" class="mx-auto mt-5" style="width:80%" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <input type="text" name="nama_barang" class="form-control" placeholder="Nama Barang" >
            </div>
            <div class="mb-3">
                <input type="file" name="gambar" class="form-control" placeholder="Masukan File" >
            </div>
            <div class="mb-3">
                <input type="number" name="stok" class="form-control" placeholder="stok" >
            </div>
            <div class="mb-3">
                <select name="kondisi" class="form-select">
                    <option value="baru">baru</option>
                    <option value="normal">normal</option>
                    <option value="rusak">rusak</option>
                    <option value="tidak diketahui">tidak diketahui</option>
                </select>
            </div>

            <div class="mb-3">
                <input type="submit" name="sumit" class="btn btn-sm btn-primary" value="Simpan" >
            </div>
        </form>
    </div>
@endsection
