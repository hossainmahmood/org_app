@extends('layouts.app')
@section('title', 'Add Teacher')

@section('content')

<form  method="POST" action="{{url('teachers')}}">
    @csrf
        <div class="row">
            <h3> Add New Teacher </h3>
    </div>
    <div class="row">
        <div class="col-md-4 text-right"><label for="Name">Name:</label></div>
        <div class="form-group col-md-4">            
            <input type="text" class="form-control" name="name">
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 text-right"><label for="Name">Birth Date:</label></div>
        <div class="form-group col-md-4">            
             <input type="date" clsss="form-control" name="birthDate">
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 text-right"><label for="Name">Email:</label></div>
        <div class="form-group col-md-4">            
            <input type="text" class="form-control" name="email">
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 text-right"><label for="Name">Phone Number:</label></div>
        <div class="form-group col-md-4">            
            <input type="text" class="form-control" name="phoneNumber">
        </div>
    </div>
    <div class="row">               
        <div class="col-md-4 text-right"><label for="Name">Address:</label></div>
        <div class="form-group col-md-4">            
            <input type="text" class="form-control" name="address">
        </div>       
    </div>

<!--    <div class="row">
        <div class="col-md-4 text-right">Hire Date :</div>
        <div class="form-group col-md-4">             
            <input class="date"  type="text" id="datepicker" name="hireDate">   
        </div>
    </div>-->
    
    <div class="row">
        <div class="col-md-4 text-right"><lable>Department :</lable></div>
        <div class="form-group col-md-4">            
            <select name="office">
                <option value="Mumbai">Math</option>
                <option value="Chennai">ICT</option>
                <option value="Delhi">Physics</option>  
                <option value="Bangalore">Chemistry</option>  
            </select>
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
        <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </div>
    
   
    
</form>


<form action="/action_page.php">
  Birthday:
  <input type="date" name="bday">
  <input type="submit">
</form>

<input type="submit" value="" />
 <script>  
$('.datepicker').pickadate({
weekdaysShort: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
showMonthsShort: true
});

</script>
@endsection


