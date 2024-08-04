<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Teacher;
use  App\Models\TeachersData;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;

class TeacherSchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $perPage = 5;

        $currentPage = $request->input('page', 1);

        $search = $request->input('search');

        $offset = ($currentPage - 1) * $perPage;

        $query = Teacher::query();

        if ($search) {
            $query->where('name', 'like', '%' . $search . '%');
        }

        $teacher = $query->offset($offset)->limit($perPage)->get();

        $totalData = $query->count();

        $totalPages = ceil($totalData / $perPage);

        $shortMonths = ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'];

        foreach ($teacher as $dt) {
            //Birth Date
            $date_birth = Carbon::parse($dt->birth_date);
            $day_birth = $date_birth->format('d');
            $month_birth = $shortMonths[$date_birth->month - 1];
            $year_birth = $date_birth->format('Y');

            $dt->day_birth = $day_birth;
            $dt->month_birth = $month_birth;
            $dt->formatted_date_birth = "$day_birth $month_birth $year_birth";

            // Start Teaching
            $date_teaching = Carbon::parse($dt->teachers_data->start_up_teaching);
            $day_teaching = $date_teaching->format('d');
            $month_teaching = $shortMonths[$date_teaching->month - 1];
            $year_teaching = $date_teaching->format('Y');

            $dt->day_teaching = $day_teaching;
            $dt->month_teaching = $month_teaching;
            $dt->formatted_date_teaching = "$day_teaching $month_teaching $year_teaching";

            // Start Teaching
            $date_working = Carbon::parse($dt->teachers_data->start_working);
            $day_working = $date_working->format('d');
            $month_working = $shortMonths[$date_working->month - 1];
            $year_working = $date_working->format('Y');

            $dt->day_working = $day_working;
            $dt->month_working = $month_working;
            $dt->formatted_date_working = "$day_working $month_working $year_working";
        }

        return view('admin.components.teachers.tcrdata', compact('teacher', 'currentPage', 'totalPages', 'totalData', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.components.teachers.tcradddata');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Teachers Data
        $validateTeacherData = $request->validate([
            'name' => 'required',
            'position' => 'required',
            'ijazah' => 'required',
            'subjects' => 'required',
            'ijazah_date' => 'required',
            'start_up_teaching' => 'required',
            'start_working' => 'required',
            'certificate_status' => 'required',
        ]);


        if (empty($validateTeacherData['nuptk'])) {

            if (empty($validateTeacherData['slug'])) {
                $validateTeacherData['slug'] = strtolower(Str::slug($validateTeacherData['name'], '-'));
            }

            $storeTeacherData = TeachersData::create($validateTeacherData);

        } else {
            $validateTeacherData['gol'] = $request['golongan']." ".$request['kategori'];

            if (empty($validateTeacherData['slug'])) {
                $validateTeacherData['slug'] = strtolower(Str::slug($validateTeacherData['name'], '-'));
            }

            $storeTeacherData = TeachersData::create($validateTeacherData);
        }

        //Teachers
        $validateTeacher = $request->validate([
            'name' => 'required',
            'gender' => 'required',
            'birth_place' => 'required',
            'birth_date' => 'required',
            'status' => 'required',
        ]);

        if (empty($validateTeacher['slug'])) {
            $validateTeacher['slug'] = strtolower(Str::slug($validateTeacher['name'], '-'));
        }

        if (empty($validateTeacher['teachers_datas_id'])) {
            $validateTeacher['teachers_datas_id'] = $storeTeacherData->id;
        }

        Teacher::create($validateTeacher);

        return redirect()->route('tcrdata')->with('success', 'Data Telah ditambahkan!');
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
        $teacher = Teacher::where('slug', $slug)->firstOrFail();

        return view('admin.components.teachers.tcreditdata', compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $slug)
    {
        //Teacher's Data
        $teacherData = TeachersData::where('slug', $slug)->firstOrFail();

        $validateTeacherData = $request->validate([
            'name' => 'required',
            'position' => 'required',
            'ijazah' => 'required',
            'subjects' => 'required',
            'ijazah_date' => 'required',
            'start_up_teaching' => 'required',
            'start_working' => 'required',
            'certificate_status' => 'required',
        ]);

        if (empty($validateTeacherData['nuptk'])) {

            $teacherData->update($request->only('nip', 'nuptk', 'gol', 'position', 'ijazah', 'subjects', 'ijazah_date', 'start_up_teaching', 'start_working', 'certificate_status', 'certificate_year'));

        } else {
            $teacherData['gol'] = $request['golongan']." ".$request['kategori'];

            $teacherData->update($request->only('nip', 'nuptk', 'gol', 'position', 'ijazah', 'subjects', 'ijazah_date', 'start_up_teaching', 'start_working', 'certificate_status', 'certificate_year'));
        }

        //Teacher
        $teacher = Teacher::where('slug', $slug)->firstOrFail();

        $imagePath = $teacher['img_name'];

        if ($request['image']) {

            if (Storage::disk('public')->exists($imagePath)) {

                $path = 'public/images/profile/'.$teacher['slug'];

                Storage::deleteDirectory($path);

                $image = $request->file('image');
                $name = time() . '.' . $image->getClientOriginalExtension();
                $pathImage = $image->storeAs('images/profile/'.$teacher['slug'].'/', $name, 'public');

                $teacher['img_name'] = $pathImage;
                $teacher->update($request->only('name','img_name', 'gender', 'birth_place', 'birth_date', 'status'));

                $teacher = Teacher::where('slug', $slug)->firstOrFail();

                return redirect()->route('tcrdata')->with('success', 'Data Telah diubah!');
            }
        } else {
            $teacher->update($request->only('name', 'gender', 'birth_place', 'birth_date', 'status'));

            $teacher = Teacher::where('slug', $slug)->firstOrFail();

            return redirect()->route('tcrdata')->with('success', 'Data Telah diubah!');
        }

        return back()->with('error', 'Gambar tidak ditemukan.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($slug)
    {
        //Teacher's Data
        $teacherData = TeachersData::where('slug', $slug)->firstOrFail();

        $teacherData->delete();

        //Teacher
        $teacher = Teacher::where('slug', $slug)->firstOrFail();

        $imagePath = 'public/'.$teacher['img_name'];

        if (Storage::exists($imagePath)) {

            $path = 'public/images/profile/'.$teacher['slug'];

            if ($teacher['img_name'] == 'images/profile/profile-img.png'){

                $teacher->delete();

            } else{

                Storage::deleteDirectory($path);

                Storage::delete($imagePath);

                $teacher->delete();
            }

            return redirect()->route('tcrdata')->with('success', 'Data Telah dihapus!');

        }

        return back()->with('error', 'Gambar tidak ditemukan.');
    }

    public function downloadPDF()
    {
        $data = Teacher::all(); // Ambil semua data dari tabel yang diinginkan

        $shortMonths = ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'];

        foreach ($data as $dt) {
            //Birth Date
            $date_birth = Carbon::parse($dt->birth_date);
            $day_birth = $date_birth->format('d');
            $month_birth = $shortMonths[$date_birth->month - 1];
            $year_birth = $date_birth->format('Y');

            $dt->day_birth = $day_birth;
            $dt->month_birth = $month_birth;
            $dt->formatted_date_birth = "$day_birth $month_birth $year_birth";

            // Start Teaching
            $date_teaching = Carbon::parse($dt->teachers_data->start_up_teaching);
            $day_teaching = $date_teaching->format('d');
            $month_teaching = $shortMonths[$date_teaching->month - 1];
            $year_teaching = $date_teaching->format('Y');

            $dt->day_teaching = $day_teaching;
            $dt->month_teaching = $month_teaching;
            $dt->formatted_date_teaching = "$day_teaching $month_teaching $year_teaching";

            // Start Teaching
            $date_working = Carbon::parse($dt->teachers_data->start_working);
            $day_working = $date_working->format('d');
            $month_working = $shortMonths[$date_working->month - 1];
            $year_working = $date_working->format('Y');

            $dt->day_working = $day_working;
            $dt->month_working = $month_working;
            $dt->formatted_date_working = "$day_working $month_working $year_working";
        }

        $pdf = PDF::loadView('admin.components.teachers.pdfview', compact('data'))->setPaper('a4', 'landscape');

        $fileName = 'Data Guru SD YPKP 2 Sentani'.'.pdf';

        return $pdf->download($fileName);
    }
}
