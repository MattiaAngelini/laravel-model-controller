@extends('layouts.app')

@section('content')

@foreach ($movies as $movie)


<div class="card" style="width: 30rem;">
    <div class="card-body">
      <h5 >Titolo: {{$movie -> title}}</h5>
      <h5>Titolo Originale: {{$movie -> original_title}}</h5>
      <h5>Nazionalità: {{$movie -> nationality}}</h5>
      <h5>Data uscita: {{$movie -> date}}</h5>   
      <h5>Voto: {{$movie -> vote}}</h5>
    </div>
</div>


@endforeach

@endsection