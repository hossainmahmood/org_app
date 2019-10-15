@extends('layouts.app')
@section('title', 'Add Teacher')

@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<table class="table table-striped datatable" >
				<thead>
					<tr>
					  <th scope="col">Name</th>
					  <th scope="col">Birth Date</th>
					  <th scope="col">Email</th>
					  <th scope="col">Phone No</th>
					  <th scope="col">Action</th>
					</tr>
				</thead>
			<tbody>
			@foreach($teachers as $teacher)
			<tr>
			  <th scope="row"> {{$teacher->name }}</th>
			  <td>{{ $teacher->birth_date }} </td>
			  <td>{{ $teacher->email }}</td>
			  <td>{{ $teacher->phone_number }} </td>
			  <td>
				<a type="button" class="btn bg-transparent text-info" data-toggle="modal" href="#myModal">
				<i class="fa fa-eye" ></i>
				</a>
				<a type="button" class="btn bg-transparent text-warning" data-toggle="modal" href="#myModal">
				<i class="fa fa-edit" ></i>
				</a>
					<a type="button" class="btn bg-transparent text-danger" data-toggle="modal" href="#myModal">
				<i class="fa fa-trash" ></i>
				</a>
			  </td>
			</tr>
			 @endforeach
			</tbody>
			</table>
		</div>
	</div>
</div> 
@endsection
