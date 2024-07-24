<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Models\Extra;

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
        $validateData = $request->validate([
            'name' => 'required',
            'desc' => 'required',
        ]);

        if (empty($validateData['slug'])) {
            $validateData['slug'] = strtolower(Str::slug($validateData['name'], '-'));
        }

        Extra::create($validateData);

        return redirect()->route('extra')->with('success', 'Data Telah ditambahkan!');
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
            'slug' => 'required'
        ]);

        $extra->update($request->only('name', 'desc', 'slug'));

        $extra = Extra::where('slug', $slug)->firstOrFail();

        return redirect()->route('extra')->with('success', 'Data Telah di Update!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($slug)
    {
        $extra = Extra::where('slug', $slug)->firstOrFail();

        $extra->delete();

        return redirect()->route('extra')->with('success', 'Data Telah dihapus!');
    }
}
