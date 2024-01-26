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
              @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
          
              <form action="{{ route('login.post') }}" method="post" class="form" data-form>
                  @csrf
          
                  <div class="input-wrapper" style="display: flex; flex-direction: column; align-items: center; margin-top: 10px;">
                      <input type="email" class="form-input" placeholder="Enter Email Address" name="email" value="{{ old('email') }}">
                      <input type="password" class="form-input" placeholder="Enter Password" name="password">
                  </div>
          
                  <div style="text-align: center;">
                      <button class="form-btn" type="submit" data-form-btn style="margin-top: 10px; margin: 0 auto;">
                          <ion-icon name="paper-plane"></ion-icon>
                          <span>Login</span>
                      </button>
                  </div>
              </form>
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