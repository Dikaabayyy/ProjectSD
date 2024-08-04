<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Models\Students;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;

class StudentSchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function stddata1()
    {
        $students1a = Students::where('class', '1')->where('category', 'A')->get();
        $students1b = Students::where('class', '1')->where('category', 'B')->get();
        $students1c = Students::where('class', '1')->where('category', 'C')->get();

        $sa = Students::where('class', '1')->where('category', 'A')->first();
        $sb = Students::where('class', '1')->where('category', 'B')->first();
        $sc = Students::where('class', '1')->where('category', 'C')->first();

        return view('admin.components.students.class1', compact('students1a', 'students1b', 'students1c', 'sa', 'sb', 'sc'));
    }

    public function stddata2()
    {
        $students2a = Students::where('class', '2')->where('category', 'A')->get();
        $students2b = Students::where('class', '2')->where('category', 'B')->get();
        $students2c = Students::where('class', '2')->where('category', 'C')->get();

        $sa = Students::where('class', '2')->where('category', 'A')->first();
        $sb = Students::where('class', '2')->where('category', 'B')->first();
        $sc = Students::where('class', '2')->where('category', 'C')->first();

        return view('admin.components.students.class2', compact('students2a', 'students2b', 'students2c', 'sa', 'sb', 'sc'));
    }

    public function stddata3()
    {
        $students3a = Students::where('class', '3')->where('category', 'A')->get();
        $students3b = Students::where('class', '3')->where('category', 'B')->get();
        $students3c = Students::where('class', '3')->where('category', 'C')->get();

        $sa = Students::where('class', '3')->where('category', 'A')->first();
        $sb = Students::where('class', '3')->where('category', 'B')->first();
        $sc = Students::where('class', '3')->where('category', 'C')->first();

        return view('admin.components.students.class3', compact('students3a', 'students3b', 'students3c', 'sa', 'sb', 'sc'));
    }

    public function stddata4()
    {
        $students4a = Students::where('class', '4')->where('category', 'A')->get();
        $students4b = Students::where('class', '4')->where('category', 'B')->get();
        $students4c = Students::where('class', '4')->where('category', 'C')->get();

        $sa = Students::where('class', '4')->where('category', 'A')->first();
        $sb = Students::where('class', '4')->where('category', 'B')->first();
        $sc = Students::where('class', '4')->where('category', 'C')->first();
        return view('admin.components.students.class4', compact('students4a', 'students4b', 'students4c', 'sa', 'sb', 'sc'));
    }

    public function stddata5()
    {
        $students5a = Students::where('class', '5')->where('category', 'A')->get();
        $students5b = Students::where('class', '5')->where('category', 'B')->get();
        $students5c = Students::where('class', '5')->where('category', 'C')->get();

        $sa = Students::where('class', '5')->where('category', 'A')->first();
        $sb = Students::where('class', '5')->where('category', 'B')->first();
        $sc = Students::where('class', '5')->where('category', 'C')->first();
        return view('admin.components.students.class5', compact('students5a', 'students5b', 'students5c', 'sa', 'sb', 'sc'));
    }

    public function stddata6()
    {
        $students6a = Students::where('class', '6')->where('category', 'A')->get();
        $students6b = Students::where('class', '6')->where('category', 'B')->get();
        $students6c = Students::where('class', '6')->where('category', 'C')->get();

        $sa = Students::where('class', '6')->where('category', 'A')->first();
        $sb = Students::where('class', '6')->where('category', 'B')->first();
        $sc = Students::where('class', '6')->where('category', 'C')->first();
        return view('admin.components.students.class6', compact('students6a', 'students6b', 'students6c', 'sa', 'sb', 'sc'));
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students1 = Students::where('class', '1')->count();
        $students2 = Students::where('class', '2')->count();
        $students3 = Students::where('class', '3')->count();
        $students4 = Students::where('class', '4')->count();
        $students5 = Students::where('class', '5')->count();
        $students6 = Students::where('class', '6')->count();

        $students1a = Students::where('class', '1')->where('category', 'A')->count();
        $students1b = Students::where('class', '1')->where('category', 'B')->count();
        $students1c = Students::where('class', '1')->where('category', 'C')->count();

        $students2a = Students::where('class', '2')->where('category', 'A')->count();
        $students2b = Students::where('class', '2')->where('category', 'B')->count();
        $students2c = Students::where('class', '2')->where('category', 'C')->count();

        $students3a = Students::where('class', '3')->where('category', 'A')->count();
        $students3b = Students::where('class', '3')->where('category', 'B')->count();
        $students3c = Students::where('class', '3')->where('category', 'C')->count();

        $students4a = Students::where('class', '4')->where('category', 'A')->count();
        $students4b = Students::where('class', '4')->where('category', 'B')->count();
        $students4c = Students::where('class', '4')->where('category', 'C')->count();

        $students5a = Students::where('class', '5')->where('category', 'A')->count();
        $students5b = Students::where('class', '5')->where('category', 'B')->count();
        $students5c = Students::where('class', '5')->where('category', 'C')->count();

        $students6a = Students::where('class', '6')->where('category', 'A')->count();
        $students6b = Students::where('class', '6')->where('category', 'B')->count();
        $students6c = Students::where('class', '6')->where('category', 'C')->count();

        return view('admin.components.students.studentsdata', compact('students1', 'students2', 'students3', 'students4', 'students5', 'students6',
        'students1a', 'students1b', 'students1c', 'students2a', 'students2b', 'students2c', 'students3a', 'students3b', 'students3c', 'students4a', 'students4b', 'students4c', 'students5a', 'students5b', 'students5c', 'students6a', 'students6b', 'students6c'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.components.students.addstd');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Students Data
        $validateStudents = $request->validate([
            'name' => 'required',
            'gender' => 'required',
            'birth_place' => 'required',
            'birth_date' => 'required',
            'class' => 'required',
            'category' => 'required',
        ]);

        if (empty($validateStudents['slug'])) {
            $validateStudents['slug'] = strtolower(Str::slug($validateStudents['name'], '-'));
            $validateStudents['nis'] = $request['nis'];
            $validateStudents['nisn'] = $request['nisn'];
        }

        Students::create($validateStudents);

        if ($validateStudents['class'] == '1' ) {
            $route = "stddata1";
        } elseif ($validateStudents['class'] == '2' ) {
            $route = "stddata2";
        } elseif ($validateStudents['class'] == '3' ) {
            $route = "stddata3";
        } elseif ($validateStudents['class'] == '4' ) {
            $route = "stddata4";
        } elseif ($validateStudents['class'] == '5' ) {
            $route = "stddata5";
        } elseif ($validateStudents['class'] == '6' ) {
            $route = "stddata6";
        }

        return redirect()->route($route)->with('success', 'Data Telah ditambahkan!');
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
        $data = Students::where('slug', $slug)->firstOrFail();
        return view('admin.components.students.editstd', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $slug)
    {
        $studentsData = Students::where('slug', $slug)->firstOrFail();

        $validateStudents = $request->validate([
            'name' => 'required',
            'gender' => 'required',
            'birth_place' => 'required',
            'birth_date' => 'required',
            'class' => 'required',
            'category' => 'required',
        ]);

        $validateStudents['nis'] = $request['nis'];
        $validateStudents['nisn'] = $request['nisn'];

        $imagePath = $studentsData['img_name'];

        if ($validateStudents['class'] == '1' ) {
            $route = "stddata1";
        } elseif ($validateStudents['class'] == '2' ) {
            $route = "stddata2";
        } elseif ($validateStudents['class'] == '3' ) {
            $route = "stddata3";
        } elseif ($validateStudents['class'] == '4' ) {
            $route = "stddata4";
        } elseif ($validateStudents['class'] == '5' ) {
            $route = "stddata5";
        } elseif ($validateStudents['class'] == '6' ) {
            $route = "stddata6";
        }

        if ($request['image']) {

            if (Storage::disk('public')->exists($imagePath)) {

                $path = 'public/images/students/'.$studentsData['slug'];

                Storage::deleteDirectory($path);

                $image = $request->file('image');
                $name = time() . '.' . $image->getClientOriginalExtension();
                $pathImage = $image->storeAs('images/students/'.$studentsData['slug'].'/', $name, 'public');

                $studentsData['img_name'] = $pathImage;
                $studentsData->update($request->only('name','img_name', 'gender', 'birth_place', 'birth_date', 'nis', 'nisn', 'class', 'category'));

                $studentsData = Students::where('slug', $slug)->firstOrFail();

                return redirect()->route($route)->with('success', 'Data Telah diubah!');
            }
        } else {
            $studentsData->update($request->only('name', 'gender', 'birth_place', 'birth_date', 'nis', 'nisn', 'class', 'category'));

            $studentsData = Students::where('slug', $slug)->firstOrFail();

            return redirect()->route($route)->with('success', 'Data Telah diubah!');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function downloadPDF($class, $category)
    {
        $studentData = Students::where('class', $class)->where('category', $category)->firstOrFail();
        $data = Students::where('class', $class)->where('category', $category)->get();

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
        }

        $pdf = PDF::loadView('admin.components.students.pdfview', compact('data', 'studentData'))->setPaper('a4', 'landscape');

        $fileName = 'Data Siswa Kelas '.$class.' '.$category.' SD YPKP 2 Sentani'.'.pdf';

        return $pdf->download($fileName);
    }
}
