<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

        <div class="logo">
            <h1 class="text-light"><a href="{{ route('index') }}"><img src="assets/img/logo.png" width="47" height="50"
                        alt="" /> SMKN 1 Ciomas</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="{{ route('index') }}"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="{{ request()->routeIs('index') ? "active" : "" }}" href="{{ route('index') }}">Beranda</a></li>
                <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ route('guest.history') }}" class="{{ request()->routeIs('guest.history') ? "active" : "" }}">Sejarah Singkat</a></li>
                        <li><a href="{{ route('guest.vision-mission') }}" class="{{ request()->routeIs('guest.vision-mission') ? "active" : "" }}">Visi dan Misi</a></li>
                        <li><a href="{{ route('guest.leadership') }}" class="{{ request()->routeIs('guest.leadership') ? "active" : "" }}">Profil Pimpinan</a></li>
                        <li><a href="{{ route('guest.teacher') }}" class="{{ request()->routeIs('guest.teacher') ? "active" : "" }}">Guru</a></li>
                        <li><a href="{{ route('guest.administration') }}" class="{{ request()->routeIs('guest.administration') ? "active" : "" }}">Tata Usaha</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Program Keahlian</span> <i
                            class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ route('guest.rpl') }}" class="{{ request()->routeIs('guest.rpl') ? "active" : "" }}">Rekayasa Perangkat Lunak</a></li>
                        <li><a href="{{ route('guest.anm') }}" class="{{ request()->routeIs('guest.anm') ? "active" : "" }}">Animasi</a></li>
                        <li><a href="{{ route('guest.tkr') }}" class="{{ request()->routeIs('guest.tkr') ? "active" : "" }}">Teknik Kendaraan Ringan</a></li>
                        <li><a href="{{ route('guest.tpl') }}" class="{{ request()->routeIs('guest.tpl') ? "active" : "" }}">Teknik Pengelasan</a></li>
                        <li><a href="{{ route('guest.pspt') }}" class="{{ request()->routeIs('guest.pspt') ? "active" : "" }}">Produksi Dan Siaran Program Televisi</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Kesiswaan</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ route('guest.osis') }}" class="{{ request()->routeIs('guest.osis') ? "active" : "" }}">Osis</a></li>
                        <li><a href="{{ route('guest.extracurricular') }}" class="{{ request()->routeIs('guest.extracurricular') ? "active" : "" }}">Ekstrakulikuler</a></li>
                        <li><a href="{{ route('guest.teaching-factory') }}" class="{{ request()->routeIs('guest.teaching-factory ? "active" : ""') }}">Teaching Factory</a></li>
                        <li><a href="{{ route('guest.industry') }}" class="{{ request()->routeIs('guest.industry') ? "active" : "" }}">SMK Berbasis Industri</a></li>
                        <li><a href="{{ route('guest.alumni') }}" class="{{ request()->routeIs('guest.alumni') ? "active" : "" }}">Forum Alumni</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('guest.job-exchange') }}" class="{{ request()->routeIs('guest.job-exchange') ? "active" : "" }}">Bursa Kerja</a></li>
                <li><a href="{{ route('guest.contact') }}" class="{{ request()->routeIs('guest.contact') ? "active" : "" }}">Kontak</a></li>

                <li><a class="getstarted" href="https://monster.smkn1ciomas.sch.id/" target="blank">E-learning</a>
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header>
<!-- End Header -->
