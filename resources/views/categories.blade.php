<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@if (count($categories)>0)
    <div style="color:green">
    Categories:
        <ul>
        @foreach ($categories as $category)
            <li>
                <div>{{ $category["name"] }}</div>
                <p>
                {{ $category["description"] }}
                </p>
            </li>
        @endforeach
        </ul>
    </div>
@endif
</body>
</html>
