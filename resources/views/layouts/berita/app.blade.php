<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>{{config('app.name')}} | {{$title}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Website dinas Pertanian Kabupaten bekasi." name="dinas pertanian" />
    <meta content="{{config('app.name')}}" name="{{config('app.name')}}" />
    <link rel="shortcut icon" href="{{asset('berita/images/favicon.ico')}}">
    <script src="{{asset('berita/js/config.js')}}"></script>
    {{-- <link rel="stylesheet" href="{{asset('berita/vendor/gridjs/theme/mermaid.min.css')}}"> --}}
    <link href="{{asset('berita')}}/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">

    <link href="{{asset('berita/css/vendor.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{asset('berita/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />
    <link href="{{asset('berita/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>

    <div class="wrapper">
        @include('sweetalert::alert')
        @include('layouts.berita.sidebar')
        @include('layouts.berita.header')
        <div class="page-content">
            <div class="page-container">
                @yield('content')
        </div>
        </div>

        @include('layouts.berita.footer')
    </div>
    <script src="{{asset('berita')}}/js/vendor.min.js"></script>
    <script src="{{asset('berita')}}/js/app.js"></script>
    {{-- <script src="{{asset('berita')}}/vendor/gridjs/gridjs.umd.js"></script>
    <script src="{{asset('berita')}}/js/pages/table-gridjs.js"></script> --}}
    <script src="{{asset('berita')}}/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="{{asset('berita')}}/datatable/js/jquery.dataTables.min.js"></script>
	<script src="{{asset('berita')}}/datatable/js/dataTables.bootstrap5.min.js"></script>
    <script>
		$(document).ready(function() {
			$('#example').DataTable();
		  } );
	</script>
    @stack('js')
</body>
</html>
