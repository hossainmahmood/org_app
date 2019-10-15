<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Empirical</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"/> 
        <link href="{{ asset('css/customlayout.css') }}" rel="stylesheet">
        
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">


        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">

          <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.0/css/buttons.dataTables.min.css">





  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.0/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.html5.min.js"></script>

</head>

    <body> 
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

        @if ($userMenu)
        @include($userMenu) 
        @endif
        <hr/>
        <div class="container-fluid clearfix" style="min-height: 90vh">
            @yield('content')
        </div>


        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                ...
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>


        <script type="text/javascript">
            $(document).ready(function() {
                

$('.datatable').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    } );

            } );
        </script>
              
    </body>
    <br>
    <footer>
         @extends('layouts.footer') 
    </footer>
</html>
