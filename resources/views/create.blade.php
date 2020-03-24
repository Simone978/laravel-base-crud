@extends('template.layout')
@section('main')
<form action="{{route('movies.store')}}" method="post">
    @csrf
    @method('POST')
    <input type="text" name="title" placeholder="title">  
    <input type="text" name="actors" placeholder="Actors">
    <input type="text" name="plot" placeholder="riassunto">
    <input type="submit" value="Invia">
</form>
    
@endsection