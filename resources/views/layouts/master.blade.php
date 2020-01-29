<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IT Blog</title>
    <link rel="shortcut icon" href="http://www.45enord.ca/wp-content/uploads/2012/12/121201-internet-monde.jpg">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic|Playfair+Display:400,700&subset=latin,cyrillic">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" >
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

</head>

<body>
@include('layouts.header')
<div class="container">
    <div class="posts-list">

        <div class="container">
            @yield('content')


        </div>

        @include('layouts.paginator')
    </div> <!-- конец div class="posts-list"-->
    @include('layouts.sidebar')
</div> <!-- конец div class="container"-->
@include('layouts.footer')
<script>
    $('.nav-toggle').on('click', function() {
        $('#menu').toggleClass('active');
    });
</script>

</body>

</html>
