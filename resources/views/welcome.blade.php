@extends('layouts.app')
@section('title','welcome')
<style>   
    /* Make the image fully responsive */
    .carousel-inner img {
        width: 100%;
        height: 100%;
    }
</style>

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-8">
            <div id="demo" class="carousel slide" data-ride="carousel">
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                </ul>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../images/la.jpg" alt="Los Angeles" width="1100" height="500">
                        <div class="carousel-caption">
                            <h3>Los Angeles</h3>
                            <p>We had such a great time in LA!</p>
                        </div>   
                    </div>
                    <div class="carousel-item">
                        <img src="../images/chicago.jpg" alt="Chicago" width="1100" height="500">
                        <div class="carousel-caption">
                            <h3>Chicago</h3>
                            <p>Thank you, Chicago!</p>
                        </div>   
                    </div>
                    <div class="carousel-item">
                        <img src="../images/ny.jpg" alt="New York" width="1100" height="500">
                        <div class="carousel-caption">
                            <h3>New York</h3>
                            <p>We love the Big Apple!</p>
                        </div>   
                    </div>
                </div>
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>
        <div class="col-sm-4">
            Empirical IT School
        </div>
    </div>

    <hr>
</div>
<div class="container-fluid text-center">    
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
</div>
<br>
@endsection