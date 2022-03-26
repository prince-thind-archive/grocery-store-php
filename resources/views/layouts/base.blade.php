<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>Grocery Store</title>
</head>

<body>
    <header>
        <h1> Welcome {{session('user')}}!</h1>
        <nav>
            <a href="/">Home</a><a href="/logout">Logout</a>
        </nav>
    </header>
    <main>
        <ul class="side-bar">
                  <li> <a href="/categories">All Categories</a> </li>
                  <li> <a href="/items">All Items</a> </li>
                  <li> <a href="/about">About</a> </li>
                  <li> <a href="/category/create">Create new Category</a> </li>
                  <li> <a href="/item/create">Create new Item</a> </li>
        </ul>
        <div class="app">
        @yield('content')
        </div>
    </main>
</body>

</html>
