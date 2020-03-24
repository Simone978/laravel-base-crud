@extends('template/layout')
@section('main')
<form action="{{route('movies.update', $movie->id)}}" method="POST">
    @method('PATCH')
    @csrf
    <input type="text" name="title" value="{{$movie->title}}" placeholder="title">  
    <input type="text" name="actors" value="{{$movie->actors}}" placeholder="Actors">
    <input type="text" name="plot" value="{{$movie->plot}}" placeholder="riassunto">
    <input type="hidden" name="id" value="{{$movie->id}}" placeholder="id">
    <input type="submit" value="Invia">
</form>
    
@endsection
