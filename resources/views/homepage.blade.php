<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Trains List</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main>
        <h1>Train List</h1>
        <ul>
            @foreach ($trains as $train)
                <li>
                    <strong>{{$train->departure_station}} - {{$train->arrival_staion}}</strong>
                    <div>
                        <span><strong>Orario partenza:</strong> {{$train->departure_time}}</span>
                    </div>
                    <div>
                        <span><strong>Orario arrivo:</strong> {{$train->arrival_time}}</span>
                    </div>                    
                    <div>
                    <span><strong>Codice treno:</strong> {{$train->train_code}}</span>
                    </div>
                    <p><strong>Numero vagone:</strong> {{$train->wagons}}</p>
                    <p><strong>Ritardo:</strong> {{$train->is_in_time}}</p>
                    <span><strong>Corsa cancellata:</strong> {{$train->is_cancelled}}</span>
                </li>
            @endforeach
        </ul>
        @dd($trains)
    </main>

</body>

</html>
