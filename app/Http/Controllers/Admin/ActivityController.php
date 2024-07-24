<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Models\Activity;

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
        $validateData = $request->validate([
            'name' => 'required',
            'desc' => 'required',
        ]);

        if (empty($validateData['slug'])) {
            $validateData['slug'] = strtolower(Str::slug($validateData['name'], '-'));
        }

        Activity::create($validateData);

        return redirect()->route('activity')->with('success', 'Data Telah ditambahkan!');
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
            'slug' => 'required'
        ]);

        $activity->update($request->only('name', 'desc', 'slug'));

        $activity = Activity::where('slug', $slug)->firstOrFail();

        return redirect()->route('activity')->with('success', 'Data Telah di Update!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($slug)
    {
        $activity = Activity::where('slug', $slug)->firstOrFail();

        $activity->delete();

        return redirect()->route('activity')->with('success', 'Data Telah dihapus!');
    }
}
