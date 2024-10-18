@extends('admin.layouts.app')

@section('title', 'Tambah dudi')

@section('content')
<div class="row g-4">
    <div class="col-sm-12">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Tambah dudi</h6>
            <form action="{{ route('admin.dudi.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="nama_dudi" class="form-label">nama</label>
                    <input type="text" class="form-control" id="nama_dudi" name="nama_dudi">
                    <div class="text-danger">
                        @error('nama_dudi')
                        {{$message}}

                        @enderror
                    </div>


                </div>
                <div class="mb-3">
                    <label for="alamat_dudi" class="form-label">alamat</label>
                    <input type="text" class="form-control" id="alamat_dudi" name="alamat_dudi">
                    <div class="text-danger">
                        @error('alamat_dudi')
                        {{ $message }}

                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection
