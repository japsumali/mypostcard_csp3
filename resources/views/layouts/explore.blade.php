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
        width:100%;
        bottom: .3rem;
        position: absolute;
        
        
        background:#000;
        background: -webkit-linear-gradient(bottom, #000 40%, rgba(0, 0, 0, 0) 100%) repeat scroll 0 0 rgba(0, 0, 0, 0);
        background: -moz-linear-gradient(bottom, #000 40%, rgba(0, 0, 0, 0) 100%) repeat scroll 0 0 rgba(0, 0, 0, 0);
        background: -o-linear-gradient(bottom, #000 40%, rgba(0, 0, 0, 0) 100%) repeat scroll 0 0 rgba(0, 0, 0, 0);
        background: linear-gradient(to top, #000 40%, rgba(0, 0, 0, 0) 100%) repeat scroll 0 0 rgba(0, 0, 0, 0);
    }

    .thumbnail {
        border: 0 none;
        box-shadow: none;
        margin:0;
        padding:0;
    }

    .caption h4 {
        color: white;
        -webkit-font-smoothing: antialiased;
    }

    #gallery
    {
        display: inline-block;
        margin-top: 100px;
    }

    body, html {
      background: #076585;  /* fallback for old browsers */
      background: -webkit-linear-gradient(to top, #355C7D, #C4E0E5, #E9E4F0, #fff);  /* Chrome 10-25, Safari 5.1-6 */
      background: linear-gradient(to top, #355C7D, #C4E0E5, #E9E4F0, #fff); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

      height: 100%;
    }

    .pagination>li>a, .pagination>li>span {
    position: relative;
    float: left;
    padding: 6px 12px;
    margin-left: -1px;
    line-height: 1.42857143;
    color: #333;
    text-decoration: none;
    background-color: transparent;
    border: 1px solid transparent;
    }

    .pagination>.active>a, .pagination>.active>a:focus, .pagination>.active>a:hover, .pagination>.active>span, .pagination>.active>span:focus, .pagination>.active>span:hover {
    z-index: 2;
    color: #333;
    cursor: default;
    background-color: transparent;
    border-color: transparent;
    }

    .pagination>.disabled>a, .pagination>.disabled>a:focus, .pagination>.disabled>a:hover, .pagination>.disabled>span, .pagination>.disabled>span:focus, .pagination>.disabled>span:hover {
        color: #777;
        cursor: not-allowed;
        background-color: transparent;
        border-color: transparent;
    }

    .btn-glyphicon { 
        padding:8px; background:#ffffff; margin-right:4px;
    }

    .icon-btn {
        padding: 1px 15px 3px 2px; border-radius:50px;
    }

    @import url(https://fonts.googleapis.com/css?family=Lato:100,300,400);

    input::-webkit-input-placeholder, textarea::-webkit-input-placeholder {
      color: #555;
      font-size: 0.875em;
    }

    input:focus::-webkit-input-placeholder, textarea:focus::-webkit-input-placeholder {
      color: #555;
    }

    input::-moz-placeholder, textarea::-moz-placeholder {
      color: #555;
      font-size: 0.875em;
    }

    input:focus::-moz-placeholder, textarea:focus::-moz-placeholder {
      color: #555;
    }

    input::placeholder, textarea::placeholder {
      color: #555;
      font-size: 0.875em;
    }

    input:focus::placeholder, textarea::focus:placeholder {
      color: #555;
    }

    input::-ms-placeholder, textarea::-ms-placeholder {
      color: #555;
      font-size: 0.875em;
    }

    input:focus::-ms-placeholder, textarea:focus::-ms-placeholder {
      color: #555;
    }

    /* on hover placeholder */

    input:hover::-webkit-input-placeholder, textarea:hover::-webkit-input-placeholder {
      color: #555;
      font-size: 0.875em;
    }

    input:hover:focus::-webkit-input-placeholder, textarea:hover:focus::-webkit-input-placeholder {
      color: #555;
    }

    input:hover::-moz-placeholder, textarea:hover::-moz-placeholder {
      color: #555;
      font-size: 0.875em;
    }

    input:hover:focus::-moz-placeholder, textarea:hover:focus::-moz-placeholder {
      color: #555;
    }

    input:hover::placeholder, textarea:hover::placeholder {
      color: #555;
      font-size: 0.875em;
    }

    input:hover:focus::placeholder, textarea:hover:focus::placeholder {
      color: #555;
    }

    input:hover::placeholder, textarea:hover::placeholder {
      color: #555;
      font-size: 0.875em;
    }

    input:hover:focus::-ms-placeholder, textarea:hover::focus:-ms-placeholder {
      color: #555;
    }

/*    body {
      font-family: 'Lato', sans-serif;
      background: #e2dedb;
      color: #b3aca7;
    }*/

    header {
      position: relative;
      margin: 100px 0 25px 0;
      font-size: 2.3em;
      text-align: center;
      letter-spacing: 7px;
    }

    #form {
      position: relative;
      width: 500px;
      margin: 50px auto 100px auto;
    }

    input {
      font-family: 'Lato', sans-serif;
      font-size: 0.875em;
      width: 470px;
      height: 50px;
      padding: 0px 15px 0px 15px;
      
      background-color:rgba(255, 0, 0, 0.2);
      outline: none;
      color: #555;
      
      border: solid 1px #b3aca7;
      border-bottom: none;
      
      transition: all 0.3s ease-in-out;
      -webkit-transition: all 0.3s ease-in-out;
      -moz-transition: all 0.3s ease-in-out;
      -ms-transition: all 0.3s ease-in-out;
    }

    input:hover {
      background: #b3aca7;
      color: #555;
    }

    textarea {
      width: 470px;
      max-width: 470px;
      height: 110px;
      max-height: 110px;
      padding: 15px;
      
      background-color:rgba(255, 0, 0, 0.2);
      outline: none;
      
      color: #726659;
      font-family: 'Lato', sans-serif;
      font-size: 0.875em;
      
      border: solid 1px #b3aca7;
      
      transition: all 0.3s ease-in-out;
      -webkit-transition: all 0.3s ease-in-out;
      -moz-transition: all 0.3s ease-in-out;
      -ms-transition: all 0.3s ease-in-out;
    }

    textarea:hover {
      background: #b3aca7;
      color: #555;
    }

    #submit {
      width: 470px;
      
      padding: 0;
      margin: -5px 0px 0px 0px;
      
      font-family: 'Lato', sans-serif;
      font-size: 0.875em;
      color: #555;
      
      outline:none;
      cursor: pointer;
      
      border: solid 1px #b3aca7;
      border-top: none;
    }

    #submit:hover {
      color: #555;
    }

    .navbar-inverse .navbar-nav>.open>a, .navbar-inverse .navbar-nav>.open>a:focus, .navbar-inverse .navbar-nav>.open>a:hover {
          border-width: 0px;
            -webkit-box-shadow: 0px 0px;
            box-shadow: 0px 0px;
            background-color: rgba(0,0,0,0.0);
            background-image: -webkit-gradient(linear, 50.00% 0.00%, 50.00% 100.00%, color-stop( 0% , rgba(0,0,0,0.00)),color-stop( 100% , rgba(0,0,0,0.00)));
            background-image: -webkit-linear-gradient(270deg,rgba(0,0,0,0.00) 0%,rgba(0,0,0,0.00) 100%);
            background-image: linear-gradient(180deg,rgba(0,0,0,0.00) 0%,rgba(0,0,0,0.00) 100%);
    }

    .dropdown-menu {
      border-width: 0px;
        -webkit-box-shadow: 0px 0px;
        box-shadow: 0px 0px;
        background-color: rgba(0,0,0,0.0);
        background-image: -webkit-gradient(linear, 50.00% 0.00%, 50.00% 100.00%, color-stop( 0% , rgba(0,0,0,0.00)),color-stop( 100% , rgba(0,0,0,0.00)));
        background-image: -webkit-linear-gradient(270deg,rgba(0,0,0,0.00) 0%,rgba(0,0,0,0.00) 100%);
        background-image: linear-gradient(180deg,rgba(0,0,0,0.00) 0%,rgba(0,0,0,0.00) 100%);
    }

    .caret {
      color: black;
      visibility: hidden;
    }

    </style>
</head>
<body>

    <div>
    @include('partials.navbarexplore')
    </div>
    <!-- background image -->
    <div class="bg"></div>

    <!-- logo -->
  

    @yield('content')



    <!-- footer -->
    <br><br><br>
    <div style="text-align: center;">
      <i class="fa fa-2x fa-facebook-square"></i>
      <i class="fa fa-2x fa-twitter-square"></i>
      <i class="fa fa-2x fa-instagram"></i>
    </div>
    <br>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
