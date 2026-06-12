<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <title>Statistik | SIG Multi Bencana Kota Palopo</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/img/logo1.png') }}" type="image/png">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <style>
        :root {
            --primary: #2563eb;
            --primary-light: rgba(37, 99, 235, 0.1);
            --dark: #0f172a;
            --secondary: #64748b;
            --success: #10b981;
            --info: #0ea5e9;
            --warning: #f59e0b;
            --danger: #ef4444;
            --white: #ffffff;
            --bg-body: #f8fafc;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: var(--bg-body);
            color: var(--dark);
        }

        /* Hero Header Section */
        .page-header {
            /* background: linear-gradient(135deg, var(--dark) 0%, #1e293b 100%); */
            background:linear-gradient(rgba(15, 23, 42, 0.7), rgba(15, 23, 42, 0.8)),  url('/assets/img/BACKROUND 1.png') center center/cover no-repeat;
            padding: 40px 0 ;
            color: white;
            margin-bottom: -60px; /* Overlap effect */
        }

        .badge-pill {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: #fff;
            padding: 8px 20px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 20px;
            display: inline-block;
        }

        /* Stats Cards Styling */
        .stats-card {
            background: var(--white);
            border-radius: 24px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.04);
            border: 1px solid rgba(226, 232, 240, 0.8);
            height: 100%;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .stats-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
        }

        .card-header-flex {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 25px;
        }

        .card-title {
            font-weight: 800;
            font-size: 1.1rem;
            color: var(--dark);
            margin-bottom: 0;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .icon-box {
            width: 45px;
            height: 45px;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
        }

        /* Quick Info Box */
        .info-box {
            background: white;
            padding: 25px;
            border-radius: 20px;
            border-bottom: 4px solid var(--primary);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .info-box h3 {
            font-weight: 800;
            font-size: 2.2rem;
            margin-bottom: 5px;
        }

        .info-box p {
            color: var(--secondary);
            font-weight: 600;
            font-size: 0.75rem;
            text-transform: uppercase;
            margin-bottom: 0;
        }

        .chart-container {
            position: relative;
            height: 320px;
            width: 100%;
        }

        @media (max-width: 768px) {
            .page-header { padding: 80px 0 100px; }
            .chart-container { height: 250px; }
        }

        .table {
    border-collapse: separate;
    border-spacing: 0 10px;
}

.table tbody tr {
    background: #ffffff;
    box-shadow: 0 2px 10px rgba(0,0,0,.05);
    border-radius: 12px;
    transition: all .3s ease;
}

.table tbody tr:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0,0,0,.08);
}

.table tbody td {
    vertical-align: middle;
    border: none;
    padding: 16px;
}

.table thead th {
    border: none;
    padding: 14px 16px;
}
    </style>
</head>

