<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Performance;
use Barryvdh\DomPDF\Facade\Pdf;

class PerformanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $performance = Performance::get();
        return view('admin.components.performance.performance', compact('performance'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.components.performance.addperformance');
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
            'level' => 'required',
            'location' => 'required',
            'performance_date' => 'required',
        ]);

        if (empty($validateData['slug'])) {
            $validateData['slug'] = strtolower(Str::slug($validateData['name'], '-'));
        }

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('images/performance/'.$validateData['slug'].'/', $name, 'public');

            $validateData['img_name'] = $path;

            Performance::create($validateData);

            return redirect()->route('performance')->with('success', 'Data Telah ditambahkan!');
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
        $performance = Performance::where('slug', $slug)->firstOrFail();

        return view('admin.components.performance.editperformance', compact('performance'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $slug)
    {
        $performance = Performance::where('slug', $slug)->firstOrFail();

        $request->validate([
            'name' => 'required',
            'desc' => 'required',
            'slug' => 'required',
            'location' => 'required',
            'performance_date' => 'required'
        ]);

        $imagePath = $performance['img_name'];

        if ($request['image']) {

            if (Storage::disk('public')->exists($imagePath)) {

                $path = 'public/images/performance/'.$performance['slug'];

                Storage::deleteDirectory($path);

                $image = $request->file('image');
                $name = time() . '.' . $image->getClientOriginalExtension();
                $pathImage = $image->storeAs('images/performance/'.$performance['slug'].'/', $name, 'public');

                $performance['img_name'] = $pathImage;
                $performance->update($request->only('name','img_name', 'desc', 'level', 'location', 'performance_date'));

                $performance = Performance::where('slug', $slug)->firstOrFail();

                return redirect()->route('performance')->with('success', 'Data Telah diubah!');
            }
        } else {
            $performance->update($request->only('name', 'desc', 'level', 'location', 'performance_date'));

            $performance = Performance::where('slug', $slug)->firstOrFail();

            return redirect()->route('performance')->with('success', 'Data Telah diubah!');
        }

        return back()->with('error', 'Gambar tidak ditemukan.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($slug)
    {
        $performance = Performance::where('slug', $slug)->firstOrFail();

        $imagePath = 'public/'.$performance['img_name'];


        if (Storage::exists($imagePath)) {

            $path = 'public/images/performance/'.$performance['slug'];

            if ($performance['img_name'] == 'images/performance/img-performance.jpg'){

                $performance->delete();

            } else{

                Storage::deleteDirectory($path);

                Storage::delete($imagePath);

                $performance->delete();
            }

            return redirect()->route('performance')->with('success', 'Data Telah dihapus!');

        }

        return back()->with('error', 'Gambar tidak ditemukan.');
    }

    public function downloadPDF()
    {
        $data = Performance::all(); // Ambil semua data dari tabel yang diinginkan

        $pdf = PDF::loadView('admin.components.performance.pdfview', compact('data'));

        $fileName = 'Data Prestasi SD YPKP 2 Sentani'.'.pdf';

        return $pdf->download($fileName);
    }
}
