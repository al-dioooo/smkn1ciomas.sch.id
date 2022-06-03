@extends('layout.guest')

@section('container')
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="{{ route('index') }}">Home</a></li>
                <li>OSIS</li>
            </ol>
        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="row justify-content-end">
                <div class="row">

                    <div class="col-lg-6 video-box align-self-baseline position-relative">
                        <img src="assets/img/osis/profil.jpg" class="img-fluid" alt="">
                        <a href="https://www.youtube.com/watch?v=sXYwxzxfFbw" class="mb-4 glightbox play-btn"></a>
                    </div>

                    <div class="pt-3 col-lg-6 pt-lg-0 content">
                        <h3>OSIS (Organisasi Siswa Intra Sekolah) </h3>
                        <p align="justify">
                            OSIS (Organisasi Siswa Intra Sekolah) merupakan satu-satunya wadah organisasi di sekolah untuk
                            mencapai tujuan pembinaan dan pengembangan siswa. OSIS bersifat Intra Sekolah yang artinya tidak
                            ada hubungan organisatoris dengan OSIS sekolah lain dan tidak menjadi bagian dari organisasi
                            diluar sekolah.
                        </p>
                        <p><strong>Visi</strong></p>
                        <p align="justify">Menjadikan OSIS sebagai wadah bagi siswa/I SMKN 1 Ciomas untuk mengembangkan
                            segala potensi yang ada sehingga terbentuk siswa/I yang cerdas, kreatif, berprestasi,
                            bertanggung jawab, dan berakhlak mulia dengan berlandaskan iman dan taqwa</p>
                        <p><strong>Misi</strong></p>
                        <ol align="justify">
                            <li>Membentuk karakter pengurus OSIS yang cerdas dan solid </li>
                            <li>Mengoptimalkan kreatifitas siswa/I melalui ekstrakulikuler dan kegiatan keagamaan bagi
                                siswa/I </li>
                            <li>Merealisasikan atau mengaktifkan program kerja yang sebelumnya telah ada namun belum
                                terjalan dengan baik </li>
                            <li>Memaksimalkan peran siswa/I dalam menjaga kebersihan sekolah </li>
                        </ol>
                    </div>

                </div>

            </div>
    </section><!-- End About Section -->


    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-app">OSIS 2020/2021 </li>
                        <li data-filter=".filter-card">KEGIATAN OSIS</li>

                    </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up">

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="assets/img/osis/profil.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <p>Pengurus Osis/MPK 2020/2021</p>
                            <div class="portfolio-links">
                                <a href="assets/img/osis/profil.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="Pengurus Osis/MPK 2020/2021"><i
                                        class="bx bx-plus"></i></a>
                                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="assets/img/osis/1.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <p>Bela Negara 2019</p>
                            <div class="portfolio-links">
                                <a href="assets/img/osis/1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"
                                    title="Bela Negara 2019"><i class="bx bx-plus"></i></a>
                                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="assets/img/osis/2.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <p>Remaja Cinta Budaya 2017</p>
                            <div class="portfolio-links">
                                <a href="assets/img/osis/2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"
                                    title="Remaja Cinta Budaya 2017"><i class="bx bx-plus"></i></a>
                                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="assets/img/osis/3.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <p>Skanic Games 2018</p>
                            <div class="portfolio-links">
                                <a href="assets/img/osis/3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"
                                    title="Skanic Games 2018"><i class="bx bx-plus"></i></a>
                                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="assets/img/osis/4.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <p>Spestanica Bukber</p>
                            <div class="portfolio-links">
                                <a href="assets/img/osis/4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"
                                    title="Spestanica Bukber"><i class="bx bx-plus"></i></a>
                                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="assets/img/osis/5.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <p>Spestanica Classmeet</p>
                            <div class="portfolio-links">
                                <a href="assets/img/osis/5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"
                                    title="Spestanica Classmeet"><i class="bx bx-plus"></i></a>
                                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Portfolio Section -->
@endsection