<body>


    {{-- header --}}
    @include('user.header')

    <!-- Hero Section -->
    <div class="page-header   text-center">
        <div class="container mt-5 py-3  animate__animated animate__fadeIn">
            <h1 class="fw-800 animate__animated animate__fadeInDown">Statistik Bencana</h1>
            <p class="opacity-75 text-white" >
                Halaman ini menyajikan ringkasan data </p>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container mt-5 mb-5">
        <!-- Quick Stats Row -->
        <div class="row g-4 mb-5">


        <div class="row mb-5 g-4">
            <!-- Grafik Tren (Line) -->
             <div class="col-lg-6">
                <div class="stats-card animate__animated animate__fadeInUp">
                    <div class="card-header-flex">
                        <h5 class="card-title">
                            <div class="icon-box" style="background: rgba(37, 99, 235, 0.1); color: var(--primary);">
                                <i class="bi bi-graph-up"></i>
                            </div>
                            Statistik Bencana (5 Tahun Terakhir)
                        </h5>
                        <div class="text-end">
                            <span class="badge bg-primary-light text-primary border border-primary-subtle rounded-pill px-3 py-2">Data Terverifikasi</span>
                        </div>
                    </div>
                    <div class="chart-container">
                        <canvas id="trend5TahunChart"></canvas>
                    </div>
                </div>
            </div>

            <!-- Grafik Perbandingan (Bar) -->
            <div class="col-lg-6">
                <div class="stats-card animate__animated animate__fadeInRight">
                    <div class="card-header-flex">
                        <h5 class="card-title">
                            <div class="icon-box" style="background: rgba(16, 185, 129, 0.1); color: var(--success);">
                                <i class="bi bi-bar-chart-fill"></i>
                            </div>
                            Kejadian Bencana Setiap Kecamatan
                        </h5>
                    </div>
                    <div class="chart-container">
                        <canvas id="barChart"></canvas>
                    </div>
                </div>
            </div>

            <!-- Grafik Perbandingan (Bar) -->
            <div class="col-lg-6">
                <div class="stats-card animate__animated animate__fadeInRight">
                    <div class="card-header-flex d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0">
                            <div class="icon-box" style="background: rgba(16, 185, 129, 0.1); color: var(--success);">
                                <i class="bi bi-bar-chart-fill"></i>
                            </div>
                            Jumlah Kejadian Bencana Perbulan {{ $tahunDipilih }}
                        </h5>

                        <form method="GET">
                            <select name="tahun" class="form-select form-select-sm"
                                    onchange="this.form.submit()"
                                    style="width:120px;">
                                    <!-- <option value="">Pilih</option> -->
                                @foreach($daftarTahun as $itemTahun)
                                    <option value="{{ $itemTahun }}"
                                        {{ $tahunDipilih == $itemTahun ? 'selected' : '' }}>
                                        {{ $itemTahun }}
                                    </option>
                                @endforeach
                            </select>
                        </form>
                    </div>
                    <div class="chart-container">
                        <canvas id="barChartBulan"></canvas>
                    </div>
                </div>
            </div>
        </div>


        <!-- Tabel -->
        <div class="col-lg-12">
            <div class="stats-card animate__animated animate__fadeInRight">
<div class="card-header-flex d-flex justify-content-between align-items-center flex-wrap gap-2">
    <h5 class="card-title mb-0">
        <div class="icon-box" style="background: rgba(16, 185, 129, 0.1); color: var(--success);">
            <i class="bi bi-journal-text"></i>
        </div>
        Tabel Daftar Kejadian Bencana Setiap Tahun (2023-2025)
    </h5>

    <form method="GET">
        <select name="tahun_tabel"
                class="form-select form-select-sm rounded-pill"
                onchange="this.form.submit()"
                style="width:130px;">
            <option value="">Semua Tahun</option>

            @foreach($daftarTahun as $tahunItem)
                <option value="{{ $tahunItem }}"
                    {{ request('tahun_tabel') == $tahunItem ? 'selected' : '' }}>
                    {{ $tahunItem }}
                </option>
            @endforeach
        </select>
    </form>
</div>


<div class="table-responsive">
    <table class="table table-hover align-middle border-0">
        <thead>
            <tr class="bg-success bg-opacity-10">
                <th class="fw-semibold text-success">No</th>
                <th class="fw-semibold text-success">Jenis Bencana</th>
                <th class="fw-semibold text-success">Kecamatan</th>
                <th class="fw-semibold text-success">Tanggal</th>
                <th class="fw-semibold text-success">Dampak</th>
            </tr>
        </thead>

        <tbody>
            @forelse($bencanas as $index => $bencana)
                <tr>
                    <td>
                        <span class="badge rounded-pill bg-light text-dark">
                            {{ $bencanas->firstItem() + $index }}
                        </span>
                    </td>

                    <td>
                        <span class=" px-3 py-2">
                            {{ $bencana->jenis_bencana }}
                        </span>
                    </td>
                    
                    <td>
                        <i class="bi bi-geo-alt-fill text-danger me-1"></i>
                        {{ $bencana->lokasi }}
                    </td>
                    <td>
                        {{ \Carbon\Carbon::parse($bencana->tanggal)->format('d M Y') }}
                    </td>


                    <td>
                        <span class="badge bg-success-subtle text-success border">
                           {{ $bencana->terdampak }}
                        </span>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center py-5">
                        <i class="bi bi-inbox fs-1 text-muted"></i>
                        <p class="mt-2 text-muted mb-0">
                            Data bencana belum tersedia
                        </p>
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>


