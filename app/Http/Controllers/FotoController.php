<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Http\Requests\StoreFotoRequest;
use App\Http\Requests\UpdateFotoRequest;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class FotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'My Profile';
        $user = User::where('userId', auth()->id())->first();
        $foto = Foto::where('userId', auth()->id())->get();

        return view('profile.index', compact('title', 'user', 'foto'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Add Photo';

        return view('profile.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFotoRequest $request)
    {
        $foto = request()->file('foto');

        $data = [
            'judulFoto' => request('judul'),
            'dekripsiFoto' => request('deskripsi'),
            'tanggalUnggah' => now(),
            'lokasiFile' => $foto->store(auth()->id()),
            'userId' => auth()->id()
        ];

        // dd($data);

        Foto::create($data);

        session()->flash('berhasil','Succes Upload Foto');
        return redirect('/profile');
    }

    /**
     * Display the specified resource.
     */
    public function show(Foto $fotoId)
    {
        $title = "Detail Foto";
        $foto = $fotoId;

        return view('profile.detail',compact('title','foto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Foto $fotoId)
    {
        $foto = $fotoId;
        $title = 'Edit Photo';

        return view('profile.edit', compact('foto', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFotoRequest $request, Foto $fotoId)
    {
        $data = [
            'judulFoto' => request('judul'),
            'dekripsiFoto' => request('deskripsi'),
        ];

        $fotoId ->update($data);

        session()->flash('berhasil','Succes Update Foto');
        return redirect('/profile');
    }

    /**
     * Remove the specified resource from storage.
     */

    //  $foto diganti Dengan $fotoId
    public function destroy(Foto $fotoId)
    {
        Storage::delete($fotoId->lokasiFile);
        $fotoId->destroy($fotoId->fotoId);

        session()->flash('berhasil','Succes Hapus');
        return redirect('/profile');
    }
}
