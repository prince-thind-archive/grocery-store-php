@extends('layouts.base')

@section('content')

<h2> Welcome to Grocery Store </h2>
<ul>
    <li class="li-item">The Store Has {{$categoriesCount}} Categories</li>
    <li class="li-item">The Store contains {{$itemsCount}} items</li>
</ul>


@stop
