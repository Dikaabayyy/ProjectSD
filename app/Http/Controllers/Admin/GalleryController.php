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

        $validateData = $request->validate([
            'name' => 'required',
            'desc' => 'required',
        ]);

        if (empty($validateData['slug'])) {
            $validateData['slug'] = strtolower(Str::slug($validateData['name'], '-'));
        }

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('images/gallery/photos/'.$validateData['slug'].'/', $name, 'public');

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
            'name' => 'required',
            'desc' => 'required',
            'slug' => 'required',
        ]);

        $imagePath = $photo['img_name'];

        if ($request['image']) {

            if (Storage::disk('public')->exists($imagePath)) {

                $path = 'public/images/gallery/photos/'.$photo['slug'];

                Storage::deleteDirectory($path);

                $image = $request->file('image');
                $name = time() . '.' . $image->getClientOriginalExtension();
                $pathImage = $image->storeAs('images/gallery/photos/'.$photo['slug'].'/', $name, 'public');

                $photo['img_name'] = $pathImage;
                $photo->update($request->only('name','img_name', 'desc'));

                $photo = GalleryPhoto::where('slug', $slug)->firstOrFail();

                return redirect()->route('photo')->with('success', 'Data Telah diubah!');
            }
        } else {
            $photo->update($request->only('name', 'desc'));

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
        $photos = GalleryPhoto::where('slug', $slug)->firstOrFail();

        $imagePath = 'public/'.$photos['img_name'];

        if (Storage::exists($imagePath)) {

            $path = 'public/images/gallery/photos/'.$photos['slug'];

            Storage::deleteDirectory($path);

            Storage::delete($imagePath);

            $photos->delete();

            return redirect()->route('photo')->with('success', 'Data Telah dihapus!');
        }

        return back()->with('error', 'Gambar tidak ditemukan.');
    }
}
