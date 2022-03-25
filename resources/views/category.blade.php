@extends('layouts.base')

@section('content')

<h3>
    {{$category->name}}
</h3>
<p>
{{$category->description}}

</p>
<form method="POST">

@stop
