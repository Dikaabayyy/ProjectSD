<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Models\AboutSch;
use App\Models\VisiMisi;
use App\Models\GoalsSch;
use App\Models\Teacher;
use App\Models\Students;
use App\Models\Messages;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about = AboutSch::get();
        $visimisi = VisiMisi::get();
        $goals = GoalsSch::get();
        $teacher = Teacher::limit(15)->get();

        $students1 = Students::where('class', '1')->count();
        $students2 = Students::where('class', '2')->count();
        $students3 = Students::where('class', '3')->count();
        $students4 = Students::where('class', '4')->count();
        $students5 = Students::where('class', '5')->count();
        $students6 = Students::where('class', '6')->count();
        return view('admin.components.dashboard', compact('about', 'visimisi', 'goals', 'teacher', 'students1', 'students2', 'students3', 'students4', 'students5', 'students6'));
    }

    public function messages()
    {
        $message = Messages::get();
        return view('admin.components.messages.messages', compact('message'));
    }

    public function destroy_messages($slug)
    {
        $message = Messages::where('slug', $slug)->firstOrFail();

        $message->delete();

        return redirect()->route('messages')->with('success', 'Data Telah dihapus!');
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
