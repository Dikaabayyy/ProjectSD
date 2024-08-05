<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Models\News;
use App\Models\Announ;
use App\Models\Agenda;

use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function berita()
    {
        $news = News::get();

        $shortMonths = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

        foreach ($news as $berita) {
            $date = Carbon::parse($berita->created_at);
            $day = $date->format('d');
            $month = $shortMonths[$date->month - 1];
            $year = $date->format('Y');

            $berita->day = $day;
            $berita->month = $month;
            $berita->formatted_date = "$day $month $year";
        }

        return view('users.components.information.berita', compact('news'));
    }

    public function pengumuman()
    {
        $announ = Announ::get();

        $shortMonths = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

        foreach ($announ as $pengumuman) {
            $date = Carbon::parse($pengumuman->created_at);
            $day = $date->format('d');
            $month = $shortMonths[$date->month - 1];
            $year = $date->format('Y');

            $pengumuman->day = $day;
            $pengumuman->month = $month;
            $pengumuman->formatted_date = "$day $month $year";
        }

        return view('users.components.information.pengumuman', compact('announ'));
    }

    public function agenda()
    {
        $agendas = Agenda::get();

        $shortMonths = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

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

        return view('users.components.information.agenda', compact('agendas'));
    }

    public function detail_berita($slug)
    {
        $berita = News::where('slug', $slug)->get();

        $shortMonths = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

        foreach ($berita as $beritas) {
            $date = Carbon::parse($beritas->created_at);
            $day = $date->format('d');
            $month = $shortMonths[$date->month - 1];
            $year = $date->format('Y');

            $beritas->day = $day;
            $beritas->month = $month;
            $beritas->formatted_date = "$day $month $year";
        }

        return view('users.components.information.detailberita', compact('berita'));
    }

    public function detail_pengumuman($slug)
    {
        $pengumuman = News::where('slug', $slug)->get();

        $shortMonths = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

        foreach ($pengumuman as $pengumumans) {
            $date = Carbon::parse($pengumumans->created_at);
            $day = $date->format('d');
            $month = $shortMonths[$date->month - 1];
            $year = $date->format('Y');

            $pengumumans->day = $day;
            $pengumumans->month = $month;
            $pengumumans->formatted_date = "$day $month $year";
        }

        return view('users.components.information.detailpengumuman', compact('pengumuman'));
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {

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
