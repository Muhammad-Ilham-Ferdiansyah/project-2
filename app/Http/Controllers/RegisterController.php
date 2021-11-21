<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'npm' => 'required|max:7',
            'email' => ['required', 'email:dns', 'unique:users'],
            'password' => 'required|min:5|max:255',
            'campus' => 'required',
            'semester' => 'required|max:1'
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        $request->session()->flash('success', 'Registration successfull! Please Login');

        return redirect('/login');
    }
}
