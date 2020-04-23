@extends('layout')
@section('content')
<div id="wrapper">
	<div id="page" class="container">
       <h1>Edit Article</h1>

       <form method="POST" action="/articles/{{ $article->id }}">
        @csrf
        @method('PUT')

        <form>
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control" id="title" value="{{ $article->title }}">
            </div>

            <div class="form-group">
                <label for="excerpt">Excerpt</label>
                <textarea class="form-control" id="excerpt" rows="3">{{ $article->excerpt }}</textarea>
              </div>


            <div class="form-group">
              <label for="body">Body</label>
              <textarea class="form-control" id="body" rows="3">{{ $article->body }}</textarea>
            </div>
    
                <div class="field">
                    <div class="control">
                        <button class="button" type="submit">submit</button>
                    </div>
                </div>
       </form>
    </div>
	</div>
</div>
@endsection