<!DOCTYPE html>
<html lang="en">
    <head>
        <title>IT Home</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link href="{{ asset('css/footercss.css') }}" rel="stylesheet" />

        <style>
            body {
                position: relative; 
            }
            .navbar {
                margin-bottom: 0px;
            }

            .person {
                border: 10px solid transparent;
                margin-bottom: 25px;
                width: 80%;
                height: 80%;
                opacity: 0.7;
            }
            .person:hover {
                border-color: #f1f1f1;
            }

            .carousel-inner img {
                -webkit-filter: grayscale(90%);
                filter: grayscale(90%); /* make all photos black and white */
                width: 100%; /* Set width to 100% */
                margin: auto;
            }

            .carousel-caption h3 {
                color: #fff !important;
            }

            @media (max-width: 600px) {
                .carousel-caption {
                    display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
                }
            }

            #section1 {padding-top:50px;height:500px;color: #fff; background-color: #1E88E5;}
            #section2 {padding-top:50px;height:500px;color: #fff; background-color: #673ab7;}
            #section3 {padding-top:50px;height:500px;color: #fff; background-color: #ff9800;}
            #section41 {padding-top:50px;height:500px;color: #fff; background-color: #00bcd4;}
            #section42 {padding-top:50px;height:500px;color: #fff; background-color: #009688;}

        </style>
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="#">IT Home</a>
                </div>
                <div>
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
                            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>       


        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="../images/ny.jpg" alt="New York" width="1368" height="700">

                    <div class="carousel-caption">
                        <h3>New York</h3>
                        <p>The atmosphere in New York is lorem ipsum.</p>
                    </div>      
                </div>

                <div class="item">
                    <img src="../images/chicago.jpg" alt="Chicago" width="1368" height="700">
                    <div class="carousel-caption">
                        <h3>Chicago</h3>
                        <p>Thank you, Chicago - A night we won't forget.</p>
                    </div>      
                </div>

                <div class="item">
                    <img src="../images/la.jpg" alt="Los Angeles" width="1368" height="700">
                    <div class="carousel-caption">
                        <h3>LA</h3>
                        <p>Even though the traffic was a mess, we had the best time playing at Venice Beach!</p>
                    </div>      
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div class="container text-center">
            <h3>THE BAND</h3>
            <p>We love music!</p>
            <p>We have created a fictional band website. Lorem ipsum..</p>
            <div class="row">
                <div class="col-sm-4">
                    <p><strong>Name</strong></p><br>
                    <a href="#demo" data-toggle="collapse">
                        <img class="img-circle person" src="../images/bandmember.jpg" alt="Random Name" width="255" height="255"/>
                    </a>
                    <div id="demo" class="collapse">
                        <p>Guitarist and Lead Vocalist</p>
                        <p>Loves long walks on the beach</p>
                        <p>Member since 1988</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <p><strong>Name</strong></p><br>
                    <a href="#demo2" data-toggle="collapse">
                        <img class="img-circle person" src="../images/bandmember.jpg" alt="Random Name" width="255" height="255"/>
                    </a>
                    <div id="demo2" class="collapse">
                        <p>Drummer</p>
                        <p>Loves drummin'</p>
                        <p>Member since 1988</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <p><strong>Name</strong></p><br>
                    <img class="img-circle person" src="../images/bandmember.jpg" alt="Random Name" width="255" height="255"/>
                </div>      
            </div>
        </div>

        <footer>
            <div class="footer" id="footer">
                <div class="container">
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
                    <!--/.row--> 
                </div>
                <!--/.container--> 
            </div>
        </footer>
    </body>
</html>