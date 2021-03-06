<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Movies</title>
</head>
<body>
    <main>
        <div class="container">

            <h1 class="page-title">Movies</h1>
    
            <ol class="movie-grid">

                {{-- ciclo movies card --}}

                @foreach ($movies as $movie)
                    <li class="movie-card">
                        <div class="card_header">
                            <h4>{{ $movie['title'] }}</h4>
    
                            {{-- controllo titolo uguale originale --}}
    
                            @if ($movie['original_title'] != $movie['title'])
                                <h4>- {{ $movie['original_title'] }} -</h4>
                            @endif
                        </div>

                        <div class="card_body">
                            <p>Nation: {{ $movie['nationality'] }}</p>
                            <p>Date:{{ $movie['date'] }}</p>
                        </div>

                        <div class="card_footer">
                            <p>Vote: {{ $movie['vote'] }}</p>
                        </div>
                    </li>
                @endforeach
                
            </ol>

        </div>
    </main>
</body>
</html>