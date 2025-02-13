@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Daftar Magang</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Nama Perusahaan</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($internships as $internship)
                <tr>
                    <td>{{ $internship->company }}</td>
                    <td>{{ $internship->description }}</td>
                    <td>
                        <a href="{{ route('internships.show', $internship->id) }}" class="btn btn-info">Detail</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection