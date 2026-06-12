<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Edit Bencana | SIG Multi Bencana Kota Palopo</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('assets/admin/css/style.css') }}">

      <!-- Favicon -->
      <link rel="icon" href="{{ asset('assets/img/logo1.png') }}" type="image/png">
   
</head>
<body>

 <!-- Sidebar -->
  <div class="sidebar d-flex flex-column p-3 text-white">
    <div class="text-center mb-5">
    <img src="{{ asset('assets/img/logo1.png') }}" alt="Bhakti Husada" class="img-fluid" style="max-width: 60%" />
  </div>
    <ul class="nav nav-pills flex-column mb-auto">
      <li>
        <a href="{{ route('admin.index') }}" class="nav-link  d-flex align-items-center">
          <i class="bi-speedometer2 me-2"></i>
          Dashboard
        </a>
      </li>
      <li>
        <a href="{{ route('admin.bencana') }}" class="nav-link active d-flex align-items-center">
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
        <span class="navbar-brand mb-0 h4">SIG MULTI BENCANA KOTA PALOPO</span>
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

<!-- form edit -->
<div class="container">


<div class="card mb-4">
<div class="card-header bg-dark text-white">
Form Edit Bencana
</div>

<div class="card-body">

<form method="POST" action="{{ route('admin.bencana.update', $bencana->id) }}" enctype="multipart/form-data">
@csrf
@method('PUT')

<!-- Jenis Bencana -->
<div class="mb-3">
    <label for="jenis_bencana" class="form-label">Jenis Bencana</label>
    <select name="jenis_bencana" id="jenis_bencana" class="form-select" required>
        <option value="">-- Pilih Jenis Bencana --</option>
        <option value="Banjir" {{ $bencana->jenis_bencana == 'Banjir' ? 'selected' : '' }}>Banjir</option>
        <option value="Kebakaran" {{ $bencana->jenis_bencana == 'Kebakaran' ? 'selected' : '' }}>Kebakaran</option>
        <option value="Angin Puting Beliung" {{ $bencana->jenis_bencana == 'Angin Puting Beliung' ? 'selected' : '' }}>Angin Puting Beliung</option>
        <option value="Tanah Longsor" {{ $bencana->jenis_bencana == 'Tanah Longsor' ? 'selected' : '' }}>Tanah Longsor</option>
    </select>
</div>

<!-- Tanggal -->
<div class="mb-3">
    <label for="tanggal" class="form-label">Tanggal</label>
    <input type="date" name="tanggal" id="tanggal" class="form-control" 
           value="{{ $bencana->tanggal }}" required>
</div>

<!-- Lokasi -->
<div class="mb-3">
    <label for="lokasi" class="form-label">Lokasi</label>

    <select name="lokasi" id="lokasi" class="form-select" required>
        <option value="">-- Pilih Kecamatan --</option>

        <option value="Wara" {{ $bencana->lokasi == 'Wara' ? 'selected' : '' }}>Wara</option>

        <option value="Wara Selatan" {{ $bencana->lokasi == 'Wara Selatan' ? 'selected' : '' }}>
            Wara Selatan
        </option>

        <option value="Wara Barat" {{ $bencana->lokasi == 'Wara Barat' ? 'selected' : '' }}>
            Wara Barat
        </option>

        <option value="Wara Timur" {{ $bencana->lokasi == 'Wara Timur' ? 'selected' : '' }}>
            Wara Timur
        </option>

        <option value="Wara Utara" {{ $bencana->lokasi == 'Wara Utara' ? 'selected' : '' }}>
            Wara Utara
        </option>

        <option value="Sendana" {{ $bencana->lokasi == 'Sendana' ? 'selected' : '' }}>
            Sendana
        </option>

        <option value="Telluwanua" {{ $bencana->lokasi == 'Telluwanua' ? 'selected' : '' }}>
            Telluwanua
        </option>

        <option value="Mungkajang" {{ $bencana->lokasi == 'Mungkajang' ? 'selected' : '' }}>
            Mungkajang
        </option>

        <option value="Bara" {{ $bencana->lokasi == 'Bara' ? 'selected' : '' }}>
            Bara
        </option>
    </select>
</div>

<!-- Jumlah Terdampak -->
<div class="mb-3">
    <label for="terdampak" class="form-label">Jumlah Terdampak</label>
    <input type="text" name="terdampak" id="terdampak" class="form-control" 
           value="{{ $bencana->terdampak }}" required>
</div>

<div class="mb-3">
    <label class="form-label">Foto Bencana</label>

    @if($bencana->gambar)
        <div class="mb-2">
            <img src="{{ asset('uploads/bencana/'.$bencana->gambar) }}"
                 width="200"
                 class="img-thumbnail">
        </div>
    @endif

    <input type="file" name="gambar " class="form-control">
    <small class="text-muted">
        Kosongkan jika tidak ingin mengganti gambar.
    </small>
</div>



            @php
$long_lat = explode(',', $bencana->long_lat);
@endphp

            <div class="row mb-3">
              <div class="col-md-6">
                <label  for="latitude" class="form-label">Latitude</label>
                
                <input id="latitude" type="text" name="latitude"
value="{{ old('latitude', $long_lat[0] ?? '') }}">
 </div>
              <div class="col-md-6">
                <label for="longitude" class="form-label">Longitude</label>
                <input id="longitude"  type="text" name="longitude"
value="{{ old('longitude', $long_lat[1] ?? '') }}">
              </div>
            </div>


            <div class="mb-3">
              <label for="map" class="form-label">Pilih Lokasi pada Peta</label>
              <div id="map" style="height: 400px; border-radius: 8px;"></div>
            </div>


<button type="submit" class="btn btn-success mt-3 rounded-pill">
Update
</button>

<a href="{{ route('admin.bencana') }}" class="btn btn-outline-success rounded-pill mt-3 ms-2 d-inline-flex align-items-center shadow-sm">
<i class="bi bi-arrow-left-circle me-2"></i> Kembali
</a>

</form>

</div>
</div>
</div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Leaflet -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css">
  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

   <script>
    var map = L.map('map').setView([{{ $long_lat[0] ?? -3.0016343 }}, {{ $long_lat[1] ?? 120.1830802 }}], 13);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);

    var marker = L.marker([{{ $long_lat[0] ?? -3.0016343 }}, {{ $long_lat[1] ?? 120.1830802 }}]).addTo(map);

    map.on('click', function(e) {
      var lat = e.latlng.lat.toFixed(6);
      var lng = e.latlng.lng.toFixed(6);
      document.getElementById('latitude').value = lat;
      document.getElementById('longitude').value = lng;

      marker.setLatLng(e.latlng);
    });
  </script>

  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
  <script>
    flatpickr("#jam_mulai", { enableTime: true, noCalendar: true, dateFormat: "H:i", time_24hr: true });
    flatpickr("#jam_selesai", { enableTime: true, noCalendar: true, dateFormat: "H:i", time_24hr: true });
  </script>

</body>
</html>