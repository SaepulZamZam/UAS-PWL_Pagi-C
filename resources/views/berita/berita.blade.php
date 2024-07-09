@extends('layouts.layouts')

@section('content')
    <h1> Daftar Berita</h1>
    <section id="berita" style="margin-top: 100px">
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
      <a href="#" class="btn btn-outline-danger">Berita Lainnya</a>
    </div>
  </div>
</section>
@endsection