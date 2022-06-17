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
        <h1 class="text-center">Comics</h1>
     <nav class="nav justify-content-center">
       <a class="nav-link active" href="#">Active link</a>
       <a class="nav-link" href="#">Link</a>
       <a class="nav-link disabled" href="#">Comics</a>
     </nav>
    </header>

     <main>
     @yield('content')
     </main>

    <footer>
  
    </footer>
    </body>
</html>
