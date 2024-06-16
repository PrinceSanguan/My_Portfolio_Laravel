<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prince Sanguan | Portfolio</title>

  <!--
    - favicon
  -->
  <link rel="shortcut icon" href="{{asset('images/logo.ico')}}" type="image/x-icon">

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="{{asset('css/style1.css')}}">

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

   <!-- Open Graph meta tags -->
 <meta property="og:title" content="Prince Sanguan | Portfolio" />
 <meta property="og:image" content="{{ url(asset('images/carol.jpg')) }}" />
 <meta property="og:url" content="http://prince-sanguan.free.nf/" />
 <meta property="og:site_name" content="Prince Sanguan | Portfolio" />
 <meta property="og:description" content="Prince Sanguan | Portfolio" />

 <style>
  /* Custom styles for isolated carousel */
.isolated-carousel {
    /* Add any specific styles here */
}

.isolated-carousel .carousel-inner {
    /* Additional styles for carousel inner */
}

.isolated-carousel .carousel-item {
    /* Additional styles for each carousel item */
}

.isolated-carousel .carousel-content-card {
    position: relative;
    padding: 15px;
    /* Additional styles for content card */
}

.isolated-carousel .carousel-testimonials-avatar-box {
    /* Additional styles for avatar box */
}

.isolated-carousel .carousel-image {
    max-width: 100%;
    max-height: 300px; /* Adjust height as needed */
    width: auto;
    display: block;
    margin: 0 auto;
    object-fit: contain; /* Ensures the image maintains aspect ratio */
}
 </style>


</head>

<body>
  <!--
    - #MAIN
  -->

  <main>

    <!--
      - #SIDEBAR
    -->

    @include('sidebar')

    <!--
      - #main-content
    -->

    <div class="main-content">

      <!--
        - #Project Summary
      -->

      <article class="about  active" data-page="about">

        <header>
          <h2 class="h2 article-title">{{$project->project}}</h2>
        </header>

        <section class="about-text">
          <h3 class="h3 testimonials-title text-center mb-4">Project Summary</h3>
          <p>
            {{$project->summary}}
          </p>
        </section>


        <!--
          - Project Link
        -->

        <section class="service">

          <h4 class="h4 timeline-item-title">Project Link</h4>
          <a href="{{$project->link}}">{{$project->link}}</a>

        </section>
        
        <!--
          - Project Images
        -->

        <section class="testimonials">
          <h3 class="h3 testimonials-title text-center mb-4">Project Images</h3>
      
          <div id="projectImagesCarousel" class="carousel slide isolated-carousel" data-ride="carousel">
              <div class="carousel-inner">
                  @if ($images->count() > 0)
                      @foreach ($images as $index => $image)
                          <div class="carousel-item @if ($index == 0) active @endif">
                              <div class="carousel-content-card">
                                  <figure class="carousel-testimonials-avatar-box mx-auto">
                                      <img src="{{ asset('upload-profile/' . $image->image) }}" alt="Project Image {{ $index + 1 }}" class="d-block mx-auto carousel-image">
                                  </figure>
                              </div>
                          </div>
                      @endforeach
                  @else
                      <div class="carousel-item active">
                          <div class="carousel-content-card">
                              <figure class="carousel-testimonials-avatar-box mx-auto">
                                  <p style="color: white;">No images available for this project.</p>
                              </figure>
                          </div>
                      </div>
                  @endif
              </div>
          </div>
      </section>

      <div style="text-align: center;">
        <button class="form-btn" type="submit" data-form-btn style="margin-top: 10px; margin: 0 auto;">
            <ion-icon name="paper-plane"></ion-icon>
            <a href="{{route('welcome.page')}}" style="text-decoration: none; color: inherit;">
                <span>Back to the Homepage</span>
            </a>
        </button>
     </div>

      </article>

    </div>

  </main>

  @include('footer')