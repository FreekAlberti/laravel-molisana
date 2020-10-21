@extends('layouts.main')

@section('titolo-pagina')
  Home
@endsection

@section('main-content')
<section>
  <div class="container">
    @if (count($paste["lunga"]) > 0)    
      <h2>Le lunghe</h2>
      <div class="prova-flex">
        @foreach ($paste["lunga"] as $item)
        <div class="box-pasta">
          <img src="{{$item["src"]}}" alt="">
          <h4>{{$item["titolo"]}}</h4>    
        </div>
        @endforeach
      </div>
    @endif

    @if (count($paste["corta"]) > 0)        
      <h2>Le corte</h2>
      <div class="prova-flex">
        @foreach ($paste["corta"] as $item)
        <div class="box-pasta">
          <img src="{{$item["src"]}}" alt="">
          <h4>{{$item["titolo"]}}</h4>    
        </div>
        @endforeach
      </div>
    @endif

    @if (count($paste["cortissima"]) > 0)    
      <h2>Le cortissime</h2>
      <div class="prova-flex">
        @foreach ($paste["cortissima"] as $item)
        <div class="box-pasta">
          <img src="{{$item["src"]}}" alt="">
          <h4>{{$item["titolo"]}}</h4>    
        </div>
        @endforeach
      </div>
    @endif
  </div>
</section>
@endsection