<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <title>Peta | SIG Multi Bencana Kota Palopo</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

          <!-- Favicon -->
      <link rel="icon" href="{{ asset('assets/img/logo1.png') }}" type="image/png">

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
            --dark: #0f172a;
            --secondary: #64748b;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #f8fafc;
            color: var(--dark);
        }

        /* Hero Header Section - Updated: No Skew */
        .page-header {
            /* background: linear-gradient(135deg, var(--dark) 0%, #1e293b 100%); */
            background:linear-gradient(rgba(15, 23, 42, 0.7), rgba(15, 23, 42, 0.8)),  url('/assets/img/BACKROUND 1.png') center center/cover no-repeat;
            padding: 80px 0;
            color: white;
            margin-bottom: 50px;
            position: relative;
        }

        /* Map Card Styling */
        .map-card {
            background: white;
            border-radius: 30px;
            padding: 40px;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.08);
            border: 1px solid rgba(226, 232, 240, 0.8);
            margin-bottom: 80px;
            transition: transform 0.3s ease;
        }

        .map-container {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            background: #f1f5f9;
            padding: 15px;
        }

        .map-img {
            width: 100%;
            max-height: 600px;
            object-fit: contain;
            border-radius: 15px;
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .map-container:hover .map-img {
            transform: scale(1.02);
        }

        /* Title Styling */
        .section-title {
            position: relative;
            display: inline-block;
            margin-bottom: 30px;
            font-weight: 800;
            letter-spacing: -0.5px;
            color: var(--dark);
        }

        .section-title::after {
            content: "";
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 4px;
            background: var(--primary);
            border-radius: 2px;
        }

        .badge-info {
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
            padding: 8px 16px;
            border-radius: 50px;
            font-size: 0.85rem;
            font-weight: 700;
            margin-bottom: 15px;
            display: inline-block;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        @media (max-width: 768px) {
            .map-card {
                padding: 20px;
                border-radius: 20px;
            }
            .page-header {
                padding: 60px 0;
            }
        }
    </style>
</head>

<body>


    {{-- header --}}
    @include('user.header')



    <!-- Hero Section - Clean Horizontal Layout -->
    <div class="page-header  text-center">
        <div class="container mt-5 py-3 animate__animated animate__fadeIn">
            <h1 class="fw-800 animate__animated animate__fadeInDown"> </h1>
            <p class="lead opacity-75 mx-auto text-white" style="max-width: 600px;">
            
            </p>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="map-card animate__animated animate__zoomIn">
                    <div class="text-center mb-4">
                        <h2 class="section-title">PETA KOTA PALOPO</h2>
                    </div>

                    <form method="GET" action="{{ route('user.peta') }}" class="mb-4">
<div class="row justify-content-end mb-3">
    <div class="col-md-auto">
        <div class="d-flex align-items-center gap-2">
            <label class="fw-bold mb-0">
                <i class="bi bi-calendar3 me-1"></i>
                Tahun
            </label>

            <select name="tahun" class="form-select" style="width: 120px;"
                    onchange="this.form.submit()">
                @for($i = 2021; $i <= 2025; $i++)
                    <option value="{{ $i }}"
                        {{ $tahun == $i ? 'selected' : '' }}>
                        {{ $i }}
                    </option>
                @endfor
            </select>
        </div>
    </div>
</div>
</form>

                    <!-- Peta Wrapper -->
                    <div class="map-container shadow-inner">
                    <img src="{{ asset('assets/img/'.$peta) }}"
                        alt="Peta Administrasi Kota Palopo"
                        class="map-img">
                        
                        <!-- Floating Info Button -->
                        <div class="position-absolute bottom-0 end-0 m-4">
                            <a href="{{ asset('assets/img/PETA-BENCANA-2025.png') }}"
                            target="_blank"
                            class="btn btn-light btn-sm shadow-sm rounded-pill px-3">
                            <i class="bi bi-fullscreen me-1"></i> Ukuran Penuh
                            </a>
                        </div>
                    </div>

                    <div class="mt-4 text-center">
                        <p class="text-secondary small">
                            <i class="bi bi-info-circle me-1"></i>
                            Peta ini menunjukkan pembagian wilayah administratif dan batas-batas kecamatan di Kota Palopo.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- footer --}}
    @include('user.footer')

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('assets/js/main.js') }}"></script>


</body>

</html>