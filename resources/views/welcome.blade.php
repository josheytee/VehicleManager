<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: flex-start;
            background-image: url(img/car.jpg);
            min-height: 100%;
            background-size: cover;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .top-left {
            position: absolute;
            left: 20px;
            top: 18px;
            text-decoration: none;
            font-size: 1.5rem;
            color: white;
        }


        .content {
            text-align: left;
        }

        .title {
            font-size: 3rem;
            color: white;
            text-shadow: 1px 1px 1px black;
        }

        .title span {
            color: #2495e5;
            font-size: 5rem;
            text-shadow: 1px 1px 1px white;

        }

        .links>a {
            color: white;
            padding: 0 25px;
            font-size: 18px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
    <div class="flex-center position-ref full-height">
        <div class="top-left links">
        </div>

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
            <a href="{{ url('/about') }}">About</a>
        </div>
        @endif

        <div class="container content">
            <div class="title ml-5">
                Welcome to
                <br>
                <span> Vehicle Manager </span>
            </div>
        </div>
    </div>
    <div class="container ">
        <div class="row">
            <div class="col-md-4">
                <div class="p-4 m-3">
                    <h3>24/7 Working Hours </h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam mollitia cum ipsa sit nisi expedita corrupti cupiditate quod explicabo ex in, optio, facilis inventore dignissimos laudantium eius maxime natus aspernatur?
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 m-3">
                    <h3>Quality Search results</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam mollitia cum ipsa sit nisi expedita corrupti cupiditate quod explicabo ex in, optio, facilis inventore dignissimos laudantium eius maxime natus aspernatur?
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 m-3">
                    <h3>Flexibility</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam mollitia cum ipsa sit nisi expedita corrupti cupiditate quod explicabo ex in, optio, facilis inventore dignissimos laudantium eius maxime natus aspernatur?
                    </p>
                </div>
            </div>

        </div>
    </div>
</body>

</html>