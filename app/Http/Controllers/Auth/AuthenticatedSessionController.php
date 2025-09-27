<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => ['required','email'],
            'password' => ['required'],
        ]);

        if(Auth::attempt($request->only('email','password'), $request->filled('remember'))) {
            $request->session()->regenerate();

            $user = Auth::user();
            switch($user->role){
                case 'superadmin': return redirect()->route('dashboard.superadmin');
                case 'admin': return redirect()->route('dashboard.admin');
                case 'guru': return redirect()->route('dashboard.guru');
                case 'murid': return redirect()->route('dashboard.murid');
                default: return redirect('/');
            }
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }

    public function destroy(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
