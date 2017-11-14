@extends('layouts.app')

@section('content')
    <!-- login form -->
    <div class="container">
    <div class="row">
        <div class="col-lg-4 col-lg-offset-4">
            <div class="panel panel-default" style="text-align:center;background-color:rgba(255, 255, 255, 0.5);">
                <div class="panel-body">
                    <br>
                    <br>
                    <label style="font-family: 'Lato', sans-serif;">ADMIN: Beautiful Memories Shared</label>
                    <br>
                    <br>
                    <br>
                    <form method="POST" action="{{ route('admin.login.submit') }}" class="form-horizontal" role="form" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <div class="col-sm-12">
                            <input style="text-align:center;" type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>

                            @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <div class="col-sm-12">
                            <input style="text-align:center;" type="password" class="form-control" id="password" name="password" placeholder="Password" required>

                            @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group last">
                        <div class="col-md-6 col-md-offset-3">
                            <button type="submit" class="btn btn-sm" style="background-color: #333333;color:white;box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.1);">
                                Sign in</button>
                            <br>
                            <br>
                            <p><small><a class="btn btn-link" href="{{ route('password.request') }}">Forgot Password?</a></small></p>
                        </div>
                    </div>
                    <hr>
                    <label><small>Not Registered Yet?</small></label>
                    <button type="reset" class="btn btn-sm" style="background-color:white;color:#333333;box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.1);"><a href="{{ route('register') }}">
                                Register</a></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    
@endsection