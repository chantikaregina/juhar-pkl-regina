@extends('guru.layouts.app')

@section('title', 'Dashboard')

@section('content')

<div class="row bg-light rounded align-items-center justify-content-center mx-0">
    <div class="col-md-6 text-center p-3">
        <h3>hi, {{ Auth::guard('guru')->user()->nama_guru }} selamat datang di jurnal harian pkl</h3>
    </div>
</div>

@endsection
