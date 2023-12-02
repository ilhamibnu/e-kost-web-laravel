<?php

namespace App\Http\Controllers\Pemilik;

use App\Models\DataKost;
use App\Models\DataKamar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Database\QueryException;

class KamarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $datakamar = DataKamar::all();
        $loggedIdUser = Auth::user()->id;
        $datakost = DataKost::where('user_id', $loggedIdUser)->get();
        $datakamar = DataKamar::all();

        return view(

            'pages.pemilik.pemilik-dataKamar',
            [
                'data' => $datakamar,
                'datakost' => $datakost,
            ]

        );
    }
    public function tambah(Request $request)
    {
        $datakamar = new DataKamar();


        $fileNameFotoPertama = time() . '.' . $request->img_pertama->extension();
        $request->img_pertama->move(public_path('assets/kamar/depan'), $fileNameFotoPertama);

        $fileNameFotoKedua = time() . '.' . $request->img_kedua->extension();
        $request->img_kedua->move(public_path('assets/kamar/dalam'), $fileNameFotoKedua);

        $fileNameFotoKetiga = time() . '.' . $request->img_ketiga->extension();
        $request->img_ketiga->move(public_path('assets/kamar/toilet'), $fileNameFotoKetiga);

        $fileNameFotoKeempat = time() . '.' . $request->img_keempat->extension();
        $request->img_keempat->move(public_path('assets/kamar/dapur'), $fileNameFotoKeempat);
        $datakamar->kost_id = $request->input('id_kost');
        // $datakamar->kost_id = $request->id_kost;
        $datakamar->jenis_kamar =  $request->jenis_kamar;
        $datakamar->no_kamar = $request->no_kamar;
        $datakamar->harga = $request->harga;
        $datakamar->status = $request->status;
        $datakamar->img_pertama = $fileNameFotoPertama;
        $datakamar->img_kedua = $fileNameFotoKedua;
        $datakamar->img_ketiga = $fileNameFotoKetiga;
        $datakamar->img_keempat = $fileNameFotoKeempat;
        $datakamar->deskripsi = $request->deskripsi;

        $datakamar->save();
        return redirect()->route('data-kamar')->with('success', 'data kamar berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        if ($request->img_pertama == null && $request->img_kedua == null && $request->img_ketiga == null && $request->img_keempat == null) {
            $datakamar = DataKamar::find($id);
            $datakamar->kost_id = $request->id_kost;
            $datakamar->jenis_kamar =  $request->jenis_kamar;
            $datakamar->no_kamar = $request->no_kamar;
            $datakamar->harga = $request->harga;
            $datakamar->status = $request->status;
            $datakamar->deskripsi = $request->deskripsi;
            $datakamar->save();

            return redirect()->route('data-kamar');
        }
    }
    public function destroy($id)
    {
        $deleteimage1 = DataKamar::where('id', $id)->first();
        File::delete(public_path('assets/kamar/depan') . '/' . $deleteimage1->img_pertama);

        $deleteimage2 = DataKamar::where('id', $id)->first();
        File::delete(public_path('assets/kamar/dalam') . '/' . $deleteimage2->img_kedua);

        $deleteimage3 = DataKamar::where('id', $id)->first();
        File::delete(public_path('assets/kamar/dapur') . '/' . $deleteimage3->img_ketiga);

        $deleteimage4 = DataKamar::where('id', $id)->first();
        File::delete(public_path('assets/kamar/toilet') . '/' . $deleteimage4->img_keempat);

        $deletedata = DataKamar::find($id)->delete();
        if ($deletedata) {
            return redirect()->route('data-kamar');
        }
    }
}
