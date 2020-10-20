<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset("css/app.css")}}">
  <title>@yield('titolo-pagina')</title>
</head>
<body>
    <header>
        <div class="box-flex-header">
            <img class="logo" src="{{asset("img/marchio-sito-test.png")}}" alt="logo">
            <ul class="nav-header">
                <li><a href="#">Home</a></li>
                <li><a href="#">Prodotti</a></li>
                <li><a href="#">News</a></li>
            </ul>
        <div/>
    </header>
    @yield('main-content')
</body>
</html>