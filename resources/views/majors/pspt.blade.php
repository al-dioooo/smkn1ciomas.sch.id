@extends('layout.guest')

@section('container')
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="{{ route('index') }}">Home</a></li>
                <li>PSPT</li>
            </ol>
        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="row justify-content-end">
                <div class="row">

                    <div class="col-lg-6 video-box align-self-baseline position-relative">
                        <img src="assets/img/pspt/Profil.jpg" class="img-fluid" alt="">
                        <a href="https://www.youtube.com/watch?v=sXYwxzxfFbw" class="mb-4 glightbox play-btn"></a>
                    </div>

                    <div class="pt-3 col-lg-6 pt-lg-0 content">
                        <h3>PRODUKSI DAN SIARAN PROGRAM TELEVISI (PSPT) </h3>
                        <ul>
                            <li> <strong>Bidang Keahlian:</strong> Seni dan Industri Kreatif </li>
                            <li> <strong>Program Keahlian:</strong> Seni Broadcasting dan Film </li>
                            <li> <strong>Kompetensi Keahlian:</strong> Produksi dan Siaran Program Televisi (PSPT) </li>
                            <li> <strong>Berdiri pada tahun: </strong>2018 - Sekarang (2021) </li>
                        </ul>
                        <p>
                            Kompetensi keahlian Produksi dan Siaran Program Televisi SMK Negeri 1 Ciomas menerapkan model
                            pembelajaran praktik 60% dan 40% teori, dengan fokus pada hasil akhir karya di setiap kelasnya
                            yang akan ditampilkan lewat Screening Hasil Karya pada saat berakhirnya Ujian Semester.
                        </p>
                    </div>

                </div>

            </div>
    </section><!-- End About Section -->


    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
        <div class="container">

            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="box" data-aos="fade-up">
                        <h3><strong>KELAS X PSPT</strong></h3>
                        <ul>
                            <li>NEWS FEATURE</li>
                            <li>FILM PENDEK</li>
                            <li>IKLAN PRODUK</li>
                            <li>IKLAN LAYANAN MASYARAKAT</li>
                            <li>BIOSKOP MINI SKANIC</li>
                        </ul>
                    </div>
                </div>

                <div class="mt-4 col-lg-3 col-md-6 mt-md-0">
                    <div class="box featured" data-aos="fade-up" data-aos-delay="100">
                        <h3><strong>KELAS XI PSPT</strong></h3>
                        <ul>
                            <li>LIVE PRODUKSI PROGRAM (talk show, podcast, reality show, dan lainnya)</li>
                            <li>FILM PENDEK</li>
                            <li>EVENT (workshop, seminar, sharing session,festival musik)</li>
                            <li>PAMERAN KARYA PKK (produk kreatif kewirausahaan)</li>
                        </ul>
                    </div>
                </div>

                <div class="mt-4 col-lg-3 col-md-6 mt-lg-0">
                    <div class="box" data-aos="fade-up" data-aos-delay="200">
                        <h3><strong>KELAS XII PSPT</strong></h3>
                        <ul>
                            <li>LIVE PRODUKSI PROGRAM (talk show, podcast, reality show, dan lainnya)</li>
                            <li>FILM PENDEK</li>
                            <li>EVENT (workshop, seminar, sharing session,festival musik)</li>
                            <li>PAMERAN KARYA PKK (produk kreatif kewirausahaan)</li>
                        </ul>

                    </div>
                </div>
                <div class="mt-4 col-lg-3 col-md-6 mt-lg-0">
                    <div class="box" data-aos="fade-up" data-aos-delay="300">
                        <span class="advanced">Fasilitas</span>
                        <h3><strong>Fasilitas </strong></h3>
                        <ul>
                            <li>Studio 1 PSPT : Untuk Praktik LIVE Produksi</li>
                            <li>Ruangan Master Control Room : Untuk Ruang Kendali Pada Saat LIVE Produksi</li>
                            <li>Ruangan Editing : Untuk Kebutuhan Pasca Produksi (Editing)</li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-app">KEGIATAN PRAKTIK </li>
                        <li data-filter=".filter-card">KERJASAMA INDUSTRI </li>
                        <li data-filter=".filter-prestasi">PRESTASI</li>
                        <li data-filter=".filter-web">TENAGA PENDIDIK</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up">

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="assets/img/pspt/Picture1.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <p>Kegiatan Praktik Live Produksi PSPT</p>
                            <div class="portfolio-links">
                                <a href="assets/img/pspt/Picture1.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="Kegiatan Praktik Live Produksi PSPT"><i
                                        class="bx bx-plus"></i></a>
                                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="assets/img/pspt/Picture2.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <p>Kegiatan Praktik Live Produksi PSPT</p>
                            <div class="portfolio-links">
                                <a href="assets/img/pspt/Picture2.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="Kegiatan Praktik Live Produksi PSPT"><i
                                        class="bx bx-plus"></i></a>
                                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="assets/img/pspt/Picture3.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <p>Kegiatan Praktik Live Produksi PSPT</p>
                            <div class="portfolio-links">
                                <a href="assets/img/pspt/Picture3.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="Kegiatan Praktik Live Produksi PSPT"><i
                                        class="bx bx-plus"></i></a>
                                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="assets/img/pspt/Picture4.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <p>Kegiatan Praktik Live Produksi PSPT</p>
                            <div class="portfolio-links">
                                <a href="assets/img/pspt/Picture4.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="Kegiatan Praktik Live Produksi PSPT"><i
                                        class="bx bx-plus"></i></a>
                                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="assets/img/pspt/Picture5.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <p>Kegiatan Praktik Live Produksi PSPT</p>
                            <div class="portfolio-links">
                                <a href="assets/img/pspt/Picture5.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="Kegiatan Praktik Live Produksi PSPT"><i
                                        class="bx bx-plus"></i></a>
                                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="assets/img/pspt/Picture6.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <p>Kegiatan Praktik Live Produksi PSPT</p>
                            <div class="portfolio-links">
                                <a href="assets/img/pspt/Picture6.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="Kegiatan Praktik Live Produksi PSPT"><i
                                        class="bx bx-plus"></i></a>
                                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="assets/img/pspt/Picture7.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <p>Kegiatan Praktik Live Produksi PSPT</p>
                            <div class="portfolio-links">
                                <a href="assets/img/pspt/Picture7.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="Kegiatan Praktik Live Produksi PSPT"><i
                                        class="bx bx-plus"></i></a>
                                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="assets/img/pspt/Picture8.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <p>Kegiatan Praktik Live Produksi PSPT</p>
                            <div class="portfolio-links">
                                <a href="assets/img/pspt/Picture8.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="Kegiatan Praktik Live Produksi PSPT"><i
                                        class="bx bx-plus"></i></a>
                                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="assets/img/pspt/Picture9.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <p>Kegiatan Praktik Live Produksi PSPT</p>
                            <div class="portfolio-links">
                                <a href="assets/img/pspt/Picture9.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="Kegiatan Praktik Live Produksi PSPT"><i
                                        class="bx bx-plus"></i></a>
                                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="assets/img/pspt/Picture10.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <p>Kerjasama Industri dengan INews</p>
                            <div class="portfolio-links">
                                <a href="assets/img/pspt/Picture10.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="Kerjasama Industri dengan INews"><i
                                        class="bx bx-plus"></i></a>
                                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="assets/img/pspt/Picture11.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <p>Kerjasama Industri dengan Megaswara TV</p>
                            <div class="portfolio-links">
                                <a href="assets/img/pspt/Picture11.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="Kerjasama Industri dengan Megaswara TV"><i
                                        class="bx bx-plus"></i></a>
                                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="assets/img/pspt/Picture12.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <p>Kerjasama Industri dengan DAAI TV</p>
                            <div class="portfolio-links">
                                <a href="assets/img/pspt/Picture12.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="Kerjasama Industri dengan DAAI TV"><i
                                        class="bx bx-plus"></i></a>
                                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-prestasi">
                    <div class="portfolio-wrap">
                        <img src="assets/img/pspt/Picture14.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <p>Juara 2 Terbaik KKSI (Kamp Kreatif SMK Indonesia) Bidang Promosi Wisata Unggulan Khas Daerah
                                dengan judul karya CEKAS “The Hidden Beauty At Bogor”, diselenggarakan oleh Direktorat SMK
                                dan Seameo Tahun 2020.</p>
                            <div class="portfolio-links">
                                <a href="assets/img/pspt/Picture14.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox"
                                    title="Juara 2 Terbaik KKSI (Kamp Kreatif SMK Indonesia) Bidang Promosi Wisata Unggulan Khas Daerah dengan judul karya CEKAS “The Hidden Beauty At Bogor”, diselenggarakan oleh Direktorat SMK dan Seameo Tahun 2020."><i
                                        class="bx bx-plus"></i></a>
                                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-prestasi">
                    <div class="portfolio-wrap">
                        <img src="assets/img/pspt/Picture15.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <p>Juara Favorit Vlog Terpuji ACFFEST (Anti Corruption Film Festival) dengan karya berjudul
                                “MISSING”, diselenggarakan tahun 2020 oleh KPK RI.</p>
                            <div class="portfolio-links">
                                <a href="assets/img/pspt/Picture15.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox"
                                    title="Juara Favorit Vlog Terpuji ACFFEST (Anti Corruption Film Festival) dengan karya berjudul “MISSING”, diselenggarakan tahun 2020 oleh KPK RI."><i
                                        class="bx bx-plus"></i></a>
                                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-prestasi">
                    <div class="portfolio-wrap">
                        <img src="assets/img/pspt/Picture16.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <p>Juara Harapan 2 Bogor Leaders Talk, diselenggarakan oleh DISPORA KABUPATEN BOGOR pada tahun
                                2021</p>
                            <div class="portfolio-links">
                                <a href="assets/img/pspt/Picture16.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox"
                                    title="Juara Harapan 2 Bogor Leaders Talk, diselenggarakan oleh DISPORA KABUPATEN BOGOR pada tahun 2021"><i
                                        class="bx bx-plus"></i></a>
                                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-prestasi">
                    <div class="portfolio-wrap">
                        <img src="assets/img/pspt/Picture17.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <p>20 Besar Peserta Lomba Video Kreatif Bogor Sport and Tourism, dengan judul karya “Tegar
                                Beriman : Goes To Kabupaten Bogor” diselenggarakan oleh DISBUDPAR KABUPATEN BOGOR Tahun 2020
                            </p>
                            <div class="portfolio-links">
                                <a href="assets/img/pspt/Picture17.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox"
                                    title="20 Besar Peserta Lomba Video Kreatif Bogor Sport and Tourism, dengan judul karya “Tegar Beriman : Goes To Kabupaten Bogor” diselenggarakan oleh DISBUDPAR KABUPATEN BOGOR Tahun 2020"><i
                                        class="bx bx-plus"></i></a>
                                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-prestasi">
                    <div class="portfolio-wrap">
                        <img src="assets/img/pspt/Picture18.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <p>Juara 3 Vlog Cerita Soekarno, diselenggarakan oleh Sultan TV pada tahun 2020</p>
                            <div class="portfolio-links">
                                <a href="assets/img/pspt/Picture18.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox"
                                    title="Juara 3 Vlog Cerita Soekarno, diselenggarakan oleh Sultan TV pada tahun 2020"><i
                                        class="bx bx-plus"></i></a>
                                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-prestasi">
                    <div class="portfolio-wrap">
                        <img src="assets/img/pspt/Picture19.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <p>Juara 3 Iklan Terbaik Festival UHAMKA, dengan judul karya “PAPER BAG STUDENT” diselenggarakan
                                oleh UHAMKA tahun 2019</p>
                            <div class="portfolio-links">
                                <a href="assets/img/pspt/Picture19.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox"
                                    title="Juara 3 Iklan Terbaik Festival UHAMKA, dengan judul karya “PAPER BAG STUDENT” diselenggarakan oleh UHAMKA tahun 2019"><i
                                        class="bx bx-plus"></i></a>
                                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="assets/img/pspt/Picture13.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <p>Tenaga Pendidik</p>
                            <div class="portfolio-links">
                                <a href="assets/img/pspt/Picture13.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="Tenaga Pendidik"><i class="bx bx-plus"></i></a>
                                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Portfolio Section -->
@endsection
