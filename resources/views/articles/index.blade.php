@extends('layout')

@section('content')

<div id="wrapper">
	<div id="page" class="container">
        @foreach ($article as $article)
		<div id="content">
			<div class="title">
             
                 
            <a href="/articles/{{ $article->id }}">
                <h2>{{ $article->title }}</h2></a>
			<p><img src="/images/banner.jpg" alt="" class="image image-full" /> </p>
            <p>{{ $article->excerpt }} <p>   
           <p> {{ $article->body }}<p>
            @endforeach
        </div>
	</div>
</div>

@endsection