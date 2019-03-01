@extends('layouts.master')

@section('title')
  Test Form
@endsection

@section('content')

  <main id="main" role="main" class="container">
    <h1>Add New</h1>
    <form method="POST" action="{{ action('FolksController@update', $folk->id) }}">
      @csrf
      <input class="form-control" type="text" name="first_name" value="{{ old('first_name', $person->first_name) }}" placeholder="First Name">
    </form>
  </main>

@endsection
