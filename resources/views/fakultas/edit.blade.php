@extends('main')
@section('title', 'Edit Fakultas')
@section('content')
    <form action="{{route('fakultas.update', $fakultas->id)}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama">Nama Fakultas</label>
            <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama', $fakultas->nama) }}">
            @error('nama')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="singkatan">Singkatan</label>
            <input type="text" name="singkatan" id="singkatan" class="form-control"  value="{{ old('singkatan') ?? $fakultas->singkatan }}">
            @error('singkatan')
                <div class="text-danger">{{ $message }}</div>
            @enderror        
        </div>
        <div class="form-group">
            <label for="dekan">Nama Dekan</label>
            <input type="text" name="dekan" id="dekan" class="form-control" value="{{ old('dekan') ?? $fakultas->dekan }}">
            @error('dekan')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
