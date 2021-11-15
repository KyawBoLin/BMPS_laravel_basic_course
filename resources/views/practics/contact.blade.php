@extends('practics.Layouts.master')

@section('title','Contact Page')

@section('css')
<style>

</style>
@endsection

@section('content')
<h1>This is Contact Page</h1>

<ul>
    @foreach ($current as $value )
        <li>{{$value}}</li>
    @endforeach
</ul>
@endsection

@section('script')

@endsection
