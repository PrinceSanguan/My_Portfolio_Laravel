@include('header')

<main>

    @include('sidebar')

    <div class="main-content">

        <article class="about active" data-page="about">

            <header style="text-align: center;">
                <h2 class="h2 article-title">Your message is Sent!</h2>
            </header>

            <section class="about-text">

              @if(session('success'))
                    <p style="color: aliceblue; font-size: 3rem; text-align: center;">{{ session('success') }}</p>
                @endif 

              <br>
          
              <div style="text-align: center;">
                  <button class="form-btn" type="submit" data-form-btn style="margin-top: 10px; margin: 0 auto;">
                      <ion-icon name="paper-plane"></ion-icon>
                      <a href="{{url('/')}}" style="text-decoration: none; color: inherit;">
                          <span>Back to the Homepage</span>
                      </a>
                  </button>
              </div>

          </section>

        </article>

    </div>

</main>

@include('footer')