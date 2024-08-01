<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Agenda;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agendas = Agenda::get();
        $shortMonths = ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'];

        foreach ($agendas as $agenda) {
            $date_start = Carbon::parse($agenda->agenda_start);
            $day_start = $date_start->format('d');
            $month_start = $shortMonths[$date_start->month - 1];
            $year_start = $date_start->format('Y');

            $time_start = Carbon::parse($agenda->agenda_start);
            $hour_start = $time_start->format('H:i');

            $agenda->day_start = $day_start;
            $agenda->month_start = $month_start;
            $agenda->formatted_time_start = $hour_start;
            $agenda->formatted_date_start = "$day_start $month_start $year_start";

            $date_end = Carbon::parse($agenda->agenda_end);
            $day_end = $date_end->format('d');
            $month_end = $shortMonths[$date_end->month - 1];
            $year_end = $date_end->format('Y');

            $time_end = Carbon::parse($agenda->agenda_end);
            $hour_end = $time_end->format('H:i');

            $agenda->day_end = $day_end;
            $agenda->month_end = $month_end;
            $agenda->formatted_time_end = $hour_end;
            $agenda->formatted_date_end = "$day_end $month_end $year_end";
        }

        return view('admin.components.agenda.agenda', compact('agendas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.components.agenda.addagenda');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'desc' => 'required',
            'location' => 'required',
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

        return view('admin.components.agenda.editagenda', compact('agenda'));
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
            'location' => 'required',
            'agenda_start' => 'required',
            'agenda_end' => 'required',
        ]);

            $agenda->update($request->only('name','img_name', 'location', 'agenda_start', 'agenda_end', 'desc'));

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

    public function downloadPDF()
    {
        $data = Agenda::all(); // Ambil semua data dari tabel yang diinginkan

        $shortMonths = ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'];

        foreach ($data as $agenda) {
            $date_start = Carbon::parse($agenda->agenda_start);
            $day_start = $date_start->format('d');
            $month_start = $shortMonths[$date_start->month - 1];
            $year_start = $date_start->format('Y');

            $time_start = Carbon::parse($agenda->agenda_start);
            $hour_start = $time_start->format('H:i');

            $agenda->day_start = $day_start;
            $agenda->month_start = $month_start;
            $agenda->formatted_time_start = $hour_start;
            $agenda->formatted_date_start = "$day_start $month_start $year_start";

            $date_end = Carbon::parse($agenda->agenda_end);
            $day_end = $date_end->format('d');
            $month_end = $shortMonths[$date_end->month - 1];
            $year_end = $date_end->format('Y');

            $time_end = Carbon::parse($agenda->agenda_end);
            $hour_end = $time_end->format('H:i');

            $agenda->day_end = $day_end;
            $agenda->month_end = $month_end;
            $agenda->formatted_time_end = $hour_end;
            $agenda->formatted_date_end = "$day_end $month_end $year_end";
        }

        $pdf = PDF::loadView('admin.components.agenda.pdfview', compact('data'));

        $fileName = 'Data Agenda SD YPKP 2 Sentani'.'.pdf';

        return $pdf->download($fileName);
    }
}
