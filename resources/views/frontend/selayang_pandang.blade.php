@extends('frontend.layouts.app', [
    'title' => 'Selayang Pandang',
])

@section('content')
    <!-- Gallery -->
    <section class="container py-5 my-lg-3 my-xl-4 my-xxl-5 mt-5">
        <div class="text-center pt-sm-2 pt-md-4 pt-lg-3 pt-xl-4 pb-3 mx-auto mb-3 mb-lg-4" style="max-width: 720px;">
          <h2 class="h1 pt-1 pt-sm-2">Selayang Pandang</h2>
          {{-- <p class="mb-0">Turpis nullam netus sed aliquam consectetur at felis consequat tincidunt orci varius arcu urna neque eget maecenas consequat lacus habitasse adipiscing.</p> --}}
        </div>
        <div class="row g-4 mb-3 mb-xl-0 pb-sm-2 pb-md-4 pb-xl-5">
          <div class="col-md-5 col-lg-4 order-md-1">
            <div class="card border-0 h-100 bg-size-cover bg-position-top-center" style="min-height: 280px; background-image: url({{asset('frontend')}}/img/landing/product/gallery/01.jpg);"></div>
          </div>
          <div class="col-md-7 col-lg-8 order-md-2">
            <div class="card border-0 bg-secondary h-100 px-xl-4 pb-sm-2 pb-xl-4">
              {{-- <img class="d-block mx-auto" src="{{ asset('frontend') }}/img/landing/product/gallery/03.png" width="408" alt="Image"> --}}
              <div class="card-body">
                <h3>Eco-friendly made from recycled plastic</h3>
                <p class="card-text">Turpis nullam netus sed aliquam at felis ante ipsum in consequat tincidunt orci varius arcu urna neque maecenas consequat lacus malesuada habitasse or adipiscing in lacus ipsum or natoque tincidunt arcu uter cursus et quam odio amet urna neque eget.</p>
              </div>
            </div>
          </div>
          {{-- <div class="col-md-5 col-lg-4 order-md-4">
            <div class="card border-0 h-100 bg-size-cover bg-position-center" style="min-height: 280px; background-image: url(assets/img/landing/product/gallery/02.jpg);"></div>
          </div> --}}
          {{-- <div class="col-md-7 col-lg-8 order-md-3">
            <div class="card border-0 bg-secondary h-100">
              <div class="row g-0">
                <div class="col-lg-6">
                  <img class="d-block" src="{{ asset('frontend') }}/img/landing/product/gallery/04.png" width="377" alt="Image">
                </div>
                <div class="col-lg-6 align-self-center mt-n4 mt-lg-0">
                  <div class="card-body">
                    <h3>Headphones for sports, for life, for pleasure</h3>
                    <p class="card-text">Donec urna, sed molestie tincidunt elit nunc pellentesque ipsum purus a turpis elementum augue magna hendrerit bibendum morbi elementum non egestas in nec donec sit magna amet et mauris nisl suscipit urna in morbi sit elementum venenatis.</p>
                  </div>
                </div>
              </div>
            </div>
          </div> --}}
        </div>
      </section>
@endsection