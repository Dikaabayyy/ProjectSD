<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.components.profile.profile');
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
    public function edit()
    {
        return view('admin.components.profile.editprofile');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'username' => 'required|string|max:30',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255'
        ]);


        $imagePath = Auth::user()->profile_img;

        if (Storage::disk('public')->exists($imagePath)) {
            $path = 'public/images/auth/'.$user['username'];

            if ($request->validate(['image'])) {
                Storage::deleteDirectory($path);

                $image = $request->file('image');
                $name = time() . '.' . $image->getClientOriginalExtension();
                $pathImage = $image->storeAs('images/auth/'.$user['username'].'/', $name, 'public');
                $user->profile_img = $pathImage;
            }

            $user->username = $request->username;
            $user->name = $request->name;
            $user->email = $request->email;

            $user->save();

            return redirect()->route('profile')->with('success', 'Profil Telah diubah!');
        }

        return back()->with('error', 'Gambar tidak ditemukan.');
    }

    public function passupdate(Request $request, $username){
        $user = Auth::user();

        $request->validate([
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()->route('profile')->with('success', 'Password Telah diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
