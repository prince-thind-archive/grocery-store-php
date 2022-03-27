@extends('layouts.base')

@section('content')



@if (count($items)>0)
    <div class="main-component">
    Items:
        <ul>
        @foreach ($items as $item)
            <li>
                <a href='/item?id={{$item["id"]}}'>{{$item["name"]}}</a>
                <div>
                {{ $item["description"] }}
                </div>
                <div>
                    category:
                {{ $item["category"] }}
                </div>
                <div>
                    Price:
                {{ $item["price"] }}
                </div>
            </li>
        @endforeach
        </ul>
    </div>
@else
<div class="error">No Items Found</div>
@endif


@stop
