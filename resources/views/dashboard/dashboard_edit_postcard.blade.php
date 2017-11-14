@extends('layouts.main')

@section('content')
<br>
<br>
<h1 style="font-family: 'Lato', sans-serif;color:black;text-align: center;">Edit Postcard Entry</h1>

<form id="form" class="topBefore" method="POST" enctype="multipart/form-data">
	{{ csrf_field() }}
	<input id="name" type="text" name="title" value="{{ $postcard_tbe->title }}">
	<input id="email" type="file" name="image" value="{{ $postcard_tbe->image }}" >
	<textarea id="message" type="text" name="content" style="resize:none;">{{ $postcard_tbe->content }}</textarea>
  <input id="submit" type="submit" value="Submit Edits">
</form>





@endsection