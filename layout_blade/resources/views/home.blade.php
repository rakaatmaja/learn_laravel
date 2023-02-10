@extends('layouts.mainlayout')

@section('title', 'Home')

@section('content')
    <h1>Halo</h1>
    <h2>Welcome {{ $name }}</h2>
    <h3>role : {{ $role }}</h3>
    {{-- @if ($role == 'admin')
            <a href="">Ke halaman admin</a>
        @elseif ($role == 'user')
            <a href="">Kehalaman home</a>
        @else
            <a href="/"></a>
        @endif --}}

    {{-- SWITCH --}}
    {{-- @switch($role)
    @case($role == 'admin')
        You are admin
        @break

    @case($role == 'user')
        You are user
        @break

    @default
        Who are you
@endswitch --}}

    {{-- LOOP --}}

    {{-- @for ($i = 0; $i < 10; $i++)
    nilai ke - {{$i}}<br>
@endfor --}}

    {{-- table with loop for/each --}}
    <table class="table">
        <tr>
            <th>No</th>
            <th>Colors</th>
        </tr>
        @foreach ($colors as $data)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data }}</td>
            </tr>
        @endforeach
    </table>
@endsection
