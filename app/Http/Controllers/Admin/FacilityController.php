<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Models\Facility;
use PDF;

class FacilityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $facility = Facility::all();
        return view('admin.components.program.facility.facility', compact('facility'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.components.program.facility.addfacility');
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
            $path = $image->storeAs('images/facility/'.$validateData['slug'].'/', $name, 'public');

            $validateData['img_name'] = $path;
            Facility::create($validateData);

            return redirect()->route('facility')->with('success', 'Data Telah ditambahkan!');
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
        $facility = Facility::where('slug', $slug)->firstOrFail();
        return view('admin.components.program.facility.editfacility', compact('facility'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $slug)
    {
        $facility = Facility::where('slug', $slug)->firstOrFail();

        $request->validate([
            'name' => 'required',
            'desc' => 'required',
            'slug' => 'required',
        ]);

        $imagePath = $facility['img_name'];

        if ($request['image']) {

            if (Storage::disk('public')->exists($imagePath)) {

                $path = 'public/images/facility/'.$facility['slug'];

                Storage::deleteDirectory($path);

                $image = $request->file('image');
                $name = time() . '.' . $image->getClientOriginalExtension();
                $pathImage = $image->storeAs('images/facility/'.$facility['slug'].'/', $name, 'public');

                $facility['img_name'] = $pathImage;
                $facility->update($request->only('name','img_name', 'desc'));

                $facility = Facility::where('slug', $slug)->firstOrFail();

                return redirect()->route('facility')->with('success', 'Data Telah diubah!');
            }
        } else {
            $facility->update($request->only('name', 'desc'));

            $facility = Facility::where('slug', $slug)->firstOrFail();

            return redirect()->route('facility')->with('success', 'Data Telah diubah!');
        }

        return back()->with('error', 'Gambar tidak ditemukan.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($slug)
    {
        $facility = Facility::where('slug', $slug)->firstOrFail();

        $imagePath = 'public/'.$facility['img_name'];

        if (Storage::exists($imagePath)) {

            $path = 'public/images/facility/'.$facility['slug'];

            Storage::deleteDirectory($path);

            Storage::delete($imagePath);

            $facility->delete();

            return redirect()->route('facility')->with('success', 'Data Telah dihapus!');
        }

        return back()->with('error', 'Gambar tidak ditemukan.');
    }

    public function downloadPDF()
    {
        $data = Facility::all(); // Ambil semua data dari tabel yang diinginkan

        $pdf = PDF::loadView('admin.components.program.facility.pdfview', compact('data'));

        $fileName = 'Data Fasilitas SD YPKP 2 Sentani'.'.pdf';

        return $pdf->download($fileName);
    }
}
