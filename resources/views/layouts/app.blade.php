<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | LaporBanjir BPBD</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; line-height: 1.5; background-color: #f8f9fa; }
        header, footer { background: #004085; color: white; padding: 15px; text-align: center; border-radius: 5px; }
        nav { margin-top: 10px; }
        nav a { color: #fff; margin: 0 15px; text-decoration: none; font-weight: bold; }
        nav a:hover { text-decoration: underline; }
        main { background: white; padding: 20px; border-radius: 5px; margin: 15px 0; min-height: 400px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        .card { border: 1px solid #ddd; padding: 15px; margin: 10px 0; border-radius: 6px; }
        .badge { padding: 4px 8px; border-radius: 4px; color: white; font-weight: bold; }
        .bg-waspada { background-color: #ffc107; color: #212529; }
        .bg-siaga { background-color: #fd7e14; }
        .bg-awas { background-color: #dc3545; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input[type="text"], input[type="number"] { width: 100%; padding: 8px; box-sizing: border-box; }
        button { background: #004085; color: white; border: none; padding: 10px 15px; border-radius: 4px; cursor: pointer; }
    </style>
</head>
<body>

    <header>
        <h1>LaporBanjir - BPBD Kabupaten Bandung</h1>
        <nav>
            <a href="{{ route('lapor.create') }}">Buat Laporan</a>
            <a href="{{ route('lapor.index') }}">Daftar Laporan</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2026 BPBD Kabupaten Bandung</p>
    </footer>

</body>
</html>