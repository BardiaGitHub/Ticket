@extends('meals.layout')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Create new meal for the restaurant</h2>
        </div>
        <div class="pull-right">
                <a class="btn btn-info" href="{{ route('meals.index') }}">&laquo; Back to index</a>
        </div>
    </div>
</div>

<br/>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Error!</strong> Por favor comprueba los campos<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if ($message = Session::get('nameUniqueException'))
        <div class="alert alert-danger">
            <p>{{ $message }}</p>
        </div>
@endif

<form action="{{ route('meals.store') }}" method="POST">
@csrf
  <div class="form-group">
    <label for="name">Name for the meal</label>
    <input type="text" class="form-control"  placeholder="Enter the name" name ="name" value="{{ old('name') }}">
  </div>
  <div class="form-group">
    <label for="price">Price for the meal in €</label>
    <input type="text" class="form-control"  placeholder="Enter the price" name ="price" value="{{ old('price') }}">
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control" rows="3"placeholer ="Enter description" name="description">{{ old('description') }}</textarea>
  </div>
  <div class="form-group">
    <label for="description">Date</label>
    <input type="text" class="form-control" name ="date" value="<?php 
        echo date('Y-m-d');
    ?>" readonly>
    <label for="description">Time</label>
    <input type="text" class="form-control" name ="time" value="<?php 
        echo date('H:i:s');
    ?>" readonly>
  </div>
  <button type="submit" class="btn btn-primary">Create</button>
</form>

@endsection