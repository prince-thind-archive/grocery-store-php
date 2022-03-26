@extends('layouts.base')

@section('content')

<h3>
    {{$item->name}}
</h3>
<p>
    description:
{{$item->description}}

</p>
<p>
    price:
{{$item->price}}

</p><p>
    category:
{{$item->category}}

</p>
<form action="/item/delete" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$item->id}}">
    <input type="submit" value="Delete">
</form>

<a href="/item/update?id={{$item->id}}" class="button">Update</a>

@stop
