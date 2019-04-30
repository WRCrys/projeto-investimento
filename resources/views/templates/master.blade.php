<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Investindo</title>
    @yield('css-view')
    <link rel="stylesheet" href="{{asset('css/stylesheet.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>

    @include('templates.menu-lateral')

    <section id="view-conteudo">
        @yield('conteudo-view')
    </section>

    @yield('js-view')

</body>
</html>
