@extends('layouts.layouts')

@section('content')
<section id="hero">
    <div class="container text-center text-white">
      <div class="hero-title" data-aos="fade-up">
      <link rel="shortcut icon" href="{{ asset('assets/icon/pwk.ico')}}">
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

    <div class="row py-5" data-aos="flip-up">
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100 border-0 shadow-sm">
          <img src="assets/images/berita-01.jpg" class="card-img-top" alt="Sholat Ied Dul Adha">
          <div class="card-body d-flex flex-column">
            <p class="mb-3 text-secondary">17/06/2024</p>
            <h4 class="card-title mb-3">Pemkab Purwakarta Menggelar Sholat ied dul Adha Bersama 
              Para Warga Purwakarta</h4>
            <p class="card-text text-secondary">#BeritaPurwakarta</p>
            <a href="https://www.purwakartaupdate.com/pemerintahan/pemkab-purwakarta-bersama-masyarakat-gelar-shalat-idul-adha-1445-h/#google_vignette" class="mt-auto text-decoration-none text-danger">Selengkapnya</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100 border-0 shadow-sm">
          <img src="assets/images/berita-02.jpg" class="card-img-top" alt="Judul Berita Kedua">
          <div class="card-body d-flex flex-column">
            <p class="mb-3 text-secondary">18/06/2024</p>
            <h4 class="card-title mb-3">Pln masuk jajaran 10 besar perusahaan terbaik asia tenggara 
              versi Fortune</h4>
            <p class="card-text text-secondary">#BeritaTerbaru</p>
            <a href="https://web.pln.co.id/media/siaran-pers/2024/06/pln-masuk-jajaran-10-besar-perusahaan-terbaik-asia-tenggara-versi-fortune" class="mt-auto text-decoration-none text-danger">Selengkapnya</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100 border-0 shadow-sm">
          <img src="assets/images/berita-03.jpeg" class="card-img-top" alt="Judul Berita Ketiga">
          <div class="card-body d-flex flex-column">
            <p class="mb-3 text-secondary">7/juli/2024</p>
            <h4 class="card-title mb-3">Sambut 1 Muharam dan Meriahkan Hari Jadi Purwakarta, Pemkab Gelar
              Doa Bersama Dan Pawai Obor
            </h4>
            <p class="card-text text-secondary">#BeritaPopuler</p>
            <a href="https://nkripost.co/2024/07/07/sambut-tahun-baru-islam-1-muharam-pemkab-purwakarta-gelar-doa-bersama-dan-pawai-obor/#google_vignette" class="mt-auto text-decoration-none text-danger">Selengkapnya</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100 border-0 shadow-sm">
          <img src="assets/images/polrI.jpg" class="card-img-top" alt="Judul Berita Keempat">
          <div class="card-body d-flex flex-column">
            <p class="mb-3 text-secondary">19/06/2024</p>
            <h4 class="card-title mb-3">Polri Presisi Untuk Indonesia Emas
            </h4>
            <p class="card-text text-secondary">#BeritaPopuler</p>
            <a href="https://ppid.purwakartakab.go.id/read/polri-presisi-untuk-indonesia-emas" class="mt-auto text-decoration-none text-danger">Selengkapnya</a>
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

      <div class="row py-5" data-aos="flip-down">
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
              <p class="card-text">Berikut Adalah Temapat Wisata yang berada di Purwakarta.</p>
              <a href="#" class="btn btn-outline-danger">Klik Disini</a>
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
  