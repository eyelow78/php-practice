<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href={{ asset('styles/normalize.css')}}>
    <link rel="stylesheet" href={{ asset('styles/style.css')}}>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD app</title>
</head>
<body>
    <h1>CRUD app</h1>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>