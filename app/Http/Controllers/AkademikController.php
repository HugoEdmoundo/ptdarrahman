<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AkademikController extends Controller
{
    // Data mapel untuk setiap guru - UPDATED dengan Pemrograman Mobile
    private $akademik = [
        'Ziyad Khairi' => ['Tuhfatul Athfal'],
        'Murtado Tumari' => ['Fiqh', 'Ushulul Fiqh', 'Tafsir Qur\'an', 'Hadits'],
        'Makhrozal Mizan' => ['Pemrograman WEB', 'Algoritma BigData/Robotic', 'Matematika'],
        'Christian Anderson' => ['BasisData', 'Software Modeling', 'Pemrograman Mobile'],
        'Nafis Akbar Mujahid' => ['Bahasa Inggris', 'TOEFL/ILTS'],
        'Nur Fathoni' => ['Nahwu', 'Shorof']
    ];

    /**
     * Untuk admin/superadmin - melihat semua akademik
     */
    public function index()
    {
        return view('akademik.index', [
            'akademik' => $this->akademik,
            'user' => auth()->user()
        ]);
    }

    /**
     * Untuk guru - melihat mapel tertentu
     */
    public function showGuru(Request $request, $mapel)
    {
        $userName = auth()->user()->name;
        $mapel = urldecode($mapel);

        // Validasi apakah guru ini mengajar mapel tersebut
        if (!isset($this->akademik[$userName]) || !in_array($mapel, $this->akademik[$userName])) {
            abort(403, 'Anda tidak memiliki akses ke mata pelajaran ini.');
        }

        return view('akademik.guru-show', [
            'mapel' => $mapel,
            'guru' => $userName,
            'user' => auth()->user()
        ]);
    }

    /**
     * Untuk murid - melihat mapel
     */
    public function showMurid(Request $request, $mapel)
    {
        $mapel = urldecode($mapel);
        
        // Cari guru yang mengajar mapel ini
        $guru = null;
        foreach ($this->akademik as $teacher => $subjects) {
            if (in_array($mapel, $subjects)) {
                $guru = $teacher;
                break;
            }
        }

        if (!$guru) {
            abort(404, 'Mata pelajaran tidak ditemukan.');
        }

        return view('akademik.murid-show', [
            'mapel' => $mapel,
            'guru' => $guru,
            'user' => auth()->user()
        ]);
    }

    /**
     * Helper method untuk mendapatkan data akademik (digunakan di navbar)
     */
    public static function getAkademikData()
    {
        return [
            'Ziyad Khairi' => ['Tuhfatul Athfal'],
            'Murtado Tumari' => ['Fiqh', 'Ushulul Fiqh', 'Tafsir Qur\'an', 'Hadits'],
            'Makhrozal Mizan' => ['Pemrograman WEB', 'Algoritma BigData/Robotic', 'Matematika'],
            'Christian Anderson' => ['BasisData', 'Software Modeling', 'Pemrograman Mobile'],
            'Nafis Akbar Mujahid' => ['Bahasa Inggris', 'TOEFL/ILTS'],
            'Nur Fathoni' => ['Nahwu', 'Shorof']
        ];
    }

    /**
     * Method show lama untuk kompatibilitas
     */
    public function show(Request $request, $mapel)
    {
        $user = auth()->user();
        $role = $user->role;
        
        if ($role === 'guru') {
            return $this->showGuru($request, $mapel);
        } elseif ($role === 'murid') {
            return $this->showMurid($request, $mapel);
        } else {
            abort(403, 'Akses ditolak.');
        }
    }
}