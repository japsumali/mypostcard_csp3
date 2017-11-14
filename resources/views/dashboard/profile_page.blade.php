@extends('layouts.main')

@if(Session::has('delete_notif'))
	{{ Session::get('delete_notif') }}
@endif

@section('content')
<style type="text/css">
	body, html {
		min-height: 290%;
	}
</style>
<div style="text-align: center;margin-bottom: 40px;margin-top: 100px;">
<a href="profile/create"><img src="../img/add.png" style="width:30px;"><span style="text-decoration: none;color: #333;">Create a new postcard</span></a>	
</div>

@if(count(Auth::user()->articles) > 0 )

		<div class="container">
			<div class="row">
				<div class="list-group">
	@foreach(Auth::user()->articles as $article)
					<div class='col-lg-6 col-lg-offset-3 text-center'>
						<a href='{{ url("/mypostcards/$article->id") }}'>
						<br>
						<img class='img-responsive' src="/img/{{ $article->image }}" style="margin-top:50px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.3);">
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

						<h4><strong>{{ $article->title }}</strong></h4>
						<br>
						<p style="text-align:justify;padding:10px;color: white;">{{ str_limit($article->content, 600) }}</p>

						</div>
						<p style="text-align: center;">{{ $article->title }}</p>
						<p>{{ $article->created_at }}</p></a>
						<br>
					</div>
					<br><br><br><br><br><br>
	@endforeach

				</div>
			</div>
		</div>
		<br><br>
@else
	<p style="text-align:center;margin-bottom:400px;">You have no posts</p>
@endif
<br>
<br>
<br>
<br>
<br>
<br>

@endsection