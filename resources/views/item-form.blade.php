@extends('layouts.base')

@section('content')

@if(!isset($item))
<form method="POST">
    @csrf
<input type="text" name="name" placeholder="Name" > <br> <br>
<input type="text" name="description" placeholder="Description" > <br> <br>
<input type="number" name="price" placeholder="Price" > <br> <br>
<select name="category">
@foreach ($categories as $category)
            <option value='{{$category["name"]}}'>
               {{$category["name"]}}

</option>
        @endforeach
</select>
<button type="submit">Submit</button>
</br>
</form>

@else
<form method="POST">
    @csrf
<input type="text" name="name" placeholder="Name" value="{{$item->name}}"> <br> <br>
<input type="text" name="description" placeholder="Description" value="{{$item->description}}" > <br> <br>
<input type="hidden" value="{{$item->id}}" name="id">
<input type="number" name="price" placeholder="Price" value="{{$item->price}}" > <br> <br>
<select name="category" value="{{$item->category}}">
@foreach ($categories as $category)
@if ($category->name==$item->category)
<option value='{{$category["name"]}}' selected='selected'>
               {{$category["name"]}}

</option>
@else
            <option value='{{$category["name"]}}'>
               {{$category["name"]}}

</option>
@endif
        @endforeach
</select>
<button type="submit">Update</button>
</br>
</form>

@endif

@stop
