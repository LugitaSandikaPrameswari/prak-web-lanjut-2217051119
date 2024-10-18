@extends('layouts.app')

@section('content')
<style>
    /* CSS untuk styling tabel pengguna */
    table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
    }

    th, td {
        padding: 12px;
        text-align: left;
        border: 1px solid #ddd;
    }

    th {
        background-color: #D2B48C; /* Warna biru muda */
        color: #333; /* Warna teks header */
    }

    tr:hover {
        background-color: #FDF5E6; /* Warna saat hover */
    }

    /* Gaya untuk tombol */
    .btn-group {
        display: flex; /* Membuat tombol tampil dalam satu baris */
        gap: 5px; /* Jarak antar tombol */
    }

    /* Gaya untuk foto */
    td img {
        max-width: 100px; /* Membatasi lebar gambar */
        height: auto;
    }

    .btn {
        margin: 0; /* Menghapus margin default pada tombol */
    }
</style>

<a href="{{ route('users.create') }}" class="btn btn-primary mb-3">Tambah Pengguna Baru</a>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NPM</th>
            <th>Kelas</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->nama }}</td>
                <td>{{ $user->npm }}</td>
                <td>{{ $user->kelas->nama_kelas ?? 'Kelas Tidak Ditemukan' }}</td>
                <td>
                    @if($user->foto)
                        <img src="{{ asset($user->foto ?? 'uploads/img/default.jpg') }}" alt="Foto Pengguna">
                    @else
                        <span>Foto tidak tersedia</span>
                    @endif
                </td>
                <td>
                    <div class="btn-group">
                        <a href="{{ route('users.show', $user->id) }}" class="btn btn-warning">View</a>
                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
