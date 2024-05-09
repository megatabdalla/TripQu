<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ferry;

class PaymentController extends Controller
{
    public function con(Request $request)
    {
        $data['title'] = 'TripQu | Payment';
        $query = Ferry::query();

        if(request()->has('ferryID'))
        {
            $query->where('id', 'like', '%' . request('ferryID') . '%');
        }  

        $data['pay'] = $query->get();
        return view('payment', $data);
    }
}
