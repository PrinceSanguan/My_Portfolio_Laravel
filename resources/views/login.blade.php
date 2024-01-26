@include('header')

<main>

    @include('sidebar')

    <div class="main-content">

        <article class="about active" data-page="about">

            <header style="text-align: center;">
                <h2 class="h2 article-title">Prince Login Page</h2>
            </header>

            <section class="about-text">

              <br>
          
              <form action="" method="post" class="form" data-form>
                @csrf
            
                <div class="input-wrapper" style="display: flex; flex-direction: column; align-items: center; margin-top: 10px;">
                    <input type="email" class="form-input" placeholder="Enter Email Address" name="email">
                    <input type="password" class="form-input" placeholder="Enter Password" name="password">
                </div>
            
                <div style="text-align: center;">
                  <button class="form-btn" type="submit" data-form-btn style="margin-top: 10px; margin: 0 auto;">
                      <ion-icon name="paper-plane"></ion-icon>
                      <span>Login</span>
                  </button>
                </div>
            </form>

          </section>

        </article>

    </div>

</main>

@include('footer')