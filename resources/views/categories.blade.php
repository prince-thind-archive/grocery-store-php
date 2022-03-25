@extends('layouts.base')

@section('content')



@if (count($categories)>0)
    <div style="color:green">
    Categories:
        <ul>
        @foreach ($categories as $category)
            <li>
                <a href='/category?id={{$category["id"]}}'>{{ $category["name"] }}</a>
                <p>
                {{ $category["description"] }}
                </p>
            </li>
        @endforeach
        </ul>
    </div>
@endif


@stop
