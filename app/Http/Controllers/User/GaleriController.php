<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Models\GalleryPhoto;
use App\Models\GalleryVideo;

use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function foto()
    {
        $foto = GalleryPhoto::get();
        return view('users.components.gallery.foto', compact('foto'));
    }

    public function video()
    {
        $video = GalleryVideo::get();
        return view('users.components.gallery.video', compact('video'));
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
