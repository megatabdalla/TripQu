<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function admin()
    {
        return view('admin.adashboard', [
            "title" => 'TripQu | Admin Dashboard'
        ]);
    }
}
