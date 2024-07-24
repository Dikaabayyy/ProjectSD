<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

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
        return view('admin.components.teachers.tcreditdata');
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
