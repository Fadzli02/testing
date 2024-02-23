@extends('layouts.header')

@section('content')
    @csrf
    <div class="container mt-5 w-10/12 h-full mx-auto">
        <a href="/albums/new"
            class="text-8xl pt-1 text-gray-400 max-w-sm h-56 grid place-items-center p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100">
            <p>+</p>
        </a>
    </div>
@endsection
