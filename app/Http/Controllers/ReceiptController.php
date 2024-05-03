<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Receipt;

class ReceiptController extends Controller
{
    public function index()
    {
        return view('admin.receipt', [
            'title' => 'TripQu | Receipt',
            'booking' => Receipt::all()
        ]);
    }

    public function book(Request $request)
    {
        // return $request->file('buktitf')->store('bukti-tf');

        $validatedData = $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'nik' => 'required',
            'email' => 'required',
            'buktitf' => 'image|file|max:1024|mimes:jpg,jpeg,png',
            'FerryID' => 'required',
        ]);

        $receipt= new Receipt();

        $receipt->name = $request->name;
        $receipt->surname = $request->surname;
        $receipt->nik = $request->nik;
        $receipt->email=$request->email;
        $receipt->FerryID = $request->FerryID;

        //upload file
        $imageEXT = $request->file('buktitf')->getClientOriginalName(); // mendapatkan nama tanpa exstention
        $filename = pathinfo($imageEXT, PATHINFO_FILENAME); // mengambil path file
        $EXT = $request->file('buktitf')->getClientOriginalExtension(); // mendapatkan extention file
        $fileimage = $filename . '_' . time() . '.' . $EXT; //membuat nama file unix agar tidak ada yg sama
        $path = $request->file('buktitf')->move(public_path('struk'), $fileimage); //melakukan upload ke folder public/file

        //masukkan ke dalam Receipt
        $receipt->buktitf = $fileimage;

        $receipt->save();

        return redirect('/');
    }

    public function deny($id)
    {
        $data = Receipt::find($id);
        $data->delete();
        
        return redirect('receipt')->with('success', 'Data Berhasil Dihapus');
    }
}
