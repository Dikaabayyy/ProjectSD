<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutSch;
use App\Models\VisiMisi;

class AboutSchController extends Controller
{
    /*****************************/
    /*  About School Controller  */
    /*****************************/
    public function schabout()
    {
        $about = AboutSch::get();
        return view('admin.components.schoolprofile.schabout', compact('about'));
    }

    public function schabout_update(Request $request, $slug)
    {
        $about = AboutSch::where('slug', $slug)->firstOrFail();

        $request->validate([
            'about' => 'required',
            'slug' => 'required'
        ]);

        $about->update($request->only('about', 'slug'));


        $about = AboutSch::get();
        return redirect()->back()->with('success', 'Data Telah di Update!');
    }

    /*****************************/
    /*Visi&Misi School Controller*/
    /*****************************/
    public function visimisi()
    {
        $visimisi = VisiMisi::get();
        return view('admin.components.schoolprofile.visimisi', compact('visimisi'));
    }

    public function editvisimisi()
    {
        $visimisi = VisiMisi::get();
        return view('admin.components.schoolprofile.editvisimisi', compact('visimisi'));
    }

    public function update_visimisi(Request $request, $slug){

        $visimisi = VisiMisi::where('slug', $slug)->firstOrFail();

        $request->validate([
            'visi' => 'required',
            'misi' => 'required',
            'slug' => 'required'
        ]);

        $visimisi->update($request->only('visi', 'misi', 'slug'));


        $visimisi = VisiMisi::get();
        return redirect()->route('visimisi')->with('success', 'Data Telah di Update!');
    }

    /*****************************/
    /*  School Goals Controller  */
    /*****************************/
    public function schgoals()
    {
        return view('admin.components.schoolprofile.goals');
    }

    /*****************************/
    /*  School Greet Controller  */
    /*****************************/
    public function schgreets()
    {
        return view('admin.components.schoolprofile.schgreets');
    }

    /*****************************/
    /*School Structure Controller*/
    /*****************************/
    public function schstructure()
    {
        return view('admin.components.schoolprofile.schstructure');
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
