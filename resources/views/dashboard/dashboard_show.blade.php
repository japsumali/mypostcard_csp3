@extends('layouts.main')


@section('content')

@if(Session::has('delete_postcard_notification'))
	<p style="text-align: center;color: red;">{{ Session::get('delete_postcard_notification') }}</p>
@endif

<style type="text/css">
	body, html {
		height: 112%;
	}
</style>
<div class="container" style="box-shadow:none;">
	<h3 style="color: #666;margin: 0;">Explore Postcards</h>
	<div class="row" style="margin-top: 0;">
		<div class="list-group" id="gallery" style="margin-top: 0;">
			@foreach($dashboardshow as $dashboardshowX) 
				<div class='col-lg-4 text-center'>
					<a href='{{url("dashboard/$dashboardshowX->id")}}'>
						<img class='img-responsive' src="/img/{{ $dashboardshowX->image }}" style="margin-top:30px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">
						<br>
						<div class="caption" style="width: 92.5%;">
							<br>

							<br>
							<h4>{{ $dashboardshowX->title }}</h4>
							<small style="text-decoration: none;color:#999;"><p>{{  $dashboardshowX->user->name }}</p></small>
						</div>
					</a>
				</div>
			@endforeach
		</div>
	</div>
</div>
<br>
<div class="text-center" style="color:333;background-color:transparent;">
	{!! $dashboardshow->links(); !!}
</div>
@endsection
