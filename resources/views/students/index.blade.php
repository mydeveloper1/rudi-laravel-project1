@extends('layouts.master')

@section('title')
  Home
@endsection

@section('content')

  <main id="main" role="main" class="container">

  	<div class="row">

  		<div class="col-12">

  			<h1>
  				Students
  				<a href="#" class="btn btn-success float-right">Add New Student</a>
  			</h1>

  		</div>

  	</div>

  	<div class="row">

  		<div class="col-12">

  			<table id="tableStudents" class="table table-hover display">
  				<thead>
  					<tr>
  						<th>Id</th>
  						<th>First Name</th>
  						<th>Last Name</th>
  						<th class="text-center">Class</th>
  						<th class="text-center">Gender</th>
  					</tr>
  				</thead>
  				<tfoot>
  					<tr>
  						<th>Id</th>
  						<th>First Name</th>
  						<th>Last Name</th>
  						<th class="text-center">Class</th>
  						<th class="text-center">Gender</th>
  					</tr>
  				</tfoot>
  				<tbody>
  					@foreach($students as $student)
  					<tr>
  						<td><a href="{{ action('StudentsController@show', ['id' => $student->id]) }}">{{ $student->student_id }}</a></td>
  						<td>{{ $student->first_name }}</td>
  						<td>{{ $student->last_name }}</td>
  						<td class="text-center">{{ $student->class }}</td>
  						<td class="text-center">{{ $student->gender }}</td>
  					</tr>
			    	@endforeach
  				</tbody>
  			</table>

  		</div>

  	</div>

  </main>

@endsection
