@extends('guru.layouts.app')

@section('title', 'detail kegiatan')

@section('content')

    @if ($errors->has('access'))
        <div class="alert alert-danger">
            {{ $errors->first('access') }}
        </div>
    @endif
    @if ($kegiatan)
        <div class="row bg-light rounded align-items-center mx-0">
            <div class="col-md-6 p-3">
                <table>
                    <tr>
                        <td width="100">nama siswa</td>
                        <td width="10">:</td>
                        <td>{{ $kegiatan->kegiatanSiswa->nama_siswa }}</td>
                    </tr>
                </table>
            </div>
        </div>
        <br>
    @endif
    <div class="row g-4">
        <div class="col-sm-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">detail kegiatan</h6>
                <div class="mb-3">
                    <label for="tanggal_kegiatan" class="form-label">tanggal kegiatan</label>
                    <input type="text" class="form-control" value="{{ $kegiatan->tanggal_kegiatan }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="nama_kegiatan" class="form-label">nama kegiatan</label>
                    <input type="text" class="form-control" value="{{ $kegiatan->nama_kegiatan }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="ringkasan_kegiatan" class="form-label">ringkasan kegiatan</label>
                    <textarea class="form-control" rows="5" readonly>{{ $kegiatan->ringkasan_kegiatan }}</textarea>
                </div>
                <div class="mb-3 d-flex flex-column">
                    <label for="foto" class="form-label">foto</label>
                    <div class="text-center">
                        <img src="{{ asset('storage/' . $kegiatan->foto) }}" alt="kegiatan" height="700">
                    </div>
                </div>
                <a href="{{ route('guru.pembimbing.siswa.kegiatan', ['id' => $id, 'id_siswa' => $kegiatan->id_siswa]) }}"
                    class="btn btn-primary">kembali</a>
            </div>
        </div>
    </div>
@endsection
