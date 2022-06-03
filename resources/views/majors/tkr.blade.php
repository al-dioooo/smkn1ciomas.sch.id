@extends('layout.guest')

@section('container')
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="{{ route('index') }}">Home</a></li>
                <li>TKR</li>
            </ol>
        </div>
    </section><!-- End Breadcrumbs -->


    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Teknik Kendaraan Ringan (TKR)</h2>
                <p>Industri otomotif saat ini berkembang dengan begitu pesatnya. Produsen berlomba untuk mengikat hati
                    konsumen dengan produk unggulannya. Situasi seperti itu bisa terlihat saat kita melihat berbagai pameran
                    otomotif yang sering diselenggarakan dan terlihat begitu antusiasme masyarakat terhadap beragam produk2
                    baru yang diluncurkan. Atmosfer ini sebenarnya menunjukkan bahwa industri otomotif menjadi salah satu
                    peluang yang menjanjikan, artinya, dalam beberapa tahun ke depan industri ini akan banyak menyerap
                    tenaga kerja yang handal dan terampil untuk bekerja dalam sektor ini. Kesempatan yang luas akan industri
                    ini tentu saja dimiliki oleh anak- anak SMKN 1 Ciomas yg relevan dengan jurusan ini. Jurusan yang
                    relevan dengan bidang ini adalah jurusan Teknik Kendaraan Ringan Otomotif (TKRO) berdiri tahun 2008.</p>
                <p>&nbsp;</p>
                <p>Lulusan Teknik Kendaraan Ringan SMK Negeri 1 Ciomas akan dibekali dengan ilmu pengetahuan dan
                    keterampilan dalam perawatan dan perbaikan otomotif, Perawatan dan perbaikan system pemindah tenaga
                    otomotif, Perawatan dan perbaikan chasis dan suspense otomotif, Perawatan dan perbaikan system
                    kelistrikan otomotif serta dibekali kemampuan dalam berwirausaha sesuai dengan perkembangan kebutuhan
                    masyarakat, dunia usaha dan industri.</p>
            </div>

            <div class="row">
                <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                    <div class="card" style="background-image: url(assets/img/tkr/1.jpg);">
                        <div class="card-body">
                            <h5 class="card-title"><a href="">Visi</a></h5>
                            <p class="card-text">Menghasilkan lulusan yang memiliki kompetensi unggul di bidang Teknik
                                Kendaraan Ringan Otomotif, Mandiri, Kreatif, Kompetitif, Disiplin dan Berakhlak Mulia yang
                                sesuai dengan tuntutan dunia usaha dan dunia industri</p>
                        </div>
                    </div>
                </div>
                <div class="mt-4 col-md-6 d-flex align-items-stretch mt-md-0" data-aos="fade-up">
                    <div class="card" style="background-image: url(assets/img/tkr/2.jpg);">
                        <div class="card-body">
                            <h5 class="card-title"><a href="">Tujuan</a></h5>
                            <ul>
                                <li>Menyiapkan tenaga kerja tingkat menengah di bidang Teknik Kendaraan Ringan Otomotif yang
                                    kreatif dan inovatif</li>
                                <li>Menyiapkan tenaga kerja tingkat menengah yang terdepan dan teruji di dunia usaha dan
                                    industri</li>
                                <li>Membekali peserta didik dengan keterampilan, pengetahuan dan sikap berdasarkan budaya
                                    dan karakter bangsa serta berwawasan dan peduli lingkungan agar mampu bersaing di dunia
                                    kerja</li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="mt-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="card" style="background-image: url(assets/img/tkr/3.jpeg);">
                        <div class="card-body">
                            <h5 class="card-title"><a href="">Perusahaan Pendukung</a></h5>
                            <ol>
                                <li> PT.SETIAJAYA MOBILINDO TOYOTA PAJAJARAN BOGOR
                                </li>
                                <li>PT. Mazda Motor Indonesia </li>
                                <li>PT ASTRA Daihatsu Motor (ADM) </li>
                                <li>PT SGMW Motor Indonesia (Wuling Motors) </li>
                                <li>PT Astra Honda Motor (AHM) </li>
                                <li>PT Suzuki Indomobil Motor </li>
                                <li>PT Astra International Tbk. </li>
                                <li>CV Milala </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="mt-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="card" style="background-image: url(assets/img/tkr/4.jpg);">
                        <div class="card-body">
                            <h5 class="card-title"><a href="">Guru Produktif </a></h5>
                            <ol>
                                <li>Bachtiar, S.Pd : Kepala Program Teknik Kendaraan Ringan</li>
                                <li>Kartanto, S.Pd</li>
                                <li>Hajarol Harahap, S.Pd</li>
                                <li>Salikin, S.Pd</li>
                                <li>Sofian Ashudianto, A.Md</li>
                                <li>Restu Gustana, S.T, S.Pd</li>
                                <li>Wagino, A.Md </li>
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
                        <img src="assets/img/tkr/7.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <p>Kegiatan Praktik TKR</p>
                            <div class="portfolio-links">
                                <a href="assets/img/tkr/7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"
                                    title="Kegiatan Praktik TKR"><i class="bx bx-plus"></i></a>
                                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="assets/img/tkr/3.jpeg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <p>Kegiatan Praktik TKR</p>
                            <div class="portfolio-links">
                                <a href="assets/img/tkr/3.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox"
                                    title="Kegiatan Praktik TKR"><i class="bx bx-plus"></i></a>
                                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="assets/img/tkr/5.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <p>Kegiatan Praktik TKR</p>
                            <div class="portfolio-links">
                                <a href="assets/img/tkr/5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"
                                    title="Kegiatan Praktik TKR"><i class="bx bx-plus"></i></a>
                                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="assets/img/tkr/8.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <p>Kerjasama Industri</p>
                            <div class="portfolio-links">
                                <a href="assets/img/tkr/8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"
                                    title="Kerjasama Industri"><i class="bx bx-plus"></i></a>
                                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="assets/img/tkr/9.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <p>Kerjasama Industri</p>
                            <div class="portfolio-links">
                                <a href="assets/img/tkr/9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"
                                    title="Kerjasama Industri "><i class="bx bx-plus"></i></a>
                                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="assets/img/tkr/10.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <p>Kerjasama Industri</p>
                            <div class="portfolio-links">
                                <a href="assets/img/tkr/10.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"
                                    title="Kerjasama Industri"><i class="bx bx-plus"></i></a>
                                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-prestasi">
                    <div class="portfolio-wrap">
                        <img src="assets/img/tkr/juara.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <p>Juara 2 Lomba Kompetensi Siswa (LKS) SMK Se Kab. Bogor tahun 2016</p>
                            <div class="portfolio-links">
                                <a href="assets/img/tkr/juara.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox"
                                    title="Juara 2 Lomba Kompetensi Siswa (LKS) SMK Se Kab. Bogor tahun 2016"><i
                                        class="bx bx-plus"></i></a>
                                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="assets/img/tkr/guru.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <p>Tenaga Pendidik</p>
                            <div class="portfolio-links">
                                <a href="assets/img/tkr/guru.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"
                                    title="Tenaga Pendidik"><i class="bx bx-plus"></i></a>
                                <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Portfolio Section -->
@endsection
