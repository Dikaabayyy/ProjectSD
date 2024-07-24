<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\Extra;
use App\Models\Activity;
use App\Models\Facility;

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

    public function storeextra(Request $request){

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

    public function editextra($slug)
    {
        $extra = Extra::where('slug', $slug)->firstOrFail();

        return view('admin.components.program.extra.editextra', compact('extra'));
    }

    public function updateextra(Request $request, $slug){
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

    public function deleteextra($slug){
        $extra = Extra::where('slug', $slug)->firstOrFail();

        $extra->delete();

        return redirect()->route('extra')->with('success', 'Data Telah dihapus!');
    }

    public function activity(){
        $activity = Activity::all();
        return view('admin.components.program.activity.activity', compact('activity'));
    }

    public function addactivity(){
        return view('admin.components.program.activity.addactivity');
    }

    public function storeactivity(Request $request){

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

    public function deleteactivity($slug){
        $activity = Activity::where('slug', $slug)->firstOrFail();

        $activity->delete();

        return redirect()->route('activity')->with('success', 'Data Telah dihapus!');
    }

    public function facility(){
        $facility = Facility::all();
        return view('admin.components.program.facility.facility', compact('facility'));
    }

    public function addfacility(){
        return view('admin.components.program.facility.addfacility');
    }

    public function storefacility(Request $request){

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

    public function editfacility($slug){
        $facility = Facility::where('slug', $slug)->firstOrFail();
        return view('admin.components.program.facility.editfacility', compact('facility'));
    }

    public function updatefacility(Request $request, $slug){
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

    public function deletefacility($slug){
        $facility = Facility::where('slug', $slug)->firstOrFail();

        $facility->delete();

        return redirect()->route('facility')->with('success', 'Data Telah dihapus!');
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
