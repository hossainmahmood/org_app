@extends('layouts.app')
@section('title', 'Add Teacher')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif
                <div class="card-header">Add New Teacher </div>
                <div class="card-body">
                    <form  method="POST" action="{{url('teachers')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-4 text-right"><label for="Name">Name:</label></div>
                            <div class="form-group col-md-4">            
                                <input type="text" class="form-control" name="name" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 text-right"><label for="Name">Birth Date:</label></div>
                            <div class="form-group col-md-4">            
                                <input class="form-control"  type="date" id="birthDate" name="birthDate" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 text-right"><label for="Name">Email:</label></div>
                            <div class="form-group col-md-4">            
                                <input type="email" class="form-control" name="email" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 text-right"><label for="Name">Phone Number:</label></div>
                            <div class="form-group col-md-4">            
                                <input type="tel" class="form-control" name="phoneNumber" required="">
                            </div>
                        </div>
                        <div class="row">               
                            <div class="col-md-4 text-right"><label for="Name">Address:</label></div>
                            <div class="form-group col-md-4">            
                                <input type="text" class="form-control" name="address" required>
                            </div>       
                        </div>

                        <div class="row">
                            <div class="col-md-4 text-right">Hire Date : </div>
                            <div class="form-group col-md-4">             
                                <input class="form-control"  type="date" id="hireDate" name="hireDate" required="">   
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 text-right"><lable>Department :</lable></div>
                            <div class="form-group col-md-4">            
                                <select name="department" required>
                                    <option value="MAT">Math</option>
                                    <option value="ICT">ICT</option>
                                    <option value="PHY">Physics</option>  
                                    <option value="CHE">Chemistry</option>  
                                </select>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="form-group col-md-4">
                                <input type="file" name="picture">    
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="form-group col-md-4" style="margin-top:60px">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </form>

                </div>

            </div>

        </div>

    </div>

<!--    <script>
        $(function() {
        $("#birthDate").datepicker({
        changeMonth : true,
        changeYear : true
        });
        
         $("#hireDate").datepicker({
        changeMonth : true,
        changeYear : true
        });
        });
    </script>-->

    @endsection


