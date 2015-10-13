@extends('app')
@section('content')


@foreach($products as $product)
<h2>{{ $product->title }}</h2>
<p>{{ $product->details }}</p>
<span>Post Date:: {{ date("F j, Y, g:i a", strtotime($product->created_at)) }}</span>
 


@endforeach
@endsection