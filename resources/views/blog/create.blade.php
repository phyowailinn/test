@extends('app')
@section('content')

@foreach($articles as $article)
<h2>{{ $article->title }}</h2>
<p>{{ $article->body }}</p>
<span>Post Date:: {{ date("F j, Y, g:i a", strtotime($article->created_at)) }}</span>
 


@endforeach
@endsection