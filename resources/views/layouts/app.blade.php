<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Empirical</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"/> 

        <style>
            /* Add a gray background color and some padding to the footer */
            footer {
                background-color: #f2f2f2;
                padding: 25px;
            }

            /* Hide the carousel text when the screen is less than 600 pixels wide */
            @media (max-width: 600px) {
                .carousel-caption {
                    display: none; 
                }
            }
        </style>
    </head>
    <body>

        <div class="container-fluid" style="position: relative;">            
            <h2>Empirical IT School.</h2>  

            <div class="list-group list-group-horizontal" style="position: absolute; top: 5px; right: 7px;">
                @guest
                <a href="{{ route('register') }}"><span class="fa fa-user"></span> Sign Up&nbsp;&nbsp;</a>
                <a href="{{ route('login') }}"><span class="fas fa-sign-in-alt"></span>Login</a>

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

        <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top" style="border-bottom: 2px solid background;">
            <a class="navbar-brand" href="{{ url('/') }}">Logo</a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
            </ul>            
        </nav>
        <hr style="margin-top: 0px;">
       
        <div class="container-fluid" style="min-height: 90vh">
            @yield('content')
        </div>



        <footer class="container-fluid text-center">
            <p>Footer Text</p>
        </footer>

    </body>
</html>
