<?php

namespace App\Http\Controllers;

use App\Models\album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Album";
        return view('album.index',compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Create Album";
        $foto = "";

        return view('album.create',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(album $album)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(album $album)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, album $album)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(album $album)
    {
        //
    }
}
