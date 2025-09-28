<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Spp;
use App\Models\SppPayment;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SppController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Dashboard Murid
    |--------------------------------------------------------------------------
    */
    public function index()
    {
        $payments = SppPayment::where('user_id', Auth::id())->with('spp')->get();
        return view('spp.murid.index', compact('payments'));
    }

    public function create()
    {
        $spps = Spp::all();
        return view('spp.murid.create', compact('spps'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'spp_id' => 'required|exists:spps,id',
            'proof'  => 'required|file|mimes:jpg,png,pdf',
        ]);

        $path = $request->file('proof')->store('spp-proofs', 'public');

        SppPayment::create([
            'spp_id'  => $request->spp_id,
            'user_id' => Auth::id(),
            'proof'   => $path,
            'status'  => 'pending',
        ]);

        return redirect()->route('spp.index')
                         ->with('success', 'Pengajuan pembayaran berhasil dikirim, tunggu verifikasi admin');
    }

    /*
    |--------------------------------------------------------------------------
    | Dashboard Admin
    |--------------------------------------------------------------------------
    */
    public function adminIndex()
    {
        $payments = SppPayment::with('user','spp')->get();
        return view('spp.admin.index', compact('payments'));
    }

    public function verifyIndex()
    {
        $payments = SppPayment::where('status', 'pending')->with('user','spp')->get();
        return view('spp.admin.verify', compact('payments'));
    }

    public function verify(SppPayment $payment)
    {
        return view('spp.admin.verify', compact('payment'));
    }

    public function approve(SppPayment $payment)
    {
        $payment->update(['status' => 'lunas']);
        return redirect()->route('spp.admin')->with('success', 'Pembayaran disetujui');
    }

    public function reject(SppPayment $payment)
    {
        $payment->update(['status' => 'ditolak']);
        return redirect()->route('spp.admin')->with('success', 'Pembayaran ditolak');
    }

    /*
    |--------------------------------------------------------------------------
    | Data Murid & Laporan
    |--------------------------------------------------------------------------
    */
    public function students()
    {
        $students = User::where('role', 'murid')->get();
        return view('spp.admin.students', compact('students'));
    }

    public function report(Request $request)
    {
        $query = SppPayment::with('user','spp');

        if ($request->filled('semester')) {
            $months = $request->semester == 1
                ? ['Januari','Februari','Maret','April','Mei','Juni']
                : ['Juli','Agustus','September','Oktober','November','Desember'];

            $query->whereIn('spp_id', Spp::whereIn('month', $months)->pluck('id'));
        }

        if ($request->filled('month')) {
            $query->whereHas('spp', fn($q) => $q->where('month', $request->month));
        }

        $payments = $query->get();
        return view('spp.admin.report', compact('payments'));
    }
}
