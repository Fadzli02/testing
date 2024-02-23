@extends('layouts.header')

@section('content')
    <div class="container mt-5 w-10/12 h-full mx-auto">
        <form action="/albums/new" method="POST">
            @csrf
            <div>
                <h3>Select Foto</h3>
                @foreach ($foto as $f)
                    <div class="flex items-center">
                        <input checked id="checked-checkbox" type="checkbox" value="{{ $f->lokasiFile }}"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checked-checkbox"
                            class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $f->judulFoto }}</label>
                    </div>
                @endforeach

                <button
                    class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800">
                    <span
                        class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                        Buat Album 
                    </span>
                </button>
            </div>
        </form>
    </div>
@endsection
