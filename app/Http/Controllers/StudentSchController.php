<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentSchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function stddata1()
    {
        return view('admin.components.students.class1');
    }

    public function stddata2()
    {
        return view('admin.components.students.class2');
    }

    public function stddata3()
    {
        return view('admin.components.students.class3');
    }

    public function stddata4()
    {
        return view('admin.components.students.class4');
    }

    public function stddata5()
    {
        return view('admin.components.students.class5');
    }

    public function stddata6()
    {
        return view('admin.components.students.class6');
    }

    public function stdadddata()
    {
        return view('admin.components.students.addstd');
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
