@extends('layouts.explore')

@section('content')

<style type="text/css">
	body, html {
		min-height: 120%;
	}
</style>
<div class="container">
	<div class="row">
		<div class="list-group">
				<div class='col-lg-6 col-lg-offset-3 text-center'>
					<img class='img-responsive' src="/img/{{ $dashboard_showsingle->image }}" style="margin-top:50px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.3);">
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<div class="caption" style="width:95%;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.3);">
						<br>
						<h4><strong>{{ $dashboard_showsingle->title }}</strong></h4>
						<br>
						<p style="text-align:justify;padding:10px;color: white;">{{ str_limit($dashboard_showsingle->content, 600) }}</p>

						</div>
						<br>
				</div>
		</div>

		<br>
		<br>
	</div>
</div>
<div style="text-align: center;">
<small><span>Post by: </span>{{ $dashboard_showsingle->user->name }}<span> at </span><span> {{ $dashboard_showsingle->created_at }}</span></small>
</div>
<br>
<br>
<br>
<br><br><br>
@endsection