<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <title> SIG Multi Bencana Kota Palopo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

          <!-- Favicon -->
      <link rel="icon" href="{{ asset('assets/img/logo1.png') }}" type="image/png">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <style>
        :root {
            --primary: #2563eb;
            --danger: #ef4444;
            --warning: #f59e0b;
            --success: #10b981;
            --dark: #0f172a;
            --glass: rgba(255, 255, 255, 0.1);
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #f8fafc;
            color: var(--dark);
            overflow-x: hidden;
        }

        /* HERO SECTION */
        .hero {
            height: 100vh;
            min-height: 700px;
            position: relative;
            background: linear-gradient(rgba(15, 23, 42, 0.7), rgba(15, 23, 42, 0.8)), 
                        url("https://linisulsel.com/wp-content/uploads/2023/02/WhatsApp-Image-2023-02-02-at-17.17.20.jpeg") center/cover no-repeat;
            display: flex;
            align-items: center;
            overflow: hidden;
        }

        .hero-shapes span {
            position: absolute;
            background: var(--glass);
            backdrop-filter: blur(5px);
            border-radius: 50%;
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 10;
        }

        .hero h1 {
            font-weight: 800;
            font-size: clamp(2.5rem, 5vw, 4.5rem);
            line-height: 1.1;
            margin-bottom: 1.5rem;
            background: linear-gradient(to right, #fff, #94a3b8);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .btn-modern {
            padding: 12px 30px;
            border-radius: 12px;
            font-weight: 600;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .btn-primary-modern {
            background: var(--primary);
            color: white;
            border: none;
            box-shadow: 0 10px 20px rgba(37, 99, 235, 0.3);
        }

        .btn-primary-modern:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 25px rgba(37, 99, 235, 0.4);
            background: #1d4ed8;
        }

        /* FLOATING STATS CARD */
        .stats-wrapper {
            margin-top: -80px;
            position: relative;
            z-index: 20;
        }

        .stat-card-modern {
            background: white;
            border-radius: 24px;
            padding: 30px;
            display: flex;
            align-items: center;
            gap: 20px;
            box-shadow: 0 10px 40px rgba(10, 10, 10, 0.74);
            transition: all 0.3s ease;
            border: 1px solid rgba(12, 12, 12, 0.97);
        }

        .stat-card-modern:hover {
            transform: translateY(-5px);
            border-color: var(--primary);
        }

        .stat-icon {
            width: 60px;
            height: 60px;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
        }

        .icon-blue { background: #eff6ff; color: var(--primary); }
        .icon-red { background: #fef2f2; color: var(--danger); }
        .icon-green { background: #f0fdf4; color: var(--success); }
        .icon-orange { background: #fffbeb; color: var(--warning); }

        .stat-info h3 {
            font-weight: 800;
            margin: 0;
            font-size: 1.8rem;
        }

        .stat-info p {
            margin: 0;
            color: #64748b;
            font-size: 0.9rem;
            font-weight: 600;
        }

        /* DATA BENCANA CARDS */
        .section-title {
            font-weight: 800;
            position: relative;
            display: inline-block;
            margin-bottom: 3rem;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 50%;
            height: 4px;
            background: var(--primary);
            border-radius: 2px;
        }

        .bencana-card {
            background: white;
            border-radius: 20px;
            border: none;
            overflow: hidden;
            transition: all 0.4s ease;
            height: 100%;
        }

        .bencana-card:hover {
            transform: translateY(-12px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.08);
        }

        .card-badge {
            position: absolute;
            top: 20px;
            right: 20px;
            padding: 6px 16px;
            border-radius: 100px;
            font-size: 0.75rem;
            font-weight: 700;
            text-transform: uppercase;
        }

        .badge-banjir { background: #dbeafe; color: #1e40af; }
        .badge-kebakaran { background: #fee2e2; color: #991b1b; }

        .card-body-modern {
            padding: 30px;
        }

        .info-item {
            display: flex;
            align-items: center;
            gap: 12px;
            color: #64748b;
            margin-bottom: 10px;
            font-size: 0.95rem;
        }

        .info-item i {
            color: var(--primary);
        }

        /* MAP BOX */
        .map-container {
            border-radius: 30px;
            overflow: hidden;
            box-shadow: 0 20px 50px rgba(0,0,0,0.1);
            position: relative;
            background: #fff;
            padding: 10px;
        }

        .map-container iframe {
            width: 100%;
            height: 550px;
            border-radius: 20px;
            filter: grayscale(0.2) contrast(1.1);
        }

        /* CATEGORY PILLS */
        .cat-pill {
            padding: 20px;
            background: white;
            border-radius: 20px;
            transition: all 0.3s ease;
            cursor: pointer;
            border: 1px solid transparent;
        }

        .cat-pill:hover {
            background: var(--primary);
            color: white;
        }

        .cat-pill:hover i { color: white !important; }



        /* NAVBAR STYLE */
#mainNavbar {
    transition: all 0.3s ease;
    padding: 15px 0;
    background: transparent;
}

#mainNavbar.scrolled {
    background: rgba(31, 98, 255, 0.54);
    backdrop-filter: blur(10px);
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.72);
}

.navbar-nav .nav-link {
    color: #e2e8f0;
    margin: 0 8px;
    font-weight: 500;
    transition: 0.3s;
}

.navbar-nav .nav-link:hover {
    color: #facc15;
    transform: translateY(-2px);
}

.logo-nav{
    height:40px;
    width:auto;
    margin-right:8px;
}
    </style>
</head>

<body>
<!-- NAVBAR -->
<nav id="mainNavbar" class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">

        <!-- LOGO -->
        <a class="navbar-brand fw-bold d-flex align-items-center" href="#">
            <img src="{{ asset('assets/img/logo1.png') }}" class="logo-nav">
            <img src="{{ asset('assets/img/BPBD.png') }}" class="logo-nav">
            <img src="{{ asset('assets/img/UCOK.png') }}" class="logo-nav">
        </a>

        <!-- TOGGLE MOBILE -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- MENU -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <div class="navbar-nav text-center text-lg-start">

                <a href="{{ route('user.index') }}"
                   class="nav-item nav-link {{ Request::routeIs('user.index') ? 'active fw-bold text-warning' : '' }}">
                    <i class="bi bi-house-door me-1"></i> Beranda
                </a>

                <a href="{{ route('user.lokasi') }}"
                   class="nav-item nav-link {{ Request::routeIs('user.lokasi') ? 'active fw-bold text-warning' : '' }}">
                    <i class="bi bi-exclamation-triangle me-1"></i> Bencana
                </a>

                <a href="{{ route('user.peta') }}"
                   class="nav-item nav-link {{ Request::routeIs('user.peta') ? 'active fw-bold text-warning' : '' }}">
                    <i class="bi bi-map me-1"></i> Peta
                </a>

                <a href="{{ route('user.statistik') }}"
                   class="nav-item nav-link {{ Request::routeIs('user.statistik') ? 'active fw-bold text-warning' : '' }}">
                    <i class="bi bi-bar-chart me-1"></i> Statistik
                </a>

                <a href="{{ route('user.login') }}"
                   class="nav-item nav-link {{ Request::routeIs('user.login') ? 'active fw-bold text-warning' : '' }}">
                    <i class="bi bi-box-arrow-in-right me-1"></i> Login
                </a>

            </div>
        </div>

    </div>
</nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 hero-content animate__animated animate__fadeInLeft">
                    <span class="badge bg-danger mb-2 px-2 py-2 rounded-pill"></span>
                    <h1>Selamat Datang di WebGIS Multi Bencana Kota Palopo <br></h1>
                    <p class="lead text-light opacity-100 mb-10 fs-10">
                        Kota Palopo merupakan salah satu kota di Provinsi Sulawesi Selatan yang memiliki kondisi geografis beragam, mulai dari wilayah pesisir, dataran rendah, hingga kawasan perbukitan. Keberagaman topografi tersebut menjadikan Kota Palopo memiliki potensi terhadap berbagai jenis bencana alam, seperti banjir, tanah longsor, kebakaran lahan, dan angin puting beliung.
                    </p>
                    <div class="d-flex gap-3">
                        <a href="{{ route('user.lokasi') }}" class="btn btn-modern btn-primary-modern">
                            Eksplorasi Peta <i class="bi bi-geo-alt-fill ms-2"></i>
                        </a>
                        <a href="#laporan" class="btn btn-modern btn-outline-light">
                            Laporan Terbaru
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-wrapper">
        <div class="container">
            <div class="row g-4 justify-content-center">
                <!-- Stat Item -->
                <div class="col-md-3 animate__animated animate__fadeInUp" style="animation-delay: 0.1s;">
                    <div class="stat-card-modern">
                        <div class="stat-icon icon-blue">
                            <i class="bi bi-water"></i>
                        </div>
                        <div class="stat-info">
                            <h3>{{ $count->where('jenis_bencana','Banjir')->count() }}</h3>
                            <p>Banjir</p>
                        </div>
                    </div>
                </div>
                <!-- Stat Item -->
                <div class="col-md-3 animate__animated animate__fadeInUp" style="animation-delay: 0.2s;">
                    <div class="stat-card-modern">
                        <div class="stat-icon icon-red">
                            <i class="bi bi-fire"></i>
                        </div>
                        <div class="stat-info">
                          <h3>{{ $count->where('jenis_bencana','Kebakaran')->count() }}</h3>
                          <p>Kebakaran</p>
                        </div>
                    </div>
                </div>
                <!-- Stat Item -->
                <div class="col-md-3 animate__animated animate__fadeInUp" style="animation-delay: 0.3s;">
                    <div class="stat-card-modern">
                        <div class="stat-icon icon-green">
                            <i class="bi bi-wind"></i>
                        </div>
                        <div class="stat-info">
                          <h3>{{ $count->where('jenis_bencana','Angin Puting Beliung')->count() }}</h3>
                          <p>Angin Beliung</p>
                        </div>
                    </div>
                </div>
                <!-- Stat Item -->
                <div class="col-md-3 animate__animated animate__fadeInUp" style="animation-delay: 0.4s;">
                    <div class="stat-card-modern">
                        <div class="stat-icon icon-orange">
                            <i class="bi bi-triangle"></i>
                        </div>
                        <div class="stat-info">
                            <h3>{{ $count->where('jenis_bencana','Tanah Longsor')->count() }}</h3>
                            <p>Longsor</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Recent Alerts -->
     <div id="laporan"></div>
    <section  class="py-5 mt-5">
        <div class="container">
            <div class="d-flex justify-content-between align-items-end mb-5">
                <div>
                    <h2  class="section-title">Laporan Bencana Terbaru</h2>
                    <p class="text-muted">Pantau kejadian terkini di sekitar wilayah Anda</p>
                </div>
                <a href="javascript:void(0)" id="lihatSemuaBtn" class="text-primary fw-bold text-decoration-none mb-4">Lihat Semua <i class="bi bi-arrow-right"></i></a>
            </div>

            <div class="row g-4">
                 @foreach($bencanas as $index => $bencana)
                <!-- Card 1 -->
                 <div class="col-lg-4 {{ $index >= 3 ? 'd-none extra-card' : '' }}">
                    <div class="bencana-card shadow-sm position-relative">
                        <!-- <span class="card-badge badge-banjir">Banjir</span> -->
                        <div class="card-body-modern">
                            <h4 class="fw-bold mb-4"> {{ $bencana->jenis_bencana }}</h4>
                            <div class="info-item">
                                <i class="bi bi-geo-alt"></i>
                                <span>{{ $bencana->lokasi }}</span>
                            </div>
                            <div class="info-item">
                                <i class="bi bi-calendar3"></i>
                                <span> {{ \Carbon\Carbon::parse($bencana->tanggal)->format('d F Y') }}</span>
                            </div>
                            <div class="info-item">
                                <i class="bi bi-people"></i>
                                <span>{{ $bencana->terdampak }}</span>
                            </div>
                            <!-- <hr class="my-4 opacity-50">
                            <div class="d-grid">
                                <button class="btn btn-outline-primary rounded-pill">Detail Laporan</button>
                            </div> -->
                        </div>
                    </div>
                </div>
                
                @endforeach
                
            </div>
            <!-- Pagination -->
<div id="paginationBox" class="mt-5 d-flex justify-content-center d-none">
{{ $bencanas->links() }}
</div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="py-5 bg-white">
        <div class="container py-4">
            <div class="row align-items-center mb-5">
                <div class="col-lg-6">
                    <h2 class="section-title">Peta Digital</h2>
                    <p class="text-muted fs-5">Kota Palopo memiliki luas wilayah sekitar 247,52 km² yang terbagi dalam 9 kecamatan. Dengan kondisi geografis yang bervariasi, kota ini memiliki potensi terjadinya berbagai bencana alam. Website Geographic Information System (WebGIS) Multi Bencana ini dikembangkan sebagai media informasi untuk menampilkan data dan persebaran kejadian bencana di Kota Palopo secara interaktif dan mudah diakses oleh masyarakat.</p>
                </div>
                <div class="col-lg-6 text-lg-end">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52459.891562335666!2d120.19998414999999!3d-3.0149812!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d93e03ef72f9f91%3A0x3030bfbcaf770c0!2sPalopo%2C%20Kec.%20Wara%2C%20Kota%20Palopo%2C%20Sulawesi%20Selatan!5e1!3m2!1sid!2sid!4v1778088292209!5m2!1sid!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

        </div>
    </section>

    <!-- Copyright Start -->
    @include('user.footer')
    <!-- Copyright End -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
    const btn = document.getElementById('lihatSemuaBtn');

    btn.addEventListener('click', function () {

        // tampilkan card tersembunyi
        document.querySelectorAll('.extra-card').forEach(function(item) {
            item.classList.remove('d-none');
        });

        // tampilkan pagination
        document.getElementById('paginationBox').classList.remove('d-none');

        // sembunyikan tombol
        btn.style.display = 'none';
    });
</script>


<script>
window.addEventListener("scroll", function () {
    let navbar = document.getElementById("mainNavbar");
    if (window.scrollY > 50) {
        navbar.classList.add("scrolled");
    } else {
        navbar.classList.remove("scrolled");
    }
});
</script>

  </body>

</html>