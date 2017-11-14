
<nav class="navbar navbar-inverse" style="        
    	border-width: 0px;
        -webkit-box-shadow: 0px 0px;
        box-shadow: 0px 0px;
        background-color: rgba(0,0,0,0.0);
        background-image: -webkit-gradient(linear, 50.00% 0.00%, 50.00% 100.00%, color-stop( 0% , rgba(0,0,0,0.00)),color-stop( 100% , rgba(0,0,0,0.00)));
        background-image: -webkit-linear-gradient(270deg,rgba(0,0,0,0.00) 0%,rgba(0,0,0,0.00) 100%);
        background-image: linear-gradient(180deg,rgba(0,0,0,0.00) 0%,rgba(0,0,0,0.00) 100%);">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a href="/dashboard"><img style="height:40px;margin-top:10px;" src="{{URL::asset('/img/logo.png')}}"><img style="height:40px;margin-top:10px;" src="{{URL::asset('/img/mypostcard.png')}}"></a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

<!--             <ul class="nav navbar-nav">
              <li><a href="/">Home</a></li>
              <li><a href="/about">About</a></li>
              <li><a href="/services">Services</a></li>
              <li><a href="/posts">Blog</a></li>
            </ul> -->

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
<!--                     <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li> -->
                @else
                    <li class="dropdown">

                    	
                    	<a href="/profile" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true"><img style="height:40px;margin-left:10px;" src="{{URL::asset('/img/profile.png')}}"><small style="color:#333;">{{ Auth::user()->name }}</small> <span class="caret"></span></a>

                    	
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="/mypostcards"><small>My Postcards</small></a></li>
                            <li><a href="/dashboard"><small>Account Info</small></a></li>
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                    <small>Logout</small>
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>