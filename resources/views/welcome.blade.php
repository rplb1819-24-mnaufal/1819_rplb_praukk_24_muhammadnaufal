<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hidieaki Hitori</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ ('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">

        
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Pricing</a>
                </li>
                @if (Route::has('login'))
                    <li class="nav-item">
                            @auth
                                <a class="nav-link" href="{{ url('/home') }}">Home</a>
                            @else
                                <a class="nav-link" href="{{ route('login') }}">Login</a>
                                @if (Route::has('register'))
                                
                                <li class="nav-item">
                                    <a class="nav-link inline" href="{{ route('register') }}">Register</a>
                                </li>
                                @endif
                            @endauth
                    </li>
                @endif
              </ul>
            </div>
          </nav>
          <script type="text/javascript" src="{{asset("=js/bootstrap.min.js") }}"></script>
    </body>
</html>
