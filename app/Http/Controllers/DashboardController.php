<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Menampilkan dashboard untuk Superadmin
     */
    public function superadmin()
    {
        return view('dashboard.superadmin', [
            'user' => auth()->user()
        ]);
    }

    /**
     * Menampilkan dashboard untuk Admin
     */
    public function admin()
    {
        return view('dashboard.admin', [
            'user' => auth()->user()
        ]);
    }

    /**
     * Menampilkan dashboard untuk Guru
     */
    public function guru()
    {
        return view('dashboard.guru', [
            'user' => auth()->user()
        ]);
    }

    /**
     * Menampilkan dashboard untuk Murid
     */
    public function murid()
    {
        return view('dashboard.murid', [
            'user' => auth()->user()
        ]);
    }
}