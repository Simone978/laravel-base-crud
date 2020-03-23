@extends('template/show')
@section('main')
@foreach ($movies as $movie)
<h3>titolo: {{$movie['title']}}</h3>
<p>attori: {{$movie['actors']}}</p><br>
<p>riassunto: {{$movie['plot']}}</p>
@endforeach 
@endsection