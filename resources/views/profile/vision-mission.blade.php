@extends('layout.guest')

@section('container')
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="{{ route('index') }}">Home</a></li>
                <li>Visi Misi</li>
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
                        <a href="https://www.youtube.com/watch?v=qbmZ6LhIIdg" class="mb-4 glightbox play-btn"></a>
                    </div>

                    <div class="pt-3 col-lg-6 pt-lg-0 content">
                        <h3>VISI DAN MISI</h3>
                        <p> <b> VISI </b></p>
                        <p align="justify"> Menjadi sekolah unggulan yang menghasilkan tamatan berkualitas serta melahirkan
                            tenaga kerja yang kompeten dan mandiri melalui IPTEK dan IMTAQ</p>
                        <p> <b> MISI </b></p>
                        <ol>
                            <li>Melaksanakan layanan prima terhadap warga sekolah</li>
                            <li>Melaksanakan KBM dan kegiatan ektrakurikuler untuk mengembangkan minat dan bakat siswa dalam
                                meraih prestasi</li>
                            <li>Meningkatkan mutu sumber daya manusia penerpan IPTEK dan IMTAQ</li>
                            <li>Untuk menghasilkan tamatan yang kompeten dan mandiri dalam rangka melanjutkan ke Perguruan
                                Tinggi dan memasuki dunia kerja</li>
                            <li>Meningkatkan kualitas taman yang sesuai dengan standar kompetensi nasional (SKN) dalam
                                menghadapi Era Globalisasi masyarakat ekonomi ASEAN (MEA)</li>
                        </ol>
                    </div>

                </div>

            </div>
    </section><!-- End About Section -->
@endsection
