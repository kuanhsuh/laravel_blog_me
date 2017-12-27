
@include('layouts.nav')
    <main role="main" class="container">

      <div class="row">
      @if ($flash = session('message'))
        <div id="flash-message" class="alert alert-success alert-dismissible fade show" role="alert">
          {{ @flash }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      @endif

       @yield('content')


       @include('layouts.sidebar')

      </div><!-- /.row -->

    </main><!-- /.container -->

@include('layouts.footer')
