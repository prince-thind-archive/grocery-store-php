@extends('layouts.base')

@section('content')



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


@stop
