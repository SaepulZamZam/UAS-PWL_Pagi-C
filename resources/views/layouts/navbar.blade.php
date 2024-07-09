<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark py-3 fixed-top {{Request::segment(1) == '' ? '' : 'bg-white shadow'}} ">
    <div class="container-fluid">
      <a class="navbar-brand text-nav-inactive" href="#">Beranda</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link text-nav-inactive" href="#berita">Berita</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-nav-inactive" href="#layanan">Regulasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-nav-inactive" href="#layanan">Laporan Warga</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-nav-inactive" href="#layanan">Pengumuman</a>
          </li>
        </ul>
        <div class="d-flex">
          
        </div>
        <span class="navbar-text ms-auto" id="navbar-right-text">
          <img src="assets/images/logo.png" alt="Logo" style="height: 30px; margin-right: 10px;"> purwakartakab.go.id
        </span>
      </div>
    </div>
  </nav>