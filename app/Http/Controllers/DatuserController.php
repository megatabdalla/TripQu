<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DatuserController extends Controller
{
    public function index()
    {
        return view('admin.user', [
            'title' => 'Data User',
            'user' => User::all()
        ]);
    }
}
