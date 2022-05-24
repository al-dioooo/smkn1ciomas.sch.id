@extends('layout.guest')

@section('hero')
    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container" data-aos="fade-up">
            <h1>SMK NEGERI 1 CIOMAS</h1>
            <h2>SMK PUSAT KEUNGGULAN</h2>
            <a href="#services" class="btn-get-started scrollto">Get Started</a>
        </div>
    </section>
    <!-- End Hero -->
@endsection

@section('container')
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="row justify-content-end">
                <div class="col-lg-11">
                    <div class="row justify-content-end">

                        <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                            <div class="py-5 count-box">
                                <i class="bi bi-person"></i>
                                <span data-purecounter-start="0" data-purecounter-end="875" class="purecounter">0</span>
                                <p>Siswa</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                            <div class="py-5 count-box">
                                <i class="bi bi-people-fill"></i>
                                <span data-purecounter-start="0" data-purecounter-end="64" class="purecounter">0</span>
                                <p>Guru</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                            <div class="pt-0 pb-5 count-box pt-lg-5">
                                <i class="bi bi-book"></i>
                                <span data-purecounter-start="0" data-purecounter-end="5" class="purecounter">0</span>
                                <p>Jurusan</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                            <div class="pt-0 pb-5 count-box pt-lg-5">
                                <i class="bi bi-award"></i>
                                <span data-purecounter-start="0" data-purecounter-end="220" class="purecounter">0</span>
                                <p>Prestasi</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-lg-6 video-box align-self-baseline position-relative">
                    <img src="assets/img/ASASA.jpg" class="img-fluid" alt="">
                    <a href="https://www.youtube.com/watch?v=kKDhOjDWBec" class="mb-4 glightbox play-btn"></a>
                </div>

                <div class="pt-3 col-lg-6 pt-lg-0 content">
                    <h3>SMK Negeri 1 Ciomas</h3>
                    <p align="justify">
                        SMK Negeri 1 Ciomas Adalah Sekolah Negeri Yang Berdiri Pada Tahun 2008 Di Jalan Raya Laladon,
                        Desa Laladon, Kecamatan Ciomas. SMK Negeri 1 Ciomas Memiliki 5 Jurusan Yaitu Rekaya Perangkat
                        Lunak (RPL), Animasi, Teknik Kendaraan Ringan (TKR), Teknik Pengelasan (TPL) dan di tambah lagi
                        satu jurusan yaitu Produksi Dan Siaran Program Televisi (PSPT).
                    </p>
                    <p align="justify">
                        Siswa Di SMK Negeri 1 Ciomas di latih untuk bersikap jujur, disiplin, taat, dan mencintai
                        lingkungan sekitar. Diantaranya program yang ada di sekolah kita adalah gerakan disiplin
                        sekolah(GDS), jum'at taqwa, literasi dan masih banyak lagi.

                    </p>
                </div>

            </div>

        </div>
    </section><!-- End About Section -->


    <!-- ======= Services Section ======= -->
    <section id="services" class="services ">
        <div class="container">

            <div class="pt-5 section-title" data-aos="fade-up">
                <h2>Kompetensi Keeahlian</h2>
            </div>

        </div>
        <div class="mt-5 widgets row multi-columns-row">
            <div id="serenity_feature-1" class="mb-5 text-center widget serenity-feature-widget col-sm-6 col-md-6 col-lg-4">
                <div class="shadow card">
                    <div class="px-4 py-5 card-body">
                        <a href="animasi.html" target="blank"><img src="assets/img/animasi.png" class="mt-0 mb-4 image">
                        </a>
                        <h6 class="mb-3 widget-title">Animasi</h6>
                        <p>Animasi merupakan suatu teknik menampilkan gambar berurut sedemikian rupa sehingga penonton
                            merasakan adanya ilusi gerakan (motion) pada gambar yang ditampilkan. Perubahan seperti
                            perubahan warna pun dapat dikatakan sebuah animasi</p>
                    </div>
                </div>
            </div>
            <div id="serenity_feature-2" class="mb-5 text-center widget serenity-feature-widget col-sm-6 col-md-6 col-lg-4">
                <div class="shadow card">
                    <div class="px-4 py-5 card-body">
                        <a href="rpl.html" target="blank"><img src="assets/img/rpl.png" class="mt-0 mb-4 image"> </a>
                        <h6 class="mb-3 widget-title">Rekayasa Perangkat Lunak</h6>
                        <p>Rekayasa perangkat lunak (RPL, atau dalam bahasa Inggris: Software Engineering atau SE)
                            adalah satu bidang profesi yang mendalami cara-cara pengembangan perangkat lunak termasuk
                            pembuatan, pemeliharaan, manajemen organisasi pengembanganan perangkat lunak dan manajemen
                            kualitas.</p>
                    </div>
                </div>
            </div>
            <div id="serenity_feature-3" class="mb-5 text-center widget serenity-feature-widget col-sm-6 col-md-6 col-lg-4">
                <div class="shadow card">
                    <div class="px-4 py-5 card-body">
                        <a href="tkr.html" target="blank"><img src="assets/img/tkr.png" class="mt-0 mb-4 image"></a>
                        <h6 class="mb-3 widget-title">Teknik Kendaraan Ringan</h6>
                        <p>Teknik Kendaraan Ringan merupakan kompetensi keahlian bidang teknik otomotif yang menekankan
                            keahlian pada bidang penguasaan jasa perbaikan kendaraan ringan.</p>
                    </div>
                </div>
            </div>
            <div id="serenity_feature-4"
                class="mb-5 text-center widget serenity-feature-widget offset-md-2 col-sm-6 col-md-6 col-lg-4">
                <div class="shadow card">
                    <div class="px-4 py-5 card-body">
                        <a href="tpl.html" target="blank"><img src="assets/img/tpl.png" class="mt-0 mb-4 image"></a>
                        <h6 class="mb-3 widget-title">Teknik Pengelasan</h6>
                        <p>Pengelasan (Welding) adalah salah satu teknik penyambungan logam dengan cara mencairkan
                            sebagian logam pengisi dengan atau tanpa tekanan dan dengan atau tanpa logam penambah yang
                            menghasilkan sambungan yang kontinyu</p>
                    </div>
                </div>
            </div>
            <div id="serenity_feature-5" class="mb-5 text-center widget serenity-feature-widget col-sm-6 col-md-6 col-lg-4">
                <div class="shadow card">
                    <div class="px-4 py-5 card-body">
                        <a href="pspt.html" target="blank"><img src="assets/img/broadcasting.png"
                                class="mt-0 mb-4 image"></a>
                        <h6 class="mb-3 widget-title">Broadcasting</h6>
                        <p>Penyiaran adalah pendistribusian muatan audio atau video kepada pemirsa yang tersebar melalui
                            berbagai medium komunikasi massa, namun umumnya menggunakan spektrum elektromagnetik, dalam
                            suatu model satu-untuk-banyak</p>
                    </div>
                </div>
            </div>
        </div>

    </section><!-- End Services Section -->


    <!-- ======= Our Clients Section ======= -->
    <section id="clients" class="clients">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Mitra Industri</h2>
                <p>
                    </h3>
                <p>SMKN 1 CIOMAS Telah Bekerja Sama Dengan Berbagai Industri Khususnya Dalam Sharing Pengalaman Di Dunia
                    Industri dan Penyaluran Tenaga Kerja Untuk Para Siswa Yang Kompeten</p>
            </div>

            <div class="clients-slider swiper-container">
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide"><img src="assets/img/Industri/1.png" class="img-fluid" alt="">
                    </div>
                    <div class="swiper-slide"><img src="assets/img/Industri/2.png" class="img-fluid" alt="">
                    </div>
                    <div class="swiper-slide"><img src="assets/img/Industri/3.png" class="img-fluid" alt="">
                    </div>
                    <div class="swiper-slide"><img src="assets/img/Industri/4.png" class="img-fluid" alt="">
                    </div>
                    <div class="swiper-slide"><img src="assets/img/Industri/5.png" class="img-fluid" alt="">
                    </div>
                    <div class="swiper-slide"><img src="assets/img/Industri/6.png" class="img-fluid" alt="">
                    </div>
                    <div class="swiper-slide"><img src="assets/img/Industri/7.png" class="img-fluid" alt="">
                    </div>
                    <div class="swiper-slide"><img src="assets/img/Industri/8.png" class="img-fluid" alt="">
                    </div>
                    <div class="swiper-slide"><img src="assets/img/Industri/9.png" class="img-fluid" alt="">
                    </div>
                    <div class="swiper-slide"><img src="assets/img/Industri/10.png" class="img-fluid" alt="">
                    </div>
                    <div class="swiper-slide"><img src="assets/img/Industri/11.png" class="img-fluid" alt="">
                    </div>
                    <div class="swiper-slide"><img src="assets/img/Industri/12.png" class="img-fluid" alt="">
                    </div>
                    <div class="swiper-slide"><img src="assets/img/Industri/13.png" class="img-fluid" alt="">
                    </div>
                    <div class="swiper-slide"><img src="assets/img/Industri/14.png" class="img-fluid" alt="">
                    </div>
                    <div class="swiper-slide"><img src="assets/img/Industri/15.png" class="img-fluid" alt="">
                    </div>
                    <div class="swiper-slide"><img src="assets/img/Industri/16.png" class="img-fluid" alt="">
                    </div>
                    <div class="swiper-slide"><img src="assets/img/Industri/17.png" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Our Clients Section -->
@endsection
