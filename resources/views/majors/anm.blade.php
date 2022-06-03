@extends('layout.guest')

@section('container')
        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li>Animasi</li>
                </ol>
            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="row justify-content-end">
                    <div class="row">

                        <div class="col-lg-6 video-box align-self-baseline position-relative">
                            <img src="assets/img/animasi/yt.jpg" class="img-fluid" alt="">
                            <a href="https://www.youtube.com/watch?v=7QmJMo-d8TU" class="mb-4 glightbox play-btn"></a>
                        </div>

                        <div class="pt-3 col-lg-6 pt-lg-0 content">
                            <h3>Animasi </h3>
                            <ul>
                                <li> <strong>Bidang Keahlian:</strong> Seni dan Industri Kreatif </li>
                                <li> <strong>Program Keahlian:</strong> Seni Rupa </li>
                                <li> <strong>Kompetensi Keahlian:</strong> Animasi </li>
                                <li> <strong>Berdiri pada tahun: </strong>2009 - Sekarang (2021) </li>
                            </ul>
                            <p>
                                Kompetensi Keahlian Animasi atau Jurusan Animasi di SMK Negeri 1 Ciomas Bogor, berdiri tahun
                                2009 tepat 1 tahun setelah SMK Negeri 1 Ciomas didirikan. Jurusan Animasi berlokasi di Jl.
                                Raya Lalaladon, Ds. Laladon, Kec. Ciomas Kab. Bogor. Jurusan Animasi sampai saat ini telah
                                berusia 11 tahun di tahun 2020 ini dan telah meluluskan 10 angkatan sejak berdirinya.
                            </p>
                        </div>

                    </div>

                </div>
        </section><!-- End About Section -->


        <!-- ======= Features Section ======= -->
        <section id="features" class="features">
            <div class="container">
                <div class="row">
                    <div class="mt-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="card" style="background-image: url(assets/img/animasi/profil.jpg);">
                            <div class="card-body">
                                <h5 class="card-title"><a href="">Penghargaan</a></h5>
                                <ol>
                                    <li>Juara 3 LKS Kab. Bogor 2016 </li>
                                    <li>Juara 1 & 3 LKS Nasional 2017 </li>
                                    <li>Best Film Animasi tingkat Nasional di Semarang 2017</li>
                                    <li>4 Besar Lomba Animasi 3D Tingkat Asean Oleh SEAMEO 2018</li>
                                    <li>Perwakilan Guru Animasi Ke China 2019</li>
                                    <li>Beasiswa Alumni animasi ke Korea Selatan</li>
                                    <li>Perwakilan Siswa ke Jepang 2020</li>
                                    <li>Juara 1 Nasional Kemdikbud, Juara 2 Nasional BKN, Juara 2 Komik 2020</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="card" style="background-image: url(assets/img/animasi/profil.jpg);">
                            <div class="card-body">
                                <h5 class="card-title"><a href="">Kerjasama Industri</a></h5>
                                <ol>
                                    <li>MPIC Animation Studio/MD Animation</li>
                                    <li>Kulstori</li>
                                    <li>Darul Arkam Studio</li>
                                    <li>Kamons Studio</li>
                                    <li>LIPI Cibinong</li>
                                    <li>E&E</li>
                                    <li>NusaEdu Bandung</li>
                                    <li>SSR</li>
                                </ol>
                                <p class="card-text">&nbsp;</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Features Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-praktik">KEGIATAN PRAKTIK </li>
                            <li data-filter=".filter-industri">KERJASAMA INDUSTRI </li>
                            <li data-filter=".filter-prestasi">PRESTASI</li>
                            <li data-filter=".filter-tendik">TENAGA PENDIDIK</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-praktik">
                        <div class="portfolio-wrap">
                            <img src="assets/img/animasi/2.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <p>Kegiatan Praktik Animasi</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/animasi/2.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Kegiatan Praktik Animasi"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-praktik">
                        <div class="portfolio-wrap">
                            <img src="assets/img/animasi/1.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <p>Kegiatan Praktik Animasi</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/animasi/1.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Kegiatan Praktik Animasi"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-prestasi">
                        <div class="portfolio-wrap">
                            <img src="assets/img/animasi/3.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <p>Prestasi Animasi</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/animasi/3.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Prestasi Animasi"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6 portfolio-item filter-industri">
                        <div class="portfolio-wrap">
                            <img src="assets/img/animasi/4.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <p>Kunjungan Industri Animasi</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/animasi/4.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Kunjungan Industri"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-industri">
                        <div class="portfolio-wrap">
                            <img src="assets/img/animasi/5.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <p>Kunjungan Industri Animasi</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/animasi/5.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Kunjungan Industri"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-industri">
                        <div class="portfolio-wrap">
                            <img src="assets/img/animasi/6.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <p>Kerja Sama Industri</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/animasi/6.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Kerja Sama Industri"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-praktik">
                        <div class="portfolio-wrap">
                            <img src="assets/img/animasi/7.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <p>Kegiatan Belajar</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/animasi/7.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Kegiatan Belajar"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-industri">
                        <div class="portfolio-wrap">
                            <img src="assets/img/animasi/8.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <p>Kunjungan Industri Animasi</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/animasi/8.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Kunjungan Industri"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-prestasi">
                        <div class="portfolio-wrap">
                            <img src="assets/img/animasi/9.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <p>Prestasi Animasi</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/animasi/9.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Prestasi Animasi"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-prestasi">
                        <div class="portfolio-wrap">
                            <img src="assets/img/animasi/10.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <p>Prestasi Animasi</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/animasi/10.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Prestasi Animasi"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-industri">
                        <div class="portfolio-wrap">
                            <img src="assets/img/animasi/11.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <p>Kunjungan Industri Animasi</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/animasi/11.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Kunjungan Industri"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-praktik">
                        <div class="portfolio-wrap">
                            <img src="assets/img/animasi/12.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <p>Kegiatan Belajar</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/animasi/12.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Kegiatan Belajar"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-industri">
                        <div class="portfolio-wrap">
                            <img src="assets/img/animasi/13.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <p>Kerja Sama Industri</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/animasi/13.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Kerja Sama Industri"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-industri">
                        <div class="portfolio-wrap">
                            <img src="assets/img/animasi/15.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <p>Kunjungan Industri Animasi</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/animasi/15.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Kunjungan Industri"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6 portfolio-item filter-prestasi">
                        <div class="portfolio-wrap">
                            <img src="assets/img/animasi/16.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <p>Prestasi Animasi</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/animasi/16.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Prestasi Animasi"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6 portfolio-item filter-prestasi">
                        <div class="portfolio-wrap">
                            <img src="assets/img/animasi/20.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <p>Prestasi Animasi</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/animasi/20.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Prestasi Animasi"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-industri">
                        <div class="portfolio-wrap">
                            <img src="assets/img/animasi/21.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <p>Kunjungan Industri Animasi</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/animasi/21.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Kunjungan Industri"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>







                </div>

            </div>
        </section><!-- End Portfolio Section -->
@endsection
