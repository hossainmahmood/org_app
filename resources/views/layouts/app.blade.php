<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width ini, initial-scale=1">        
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>     
        <link href="{{ asset('css/footercss.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/navigationcustom.css') }}" rel="stylesheet" /> 
        
        <title>@yield('title')</title>

        <style> 

            .footer {
/*                bottom: -100px;*/
                width: 100%;
                /*background: navbar-inverse;*/
                background: #222;
                border-color: #080808;

            }

        </style>


    </head>

    <body>
   
        <nav class="navbar navbar-inverse" >
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>                        
                        </button>
                        <a class="navbar-brand" href="#">IT Home</a>
                    </div>

                    <div class="collapse navbar-collapse" id="myNavbar" >
                        <ul class="nav navbar-nav">
                            <li><a href="#section1">Home</a></li>
                            <li><a href="#section2">Tutors</a></li>
                            <li><a href="#section3">Sections</a></li>
                            <li><a href="#section4">Tutorials</a></li>
                            <li><a href="#section5">Tests</a></li>
                            <li><a href="#section6">Exercise</a></li>
                            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">More<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#section41">Section 4-1</a></li>
                                    <li><a href="#section42">Section 4-2</a></li>
                                </ul>
                            </li>
                        </ul>

                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="{{ route('register') }}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                            <li><a href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        </ul>
                    </div>                
                </div>
            </nav> 
 

        <div style="margin-top:0px; min-height: 90vh">
            @yield('content')
        </div>

        <footer>
            <div id="foot" class="footer">
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
