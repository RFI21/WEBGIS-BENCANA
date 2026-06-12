<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <title>Peta Bencana | SIG Multi Bencana Kota Palopo</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

          <!-- Favicon -->
      <link rel="icon" href="{{ asset('assets/img/logo1.png') }}" type="image/png">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" crossorigin=""/>
    
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        :root {
            --primary: #2563eb;
            --danger: #ef4444;
            --warning: #f59e0b;
            --success: #10b981;
            --dark: #0f172a;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #f1f5f9;
            color: var(--dark);
        }

        /* PAGE HEADER */
        .page-header {
            /* background: linear-gradient(135deg, var(--dark) 0%, #1e293b 100%); */
            background:linear-gradient(rgba(15, 23, 42, 0.7), rgba(15, 23, 42, 0.8)),  url('/assets/img/BACKROUND 1.png') center center/cover no-repeat;
            padding: 40px 0;
            color: white;
            margin-bottom: 30px;
        }

        /* MAIN MAP CONTAINER */
        .map-wrapper {
            background: white;
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0,0,0,0.06);
            display: flex;
            height: 75vh;
            min-height: 600px;
            border: 1px solid rgba(0,0,0,0.05);
        }

        /* LEGEND SIDEBAR */
        .map-sidebar {
            width: 300px;
            background: #ffffff;
            border-right: 1px solid #e2e8f0;
            padding: 25px;
            display: flex;
            flex-direction: column;
            z-index: 1000;
        }

        .map-sidebar h5 {
            font-weight: 700;
            margin-bottom: 20px;
            color: var(--dark);
            font-size: 1.1rem;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .legend-card {
            background: #f8fafc;
            border-radius: 12px;
            padding: 15px;
            margin-bottom: 15px;
            transition: all 0.2s ease;
            border: 1px solid transparent;
        }

        .legend-card:hover {
            border-color: var(--primary);
            background: white;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
        }

        .legend-item {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 12px;
        }

        .legend-item:last-child { margin-bottom: 0; }

        .legend-item img {
            width: 20px;
            filter: drop-shadow(0 2px 4px rgba(0,0,0,0.1));
        }

        .legend-item span {
            font-size: 0.9rem;
            font-weight: 600;
            color: #475569;
        }

        /* LEAFLET OVERRIDES */
        #map {
            flex: 1;
            z-index: 1;
        }

        .leaflet-popup-content-wrapper {
            border-radius: 16px;
            padding: 5px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }

        .popup-bencana h6 {
            font-weight: 700;
            margin-bottom: 10px;
            border-bottom: 1px solid #eee;
            padding-bottom: 8px;
        }

        .popup-bencana p {
            margin-bottom: 5px;
            font-size: 0.85rem;
            color: #64748b;
        }

        .label-kecamatan {
            background: transparent;
            border: none;
            box-shadow: none;
            color: #1e293b;
            font-weight: 800;
            text-shadow: 0 0 4px #fff, 0 0 4px #fff;
            text-align: center;
            font-size: 11px;
            text-transform: uppercase;
        }

        /* LAYER CONTROL BOX */
        .leaflet-control-layers {
            border-radius: 12px !important;
            border: none !important;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1) !important;
            padding: 8px !important;
        }

        @media (max-width: 991px) {
            .map-wrapper {
                flex-direction: column;
                height: auto;
            }
            .map-sidebar {
                width: 100%;
                border-right: none;
                border-bottom: 1px solid #e2e8f0;
            }
            #map { height: 500px; }
        }

               
    </style>
</head>

