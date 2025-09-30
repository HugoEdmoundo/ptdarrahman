<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // ===== SUPERADMIN =====
        User::create([
            'name' => 'Superadmin',
            'email' => 'superadmin@ptdarrahman.com',
            'password' => Hash::make('password123'),
            'role' => 'superadmin',
        ]);

        // ===== ADMIN =====
        User::create([
            'name' => 'Admin',
            'email' => 'admin@ptdarrahman.com',
            'password' => Hash::make('password123'),
            'role' => 'admin',
        ]);

        // ===== GURU =====
        $gurus = [
            ['name' => 'Makhrozal Mizan', 'nip' => 'NIP1001'],
            ['name' => 'Christian Anderson', 'nip' => 'NIP1002'],
            ['name' => 'Ziyad Khairi', 'nip' => 'NIP1003'],
            ['name' => 'Murtado Tumari', 'nip' => 'NIP1004'],
            ['name' => 'Nur Fathoni', 'nip' => 'NIP1005'],
            ['name' => 'Nafis Akbar Mujahid', 'nip' => 'NIP1006'],
        ];

        foreach($gurus as $guru){
            User::create([
                'name' => $guru['name'],
                'email' => strtolower(str_replace(' ','',$guru['name'])).'@ptdarrahman.com',
                'password' => Hash::make('password123'),
                'role' => 'guru',
                'nip' => $guru['nip']
            ]);
        }

        // ===== MURID =====
        $muridList = [
            'Muhammad Ziyad Hasan',
            'Muhammad Alfiansah',
            'Rasyid Anwar Arief',
            'Syamil Hamasah',
            'Rahmatullah Yusuf Ihsan',
            'Aflah Fadhilillah',
            "Mush'ab Arrantisi",
            'Alvito Syarman Siregar',
            'Ibnu Hanif Maulana',
            'Muhammad Muzaffar Abdusallam',
            'Mahmued Abdur Razaq',
            'Mahesa Vatian',
            'Muhammad Nashir Amrullah',
            'Muhammad Ridho',
            'Muhammad Ardan Sundawa',
            'Ashraf El-Hafieza Rusmana',
            'Hudzaifah Ali Miftah',
            'Okte Pusta Riansyah',
            'Muhammad Hammam Riziq',
            'Farhan Fauzi',
        ];

        $nisnCounter = 20001;
        foreach($muridList as $muridName){
            User::create([
                'name' => $muridName,
                'email' => strtolower(str_replace(' ','',$muridName)).'@ptdarrahman.com',
                'password' => Hash::make('password123'),
                'role' => 'murid',
                'nisn' => 'NISN'.$nisnCounter
            ]);
            $nisnCounter++;
        }
    }
}
