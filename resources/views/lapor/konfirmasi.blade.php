@extends('layouts.app')

@section('title', 'Konfirmasi Laporan')

@section('content')
    <h2>Konfirmasi Laporan</h2>

    {{-- Komponen Alert Blade --}}
    <x-alert message="Laporan Anda berhasil dikirim ke sistem BPBD Kabupaten Bandung!" />

    <div class="card">
        <h3>Detail Laporan Diterima:</h3>
        <p><strong>Nama Pelapor:</strong> {{ $data['nama'] }}</p>
        <p><strong>Lokasi Kejadian:</strong> {{ $data['lokasi'] }}</p>
        <p><strong>Tinggi Genangan:</strong> {{ $data['tinggi'] }} cm</p>
        <p><strong>Status Genangan:</strong>
            @if($data['tinggi'] < 30)
                <span class="badge bg-waspada">Waspada</span>
            @elseif($data['tinggi'] >= 30 && $data['tinggi'] <= 70)
                <span class="badge bg-siaga">Siaga</span>
            @else
                <span class="badge bg-awas">Awas</span>
            @endif
        </p>
    </div>

    <a href="{{ route('lapor.index') }}"><button type="button">Lihat Semua Laporan</button></a>
@endsection