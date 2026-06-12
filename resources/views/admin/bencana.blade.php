<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Data Bencana | SIG Multi Bencana Kota Palopo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('assets/admin/css/style.css') }}">
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
            <i class="bi bi-person-circle text-secondary"></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUser">
            @foreach ($admins as $admin)
              <li><h6 class="dropdown-header">{{ $admin->nama }}</h6></li>
            @endforeach
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item text-danger" href="{{ route('logout') }}">Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Daftar Bencana -->
    <div id="wisata">
      <div class="card p-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <h5>Daftar Bencana</h5>
          <a href="{{ route('admin.bencana.tambah') }}" class="btn btn-primary">+ Tambah</a>

        </div>
        <table class="table table-bordered table-hover">
          <thead class="text-center">
            <tr>
              <th>No</th>
              <th>Jenis Bencana</th>
              <th>Tanggal</th>
              <th>Lokasi</th>
              <th>Lat/Long</th>
              <th>Dampak</th>
              <th>Foto</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($bencanas as $index => $bencana)
              <tr class="text-center">
                <td>{{ $index + 1 }}</td>
                <td>{{ $bencana->jenis_bencana }}</td>
                <td>{{ $bencana->tanggal }}</td>
                <td>{{ $bencana->lokasi }}</td>
                <td>{{ $bencana->long_lat}}</td>
                <td>{{ $bencana->terdampak }}</td>
                <td>
    <img src="{{ asset('uploads/bencana/'.$bencana->gambar) }}"
         width="100"
         class="img-thumbnail">
</td>
                <td>
                  <div class="d-flex justify-content-center gap-1">
                    <a href="{{ route('admin.bencana.edit', $bencana->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('admin.bencana.hapus', $bencana->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                         <button type="submit" onclick="return confirm('Yakin hapus?')" class="btn btn-sm btn-danger">Hapus</button>
                    </form>

                  </div>
                </td>
              </tr>
            @empty
              <tr>
                <td colspan="12" class="text-center">Belum ada data bencana.</td>
              </tr>
            @endforelse
          </tbody>
        </table>
        <div class="d-flex justify-content-center mt-3">
          {{ $bencanas->links() }}
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
