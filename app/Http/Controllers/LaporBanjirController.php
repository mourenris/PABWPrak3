<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporBanjirController extends Controller
{
    private static $daftarLaporan = [
        [
            'nama' => 'Asep Sunandar',
            'lokasi' => 'Dayeuhkolot',
            'tinggi' => 25, // dalam cm
            'waktu' => '08 Okt 2026 07:30'
        ],
        [
            'nama' => 'Budi Santoso',
            'lokasi' => 'Baleendah',
            'tinggi' => 50,
            'waktu' => '08 Okt 2026 08:15'
        ],
        [
            'nama' => 'Siti Aminah',
            'lokasi' => 'Rancaekek',
            'tinggi' => 85,
            'waktu' => '08 Okt 2026 09:00'
        ]
    ];

    public function create()
    {
        return view('lapor.form');
    }

    public function store(Request $request)
    {
        $data = [
            'nama' => $request->input('nama'),
            'lokasi' => $request->input('lokasi'),
            'tinggi' => $request->input('tinggi'),
        ];

        return view('lapor.konfirmasi', compact('data'));
    }

    public function index()
    {
        $laporan = self::$daftarLaporan;
        return view('lapor.index', compact('laporan'));
    }
}