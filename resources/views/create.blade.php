@extends('template.show')
@section('main')
<form action="{{route('movies.store')}}" method="post">
    @csrf
    @method('POST')
    <input type="text" name="title" value="title" placeholder="title">  
    <input type="text" name="actors" value="actors" placeholder="Actors">
    <input type="text" name="plot" value="plot" placeholder="riassunto">
    <input type="submit" value="Invia">
</form>
    
@endsection