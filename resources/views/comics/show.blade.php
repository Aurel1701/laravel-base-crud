@extends('layouts.app')

@section('content')
<div class="container d-flex flex-column justify-content-center text-center mt-3 ">
        <h1>{{$comic->title}}</h1>
        <h4>Price: {{$comic->price}} €</h4>
        <h5>Sale Date: {{$comic->sale_date}}</h5>
        <h5>Series: {{$comic->series}}</h5>
        <p>Description: {{$comic->description}}</p>
        <img src="{{$comic->thumb}}" alt="" class="img-fluid  rounded">
    </div>
@endsection