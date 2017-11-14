@extends('layouts.explore')


@section('content')
<style type="text/css">
	body, html {
		height: 118%;
	}
</style>

<div class="container" style="box-shadow:none;">
	<h2 style="color: #666;margin-top: 0;margin-bottom: 0;">Explore Postcards</h2>
	<div class="row">
		<div class="list-group" id="gallery" style="margin-top: 0;">
			@foreach($dashboardshowexplore as $dashboardshowX) 
				<div class='col-lg-4 text-center'>
					<a href='{{url("explore/$dashboardshowX->id")}}'>
						<img class='img-responsive' src="/img/{{ $dashboardshowX->image }}" style="margin-top:50px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">
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

<div class="text-center" style="color:333;background-color:transparent;">
	{!! $dashboardshowexplore->links(); !!}
</div>
@endsection

