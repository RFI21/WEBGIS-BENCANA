<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard | SIG Multi Bencana Kota Palopo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('assets/admin/css/style.css') }}">
<!-- Leaflet CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
      <!-- Favicon -->
      <link rel="icon" href="{{ asset('assets/img/logo1.png') }}" type="image/png">
 <!-- Template Stylesheet -->
 <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>
<body>

  <!-- Sidebar -->
  <div class="sidebar d-flex flex-column p-3 text-white">
    <div class="text-center mb-5">
    <img src="{{ asset('assets/img/logo1.png') }}" alt="Bhakti Husada" class="img-fluid" style="max-width: 60%" />
  </div>
    <ul class="nav nav-pills flex-column mb-auto">
      <li>
        <a href="{{ route('admin.index') }}" class="nav-link active d-flex align-items-center">
          <i class="bi-speedometer2 me-2"></i>
          Dashboard
        </a>
      </li>
      <li>
        <a href="{{ route('admin.bencana') }}" class="nav-link d-flex align-items-center">
          <i class="bi bi-clipboard-heart me-2"></i>
           Data Bencana
        </a>
      </li>
      <li>
        <a href="{{ route('admin.admin') }}" class="nav-link d-flex align-items-center">
          <i class="bi-person-badge me-2"></i>
          Admin
        </a>
      </li>
    </ul>
  </div>
  

  <!-- Main Content -->
  <div class="content">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg shadow-sm rounded mb-4">
      <div class="container-fluid">
        <span class="navbar-brand mb-0  h4">SIG MULTI BENCANA KOTA PALOPO</span>
        <div class="dropdown">
          <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle" id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false">
          
            <i class="bi bi-person-circle text-secondary "></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUser">
            @foreach ($admins as $admin)
            <li><h6 class="dropdown-header">{{ $admin->nama }}</h6></li>
        @endforeach
        
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item text-danger " href="{{ route('logout') }}">Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Dashboard -->
    <div id="dashboard">
      <div class="card p-4">
        <h5>Selamat datang,Admin </h5>
        <p>Silakan pilih menu di sebelah kiri untuk mengelola data.</p>
      </div>
    </div>

    <div class="row mt-4">
  <!-- Peta Interaktif -->
  <div class="col-lg-9">
    <div class="card">
      <div class="card-body">
        <h5>Peta Interaktif</h5>
        <div id="map" style="height: 500px;"></div> <!-- Ukuran peta -->
      </div>
    </div>
  </div>

  <!-- Gambar Peta -->
  <div class="col-lg-3">
    <div class="card">
      <div class="card-body">
            <h6 class="fw-bold mb-2">Keterangan :</h6>

            <div class="legend-item mb-2">
                <img src="https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-blue.png">
                <span>Banjir</span>
            </div>

            <div class="legend-item mb-2">
                <img src="https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-red.png">
                <span>Kebakaran</span>
            </div>

            <div class="legend-item mb-2">
                <img src="https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-green.png">
                <span>Angin Puting Beliung</span>
            </div>

            <div class="legend-item mb-2">
                <img src="https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-orange.png">
                <span>Tanah Longsor</span>
            </div>

      </div>
    </div>
  </div>
</div>



  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Leaflet JS -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@turf/turf@6/turf.min.js"></script>

<!-- Inisialisasi Peta -->
<script>
    // Inisialisasi peta
    var map = L.map('map').setView([-3.0016343, 120.1830802], 13); // Koordinat pusat Palopo

  // 1. OSM Standar
    var osmStandard = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors',
        maxZoom: 20
    });

    // 2. OSM Streets (pakai OpenTopoMap sebagai alternatif rinci jalan)
    var osmStreets = L.tileLayer('https://{s}.tile.opentopomap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenTopoMap contributors',
        maxZoom: 20
    });

    // 3. Satelit (Esri World Imagery)
    var esriSatelit = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
        attribution: 'Tiles © Esri &mdash; Source: Esri, Maxar, Earthstar Geographics',
        maxZoom: 20
    });

    // 4. Dark Mode (CartoDB Dark Matter)
    var darkMode = L.tileLayer('https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png', {
        attribution: '&copy; <a href="https://carto.com/">CARTO</a>',
        subdomains: 'abcd',
        maxZoom: 20
    });

    // Tampilkan default layer
    osmStandard.addTo(map);

    // Buat kontrol layer
    var baseMaps = {
        "OpenStreetMap": osmStandard,
        "OSM Streets": osmStreets,
        "Satelit": esriSatelit,
        "Dark Mode": darkMode
    };

    L.control.layers(baseMaps).addTo(map);

