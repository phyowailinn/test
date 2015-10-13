@extends('app')
@section('content')

{ Form::open(array('url' => 'product/create')) }

{ Form::label('name', 'Product Name') }    
{ Form::close() }
 


@endforeach
@endsection