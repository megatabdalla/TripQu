<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShipController extends Controller
{
    public function index()
    {
        return view('ship', [
            'title' => 'TripQu | Schedule',
        ]);
    }
}
