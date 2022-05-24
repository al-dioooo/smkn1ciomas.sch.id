<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>SMK Negeri 1 Ciomas</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/logo50.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ 'assets/vendor/aos/aos.css' }}" rel="stylesheet">
    <link href="{{ 'assets/vendor/bootstrap/css/bootstrap.min.css' }}" rel="stylesheet">
    <link href="{{ 'assets/vendor/bootstrap-icons/bootstrap-icons.css' }}" rel="stylesheet">
    <link href="{{ 'assets/vendor/boxicons/css/boxicons.min.css' }}" rel="stylesheet">
    <link href="{{ 'assets/vendor/glightbox/css/glightbox.min.css' }}" rel="stylesheet">
    <link href="{{ 'assets/vendor/swiper/swiper-bundle.min.css' }}" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <x-header />
    @yield('hero')

    <main id="main">
        @yield('container')
    </main>

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-info">
                        <h3>SMKN 1 Ciomas</h3>
                        <p>SMK Negeri 1 Ciomas Memiliki 5 Jurusan Yaitu Rekaya Perangkat Lunak (RPL), Animasi, Teknik
                            Kendaraan Ringan (TKR), Teknik Pengelasan (TPL) dan di tambah lagi satu jurusan yaitu
                            Produksi Dan Siaran Program Televisi (PSPT).</p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><a href="#">Beranda</a></li>
                            <li><a href="#">Tentang Kami</a></li>
                            <li><a href="#">Kontak</a></li>
                            <li><a href="#">PPDB</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>Contact Us</h4>
                        <p>
                            Jalan Raya Laladon<br>
                            Ciomas, Kab. Bogor<br>
                            Jawa Barat <br>
                            <strong>Phone:</strong> +62251 7520933<br>
                            <strong>Email:</strong> info@smkn1ciomas.sch.id<br>
                        </p>

                        <div class="social-links">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>

                    </div>

                    <div class="col-lg-3 col-md-6 footer-newsletter">
                        <h4>Our Newsletter</h4>
                        <p>14/7/2021 - Mengadakan IHT Jurusan (Program Keahlian) untuk merumuskan Skill Passport yang
                            akan menjadi acuan proses pembelajaran produk SMKN 1 Ciomas</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Serenity</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/serenity-bootstrap-corporate-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ 'assets/vendor/aos/aos.js' }}"></script>
    <script src="{{ 'assets/vendor/bootstrap/js/bootstrap.bundle.min.js' }}"></script>
    <script src="{{ 'assets/vendor/glightbox/js/glightbox.min.js' }}"></script>
    <script src="{{ 'assets/vendor/isotope-layout/isotope.pkgd.min.js' }}"></script>
    <script src="{{ 'assets/vendor/php-email-form/validate.js' }}"></script>
    <script src="{{ 'assets/vendor/purecounter/purecounter.js' }}"></script>
    <script src="{{ 'assets/vendor/swiper/swiper-bundle.min.js' }}"></script>
    <script src="{{ 'assets/vendor/waypoints/noframework.waypoints.js' }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ 'assets/js/main.js' }}"></script>

</body>

</html>
