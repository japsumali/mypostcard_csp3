<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>My Postcard</title>

    <!-- Styles -->
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link href="{{ asset('css/stylesheet.css') }}" rel="stylesheet">
    <link href="stylesheet.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://use.fontawesome.com/572e957010.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.j" type="text/javascript">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript">
    </script>
    <style>
        .caption {
        width:10%;
        bottom: .3rem;
        position: absolute;
        
        background: -moz-linear-gradient(bottom, #000 40%, rgba(0, 0, 0, 0) 100%) repeat scroll 0 0 rgba(0, 0, 0, 0);
        background: -o-linear-gradient(bottom, #000 40%, rgba(0, 0, 0, 0) 100%) repeat scroll 0 0 rgba(0, 0, 0, 0);
        
        background: #FFAFBD;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to top, #ffc3a0, #FFAFBD);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to top, #ffc3a0, #FFAFBD); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    }



    .caption h4 {
        color: #fff;
        -webkit-font-smoothing: antialiased;
    }

    #gallery
    {
        display: inline-block;
        margin-top: 100px;
    }
    </style>
</head>
<body>

    <!-- background image -->
    <div class="bg"></div>

    <!-- logo -->
    <div><a href="/explore"><img style="height:40px;margin-left:10px;margin-top:10px;" src="{{URL::asset('/img/logo.png')}}"><img style="height:40px;margin-top:10px;" src="{{URL::asset('/img/mypostcard.png')}}"></a></div>    


    @yield('content')   



    <!-- footer -->
    <footer>
        <div class="socialwrapper" >
          <i class="fa fa-2x fa-facebook-square"></i>
          <i class="fa fa-2x fa-twitter-square"></i>
          <i class="fa fa-2x fa-instagram"></i>
        </div>
    </footer>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
