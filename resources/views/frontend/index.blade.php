@extends('frontend.layouts.app', [
    'title' => 'Home',
])

@section('content')
<section class="position-relative min-vh-100 py-5" data-bs-theme="light">
    <!-- Swiper Container -->
    <div class="swiper swiper-scale-effect position-absolute top-0 start-0 w-100 h-100" data-swiper-options='{
      "effect": "fade",
      "speed": 800,
      "autoplay": {
        "delay": 7000,
        "disableOnInteraction": false
      },
      "pagination": {
        "el": ".swiper-pagination",
        "clickable": true
      }
    }'>
        <div class="swiper-wrapper">
            @foreach ($silders as $slider)
                <div class="swiper-slide">
                    <img src="{{ asset('upload/silder/' . $slider->image) }}" alt="Slider Image" class="w-100 h-100" style="object-fit: cover;">
                </div>
            @endforeach
        </div>
        <div class="swiper-pagination mb-4"></div>
    </div>

    <!-- Content Overlay -->
    <div class="container position-relative z-2 py-lg-3 py-xl-5 my-5">
        <div class="row pt-md-3 py-xxl-5 my-5">
            <div class="col py-5 mb-md-4 mb-lg-5">
                @if(isset($slider))
                    <h1 class="display-1 text-uppercase mb-4">{{ $slider->title }}</h1>
                    <p class="d-block text-body fs-xl pb-2 mb-4 mb-md-5" style="max-width: 500px;">{{ $slider->deskripsi }}</p>
                @endif
            </div>
        </div>
    </div>
</section>
<section class="pt-5 mt-lg-3 mt-xl-4 mt-xxl-5">
    <div class="container pt-2 pt-sm-4 pt-lg-5 mt-md-3 mt-lg-0">
      <div class="row pb-3 mb-3 mb-lg-4">
        <div class="col-lg-11 d-sm-flex justify-content-between text-center text-sm-start">
          <h2 class="h1 mb-sm-0 mx-auto me-sm-4" style="max-width: 440px;">Layanan</h2>
          <p class="pt-2 mb-0 mx-auto" style="max-width: 420px;">Layanan yang ada di dinas pertanian kabupaten bekasi </p>
        </div>
      </div>
    </div>
    <div class="container-start pe-0">
      <div class="swiper" data-swiper-options='{
        "slidesPerView": "auto",
        "spaceBetween": 24,
        "loop": true,
        "navigation": {
          "prevEl": "#prev-feature",
          "nextEl": "#next-feature"
        }
      }'>
        <div class="swiper-wrapper">
          <div class="swiper-slide w-auto h-auto">
            <div class="card border-0 bg-secondary card-hover h-100 py-4" style="max-width: 306px;">
              {{-- <div class="opacity-0 position-absolute top-0 start-0 w-100 h-100 bg-size-cover bg-position-center rounded-5" style="background-image: url({{asset('frontend')}}/img/landing/yoga-studio/features/changing-room.jpg);"></div> --}}
              <div class="card-body text-center">
                <i class="ai-towel h1 fw-normal text-primary d-block mb-4"></i>
                <h3>Layanan</h3>
                <p class="card-text">Non est nullam amet netus ut vitae, penatibus lacus a ut sed molestie lectus lobortis.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Slider controls (Prev / Next buttons) -->
      <div class="container d-flex justify-content-center justify-content-sm-end pt-3 mt-3 mt-lg-4">
        <button class="btn btn-icon btn-sm btn-outline-primary rounded-circle me-3" type="button" id="prev-feature" aria-label="Prev">
          <i class="ai-arrow-left"></i>
        </button>
        <button class="btn btn-icon btn-sm btn-outline-primary rounded-circle" type="button" id="next-feature" aria-label="Next">
          <i class="ai-arrow-right"></i>
        </button>
      </div>
    </div>
  </section>
  <section class="bg-secondary py-5">
    <div class="container d-flex align-items-center pt-lg-2 pt-xl-4 pt-xxl-5 pb-3 mt-1 mt-sm-3 mb-3 my-md-4">
      <h2 class="h1 mb-0">Berita Kab Bekasi</h2>
      <div class="d-flex ms-auto">
        <button class="btn btn-sm btn-icon btn-outline-primary rounded-circle ms-3" type="button" id="prev-popular" aria-label="Prev">
          <i class="ai-arrow-left"></i>
        </button>
        <button class="btn btn-sm btn-icon btn-outline-primary rounded-circle ms-3" type="button" id="next-popular" aria-label="Next">
          <i class="ai-arrow-right"></i>
        </button>
      </div>
    </div>

    <div class="container-start">
      <div class="swiper" data-swiper-options='{
        "slidesPerView": 1,
        "spaceBetween": 24,
        "loop": true,
        "navigation": {
          "prevEl": "#prev-popular",
          "nextEl": "#next-popular"
        },
        "breakpoints": {
          "576": {
            "slidesPerView": "auto"
          }
        }
      }'>
        <div class="swiper-wrapper">
          @foreach ($data as $i => $item)
            @if ($i < 8)
            <article class="swiper-slide w-sm-auto h-auto">
              <div class="card h-100 border-0 mx-auto" style="max-width: 416px;">
                <a href="blog-single-v1.html">
                  <img class="card-img-top" src="{{ $item['img'] }}" alt="Post image">
                </a>
                <div class="card-body pb-4">
                  <div class="d-flex align-items-center mb-4 mt-n1">
                    <span class="fs-sm text-body-secondary">{{ $item['tgl'] }}</span>
                    <span class="fs-xs opacity-20 mx-3">|</span>
                    <a class="badge text-nav fs-xs border" href="#">{{ $item['kategori'] }}</a>
                  </div>
                  <h3 class="h4 card-title">
                    <a href="{{ $item['url'] }}">{{ \Illuminate\Support\Str::limit($item['judul'], 30) }}</a>
                  </h3>
                </div>
                <div class="card-footer pt-3">
                  <a class="d-flex align-items-center text-decoration-none pb-2" href="#">
                    <img class="rounded-circle" src="{{asset('frontend')}}/img/avatar/06.jpg" width="48" alt="Post author">
                    <h6 class="ps-3 mb-0">{{ $item['author'] }}</h6>
                  </a>
                </div>
              </div>
            </article>
            @endif
          @endforeach
        </div>
      </div>
    </div>

    <!-- All articles button -->
    <div class="container text-center pt-4 pb-1 pb-sm-3 pb-md-4 py-lg-5 mb-xl-1 mb-xxl-4 mt-2 mt-lg-0">
      <a class="btn btn-primary mb-1" href="blog-grid-sidebar.html">Read all articles</a>
    </div>
  </section>

@endsection
