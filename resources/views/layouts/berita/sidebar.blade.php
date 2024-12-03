<div class="sidenav-menu">
    <a href="index.html" class="logo">
        <span class="logo-light">
            <span class="logo-lg"><img src="{{asset('berita')}}/images/logo_pertanian.png" alt="logo"></span>
            <span class="logo-sm"><img src="{{asset('berita')}}/images/logo-sm.png" alt="small logo"></span>
        </span>

        <span class="logo-dark">
            <span class="logo-lg"><img src="{{asset('berita')}}/images/logo_pertanian.png" alt="dark logo"></span>
            <span class="logo-sm"><img src="{{asset('berita')}}/images/logo-sm.png" alt="small logo"></span>
        </span>
    </a>

    <!-- Sidebar Hover Menu Toggle Button -->
    <button class="button-sm-hover">
        <i class="ti ti-circle align-middle"></i>
    </button>

    <!-- Full Sidebar Menu Close Button -->
    <button class="button-close-fullsidebar">
        <i class="ti ti-x align-middle"></i>
    </button>

    <div data-simplebar>

        <!--- Sidenav Menu -->
        <ul class="side-nav">
            <li class="side-nav-title">Dashboard</li>
            <li class="side-nav-item">
                <a href="{{route('berita.dashboard')}}" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-dashboard"></i></span>
                    <span class="menu-text"> Home </span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="{{route('index')}}" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-dashboard"></i></span>
                    <span class="menu-text"> Dashboard Surat </span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="/" class="side-nav-link" target="_blank">
                    <span class="menu-icon"><i class="ti ti-home"></i></span>
                    <span class="menu-text"> Halaman Depan </span>
                </a>
            </li>
            <li class="side-nav-title mt-2">Management Berita</li>
            <li class="side-nav-item">
                <a href="{{route('backend.berita.index')}}" class="side-nav-link">
                    <span class="menu-icon">
                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-news"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M16 6h3a1 1 0 0 1 1 1v11a2 2 0 0 1 -4 0v-13a1 1 0 0 0 -1 -1h-10a1 1 0 0 0 -1 1v12a3 3 0 0 0 3 3h11" /><path d="M8 8l4 0" /><path d="M8 12l4 0" /><path d="M8 16l4 0" /></svg>
                    </span>
                    <span class="menu-text"> Berita </span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="{{route('berita.kategori')}}" class="side-nav-link">
                    <span class="menu-icon">
                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-category-2"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 4h6v6h-6z" /><path d="M4 14h6v6h-6z" /><path d="M17 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" /><path d="M7 7m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" /></svg>
                    </span>
                    <span class="menu-text"> Kategori </span>
                </a>
            </li>


            <li class="side-nav-title mt-2">Management Profile Web</li>
            <li class="side-nav-item">
                <a href="{{route('backend.visimisi.index')}}" class="side-nav-link">
                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-article"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 4m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" /><path d="M7 8h10" /><path d="M7 12h10" /><path d="M7 16h10" /></svg>
                    <span class="menu-text"> Visi & Misi </span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="{{route('backend.agenda.index')}}" class="side-nav-link">
                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-calendar"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z" /><path d="M16 3v4" /><path d="M8 3v4" /><path d="M4 11h16" /><path d="M11 15h1" /><path d="M12 15v3" /></svg>
                    <span class="menu-text"> Agenda </span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="{{route('backend.silder.index')}}" class="side-nav-link">
                    <span class="menu-icon">
                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-photo-spark"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 8h.01" /><path d="M12 21h-6a3 3 0 0 1 -3 -3v-12a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v6" /><path d="M3 16l5 -5c.928 -.893 2.072 -.893 3 0l3.993 3.993" /><path d="M14 14l1 -1c.47 -.452 .995 -.675 1.52 -.67" /><path d="M19 22.5a4.75 4.75 0 0 1 3.5 -3.5a4.75 4.75 0 0 1 -3.5 -3.5a4.75 4.75 0 0 1 -3.5 3.5a4.75 4.75 0 0 1 3.5 3.5" /></svg>
                    </span>
                    <span class="menu-text"> Slider </span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="{{route('backend.profile.index')}}" class="side-nav-link">
                    <span class="menu-icon">
                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-file-cv"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /><path d="M11 12.5a1.5 1.5 0 0 0 -3 0v3a1.5 1.5 0 0 0 3 0" /><path d="M13 11l1.5 6l1.5 -6" /></svg>
                    </span>
                    <span class="menu-text"> Profile </span>
                </a>
            </li>



        </ul>
        <div class="clearfix"></div>
    </div>
</div>
