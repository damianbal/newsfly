<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Material Design for Bootstrap fonts and icons -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">

  <!-- Material Design for Bootstrap CSS -->
  <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css"
    integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ"
    crossorigin="anonymous">

  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <link rel="stylesheet" href="{{ secure_asset('css/styles.css') }}">

  <title>Newsfly Dashboard - @yield('title_head', '')</title>

  <style>
    body {
      background: rgb(245, 245, 245);
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark navbg">
    <a class="navbar-brand" href="#"><i class="far fa-newspaper"></i> Newsfly</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
      aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('home') }}">Home</a>
        </li>
        @guest
        <li class="nav-item">
          <a class="nav-link" href="{{ route('sign-up') }}">Sign Up</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('sign-in') }}">Sign In</a>
        </li>
        @endguest @auth
        <li class="nav-item">
          <a class="nav-link" href="{{ route('dashboard-index') }}">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('sign-out') }}">Sign out ({{ Auth::user()->name }})</a>
        </li>
        @endauth
      </ul>
    </div>
  </nav>



  <div class="container mt-3">
    <div class="row">
      <div class="col-12">
        @if(Session::has('messages'))
        <div class="alert alert-primary" role="alert">

          @foreach(Session::get('messages') as $message) {{ $message }} @endforeach

        </div>
        @endif @if ($errors->any())
        <div class="alert alert-danger" role="alert">

          @foreach ($errors->all() as $error) {{ $error }} @endforeach

        </div>
        @endif
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <h5 class="card-header">
            @yield('title', 'Title')
          </h5>
          <div class="card-body">
            @yield('content')
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U"
    crossorigin="anonymous"></script>
  <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9"
    crossorigin="anonymous"></script>
  <script>
    $(document).ready(function() { $('body').bootstrapMaterialDesign(); });
  </script>
  <script>
    $(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
  </script>
</body>

</html>