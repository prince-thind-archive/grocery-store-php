@extends('layouts.base')

@section('content')

<form method="POST">
    @csrf
<input type="text" name="name" placeholder="Name" > <br> <br>
<input type="text" name="description" placeholder="Description" > <br> <br>
<button type="submit">Submit</button>

</br>
</form>
@stop
