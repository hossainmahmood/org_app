<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width ini, initial-scale=1">        
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="{{ asset('js/app.js') }}" ></script>  
        <!--<script src="{{ asset('js/jquery.min.js') }}" ></script> 
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" /> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
        <link href="{{ asset('css/footercss.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/navigationcustom.css') }}" rel="stylesheet" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"/>        
        <title>@yield('title')</title>
    </head>

    <body>
   
        <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>                        
                        </button>
                        <a class="navbar-brand" href="{{ route('home') }}">IT Home</a>
                    </div>

                    <div class="collapse navbar-collapse" id="myNavbar" >
                        <ul class="nav navbar-nav">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="#section2">Instructors</a></li>
                            <li><a href="#section3">Subjects</a></li>
                            <li><a href="#section4">Exams</a></li>
                            <li><a href="#section5">Batches</a></li>
                            <li><a href="#section6">Exercise</a></li>
                            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">More<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#section41">Section 4-1</a></li>
                                    <li><a href="#section42">Section 4-2</a></li>
                                </ul>
                            </li>
                        </ul>

                        <ul class="nav navbar-nav navbar-right">

                            @guest
                            <li><a href="{{ route('register') }}"><span class="fa fa-user"></span> Sign Up</a></li>
                            <li><a href="{{ route('login') }}"><span class="fas fa-sign-in-alt"></span> Login</a></li>
                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest                            
                        </ul>
                    </div>                
                </div>
            </nav> 
 

        <div style="margin-top:0px; min-height: 90vh">
          
            @yield('content')
        </div>

        <footer>
            <div id="footer" class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                            <h3> About </h3>
                            <ul>
                                <li> <a href="#"> Our Company </a> </li>
                                <li> <a href="#"> About Us </a> </li>
                                <li> <a href="#"> Terms of Services </a> </li>
                                <li> <a href="#"> Our Team </a> </li>
                            </ul>
                        </div>
                        <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                            <h3> Contact </h3>
                            <ul>
                                <li> <a href="#"> Contact Marketing </a> </li>
                                <li> <a href="#"> Contact Sales </a> </li>
                                <li> <a href="#"> Contact HR </a> </li>
                                <li> <a href="#"> Contact Admin </a> </li>
                            </ul>
                        </div>
                        <div class="col-lg-3  col-md-3 col-sm-6 col-xs-12 ">
                            <h3> Subscribe </h3>
                            <ul>
                                <li>
                                    <div class="input-append subscribe-btn text-center">
                                        <input type="text" class="full text-center" placeholder="Email ">
                                        <button class="btn  btn-success" type="button"> Subscribe <i class="fa fa-save"> </i> </button>
                                    </div>
                                </li>
                            </ul>                         

                        </div>
                    </div>                 
                </div>
            </div>
        </footer>
     </body>

</html>
