<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kabupaten</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="shortcut icon" href="{{ asset('assets/icon/pwk.ico')}}">

  <!-- aos -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css" />
</head>

<body>
  <!-- navbar -->
  @include('layouts.navbar')

  <!-- content -->
  @yield('content')

  <!-- Footer -->
  <section id="footer" class="bg-white">
    <div class="container">
      <footer>
        <div class="row">
          <div class="col">
            <h4 class="fw-bold">Hubungi Kami</h4>
            <p>JL. Gandanegara No. 25, Kelurahan Nageri Kidul,<br>
              Kecamatan Purwakarta, Kabupaten <br>
              Purwakarta, Provinsi Jawa Barat. Kode Pos 41111. <br>
              Telepon: (0264) 200036 <br> Email: diskominfo@purwakartakab.go.id <br>Fax: (0264) 200037
            </p>
            <div class="social-icons">
              <a href="#"><img src="{{ asset('assets/images/ig.png')}}" alt="Instagram" class="icon"></a>
              <a href="#"><img src="{{asset('assets/images/twt.png')}}" alt="Twitter" class="icon"></a>
              <a href="#"><img src="{{ asset('assets/images/yt.png')}}" alt="YouTube" class="icon"></a>
              <a href="#"><img src="{{ asset('assets/images/email.png')}}" alt="Email" class="icon"></a>
              <a href="#"><img src="{{ asset('assets/images/fb.png')}}" alt="Facebook" class="icon"></a>
            </div>
          </div>
          <div class="col">
            <h4 class="fw-bold">Statistik Pengunjung</h4>
            <p>Hari ini: 1,146 Pengunjung.</p>
            <p>Bulan ini: 149,449 Pengunjung.</p>
          </div>
          <div class="col">
            <h4 class="fw-bold">Subscribe With Us</h4>
            <p>Subscribe to our mailing list to get the new updates!</p>
            <form>
              <div class="mb-3">
                <input type="email" class="form-control" placeholder="Enter Your Email Address">
              </div>
              <button type="submit" class="btn btn-outline-light">Subscribe Now</button>
            </form>
          </div>
        </div>
    </div>
    </footer>
    </div>
  </section>


  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <script>
    const navbar = document.querySelector(".fixed-top");
    window.onscroll = () => {
      if (window.scrollY > 100) {
        navbar.classList.add("scroll-nav-active");
        navbar.classList.add("text-nav-active");
        // navbar.classList.remove("navbar-dark");//
      } else {
        navbar.classList.remove("scroll-nav-active");
        // navbar.classList.add("navbar-dark");
      }
    };
    AOS.init();
  </script>
  {{-- JQUERY --}}
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
  {{-- Summernote JS --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.js"></script>
  <script>
$(document).ready(function() {
            $('#summernote').summernote({
                height: 200,
            });
 });
  
</body>

</html>