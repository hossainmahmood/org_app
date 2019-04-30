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
            <img src="../images/ny.jpg" alt="New York" width="1200" height="700">

            <div class="carousel-caption">
                <h3>New York</h3>
                <p>The atmosphere in New York is lorem ipsum.</p>
            </div>      
        </div>

        <div class="item">
            <img src="../images/chicago.jpg" alt="Chicago" width="1200" height="700">
            <div class="carousel-caption">
                <h3>Chicago</h3>
                <p>Thank you, Chicago - A night we won't forget.</p>
            </div>      
        </div>

        <div class="item">
            <img src="../images/la.jpg" alt="Los Angeles" width="1200" height="700">
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

<div class="text-center">
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
@endsection