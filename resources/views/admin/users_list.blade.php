@extends('layouts.admin')

@section('content')
		
		<h3 style="font-family: 'Lato', sans-serif;text-align: center;">All Users List</h3>
		<br>
		<table class="table table-bordered table-striped table-inverse" style="text-align: center;background-color: #333;">
		  <thead style="color:white;">
		    <tr >
<!-- 		      <th>#</th> -->
		      <th>ID</th>
		      <th>Name</th>
		      <th>Email</th>
		      <th>Password</th>
		      <th>Member Since</th>
		    </tr>
		  </thead>
			@foreach($users as $user)
			<tbody>
			  <tr>
<!-- 			    <th scope="row">1</th> -->
			    <td>{{ $user->id  }}</td>
			    <td><a href='{{ url("admin/$user->id") }}'> {{ $user->name }} </a></td>
			    <td>{{ $user->email }}</td>
			    <th>{{ str_limit($user->password , 10) }}</th>
			    <th>{{ $user->created_at }}</th>
			  </tr>
				
			@endforeach
		  </tbody>
</table>
<div style="text-align: center;">
<br><br><br><br><br><br>
{!! $users->links(); !!}
</div>
<br><br><br><br><br><br><br><br>

@endsection