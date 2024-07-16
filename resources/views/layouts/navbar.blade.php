<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar py-3 fixed-top {{Request::segment(1) == '' ? '' : 'bg-white shadow'}}">
    <div class="container-fluid">
        <img src="{{ asset('assets/icon/logo.png') }}" height="55" width="55" alt="">
        <a class="navbar-brand text-nav-inactive" href="/">Beranda</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="#berita">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="https://jdih.purwakartakab.go.id/">Regulasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="https://www.lapor.go.id/">Laporan Warga</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="https://purwakartakab.go.id/index.php/pengumuman">Pengumuman</a>
                </li>
            </ul>
            <div class="d-flex">
                @auth
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-dark">Logout</button>
                    </form>
                @else
                    <a href="/login" class="btn btn-danger">Login</a>
                @endauth
            </div>
        </div>
    </div>
</nav>
