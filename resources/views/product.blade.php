@extends('layouts.main')

@section('titolo-pagina')
  Prodotti
@endsection

@section('main-content')
    {{-- @dd($product); --}}
    <h1>{{$product["titolo"]}}</h1>
    <img src="{{$product["src-h"]}}" alt="">
    <img src="{{$product["src-p"]}}" alt="">
    <p>
        {!!$product["descrizione"]!!}
    </p>
@endsection