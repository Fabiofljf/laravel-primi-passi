<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel - Altrapagina</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .text-center {
                text-align: center;
            }
            #site_header {
                height: 100px;
                background-color: #636b6f;
                color: #fff;
            }
        </style>
    </head>
    <body>

        <header id="site_header">
            
        </header>
        <!-- /#site_header -->

        <main id="site_main">
            <h1 class="text-center">Hello, io sono l'altra pagina!</h1>
            @foreach ($contents as $content)
                <h2>{{$content->text}} {{$content->nome}}</h2>
            @endforeach
        </main>
        <!-- /#site_main -->
    </body>
</html>