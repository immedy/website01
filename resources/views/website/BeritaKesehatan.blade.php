@extends('layout.website')
@section('LayoutWebsite')
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <!-- Blog list Start -->
                <div class="col-lg-8">
                    <div class="row g-5">
                        @foreach ($berita as $p)
                            <div class="col-md-6 wow slideInUp" data-wow-delay="0.1s">
                                <div class="blog-item bg-light rounded overflow-hidden">
                                    <div class="blog-img position-relative overflow-hidden">
                                        <img class="img-fluid" src="{{ asset('storage/' . $p->foto) }}" alt="">
                                        <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4"
                                            href="">{{ $p->refkategori->deskripsi }}</a>
                                    </div>
                                    <div class="p-4">
                                        <div class="d-flex mb-3">
                                            <small class="me-3"><i
                                                    class="far fa-user text-primary me-2"></i>{{ $p->user->nama }}</small>
                                            <small><i
                                                    class="far fa-calendar-alt text-primary me-2"></i>{{ $p->created_at->diffForHumans() }}</small>
                                        </div>
                                        <h4 class="mb-3">{{ $p->judul }}</h4>
                                        <p>{{ $p->exeprt }}</p>
                                        <a class="text-uppercase"
                                            href="/BeritaDetail/{{ Crypt::encryptString($p->id) }}">Baca Selengkapnya
                                            <i class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <!-- Blog list End -->

                <!-- Sidebar Start -->
                <div class="col-lg-4">
                    <!-- Search Form Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="input-group">
                            <input type="text" class="form-control p-3" placeholder="Keyword">
                            <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                        </div>
                    </div>
                    <!-- Search Form End -->

                    <!-- Category Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Kategori</h3>
                        </div>
                        @foreach ($kategori as $p)
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="#"><i
                                        class="bi bi-arrow-right me-2"></i>{{ $p->deskripsi }}</a>
                            </div>
                        @endforeach

                    </div>
                    <!-- Category End -->
                </div>
            </div>
        </div>
    </div>
@endsection
