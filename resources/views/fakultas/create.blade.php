@extends('main')
@section('title', 'Tambah Fakultas')
@section('content')
    <form action="{{route('fakultas.store')}}" method="post">
        <div class="form-group">
            <label for="nama">Nama Fakultas</label>
            <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama') }}">
            @error('nama')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="singkatan">Singkatan</label>
            <input type="text" name="singkatan" id="singkatan" class="form-control" value="{{ old('singkatan') }}">
            @error('singkatan')
                <div class="text-danger">{{ $message }}</div>
            @enderror        
        </div>
        <div class="form-group">
            <label for="dekan">Nama Dekan</label>
            <input type="text" name="dekan" id="dekan" class="form-control" value="{{ old('dekan') }}">
            @error('dekan')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
