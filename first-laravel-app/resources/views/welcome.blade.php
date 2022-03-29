<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Laravel App</title>

    <link rel="stylesheet" href="/app.css">

</head>
<body>
    <h1>Welcome on my first Laravel-site!</h1>
    <a href="{{route('hello-world')}}">Hello-World page</a><br>
    <a href="{{route('goodbye-world')}}">Goodbye-World page</a>

    
</body>
</html>