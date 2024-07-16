@extends('layouts.layouts')

@section('content')
<h1> Daftar Berita</h1>
<section id="berita" style="margin-top: 100px">
    <div class="container py-5">
        <div class="header-berita text-center">
            <h2 class="fw-bold">Berita Purwakarta</h2>
        </div>

        <div class="row py-5" data-aos="flip-up">
        @foreach ($artikels as $item)
        <div class="col-lg-4 mb-4">
            <div class="card border-0">
                <img src="{{ asset('storage/artikel/' . $item->image)}}" class="card-img-top" alt="Sholat Ied Dul Adha">
                <div class="card-body d-flex flex-column">
                    <p class="mb-3 text-secondary">{{ $item->create_at }}</p>
                    <h4 class="card-title mb-3">{{ $item->judul }}</h4>
                    <p class="card-text text-secondary">#BeritaPurwakarta</p>
                    <a href="/detail/{{ $item->slug }}" class="mt-auto text-decoration-none text-danger">Selengkapnya</a>
                </div>
            </div>
        </div>
        @endforeach
        </div>

    </div>
</section>
@endsection