@extends('layouts.app')

@section('title', 'Halaman Mahasiswa')
@section('bread1', 'Mahasiswa')
@section('bread2', 'Daftar')

@section('content')
    <h2>Daftar Mahasiswa</h2>
    <table class="table table-striped" id="mhs-table">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama Lengkap</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>

    <script>
           $(function () {
            var table = $('#mhs-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('mhs_list') }}",
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
    ]
});
});
    </script>

@endsection