@extends('layouts.frontend.main')
@section('title', "|  $post->title")
@section('content')
<div class="row">
	<div class="col-md-8 col-md-offset-2">
	 <h3>{{ $post->title }}</h3>
		<p>{{ $post->body }}</p>

	</div>
</div>
@stop