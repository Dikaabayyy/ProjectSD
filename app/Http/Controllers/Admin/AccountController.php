<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreUserRequest;

use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::where('role', 'Guru')->get();
        return view('admin.components.accounts.account', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.components.accounts.addaccount');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        $validateData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|string'
        ]);

        $userAcc = request()->all();

        $accObject = New User;

        $userAcc['username'] = $accObject->generateUsername($request['name']);
        $userAcc['password'] = Hash::make($validateData['password']);
        $userAcc['role'] = $request['role'];

        $user = User::create($userAcc);

        return redirect()->route('accteach')->with('success', 'Data Akun Telah ditambahkan!');
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
    public function destroy($username)
    {
        $user = User::where('username', $username)->firstOrFail();

        $user->delete();

        return redirect()->route('accteach')->with('success', 'Data Telah dihapus!');
    }
}
