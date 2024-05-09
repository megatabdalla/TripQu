<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function login()
    {
        return view('login', [
            'title' => 'TripQu | Login'
        ]);
    }

    public function reg()
    {
        return view('reg', [
            'title' => 'TripQu | Register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required|unique:users',
            'nik' => 'required|unique:users',
            'password' => 'required|min:8|max:12',
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        session()->flash('success', 'You have been signed up!');

        return redirect('/login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required|min:8|max:16'
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials))
        {
            $user = Auth()->user();
            Auth::login($user);
            if (Auth::user()->role === 'User')
            {
                return redirect('/');
            }

            else if (Auth::user()->role === 'Admin')
            {
                return redirect('/adashboard');
            }

            else if (Auth::user()->role === 'Agen')
            {
                return redirect('/gdashboard');
            }
        }
        else{
            return back()->with('loginError', 'Login Failed');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
