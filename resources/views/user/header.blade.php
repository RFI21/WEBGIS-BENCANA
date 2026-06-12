
<style>

.logo-nav{
    height:40px;
    width:auto;
    margin-right:8px;
}

            /* NAVBAR STYLE */
#mainNavbar {
    transition: all 0.3s ease;
    padding: 15px 0;
    background: transparent;
}

#mainNavbar.scrolled {
    background: rgba(31, 98, 255, 0.54);
    backdrop-filter: blur(10px);
    box-shadow: 0 5px 20px rgba(12, 12, 12, 0.73);
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
</style>
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