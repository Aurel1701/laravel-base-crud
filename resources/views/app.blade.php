<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        

       
    </head>
    <body>
    <header>

    </header>

     <main>
     <div class="container d-flex  ">
        <img src="{{$comic->thumb}}" alt="" class="">
        <h1>{{$comic->title}}</h1>
        <h4>Price: {{$comic->price}} €</h4>
        <h5>Sale Date: {{$comic->sale_date}}</h5>
        <h5>Series: {{$comic->series}}</h5>
        <p>Description: {{$comic->description}}</p>
        
    </div>
     @yield('content')
     </main>

    <footer>
  
    </footer>
    </body>
</html>
