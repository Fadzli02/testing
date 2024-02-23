@extends('layouts.header')

@section('content')
    <div class="container w-10/12 mx-auto">
        <h1>Nama : {{ $user->namaLengkap}}</h1>
        <h1>Email : {{ $user->email }}</h1>
        <h1 class="mb-5">Alamat : {{ $user->alamat }}</h1>
        
        <a href="/newImage"
            class="bg-gray-700 rounded-full text-white grid place-items-center fixed w-14 h-14 bottom-10 right-10 text-3xl">
            <p class="mb-1">+</p>
        </a>

        <div class="grid grid-cols-4 gap-2">
            {{-- @dump(now('Asia/Jakarta')) --}}
            {{-- php artisan optimze:: --}}
            @foreach ($foto as $f)
                <a href="/edit/{{ $f->fotoId }}/{{ $f->user->username }}">
                    <img src="{{ asset('storage/' . $f->lokasiFile) }}" alt="{{ $f->judulFoto }}" class="w-full aspect-square object-cover">
                </a>
            @endforeach
        </div>
    </div>
@endsection
