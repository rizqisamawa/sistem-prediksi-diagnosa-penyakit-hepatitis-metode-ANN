<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $dp=DB:: table('data_penyakit')->count();

        return view('dashboards.index',compact('dp'));
    }
}
