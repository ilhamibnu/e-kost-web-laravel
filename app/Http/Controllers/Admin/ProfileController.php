<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

use function GuzzleHttp\Promise\all;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $data = User::where('role', 'admin')->get();
        $no = 1;
        return view('pages.admin.admin-profile-admin', compact('data', 'no'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('pages.admin.profile.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->name);
        $data['foto'] = $request->file('foto')->store('/assets/user', 'public');
        $data['password'] = Hash::make($data['password']);
        User::create($data);

        // $user->assignRole('admin');
        return redirect()->route('profile.index');
    }
    // profileAdmin-admin

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $item = User::findOrFail($id);
        // return view('pages.admin.admin-profile-admin')->with('User', $item);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // $item = User::findOrFail($id);
        // return view('pages.admin.profile.edit', [
        //     'item' => $item
        // ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();

        if (isset($data['foto'])) {
            $data = $data['foto']->file('foto')->store('/assets/user', 'public');
        }

        // $data['foto'] = $request;

        $item = User::findOrFail($id);
        $item->update($data);




        return redirect()->route('profile.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = User::findOrFail($id);
        $item->delete();

        return redirect()->route('profile.index');
    }
}
