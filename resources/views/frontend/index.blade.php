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
<section class="pt-5 mt-lg-3 mt-xl-4 mt-xxl-5 bg-pertanian mobile">
    <div class="container pt-2 pt-sm-4 pt-lg-5 mt-md-3 mt-lg-0">
      <div class="row pb-3 mb-3 mb-lg-4">
        <div class="col-lg-11 d-sm-flex justify-content-between text-center text-sm-start">
          <h2 class="h1 mb-sm-0 mx-auto me-sm-4 text-white" style="max-width: 440px;">Layanan</h2>
          <p class="pt-2 mb-0 mx-auto text-white" style="max-width: 420px;">Layanan yang ada di dinas pertanian kabupaten bekasi </p>
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
            <div class="card border-0 bg-secondary card-hover h-100 py-4 card-layanan" style="max-width: 306px;">
              <div class="opacity-0 position-absolute top-0 start-0 w-100 h-100 bg-size-cover bg-position-center rounded-5" style="background-image: url({{asset('frontend')}}/img/landing/);"></div>
              <div class="card-body text-center">
                <i class="ai-messages h1 fw-normal text-primary d-block mb-4"></i>
                <h3>Portal PPID</h3>
                <p class="card-text"></p>
              </div>
            </div>
          </div>
          <div class="swiper-slide w-auto h-auto">
            <div class="card border-0 bg-secondary card-hover h-100 py-4 card-layanan" style="max-width: 306px;">
              <div class="opacity-0 position-absolute top-0 start-0 w-100 h-100 bg-size-cover bg-position-center rounded-5" style="background-image: url({{asset('frontend')}}/img/landing/);"></div>
              <div class="card-body text-center">
                <i class="ai-headphone h1 fw-normal text-primary d-block mb-4"></i>
                <h3>Konsultasi Pertanian Online</h3>
                <p class="card-text"></p>
              </div>
            </div>
          </div>
          <div class="swiper-slide w-auto h-auto">
            <div class="card border-0 bg-secondary card-hover h-100 py-4 card-layanan" style="max-width: 306px;">
              <div class="opacity-0 position-absolute top-0 start-0 w-100 h-100 bg-size-cover bg-position-center rounded-5" style="background-image: url({{asset('frontend')}}/img/landing/);"></div>
              <div class="card-body text-center">
                <i class="ai-phone-in h1 fw-normal text-primary d-block mb-4"></i>
                <h3>Kontak Pengaduan</h3>
                <p class="card-text"></p>
              </div>
            </div>
          </div>
          <div class="swiper-slide w-auto h-auto">
            <div class="card border-0 bg-secondary card-hover h-100 py-4 card-layanan" style="max-width: 306px;">
              <div class="opacity-0 position-absolute top-0 start-0 w-100 h-100 bg-size-cover bg-position-center rounded-5" style="background-image: url({{asset('frontend')}}/img/landing/);"></div>
              <div class="card-body text-center">
                <i class="ai-file-text h1 fw-normal text-primary d-block mb-4"></i>
                <h3>Perizinan Pertanian</h3>
                <p class="card-text"></p>
              </div>
            </div>
          </div>
          <div class="swiper-slide w-auto h-auto">
            <div class="card border-0 bg-secondary card-hover h-100 py-4 card-layanan" style="max-width: 306px;">
              <div class="opacity-0 position-absolute top-0 start-0 w-100 h-100 bg-size-cover bg-position-center rounded-5" style="background-image: url({{asset('frontend')}}/img/landing/);"></div>
              <div class="card-body text-center">
                <i class="ai-cloud-drizzle h1 fw-normal text-primary d-block mb-4"></i>
                <h3>Perbenihan</h3>
                <p class="card-text"></p>
              </div>
            </div>
          </div>
          <div class="swiper-slide w-auto h-auto">
            <div class="card border-0 bg-secondary card-hover h-100 py-4 card-layanan" style="max-width: 306px;">
              <div class="opacity-0 position-absolute top-0 start-0 w-100 h-100 bg-size-cover bg-position-center rounded-5" style="background-image: url({{asset('frontend')}}/img/landing/);"></div>
              <div class="card-body text-center">
                <i class="ai-user-group h1 fw-normal text-primary d-block mb-4"></i>
                <h3>Pengembangan SDM</h3>
                <p class="card-text"></p>
              </div>
            </div>
          </div>
          <div class="swiper-slide w-auto h-auto">
            <div class="card border-0 bg-secondary card-hover h-100 py-4 card-layanan" style="max-width: 306px;">
              <div class="opacity-0 position-absolute top-0 start-0 w-100 h-100 bg-size-cover bg-position-center rounded-5" style="background-image: url({{asset('frontend')}}/img/landing/);"></div>
              <div class="card-body text-center">
                <i class="ai-shower h1 fw-normal text-primary d-block mb-4"></i>
                <h3>Data Penerima Subsidi Pupuk</h3>
                <p class="card-text"></p>
              </div>
            </div>
          </div>
          <div class="swiper-slide w-auto h-auto">
            <div class="card border-0 bg-secondary card-hover h-100 py-4 card-layanan" style="max-width: 306px;">
              <div class="opacity-0 position-absolute top-0 start-0 w-100 h-100 bg-size-cover bg-position-center rounded-5" style="background-image: url({{asset('frontend')}}/img/landing/);"></div>
              <div class="card-body text-center">
                <i class="ai-briefcase-plus h1 fw-normal text-primary d-block mb-4"></i>
                <h3>Peternakan & Kesehatan Hewan</h3>
                <p class="card-text"></p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Slider controls (Prev / Next buttons) -->
      <div class="container d-flex justify-content-center justify-content-sm-end pt-3 mt-3 mt-lg-4">
        <button class="btn btn-icon btn-sm btn-outline-primary rounded-circle me-3 text-white" type="button" id="prev-feature" aria-label="Prev">
          <i class="ai-arrow-left"></i>
        </button>
        <button class="btn btn-icon btn-sm btn-outline-primary rounded-circle text-white" type="button" id="next-feature" aria-label="Next">
          <i class="ai-arrow-right"></i>
        </button>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-lg-11 d-sm-flex justify-content-between text-center text-sm-start">
        <h2 class="h1 mb-sm-0 mx-auto me-sm-4" style="max-width: 440px;"></h2>
        <p class="pt-2 mb-0 mx-auto" style="max-width: 420px;"></p>
      </div>
    </div>
