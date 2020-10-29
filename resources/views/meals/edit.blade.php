@extends('meals.layout')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Update new meal for the restaurant</h2>
        </div>
        <div class="pull-right">
                <a class="btn btn-info" href="{{ route('meals.index') }}">&laquo; Back to index</a>
        </div>
    </div>
</div>

<br/>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Warning!</strong> Please check your fields<br><br>
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

<form action="{{ route('meals.update',$meal->id) }}" method="POST">
@csrf
@method('PUT')
  <div class="form-group">
    <label for="name">Name for the meal</label>
    <input type="text" class="form-control"  placeholder="Enter the name" name ="name" value="{{ $meal->name }}">
  </div>
  <div class="form-group">
    <label for="price">Price for the meal in €</label>
    <input type="text" class="form-control"  placeholder="Enter the price" name ="price" value="{{ $meal->price }}">
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control" rows="3"placeholer ="Enter description" name="description">{{ $meal->description }}</textarea>
  </div>
  <div class="form-group">
    <label for="description">New date will be</label>
    <input type="text" class="form-control" name ="date" value="<?php 
        echo date('Y-m-d');
    ?>" readonly>
    <label for="description">New time will be</label>
    <input type="text" class="form-control" name ="time" value="<?php 
        echo date('H:i:s');
    ?>" readonly>
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>

@endsection