<body>

    <!-- Header / Navbar Section -->
     {{-- header --}}
     @include('user.header')
     {{-- header end --}}


    <div class="page-header">
        <div class="container mt-5 py-3 text-center">
            <h1 class="fw-800 animate__animated animate__fadeInDown">Peta Persebaran Bencana</h1>
            <p class="opacity-75">Titik lokasi kejadian bencana di wilayah Kota Palopo</p>
        </div>
    </div>

    <div class="container-fluid px-lg-5 mb-5">
        <div class="map-wrapper">
            <!-- Sidebar Legenda -->
            <div class="map-sidebar">
                <h5><i class="bi bi-info-circle-fill text-primary"></i> Legenda</h5>
                
                <div class="legend-card">
                    <p class="small text-muted mb-3 fw-bold text-uppercase">Tipe Kejadian</p>
                    <div class="legend-item">
                        <img src="https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-blue.png" alt="Banjir">
                        <span>Banjir</span>
                    </div>
                    <div class="legend-item">
                        <img src="https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-red.png" alt="Kebakaran">
                        <span>Kebakaran</span>
                    </div>
                    <div class="legend-item">
                        <img src="https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-green.png" alt="Angin">
                        <span>Angin Puting Beliung</span>
                    </div>
                    <div class="legend-item">
                        <img src="https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-orange.png" alt="Longsor">
                        <span>Tanah Longsor</span>
                    </div>
                </div>

                <!-- <div class="legend-card">
                    <p class="small text-muted mb-3 fw-bold text-uppercase">Wilayah Kecamatan</p>
                    <div id="kecamatan-list" style="max-height: 200px; overflow-y: auto;">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <span style="width:12px; height:12px; background:#ff0000; display:block; border-radius:3px;"></span>
                            <span class="small">Wara</span>
                        </div>
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <span style="width:12px; height:12px; background:#00ff00; display:block; border-radius:3px;"></span>
                            <span class="small">Wara Selatan</span>
                        </div>
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <span style="width:12px; height:12px; background:#0000ff; display:block; border-radius:3px;"></span>
                            <span class="small">Wara Utara</span>
                        </div>
                    </div>
                </div> -->

                <div class="mt-auto">
                    <div class="alert alert-primary py-2 px-3 mb-0" style="font-size: 0.8rem; border-radius: 12px;">
                        <i class="bi bi-lightbulb-fill me-1"></i> Klik pada marker untuk melihat detail laporan.
                    </div>
                </div>
            </div>

            <!-- Area Peta -->
            <div id="map"></div>
        </div>
    </div>

    @include('user.footer')

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" crossorigin=""></script>
    <script src="https://cdn.jsdelivr.net/npm/@turf/turf@6/turf.min.js"></script>

    <script>
        // Inisialisasi peta
        var map = L.map('map', {
            zoomControl: false // Kita pindah zoom control ke kanan
        }).setView([-3.0016343, 120.1830802], 12);

        L.control.zoom({ position: 'topright' }).addTo(map);

        // Tile Layers
        var osmStandard = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap'
        });

        var esriSatelit = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
            attribution: '© Esri Satelite'
        });

        var darkMode = L.tileLayer('https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png', {
            attribution: '© CARTO'
        });

        osmStandard.addTo(map);

        var baseMaps = {
            "Peta Standar": osmStandard,
            "Satelit": esriSatelit,
            "Mode Gelap": darkMode
        };

        L.control.layers(baseMaps, null, { position: 'bottomright' }).addTo(map);

        // Icons
        var icons = {
            "Banjir": new L.Icon({ iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-blue.png', iconSize: [25, 41], iconAnchor: [12, 41], popupAnchor: [1, -34] }),
            "Kebakaran": new L.Icon({ iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-red.png', iconSize: [25, 41], iconAnchor: [12, 41], popupAnchor: [1, -34] }),
            "Angin Puting Beliung": new L.Icon({ iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-green.png', iconSize: [25, 41], iconAnchor: [12, 41], popupAnchor: [1, -34] }),
            "Tanah Longsor": new L.Icon({ iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-orange.png', iconSize: [25, 41], iconAnchor: [12, 41], popupAnchor: [1, -34] })
        };

        // Marker Data Loop (Blade Template)
        @foreach($bencanas as $bencana)
            @php
                $koordinat = explode(',', $bencana->long_lat);
                $lat = trim($koordinat[0] ?? 0);
                $lng = trim($koordinat[1] ?? 0);
            @endphp

            var jenis = "{{ $bencana->jenis_bencana }}";
            var icon = icons[jenis] || icons["Banjir"];

            L.marker([{{ $lat }}, {{ $lng }}], { icon: icon }).addTo(map)
            .bindPopup(`
                <div class="popup-bencana">
                    <h6 class="text-danger fw-bold">
                        <i class="bi bi-exclamation-triangle-fill"></i> ${jenis}
                    </h6>

                    <p><strong><i class="bi bi-calendar-event"></i> Tanggal:</strong> {{ $bencana->tanggal }}</p>
                    <p><strong><i class="bi bi-geo-alt"></i> Lokasi:</strong> {{ $bencana->lokasi }}</p>
                    <p><strong><i class="bi bi-people"></i> Dampak:</strong> {{ $bencana->terdampak }}</p>
                    <p><strong><i class="bi bi-pin-map-fill"></i> Lat/Long:</strong> {{ $bencana->long_lat }}</p>
                    <hr>
                    <p class=" mt-3 fw-bold">
                        Gambar
                    </p>
                        @if($bencana->gambar)
                            <div class="mb-2">
                                <img src="{{ asset('uploads/bencana/'.$bencana->gambar) }}"
                                    alt="Foto Bencana"
                                    class="rounded shadow-sm"
                                    style="width:300px; height:200px; object-fit:cover;">
                            </div>
                        @endif
                </div>
            `);
        @endforeach

        // Warna Kecamatan
        const kecamatanColors = {
            "Wara": "#ff0000",
            "Wara Selatan": "#00ff00",
            "Wara Barat": "#fffb04",
            "Wara Timur": "#ff0088",
            "Wara Utara": "#0000ff",
            "Sendana": "#ff9900",
            "Telluwanua": "#2f2f2f",
            "Mungkajang": "#02ffff",
            "Bara": "#ff9cff"
        };

        // GeoJSON
        fetch("{{ asset('assets/js/kecamatan.geojson') }}")
            .then(response => response.json())
            .then(data => {
                L.geoJSON(data, {
                    style: function(feature) {
                        const kec = feature.properties.nm_kecamatan.trim();
                        return {
                            color: '#ffffff',
                            weight: 2,
                            fillColor: kecamatanColors[kec] || '#cbd5e1',
                            fillOpacity: 0.4
                        };
                    },
                    onEachFeature: function (feature, layer) {
                        layer.bindPopup("<strong>Kecamatan: </strong>" + feature.properties.nm_kecamatan);
                        
                        // Hover effect
                        layer.on('mouseover', function() {
                            this.setStyle({ fillOpacity: 0.7, weight: 3 });
                        });
                        layer.on('mouseout', function() {
                            this.setStyle({ fillOpacity: 0.4, weight: 2 });
                        });

                        // Label
                        const center = turf.centroid(feature).geometry.coordinates;
                        const label = L.divIcon({
                            className: 'label-kecamatan',
                            html: `<span>${feature.properties.nm_kecamatan}</span>`,
                            iconSize: [80, 20]
                        });
                        L.marker([center[1], center[0]], { icon: label, interactive: false }).addTo(map);
                    }
                }).addTo(map);
            });
    </script>




</body>
</html>