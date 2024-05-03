<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ferry;

class PaymentController extends Controller
{
    // public function index()
    // {
    //     return view('payment', [
    //         'title' => 'TripQu | payment',
    //         'ferry' => Ferry::filter()->get()
    //     ]);
    // }

    public function con(Request $request)
    {
        $data['title'] = 'TripQu | Payment';
        $query = Ferry::query();

        // dd($request->all ());
        $data['pay'] = $query->get();

        // dd($ferries);
        return view('payment', $data);
    }
}
