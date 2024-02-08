<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Topic Listing Bootstrap 5 Template</title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">
                        
        <link href="{{asset ('frontend/assets/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset ('frontend/assets/css/bootstrap-icons.css')}}" rel="stylesheet">
        <link href="{{asset ('frontend/assets/css/templatemo-topic-listing.css')}}" rel="stylesheet">      
<!--

TemplateMo 590 topic listing

https://templatemo.com/tm-590-topic-listing

-->
    </head>
    <body id="top">
    <main>
        @include('frontend/header')
        @yield('content')
        @include('frontend/footer')
        <script src="{{ asset ('frontend/assets/js/jquery.min.js')}}"></script>
        <script src="{{ asset ('frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset ('frontend/assets/js/jquery.sticky.js')}}"></script>
        <script src="{{ asset ('frontend/assets/js/click-scroll.js')}}"></script>
        <script src="{{ asset ('frontend/assets/js/custom.js')}}"></script>
    </main>
    </body>
</html>