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
  <link rel="stylesheet" href="{{asset('css/style.css')}}">

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body>

  <!--
    - #MAIN
  -->

  <main>

    <!--
      - #SIDEBAR
    -->

    <aside class="sidebar" data-sidebar>

      <div class="sidebar-info">

        <figure class="avatar-box">
          <img src="{{asset('images/prince.jpg')}}" alt="Prince E. Sanguan" width="80">
        </figure>

        <div class="info-content">
          <h1 class="name" title="Prince Sanguan">Prince Sanguan</h1>

          <p class="title">Web developer</p>
        </div>

        <button class="info_more-btn" data-sidebar-btn>
          <span>Show Contacts</span>

          <ion-icon name="chevron-down"></ion-icon>
        </button>

      </div>

      <div class="sidebar-info_more">

        <div class="separator"></div>

        <ul class="contacts-list">

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="mail-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Email</p>

              <a href="mailto:princesanguan44@gmail.com" class="contact-link">princesanguan44@gmail.com</a>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="phone-portrait-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Phone</p>

              <a href="(+63) 947-3808-046" class="contact-link">(+63) 947-3808-046</a>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="calendar-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Birthday</p>

              <time datetime="1997-04-04">April 04, 1997</time>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="location-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Location</p>

              <address>Silang, Cavite, Philippines</address>
            </div>

          </li>

        </ul>

        <div class="separator"></div>

        <ul class="social-list">

          <li class="social-item">
            <a href="https://www.facebook.com/Grandmaster1997/" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li class="social-item">
            <a href="https://github.com/PrinceSanguan" class="social-link">
              <ion-icon name="logo-github"></ion-icon>
            </a>
          </li>

          <li class="social-item">
            <a href="https://www.instagram.com/princesanguan/" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

        </ul>

      </div>

    </aside>





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
            <button class="navbar-link" data-nav-link>Blog</button>
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
                  Richard was hired to create a corporate identity. We were very pleased with the work done. She has a
                  lot of experience
                  and is very concerned about the needs of client. Lorem ipsum dolor sit amet, ullamcous cididt
                  consectetur adipiscing
                  elit, seds do et eiusmod tempor incididunt ut laborels dolore magnarels alia.
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
              <a href="https://github.com/PrinceSanguan/Job_Portal_Laravel">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="{{asset('images/project-1.png')}}" alt="finance" loading="lazy">
                </figure>

                <h3 class="project-title">Job Portal</h3>

                <p class="project-category">Full laravel PHP</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web development">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="{{asset('images/project-2.png')}}" alt="orizon" loading="lazy">
                </figure>

                <h3 class="project-title">DFA Verification System</h3>

                <p class="project-category">Web development</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web design">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="{{asset('images/project-3.jpg')}}" alt="fundo" loading="lazy">
                </figure>

                <h3 class="project-title">Fundo</h3>

                <p class="project-category">React JS</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="applications">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/project-4.png" alt="brawlhalla" loading="lazy">
                </figure>

                <h3 class="project-title">Brawlhalla</h3>

                <p class="project-category">Applications</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web design">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/project-5.png" alt="dsm." loading="lazy">
                </figure>

                <h3 class="project-title">DSM.</h3>

                <p class="project-category">React JS</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web design">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/project-6.png" alt="metaspark" loading="lazy">
                </figure>

                <h3 class="project-title">MetaSpark</h3>

                <p class="project-category">React JS</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web development">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/project-7.png" alt="summary" loading="lazy">
                </figure>

                <h3 class="project-title">Summary</h3>

                <p class="project-category">Web development</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="applications">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/project-8.jpg" alt="task manager" loading="lazy">
                </figure>

                <h3 class="project-title">Task Manager</h3>

                <p class="project-category">Applications</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web development">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/project-9.png" alt="arrival" loading="lazy">
                </figure>

                <h3 class="project-title">Arrival</h3>

                <p class="project-category">Web development</p>

              </a>
            </li>

          </ul>

        </section>

      </article>





      <!--
        - #BLOG
      -->

      <article class="blog" data-page="blog">

        <header>
          <h2 class="h2 article-title">Blog</h2>
        </header>

        <section class="blog-posts">

          <ul class="blog-posts-list">

            <li class="blog-post-item">
              <a href="#">

                <figure class="blog-banner-box">
                  <img src="./assets/images/blog-1.jpg" alt="Design conferences in 2022" loading="lazy">
                </figure>

                <div class="blog-content">

                  <div class="blog-meta">
                    <p class="blog-category">Design</p>

                    <span class="dot"></span>

                    <time datetime="2022-02-23">Fab 23, 2022</time>
                  </div>

                  <h3 class="h3 blog-item-title">Design conferences in 2022</h3>

                  <p class="blog-text">
                    Veritatis et quasi architecto beatae vitae dicta sunt, explicabo.
                  </p>

                </div>

              </a>
            </li>

            <li class="blog-post-item">
              <a href="#">

                <figure class="blog-banner-box">
                  <img src="./assets/images/blog-2.jpg" alt="Best fonts every designer" loading="lazy">
                </figure>

                <div class="blog-content">

                  <div class="blog-meta">
                    <p class="blog-category">Design</p>

                    <span class="dot"></span>

                    <time datetime="2022-02-23">Fab 23, 2022</time>
                  </div>

                  <h3 class="h3 blog-item-title">Best fonts every designer</h3>

                  <p class="blog-text">
                    Sed ut perspiciatis, nam libero tempore, cum soluta nobis est eligendi.
                  </p>

                </div>

              </a>
            </li>

            <li class="blog-post-item">
              <a href="#">

                <figure class="blog-banner-box">
                  <img src="./assets/images/blog-3.jpg" alt="Design digest #80" loading="lazy">
                </figure>

                <div class="blog-content">

                  <div class="blog-meta">
                    <p class="blog-category">Design</p>

                    <span class="dot"></span>

                    <time datetime="2022-02-23">Fab 23, 2022</time>
                  </div>

                  <h3 class="h3 blog-item-title">Design digest #80</h3>

                  <p class="blog-text">
                    Excepteur sint occaecat cupidatat no proident, quis nostrum exercitationem ullam corporis suscipit.
                  </p>

                </div>

              </a>
            </li>

            <li class="blog-post-item">
              <a href="#">

                <figure class="blog-banner-box">
                  <img src="./assets/images/blog-4.jpg" alt="UI interactions of the week" loading="lazy">
                </figure>

                <div class="blog-content">

                  <div class="blog-meta">
                    <p class="blog-category">Design</p>

                    <span class="dot"></span>

                    <time datetime="2022-02-23">Fab 23, 2022</time>
                  </div>

                  <h3 class="h3 blog-item-title">UI interactions of the week</h3>

                  <p class="blog-text">
                    Enim ad minim veniam, consectetur adipiscing elit, quis nostrud exercitation ullamco laboris nisi.
                  </p>

                </div>

              </a>
            </li>

            <li class="blog-post-item">
              <a href="#">

                <figure class="blog-banner-box">
                  <img src="./assets/images/blog-5.jpg" alt="The forgotten art of spacing" loading="lazy">
                </figure>

                <div class="blog-content">

                  <div class="blog-meta">
                    <p class="blog-category">Design</p>

                    <span class="dot"></span>

                    <time datetime="2022-02-23">Fab 23, 2022</time>
                  </div>

                  <h3 class="h3 blog-item-title">The forgotten art of spacing</h3>

                  <p class="blog-text">
                    Maxime placeat, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  </p>

                </div>

              </a>
            </li>

            <li class="blog-post-item">
              <a href="#">

                <figure class="blog-banner-box">
                  <img src="./assets/images/blog-6.jpg" alt="Design digest #79" loading="lazy">
                </figure>

                <div class="blog-content">

                  <div class="blog-meta">
                    <p class="blog-category">Design</p>

                    <span class="dot"></span>

                    <time datetime="2022-02-23">Fab 23, 2022</time>
                  </div>

                  <h3 class="h3 blog-item-title">Design digest #79</h3>

                  <p class="blog-text">
                    Optio cumque nihil impedit uo minus quod maxime placeat, velit esse cillum.
                  </p>

                </div>

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
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d199666.5651251294!2d-121.58334177520186!3d38.56165006739519!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x809ac672b28397f9%3A0x921f6aaa74197fdb!2sSacramento%2C%20CA%2C%20USA!5e0!3m2!1sen!2sbd!4v1647608789441!5m2!1sen!2sbd"
              width="400" height="300" loading="lazy"></iframe>
          </figure>
        </section>

        <section class="contact-form">

          <h3 class="h3 form-title">Contact Form</h3>

          <form action="#" class="form" data-form>

            <div class="input-wrapper">
              <input type="text" name="fullname" class="form-input" placeholder="Full name" required data-form-input>

              <input type="email" name="email" class="form-input" placeholder="Email address" required data-form-input>
            </div>

            <textarea name="message" class="form-input" placeholder="Your Message" required data-form-input></textarea>

            <button class="form-btn" type="submit" disabled data-form-btn>
              <ion-icon name="paper-plane"></ion-icon>
              <span>Send Message</span>
            </button>

          </form>

        </section>

      </article>

    </div>

  </main>






  <!--
    - custom js link
  -->
  <script src="{{asset('js/script.js')}}"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>