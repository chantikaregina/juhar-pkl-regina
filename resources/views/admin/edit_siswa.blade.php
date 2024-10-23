@extends('admin.layouts.app')

@section('title', 'Tambah siswa')

@section('content')
<div class="row g-4">
    <div class="col-sm-12">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Edit siswa</h6>
            <form action="{{ route('admin.pembimbing.siswa.update', ['id' => $id, 'id_siswa' => $siswa->id_siswa]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="nisn" class="form-label">nisn</label>
                    <input type="text" class="form-control" id="nisn" name="nisn" value="{{ old('nisn', $siswa->nisn) }}">
                    <div class="text-danger">
                        @error('nisn')
                        {{$message}}

                        @enderror
                    </div>


                </div>
                <div class="mb-3">
                    <label for="nama_siswa" class="form-label">nama siswa</label>
                    <input type="nama_siswa" class="form-control" id="nama_siswa" name="nama_siswa" value="{{ old('nama_siswa', $siswa->nama_siswa) }}">
                    <div class="text-danger">
                        @error('nama_siswa')
                        {{ $message }}

                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                    <div class="text-danger">
                        @error('password')
                        {{ $message }}

                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label for="foto" class="form-label">Foto</label>
                    <input type="file" class="form-control" id="foto" name="foto">
                    <div class="text-danger">
                        @error('foto')
                        {{ $message }}

                        @enderror
                    </div>
                </div>
                <div class="mb-2">
                    <img src="{{ asset('storage/' . $siswa->foto) }}" alt="" height="80">
                </div>
                <button type="submit" class="btn btn-primary">simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection
