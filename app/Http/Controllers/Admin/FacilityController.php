<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Models\Facility;

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
        $validateData = $request->validate([
            'name' => 'required',
            'desc' => 'required',
        ]);

        if (empty($validateData['slug'])) {
            $validateData['slug'] = strtolower(Str::slug($validateData['name'], '-'));
        }

        Facility::create($validateData);

        return redirect()->route('facility')->with('success', 'Data Telah ditambahkan!');
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
            'slug' => 'required'
        ]);

        $facility->update($request->only('name', 'desc', 'slug'));

        $facility = Facility::where('slug', $slug)->firstOrFail();

        return redirect()->route('facility')->with('success', 'Data Telah di Update!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($slug)
    {
        $facility = Facility::where('slug', $slug)->firstOrFail();

        $facility->delete();

        return redirect()->route('facility')->with('success', 'Data Telah dihapus!');
    }
}
