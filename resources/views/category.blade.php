@extends('layouts.base')

@section('content')

<h3>
    {{$category->name}}
</h3>
<p>
{{$category->description}}

</p>

@isset($error)
<p>
    {{$error}}
</p>
@endisset

@if (count($items)>0)
    <div style="color:green">
    Items:
        <ul>
        @foreach ($items as $item)
            <li>
                <a href='/item?id={{$item["id"]}}'>{{$item["name"]}}</a>
                <p>
                {{ $item["description"] }}
                </p>
                <p>
                    category:
                {{ $item["category"] }}
                </p>
                <p>
                    Price:
                {{ $item["price"] }}
                </p>
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

<a href="/category/update?id={{$category->id}}">Update</a>

@stop
