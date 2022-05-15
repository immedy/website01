@extends('layout.website')
@section('LayoutWebsite')
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!--Carousel Start -->
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="website/img/dara1.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h5 class="text-white text-uppercase mb-3 animated slideInDown">Creative & Innovative</h5>
                        <h1 class="display-1 text-white mb-md-4 animated zoomIn">Creative & Innovative Digital Solution
                        </h1>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="website/img/carousel-2.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h5 class="text-white text-uppercase mb-3 animated slideInDown">Creative & Innovative</h5>
                        <h1 class="display-1 text-white mb-md-4 animated zoomIn">Creative & Innovative Digital Solution
                        </h1>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Carousel End -->

    <!-- Facts Start -->
    <div class="container-fluid facts py-9 pt-lg-0">
        <div class="container py-5 pt-lg-10">
            <div class="row gx-3-mid">
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4"
                        style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-user-md text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h6 class="text-white mb-0">Poliklinik</h6>
                            <h4 class="text-white mb-0">Senin - Kamis</h4>
                            <h4 class="text-white mb-0">08.00 - 14.00</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                    <div class="bg-light shadow d-flex align-items-center justify-content-center p-4"
                        style="height: 150px;">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded mb-2"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-medkit text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-primary mb-0">Instalasi Gawat Darurat</h5>
                            <h1 class="mb-0">24 JAM</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4"
                        style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-stethoscope text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h6 class="text-white mb-0">Poliklinik</h6>
                            <h4 class="text-white mb-0">Jumat</h4>
                            <h4 class="text-white mb-0">08.00 - 10.30</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts Start -->

    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">Tentang Kami </h5>
                        <h1 class="mb-0">Rumah Sakit Umum Daerah Dayaku Raja Kota Bangun</h1>
                    </div>
                    <p class="mb-4">Rumah Sakit Umum Daerah (RSUD) Dayaku Raja Kabupaten Kutai Kartanegara
                        merupakan Rumah Sakit milik Pemerintah Kabupaten Kutai Kartanegara Provinsi Kalimantan Timur sesuai
                        Peraturan Bupati Nomor 27 tentang Organisasi dan Tata Kerja Unit Pelaksana Teknis (UPT) RSUD Dayaku
                        raja Kota Bangun Tahun 2013.</p>
                    <p class="mb-4">
                        RSUD Dayaku Raja dibangun pada tahun 2013 dan diresmikan oleh Bupati Kutai Kartanegara pada tanggal
                        13 Maret 2013 dengan jumlah pegawai sebanyak 210 orang, dan sekarang menjadi Satuan Kerja Perangkat
                        Daerah (SKPD) sendiri mengacu berdasarkan Peraturan Daerah Kutai Kartanegara Nomor 10 Tahun 2014
                        tentang Pembentukan Struktur dan Organisasi Tata Kerja Rumah sakit Umum Daerah Dayaku Raja Kota
                        Bangun.</p>

                    <p class="mb-4">Pada tahun 2016, jumlah pegawai di lingkungan RSUD Dayaku Raja Kota Bangun
                        bertambah menjadi 394
                        pegawai.</p>

                    <p class="mb-4">Rumah sakit yang terletak di jalan poros Kota Bangun-Tenggarong ini merupakan
                        rumah sakit yang
                        diproyeksikan menjadi rumah sakit kelas C dan hingga saat ini RSUD Dayaku Raja masih mengusung
                        konsep Rumah Sakit tanpa tarif dan kelas, sama seperti konsep awal ketika memulai operasinya.</p>

                    <p class="mb-4">Dengan letaknya yang berada didaerah hulu mahakam, RSUD Dayaku Raja menjadi
                        rumah sakit rujukan bagi
                        6 Kecamatan yang ada dihulu mahakam Kabupaten Kutai Katanegara.</p>

                    <p class="mb-4">Adanya rumah sakit ini diharapkan dapat memberikan dampak positif berupa
                        pemerataan layanan
                        kesehatan bagi masyarakat yang ada didaerah hulu mahakam.</p>

                    <p class="mb-4">Sejak Agustus 2016 melalui perjanjian kerjasama, RSUD Dayaku Raja bekerjasama
                        dengan BPJS Kesehatan.
                    </p>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s"
                            src="website/img/about.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Features Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Kenapa Harus Ke Dayaku Raja</h5>
                <h1 class="mb-0">Sesuai Motto Rumah Sakit MELAYANI SEPENUH DAYAKU</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
                                style="width: 60px; height: 60px;">
                                <i class="fa fa-cubes text-white"></i>
                            </div>
                            <h4>Tempat Strategis</h4>
                            <p class="mb-0">Menjadi rumah sakit rujukan bagi 7 Kecamatan yang ada dihulu mahakam
                                Kabupaten Kutai Kartanegara</p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
                                style="width: 60px; height: 60px;">
                                <i class="fa fa-award text-white"></i>
                            </div>
                            <h4>Jarak Tempuh</h4>
                            <p class="mb-0">Berjarak ± 2 Jam Ke Ibu Kota Kabupaten </p>
                            <p class="mb-0">Berjarak ± 3 Jam Ke Ibu Kota Propinsi </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s"
                            src="website/img/feature.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
                                style="width: 60px; height: 60px;">
                                <i class="fa fa-users-cog text-white"></i>
                            </div>
                            <h4>Pegawai Profesional</h4>
                            <p class="mb-0">Mempunyai Tenaga Kesehatan Yang profesional di setiap bidang yang ada
                                di rumah sakit </p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
                                style="width: 60px; height: 60px;">
                                <i class="fa fa-phone-alt text-white"></i>
                            </div>
                            <h4>24/7 Pelayanan IGD</h4>
                            <p class="mb-0">Tenaga Kesehatan yang selalu siap membantu pasien</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features Start -->

    <!-- Testimonial Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Tenaga Kesehatan Dayaku Raja</h5>
                <h1 class="mb-0">Dokter Spesialis, Dokter Residen, Dokter Umum</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.6s">
                @foreach ( $DokterSpesialis as $p)
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="{{ asset('storage/' . $p->foto) }}" style="width: 60px; height: 60px;" >
                        <div class="ps-4">
                            <h4 class="text-primary mb-1"><A>{{ $p -> nama }}</A></h4>
                            <small class="text-uppercase">{{ $p->refsmf->deskripsi }} 
                            @if ($p->residen ==1)
                                [RESIDEN]
                                @else
                                
                            @endif
                            </small>
                        </div>
                    </div>
                </div>    
                @endforeach                
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- Blog Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Berita Kesehatan</h5>
                <h1 class="mb-0">Read The Latest Articles from Our Blog Post</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="website/img/blog-1.jpg" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4"
                                href="">Web Design</a>
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i>John
                                    Doe</small>
                                <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                            </div>
                            <h4 class="mb-3">How to build a website</h4>
                            <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
                            <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="website/img/blog-2.jpg" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4"
                                href="">Web Design</a>
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i>John
                                    Doe</small>
                                <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                            </div>
                            <h4 class="mb-3">How to build a website</h4>
                            <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
                            <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="website/img/blog-3.jpg" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4"
                                href="">Web Design</a>
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i>John
                                    Doe</small>
                                <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                            </div>
                            <h4 class="mb-3">How to build a website</h4>
                            <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
                            <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="website/img/blog-1.jpg" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4"
                                href="">Web Design</a>
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i>John
                                    Doe</small>
                                <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                            </div>
                            <h4 class="mb-3">How to build a website</h4>
                            <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
                            <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="website/img/blog-2.jpg" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4"
                                href="">Web Design</a>
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i>John
                                    Doe</small>
                                <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                            </div>
                            <h4 class="mb-3">How to build a website</h4>
                            <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
                            <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="website/img/blog-3.jpg" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4"
                                href="">Web Design</a>
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i>John
                                    Doe</small>
                                <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                            </div>
                            <h4 class="mb-3">How to build a website</h4>
                            <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
                            <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
