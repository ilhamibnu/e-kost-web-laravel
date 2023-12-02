<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\ValidateUserUnValid;
use App\Mail\ValidateUserValid;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;

class Userpemilik extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $data = User::where('role', 'pemilik')->get();
        $no = 1;
        return view('pages.admin.admin-user-pemilik', compact('data', 'no'));
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
        $item = User::findOrFail($id);
        return view('pages.admin.pemilik.edit', [
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = [
            'statusUser' => $request->statusUser,
        ];
        User::where('id', $id)->update($data);
        // Lakukan update hanya pada kolom status
        // $user =  User::where('id', $id)->update($data);
        // if ($data == 'valid') {
        //     Mail::to($user->email)->send(new ValidateUserValid($user));
        // } else {
        //     Mail::to($user->email)->send(new ValidateUserUnValid($user));
        // }

        return redirect()->route('data-pemilik.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
