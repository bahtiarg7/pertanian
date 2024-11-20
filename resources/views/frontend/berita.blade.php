@extends('frontend.layouts.app', [
    'title' => 'Berita',
])

@section('content')
    <!-- Page container -->
    <div class="container pt-5 pb-lg-5 pb-md-4 pb-2 my-5">
        
        <!-- Breadcrumb -->
        {{-- <nav aria-label="breadcrumb">
          <ol class="pt-lg-3 pb-lg-4 pb-2 breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Blog grid with sidebar</li>
          </ol>
        </nav> --}}

        <div class="row mb-md-2 mb-xl-4">

          <!-- Blog posts -->
          <div class="col-lg-9 col-xl-8 pe-lg-4 pe-xl-0">
            <h1 class="pb-3 pb-lg-4">BERITA</h1>
            <div class="masonry-grid mb-2 mb-md-4 pb-lg-3" data-columns="2">

              @foreach ($news as $item)
            <!-- Post -->
              <article class="masonry-grid-item">
                <div class="card border-0 bg-secondary">
                  <div class="card-body pb-4">
                    <div class="d-flex align-items-center mb-4 mt-n1">
                      {{-- <span class="fs-sm text-body-secondary">9 hours ago</span> --}}
                      <span class="fs-sm text-body-secondary">{{$item->created_at}}</span>
                      <span class="fs-xs opacity-20 mx-3">|</span>
                      <a class="badge text-nav fs-xs border" href="#">{{$item->kategori->name}}</a>
                    </div>
                    <h3 class="h4 card-title">
                      <a href="blog-single-v1.html">{{$item->judul}}</a>
                    </h3>
                    <p class="card-text">{{ \Illuminate\Support\Str::limit($item->deskripsi, 100) }}</p>
                  </div>
                  <div class="card-footer pt-3">
                    <a class="d-flex align-items-center text-decoration-none pb-2" href="#">
                      <img class="rounded-circle" src="assets/img/avatar/05.jpg" width="48" alt="Post author">
                      <h6 class="ps-3 mb-0">Darlene Robertson</h6>
                    </a>
                  </div>
                </div>
              </article>
              @endforeach
            </div>

            <!-- Pagination -->
            <div class="row gy-3 align-items-center">
              {{-- <div class="col col-md-4 col-6 order-md-1 order-1">
                <div class="d-flex align-items-center">
                  <span class="text-body-secondary fs-sm">Show</span>
                  <select class="form-select form-select-flush w-auto">
                    <option value="6">6</option>
                    <option value="9">9</option>
                    <option value="12">12</option>
                    <option value="24">24</option>
                  </select>
                </div>
              </div> --}}
              {{-- <div class="col col-md-4 col-12 order-md-2 order-3 text-center">
                <button class="btn btn-primary w-md-auto w-100" type="button">Load more posts</button>
              </div> --}}
              <div class="col col-md-4 col-6 order-md-3 order-2">
                {{-- <nav aria-label="Page navigation">
                  <ul class="pagination pagination-sm justify-content-end">
                    <li class="page-item active" aria-current="page">
                      <span class="page-link">1<span class="visually-hidden">(current)</span></span>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                  </ul>
                </nav> --}}
                {{-- {{ $news->links() }} --}}
                {{ $news->links('vendor.pagination.custom') }}
              </div>
            </div>
          </div>


          <!-- Sidebar (offcanvas on sreens < 992px) -->
          <aside class="col-lg-3 offset-xl-1">
            <div class="offcanvas-lg offcanvas-end" id="sidebarBlog">
              <div class="offcanvas-header">
                <h4 class="offcanvas-title">Sidebar</h4>
                <button class="btn-close ms-auto" type="button" data-bs-dismiss="offcanvas" data-bs-target="#sidebarBlog" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body">

                <!-- Search box -->
                {{-- <div class="position-relative mb-4 mb-lg-5">
                  <i class="ai-search position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                  <input class="form-control ps-5" type="search" placeholder="Enter keyword">
                </div> --}}

                <!-- Category links -->
                <h4 class="pt-1 pt-lg-0 mt-lg-n2">Categories:</h4>
                <ul class="nav flex-column mb-lg-5 mb-4">
                  @foreach ($categories as $item)
                  <li class="mb-2">
                    <a class="nav-link d-flex p-0 active" href="#">
                      {{$item->name}}
                      <span class="fs-sm text-body-secondary ms-2">({{$item->used_count}})</span>
                    </a>
                  </li>
                  @endforeach
                </ul>
              </div>
            </div>
          </aside>
        </div>
      </div>
      

      <!-- Sidebar toggle button -->
      <button class="d-lg-none btn btn-sm fs-sm btn-primary w-100 rounded-0 fixed-bottom" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarBlog">
        <i class="ai-layout-column me-2"></i>
        Sidebar
      </button>
@endsection