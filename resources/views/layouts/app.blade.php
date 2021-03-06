<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>RakuAir</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="https://www.google.com/jsapi"></script>
        
        <link href="https://fonts.googleapis.com/css?family=ABeeZee" rel="stylesheet">
        <link href="https://fonts.googleapis.com/earlyaccess/mplus1p.css" rel="stylesheet" />
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        
        <link rel="stylesheet" href="{{ secure_asset('css/stylesheet.css') }}">
        <link rel="stylesheet" href="{{ secure_asset('css/css.css') }}">
        
    </head>
    
    <body>
        


        <div class="container">

            

            @include('commons.error_messages')

            @yield('content')

    </body>
  
    <!--<footer class="col-lg-12">-->
    <!--        &copy; 2018 KEMKOW All Rights Reserved.-->
    <!--</footer>-->
</html>  

