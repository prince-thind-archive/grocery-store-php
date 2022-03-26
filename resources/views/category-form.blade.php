@extends('layouts.base')

@section('content')

@if(!isset($category))
<form method="POST">
    @csrf
<input type="text" name="name" placeholder="Name" > <br> <br>
<input type="text" name="description" placeholder="Description" > <br> <br>
<input type="submit" value="Submit" >
</form>
@else
<form method="POST">
    @csrf
<input type="text" name="name" placeholder="Name" value="{{$category->name}}"> <br> <br>
<input type="text" name="description" placeholder="Description" value="{{$category->description}}" > <br> <br>
<input type="hidden" value="{{$category->id}}" name="id">
<input type="submit" value="Submit" >
</form>

@endif

@stop
