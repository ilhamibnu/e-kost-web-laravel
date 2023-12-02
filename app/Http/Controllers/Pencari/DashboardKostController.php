<?php

namespace App\Http\Controllers\Pencari;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardKostController extends Controller
{

    public function index()
    {
        return view('pages.pencari.pencari-dashboard');
    }
}
