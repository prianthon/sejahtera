<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    @yield('title')
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('bs/css/bootstrap.min.css') }}" rel="stylesheet">
    <!--swit-->
    <link rel="stylesheet" type="text/css" href="{{ asset('sa/css/sweetalert.css') }}">
    <!-- Fonts -->
    <link href="{{ asset('fa/css/font-awesome.min.css') }}" rel='stylesheet' type='text/css'>
    <link href="{{ asset('bs/css/fontgoogleapis.css') }}" rel='stylesheet' type='text/css'>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="{{ asset('bs/css/ie10-viewport-bug-workaround.css') }}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('bs/css/navbar-fixed-top.css') }}" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="{{ asset('bs/js/ie-emulation-modes-warning.js') }}"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!--alogo text-->
          @if (Auth::guest())
          <a class="navbar-brand" href="{{ url('/') }}">BMT EL Sejahtera.</a>
          @else
          <a class="navbar-brand" href="{{ url('dashboard') }}">BMT EL Sejahtera.</a>
          @endif
          <!--zlogo text-->
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            @yield('menunavbar')
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <!-- Authentication Links -->
            @if (Auth::guest())
                <li><a href="{{ url('/login') }}">Masuk</a></li>
                <!--<li><a href="{{ url('/register') }}">Daftar</a></li>-->
            @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Keluar</a></li>
                    </ul>
                </li>
            @endif
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
      @yield('content')
    </div> <!-- /container -->
    @include('Alerts::show')

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ asset('bs/js/jquery.min.js') }}"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="{{ asset('bs/js/214/jquery.min.js') }}"></script>
    <script src="{{ asset('bs/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('sa/js/sweetalert.js') }}"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="{{ asset('bs/js/ie10-viewport-bug-workaround.js') }}"></script>
  </body>
</html>
