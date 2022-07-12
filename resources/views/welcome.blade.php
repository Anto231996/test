<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">    

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Styles -->
        <style>

        </style>
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-between py-5 gap-3">
                @foreach ($flights as $flight)
                    <div class="card col-3">
                        <div class="card-body">
                            <p class="card-title">Code departure: <small class="text-muted">{{ $flight->code_departure }}</small></p>
                            <p class="card-title">Code arrival: <small class="text-muted">{{ $flight->code_arrival }}</small></p>
                            <p class="card-title">Price: <small class="text-muted">{{ $flight->price }}</small></p>
                            <p class="card-title">Airport id: <small class="text-muted">{{ $flight->airport_id }}</small></p>    
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        @foreach ($airports as $airport)
            <p class="card-text">Codice partenza: <small class="text-muted">{{ $airport->name}}</small></p>
        @endforeach

        {{-- @dd($flights); --}}
        {{-- @dd($airports); --}}

        {{-- @dd($flights->airport_id); --}}

    </body>
</html>
