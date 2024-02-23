@extends('layouts.header')

@section('content')
    @csrf
    <div class="container mt-5 w-10/12 h-full mx-auto">
        <div class="w-full bg-slate-500 h-full text-center mb-5">
            <div class="w-full mx-auto font-bold uppercase text-[50px]">{{ $foto->judulFoto }}</div>
            <div class="max-w-md mx-auto">
                <img src="{{ asset('storage/' . $foto->lokasiFile) }}" alt="{{ $foto->judulFoto }}"
                    class="h-[500px] w-[500px] object-cover">
            </div>
        </div>

        <div class="absolute w-10/12">
            <h1>Tanggal Dibuat : {{ $foto->tanggalUnggah }}</h1>
            <p>Created By : {{ $foto->user->namaLengkap }}</p>
            <hr style="width:100%;text-align:left;margin-left:0; border:1px solid black;">

            <p class="mt-5 mb-10">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore expedita quasi modi vero
                quae
                ea totam rerum, quis, animi sapiente maxime nostrum, atque neque voluptas mollitia itaque perspiciatis.
                Architecto consequuntur enim nam in suscipit sequi at, sint ratione voluptatem maiores non eum amet commodi
                quisquam fuga inventore beatae dignissimos quaerat! Numquam est facere a! Similique corporis eligendi
                nesciunt minus et. Ex quisquam, beatae illo aliquid similique at odit fugiat vel magni molestias iure quasi
                incidunt cumque officiis molestiae excepturi blanditiis error corporis ducimus maxime ullam laborum natus?
                Repellat aliquid nobis quasi minima eos saepe fugiat aspernatur doloribus, soluta reiciendis deleniti!</p>

            <div class="row-span-2">
                <button
                    class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800">
                    <span
                        class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                        Green to blue
                    </span>
                </button>

                <input type="number" required class="w-10">
            </div>

            <div class="comment">
                <label for="message"
                    class="block mb-2 text-[25px] font-medium text-gray-900 dark:text-white">Comments</label>
                <textarea id="message" rows="4"
                    class="mb-9 block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Write your thoughts here..."></textarea>

                <button type="button"
                    class="w-full text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Kirim</button>


            </div>
        </div>
    </div>
@endsection
