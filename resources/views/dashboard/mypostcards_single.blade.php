@extends('layouts.main')

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
						<p style="text-align:justify;padding:10px;color: white;">{{ $dashboard_showsingle->content}}</p>

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
<div style="text-align: center;">
<a href='{{url("dashboard/$dashboard_showsingle->id/delete")}}'><img src="../img/delete.png" style="width: 20px;"><button style="visibility: hidden;"></button> </a>
<a href='{{url("dashboard/$dashboard_showsingle->id/edit")}}'><img src="../img/edit.png" style="width: 20px;"><button style="visibility: hidden;"></button> </a>

<br>
<br>
<form method="POST" style="text-align: center;">
	{{ csrf_field() }}
	<textarea name="description" id="description"></textarea>
	<button type="submit" style="background-color: transparent;border: none;margin-bottom: 5px;"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
</form>


@foreach($dashboard_showsingle->get_comments as $comment)
<div class="container">
	<div class="row">
		<div class='col-lg-6 col-lg-offset-2'>
			<small><label>{{ $comment->get_username->name }}</label>&nbsp&nbsp&nbsp<span>{{ $comment->description }}</span></small>
		</div>
	</div>
</div>
@endforeach
<br><br>
@endsection