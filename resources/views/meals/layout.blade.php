<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Panir</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('css/styles.css')}}"/>
    </head>
    <body>
    <nav class="navbar navbar-dark bg-dark">
        <span class="navbar-brand mb-0 h1">My Restaurant: Backend</span>
        
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="btn btn-outline-success" href="{{ route('meals.create') }}">Create a new meal</a>
            </li>
        </ul>
        <form class="form-inline" action="meals/search" method="GET" role="search">
            <input class="form-control mr-sm-2" type="search" placeholder="Search for a meal" aria-label="Search" name="search">
            <button class="btn btn-success my-2 my-sm-0" type="submit" value="search">Search</button>
        </form>
        
    </nav>

    <br/>
    <div class="container">
        @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>