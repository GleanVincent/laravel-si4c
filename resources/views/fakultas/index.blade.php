@extends('main')
@section('title', 'Fakultas')
@section('content')
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