@extends('layouts.base')

@section('content')

<h2>
    {{$category->name}}
</h2>

<p>
{{$category->description}}
</p>

@isset($error)
<div class="error">
    {{$error}}
</div>
@endisset

@if (count($items)>0)
    <div>
    Items:
        <ul>
        @foreach ($items as $item)
            <li>
                <a href='/item?id={{$item["id"]}}'>{{$item["name"]}}</a>
                <div>
                {{ $item["description"] }}
                </div>
                <div>
                    Price:
                {{ $item["price"] }}
                </div>
            </li>
        @endforeach
        </ul>
    </div>
@endif

<form action="/category/delete" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$category->id}}">
    <input type="submit" value="Delete">
</form>

<a href="/category/update?id={{$category->id}}" class="button">Update</a>

@stop
