@extends('layout.website')
@section('LayoutWebsite')
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class=" section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h1 class="mb-0">INSTALASI FARMASI</h1>
        </div>
        @foreach ($P as $p)
            <div class="row mb-5">
                <div class="col-md">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img class="card-img card-img-left" src="{{ asset('storage/' . $p->foto) }}"
                                    alt="Card image" />
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="fw-bold text-primary text-uppercase">{{ $p->index }}</h5>
                                    <p class="card-text">
                                        {!! $p->isi !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
