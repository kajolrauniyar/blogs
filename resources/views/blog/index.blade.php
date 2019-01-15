@extends('layouts.frontend.main')
@section('title','| Blog')
@section('content')
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<h1>blog</h1>
	</div>
</div>
@foreach ($post as $posts)
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<h2>{{ $posts->title}}</h2>
		<h5>Published Date: {{ date('M,j,Y', strtotime($posts->created_at))}}</h5>
		<p>{{ substr($posts->body,0,250) }}{{strlen($posts->body >250 ? '...': "")}}</p>
		<a href="{{ url('blog/'.$posts->slug)}}" class="btn btn-primary">Read More</a>
		<hr>
	</div>
</div>
@endforeach
<div class="row">
	<div class="col-md-12">
		<div class="text-center">
				{!! $post->links(); !!}	
		</div>
	</div>
</div>
@stop
