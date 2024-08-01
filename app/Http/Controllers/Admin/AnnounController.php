<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Models\Announ;
use Barryvdh\DomPDF\Facade\Pdf;

class AnnounController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $announ = Announ::get();
        return view('admin.components.announ.announ', compact('announ'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.components.announ.addannoun');
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
            $path = $image->storeAs('images/announs/'.$validateData['slug'].'/', $name, 'public');

            $validateData['img_name'] = $path;
            Announ::create($validateData);

            return redirect()->route('announs')->with('success', 'Data Telah ditambahkan!');
        }

        return back()->with('error', 'Gagal mengupload gambar.');
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
        $announ = Announ::where('slug', $slug)->firstOrFail();
        return view('admin.components.announ.editannoun', compact('announ'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $slug)
    {
        $announ = Announ::where('slug', $slug)->firstOrFail();

        $request->validate([
            'name' => 'required',
            'desc' => 'required',
            'slug' => 'required',
        ]);

        $imagePath = $announ['img_name'];

        if ($request['image']) {

            if (Storage::disk('public')->exists($imagePath)) {

                $path = 'public/images/announs/'.$announ['slug'];

                Storage::deleteDirectory($path);

                $image = $request->file('image');
                $name = time() . '.' . $image->getClientOriginalExtension();
                $pathImage = $image->storeAs('images/announs/'.$announ['slug'].'/', $name, 'public');

                $announ['img_name'] = $pathImage;
                $announ->update($request->only('name','img_name', 'desc'));

                $announ = Announ::where('slug', $slug)->firstOrFail();

                return redirect()->route('announs')->with('success', 'Data Telah diubah!');
            }
        } else {
            $announ->update($request->only('name', 'desc'));

            $announ = Announ::where('slug', $slug)->firstOrFail();

            return redirect()->route('announs')->with('success', 'Data Telah diubah!');
        }

        return back()->with('error', 'Gambar tidak ditemukan.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($slug)
    {
        $announ = Announ::where('slug', $slug)->firstOrFail();

        $imagePath = 'public/'.$announ['img_name'];

        if (Storage::exists($imagePath)) {

            $path = 'public/images/announs/'.$announ['slug'];

            Storage::deleteDirectory($path);

            Storage::delete($imagePath);

            $announ->delete();

            return redirect()->route('announs')->with('success', 'Data Telah dihapus!');
        }

        return back()->with('error', 'Gambar tidak ditemukan.');
    }

    public function downloadPDF()
    {
        $data = Announ::all(); // Ambil semua data dari tabel yang diinginkan

        $pdf = PDF::loadView('admin.components.announ.pdfview', compact('data'));

        $fileName = 'Data Pengumuman SD YPKP 2 Sentani'.'.pdf';

        return $pdf->download($fileName);
    }


}
