@include('header')
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
        - #NAVBAR
      -->

      <nav class="navbar">

        <ul class="navbar-list">

          <li class="navbar-item">
            <button class="navbar-link  active" data-nav-link>About</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Resume</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Portfolio</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Contact</button>
          </li>

        </ul>

      </nav>





      <!--
        - #ABOUT
      -->

      <article class="about  active" data-page="about">

        <header>
          <h2 class="h2 article-title">About me</h2>
        </header>

        <section class="about-text">
          <p>
            I'm Creative Director and UI/UX Designer from Sydney, Australia, working in web development and print media.
            I enjoy
            turning complex problems into simple, beautiful and intuitive designs.
          </p>

          <p>
            My job is to build your website so that it is functional and user-friendly but at the same time attractive.
            Moreover, I
            add personal touch to your product and make sure that is eye-catching and easy to use. My aim is to bring
            across your
            message and identity in the most creative way. I created web design for many famous brand companies.
          </p>
        </section>


        <!--
          - service
        -->

        <section class="service">

          <h3 class="h3 service-title">What i'm doing</h3>

          <ul class="service-list">

            <li class="service-item">

                <div class="service-icon-box">
                  <img src="{{asset('images/icon-photo.svg')}}" alt="camera icon" width="40">
                </div>
  
                <div class="service-content-box">
                  <h4 class="h4 service-item-title">Editing Videos</h4>
  
                  <p class="service-item-text">
                    I make high-quality editing videos of any category at a professional level.
                  </p>
                </div>
  
              </li>

            <li class="service-item">

              <div class="service-icon-box">
                <img src="{{asset('images/icon-dev.svg')}}" alt="Web development icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">Web development</h4>

                <p class="service-item-text">
                  High-quality development of sites at the professional level.
                </p>
              </div>

            </li>

          </ul>

        </section>


        <!--
          - testimonials
        -->

        <section class="testimonials">

          <h3 class="h3 testimonials-title">Testimonials</h3>

          <ul class="testimonials-list has-scrollbar">

            <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="{{asset('images/johnpaul.jpg')}}" alt="John Paul Aquino" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>John Paul Aquino</h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>
                    Magaling sa pagbuo ng dynamic website at pagpapaseguro laban sa mga hacker. Ang trabaho ay maayos at mabilis. Lubos kong iniendorso ang kanyang serbisyo para sa online security.
                  </p>
                </div>

              </div>
            </li>

            <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="{{asset('images/sems.jpg')}}" alt="Dionisio Samillano" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>Dionisio Samillano</h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>
                    "I had the pleasure of collaborating with Prince on a 
                    critical project for our startup. What stood out the most was Prince's 
                    comprehensive approach to web development. His proficiency in PHP Laravel, 
                    coupled with their ability to seamlessly integrate secure frontend solutions, 
                    made a significant impact on the success of our website. Prince is not just 
                    a developer; He are a security-focused architect who goes the extra mile to 
                    fortify digital assets. 
                    I am incredibly satisfied with the results and would recommend Prince without hesitation."
                  </p>
                </div>

              </div>
            </li>

            <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="{{asset('images/jeffranie.jpg')}}" alt="Jeffranie Etulle" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>Jeffranie Etulle</h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>
                    Securing our online store was a top priority, and Prince 
                    exceeded our expectations. His dual expertise in PHP Laravel 
                    for backend functionality and frontend design brought a perfect 
                    balance to our e-commerce platform. Prince's attention to 
                    security details, from encryption to robust authentication systems, 
                    made us feel confident in the reliability of our website. 
                    The collaboration was smooth, and Prince delivered a 
                    secure and visually appealing website that has positively 
                    impacted our online business. If you're looking for a Laravel 
                    developer who values security as much as design, Prince 
                    is the right choice.
                  </p>
                </div>

              </div>
            </li>

            <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="{{asset('images/rizza.jpg')}}" alt="Rizza Mae Granada" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>Rizza Mae Granada</h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>
                    Prince is talented developer. He is my recommended!
                  </p>
                </div>

              </div>
            </li>

          </ul>

        </section>


        <!--
          - testimonials modal
        -->

        <div class="modal-container" data-modal-container>

          <div class="overlay" data-overlay></div>

          <section class="testimonials-modal">

            <button class="modal-close-btn" data-modal-close-btn>
              <ion-icon name="close-outline"></ion-icon>
            </button>

            <div class="modal-img-wrapper">
              <figure class="modal-avatar-box">
                <img src="{{asset('images/avatar-1.png')}}" alt="Daniel lewis" width="80" data-modal-img>
              </figure>

              <img src="{{asset('images/icon-quote.svg')}}" alt="quote icon">
            </div>

            <div class="modal-content">

              <h4 class="h3 modal-title" data-modal-title>Daniel lewis</h4>

              <time datetime="2021-06-14">14 June, 2021</time>

              <div data-modal-text>
                <p>

                </p>
              </div>

            </div>

          </section>

        </div>

      </article>





      <!--
        - #RESUME
      -->

      <article class="resume" data-page="resume">

        <header>
          <h2 class="h2 article-title">Resume</h2>
        </header>

        <section class="timeline">

          <div class="title-wrapper">
            <div class="icon-box">
              <ion-icon name="book-outline"></ion-icon>
            </div>

            <h3 class="h3">Education</h3>
          </div>

          <ol class="timeline-list">

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Rizal Technological University</h4>

              <span>Bachelor of Science in Statistics 2013 — 2017 (Graduated)</span>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Mataas na Paaralang Neptali A. Gonzales</h4>

              <span>Secondary School 2009 — 2013 (Graduated)</span>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Nueve De Pebrero Elementary School</h4>

              <span>Primary School 2009 — 2013 (Graduated)</span>

            </li>

          </ol>

        </section>

        <section class="timeline">

          <div class="title-wrapper">
            <div class="icon-box">
              <ion-icon name="book-outline"></ion-icon>
            </div>

            <h3 class="h3">Experience</h3>
          </div>

          <ol class="timeline-list">

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Administrative Officer</h4>
              <h5 class="h5 timeline-item-title">Department of Foreign Affairs</h5>

              <span>January 2020 — Present</span>

              <p class="timeline-text">
                •	Developing an Office Verification System to streamline our verification process and enhance overall efficiency within the office. <br>
                •	Optimizing the legacy source code of our program to enhance efficiency in the current era of advanced technology. <br>
                •	Stay informed about relevant laws and regulations affecting departmental operations. 
              </p>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Encoder</h4>
              <h5 class="h5 timeline-item-title">DBP Service Corporation</h5>
              <span>June 2019 — December 2019</span>

              <p class="timeline-text">
                •	Ensuring the precise and error-free entry of vital applicant information into the passport database. Maintained a high level of accuracy while meeting strict 
                deadlines, contributing to streamlined processes and exceptional service delivery. <br>
                •	Entrusted with safeguarding the integrity of crucial applicant data on passports. Demonstrated meticulous attention to detail and adherence to strict data security protocols, maintaining a flawless record of error-free data entry throughout tenure.
              </p>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Administrative Aide</h4>
              <h5 class="h5 timeline-item-title">Municipality of Silang, Cavite</h5>

              <span>February 2019 — May 2019</span>

              <p class="timeline-text">
                •	Proficient in executing a wide array of clerical tasks within a dynamic office environment. Demonstrates adeptness in performing light bookkeeping duties, ensuring accurate financial records. <br>
                •	Efficiently coordinates with various departments to facilitate seamless communication and smooth workflow. Possesses a proactive approach to task completion and exhibits a strong sense of responsibility in handling any assigned duties.
              </p>

            </li>

          </ol>

        </section>

      </article>

      <!--
        - #PORTFOLIO
      -->

  {{--     Web design == React JS
      Application == Core PHP
      Web Development == PHP Laravel --}}

      <article class="portfolio" data-page="portfolio">

        <header>
          <h2 class="h2 article-title">Portfolio</h2>
        </header>

        <section class="projects">

          <div class="filter-select-box">

            <p class="filter-select" data-select>

            </p>

          </div>

          <ul class="project-list">

            <li class="project-item  active" data-filter-item data-category="web development">
              <a href="https://github.com/PrinceSanguan/Job_Portal_Laravel" target="_blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="{{asset('images/project-1.png')}}" alt="finance" loading="lazy">
                </figure>

                <h3 class="project-title">Job Portal</h3>

                <p class="project-category">Full Laravel PHP</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web development">
              <a href="https://github.com/PrinceSanguan/DFA_Releasing_Verification" target="_blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="{{asset('images/project-2.png')}}" alt="orizon" loading="lazy">
                </figure>

                <h3 class="project-title">DFA Releasing System</h3>

                <p class="project-category">Full Core PHP</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web design">
              <a href="https://github.com/PrinceSanguan/chess_blog" target="_blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="{{asset('images/project-3.png')}}" alt="fundo" loading="lazy">
                </figure>

                <h3 class="project-title">Blog Website</h3>

                <p class="project-category">Full Core PHP</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="applications">
              <a href="https://github.com/PrinceSanguan/firstReact" target="_blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="{{asset('images/project-4.png')}}" alt="brawlhalla" loading="lazy">
                </figure>

                <h3 class="project-title">Netflix Clone Inspired</h3>

                <p class="project-category">Full React JS</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web design">
              <a href="https://github.com/PrinceSanguan/Wedding_Laravel" target="_blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="{{asset('images/project-5.png')}}" alt="dsm." loading="lazy">
                </figure>

                <h3 class="project-title">Wedding Website</h3>

                <p class="project-category">Full Laravel PHP</p>

              </a>
            </li>

          </ul>

        </section>

      </article>

      <!--
        - #CONTACT
      -->

      <article class="contact" data-page="contact">

        <header>
          <h2 class="h2 article-title">Contact</h2>
        </header>

        <section class="mapbox" data-mapbox>
          <figure>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d123767.78884801056!2d120.90655520712271!3d14.209797366375923!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d5fead78983f%3A0x1ef1f6de9b810218!2sBayan%20ng%20Silang%2C%20Cavite!5e0!3m2!1sfil!2sph!4v1705922079164!5m2!1sfil!2sph" width="400" height="300" loading="lazy"></iframe>
          </figure>
        </section>

        <section class="contact-form">

          <h3 class="h3 form-title">Contact Form</h3>

          <form action="{{ route('get.message') }}" method="post" class="form" data-form>
            @csrf
        
            <div class="input-wrapper">
                <input type="text" name="name" class="form-input @error('name') is-invalid @enderror" placeholder="Full name" data-form-input value="{{ old('name') }}">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                @enderror
        
                <input type="email" name="email" class="form-input @error('email') is-invalid @enderror" placeholder="Email address" data-form-input value="{{ old('email') }}">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                @enderror
            </div>
        
            <textarea name="message" class="form-input @error('message') is-invalid @enderror" placeholder="Your Message" data-form-input>{{ old('message') }}</textarea>
            @error('message')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
            @enderror
        
            <div class="captcha" style="display: flex; flex-direction: column; align-items: center; margin-top: 10px;">
                <span style="display: inline-block;">{!! captcha_img('math') !!}</span>
                <button type="button" class="btn btn-danger reload" id="reload" style="font-size: 3em; color: white; margin-top: 10px;">
                    &#x21bb;
                </button>
            </div>
        
            <div class="input-wrapper" style="display: flex; flex-direction: column; align-items: center; margin-top: 10px;">
                <input type="text" class="form-input @error('captcha') is-invalid @enderror" placeholder="Enter Captcha" name="captcha">
                @error('captcha')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                @enderror
            </div>
        
            <button class="form-btn" type="submit" data-form-btn style="margin-top: 10px;">
                <ion-icon name="paper-plane"></ion-icon>
                <span>Send Message</span>
            </button>
        </form>
        

        </section>

      </article>

    </div>

  </main>

  <script>
    // For Captcha Logic
$("#reload").click(function () {
    $.ajax({
        type: 'GET',
        url: "/reload-captcha", // Update the URL to include the correct base URL
        success: function (data) {
            $(".captcha span").html(data.captcha);
        },
        error: function (xhr, textStatus, errorThrown) {
            console.error("Error reloading captcha:", textStatus, errorThrown);
        },
    });
});

  </script>

  @include('footer')