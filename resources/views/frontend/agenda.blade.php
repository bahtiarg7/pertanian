@extends('frontend.layouts.app', [
    'title' => 'Agenda',
])

@section('content')
<!-- Hero -->
<section class="container-fluid py-5 mt-4 px-sm-4 px-md-5">
    <div class="bg-dark rounded-5 position-relative overflow-hidden py-5 px-3 px-sm-4 px-xl-5 mt-2 mx-md-n3 mx-lg-auto" style="max-width: 1660px;" data-bs-theme="dark">
        <div data-role="content" style="width: 100%; padding: 0;">
            <!-- Instagram embed block: set width to 100% -->
            <blockquote class="instagram-media" 
                        data-instgrm-permalink="https://www.instagram.com/distankabbekasi/" 
                        data-instgrm-version="12" 
                        style="width: 100%; max-width: 100%; margin: 0 auto;">
                <a href="https://www.instagram.com/distankabbekasi/"></a>
            </blockquote>
            <script async src="https://www.instagram.com/embed.js"></script>
        </div>
    </div>
  </section>
@endsection