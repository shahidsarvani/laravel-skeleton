<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        // return auth()->user()->roles->isEmpty();
        return view('dashboard.index');
    }
}
