<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Models\GalleryVideo;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $video = GalleryVideo::get();
        return view('admin.components.gallery.videos.video', compact('video'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.components.gallery.videos.addvideo');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'video' => 'required|mimes:mp4,mov,ogg,qt|max:20000',
        ]);

        $validateData = $request->validate([
            'name' => 'required',
            'desc' => 'required',
        ]);

        if (empty($validateData['slug'])) {
            $validateData['slug'] = strtolower(Str::slug($validateData['name'], '-'));
        }

        if ($request->hasFile('video')) {
            $video = $request->file('video');
            $name = time() . '.' . $video->getClientOriginalExtension();
            $path = $video->storeAs('images/gallery/videos/'.$validateData['slug'].'/', $name, 'public');

            $validateData['video_name'] = $path;
            GalleryVideo::create($validateData);

            return redirect()->route('video')->with('success', 'Data Telah ditambahkan!');
        }

        return back()->with('error', 'Gagal mengupload video.');
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
    public function edit($slug)
    {
        $video = GalleryVideo::where('slug', $slug)->firstOrFail();
        return view('admin.components.gallery.videos.editvideo', compact('video'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $slug)
    {
        $video = GalleryVideo::where('slug', $slug)->firstOrFail();

        $request->validate([
            'name' => 'required',
            'desc' => 'required',
            'slug' => 'required',
        ]);

        $videoPath = $video['video_name'];

        if ($request['video']) {

            if (Storage::disk('public')->exists($videoPath)) {

                $path = 'public/images/gallery/videos/'.$video['slug'];

                Storage::deleteDirectory($path);

                $videos = $request->file('video');
                $name = time() . '.' . $videos->getClientOriginalExtension();
                $pathImage = $videos->storeAs('images/gallery/videos/'.$video['slug'].'/', $name, 'public');

                $video['video_name'] = $pathImage;
                $video->update($request->only('name','video_name', 'desc'));

                $video = GalleryVideo::where('slug', $slug)->firstOrFail();

                return redirect()->route('video')->with('success', 'Data Telah diubah!');
            }
        } else {
            $video->update($request->only('name', 'desc'));

            $video = GalleryVideo::where('slug', $slug)->firstOrFail();

            return redirect()->route('video')->with('success', 'Data Telah diubah!');
        }

        return back()->with('error', 'Video tidak ditemukan.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($slug)
    {
        $videos = GalleryVideo::where('slug', $slug)->firstOrFail();

        $videoPath = 'public/'.$videos['img_name'];

        if (Storage::exists($videoPath)) {

            $path = 'public/images/gallery/videos/'.$videos['slug'];

            Storage::deleteDirectory($path);

            Storage::delete($videoPath);

            $videos->delete();

            return redirect()->route('video')->with('success', 'Data Telah dihapus!');
        }

        return back()->with('error', 'Gambar tidak ditemukan.');
    }
}
