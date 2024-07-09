@extends('layouts.layouts')

@section('content')
<section id="hero">
    <div class="container text-center text-white">
      <div class="hero-title">
        <div class="hero-text">
          PURWAKARTA ISTIMEWA <br> Melayani Masyarakat Sepenuh Hati
        </div>
      </div>
    </div>
  </section>

<!-- Berita -->
<section id="berita">
  <div class="container py-5">
    <div class="header-berita text-center">
      <h2 class="fw-bold">Berita Purwakarta</h2>
    </div>

    <div class="row py-5">
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100 border-0 shadow-sm">
          <img src="assets/images/berita-01.jpg" class="card-img-top" alt="Sholat Ied Dul Adha">
          <div class="card-body d-flex flex-column">
            <p class="mb-3 text-secondary">17/06/2024</p>
            <h4 class="card-title mb-3">Sholat Ied Dul Adha</h4>
            <p class="card-text text-secondary">#BeritaPurwakarta</p>
            <a href="#" class="mt-auto text-decoration-none text-danger">Selengkapnya</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100 border-0 shadow-sm">
          <img src="assets/images/berita-02.jpg" class="card-img-top" alt="Judul Berita Kedua">
          <div class="card-body d-flex flex-column">
            <p class="mb-3 text-secondary">18/06/2024</p>
            <h4 class="card-title mb-3">Pln masuk jajaran 10 besar perusahaan terbaik asia tenggara versi Fortune</h4>
            <p class="card-text text-secondary">#BeritaTerbaru</p>
            <a href="#" class="mt-auto text-decoration-none text-danger">Selengkapnya</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100 border-0 shadow-sm">
          <img src="assets/images/berita-01.jpg" class="card-img-top" alt="Judul Berita Ketiga">
          <div class="card-body d-flex flex-column">
            <p class="mb-3 text-secondary">19/06/2024</p>
            <h4 class="card-title mb-3">Judul Berita Ketiga</h4>
            <p class="card-text text-secondary">#BeritaPopuler</p>
            <a href="#" class="mt-auto text-decoration-none text-danger">Selengkapnya</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100 border-0 shadow-sm">
          <img src="assets/images/berita-01.jpg" class="card-img-top" alt="Judul Berita Keempat">
          <div class="card-body d-flex flex-column">
            <p class="mb-3 text-secondary">19/06/2024</p>
            <h4 class="card-title mb-3">Judul Berita Keempat</h4>
            <p class="card-text text-secondary">#BeritaPopuler</p>
            <a href="#" class="mt-auto text-decoration-none text-danger">Selengkapnya</a>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-berita text-center">
      <a href="/berita" class="btn btn-outline-danger">Berita Lainnya</a>
    </div>
  </div>
</section>

  <!-- Layanan -->
  <section id="layanan" class="py-5">
    <div class="container bg-light p-4">
      <div class="header-layanan text-center">
        <h2 class="fw-bold">Layanan</h2>
      </div>

      <div class="row py-5">
        <div class="col-lg-4">
          <div class="card border-0 shadow-sm">
            <img src="assets/images/lb.jpg" class="card-img-top" alt="Layanan 1">
            <div class="card-body">
              <h4 class="fw-bold mb-3">Perpustakaan Digital</h4>
              <p class="card-text">Ayo Membaca Di Perpustakaan Digital</p>
              <a href="#" class="btn btn-outline-danger">Klik Disini</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="card border-0 shadow-sm">
            <img src="assets/images/wisata.jpg" class="card-img-top" alt="Layanan 2">
            <div class="card-body">
              <h4 class="fw-bold mb-3">Wisata Purwakarta</h4>
              <p class="card-text">Deskripsi singkat tentang layanan 2.</p>
              <a href="#" class="btn btn-outline-danger">Pelajari Lebih Lanjut</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="card border-0 shadow-sm">
            <img src="assets/images/cvd.jpeg" class="card-img-top" alt="Layanan 3">
            <div class="card-body">
              <h4 class="fw-bold mb-3">Informasi tentang covid-19</h4>
              <p class="card-text">Berikut adalah seputar informasi tentang covid-19 di Purwakarta</p>
              <a href="#" class="btn btn-outline-danger">Klik Disini</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Foto dan Informasi -->
  <section class="py-5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-4">
        <div class="text-center leader-container">
          <h2 class="fw-bold">Pemimpin Daerah</h2>
          <p class="leader-info">Drs. BENNI IRWAN, M.Si, M.A.<br>Pj. Bupati Purwakarta</p>
          <img src="assets/images/bupati.jpg" class="img-fluid rounded mb-3 mt-3 image-left" alt="Pemimpin Daerah">
        </div>
      </div>
      <div class="col-lg-7 offset-lg-1">
        <div class="bg-image-right p-4">
          <div class="text-center mb-3">
            <h2 class="fw-bold">Informasi Terkini</h2>
          </div>
          <div class="image-container">
            <img src="assets/images/ss.jpg" class="img-fluid rounded mb-3 image-right" alt="Informasi Terkini">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
  