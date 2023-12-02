<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DataKost;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function admin()
    {
        $pemilik = User::where('role', 'pemilik')->count();
        $pencari = User::where('role', 'pencari')->count();
        $kost = DataKost::where('status', 1)->count();
        $transaksi = Transaction::where('status', 'paid');
        return view(
            'pages.admin.admin-dashboard',
            [
                'pemilik' => $pemilik,
                'pencari' => $pencari,
                'kost' => $kost,
                'transaksi' => $transaksi,
            ]
        );
    }


    public function pemilik()
    {
        $pemilik = User::where('role', 'pemilik')->count();
        $pencari = User::where('role', 'pencari')->count();
        // $kos = DataKost::where('status', 'valid')->count();
        return view(
            'pages.pemilik.pemilik-dashboard',
            [
                'pemilik' => $pemilik,
                'pencari' => $pencari,
                // 'datakos' => $kos,
            ]
        );
    }
}
