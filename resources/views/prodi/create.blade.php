@extends('main')
@section('title', 'Tambah Program Studi')
@section('content')
    <form action="{{route('prodi.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="nama_prodi">Nama Program Studi</label>
            <input type="text" name="nama_prodi" id="nama_prodi" class="form-control" value="{{ old('nama_prodi') }}">
            @error('nama_prodi')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="singkatan">Singkatan</label>
            <input type="text" name="singkatan" id="singkatan" class="form-control" value="{{ old('singkatan') }}" maxlength="10">
            @error('singkatan')
                <div class="text-danger">{{ $message }}</div>
            @enderror        
        </div>
        <div class="form-group">
            <label for="kaprodi">Nama kaprodi</label>
            <input type="text" name="kaprodi" id="kaprodi" class="form-control" value="{{ old('kaprodi') }}">
            @error('kaprodi')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="fakultas_id">Fakultas</label>
            <select name="fakultas_id" class= "form-select" id="fakultas_id">
                <option value="">--Pilih Fakultas--</option>
                @foreach($fakultas as $item) 
                    <option value="{{ $item->id }}" {{ old('fakultas_id') == $item->id ? 'selected' : '' }}>{{ $item->nama }}</option>
                @endforeach
            </select>
            @error('fakultas_id')
                <div class="text-danger">{{ $message }}</div>
            @enderror
            
        </div>
        <br/>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>

@endsection
