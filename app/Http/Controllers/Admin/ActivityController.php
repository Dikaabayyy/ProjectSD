<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Models\Activity;
use Barryvdh\DomPDF\Facade\Pdf;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activity = Activity::all();
        return view('admin.components.program.activity.activity', compact('activity'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.components.program.activity.addactivity');
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
            $path = $image->storeAs('images/activity/'.$validateData['slug'].'/', $name, 'public');

            $validateData['img_name'] = $path;
            Activity::create($validateData);

            return redirect()->route('activity')->with('success', 'Data Telah ditambahkan!');
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
        $activity = Activity::where('slug', $slug)->firstOrFail();
        return view('admin.components.program.activity.editactivity', compact('activity'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $slug)
    {
        $activity = Activity::where('slug', $slug)->firstOrFail();

        $request->validate([
            'name' => 'required',
            'desc' => 'required',
            'slug' => 'required',
        ]);

        $imagePath = $activity['img_name'];

        if ($request['image']) {

            if (Storage::disk('public')->exists($imagePath)) {

                $path = 'public/images/activity/'.$activity['slug'];

                Storage::deleteDirectory($path);

                $image = $request->file('image');
                $name = time() . '.' . $image->getClientOriginalExtension();
                $pathImage = $image->storeAs('images/activity/'.$activity['slug'].'/', $name, 'public');

                $activity['img_name'] = $pathImage;
                $activity->update($request->only('name','img_name', 'desc'));

                $activity = Activity::where('slug', $slug)->firstOrFail();

                return redirect()->route('activity')->with('success', 'Data Telah diubah!');
            }
        } else {
            $activity->update($request->only('name', 'desc'));

            $activity = Activity::where('slug', $slug)->firstOrFail();

            return redirect()->route('activity')->with('success', 'Data Telah diubah!');
        }

        return back()->with('error', 'Gambar tidak ditemukan.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($slug)
    {
        $activity = Activity::where('slug', $slug)->firstOrFail();

        $imagePath = 'public/'.$activity['img_name'];

        if (Storage::exists($imagePath)) {

            $path = 'public/images/activity/'.$activity['slug'];

            Storage::deleteDirectory($path);

            Storage::delete($imagePath);

            $activity->delete();

            return redirect()->route('activity')->with('success', 'Data Telah dihapus!');
        }

        return back()->with('error', 'Gambar tidak ditemukan.');
    }

    public function downloadPDF()
    {
        $data = Activity::all(); // Ambil semua data dari tabel yang diinginkan

        $pdf = PDF::loadView('admin.components.program.activity.pdfview', compact('data'));

        $fileName = 'Data Kegiatan SD YPKP 2 Sentani'.'.pdf';

        return $pdf->download($fileName);
    }
}
