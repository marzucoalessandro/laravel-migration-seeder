<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset ('css/app.css')}}">
        <title>Laravel-migration-seeder</title>


        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


    </head>
    <body>

        <nav>
          <a href="{{ route('home')}}">Home</a>
          <a href="{{ route('students')}}">Students</a>
          <a href="{{ route ('class')}}">Class</a>
        </nav>

        @yield('content')
    </body>
</html>
