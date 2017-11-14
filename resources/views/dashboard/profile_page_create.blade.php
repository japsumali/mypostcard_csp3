@extends('layouts.main')

@section('content')
<br>
<br>
<h1 style="font-family: 'Muli', sans-serif;color:black;text-align: center;">Create New Postcard Post</h1>

<form id="form" class="topBefore" method="POST" enctype="multipart/form-data">
	{{ csrf_field() }}
	<input id="name" type="text" name="title" placeholder="TITLE" required>
	<input id="email" type="file" name="image" placeholder="IMAGE">
	<textarea id="message" type="text" name="content" placeholder="CONTENT" style="resize:none;" required></textarea>
  <input id="submit" type="submit" value="Submit new Postcard Post!">
</form>


@endsection