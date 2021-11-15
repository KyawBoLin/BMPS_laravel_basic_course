@extends('practics.Layouts.master')

@section('title','About Page')
@section('css')
    <link rel="stylesheet" href="{{ url('css/style.css')}}">
@endsection

@section('content')

<h1 class="font">This is About Page</h1>

<img src="{{ url('images/programmer2.jpg')}}" class="imageSize">
{{-- <h5>Name is {{$name}}</h5>
<h5>Age is {{$age}}</h5> --}}

@endsection

@section('script')
    <script src="{{ url('js/script.js')}}"></script>
@endsection
