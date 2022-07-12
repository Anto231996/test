<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>

        </style>
    </head>
    <body>
        @foreach ($flights as $flight)
            <p class="card-text">Codice partenza: <small class="text-muted">{{ $flight->code_departure}}</small></p>
            <p class="card-text">Codice arrivo: <small class="text-muted">{{ $flight->code_arrival}}</small></p>
            <p class="card-text">Prezzo: <small class="text-muted">{{ $flight->price}}</small></p>
        @endforeach

        @foreach ($airports as $airport)
            <p class="card-text">Codice partenza: <small class="text-muted">{{ $airport->name}}</small></p>
        @endforeach

    </body>
</html>
