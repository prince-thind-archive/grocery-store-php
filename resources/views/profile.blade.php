@extends('layouts.base')

@section('content')


<p> Welcome to Grocery Store </p>
<ul>
    <li>The Store Has {{$categoriesCount}} Categories</li>
    <li>The Store contains {{$itemsCount}} items</li>
</ul>

@stop
