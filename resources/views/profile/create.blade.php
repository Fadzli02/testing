@extends('layouts.header')

@section('content')
<form action="/upload" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="container w-10/12 mx-auto">
            <h1 class="font-bold mt-5 underline underline-offset-8 mb-6" style="font-size: 40px;">UPLOUD FOTO</h1>
            <div class="mb-6">
                <label for="judul" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul Foto</label>
                <input type="text" id="judul" name="judul"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Masukkan Judul Foto" required />
            </div>

            <div class="mb-6">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload
                    Image</label>
                <input name="foto"
                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                    aria-describedby="file_input_help" id="file_input" type="file">
                </p>
            </div>

            <div class="mb-6">
                <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                <textarea id="deskripsi" name="deskripsi" rows="4"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Write your thoughts here"></textarea>
            </div>
            <button
                class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                <span
                    class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                    Kirim
                </span>
            </button>
        </div>
    </form>
@endsection
