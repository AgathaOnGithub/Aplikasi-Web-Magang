@extends('layouts.app')

@section('title', 'Dashboard Magang')

@section('content')
<header class="bg-primary text-white text-center py-5">
    <div class="container">
        <h1>Software Manajemen Magang</h1>
        <p class="lead">Solusi terbaik untuk mengelola tugas dan aktivitas magang Anda.</p>
    </div>
</header>

<section class="container my-5 text-center">
    <h2>Fitur Utama</h2>
    <div class="row mt-4">
        <div class="col-md-4">
            <h4>Manajemen Tugas</h4>
            <p>Mengelola tugas harian dengan mudah dan efisien.</p>
        </div>
        <div class="col-md-4">
            <h4>Pelaporan Kinerja</h4>
            <p>Melihat dan melaporkan progres magang dengan cepat.</p>
        </div>
        <div class="col-md-4">
            <h4>Notifikasi Otomatis</h4>
            <p>Mendapatkan pengingat otomatis untuk setiap tugas.</p>
        </div>
    </div>
</section>
@endsection
