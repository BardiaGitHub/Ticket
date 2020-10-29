@extends('meals.layout')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>{{ $meal->name }}</h2>
        </div>
        <div class="pull-right">
                <a class="btn btn-info" href="{{ route('meals.index') }}">&laquo; Back to Index</a>
        </div>
    </div>
</div>

<br/>

<div class="form-group">
    <label for="name">Name for the meal</label>
    <input type="text" class="form-control"  placeholder="Enter the name" name ="name" value="{{ $meal->name }}" readonly>
</div>
<div class="form-group">
    <label for="price">Price for the meal in €</label>
    <input type="text" class="form-control"  placeholder="Enter the price" name ="price" value="{{ $meal->price }}" readonly>
</div>
<div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control" rows="3"placeholer ="Enter description" name="description" readonly>{{ $meal->description }}</textarea>
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
<a class="btn btn-primary" href="{{ route('meals.edit',$meal->id) }}">Edit</a>

@endsection