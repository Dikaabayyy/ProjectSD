<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Messages;
use App\Models\Agenda;
use App\Models\AboutSch;
use App\Models\VisiMisi;
use App\Models\GreetsSch;
use App\Models\GoalsSch;
use App\Models\Activity;
use App\Models\Extra;
use App\Models\Facility;
use App\Models\Performance;
use Carbon\Carbon;
use App\Models\GalleryPhoto;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::limit(1)->get();
        $newslist = News::limit(3)->get();
        $agendas = Agenda::limit(3)->get();
        $galleryphoto = GalleryPhoto::limit(9)->get();

        $shortMonths = ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'];

        foreach ($agendas as $agenda) {
            $date = Carbon::parse($agenda->agenda_start);
            $day = $date->format('d');
            $month = $shortMonths[$date->month - 1];
            $year = $date->format('Y');

            $time = Carbon::parse($agenda->agenda_start);
            $hour = $time->format('H:i');

            $agenda->day = $day;
            $agenda->month = $month;
            $agenda->formatted_time = $hour;
            $agenda->formatted_date = "$day $month $year";
        }
        return view('users.components.welcome', compact('news', 'newslist', 'agendas', 'galleryphoto'));
    }

    /**
       * Profil Tentang Sekolah *
    **/

    public function tentang()
    {
        $about = AboutSch::get();
        return view('users.components.profile.about.tentang', compact('about'));
    }

    public function visimisi()
    {
        $visimisi = VisiMisi::get();
        return view('users.components.profile.about.visimisi', compact('visimisi'));
    }

    public function sambutan()
    {
        $greets = GreetsSch::get();
        return view('users.components.profile.about.sambutan', compact('greets'));
    }

    public function tujuan()
    {
        $goals = GoalsSch::get();
        return view('users.components.profile.about.tujuan', compact('goals'));
    }

    /**
       * Profil Program Sekolah *
    **/

    public function kegiatan()
    {
        $activity = Activity::get();
        return view('users.components.profile.program.kegiatan', compact('activity'));
    }

    public function ekstrakurikuler()
    {
        $extra = Extra::get();
        return view('users.components.profile.program.ekstrakurikuler', compact('extra'));
    }

    public function fasilitas()
    {
        $facility = Facility::get();
        return view('users.components.profile.program.fasilitas', compact('facility'));
    }

    /**
       * Profil Program Sekolah *
    **/

    public function preskab()
    {
        $preskab = Performance::where('level', 'Kabupaten/Kota')->get();
        return view('users.components.profile.performance.prestasikab', compact('preskab'));
    }

    public function presprov()
    {
        $presprov = Performance::where('level', 'Provinsi')->get();
        return view('users.components.profile.performance.prestasiprov', compact('presprov'));
    }

    public function presnas()
    {
        $presnas = Performance::where('level', 'Nasional')->get();
        return view('users.components.profile.performance.prestasinas', compact('presnas'));
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
        $validateData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
            'messages' => 'required',
        ]);

        if (empty($validateData['slug'])) {
            $validateData['slug'] = strtolower(Str::slug($validateData['name'], '-'));
        }

        Messages::create($validateData);

        return redirect()->back()->with('success', 'Pesan Anda Telah Terkirim!');
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
