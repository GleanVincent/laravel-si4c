@extends('main')
@section('title', 'Fakultas')
@section('content')
<a href="{{route('fakultas.create')}}" class="btn btn-primary mb-3">Tambah Fakultas</a>
<h2>Data fakultas</h2>
<table class="table table-bordered table-hover">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Singkatan</th>
            <th>Dekan</th>
        </tr>

        @foreach ($result as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->singkatan }}</td>
            <td>{{ $item->dekan }}</td>
        </tr>
        @endforeach
</table>
@endsection