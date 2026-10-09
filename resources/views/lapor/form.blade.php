@extends('layouts.app')

@section('title', 'Form Pelaporan Banjir')

@section('content')
    <h2>Form Pelaporan Kejadian Banjir</h2>
    <p>Silakan isi data di bawah ini untuk melaporkan genangan air di wilayah Anda.</p>

    <form action="{{ route('lapor.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama">Nama Pelapor:</label>
            <input type="text" id="nama" name="nama" required>
        </div>

        <div class="form-group">
            <label for="lokasi">Lokasi Kejadian (Kecamatan/Desa):</label>
            <input type="text" id="lokasi" name="lokasi" required>
        </div>

        <div class="form-group">
            <label for="tinggi">Tinggi Genangan Air (cm):</label>
            <input type="number" id="tinggi" name="tinggi" required>
        </div>

        <button type="submit">Kirim Laporan</button>
    </form>
@endsection