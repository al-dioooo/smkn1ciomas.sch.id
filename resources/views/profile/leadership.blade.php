@extends('layout.guest')

@section('container')
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="breadcrumb-hero">
            <div class="container">
                <div class="breadcrumb-hero">
                    <h2>Pimpinan SMKN 1 Ciomas</h2>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="container">
            <ol>
                <li><a href="{{ route('index') }}">Home</a></li>
                <li>Pimpinan</li>
            </ol>
        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
        <div class="container">

            <div class="row">

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="100">
                        <div class="member-img">
                            <img src="assets/img/pimpinan/Kepsek.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Mahdi, M.Pd</h4>
                            <span>Kepala Sekolah</span>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="100">
                        <div class="member-img">
                            <img src="assets/img/pimpinan/bachtiar.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Bachtiar, S.Pd</h4>
                            <span>Waka Kurikulum</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="100">
                        <div class="member-img">
                            <img src="assets/img/guru/kurnadi.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Drs. Kurnadi</h4>
                            <span>Waka Sapras/span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="100">
                        <div class="member-img">
                            <img src="assets/img/guru/dono.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Drs. Dono Wasito</h4>
                            <span>Waka Kesiswaan</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="100">
                        <div class="member-img">
                            <img src="assets/img/guru/janu.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Januar Ashari, S.Pd</h4>
                            <span>Waka Hubin</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="100">
                        <div class="member-img">
                            <img src="assets/img/tatausaha/rinimastiti.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Rini Mastiti, A.Md</h4>
                            <span>Kepala Tata Usaha</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="100">
                        <div class="member-img">
                            <img src="assets/img/guru/Ajid.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Ajid, S.Ds</h4>
                            <span>Kaprog Animasi</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="100">
                        <div class="member-img">
                            <img src="assets/img/guru/gatot.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Gatot Imam Santoso, S.Kom</h4>
                            <span>Kaprog RPL</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="100">
                        <div class="member-img">
                            <img src="assets/img/guru/salikin.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Salikin, S.Pd</h4>
                            <span>Kaprog TPL</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="100">
                        <div class="member-img">
                            <img src="assets/img/guru/restu.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Restu Gustana, S.T, S.Pd</h4>
                            <span>Kaprog TKR</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="100">
                        <div class="member-img">
                            <img src="assets/img/guru/cynthia.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Cynthia Gema Lestari, S.I.Kom</h4>
                            <span>Kaprog PSPT</span>
                        </div>
                    </div>
                </div>




            </div>

        </div>
    </section><!-- End Team Section -->
@endsection
