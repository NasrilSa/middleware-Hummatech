<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function rumahSakit()
    {
        return view('dashboard.rumah_sakit');
    }

    public function rumahMakan()
    {
        return view('dashboard.rumah_makan');
    }

    public function toko()
    {
        return view('dashboard.toko');
    }
}
