@extends('main')
@section('title', 'Fakultas')
@section('content')
    <a href="{{ route('fakultas.create') }}" class="btn btn-primary mb-3">Tambah Fakultas</a>
    @session('success')
        <div class="alert alert-success">
            {{ $value }}
        </div>
    @endsession
    <h2>Data fakultas</h2>
    <table class="table table-bordered table-hover">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Singkatan</th>
            <th>Dekan</th>
            <th>Aksi</th>
        </tr>

        @foreach ($result as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->singkatan }}</td>
                <td>{{ $item->dekan }}</td>
                <td class="d-flex d-inline gap-2">
                    <a href="{{ route('fakultas.edit', $item->id) }}" class="btn btn-sm btn-warning btn-rounded">Edit</a>
                    
                    <form method="POST" action="{{ route('fakultas.destroy', $item->id) }}">
                        @csrf
                        <input name="_method" type="hidden" value="DELETE">
                        <button type="submit" class="btn btn-danger btn-rounded show_confirm" data-toggle="tooltip"
                            title='Delete' data-nama='{{ $item->nama }}'>Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
