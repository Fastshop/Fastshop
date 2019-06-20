<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield("title","Hello, world!")</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.loli.net/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdnjs.loli.net/ajax/libs/font-awesome/5.8.2/css/all.min.css" >
    <script src="https://cdnjs.loli.net/ajax/libs/jquery/3.3.1/jquery.slim.min.js" ></script>
    @yield('head')
</head>
<body>

@yield('body')

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://cdnjs.loli.net/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
<script src="https://cdnjs.loli.net/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js" ></script>
</body>
</html>
