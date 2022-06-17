@extends('layouts.app')

@section('content')

<table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Title</th>
                <th scope="col">Thumb</th>
                <th scope="col">Price</th>
                <th scope="col">Series</th>
                <th scope="col">Description</th>
                <th scope="col">Sale Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $comic)
                <tr>
                    <th scope="row">{{$comic->id}}</th>
                    <td>{{$comic->title}}</td>
                    <td>{{$comic->thumb}}</td>
                    <td>{{$comic->price}} €</td>
                    <td>{{$comic->series}}</td>
                    <td>{{$comic->description}}</td>
                    <td>{{$comic->sale_date}}</td>
                </tr>
            @endforeach
        </tbody>
</table>

@endsection
