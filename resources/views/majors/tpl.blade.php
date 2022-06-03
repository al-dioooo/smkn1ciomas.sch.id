@extends('layout.guest')

@section('container')
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="{{ route('index') }}">Home</a></li>
                <li>TPL</li>
            </ol>
        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="row justify-content-end">
                <div class="row">

                    <div class="col-lg-6 video-box align-self-baseline position-relative">
                        <img src="assets/img/tpl/3.jpg" class="img-fluid" alt="">
                    </div>

                    <div class="pt-3 col-lg-6 pt-lg-0 content">
                        <h3>TEKNIK PENGELASAN LOGAM (TPL) </h3>
                        <ul>
                            <li> <strong>Bidang Keahlian:</strong> Teknologi dan Rekayasa </li>
                            <li> <strong>Program Keahlian:</strong> Teknik Mesin </li>
                            <li> <strong>Kompetensi Keahlian:</strong> Teknik Pengelasan Logam (TPL) </li>
                            <li> <strong>Berdiri pada tahun: </strong>2015 - Sekarang (2021) </li>
                        </ul>
                        <p>
                            Pengelasan (welding) adalah salah salah satu teknik penyambungan logam dengan cara mencairkan
                            atau memanaskan sebagian logam induk dan logam pengisi dengan atau tanpa tekanan dan dengan atau
                            tanpa logam penambah dan menghasilkan sambungan yang kontinu.

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
                        <h3><strong>KELAS X TPL</strong></h3>
                        <ul>
                            <li>Gambar Teknik Mesin</li>
                            <li>Pekerjaan Dasar Teknik Mesin</li>
                            <li>Dasar Perencanaan Teknik Mesin</li>
                        </ul>
                    </div>
                </div>

                <div class="mt-4 col-lg-3 col-md-6 mt-md-0">
                    <div class="box featured" data-aos="fade-up" data-aos-delay="100">
                        <h3><strong>KELAS XI TPL</strong></h3>
                        <ul>
                            <li>Teknik Pengelasan Busur Manual (SMAW)</li>
                            <li>Teknik Pengelasan Oksi-Asetelin (OAW)</li>
                            <li>Teknik Pengelasan Gas Metal (GMAW)</li>
                            <li>Produk Kreatif dan Kewirausahaan (PKWU)</li>
                        </ul>
                    </div>
                </div>

                <div class="mt-4 col-lg-3 col-md-6 mt-lg-0">
                    <div class="box" data-aos="fade-up" data-aos-delay="200">
                        <h3><strong>KELAS XII TPL</strong></h3>
                        <ul>
                            <li>Teknik Pengelasan Busur Manual (SMAW)</li>
                            <li>Teknik Pengelasan Oksi-Asetelin (OAW)</li>
                            <li>Teknik Pengelasan Gas Metal (GMAW)</li>
                            <li>Produk Kreatif dan Kewirausahaan (PKWU)</li>
                        </ul>

                    </div>
                </div>
                <div class="mt-4 col-lg-3 col-md-6 mt-lg-0">
                    <div class="box" data-aos="fade-up" data-aos-delay="300">
                        <span class="advanced">Fasilitas</span>
                        <h3><strong>Fasilitas </strong></h3>
                        <ul>
                            <li>Gedung Bengkel Las</li>
                            <li>Mesin Las OAW</li>
                            <li>Mesin Las SMAW</li>
                            <li>Mesin Las MIG,</li>
                            <li>Mesin Las TIG</li>
                            <li>Mesin Potong otomatis</li>
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
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up">

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="assets/img/tpl/1.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <p>Kegiatan Praktik</p>
                            <div class="portfolio-links">
                                <a href="assets/img/tpl/1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"
                                    title="Kegiatan Praktik"><i class="bx bx-plus"></i></a>
                                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="assets/img/tpl/2.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <p>Kegiatan Praktik</p>
                            <div class="portfolio-links">
                                <a href="assets/img/tpl/2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"
                                    title="Kegiatan Praktik"><i class="bx bx-plus"></i></a>
                                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="assets/img/tpl/3.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <p>Kegiatan Praktik</p>
                            <div class="portfolio-links">
                                <a href="assets/img/tpl/3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"
                                    title="Kegiatan Praktik"><i class="bx bx-plus"></i></a>
                                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="assets/img/tpl/4.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <p>Kegiatan Praktik</p>
                            <div class="portfolio-links">
                                <a href="assets/img/tpl/4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"
                                    title="Kegiatan Praktik"><i class="bx bx-plus"></i></a>
                                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="assets/img/tpl/5.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <p>Kegiatan Praktik</p>
                            <div class="portfolio-links">
                                <a href="assets/img/tpl/5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"
                                    title="Kegiatan Praktik"><i class="bx bx-plus"></i></a>
                                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="assets/img/tpl/6.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <p>Kegiatan Praktik</p>
                            <div class="portfolio-links">
                                <a href="assets/img/tpl/6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"
                                    title="Kegiatan Praktik"><i class="bx bx-plus"></i></a>
                                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Portfolio Section -->
@endsection
