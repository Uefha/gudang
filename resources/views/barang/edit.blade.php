@extends('template.index')

@section('content')
    <div class="container">
        <form action="/update/{{ $barang->id }}" method="POST" class="mx-auto mt-5" style="width:80%" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <input type="text" value="{{ $barang->nama_barang }}" name="nama_barang" class="form-control" placeholder="Nama Barang" >
            </div>
            <div class="mb-3">
                <img src="/barang/{{ $barang->gambar }}" width="80" />

                <input type="file" name="gambar" class="form-control fileInput" placeholder="Masukan File" >
            </div>
            <div class="mb-3">
                <input type="number" value="{{ $barang->stok }}" name="stok" class="form-control" placeholder="stok" >
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
                <input type="submit" name="submit" class="btn btn-sm btn-info" value="Update" >
            </div>
        </form>
    </div>
@endsection
@push('js')
    <script>
        const fileInput = document.querySelector('.fileInput')
        const img = document.querySelector('img')
        fileInput.addEventListener('change',()=>{
            const src = fileInput.files[0];
            img.src = URL.createObjectURL(src)

        })
    </script>
@endpush
