<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function superadmin() {
        return view('dashboard.superadmin', ['user' => auth()->user()]);
    }

    public function admin() {
        return view('dashboard.admin', ['user' => auth()->user()]);
    }

    public function guru() {
        return view('dashboard.guru', ['user' => auth()->user()]);
    }

    public function murid() {
        return view('dashboard.murid', ['user' => auth()->user()]);
    }
}
