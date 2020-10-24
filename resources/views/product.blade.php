@extends('layouts.main')

@section('titolo-pagina')
  Prodotti
@endsection

@section('main-content')
<div class="product">
  <div class="container">
    <div class="box-flex">
      <h1>{{$product["titolo"]}}</h1>
    </div>
    <img src="{{$product["src-h"]}}" alt="">
    <img src="{{$product["src-p"]}}" alt="">
    <div class="descrizione-prodotto">{!!$product["descrizione"]!!}</div>
  </div>
</div>
@endsection