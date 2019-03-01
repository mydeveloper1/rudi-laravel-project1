@extends('layouts.master')

@section('title')
  Profile: {{$student->first_name}} {{$student->last_name}}
@endsection

@section('content')

  <main id="main" role="main" class="container">

  	@if(isset($student) && $student && $student->id > 0)

		<div class="row">
			<div class="col-sm-6">
				<div class="card">
					<img src="https://image.flaticon.com/icons/svg/326/326933.svg" class="card-img-top" alt="Image">
				</div>
			</div>
			<div class="col-sm-6">
				<div class="card">
					<div class="card-body">
					<h5 class="card-title">{{$student->first_name}} {{$student->last_name}}</h5>
					<p class="card-text">{{$student->biography}}</p>
					<a href="#" class="btn btn-primary">Edit Profile</a>
					</div>
				</div>
			</div>
		</div>

  	@else

	  	<div class="row">

	  		<div class="col-8 alert alert-warning">

				<h5>Student Not Found</h5>

	  		</div>

	  	</div>

  	@endif

  </main>

@endsection
