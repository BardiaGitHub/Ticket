<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/styles.css')}}"/>
    <title>Panir Restaurant</title>
</head>
<body>
    <div id="container">
    <div class="jumbotron text-center">
        <h1>Panir Restaurant</h1>
        <p>Try our best meals!</p> 
        <a class="btn btn-primary" href="{{ route('meals.index') }}">Go to backend</a>
    </div>
    </div>
</body>
</html>