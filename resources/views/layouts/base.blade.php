<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>
        <h1> Welcome {{session('user')}}</h1>
        <nav>
            <a href="/">Home</a><a href="/logout">logout</a>
        </nav>
    </header>
    <div class="body-container">
        <div class="side-bar">
            <ul>
               <li><a href="/categories">All Categories</a><a href="/items">All Items</a><a href="/about">About</a><a href="/category/create">create new Category</a><a href="/item/create">Create new Item</a></li>
            </ul>
        </div>
        <main class="main">
        @yield('content')

        </main>
</div>
</body>

</html>
