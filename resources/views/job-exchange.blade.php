@extends('layout.guest')

@section('container')
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="breadcrumb-hero">
            <div class="container">
                <div class="breadcrumb-hero">
                    <h2>Bursa Kerja</h2>
                    <p>Bursa Kerja adalah sebuah lembaga yang dibentuk di SMKN 1 Ciomas, sebagai unit pelaksana yang
                        memberikan pelayanan dan informasi lowongan kerja, pelaksana pemasaran, penyaluran dan penempatan
                        tenaga kerja, merupakan mitra Dinas Tenaga Kerja dan Transmigrasi.</p>
                </div>
            </div>
        </div>
        <div class="container">
            <ol>
                <li><a href="{{ route('index') }}">Home</a></li>
                <li>Bursa kerja</li>
            </ol>
        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services ">
        <div class="container">

            <div class="row">
                <div class="col-md-6">
                    <div class="icon-box" data-aos="fade-up">
                        <div class="icon"><i class="bi bi-briefcase" style="color: #ff689b;"></i></div>
                        <h4 class="title"><a href="">Lowongan Kerja</a></h4>
                        <p class="description">Memberikan informasi tentang lowongan kerja terkini</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="icon-box" data-aos="fade-up">
                        <div class="icon"><i class="bi bi-book" style="color: #e9bf06;"></i></div>
                        <h4 class="title"><a href="">Contoh CV</a></h4>
                        <p class="description">Memberikan informasi tentang contoh-contoh Curiculum Vitae (CV) yang
                            berguna untuk melamar pekerjaan</p>
                    </div>
                </div>

                <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-card-checklist" style="color: #3fcdc7;"></i></div>
                        <h4 class="title"><a href="">Contoh Portofolio</a></h4>
                        <p class="description">Memberikan informasi tentang contoh-contoh portofolio yang berguna untuk
                            melamar pekerjaan</p>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Services Section -->
@endsection
