<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\kirimTiket;

use function PHPSTORM_META\map;

class kirimTiketController extends Controller
{
    public function index()
    {
        $tiket = [
            'judul' => 'Tiket Pesanan Ada',
            'sender' => 'megatabdalla@students.amikom.ac.id',
        ];

        Mail::to('kurogaze28@gmail.com')->send(new kirimTiket($tiket));
        return redirect('/receipt');
    }
}
