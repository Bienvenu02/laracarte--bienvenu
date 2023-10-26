<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ page_title($title ?? '') }}</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/app-icon.css">
    <link rel="stylesheet" href="css/font.css">

    <style>
        footer{
            margin: 4em 0;
        }
    </style>
</head>
<body>

    @include('layouts/partials/_nav')

    @yield('content')

    @include('layouts/partials/_footer')
    

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>