<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Homepage</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
        <!-- Styles -->
    
    </head>
    <body>
        <nav>
            <ul>
                @foreach ($navData as $data)
                <li>
                    <a href="{{ route($data['pgName']) }}">{{ $data['linkName'] }}</a>
                </li>
                @endforeach

            </ul>
        </nav>
    </body>
</html>
