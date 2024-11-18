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
      @stack('js')
    </body>
</html>
