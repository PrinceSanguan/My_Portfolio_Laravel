@include('header')

<main>

    @include('sidebar')

    <div class="main-content">

        <article class="about active" data-page="about">

            <header style="text-align: center;">
                <h2 class="h2 article-title">Dashboard</h2>
            </header>

            <section class="about-text">

              <br>

              <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover text-center">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Message</th>
                                <th>Email Address</th>
                                <th>Submitted By</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($informations)
                                @foreach ($informations as $information)
                                    <tr>
                                        <td>{{ $information->name }}</td>
                                        <td>{{ $information->message }}</td>
                                        <td>{{ $information->email }}</td>
                                        <td>{{ $information->created_at }}</td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="4" class="text-center">No information available</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>

              <form action="{{ route('logout') }}" method="post">
                @csrf
                <div style="text-align: center;">
                    <button class="form-btn" type="submit" data-form-btn style="margin-top: 10px; margin: 0 auto;">
                        <ion-icon name="paper-plane"></ion-icon>
                            <span>Logout</span>
                    </button>
                </div>
              </form>

          </section>

        </article>

    </div>

</main>

@include('footer')
