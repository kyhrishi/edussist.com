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

    <title>Eduasist</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
    <style type="text/css" media="screen">
    body { padding-top: 35px; } 
    .navbar-brand { color : 'orange';}
    </style>
        <!-- Bootstrap core JavaScript-->
    <script src="{{url('assets/js/jquery.min.js')}}"></script>
    <script src="{{url('assets/js/bootstrap.min.js')}}"></script>
 
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{url('home')}}" style="color:orange;">Eduasist</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li @if(isset($active) && $active == 'users')class="active"@endif><a href="{{url('users')}}">Users</a></li>
            <li @if(isset($active) && $active == 'institute')class="active"@endif><a href="{{url('institute')}}">Institute</a></li>
            <li @if(isset($active) && $active == 'faculty')class="active"@endif><a href="{{url('faculty')}}">Faculty</a></li>
            <li @if(isset($active) && $active == 'students')class="active"@endif><a href="{{url('students')}}">Students</a></li>
          </ul>
          <ul class="nav navbar-nav pull-right">
            <li class="dropdown dropdown-invers">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button">{{Auth::user()->email}}<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="{{url('/auth/logout')}}">Logout&nbsp;<span class="glyphicon glyphicon-off"></span></a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

      @yield('main_content')

    </div><!-- /.container -->


 </body>
</html>
