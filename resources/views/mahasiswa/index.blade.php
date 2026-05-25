@extends('main')
@section('title', 'Mahasiswa')
@section('content')
<h1>Data Mahasiswa</h1>
<a href="{{ route('mahasiswa.create') }}" class= "btn btn-primary mb-3">Tambah Mahasiswa</a>

<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>NPM</th>
        <th>Prodi</th>
        <th>Foto</th>
        <th>Aksi</th>
    </tr>

    @foreach($mahasiswas as $key => $mahasiswa)
    <tr>
        <td>{{ $mahasiswa->nama }}</td>
        <td>{{ $mahasiswa->npm }}</td>
        <td>{{ $mahasiswa->prodi->nama_prodi ?? '-' }}</td>
        <td>
            @if($mahasiswa->foto)
                <img src="{{ asset('storage/' . $mahasiswa->foto) }}" alt="Foto" width="100">
            @else 
                <span class="text-muted">Tidak ada foto</span>
            @endif

        </td>
        <td>
            <a href="{{ route('mahasiswa.edit', $mahasiswa->id) }}" class="btn btn-warning btn-sm">Edit</a>
            <form action="{{ route('mahasiswa.destroy', $mahasiswa->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus mahasiswa ini?')">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach

</table>
@endsection