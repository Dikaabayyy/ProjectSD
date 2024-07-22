<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Extra;
use App\Models\Activity;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function extra()
    {
        $extra = Extra::all();
        return view('admin.components.program.extra.extra', compact('extra'));
    }

    public function addextra()
    {
        return view('admin.components.program.extra.addextra');
    }

    public function editextra($slug)
    {
        $extra = Extra::where('slug', $slug)->firstOrFail();
        return view('admin.components.program.extra.editextra', compact('extra'));
    }

    public function updateextra(Request $request, $slug){
        $extra = Extra::where('slug', $slug) ->firstOrFail();

        $request->validate([
            'name' => 'required',
            'desc' => 'required',
            'slug' => 'required'
        ]);

        $extra->update($request->only('name', 'desc', 'slug'));

        $extra = Extra::where('slug', $slug) ->firstOrFail();

        return redirect()->route('extra')->with('success', 'Data Telah di Update!');
    }

    public function activity(){
        $activity = Activity::all();
        return view('admin.components.program.activity.activity', compact('activity'));
    }

    public function editactivity($slug){
        $activity = Activity::where('slug', $slug)->firstOrFail();
        return view('admin.components.program.activity.editactivity', compact('activity'));
    }

    public function updateactivity(Request $request, $slug){
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
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
