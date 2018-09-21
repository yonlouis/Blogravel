@extends('layouts.app')

@section('content')
<div class="container">
	<div class="col-md-12">
		<h1>List of posts</h1>

		@foreach($posts as $post)
		<div class="panel panel-default">
			<div class="panel-heading">
				{{ $post->name }}
			</div>
			<div class="panel-body">
				@if($post->file)
				<img src="{{ $post->file }}" class="img-responsive">
				@endif
				{{ $post->excerpt }}
				<a href="{{ route('post', $post->slug) }}" class="pull-right">Read more</a>
			</div>
		</div>
		@endforeach
		<div class="center">
		{{ $posts->render() }}
		</div>
	</div>
</div>
@endsection