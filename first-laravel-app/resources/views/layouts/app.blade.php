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
    @include('layouts.header')
    @yield('body')
    @include('layouts.footer')
</body>
</html>