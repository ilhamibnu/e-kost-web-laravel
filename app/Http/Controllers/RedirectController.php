<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function cekLevel()
    {
        if (auth()->user()->level === 1) {
            // jika user superadmin
            return redirect()->intended('/admin');
        } else if (auth()->user()->level === 2) {
            return redirect()->intended('/admin');
        } else {
            // jika user pegawai
            return redirect()->intended('/pegawai');
        }
    }
}
