<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kabupaten</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- navbar -->
    @include('layouts.navbar')

    <!-- content -->
    @yield('content')

<!-- Footer -->
<footer class="bg-white text-light py-4">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h4 class="fw-bold">Hubungi Kami</h4>
                    <p>JL. Gandanegara No. 25, Kelurahan Nageri Kidul,<br>
                    Kecamatan Purwakarta, Kabupaten <br>
                    Purwakarta, Provinsi Jawa Barat. Kode Pos 41111. <br>
                    Telepon: (0264) 200036 <br> Email: diskominfo@purwakartakab.go.id <br>Fax: (0264) 200037
                    </p>
                    <div class="social-icons">
                        <a href="#"><img src="assets/images/ig.png" alt="Instagram" class="icon"></a>
                        <a href="#"><img src="assets/images/twt.png" alt="Twitter" class="icon"></a>
                        <a href="#"><img src="assets/images/yt.png" alt="YouTube" class="icon"></a>
                        <a href="#"><img src="assets/images/email.png" alt="Email" class="icon"></a>
                        <a href="#"><img src="assets/images/fb.png" alt="Facebook" class="icon"></a>
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

<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous">
  </script>

  <script>
    const navbar = document.querySelector(".fixed-top");
    const navLinks = document.querySelectorAll(".nav-link");
    const navbarBrand = document.querySelector(".navbar-brand");

    window.onscroll = () => {
      if (window.scrollY > 100) {
        navbar.classList.add("scroll-nav-active");
        navbarBrand.classList.add("text-nav-active");
        navbarBrand.classList.remove("text-nav-inactive");
        navLinks.forEach(link => {
          link.classList.add("text-nav-active");
          link.classList.remove("text-nav-inactive");
        });
      } else {
        navbar.classList.remove("scroll-nav-active");
        navbarBrand.classList.remove("text-nav-active");
        navbarBrand.classList.add("text-nav-inactive");
        navLinks.forEach(link => {
          link.classList.remove("text-nav-active");
          link.classList.add("text-nav-inactive");
        });
      }
    };
  </script>
</body>
</html>
</body>