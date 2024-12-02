@extends('frontend.layouts.app', [
    'title' => 'Home',
])

@push('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.2.0/fullcalendar.min.css" rel="stylesheet">
<style>
/* FullCalendar Custom Styling */

/* Overall calendar container */
#fullcalendar {
    max-width: 90%;
    margin: 0 auto;
    padding: 20px;
    background-color: #f7f7f7;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

/* Change the background color and text color of the header */
.fc-header-toolbar {
    background-color: #007bff;
    color: white;
    padding: 10px;
    border-radius: 5px;
}

/* Change the header button styles */
.fc-button {
    background-color: #0056b3;
    color: white;
    border: 1px solid #0056b3;
    border-radius: 5px;
}

.fc-button:hover {
    background-color: #00408d;
}

/* Style for navigation buttons (prev, next, today) */
.fc-button-group {
    margin: 0;
}

/* Style for month, week, and day view */
.fc-view h2 {
    font-size: 22px;
    font-weight: bold;
    color: #333;
}

/* Event styling */
.fc-event {
    background-color: #ff5722;
    color: white;
    border-radius: 5px;
    padding: 5px;
    font-size: 12px;
}

/* Hover effect for events */
.fc-event:hover {
    background-color: #e64a19;
}

/* Event text styling */
.fc-event-title {
    font-weight: normal;
}

/* Day cells styling */
.fc-day-grid .fc-day {
    border: 1px solid #f0f0f0;
    padding: 10px;
    text-align: center;
}

/* Highlight today’s date */
.fc-today {
    background-color: #e1f5fe;
    font-weight: bold;
}

/* Styling for weekends (Saturday and Sunday) */
.fc-saturday, .fc-sunday {
    background-color: #f9f9f9;
    color: #f44336;
}

/* Tooltip for events (optional) */
.fc-tooltip {
    background-color: #333;
}
</style>
@endpush


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
                    {{-- <h1 class="display-1 text-uppercase mb-4">{{ $slider->title }}</h1> --}}
                    {{-- <p class="d-block text-body fs-xl pb-2 mb-4 mb-md-5" style="max-width: 500px;">{{ $slider->deskripsi }}</p> --}}
                @endif
            </div>
        </div>
    </div>
</section>
<section class="pt-5 mt-lg-3 mt-xl-4 mt-xxl-5 bg-pertanian">
    <div class="container pt-2 pt-sm-4 pt-lg-5 mt-md-3 mt-lg-0">
      <div class="row pb-3 mb-3 mb-lg-4">
        <div class="col-lg-11 d-sm-flex justify-content-between text-center text-sm-start">
          <h2 class="h1 mb-sm-0 mx-auto me-sm-4 text-white" style="max-width: 440px;">Layanan</h2>
          <p class="pt-2 mb-0 mx-auto text-white" style="max-width: 420px;">Layanan yang ada di dinas pertanian kabupaten bekasi     <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalLayanan">
              Contoh Modal Layanan
            </button></p>
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
            <div class="card border-0 bg-secondary card-hover h-100 py-4 card-layanan btnLayanan" style="max-width: 306px;" data-id="1">
              <div class="opacity-0 position-absolute top-0 start-0 w-100 h-100 bg-size-cover bg-position-center rounded-5" style="background-image: url({{asset('frontend')}}/img/landing/);"></div>
              <div class="card-body text-center">
                <i class="ai-messages h1 fw-normal text-primary d-block mb-4"></i>
                <h3>Portal PPID</h3>
                <p class="card-text"></p>
              </div>
            </div>
          </div>
          <div class="swiper-slide w-auto h-auto">
            <div class="card border-0 bg-secondary card-hover h-100 py-4 card-layanan btnLayanan" style="max-width: 306px;" data-id="2">
              <div class="opacity-0 position-absolute top-0 start-0 w-100 h-100 bg-size-cover bg-position-center rounded-5" style="background-image: url({{asset('frontend')}}/img/landing/);"></div>
              <div class="card-body text-center">
                <i class="ai-headphone h1 fw-normal text-primary d-block mb-4"></i>
                <h3>Konsultasi Pertanian Online</h3>
                <p class="card-text"></p>
              </div>
            </div>
          </div>
          <div class="swiper-slide w-auto h-auto">
            <div class="card border-0 bg-secondary card-hover h-100 py-4 card-layanan btnLayanan" style="max-width: 306px;" data-id="3">
              <div class="opacity-0 position-absolute top-0 start-0 w-100 h-100 bg-size-cover bg-position-center rounded-5" style="background-image: url({{asset('frontend')}}/img/landing/);"></div>
              <div class="card-body text-center">
                <i class="ai-phone-in h1 fw-normal text-primary d-block mb-4"></i>
                <h3>Kontak Pengaduan</h3>
                <p class="card-text"></p>
              </div>
            </div>
          </div>
          <div class="swiper-slide w-auto h-auto">
            <div class="card border-0 bg-secondary card-hover h-100 py-4 card-layanan btnLayanan" style="max-width: 306px;" data-id="4">
              <div class="opacity-0 position-absolute top-0 start-0 w-100 h-100 bg-size-cover bg-position-center rounded-5" style="background-image: url({{asset('frontend')}}/img/landing/);"></div>
              <div class="card-body text-center">
                <i class="ai-file-text h1 fw-normal text-primary d-block mb-4"></i>
                <h3>Perizinan Pertanian</h3>
                <p class="card-text"></p>
              </div>
            </div>
          </div>
          <div class="swiper-slide w-auto h-auto">
            <div class="card border-0 bg-secondary card-hover h-100 py-4 card-layanan btnLayanan" style="max-width: 306px;" data-id="5">
              <div class="opacity-0 position-absolute top-0 start-0 w-100 h-100 bg-size-cover bg-position-center rounded-5" style="background-image: url({{asset('frontend')}}/img/landing/);"></div>
              <div class="card-body text-center">
                <i class="ai-cloud-drizzle h1 fw-normal text-primary d-block mb-4"></i>
                <h3>Perbenihan</h3>
                <p class="card-text"></p>
              </div>
            </div>
          </div>
          <div class="swiper-slide w-auto h-auto">
            <div class="card border-0 bg-secondary card-hover h-100 py-4 card-layanan btnLayanan" style="max-width: 306px;" data-id="6">
              <div class="opacity-0 position-absolute top-0 start-0 w-100 h-100 bg-size-cover bg-position-center rounded-5" style="background-image: url({{asset('frontend')}}/img/landing/);"></div>
              <div class="card-body text-center">
                <i class="ai-user-group h1 fw-normal text-primary d-block mb-4"></i>
                <h3>Pengembangan SDM</h3>
                <p class="card-text"></p>
              </div>
            </div>
          </div>
          <div class="swiper-slide w-auto h-auto">
            <div class="card border-0 bg-secondary card-hover h-100 py-4 card-layanan btnLayanan" style="max-width: 306px;" data-id="7">
              <div class="opacity-0 position-absolute top-0 start-0 w-100 h-100 bg-size-cover bg-position-center rounded-5" style="background-image: url({{asset('frontend')}}/img/landing/);"></div>
              <div class="card-body text-center">
                <i class="ai-shower h1 fw-normal text-primary d-block mb-4"></i>
                <h3>Data Penerima Subsidi Pupuk</h3>
                <p class="card-text"></p>
              </div>
            </div>
          </div>
          <div class="swiper-slide w-auto h-auto">
            <div class="card border-0 bg-secondary card-hover h-100 py-4 card-layanan btnLayanan" style="max-width: 306px;" data-id="8">
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
<section class="pt-5 mt-lg-3 mt-xl-4 mt-xxl-5 bg-pertanian desktop d-none">
  <div class="container">
    <div class="row pb-3 mb-3 mb-lg-4">
      <div class="col-lg-11 d-sm-flex justify-content-between text-center text-sm-start">
        <h2 class="h1 mb-sm-0 mx-auto me-sm-4 text-white" style="max-width: 440px;">Layanan</h2>
        <p class="pt-2 mb-0 mx-auto text-white" style="max-width: 420px;">Layanan Dinas Pertanian Kabupaten Bekasi     <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalLayanan">
            Contoh Modal Layanan
          </button></p>
      </div>
    </div>
    <div class="row g-4">
      <!-- Card 1 -->
      <div class="col-12 col-md-3 btnLayanan" data-id="1">
        <div class="card border-0 bg-secondary card-hover h-100 py-4 card-layanan">
          <div class="card-body text-center">
            <i class="ai-messages h1 fw-normal text-primary d-block mb-4"></i>
            <p class="card-text">Portal PPID</p>
          </div>
        </div>
      </div>
      <!-- Card 2 -->
      <div class="col-12 col-md-3 btnLayanan" data-id="2">
        <div class="card border-0 bg-secondary card-hover h-100 py-4 card-layanan">
          <div class="card-body text-center">
            <i class="ai-headphone h1 fw-normal text-primary d-block mb-4"></i>
            <p class="card-text">Konsultasi Pertanian Online</p>
          </div>
        </div>
      </div>
      <!-- Card 3 -->
      <div class="col-12 col-md-3 btnLayanan" data-id="3">
        <div class="card border-0 bg-secondary card-hover h-100 py-4 card-layanan">
          <div class="card-body text-center">
            <i class="ai-phone-in h1 fw-normal text-primary d-block mb-4"></i>
            <p class="card-text">Kontak Pengaduan</p>
          </div>
        </div>
      </div>
      <!-- Card 4 -->
      <div class="col-12 col-md-3 btnLayanan" data-id="4">
        <div class="card border-0 bg-secondary card-hover h-100 py-4 card-layanan">
          <div class="card-body text-center">
            <i class="ai-file-text h1 fw-normal text-primary d-block mb-4"></i>
            <p class="card-text">Perizinan Pertanian</p>
          </div>
        </div>
      </div>
      <!-- Card 5 -->
      <div class="col-12 col-md-3 btnLayanan" data-id="5">
        <div class="card border-0 bg-secondary card-hover h-100 py-4 card-layanan">
          <div class="card-body text-center">
            <i class="ai-cloud-drizzle h1 fw-normal text-primary d-block mb-4"></i>
            <p class="card-text">Perbenihan</p>
          </div>
        </div>
      </div>
      <!-- Card 6 -->
      <div class="col-12 col-md-3 btnLayanan" data-id="6">
        <div class="card border-0 bg-secondary card-hover h-100 py-4 card-layanan">
          <div class="card-body text-center">
            <i class="ai-user-group h1 fw-normal text-primary d-block mb-4"></i>
            <p class="card-text">Pengembangan SDM</p>
          </div>
        </div>
      </div>
      <!-- Card 7 -->
      <div class="col-12 col-md-3 btnLayanan" data-id="7">
        <div class="card border-0 bg-secondary card-hover h-100 py-4 card-layanan">
          <div class="card-body text-center">
            <i class="ai-shower h1 fw-normal text-primary d-block mb-4"></i>
            <p class="card-text">Data Penerima Subsidi Pupuk</p>
          </div>
        </div>
      </div>
      <!-- Card 8 -->
      <div class="col-12 col-md-3 btnLayanan" data-id="8">
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
        <div class="right-sidebar mb-4 d-none" style="border-radius: 10px 10px 0px 0px;">
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
          <a class="title-tabs bg-pertanian" href="#">Lihat Semua Arsip</a>
        </div>

        <!-- Pengumuman -->
        <div class="right-sidebar mb-4" style="border-radius: 10px 10px 0px 0px;">
          <h4 class="mb-4">Pengumuman</h4>

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
            <a class="title-tabs bg-pertanian" href="#">Lihat Semua Pengumuman</a>
          </div>

          <!-- Repeat the structure above for other articles if needed -->
        </div>

        <!-- Widget Section -->
        <div class="container mt-5">
            <h2 class="text-center mb-4">Agenda Kegiatan</h2>
            <div id="fullcalendar"></div>
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
        <div class="right-sidebar d-none">
          <h4 class="mb-4">GPR Kominfo</h4>
          <div id="gpr-kominfo-widget-container"></div>
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
<section class="image-gallery mt-4 mb-4 d-none">
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

<!-- Modal -->
<div class="modal fade" id="eventModal" tabindex="-1" role="dialog" aria-labelledby="eventModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="eventModalLabel">Detail Agenda</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

@endsection

@push('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.2.0/fullcalendar.min.js"></script>
<script>
    $(document).ready(function() {
        $('#fullcalendar').fullCalendar({
            events: [
                @foreach($agenda as $agenda)
                    {
                        title: '{{ $agenda->judul }}',
                        start: '{{ $agenda->tanggal }}',
                        description: '{{ $agenda->keterangan }}',
                        location: '{{ $agenda->lokasi }}',
                    },
                @endforeach
            ],
            header: {
                left: 'prev,next today',
                center: 'title',
                // right: 'month,agendaWeek,agendaDay'
                right: 'dayGridMonth,timeGridWeek,timeGridDay'
            },
            eventClick: function(event) {
                var eventDetails = `
                    <h4>Agenda Detail</h4>
                    <p><strong>Judul:</strong> ${event.title}</p>
                    <p><strong>Keterangan:</strong> ${event.description}</p>
                    <p><strong>Lokasi:</strong> ${event.location}</p>
                `;
                $('#eventModal .modal-body').html(eventDetails);
                $('#eventModal').modal('show');
            }
        });
    });
</script>

@endpush
