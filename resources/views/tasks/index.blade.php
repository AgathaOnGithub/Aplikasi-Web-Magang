@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Tugas</h1>
    <ul>
        @foreach ($tasks as $task)
            <li>{{ $task->name }}</li>
        @endforeach
    </ul>
</div>
@endsection
