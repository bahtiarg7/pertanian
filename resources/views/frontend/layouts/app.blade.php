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


/* kalende */
.calendar-container {
  padding: 10px;
  background-color: #f9f9f9;
  border-radius: 8px;
}

.calendar-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 10px;
}

.calendar-header .btn {
  background-color: #77b14a;
  color: white;
  border: none;
  padding: 5px 10px;
  cursor: pointer;
  border-radius: 5px;
}

.calendar-header .btn:hover {
  background-color: #5d8b36;
}

#month-year {
  font-size: 1.2rem;
  font-weight: bold;
}

table.calendar {
  width: 100%;
  border-collapse: collapse;
}

table.calendar th,
table.calendar td {
  text-align: center;
  padding: 8px;
  width: 14%;
  cursor: pointer;
}

table.calendar th {
  background-color: #f0f0f0;
}

table.calendar td {
  border: 1px solid #e0e0e0;
  background-color: #f9f9f9;
}

table.calendar td:hover {
  background-color: #77b14a;
  color: white;
}

table.calendar td.active {
  background-color: #4CAF50;
  color: white;
}

@media (max-width: 768px) {
  .calendar-header {
    flex-direction: column;
    align-items: flex-start;
  }

  .calendar-header .btn {
    margin-bottom: 10px;
    width: 100%;
  }

  table.calendar th,
  table.calendar td {
    padding: 6px;
    font-size: 14px;
  }
}

@media (max-width: 480px) {
  table.calendar th,
  table.calendar td {
    padding: 5px;
    font-size: 12px;
  }

  .calendar-container {
    padding: 5px;
  }

  .calendar-header {
    align-items: flex-start;
  }

  .calendar-header .btn {
    width: 100%;
    margin-bottom: 10px;
  }
}
/* kalender */

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
    <a class="btn-scroll-top" href="#top" data-scroll aria-label="Scroll back to top">
        <svg viewBox="0 0 40 40" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <circle cx="20" cy="20" r="19" fill="none" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"></circle>
        </svg>
        <i class="ai-arrow-up"></i>
      </a>
      <script src="{{asset('frontend')}}/vendor/swiper/swiper-bundle.min.js"></script>
      <script src="{{asset('frontend')}}/vendor/lightgallery/lightgallery.min.js"></script>
      <script src="{{asset('frontend')}}/vendor/lightgallery/plugins/video/lg-video.min.js"></script>
      <script src="{{asset('frontend')}}/vendor/%40fullcalendar/core/index.global.min.js"></script>
      <script src="{{asset('frontend')}}/vendor/%40fullcalendar/daygrid/index.global.min.js"></script>
      <script src="{{asset('frontend')}}/vendor/%40fullcalendar/list/index.global.min.js"></script>
      <script src="{{asset('frontend')}}/vendor/%40fullcalendar/timegrid/index.global.min.js"></script>
      <script src="{{asset('frontend')}}/vendor/%40fullcalendar/bootstrap5/index.global.min.js"></script>
      <script src="{{asset('frontend')}}/js/theme.min.js"></script>
      <script type="text/javascript" src="https://widget.kominfo.go.id/gprwidget-kominfo.min.js"></script>
      {{-- kalender --}}
      <script>
        const monthYearElement = document.getElementById('month-year');
const calendarBody = document.querySelector('#calendar tbody');
const prevMonthButton = document.getElementById('prev-month');
const nextMonthButton = document.getElementById('next-month');

let currentDate = new Date();

function renderCalendar(date) {
  // Get current month and year
  const currentMonth = date.getMonth();
  const currentYear = date.getFullYear();

  // Set the month-year header
  const months = [
    "January", "February", "March", "April", "May", "June", 
    "July", "August", "September", "October", "November", "December"
  ];
  monthYearElement.textContent = `${months[currentMonth]} ${currentYear}`;

  // Clear previous calendar
  calendarBody.innerHTML = '';

  // Get the first day of the month
  const firstDayOfMonth = new Date(currentYear, currentMonth, 1);
  const lastDateOfMonth = new Date(currentYear, currentMonth + 1, 0);
  
  const firstDayIndex = firstDayOfMonth.getDay();
  const lastDate = lastDateOfMonth.getDate();

  let dateHTML = '';
  let dayCounter = 1;

  // Add empty cells for the days before the first day of the month
  for (let i = 0; i < firstDayIndex; i++) {
    dateHTML += `<td></td>`;
  }

  // Add days of the month
  for (let i = firstDayIndex; i < 7 && dayCounter <= lastDate; i++) {
    dateHTML += `<td class="clickable" data-date="${dayCounter}">${dayCounter}</td>`;
    dayCounter++;
  }
  
  // Continue adding the days of the month for the remaining weeks
  while (dayCounter <= lastDate) {
    dateHTML += '<tr>';
    for (let i = 0; i < 7 && dayCounter <= lastDate; i++) {
      dateHTML += `<td class="clickable" data-date="${dayCounter}">${dayCounter}</td>`;
      dayCounter++;
    }
    dateHTML += '</tr>';
  }

  calendarBody.innerHTML = dateHTML;

  // Add event listeners to each day
  const dayCells = calendarBody.querySelectorAll('.clickable');
  dayCells.forEach(cell => {
    cell.addEventListener('click', function() {
      const clickedDate = this.getAttribute('data-date');
      alert(`You clicked on: ${clickedDate} ${months[currentMonth]} ${currentYear}`);
    });
  });
}

// Event listeners for prev and next buttons
prevMonthButton.addEventListener('click', () => {
  currentDate.setMonth(currentDate.getMonth() - 1);
  renderCalendar(currentDate);
});

nextMonthButton.addEventListener('click', () => {
  currentDate.setMonth(currentDate.getMonth() + 1);
  renderCalendar(currentDate);
});

// Initial render
renderCalendar(currentDate);

      </script>
      {{-- kalender --}}

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
      @stack('js')
    </body>
</html>
