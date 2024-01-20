@extends('template.index')

@section('content')
    <div class="container mt-5">
        <div class="d-flex justify-content-between my-5">
            <a href="/create" class="btn btn-sm btn-primary">Tambah</a>
            <a href="/logout" class="btn btn-sm btn-danger">Logout</a>
        </div>
        <div class="table-responsive">
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Gambar</th>
                        <th>Stok</th>
                        <th>Kondisi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($barang as $b)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $b->nama_barang }}</td>
                            <td>
                                <img src="/barang/{{ $b->gambar }}" width="80" />
                            </td>
                            <td>{{ $b->stok }}</td>
                            <td>{{ $b->kondisi }}</td>
                            <td>
                                <a href="/edit/{{ $b->id }}" class="btn btn-sm btn-success">Edit</a>
                                <a onclick="return confirm('apakah anda yakin ingin menghapus')"
                                    href="/delete/{{ $b->id }}" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
@endsection

@push('js')
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
@endpush
