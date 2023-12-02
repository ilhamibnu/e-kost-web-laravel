<?php

namespace App\Http\Controllers\Pemilik;

use App\Models\DataKost;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\DataKostRequest;

class KostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datakamar = DataKost::all();

        return view('pages.pemilik.pemilik-dataKost', [
            'data' => $datakamar,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate(
            [],
            []
        );
        $datakamar = new DataKost();
        $fileNameFotoPertama = time() . '.' . $request->foto->extension();
        $request->foto->move(public_path('assets/user/'), $fileNameFotoPertama);
        $datakamar->user_id = $request->user_id;
        $datakamar->nama_kost = $request->nama_kost;
        $datakamar->alamat = $request->alamat;
        $datakamar->deskripsi = $request->deskripsi;
        $datakamar->foto = $fileNameFotoPertama;
        $datakamar->slug = Str::slug($request->nama_kost);
        $datakamar->longitude = $request->longitude;
        $datakamar->latitude = $request->latitude;
        $datakamar->save();
        return redirect()->route('data-kost');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleteimage1 = DataKost::where('id', $id)->first();
        File::delete(public_path('assets/user') . '/' . $deleteimage1->foto);
        $deletedata = DataKost::find($id)->delete();
        if ($deletedata) {
            return redirect()->route('data-kost');
        }
    }
}
