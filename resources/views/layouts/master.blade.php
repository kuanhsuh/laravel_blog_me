
@include('layouts.nav')
    <main role="main" class="container">

      <div class="row">

       @yield('content')


       @include('layouts.sidebar')

      </div><!-- /.row -->

    </main><!-- /.container -->

@include('layouts.footer')
