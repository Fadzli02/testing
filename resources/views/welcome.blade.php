@extends('layouts.header')

@section('content')
    <div class="container mt-5 w-10/12 mx-auto">
        <div class="grid grid-cols-4 gap-2">
            @foreach ($foto as $f)
                <a href="/detail/{{ $f->fotoId }}">
                    <img src="{{ asset('storage/' .$f->lokasiFile) }}" alt="{{ $f->judulFoto }}"
                        class="h-[300px] w-[300px] text-8xl pt-1 text-gray-400 max-w-sm grid place-items-center p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100">
                </a>
            @endforeach
        </div>
    </div>
@endsection
