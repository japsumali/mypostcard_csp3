@extends('layouts.admin')

@section('content')
		@foreach($articles as $user)
		@endforeach
		<h3 style="font-family: 'Lato', sans-serif;text-align: center;">Articles by user {{ $user->user->name }}</h3>
		
		<table class="table table-bordered table-striped table-inverse" style="text-align: center;">
		  <thead >
		    <tr >
<!-- 		      <th>#</th> -->
		      <th>ID</th>
		      <th>Image</th>
		      <th>Title</th>
		      <th>Content</th>
		      <th>Created At</th>
		      <th>Updated At</th>
		      <th>Author</th>
		    </tr>
		  </thead>
		
			@foreach($articles as $user)
			<tbody>
			  <tr>
<!-- 			    <th scope="row">1</th> -->
			    <td>{{ $user->id  }}</td>
			    <td><img class='img-responsive' src="/img/{{ $user->image }}" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);width: 30px;"></td>
			    <td>{{ $user->title }}</td>
			    <td>{{ str_limit($user->content, 40) }}</td>
			    <td>{{ $user->created_at }}</td>
			    <td>{{ $user->updated_at }}</td>
			    <td>{{ $user->user->name }}</td>
			  </tr>
				
			@endforeach
		  </tbody>
</table>
<div style="text-align: center;">
</div>
<br><br><br><br><br><br><br>

@endsection