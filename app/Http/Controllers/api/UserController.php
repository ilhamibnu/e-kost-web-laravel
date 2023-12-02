<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return response()->json($users);
    }

    public function getdata($id)
    {
        $user = User::find($id);
        if (!$user) {
            // Jika pengguna tidak ditemukan
            return response()->json(['message' => 'User not fousnd'], 404);
        }
        return response()->json($user);
    }
    public function update(Request $request)
    {

        $user = User::findOrFail($request-> id);
        // Update data pengguna
        $user->name = $request->input('name');
        $user->username = $request->input('username');
        $user->alamat = $request->input('alamat');
        $user->no_hp = $request->input('no_hp');
        $user->kelamin = $request->input('kelamin');
        $user->email = $request->input('email');

        if ($request->has('password')) {
            $user->password = bcrypt($request->input('password'));
        }

        $user->save();

        return response()->json(['message' => 'Data pengguna berhasil diperbarui']);
    }
}