</section>
<section class="pt-5 mt-lg-3 mt-xl-4 mt-xxl-5 bg-pertanian desktop">
  <div class="container">
    <div class="row pb-3 mb-3 mb-lg-4">
      <div class="col-lg-11 d-sm-flex justify-content-between text-center text-sm-start">
        <h2 class="h1 mb-sm-0 mx-auto me-sm-4 text-white" style="max-width: 440px;">Layanan</h2>
        <p class="pt-2 mb-0 mx-auto text-white" style="max-width: 420px;">Layanan Dinas Pertanian Kabupaten Bekasi</p>
      </div>
    </div>
    <div class="row g-4">
      <!-- Card 1 -->
      <div class="col-12 col-md-3">
        <div class="card border-0 bg-secondary card-hover h-100 py-4 card-layanan">
          <div class="card-body text-center">
            <i class="ai-messages h1 fw-normal text-primary d-block mb-4"></i>
            <p class="card-text">Portal PPID</p>
          </div>
        </div>
      </div>
      <!-- Card 2 -->
      <div class="col-12 col-md-3">
        <div class="card border-0 bg-secondary card-hover h-100 py-4 card-layanan">
          <div class="card-body text-center">
            <i class="ai-headphone h1 fw-normal text-primary d-block mb-4"></i>
            <p class="card-text">Konsultasi Pertanian Online</p>
          </div>
        </div>
      </div>
      <!-- Card 3 -->
      <div class="col-12 col-md-3">
        <div class="card border-0 bg-secondary card-hover h-100 py-4 card-layanan">
          <div class="card-body text-center">
            <i class="ai-phone-in h1 fw-normal text-primary d-block mb-4"></i>
            <p class="card-text">Kontak Pengaduan</p>
          </div>
        </div>
      </div>
      <!-- Card 4 -->
      <div class="col-12 col-md-3">
        <div class="card border-0 bg-secondary card-hover h-100 py-4 card-layanan">
          <div class="card-body text-center">
            <i class="ai-file-text h1 fw-normal text-primary d-block mb-4"></i>
            <p class="card-text">Perizinan Pertanian</p>
          </div>
        </div>
      </div>
      <!-- Card 5 -->
      <div class="col-12 col-md-3">
        <div class="card border-0 bg-secondary card-hover h-100 py-4 card-layanan">
          <div class="card-body text-center">
            <i class="ai-cloud-drizzle h1 fw-normal text-primary d-block mb-4"></i>
            <p class="card-text">Perbenihan</p>
          </div>
        </div>
      </div>
      <!-- Card 6 -->
      <div class="col-12 col-md-3">
        <div class="card border-0 bg-secondary card-hover h-100 py-4 card-layanan">
          <div class="card-body text-center">
            <i class="ai-user-group h1 fw-normal text-primary d-block mb-4"></i>
            <p class="card-text">Pengembangan SDM</p>
          </div>
        </div>
      </div>
      <!-- Card 7 -->
      <div class="col-12 col-md-3">
        <div class="card border-0 bg-secondary card-hover h-100 py-4 card-layanan">
          <div class="card-body text-center">
            <i class="ai-shower h1 fw-normal text-primary d-block mb-4"></i>
            <p class="card-text">Data Penerima Subsidi Pupuk</p>
          </div>
        </div>
      </div>
      <!-- Card 8 -->
      <div class="col-12 col-md-3">
        <div class="card border-0 bg-secondary card-hover h-100 py-4 card-layanan">
          <div class="card-body text-center">
            <i class="ai-briefcase-plus h1 fw-normal text-primary d-block mb-4"></i>
            <p class="card-text">Peternakan & Kesehatan Hewan</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row mt-5">
    <div class="col-lg-11 d-sm-flex justify-content-between text-center text-sm-start">
      <h2 class="h1 mb-sm-0 mx-auto me-sm-4" style="max-width: 440px;"></h2>
      <p class="pt-2 mb-0 mx-auto" style="max-width: 420px;"></p>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="row g-4">
      <!-- Card -->
      <div class="col-12">
        <div class="card" style="background: #DBF3D4 !important; border-radius: 0px 0px 20px 20px;">
          <div class="card-body d-flex justify-content-center align-items-center">
            <div class="d-flex flex-column flex-md-row justify-content-between gap-4">
              <!-- Link 1 -->
              <a href="#" class="d-flex align-items-center gap-1 mb-3 mb-md-0">
                <i class="ai-refresh h1 fw-bold text-primary"></i>
                <span class="card-text fw-bold">Juru<br>Tani</span>
              </a>
              <!-- Link 2 -->
              <a href="#" class="d-flex align-items-center gap-1">
                <i class="ai-repeat h1 fw-bold text-primary"></i>
                <span class="card-text fw-bold">Halo<br>DRH</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="home-berita">
  <div class="container">
    <div class="d-flex flex-column flex-md-row">
      <!-- Main Content (Berita) -->
      <div class="col-12 col-md-8">
        <div class="content-berita">
          <h2 class="mb-4" style="color: #3e7712">Kabar Terkini Dinas Pertanian Kabupaten Bekasi</h2>
          <div class="hr"></div>
          
          <div class="berita-item d-flex flex-column flex-md-row align-items-center mb-4">
            <!-- Left side (Title and Description) -->
            <div class="berita-text mb-3 mb-md-0">
              <h6>{{date('d M Y')}}</h6>
              <h4>Judul Berita 1</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ac velit vitae nulla volutpat viverra.</p>
              <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
            </div>
      
            <!-- Right side (Image) -->
            <div class="berita-image ms-md-4">
              <img src="https://picsum.photos/seed/picsum/400" alt="Image Berita" class="img-fluid rounded">
            </div>
          </div>
        </div>

        <div class="container mt-4">
          <div class="row">
            <div class="col-12">
              <!-- Tab Navigation -->
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation" style="max-width: 150px;font-size:10pt;">
                  <a class="nav-link active d-flex flex-column align-items-center" id="home-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                    {{-- <img src="path/to/your/icon1.png" alt="Home Icon" class="tab-icon me-2"> --}}
                    <i class="ai-volume-2 h1 text-primary tab-icon mb-4"></i>
                    <span>Pengumuman</span>
                  </a>
                </li>
                <li class="nav-item" role="presentation" style="max-width: 150px;font-size:10pt;">
                  <a class="nav-link d-flex flex-column align-items-center" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
                    {{-- <img src="path/to/your/icon2.png" alt="Profile Icon" class="tab-icon me-2"> --}}
                    <i class="ai-cast h1 text-primary tab-icon mb-4"></i>
                    <span>Berita Iptek</span>
                  </a>
                </li>
                <li class="nav-item" role="presentation" style="max-width: 150px;font-size:10pt;">
                  <a class="nav-link d-flex flex-column align-items-center" id="contact-tab" data-bs-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">
                    {{-- <img src="path/to/your/icon3.png" alt="Contact Icon" class="tab-icon me-2"> --}}
                    <i class="ai-archive h1 text-primary tab-icon mb-4"></i>
                    <span>Berita Resmi PVT</span>
                  </a>
                </li>
                <li class="nav-item" role="presentation" style="max-width: 150px;font-size:10pt;">
                  <a class="nav-link d-flex flex-column align-items-center" id="siaran-tab" data-bs-toggle="tab" href="#siaran" role="tab" aria-controls="siaran" aria-selected="false">
                    {{-- <img src="path/to/your/icon3.png" alt="Contact Icon" class="tab-icon me-2"> --}}
                    <i class="ai-note h1 text-primary tab-icon mb-4"></i>
                    <span>Siaran Pers</span>
                  </a>
                </li>
                <li class="nav-item" role="presentation" style="max-width: 150px;font-size:10pt;">
                  <a class="nav-link d-flex flex-column align-items-center" id="agrinews-tab" data-bs-toggle="tab" href="#agrinews" role="tab" aria-controls="agrinews" aria-selected="false">
                    {{-- <img src="path/to/your/icon3.png" alt="Contact Icon" class="tab-icon me-2"> --}}
                    <i class="ai-flower h1 text-primary tab-icon mb-4"></i>
                    <span>Agrinews</span>
                  </a>
                </li>
              </ul>
        
              <!-- Tab Content -->
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                  <div class="d-flex flex-column flex-md-row">
                    <!-- Column 1 -->
                    <div class="col-12 col-md-6">
                      <!-- News Item 1 -->
                      <div class="news-item mb-4">
                        <div class="date text-muted">November 29, 2024</div>
                        <h5 class="news-title">Judul Berita 1</h5>
                        <hr>
                      </div>
                      <!-- News Item 2 -->
                      <div class="news-item mb-4">
                        <div class="date text-muted">November 28, 2024</div>
                        <h5 class="news-title">Judul Berita 2</h5>
                        <hr>
                      </div>
                      <!-- News Item 3 -->
                      <div class="news-item mb-4">
                        <div class="date text-muted">November 27, 2024</div>
                        <h5 class="news-title">Judul Berita 3</h5>
                        <hr>
                      </div>
                      <!-- News Item 4 -->
                      <div class="news-item mb-4">
                        <div class="date text-muted">November 26, 2024</div>
                        <h5 class="news-title">Judul Berita 4</h5>
                        <hr>
                      </div>
                    </div>
                
                    <!-- Column 2 -->
                    <div class="col-12 col-md-6">
                      <!-- News Item 1 -->
                      <div class="news-item mb-4">
                        <div class="date text-muted">November 25, 2024</div>
                        <h5 class="news-title">Judul Berita 5</h5>
                        <hr>
                      </div>
                      <!-- News Item 2 -->
                      <div class="news-item mb-4">
                        <div class="date text-muted">November 24, 2024</div>
                        <h5 class="news-title">Judul Berita 6</h5>
                        <hr>
                      </div>
                      <!-- News Item 3 -->
                      <div class="news-item mb-4">
                        <div class="date text-muted">November 23, 2024</div>
                        <h5 class="news-title">Judul Berita 7</h5>
                        <hr>
                      </div>
                      <!-- News Item 4 -->
                      <div class="news-item mb-4">
                        <div class="date text-muted">November 22, 2024</div>
                        <h5 class="news-title">Judul Berita 8</h5>
                        <hr>
                      </div>
                    </div>
                  </div>
                  <p class="title-tabs bg-pertanian">Lihat Semua Pengumuman</p>
                </div>                
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                  <div class="d-flex flex-column flex-md-row">
                    <!-- Column 1 -->
                    <div class="col-12 col-md-6">
                      <!-- News Item 1 -->
                      <div class="news-item mb-4">
                        <div class="date text-muted">November 29, 2024</div>
                        <h5 class="news-title">Judul Berita 1</h5>
                        <hr>
                      </div>
                      <!-- News Item 2 -->
                      <div class="news-item mb-4">
                        <div class="date text-muted">November 28, 2024</div>
                        <h5 class="news-title">Judul Berita 2</h5>
                        <hr>
                      </div>
                      <!-- News Item 3 -->
                      <div class="news-item mb-4">
                        <div class="date text-muted">November 27, 2024</div>
                        <h5 class="news-title">Judul Berita 3</h5>
                        <hr>
                      </div>
                      <!-- News Item 4 -->
                      <div class="news-item mb-4">
                        <div class="date text-muted">November 26, 2024</div>
                        <h5 class="news-title">Judul Berita 4</h5>
                        <hr>
                      </div>
                    </div>
                
                    <!-- Column 2 -->
                    <div class="col-12 col-md-6">
                      <!-- News Item 1 -->
                      <div class="news-item mb-4">
                        <div class="date text-muted">November 25, 2024</div>
                        <h5 class="news-title">Judul Berita 5</h5>
                        <hr>
                      </div>
                      <!-- News Item 2 -->
                      <div class="news-item mb-4">
                        <div class="date text-muted">November 24, 2024</div>
                        <h5 class="news-title">Judul Berita 6</h5>
                        <hr>
                      </div>
                      <!-- News Item 3 -->
                      <div class="news-item mb-4">
                        <div class="date text-muted">November 23, 2024</div>
                        <h5 class="news-title">Judul Berita 7</h5>
                        <hr>
                      </div>
                      <!-- News Item 4 -->
                      <div class="news-item mb-4">
                        <div class="date text-muted">November 22, 2024</div>
                        <h5 class="news-title">Judul Berita 8</h5>
                        <hr>
                      </div>
                    </div>
                  </div>
                  <p class="title-tabs bg-pertanian">Lihat Semua Berita Iptek</p>
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                  <div class="d-flex flex-column flex-md-row">
                    <!-- Column 1 -->
                    <div class="col-12 col-md-6">
                      <!-- News Item 1 -->
                      <div class="news-item mb-4">
                        <div class="date text-muted">November 29, 2024</div>
                        <h5 class="news-title">Judul Berita 1</h5>
                        <hr>
                      </div>
                      <!-- News Item 2 -->
                      <div class="news-item mb-4">
                        <div class="date text-muted">November 28, 2024</div>
                        <h5 class="news-title">Judul Berita 2</h5>
                        <hr>
                      </div>
                      <!-- News Item 3 -->
                      <div class="news-item mb-4">
                        <div class="date text-muted">November 27, 2024</div>
                        <h5 class="news-title">Judul Berita 3</h5>
                        <hr>
                      </div>
                      <!-- News Item 4 -->
                      <div class="news-item mb-4">
                        <div class="date text-muted">November 26, 2024</div>
                        <h5 class="news-title">Judul Berita 4</h5>
                        <hr>
                      </div>
                    </div>
                
                    <!-- Column 2 -->
                    <div class="col-12 col-md-6">
                      <!-- News Item 1 -->
                      <div class="news-item mb-4">
                        <div class="date text-muted">November 25, 2024</div>
                        <h5 class="news-title">Judul Berita 5</h5>
                        <hr>
                      </div>
                      <!-- News Item 2 -->
                      <div class="news-item mb-4">
                        <div class="date text-muted">November 24, 2024</div>
                        <h5 class="news-title">Judul Berita 6</h5>
                        <hr>
                      </div>
                      <!-- News Item 3 -->
                      <div class="news-item mb-4">
                        <div class="date text-muted">November 23, 2024</div>
                        <h5 class="news-title">Judul Berita 7</h5>
                        <hr>
                      </div>
                      <!-- News Item 4 -->
                      <div class="news-item mb-4">
                        <div class="date text-muted">November 22, 2024</div>
                        <h5 class="news-title">Judul Berita 8</h5>
                        <hr>
                      </div>
                    </div>
                  </div>
                  <p class="title-tabs bg-pertanian">Lihat Semua Berita Resmi PVT</p>
                </div>
                <div class="tab-pane fade" id="siaran" role="tabpanel" aria-labelledby="siaran-tab">
                  <div class="d-flex flex-column flex-md-row">
                    <!-- Column 1 -->
                    <div class="col-12 col-md-6">
                      <!-- News Item 1 -->
                      <div class="news-item mb-4">
                        <div class="date text-muted">November 29, 2024</div>
                        <h5 class="news-title">Judul Berita 1</h5>
                        <hr>
                      </div>
                      <!-- News Item 2 -->
                      <div class="news-item mb-4">
                        <div class="date text-muted">November 28, 2024</div>
                        <h5 class="news-title">Judul Berita 2</h5>
                        <hr>
                      </div>
                      <!-- News Item 3 -->
                      <div class="news-item mb-4">
                        <div class="date text-muted">November 27, 2024</div>
                        <h5 class="news-title">Judul Berita 3</h5>
                        <hr>
                      </div>
                      <!-- News Item 4 -->
                      <div class="news-item mb-4">
                        <div class="date text-muted">November 26, 2024</div>
                        <h5 class="news-title">Judul Berita 4</h5>
                        <hr>
                      </div>
                    </div>
                
                    <!-- Column 2 -->
                    <div class="col-12 col-md-6">
                      <!-- News Item 1 -->
                      <div class="news-item mb-4">
                        <div class="date text-muted">November 25, 2024</div>
                        <h5 class="news-title">Judul Berita 5</h5>
                        <hr>
                      </div>
                      <!-- News Item 2 -->
                      <div class="news-item mb-4">
                        <div class="date text-muted">November 24, 2024</div>
                        <h5 class="news-title">Judul Berita 6</h5>
                        <hr>
                      </div>
                      <!-- News Item 3 -->
                      <div class="news-item mb-4">
                        <div class="date text-muted">November 23, 2024</div>
                        <h5 class="news-title">Judul Berita 7</h5>
                        <hr>
                      </div>
                      <!-- News Item 4 -->
                      <div class="news-item mb-4">
                        <div class="date text-muted">November 22, 2024</div>
                        <h5 class="news-title">Judul Berita 8</h5>
                        <hr>
                      </div>
                    </div>
                  </div>
                  <p class="title-tabs bg-pertanian">Lihat Semua Siaran Pers</p>
                </div>
                <div class="tab-pane fade" id="agrinews" role="tabpanel" aria-labelledby="agrinews-tab">
                  <div class="d-flex flex-column flex-md-row">
                    <!-- Column 1 -->
                    <div class="col-12 col-md-6">
                      <!-- News Item 1 -->
                      <div class="news-item mb-4">
                        <div class="date text-muted">November 29, 2024</div>
                        <h5 class="news-title">Judul Berita 1</h5>
                        <hr>
                      </div>
                      <!-- News Item 2 -->
                      <div class="news-item mb-4">
                        <div class="date text-muted">November 28, 2024</div>
                        <h5 class="news-title">Judul Berita 2</h5>
                        <hr>
                      </div>
                      <!-- News Item 3 -->
                      <div class="news-item mb-4">
                        <div class="date text-muted">November 27, 2024</div>
                        <h5 class="news-title">Judul Berita 3</h5>
                        <hr>
                      </div>
                      <!-- News Item 4 -->
                      <div class="news-item mb-4">
                        <div class="date text-muted">November 26, 2024</div>
                        <h5 class="news-title">Judul Berita 4</h5>
                        <hr>
                      </div>
                    </div>
                
                    <!-- Column 2 -->
                    <div class="col-12 col-md-6">
                      <!-- News Item 1 -->
                      <div class="news-item mb-4">
                        <div class="date text-muted">November 25, 2024</div>
                        <h5 class="news-title">Judul Berita 5</h5>
                        <hr>
                      </div>
                      <!-- News Item 2 -->
                      <div class="news-item mb-4">
                        <div class="date text-muted">November 24, 2024</div>
                        <h5 class="news-title">Judul Berita 6</h5>
                        <hr>
                      </div>
                      <!-- News Item 3 -->
                      <div class="news-item mb-4">
                        <div class="date text-muted">November 23, 2024</div>
                        <h5 class="news-title">Judul Berita 7</h5>
                        <hr>
                      </div>
                      <!-- News Item 4 -->
                      <div class="news-item mb-4">
                        <div class="date text-muted">November 22, 2024</div>
                        <h5 class="news-title">Judul Berita 8</h5>
                        <hr>
                      </div>
                    </div>
                  </div>
                  <p class="title-tabs bg-pertanian">Lihat Semua Agrinews</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Banner Video & Image -->
        <div class="container mt-4">
          <div class="d-flex flex-column flex-md-row g-4">
            <!-- Video Player Section -->
            <div class="col mb-4 mr-4 p-2 d-flex justify-content-center align-items-center">
              <div id="player"></div>
            </div>
            
            <!-- Image Section -->
            <div class="col mb-4 mr-4 p-2 d-flex justify-content-center align-items-center">
              <img src="https://picsum.photos/seed/picsum/500" alt="" class="custom-image" style="max-height: 330px; width: 100%; object-fit: contain;">
            </div>
          </div>
        </div>

        <div class="container mt-4">
          <div class="d-flex flex-column flex-md-row g-4">
            <div class="col mb-4 mr-4 p-2" style="height: 500px">
              <img src="https://picsum.photos/seed/picsum/400/600" alt="">
            </div>
            <div class="col mb-4 mr-4 p-2" style="height: 500px">
              <img src="https://picsum.photos/seed/picsum/400/600" alt="">
            </div>
            <div class="col mb-4 mr-4 p-2" style="height: 500px">
              <img src="https://picsum.photos/seed/picsum/400/600" alt="">
            </div>
          </div>
        </div>
      </div>      

      <!-- Right Sidebar (only visible on larger screens) -->
      <div class="col-12 col-md-4">
        <!-- Counter Section -->
        <!-- Counter Section within one card -->
        <div class="right-sidebar mb-4">
          <div class="row mb-4">
            <h4 class="mb-4">Counter</h4>
            <!-- Single Card for all counters -->
            <div class="col-12">
              <div class="card p-3 text-center" style="background-color: #f4f5f7; border-radius: 10px;">
                <div class="row">
                  <!-- TODAY Counter -->
                  <div class="col-12">
                    <div class="counter-box">
                      <p class="mb-0">TODAY</p>
                      <p class="text-primary">2000</p>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <!-- Icon and Graph Counter -->
                  <div class="col-12 col-md-4">
                    <div class="counter-box" style="text-align: center">
                      <i class="ai-chart h1 text-primary" style="font-size: 100px"></i> <!-- Replace this with your actual icon or chart -->
                    </div>
                  </div>
                </div>

                <div class="row">
                  <!-- THIS MONTH Counter -->
                  <div class="col-6 col-md-6 col-sm-6 mb-3">
                    <div class="counter-box">
                      <p class="mb-0">THIS MONTH</p>
                      <p class="text-primary">1000</p>
                    </div>
                  </div>

                  <!-- THIS YEAR Counter -->
                  <div class="col-6 col-md-6 col-sm-6 mb-3">
                    <div class="counter-box">
                      <p class="mb-0">THIS YEAR</p>
                      <p class="text-primary">1000</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Arsip Berita -->
        <div class="right-sidebar mb-4" style="border-radius: 10px 10px 0px 0px;">
          <h4 class="mb-4">Arsip Berita</h4>

          <!-- News Archive Item -->
          <div class="col-12">
            <div class="card d-flex flex-row mb-3">
              
              <!-- Left: Image -->
              <div class="col-md-4 p-0">
                <img src="https://picsum.photos/seed/picsum/400" alt="News Image" class="img-fluid rounded-start" style="max-height: 150px; object-fit: cover;">
              </div>

              <!-- Right: Content -->
              <div class="col-md-8">
                <div class="card-body p-3">
                  <!-- Date in the top right -->
                  <div class="d-flex justify-content-end">
                    <span class="text-muted">November 29, 2024</span>
                  </div>

                  <!-- Horizontal Line -->
                  <hr class="my-3">

                  <!-- Title -->
                  <h5 class="card-title">Judul Berita Terkini</h5>

                  <!-- Description/Summary -->
                  {{-- <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ac velit vitae nulla volutpat viverra.</p>

                  <!-- Read more link, responsive to screen sizes -->
                  <div class="d-flex justify-content-start justify-content-md-end">
                    <a href="#" class="btn btn-primary mt-2">Selengkapnya</a>
                  </div> --}}
                </div>
              </div>
            </div>
          </div>

          <!-- Repeat the structure above for other articles if needed -->
        </div>

        <!-- Sidebar Content -->
        <div class="right-sidebar mb-4">
          <h4 class="">Lihat Semua Berita</h4>
        </div>

        <!-- Sidebar Kalender -->
        <div class="right-sidebar mb-4">
          <h4 class="mb-4">Agenda Kegiatan</h4>
          <div class="calendar-container">
            <div class="calendar-header">
              <button id="prev-month" class="btn">Prev</button>
              <span id="month-year" class="month-year"></span>
              <button id="next-month" class="btn">Next</button>
            </div>
            
            <table id="calendar" class="calendar">
              <thead>
                <tr>
                  <th>Sun</th>
                  <th>Mon</th>
                  <th>Tue</th>
                  <th>Wed</th>
                  <th>Thu</th>
                  <th>Fri</th>
                  <th>Sat</th>
                </tr>
              </thead>
              <tbody>
                <!-- Calendar days will be inserted here dynamically -->
              </tbody>
            </table>
          </div>
        </div>        

        <!-- Sidebar Content -->
        {{-- <div class="right-sidebar mb-4">
          <h4 class="mb-4">Kategori Berita</h4>
          <ul class="list-unstyled">
            <li><a href="#">Kategori Berita 1</a></li>
            <li><a href="#">Kategori Berita 2</a></li>
            <li><a href="#">Kategori Berita 3</a></li>
            <li><a href="#">Kategori Berita 4</a></li>
          </ul>
        </div> --}}
        
        <!-- Widget Section -->
        <div class="right-sidebar">
          <div id="gpr-kominfo-widget-container">
            <!-- Assuming this is where your widget will load -->
            <p>Loading widget...</p> <!-- Placeholder text while the widget loads -->
          </div>
        </div>
      </div>      
    </div>
  </div>
