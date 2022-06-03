 @extends('layout.website')
 @section('LayoutWebsite')
     <!-- Team Start -->

     <div class="container py-5">
         <div class="section-title text-center position-relative pb-3 mb-5 mx-auto">
             <h5 class=" fw-bold text-primary text-uppercase">Sturtur Organisasi</h5>
             <img src="/website/img/Struktur.jpg" alt="Image" style="width: 100%">
             <div class="p-1">
                 <h5 class="text-white text-uppercase mb-3 animated slideInDown"></h5>
                 <h1 class="display-1 text-white mb-md-4 animated zoomIn"></h1>
             </div>
         </div>
     </div>

     <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
         <div class="container py-5">
             <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                 <h5 class="fw-bold text-primary text-uppercase">Pejabat Struktural</h5>

             </div>
             <div class="row g-5">
                 @foreach ($jabatan as $p)
                     <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                         <div class="team-item bg-light rounded overflow-hidden">
                             <div class="team-img position-relative overflow-hidden">
                                 <img class="img-fluid w-100" src="{{ asset('storage/' . $p->foto) }}" alt="">
                                 <div class="team-social">
                                     <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                             class="fab fa-twitter fw-normal"></i></a>
                                     <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                             class="fab fa-facebook-f fw-normal"></i></a>
                                     <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                             class="fab fa-instagram fw-normal"></i></a>
                                     <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                             class="fab fa-linkedin-in fw-normal"></i></a>
                                 </div>
                             </div>
                             <div class="text-center py-4">
                                 <h4 class="text-primary">{{ $p->nama }}</h4>
                                 <p class="text-uppercase m-0">{{ $p->refjabatan->deskripsi }}</p>
                             </div>
                         </div>
                     </div>
                 @endforeach
             </div>
         </div>
     </div>
     <!-- Team End -->
 @endsection
