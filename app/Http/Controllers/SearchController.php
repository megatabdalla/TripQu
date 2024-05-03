<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ferry;

use function PHPUnit\Framework\returnSelf;

class SearchController extends Controller
{
    public function index()
    {
        return([
            "title" => "Ferry Schedule",
            "ferry" => Ferry::filter()->get()
        ]);
    }

    public function srch(Request $request)
    {

        $data['keyword'] = $request->all();
        $data['kelas'] = Ferry::pluck('kelas')->unique();
        $data['title'] = 'Hasil pencarian dari ';
        $query = Ferry::query();

        if (request()->has('From')) {
            $query->where('asal', 'like', '%' . request('From') . '%');
        }

        if (request()->has('To')) {
            $query->where('tujuan', 'like', '%' . request('To') . '%');
        }

        if (request()->has('Date')) {
            $query->orWhereDate('tanggal', request('Date'));
        }

        // dd($request->all ());
        $data['result'] = $query->get();

        // ->where('kelas', 'like', '%' . $request->kelas . '%');

        // dd($ferries);
        return view('search-result', $data);
    }
}
