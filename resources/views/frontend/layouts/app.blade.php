<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="utf-8">

    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">

    <!-- SEO meta tags -->
    <title>{{config('app.name')}} | {{$title}}</title>
    <meta name="description" content="Around - Multipurpose Bootstrap HTML Template">
    <meta name="keywords" content="bootstrap, business, corporate, coworking space, services, creative agency, dashboard, e-commerce, mobile app showcase, saas, multipurpose, product landing, shop, software, ui kit, web studio, landing, light and dark mode, html5, css3, javascript, gallery, slider, touch, creative">
    <meta name="author" content="Stackbros">

    <!-- Webmanifest + Favicon / App icons -->
    <link rel="manifest" href="manifest.json">
    <link rel="icon" type="image/png" href="{{asset('frontend')}}/app-icons/icon-32x32.png" sizes="32x32">
    <link rel="apple-touch-icon" href="{{asset('frontend')}}/app-icons/icon-180x180.png">

    <!-- Theme switcher (color modes) -->
    <script src="{{asset('frontend')}}/js/theme-switcher.js"></script>

    <!-- Import Google font (Inter) -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet" id="google-font">

    <!-- Vendor styles -->
    <link rel="stylesheet" media="screen" href="{{asset('frontend')}}/vendor/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" media="screen" href="{{asset('frontend')}}/vendor/lightgallery/css/lightgallery-bundle.min.css">

    <!-- Font icons -->
    <link rel="stylesheet" href="{{asset('frontend')}}/icons/around-icons.min.css">

    <!-- Theme styles + Bootstrap -->
    <link rel="stylesheet" media="screen" href="{{asset('frontend')}}/css/theme.min.css">

    {{-- <!-- FullCalendar CSS -->
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.css" rel="stylesheet">
    <!-- FullCalendar JS -->
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.js"></script>
    <style>
        /* Menambahkan sedikit style untuk mempercantik tampilan kalender */
        #calendar {
            max-width: 900px;
            margin: 50px auto;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
    </style> --}}
    
    @stack('styles')
    <!-- Page loading styles -->
    <style>
      .page-loading {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        -webkit-transition: all .4s .2s ease-in-out;
        transition: all .4s .2s ease-in-out;
        background-color: #fff;
        opacity: 0;
        visibility: hidden;
        z-index: 9999;
      }
      [data-bs-theme="dark"] .page-loading {
        background-color: #121519;
      }
      .page-loading.active {
        opacity: 1;
        visibility: visible;
      }
      .page-loading-inner {
        position: absolute;
        top: 50%;
        left: 0;
        width: 100%;
        text-align: center;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        -webkit-transition: opacity .2s ease-in-out;
        transition: opacity .2s ease-in-out;
        opacity: 0;
      }
      .page-loading.active > .page-loading-inner {
        opacity: 1;
      }
      .page-loading-inner > span {
        display: block;
        font-family: "Inter", sans-serif;
        font-size: 1rem;
        font-weight: normal;
        color: #6f788b;
      }
      [data-bs-theme="dark"] .page-loading-inner > span {
        color: #fff;
        opacity: .6;
      }
      .page-spinner {
        display: inline-block;
        width: 2.75rem;
        height: 2.75rem;
        margin-bottom: .75rem;
        vertical-align: text-bottom;
        background-color: #d7dde2;
        border-radius: 50%;
        opacity: 0;
        -webkit-animation: spinner .75s linear infinite;
        animation: spinner .75s linear infinite;
      }
      [data-bs-theme="dark"] .page-spinner {
        background-color: rgba(255,255,255,.25);
      }
      @-webkit-keyframes spinner {
        0% {
          -webkit-transform: scale(0);
          transform: scale(0);
        }
        50% {
          opacity: 1;
          -webkit-transform: none;
          transform: none;
        }
      }
      @keyframes spinner {
        0% {
          -webkit-transform: scale(0);
          transform: scale(0);
        }
        50% {
          opacity: 1;
          -webkit-transform: none;
          transform: none;
        }
      }
      .bg-pertanian {
        background: #2f451e;
      }
    </style>

  <style>
    .desktop {
      display: none; 
    }

    .mobile {
      display: block;
    }
    .card-layanan:hover {
      background: #77b14a !important;
    }
    .card-layanan:hover h3,
    .card-layanan:hover p {
      color: white !important;
    }
    .card-layanan:hover .card-body i {
      color: white !important;
    }

    a {
      text-decoration: none;
    }

    .card a:hover {
      text-decoration: none;
      transform: scale(1.1);
      transition: transform 0.3s ease, background-color 0.3s ease;
    }

    .navbar-stuck {
      background: #2f451e !important;
    }

    .home-berita {
      padding: 20px;
    }

    .content-berita h2 {
      font-size: 2rem;
      color: #333;
      font-weight: bold;
    }

    .hr {
      height: 2px;
      background-color: #0b0000;
      margin-bottom: 20px;
    }

    .berita-item {
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .berita-item .berita-text {
      flex: 1;
    }

    .berita-item .berita-image img {
      width: 100%;
      max-width: 250px;  /* Set max-width to limit the image size */
      height: auto;
      border-radius: 8px;  /* Rounded corners */
    }

    .berita-item .btn {
      margin-top: 10px;
    }

    .content-berita .berita-item {
      background: #f9f9f9;
      padding: 20px;
      border-radius: 8px;
    }

    .content-berita .berita-item h4 {
      font-size: 1.5rem;
    }

    .right-sidebar {
      background-color: #f1f1f1;
      padding: 20px;
      border-radius: 8px;
    }

    .right-sidebar h4 {
      font-size: 1.25rem;
      color: #333;
    }

    .right-sidebar ul {
      padding: 0;
    }

    .right-sidebar ul li {
      margin-bottom: 10px;
    }

    .right-sidebar ul li a {
      text-decoration: none;
      color: #007bff;
      font-size: 1rem;
    }

    .right-sidebar ul li a:hover {
      text-decoration: underline;
    }

    #gpr-kominfo-widget-container {
      margin-top: 20px;
      background-color: #ffffff;
      padding: 15px;
      border-radius: 8px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .right-sidebar .card {
      border: 0;
      background-color: #f9f9f9;
      border-radius: 10px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .right-sidebar .card-body {
      padding: 20px;
    }

    .right-sidebar .card-title {
      font-size: 1.25rem;
      font-weight: bold;
    }

    .right-sidebar .card-text {
      font-size: 1rem;
      color: #555;
    }

    .right-sidebar .card hr {
      border-top: 1px solid #ddd;
    }

    .right-sidebar .btn {
      margin-top: 15px;
      font-size: 1rem;
    }

    .right-sidebar img {
      object-fit: cover;
      max-height: 150px;
      width: 100%;
      border-radius: 5px;
    }


    /* Make the sidebar stack below content on small screens */
    @media (max-width: 767px) {
      .home-berita .row {
        flex-direction: column-reverse;
      }

      .right-sidebar {
        margin-bottom: 20px;
      }

      .berita-item {
        flex-direction: column;  /* Stack vertically on small screens */
      }

      .berita-item .berita-image {
        margin-top: 20px;
      }
    }

/* tablist */
/* Custom styling for tab icons */
    .tab-icon {
      width: 20px;
      height: 20px;
      object-fit: cover;
    }

    /* Styling for the active tab */
    /* Styling for the active tab */
    .nav-link.active {
      font-weight: bold;
      background: #2f451e !important;  /* Add !important to enforce */
      color: white !important;         /* Ensure text color is changed */
      border-color: #2f451e !important;  /* Add !important to enforce */
    }

    .nav-link.active i {
      color: white !important;
    }


    /* Optional: Add some padding and borders for better visual spacing */
    .nav-tabs .nav-item {
      margin-right: 10px;
    }

    /* Styling for the tab content */
    .tab-content {
      margin-top: 20px;
    }

/* tablist */

/* news tablist */
    .news-item {
      padding: 15px;
      background-color: #f8f9fa;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    .news-title {
      font-size: 18px;
      font-weight: bold;
    }

    .date {
      font-size: 14px;
      color: #6c757d;
    }

    hr {
      border-color: #ddd;
    }

    .title-tabs {
      color: white;
      border-radius: 10px;
      padding: 10px;
      width: 50%;
      text-align: center;
    }

    .title-tabs:hover {
      background: #6ca144;
    }
/* news tablist */

/* Banner Video & Image */
/* .custom-iframe, .custom-image {
  width: 100%;
  height: 0;
  padding-top: 50%;
  object-fit: cover;
} */

/* Optional: Adjust iframe and image for better responsiveness and clarity */
    .custom-iframe {
      border: none;
    }

    .custom-image {
      object-fit: cover; /* Ensures the image scales to cover the container without distortion */
      height: 100%;
    }
    /* Banner Video & Image */

    /* Gallery Link */
    .image-gallery .gallery-image {
      width: 100%;
      max-height: 50px;
      object-fit: cover;
      transition: filter 0.3s ease;
      filter: grayscale(100%);
    }
    .image-gallery .gallery-image:hover {
      filter: grayscale(0%) saturate(1.5);
    }

/* Gallery Link */

/* Garis Pemisah */
    .border-left {
        border-left: 2px solid white;
        padding-left: 10px;
    }
    .text-primary img {
        padding-right: 10px;
    }

/* Garis Pemisah */

    @media (min-width: 992px) {
      .desktop {
        display: block;
      }

      .mobile {
        display: none;
      }
    }
  </style>

    <!-- Page loading scripts -->
    <script>
      (function () {
        window.onload = function () {
          const preloader = document.querySelector('.page-loading')
          preloader.classList.remove('active')
          setTimeout(function () {
            preloader.remove()
          }, 1500)
        }
      })()
    </script>

  </head>
  <body>

    <div class="page-loading active">
        <div class="page-loading-inner">
          <div class="page-spinner"></div>
          <span>Loading...</span>
        </div>
      </div>
      <main class="page-wrapper">
        @include('frontend.layouts.header')
        @yield('content')
      </main>

    @include('frontend.layouts.footer')

<!-- Modal Layanan -->
<div class="modal fade" id="ModalLayanan" tabindex="-1" aria-labelledby="ModalLayananLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="ModalLayananLabel">Layanan</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Gambar Layanan -->
        <img src="https://picsum.photos/seed/picsum/600/300" class="img-fluid rounded-top" alt="Gambar Layanan" id="gambarLayanan">
        
        <!-- Judul Layanan -->
        <h4 class="mt-3 text-center" id="judulLayanan">Judul Layanan</h4>
        
        <!-- Tanggal Berita -->
        <p class="text-center text-muted"><strong>Tanggal Berita: </strong>29 November 2024</p>
        
        <!-- Body Layanan -->
        <p class="mt-2" id="bodyLayanan">Ini adalah ringkasan atau isi dari layanan yang lebih panjang. Anda dapat menambahkan konten lebih lengkap di sini, dengan penjelasan lebih lanjut tentang layanan yang ditawarkan.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Agenda -->
<div class="modal fade" id="ModalAgenda" tabindex="-1" aria-labelledby="ModalAgendaLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="ModalAgendaLabel">Agenda Kegiatan <span id="TanggalAgenda">29 Nov 2024</span></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Loop untuk menampilkan daftar agenda kegiatan -->
        @foreach(range(0, 9) as $i)
        <div class="agenda-item">
            <!-- Jam Kegiatan -->
            <div class="agenda-time">
                <p class="time">1{{ $i }}:00 AM</p>
            </div>
    
            <!-- Detail Kegiatan (Judul dan Deskripsi) -->
            <div class="agenda-details">
                <!-- Judul Agenda Kegiatan -->
                <h4 class="agenda-title">Judul Agenda Kegiatan {{ $i }}</h4>
    
                <!-- Body Agenda Kegiatan -->
                <p class="agenda-description">
                    Ini adalah ringkasan atau isi dari agenda kegiatan yang lebih panjang. 
                    Anda dapat menambahkan konten lebih lengkap di sini, dengan penjelasan lebih lanjut tentang agenda kegiatan yang ditawarkan.
                </p>
            </div>
        </div>
    
        <!-- Garis Pemisah setelah setiap agenda item -->
        <hr>
        @endforeach
      </div>    
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<!-- CSS tambahan -->
<style>
  /* Modal Layanan */
  .modal-body img {
    width: 100%; /* Membuat gambar mengisi lebar penuh */
    height: 300px; /* Membatasi tinggi gambar menjadi 300px */
    object-fit: cover; /* Memastikan gambar tetap terpotong sesuai dengan area yang diberikan */
    border-top-left-radius: 10px; /* Radius pada sisi atas kiri gambar */
    border-top-right-radius: 10px; /* Radius pada sisi atas kanan gambar */
  }
  
  .modal-body h4 {
    text-align: center; /* Menengahkan judul */
  }

  .modal-body .text-muted {
    font-size: 0.9rem; /* Menurunkan ukuran font untuk tanggal */
    margin-top: 10px;
  }

  .modal-body .form-label {
    font-weight: bold; /* Menebalkan label input */
  }

  .modal-body .form-control {
    margin-top: 10px; /* Menambahkan jarak antara label dan input */
  }
  /* Modal Layanan */

  /* Modal Agenda */
  .modal-body {
  padding: 20px;
}

.agenda-item {
  display: flex;
  align-items: flex-start; /* Menjaga posisi elemen agar rata atas */
  margin-bottom: 20px;
}

.agenda-time {
  width: 80px; /* Menentukan lebar kolom jam */
  text-align: center; /* Menengahkan jam */
  padding-right: 15px;
}

.agenda-time .time {
  font-size: 1.2rem;
  font-weight: bold;
  color: #007bff; /* Warna jam (bisa diganti sesuai selera) */
}

.agenda-details {
  flex-grow: 1; /* Membuat kolom ini mengisi sisa ruang */
}

.agenda-title {
  font-size: 1.5rem;
  font-weight: bold;
  margin-bottom: 10px;
}

.agenda-description {
  font-size: 1rem;
  color: #6c757d;
}

@media (max-width: 767px) {
  .agenda-item {
    flex-direction: column; /* Pada layar kecil, buat elemen stack secara vertikal */
    align-items: flex-start;
  }

  .agenda-time {
    margin-bottom: 10px; /* Memberi jarak antara jam dan detail */
  }

  .agenda-details {
    width: 100%; /* Menjaga agar kolom deskripsi mengisi lebar penuh */
  }
}

  /* Modal Agenda */
</style>




    <!-- Modal untuk menampilkan detail acara -->
    <div class="modal fade" id="eventModal" tabindex="-1" role="dialog" aria-labelledby="eventModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="eventModalLabel">Detail Acara</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <img id="eventImage" src="" alt="Event Image">
                  <p id="eventDescription"></p>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
              </div>
          </div>
      </div>
  </div>
    <a class="btn-scroll-top" href="#top" data-scroll aria-label="Scroll back to top">
        <svg viewBox="0 0 40 40" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <circle cx="20" cy="20" r="19" fill="none" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"></circle>
        </svg>
        <i class="ai-arrow-up"></i>
      </a>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <!-- Link ke SweetAlert2 CSS -->
      <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.22/dist/sweetalert2.min.css" rel="stylesheet">
      <!-- Link ke SweetAlert2 JS -->
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.22/dist/sweetalert2.min.js"></script>
      <script src="{{asset('frontend')}}/vendor/swiper/swiper-bundle.min.js"></script>
      <script src="{{asset('frontend')}}/vendor/lightgallery/lightgallery.min.js"></script>
      <script src="{{asset('frontend')}}/vendor/lightgallery/plugins/video/lg-video.min.js"></script>
      <script src="{{asset('frontend')}}/vendor/%40fullcalendar/core/index.global.min.js"></script>
      <script src="{{asset('frontend')}}/vendor/%40fullcalendar/daygrid/index.global.min.js"></script>
      <script src="{{asset('frontend')}}/vendor/%40fullcalendar/list/index.global.min.js"></script>
      <script src="{{asset('frontend')}}/vendor/%40fullcalendar/timegrid/index.global.min.js"></script>
      {{-- <script src="{{asset('frontend')}}/vendor/%40fullcalendar/bootstrap5/index.global.min.js"></script> --}}
      <script src="{{asset('frontend')}}/js/theme.min.js"></script>
      <script type="text/javascript" src="https://widget.kominfo.go.id/gpr-widget-kominfo.min.js"></script>

      {{-- Banner Video & Image --}}
      <script>
        https://www.youtube.com/watch?v=Zg1tTZg_6qo
        // Load the YouTube IFrame Player API code asynchronously.
        var tag = document.createElement('script');
        tag.src = "https://www.youtube.com/iframe_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
      
        // Replace the 'player' element with an embedded YouTube video.
        var player;
        function onYouTubeIframeAPIReady() {
          player = new YT.Player('player', {
            height: '315',
            width: '560',
            videoId: 'Zg1tTZg_6qo',  // Replace with your desired YouTube video ID
            events: {
              'onReady': onPlayerReady,
              'onStateChange': onPlayerStateChange
            }
          });
        }
      
        function onPlayerReady(event) {
          event.target.playVideo();
        }
      
        function onPlayerStateChange(event) {
          if (event.data == YT.PlayerState.PLAYING) {
            console.log("Video is playing");
          }
        }
      </script>
      {{-- Banner Video & Image --}}

      <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('fullcalendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',  // Tampilan awal adalah bulanan
                headerToolbar: {
                    left: 'prev,next today',    // Tombol untuk navigasi bulan
                    center: 'title',            // Menampilkan nama bulan
                    right: 'dayGridMonth,timeGridWeek,timeGridDay'  // Opsi tampilan: Bulanan, Mingguan, Harian
                },
                events: [
                    {
                        title: 'Meeting dengan Tim',
                        start: '2024-12-05T10:00:00',
                        end: '2024-12-05T12:00:00',
                        description: 'Pertemuan tim untuk pembahasan proyek.'
                    },
                    {
                        title: 'Pelatihan Pengguna',
                        start: '2024-12-08T14:00:00',
                        description: 'Pelatihan pengguna baru sistem.'
                    }
                ],
                eventClick: function(info) {
                    $('#ModalAgenda').modal('show');
                    // alert('Event: ' + info.event.title + '\nStart: ' + info.event.start.toISOString());
                    // Anda bisa mengubah ini untuk menampilkan modal atau informasi tambahan
                }
            });

            calendar.render();
        });
      </script>

      <script>
        $(document).ready(function() {
          // Fungsi untuk membuka modal dan menampilkan data layanan
          function tampilkanModalLayanan(idLayanan) {
              $.ajax({
                  url: 'URL_API_TUJUAN', // Gantilah URL ini dengan URL endpoint API yang sesuai
                  type: 'GET',
                  data: { id: idLayanan }, // Kirimkan id layanan yang diperlukan
                  success: function(response) {
                      // Asumsikan response adalah objek JSON yang berisi data layanan
                      $('#gambarLayanan').attr('src', response.gambar); // Mengatur gambar layanan
                      $('#judulLayanan').text(response.judul); // Mengatur judul layanan
                      $('#tanggalBerita').html('<strong>Tanggal Berita: </strong>' + response.tanggal); // Mengatur tanggal berita
                      $('#bodyLayanan').text(response.deskripsi); // Mengatur deskripsi layanan

                      // Menampilkan modal setelah data dimuat
                      $('#ModalLayanan').modal('show');
                      
                      // Menampilkan SweetAlert setelah data berhasil dimuat
                      Swal.fire({
                          icon: 'success',
                          title: 'Data berhasil dimuat!',
                          text: 'Informasi layanan telah diperbarui.',
                          confirmButtonText: 'OK'
                      });
                  },
                  error: function(xhr, status, error) {
                      console.log("Terjadi kesalahan: " + error);

                      // Menampilkan SweetAlert jika terjadi error
                      Swal.fire({
                          icon: 'error',
                          title: 'Terjadi kesalahan',
                          text: 'Gagal memuat data layanan. Coba lagi nanti.',
                          confirmButtonText: 'Tutup'
                      });
                  }
              });
          }

          function tampilkanModalAgenda(idAgenda) {
              $.ajax({
                  url: 'URL_API_TUJUAN', // Gantilah URL ini dengan URL endpoint API yang sesuai
                  type: 'GET',
                  data: { id: idAgenda }, // Kirimkan id layanan yang diperlukan
                  success: function(response) {
                      // Asumsikan response adalah objek JSON yang berisi data layanan
                      $('#jamAgenda').attr('src', response.jam); // Mengatur gambar layanan
                      $('#judulAgenda').text(response.judul); // Mengatur judul layanan
                      $('#bodyAgenda').text(response.deskripsi); // Mengatur deskripsi layanan

                      // Menampilkan modal setelah data dimuat
                      $('#ModalAgenda').modal('show');
                      
                      // Menampilkan SweetAlert setelah data berhasil dimuat
                      Swal.fire({
                          icon: 'success',
                          title: 'Data berhasil dimuat!',
                          text: 'Informasi agenda kegiatan telah diperbarui.',
                          confirmButtonText: 'OK'
                      });
                  },
                  error: function(xhr, status, error) {
                      console.log("Terjadi kesalahan: " + error);

                      // Menampilkan SweetAlert jika terjadi error
                      Swal.fire({
                          icon: 'error',
                          title: 'Terjadi kesalahan',
                          text: 'Gagal memuat data agenda kegiatan. Coba lagi nanti.',
                          confirmButtonText: 'Tutup'
                      });
                  }
              });
          }

          // Event listener atau trigger untuk membuka modal
          $('.btnLayanan').on('click', function() {
              const idLayanan = $(this).data('id'); // Ambil id layanan dari elemen yang diklik
              tampilkanModalLayanan(idLayanan); // Panggil fungsi untuk menampilkan modal
          });
        });
      </script>
      @stack('js')
    </body>
</html>
