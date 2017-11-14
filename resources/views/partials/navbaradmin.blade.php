
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
            <a href="/admin"><img style="height:40px;margin-top:10px;" src="{{URL::asset('../img/logo.png')}}"><img style="height:40px;margin-top:10px;" src="{{URL::asset('/img/mypostcard.png')}}"></a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>


            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">

                    	
                    	<a href="/admin" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true"><img style="height:40px;margin-left:10px;" src="{{URL::asset('/img/profile.png')}}"><small style="color:#333;">admin</small> <span class="caret"></span></a>

                    	
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="/admin/postcards"><small>All Postcards</small></a></li>
                            <li><a href="/admin/users"><small>User Account Info</small></a></li>
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
            </ul>
        </div>
    </div>
</nav>