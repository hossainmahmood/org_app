@extends('layouts.app')
@section('title','welcome')
<style>
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
    

</style>

@section('content')

<div class="container">
            <div class="row">
                <div class="col-sm-8">
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
                                <img src="../images/chicago.jpg" alt=""/>
                                <div class="carousel-caption">
                                    <h3>Sell $</h3>
                                    <p>Money Money.</p>
                                </div>      
                            </div>

                            <div class="item">
                                <img src="../images/la.jpg" alt=""/>
                                <div class="carousel-caption">
                                    <h3>More Sell $</h3>
                                    <p>Lorem ipsum...</p>
                                </div>      
                            </div>
                            <div class="item">
                                <img src="../images/background.jpg" alt=""/>
                                <div class="carousel-caption">
                                    <h3>More Sell $</h3>
                                    <p>Lorem ipsum...</p>
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
                </div>
                <div class="col-sm-4">
                    <div class="well">
                        <p>Empirical IT School</p>
                    </div>
                    <div class="well">
                        <p>Next Batch Starting Soon</p>
                    </div>
                    <div class="well">
                        <p>You are invited to visit our Empirical IT School</p>
                    </div>
                </div>
            </div>
            <hr>
        </div>

        <div class="container text-center">    
            <h3>What We Do</h3>
            <br>
            <div class="row">
                <div class="col-sm-3">
                    <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
                    <p>Current Project</p>
                </div>
                <div class="col-sm-3"> 
                    <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
                    <p>Project 2</p>    
                </div>
                <div class="col-sm-3">
                    <div class="well">
                        <p>Some text..</p>
                    </div>
                    <div class="well">
                        <p>Some text..</p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="well">
                        <p>Some text..</p>
                    </div>
                    <div class="well">
                        <p>Some text..</p>
                    </div>
                </div>  
            </div>
            <hr>
        </div>

        <div class="container text-center">    
            <h3>Our Partners</h3>
            <br>
            <div class="row">
                <div class="col-sm-2">
                    <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
                    <p>Partner 1</p>
                </div>
                <div class="col-sm-2"> 
                    <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
                    <p>Partner 2</p>    
                </div>
                <div class="col-sm-2"> 
                    <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
                    <p>Partner 3</p>
                </div>
                <div class="col-sm-2"> 
                    <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
                    <p>Partner 4</p>
                </div> 
                <div class="col-sm-2"> 
                    <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
                    <p>Partner 5</p>
                </div>     
                <div class="col-sm-2"> 
                    <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
                    <p>Partner 6</p>
                </div> 
            </div>
        </div><br>
@endsection