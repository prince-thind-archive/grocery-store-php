@extends('layouts.base')

@section('content')

<h2> Welcome to Grocery Store </h2>
<ul>
    <li>The Store Has {{$categoriesCount}} Categories</li>
    <li>The Store contains {{$itemsCount}} items</li>
</ul>


@stop