</section>


<section class="container">
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
                  <img class="rounded-circle" src="{{asset('frontend')}}/img/avatar/06.jpg"width="48" alt="Post author">
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

<!-- Gallery Link -->
<section class="image-gallery mt-4 mb-4">
  <div class="container">
    <div class="row g-4">
      <!-- Image 1 -->
      <div class="col-12 col-md-4">
        <img src="https://picsum.photos/seed/picsum/150" alt="Image 1" class="gallery-image">
      </div>
      <!-- Image 2 -->
      <div class="col-12 col-md-4">
        <img src="https://picsum.photos/seed/picsum/150" alt="Image 2" class="gallery-image">
      </div>
      <!-- Image 3 -->
      <div class="col-12 col-md-4">
        <img src="https://picsum.photos/seed/picsum/150" alt="Image 3" class="gallery-image">
      </div>
      <div class="col-12 col-md-4">
        <img src="https://picsum.photos/seed/picsum/150" alt="Image 1" class="gallery-image">
      </div>
      <!-- Image 2 -->
      <div class="col-12 col-md-4">
        <img src="https://picsum.photos/seed/picsum/150" alt="Image 2" class="gallery-image">
      </div>
      <!-- Image 3 -->
      <div class="col-12 col-md-4">
        <img src="https://picsum.photos/seed/picsum/150" alt="Image 3" class="gallery-image">
      </div>
      <div class="col-12 col-md-4">
        <img src="https://picsum.photos/seed/picsum/150" alt="Image 1" class="gallery-image">
      </div>
      <!-- Image 2 -->
      <div class="col-12 col-md-4">
        <img src="https://picsum.photos/seed/picsum/150" alt="Image 2" class="gallery-image">
      </div>
      <!-- Image 3 -->
      <div class="col-12 col-md-4">
        <img src="https://picsum.photos/seed/picsum/150" alt="Image 3" class="gallery-image">
      </div>
      <!-- Add more images as needed -->
    </div>
  </div>
</section>

@endsection
