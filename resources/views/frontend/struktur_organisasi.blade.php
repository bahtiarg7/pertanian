
@extends('frontend.layouts.app', [
    'title' => 'Visi Misi',
])

@section('content')
    <!-- Hero -->
    <section class="container-fluid py-5 mt-4 px-sm-4 px-md-5 mt-5">
        <div class="bg-dark rounded-5 position-relative overflow-hidden py-5 px-3 px-sm-4 px-xl-5 mt-2 mx-md-n3 mx-lg-auto" style="max-width: 1660px;" data-bs-theme="dark">
          <div class="jarallax position-absolute top-0 start-0 w-100 h-100 mt-5" data-jarallax data-speed="0.6">
            <div class="jarallax-img position-absolute w-100 h-100" style="background-image: url({{asset('frontend')}}/img/landing/web-studio/hero-wave.png);"></div>
          </div>
          <div class="bg-white position-absolute top-0 start-0 w-100 h-100" style="opacity: 2%;"></div>
          <div class="container position-relative z-2 pt-xl-4 pt-xxl-5 pb-sm-2">
            <div class="row pt-md-3 pt-lg-5">
              <div class="col-lg-6 col-xxl-5 pb-lg-5 mb-xl-5">
                <h1 class="display-1 text-center text-lg-start mb-xxl-5"><span class="text-primary"></span></h1>
              </div>
              <div class="col-lg-5 col-xl-4 offset-lg-1 offset-xxl-2 d-flex flex-column pt-2 pt-md-4">
                <h1 class="display-1 text-center text-lg-start mb-xxl-5"><span class="text-primary"></span></h1>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="container-fluid py-5 px-sm-4 px-md-5">
        <h4 class="mt-3 text-center">Judul</h4>
        {{-- <p class="text-center text-muted"><strong>Tanggal Berita: </strong>29 November 2024</p> --}}
        <p class="mt-2">What is Lorem Ipsum?
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
          
          Why do we use it?
          It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
          
          
          Where does it come from?
          Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
          
          The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
          
          Where can I get some?
          There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
      </section>
@endsection
