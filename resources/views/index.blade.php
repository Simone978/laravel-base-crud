@extends('template/layout')
@section('main')
@foreach ($movies as $movie)
<h3>titolo: {{$movie['title']}}</h3>
<p>attori: {{$movie['actors']}}</p><br>
<p>riassunto: {{$movie['plot']}}</p>
<form action="{{route('movies.destroy', $movie['id'])}}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Cancella</button>
</form>
@endforeach 
@endsection