@extends('layouts.header')

@section('content')
    <div class="container mt-5 w-10/12 mx-auto">
        <div class="w-full mb-5">
            <img src="{{ asset('storage/' . $foto->lokasiFile) }}" alt="{{ $foto->judulFoto }}"
                class="w-6/12 mx-auto object-cover">
        </div>

        <div class="">
            <form action="/edit/{{ $foto->fotoId }}" method="post" enctype="multipart/form-data">
                {{-- @method('put') Tidak Berguna --}}
                @csrf
                <div class="mb-6">
                    <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900">Judul</label>
                    <input value="{{ $foto->judulFoto }}" name="judul" type="text" id="small-input"
                        class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500">
                </div>

                <div class="mb-6">
                    <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900">Describe about this
                        foto</label>
                    <textarea required name="deskripsi" id="deskripsi" rows="4"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Write your thoughts here...">{{ $foto->dekripsiFoto }}</textarea>
                </div>
                <button
                    class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                    <span
                        class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                        Edit
                    </span>
                </button>
            </form>
        </div>

        <form action="/delete/{{ $foto->fotoId }}" method="post" class="mt-5">
            @csrf

            <button
                class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                <span
                    class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                   Delete
                </span>
            </button>
        </form>
    </div>
@endsection
