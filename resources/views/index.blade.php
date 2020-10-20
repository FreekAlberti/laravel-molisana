@php
  $data = config("pasta");

  $lunga = [];
  $corta = [];
  $cortissima = [];

  foreach ($data as $item) {
    if ($item["tipo"] == "lunga") {
      $lunga[] = $item;
    } elseif ($item["tipo"] == "corta") {
      $corta[] = $item;
    } elseif ($item["tipo"] == "cortissima") {
      $cortissima[] = $item;
    }
  }
@endphp


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset("css/app.css")}}">
  <title>Document</title>
</head>
<body>
  <section>
    @if (count($lunga) > 0)    
      <h2>Lunga</h2>
      @foreach ($lunga as $item)
      <div class="box-pasta">
        <img src="{{$item["src"]}}" alt="">
        <h4>{{$item["titolo"]}}</h4>    
      </div>
      @endforeach
    @endif

    @if (count($corta) > 0)        
      <h2>Corta</h2>
      @foreach ($corta as $item)
      <div class="box-pasta">
        <img src="{{$item["src"]}}" alt="">
        <h4>{{$item["titolo"]}}</h4>    
      </div>
      @endforeach
    @endif

    @if (count($cortissima) > 0)    
      <h2>Cortissima</h2>
      @foreach ($cortissima as $item)
      <div class="box-pasta">
        <img src="{{$item["src"]}}" alt="">
        <h4>{{$item["titolo"]}}</h4>    
      </div>
      @endforeach
    @endif
  </section>
</body>
</html>