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

@extends('layouts.main');

@section('titolo-pagina')
  Home
@endsection

@section('main-content')
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
@endsection