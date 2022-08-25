@extends('layout.website')
@section('LayoutWebsite')
   <!-- Service Start -->
   <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            
            <h1 class="mb-0">Laporan Capaian Mutu Dan Prioritas</h1>
        </div>
        <div class="row g-5">
            @foreach ( $indikator as $p )
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa fa-chart-pie text-white"></i>
                    </div>
                    <h4 class="mb-3">Tahun {{ $p->tahun }}</h4>
                    <p class="m-0">{{ $p->refindikator->deskripsi }}</p>
                    <a class="btn btn-lg btn-primary rounded" href="/CapaianIndikatorPMKP/Detail">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
</div>
    <!-- Service End -->
@endsection
