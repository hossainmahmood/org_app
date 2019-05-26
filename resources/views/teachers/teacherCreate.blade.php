@extends('layouts.app')
@section('title', 'Add Teacher')

@section('content')

<form  method="POST" action="{{url('teachers')}}">
    @csrf
    <div class="row">
        <div class="col-md-4 text-right"><label for="Name">Name:</label></div>
        <div class="form-group col-md-4">            
            <input type="text" class="form-control" name="name">
        </div>
    </div>
        <div class="row">
        <div class="col-md-4 text-right"><label for="Name">Birth Date:</label></div>
        <div class="form-group col-md-4">            
            <input type="text" class="form-control" name="birthDate">
        </div>
    </div>
    <div class="row">
                <div class="row">
        <div class="col-md-4 text-right"><label for="Name">Email:</label></div>
        <div class="form-group col-md-4">            
            <input type="text" class="form-control" name="email">
        </div>       
    </div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
            <label for="Number">Phone Number:</label>
            <input type="text" class="form-control" name="number">
        </div>
    </div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
            <input type="file" name="filename">    
        </div>
    </div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
            <strong>Date : </strong>  
            <input class="date form-control"  type="text" id="datepicker" name="date">   
        </div>
    </div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
            <lable>Passport Office</lable>
            <select name="office">
                <option value="Mumbai">Mumbai</option>
                <option value="Chennai">Chennai</option>
                <option value="Delhi">Delhi</option>  
                <option value="Bangalore">Bangalore</option>  
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </div>
</form>
@endsection
