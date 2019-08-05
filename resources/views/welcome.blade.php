<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="container">
                <div class="jumbotron">
                    <h1>Ask a Question</h1>
                    <p>Ask any qeustion you want to know about Laravel and we will get answers for you !!</p>
                    <p>
                        <a href="#" class="btn btn-primary btn-lg" role="button">Ask Now</a>
                    </p>
                    <h2>Recent Questions:</h2>
                </div>
            </div>
        </div>
    </body>
</html>