<div class="d-flex justify-content-between mt-3">
    
    @if ($bencanas->onFirstPage())
        <button class="btn btn-outline-secondary rounded-pill" disabled>
            <i class="bi bi-arrow-left"></i> Previous
        </button>
    @else
        <a href="{{ $bencanas->previousPageUrl() }}"
           class="btn btn-outline-success rounded-pill">
            <i class="bi bi-arrow-left"></i> Previous
        </a>
    @endif

    @if ($bencanas->hasMorePages())
        <a href="{{ $bencanas->nextPageUrl() }}"
           class="btn btn-success rounded-pill">
            Next <i class="bi bi-arrow-right"></i>
        </a>
    @else
        <button class="btn btn-success rounded-pill" disabled>
            Next <i class="bi bi-arrow-right"></i>
        </button>
    @endif

</div>
        </div>

        </div>



  
    @include('user.footer')

    <!-- JS Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        // Spinner logic
        $(window).on('load', function() {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        });

        // Global Chart Defaults
        Chart.defaults.font.family = "'Plus Jakarta Sans', sans-serif";
        Chart.defaults.color = '#94a3b8';
        Chart.defaults.plugins.tooltip.padding = 15;
        Chart.defaults.plugins.tooltip.cornerRadius = 12;



        // 📊 BAR CHART (Comparison)
        const barCtx = document.getElementById('barChart').getContext('2d');
        new Chart(barCtx, {
            type: 'bar',
            data: {
                labels: [
                            'Wara',
                            'Wara Selatan',
                            'Wara Barat',
                            'Wara Timur',
                            'Wara Utara',
                            'Sendana',
                            'Telluwanua',
                            'Mungkajang',
                            'Bara'
                        ],
                datasets: [{
                    label: 'Jumlah Kejadian',
                    data:  @json($kecamatanTotal),
                    backgroundColor: @json($warnaKecamatan),
                    borderRadius: 12,
                    barThickness: 45
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: { display: false }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: { borderDash: [5, 5], color: '#e2e8f0' }
                    },
                    x: { grid: { display: false } }
                }
            }
        });
    </script>

    <script>
 const bulanCtx = document.getElementById('barChartBulan').getContext('2d');

new Chart(bulanCtx, {
    type: 'bar',
    data: {
        labels: [
            'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        ],
        datasets: [{
            label: 'Jumlah Kejadian',
            data: @json($dataBulanan),
            backgroundColor: '#10b981',
            borderRadius: 8
        }]
    },
options: {
    indexAxis: 'y',
    responsive: true,
    maintainAspectRatio: false,
    plugins: {
        legend: {
            display: false
        }
    },
    scales: {
        x: {
            beginAtZero: true,
            grid: {
                display: true   // hilangkan semua garis vertikal
            },
            border: {
                display: true    // tampilkan garis bawah saja
            }
        },
        y: {
            grid: {
                display: false   // hilangkan semua garis horizontal
            },
            border: {
                display: true    // tampilkan garis sumbu kiri
            }
        }
    }
}
});

</script>

        <script>
        // Global Chart Defaults
        Chart.defaults.font.family = "'Plus Jakarta Sans', sans-serif";
        Chart.defaults.color = '#94a3b8';
        Chart.defaults.plugins.tooltip.padding = 15;
        Chart.defaults.plugins.tooltip.cornerRadius = 12;

        // 📈 TREND 5 TAHUN (Line)
        const trendCtx = document.getElementById('trend5TahunChart').getContext('2d');
        const trendGradient = trendCtx.createLinearGradient(0, 0, 0, 400);
        trendGradient.addColorStop(0, 'rgba(37, 99, 235, 0.2)');
        trendGradient.addColorStop(1, 'rgba(37, 99, 235, 0.0)');

        new Chart(trendCtx, {
            type: 'line',
            data: {
                labels: @json($tahun),
                datasets: [{
                    label: 'Total Kejadian',
                    data: @json($jumlah),
                    fill: true,
                    backgroundColor: trendGradient,
                    borderColor: '#2563eb',
                    borderWidth: 4,
                    tension: 0.4,
                    pointBackgroundColor: '#fff',
                    pointBorderColor: '#2563eb',
                    pointBorderWidth: 3,
                    pointRadius: 6,
                    pointHoverRadius: 9
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: { display: false }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: { borderDash: [5, 5], color: '#e2e8f0' },
                        ticks: { stepSize: 20 }
                    },
                    x: { grid: { display: false } }
                }
            }
        });

 
    
    </script>


</body>
</html>