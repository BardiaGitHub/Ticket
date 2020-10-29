@extends('meals.layout')
@section('content')
@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
@endif

<table class="table table-striped table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Description</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($meals as $meal)
          <tr>
            <th scope="row">{{ $meal->id }}</th>
            <td scope="row">{{ $meal->name }}</td>
            <td scope="row">{{ $meal->price . '€'}}</td>
            <td scope="row">{{ $meal->description }}</td>
            <td scope="row">
            <a class="btn btn-info btn-block" href="{{ route('meals.show',$meal->id) }}">Show</a>
            <a class="btn btn-primary btn-block" href="{{ route('meals.edit',$meal->id) }}">Edit</a>
            <br/>
            <form action="{{ route('meals.destroy',$meal->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-block">Delete</button>
            </form>
            </td>
          </tr>
      @endforeach
  </tbody>
</table>


<br/>
@endsection