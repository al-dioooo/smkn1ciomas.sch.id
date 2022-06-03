@extends('layout.guest')

@section('container')
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="{{ route('index') }}">Home</a></li>
                <li>EKSKUL</li>
            </ol>
        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="row justify-content-end">
                <div class="row">

                    <div class="col-lg-6 video-box align-self-baseline position-relative">
                        <img src="assets/img/about.jpg" class="img-fluid" alt="">
                        <a href="https://youtu.be/qbmZ6LhIIdg" class="mb-4 glightbox play-btn"></a>
                    </div>

                    <div class="pt-3 col-lg-6 pt-lg-0 content">
                        <h3>Ekstrakurikuler di SMKN 1 Ciomas</h3>
                        <ol align="justify">
                            <li><a href="https://www.smkn1ciomas.sch.id/paskibra.html" target="blank"
                                    style="text-decoration: none">Paskibra</a></li>
                            <li><a href="https://www.smkn1ciomas.sch.id/rohis.html" target="blank"
                                    style="text-decoration: none">Rohis</a></li>
                            <li><a href="https://www.smkn1ciomas.sch.id/PMR.html" target="blank"
                                    style="text-decoration: none">PMR (Palang Merah Remaja)</a></li>
                            <li><a href="https://www.smkn1ciomas.sch.id/pramuka.html" target="blank"
                                    style="text-decoration: none">Pramuka</a></li>
                            <li><a href="https://www.smkn1ciomas.sch.id/basket.html" target="blank"
                                    style="text-decoration: none">Basket</a></li>
                            <li><a href="https://www.smkn1ciomas.sch.id/handball.html" target="blank"
                                    style="text-decoration: none">handball</a></li>
                            <li><a href="https://www.smkn1ciomas.sch.id/japaneseclub.html" target="blank"
                                    style="text-decoration: none">Japanese Club</a></li>
                            <li><a href="https://www.smkn1ciomas.sch.id/karate.html" target="blank"
                                    style="text-decoration: none">Karate</a></li>
                            <li><a href="https://www.smkn1ciomas.sch.id/silat.html" target="blank"
                                    style="text-decoration: none">Pencak Silat</a></li>
                            <li><a href="https://www.smkn1ciomas.sch.id/voly.html" target="blank"
                                    style="text-decoration: none">Voly</a></li>
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
                        <li data-filter=".filter-app">Ekstrakulikuler </li>


                    </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up">

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="assets/img/ekskul/pramuka1.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <p>Pramuka</p>
                            <div class="portfolio-links">
                                <a href="assets/img/ekskul/pramuka1.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="Pramuka"><i class="bx bx-plus"></i></a>
                                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="assets/img/ekskul/pramuka2.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <p>Pramuka</p>
                            <div class="portfolio-links">
                                <a href="assets/img/ekskul/pramuka2.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="Pramuka"><i class="bx bx-plus"></i></a>
                                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="assets/img/ekskul/pramuka3.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <p>Pramuka</p>
                            <div class="portfolio-links">
                                <a href="assets/img/ekskul/pramuka3.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="Pramuka"><i class="bx bx-plus"></i></a>
                                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="assets/img/ekskul/karate1.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <p>Karate</p>
                            <div class="portfolio-links">
                                <a href="assets/img/ekskul/karate1.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="Karate"><i class="bx bx-plus"></i></a>
                                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="assets/img/ekskul/rohis1.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <p>Rohis</p>
                            <div class="portfolio-links">
                                <a href="assets/img/ekskul/rohis1.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="Rohis"><i class="bx bx-plus"></i></a>
                                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="assets/img/ekskul/rohis2.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <p>Rohis</p>
                            <div class="portfolio-links">
                                <a href="assets/img/ekskul/rohis2.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="Rohis"><i class="bx bx-plus"></i></a>
                                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="assets/img/ekskul/silat.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <p>Pencak Silat</p>
                            <div class="portfolio-links">
                                <a href="assets/img/ekskul/silat.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="Pencak Silat"><i class="bx bx-plus"></i></a>
                                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="assets/img/ekskul/japanese1.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <p>Japanese Club</p>
                            <div class="portfolio-links">
                                <a href="assets/img/ekskul/japanese1.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="Japanese Club"><i class="bx bx-plus"></i></a>
                                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="assets/img/ekskul/japanese2.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <p>Japanese Club</p>
                            <div class="portfolio-links">
                                <a href="assets/img/ekskul/japanese2.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="Japanese Club"><i class="bx bx-plus"></i></a>
                                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Portfolio Section -->
@endsection
