@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Detail Magang</h2>
    <p><strong>Nama Perusahaan:</strong> {{ $internship->company }}</p>
    <p><strong>Deskripsi:</strong> {{ $internship->description }}</p>
    <a href="{{ route('internships.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection