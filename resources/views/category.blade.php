@extends('layouts.base')

@section('content')

<h3>
    {{$category->name}}
</h3>
<p>
{{$category->description}}

</p>
<form action="/category/delete" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$category->id}}">
    <input type="submit" value="Delete">
</form>

<a href="/category/update?id={{$category->id}}">Update</a>

@stop
