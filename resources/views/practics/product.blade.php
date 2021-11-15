@extends('practics.Layouts.master')

@section('title','Product Page')

@section('content')

<h1>Product Page</h1>

<ul>
    @foreach ($productId as $value )
        <li><a href="{{ url ('product/'.$value )}}">Product id {{ $value }}</a></li>
    @endforeach
</ul>

@endsection
