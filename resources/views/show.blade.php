@extends('template/layout')

@section('main')
<h3>titolo: {{$movie['title']}}</h3>
<p>attori: {{$movie['actors']}}</p><br>
<p>riassunto: {{$movie['plot']}}</p>
@endsection