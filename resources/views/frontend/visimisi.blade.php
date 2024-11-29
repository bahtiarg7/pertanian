
@extends('frontend.layouts.app', [
    'title' => 'Visi Misi',
])

@section('content')
    <!-- Hero -->
    <section class="container-fluid py-5 mt-4 px-sm-4 px-md-5">
        <div class="bg-dark rounded-5 position-relative overflow-hidden py-5 px-3 px-sm-4 px-xl-5 mt-2 mx-md-n3 mx-lg-auto" style="max-width: 1660px;" data-bs-theme="dark">
          <div class="jarallax position-absolute top-0 start-0 w-100 h-100 mt-5" data-jarallax data-speed="0.6">
            <div class="jarallax-img position-absolute w-100 h-100" style="background-image: url({{asset('frontend')}}/img/landing/web-studio/hero-wave.png);"></div>
          </div>
          <div class="bg-white position-absolute top-0 start-0 w-100 h-100" style="opacity: 2%;"></div>
          <div class="container position-relative z-2 pt-xl-4 pt-xxl-5 pb-sm-2">
            <div class="row pt-md-3 pt-lg-5">
              <div class="col-lg-6 col-xxl-5 pb-lg-5 mb-xl-5">
                <h1 class="display-1 text-center text-lg-start mb-xxl-5">Visi <span class="text-primary"></span></h1>
                <p class="text-body fs-xl text-center text-lg-start pb-2 pb-md-0 mb-4 mb-md-5">{{optional($visimisi)->visi}}</p>
              </div>
              <div class="col-lg-5 col-xl-4 offset-lg-1 offset-xxl-2 d-flex flex-column pt-2 pt-md-4">
                <h1 class="display-1 text-center text-lg-start mb-xxl-5">Misi <span class="text-primary"></span></h1>
                <p>{{($visimisi)->misi}}</p>
                {{-- <div class="d-flex flex-column flex-sm-row align-items-center justify-content-center justify-content-lg-start pb-3 pb-sm-5"><a class="btn btn-lg btn-primary rounded-pill w-100 w-sm-auto me-sm-3 me-xl-4 mb-2 mb-sm-0" href="#">Let's partner</a><a class="btn btn-lg btn-link text-white w-100 w-sm-auto px-2" href="portfolio-list-v2.html">View Case Studies<i class="ai-arrow-right ms-2"></i></a></div>
                <ul class="list-inline d-xl-flex text-center text-lg-start mt-auto mb-0 mb-sm-2">
                  <li class="d-inline-flex align-items-center text-body text-nowrap pt-1 me-4">
                    <i class="ai-check-alt text-primary fs-xl me-2"></i>
                    Full spectrum of services
                  </li>
                  <li class="d-inline-flex align-items-center text-body text-nowrap pt-1">
                    <i class="ai-check-alt text-primary fs-xl me-2"></i>
                    Flexible work terms
                  </li>
                </ul> --}}
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection
