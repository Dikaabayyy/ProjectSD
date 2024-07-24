<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Agenda;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agenda = Agenda::get();
        return view('admin.components.news.agenda', compact('agenda'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.components.news.addagenda');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'desc' => 'required',
            'agenda_start' => 'required',
            'agenda_end' => 'required',
        ]);

        if (empty($validateData['slug'])) {
            $validateData['slug'] = strtolower(Str::slug($validateData['name'], '-'));
        }

        Agenda::create($validateData);

        return redirect()->route('agenda')->with('success', 'Data Telah ditambahkan!');

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
        $agenda = Agenda::where('slug', $slug)->firstOrFail();

        return view('admin.components.news.editagenda', compact('agenda'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $slug)
    {
        $agenda = Agenda::where('slug', $slug)->firstOrFail();

        $request->validate([
            'name' => 'required',
            'desc' => 'required',
            'agenda_start' => 'required',
            'agenda_end' => 'required',
        ]);

            $agenda->update($request->only('name','img_name', 'agenda_start', 'agenda_end', 'desc'));

            $agenda = Agenda::where('slug', $slug)->firstOrFail();

            return redirect()->route('agenda')->with('success', 'Data Telah diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($slug)
    {
        $agenda = Agenda::where('slug', $slug)->firstOrFail();

        $agenda->delete();

        return redirect()->route('agenda')->with('success', 'Data Telah dihapus!');
    }
}
