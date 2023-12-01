<!-- index.blade.php -->
@extends('layouts.app')

@section('content')
@include('partials.header')

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<!-- Header-->
<header
    style="background-image: url('{{ asset('asset') }}/img/bg.jpeg'); background-size: cover; background-position: center; background-repeat: no-repeat; height: 100vh;"
    class="text-white d-flex flex-column justify-content-center align-items-center text-center">
    <div class="container px-4">
        {{-- <h1 class="fw-bolder">Polres Pematang Siantar</h1>
        <p class="lead">Sistem Informasi dan Pengaduan Masyarakat Kota Pematang Siantar</p> --}}
        <br>
        <br>
        <br>
        <br>
        <br>
        <a class="btn btn-lg btn-light" href="#about">Jelajahi Informasi!</a>
    </div>
</header>

@include('partials.section')

@include('partials.footer')
@endsection