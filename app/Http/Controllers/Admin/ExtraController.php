<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Models\Extra;
use Barryvdh\DomPDF\Facade\Pdf;

class ExtraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $extra = Extra::all();
        return view('admin.components.program.extra.extra', compact('extra'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.components.program.extra.addextra');
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
            $path = $image->storeAs('images/extra/'.$validateData['slug'].'/', $name, 'public');

            $validateData['img_name'] = $path;
            Extra::create($validateData);

            return redirect()->route('extra')->with('success', 'Data Telah ditambahkan!');
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
        $extra = Extra::where('slug', $slug)->firstOrFail();

        return view('admin.components.program.extra.editextra', compact('extra'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $slug)
    {
        $extra = Extra::where('slug', $slug)->firstOrFail();

        $request->validate([
            'name' => 'required',
            'desc' => 'required',
            'slug' => 'required',
        ]);

        $imagePath = $extra['img_name'];

        if ($request['image']) {

            if (Storage::disk('public')->exists($imagePath)) {

                $path = 'public/images/extra/'.$extra['slug'];

                Storage::deleteDirectory($path);

                $image = $request->file('image');
                $name = time() . '.' . $image->getClientOriginalExtension();
                $pathImage = $image->storeAs('images/extra/'.$extra['slug'].'/', $name, 'public');

                $extra['img_name'] = $pathImage;
                $extra->update($request->only('name','img_name', 'desc'));

                $extra = Extra::where('slug', $slug)->firstOrFail();

                return redirect()->route('extra')->with('success', 'Data Telah diubah!');
            }
        } else {
            $extra->update($request->only('name', 'desc'));

            $extra = Extra::where('slug', $slug)->firstOrFail();

            return redirect()->route('extra')->with('success', 'Data Telah diubah!');
        }

        return back()->with('error', 'Gambar tidak ditemukan.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($slug)
    {
        $extra = Extra::where('slug', $slug)->firstOrFail();

        $imagePath = 'public/'.$extra['img_name'];

        if (Storage::exists($imagePath)) {

            $path = 'public/images/extra/'.$extra['slug'];

            Storage::deleteDirectory($path);

            Storage::delete($imagePath);

            $extra->delete();

            return redirect()->route('extra')->with('success', 'Data Telah dihapus!');
        }

        return back()->with('error', 'Gambar tidak ditemukan.');
    }

    public function downloadPDF()
    {
        $data = Extra::all(); // Ambil semua data dari tabel yang diinginkan

        $pdf = PDF::loadView('admin.components.program.extra.pdfview', compact('data'));

        $fileName = 'Data Ekstrakurikuler SD YPKP 2 Sentani'.'.pdf';

        return $pdf->download($fileName);
    }
}
