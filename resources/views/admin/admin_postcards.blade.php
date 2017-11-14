@extends('layouts.admin')

@section('content')

		<h3 style="font-family: 'Lato', sans-serif;text-align: center;">All Postcards List</h3>
		<br>
		<table class="table table-inverse table-bordered table-striped " style="text-align: center;background-color: #333;">
		  <thead>
		    <tr style="color:white;">
<!-- 		      <th>#</th> -->
		      <th>ID</th>
		      <th>Image</th>
		      <th>Title</th>
		      <th>Content</th>
		      <th>Created At</th>
		      <th>Updated At</th>
		      <th>Author By</th>
		 <!--      <th>Action</th> -->
		    </tr>
		  </thead>
			@foreach($dashboardshow as $dashboardX)
			<tbody style="background-color: #333;">
			  <tr>
			  	
			    <td>{{ $dashboardX->id  }}</td>
			    <td><img class='img-responsive' src="/img/{{ $dashboardX->image }}" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);width: 50px;"></td>
			    <td>{{ $dashboardX->title  }}</td>
			    <td>{{ str_limit($dashboardX->content,40)  }}</td>
			    <td>{{ $dashboardX->created_at  }}</td>
			    <td>{{ $dashboardX->updated_at  }}</td>
			    <td>{{ $dashboardX->user->name }}</td>
			    <!-- <td><a href="/admin/single_postcard">Edit/Delete</a></td> -->
			  </tr>
			
			@endforeach
		  </tbody>
</table>
<div style="text-align: center;">
{!! $dashboardshow->links(); !!}
</div>
<br><br><br>

@endsection