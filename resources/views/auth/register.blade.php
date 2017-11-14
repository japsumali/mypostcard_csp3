@extends('layouts.app')

@section('content')
<br>
<div class="container" style="text-align:center;">
    <div class="row">
        <div class="col-lg-4 col-lg-offset-4">
            <div class="panel panel-default" style="margin-top: 20px;background-color:rgba(255, 255, 255, 0.5)">
                    <br>
                    <br>
                    <label style="font-family: 'Lato', sans-serif;">Beautiful Memories Shared</label>
                    <br>
                    <br>
                    <br>
                    <label style="font-family: 'Lato', sans-serif;">Register</label>
                    <br>
                    

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            

                            <div class="col-sm-12">
                                <input placeholder="Name" id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus style="text-align:center;">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                            <div class="col-sm-12">
                                <input placeholder="E-mail Address" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required style="text-align:center;">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                            <div class="col-sm-12">
                                <input placeholder="Password" id="password" type="password" class="form-control" name="password" required style="text-align:center;">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group">

                            <div class="col-sm-12">
                                <input placeholder="Confirm Password" id="password-confirm" type="password" class="form-control" name="password_confirmation" required style="text-align:center;">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-6 col-sm-offset-3">
                                <button type="submit" class="btn btn-sm" style="background-color: #333333;color:white;box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.1);">
                                Register</button>
                            </div>
                        </div>
                    </form>
                    <hr>
                    <label><small><a href="{{ route('login') }}">Back to Login</a></a></small></label>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
