<div class="card">
    <h3>Lokasi: {{ $item['lokasi'] }}</h3>
    <p><strong>Pelapor:</strong> {{ $item['nama'] }}</p>
    <p><strong>Tinggi Genangan:</strong> {{ $item['tinggi'] }} cm</p>
    
    {{-- Aturan Status Genangan Air (3.5.1.b) --}}
    <p><strong>Status Genangan:</strong>
        @if($item['tinggi'] < 30)
            <span class="badge bg-waspada">Waspada</span>
        @elseif($item['tinggi'] >= 30 && $item['tinggi'] <= 70)
            <span class="badge bg-siaga">Siaga</span>
        @else
            <span class="badge bg-awas">Awas</span>
        @endif
    </p>
</div>