<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Empirical</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"/> 
        <link href="{{ asset('css/customlayout.css') }}" rel="stylesheet">

        <!--<link href="../css/customlayout.css" rel="stylesheet" type="text/css"/>-->


    </head>
    <body>        
        <!--        <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-4">
                            <p class="w3-tangerine w3-xxlarge">Empirical IT Academy</p>
                        </div>                
                    </div>
                </div>-->


        <!--            <div class="row my-2">
                        <div class="col-lg-4 col-12">
                             <p class="w3-xxlarge">Empirical IT Academy</p> 
                        </div>
                        
                        <div class="col-lg-4 col-12"></div>
                        
                        <div class="col-lg-4 col-12">
                                <div class="list-group list-group-horizontal loginlogout" style="position: absolute; top: 5px; right: 7px;">
                                @guest
                                <p class="loginlogout"> Existing User? </p> &nbsp;&nbsp;
                                <a href="{{ route('login') }}"><span class="fas fa-sign-in-alt"></span>Login&nbsp;&nbsp;</a>
                                <a href="{{ route('register') }}" ><span class="fa fa-user"></span> Sign Up</a>             
        
                                @else
                                <ul class="list-group list-group-flush" >
                                     Small modal 
                                    <button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">{{ Auth::user()->name }}</button>
        
                                    <div class="modal bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-content">
                                                <div class="modal-header"><h4>Logout <i class="fa fa-lock"></i></h4></div>
                                                <div class="modal-body"><i class="fa fa-question-circle"></i> Are you sure you want to log-off?</div>
                                                <div class="modal-footer"><a href="{{ route('logout') }}" class="btn btn-primary btn-block" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                        {{ __('Logout') }}
                                                    </a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        @csrf
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                    
                                </ul>
                                @endguest 
                            </div>
                        </div>
                    </div>-->

        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-4" >
                    <p class="w3-xxlarge">Empirical IT Academy</p> 
                </div>
                <div class="col-12 col-lg-4" ></div>
                <div class="col-12 col-lg-4 list-group list-group-horizontal loginlogout d-flex justify-content-end" >

                    @guest

                    <p class="loginlogout"> Existing User? </p> &nbsp;&nbsp;
                    <a href="{{ route('login') }}"><span class="fas fa-sign-in-alt"></span>Login&nbsp;&nbsp;</a>
                    <a href="{{ route('register') }}" ><span class="fa fa-user"></span> Sign Up</a>             

                    @else
                    <ul class="list-group list-group-flush" >
                        <!-- Small modal -->
                        <button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">{{ Auth::user()->name }}</button>

                        <div class="modal bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header"><h4>Logout <i class="fa fa-lock"></i></h4></div>
                                    <div class="modal-body"><i class="fa fa-question-circle"></i> Are you sure you want to log-off?</div>
                                    <div class="modal-footer"><a href="{{ route('logout') }}" class="btn btn-primary btn-block" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>                    
                    </ul>
                    @endguest
                </div>
            </div>
        </div>



        <nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top" style="border-bottom: 2px solid background;">
            <a class="navbar-brand" href="{{ url('/') }}">Logo</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#section2">Instructors</a></li>
                    <li class="nav-item"><a class="nav-link"href="#section3">Subjects</a></li>
                    <li class="nav-item"><a class="nav-link"href="#section4">Exams</a></li>
                    <li class="nav-item"><a class="nav-link"href="#section5">Batches</a></li>
                    <li class="nav-item"><a class="nav-link"href="#section6">Exercise</a></li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">More<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#section41">Section 4-1</a></li>
                            <li><a href="#section42">Section 4-2</a></li>
                        </ul>
                    </li>
                </ul>  
            </div>
        </nav>


        <hr >

        <div class="container-fluid clearfix" style="min-height: 90vh">
            @yield('content')
        </div>

        <footer class="container-fluid text-center footer">
            <p>Footer Text</p>
        </footer>
    </body>
</html>
