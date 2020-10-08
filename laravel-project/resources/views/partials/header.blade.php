<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>La Molisana</title>
</head>
<body>
    <header>
        <div class='logo'>
            <img src='https://www.lamolisana.it/wp-content/uploads/2020/05/marchio-sito-test.png' alt="la molisana">
        </div>
        <nav>
            <div class='container'>
                <ul>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="{{route('prodotti')}}">Prodotti</a></li>
                    <li><a href="{{route('contatti')}}">Contatti</a></li>
                </ul>
            </div>

        </nav>

    </header>