// Contoh URL untuk marker warna-warni
var icons = {
    "Banjir": new L.Icon({
        iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-blue.png',
        shadowUrl: 'https://unpkg.com/leaflet@1.9.4/dist/images/marker-shadow.png',
        iconSize: [25, 41],
        iconAnchor: [12, 41]
    }),
    "Kebakaran": new L.Icon({
        iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-red.png',
        shadowUrl: 'https://unpkg.com/leaflet@1.9.4/dist/images/marker-shadow.png',
        iconSize: [25, 41],
        iconAnchor: [12, 41]
    }),
    "Angin Puting Beliung": new L.Icon({
        iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-green.png',
        shadowUrl: 'https://unpkg.com/leaflet@1.9.4/dist/images/marker-shadow.png',
        iconSize: [25, 41],
        iconAnchor: [12, 41]
    }),
    "Tanah Longsor": new L.Icon({
        iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-orange.png',
        shadowUrl: 'https://unpkg.com/leaflet@1.9.4/dist/images/marker-shadow.png',
        iconSize: [25, 41],
        iconAnchor: [12, 41]
    })
};




    // Tambahkan marker
@foreach($bencanas as $bencana)

@php
    $koordinat = explode(',', $bencana->long_lat);
    $lat = trim($koordinat[0] ?? 0);
    $lng = trim($koordinat[1] ?? 0);
@endphp

var jenis = "{{ $bencana->jenis_bencana }}";
var icon = icons[jenis] || icons["Lainnya"];

L.marker([{{ $lat }}, {{ $lng }}], { icon: icon }).addTo(map)
.bindPopup(`
    <div style="font-size:14px;">
        <h6 style="color:red;">${jenis}</h6>
        <p><b>Tanggal:</b> {{ $bencana->tanggal }}</p>
        <p><b>Lokasi:</b> {{ $bencana->lokasi }}</p>
        <p><b>Terdampak:</b> {{ $bencana->terdampak }}</p>
        <p><b>Lat/Long:</b> {{ $bencana->long_lat }}</p>
    </div>
`);

@endforeach


</script>


{{-- warna kecamatan--}}
<script>

const kecamatanColors = {
    "Wara": "#ff0000",
    "Wara Selatan": "#00ff00",
    "Wara Utara": "#0000ff",
    "Sendana": "#ff9900",
    "Telluwanua": "#cc00cc",
    "Mungkajang": "#00cccc",
    "Bara": "#ff66ff"
};

    // Load GeoJSON kecamatan (misalnya via file lokal)
    fetch("{{ asset('assets/js/kecamatan.geojson') }}")
        .then(response => response.json())
        .then(data => {
            L.geoJSON(data, {
     
        style: function(features) {

          const kec = features.properties.nm_kecamatan.trim();

          return {
            color: '#555',
            weight: 1,
           fillColor: kecamatanColors[kec] || '#cccccc',
            fillOpacity: 0.6
        };
},
                onEachFeature: function (features,layer) {
                    layer.bindPopup(features.properties.nm_kecamatan);
    // Hitung titik tengah (centroid) dari polygon
   const center = turf.centroid(features).geometry.coordinates;

    // Buat label teks
    const label = L.divIcon({
        className: 'label-kecamatan',
        html: `<strong>${features.properties.nm_kecamatan}</strong>`,
        iconSize: [100, 40],
        iconAnchor: [50, 10]

    });

        // Tambahkan label ke peta
     L.marker([center[1], center[0]], { icon: label, interactive: false }).addTo(map);
}
            }).addTo(map);
        });

</script>
</body>
</html>
