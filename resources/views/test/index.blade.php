<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>{{ $article->title }}</title>
		<link rel="stylesheet" type="text/css" href="{{ asset('css/general.css') }}">
	</head>
	<body>
		HOLA MUNDO
		<hr>
		<h2>{{ $article->title }}</h2>
		<hr>
		@for($i=0;$i<=5;$i++)
			@if($i%2 == 0)
			{{$i}}
			@endif
		@endfor
		<hr>
		{{$article->user->name.' | '. $article->category->name}}

		@foreach($article->tags as $tag)
			{{ $tag->name }}
		@endforeach
	</body>
</html>
