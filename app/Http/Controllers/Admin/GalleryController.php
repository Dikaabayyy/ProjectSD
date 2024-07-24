<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Models\GalleryPhoto;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $photo = GalleryPhoto::get();
        return view('admin.components.gallery.photo', compact('photo'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.components.gallery.addphoto');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('images/gallery/photos', $name, 'public');

            $validateData = $request->validate([
                'name' => 'required',
                'desc' => 'required',
            ]);

            if (empty($validateData['slug'])) {
                $validateData['slug'] = strtolower(Str::slug($validateData['name'], '-'));
            }

            $validateData['img_name'] = $path;
            GalleryPhoto::create($validateData);

            return redirect()->route('photo')->with('success', 'Data Telah ditambahkan!');
        }

        return back()->with('error', 'Gagal mengupload gambar.');
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($slug)
    {
        $photo = GalleryPhoto::where('slug', $slug)->firstOrFail();
        return view('admin.components.gallery.editphoto', compact('photo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $slug)
    {
        $photo = GalleryPhoto::where('slug', $slug)->firstOrFail();

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'name' => 'required',
            'desc' => 'required',
            'slug' => 'required'
        ]);

        $imagePath = $photo['img_name'];

        if (Storage::disk('public')->exists($imagePath)) {

            Storage::disk('public')->delete($imagePath);

            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('images/gallery/photos', $name, 'public');

            $photo['img_name'] = $path;
            $photo->update($request->only('name','img_name', 'desc'));

            $photo = GalleryPhoto::where('slug', $slug)->firstOrFail();

            return redirect()->route('photo')->with('success', 'Data Telah diubah!');
        }

        return back()->with('error', 'Gambar tidak ditemukan.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($slug)
    {
        $photo = GalleryPhoto::where('slug', $slug)->firstOrFail();

        $imagePath = $photo['img_name'];

        if (Storage::disk('public')->exists($imagePath)) {
            Storage::disk('public')->delete($imagePath);

            $photo->delete();

            return redirect()->route('photo')->with('success', 'Data Telah dihapus!');
        }

        return back()->with('error', 'Gambar tidak ditemukan.');

    }
}
