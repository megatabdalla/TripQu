<?php

namespace App\Http\Controllers;

use App\Models\Ferry;
use Illuminate\Http\Request;
use App\Models\Kota;

class HomeController extends Controller
{
    public function index()
    {
        $kelas = Ferry::pluck('kelas')->unique();

        // dd($kelas);
        return view('home', [
            'title' => 'TripQu | Home',
            'kelas' => $kelas
        ]);
    }
}
