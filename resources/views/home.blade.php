@extends('layouts.master')

@section('title')
  Home
@endsection

@section('content')

  <main id="main" role="main" class="container">
    <h1>Rudi International Home Page</h1>
    <ul>
    	@foreach($students as $student)
    	<li>{{ $student->first_name }} {{ $student->last_name }} || Class: {{ $student->class }}</li>
    	@endforeach
    </ul>
  </main>

@endsection
