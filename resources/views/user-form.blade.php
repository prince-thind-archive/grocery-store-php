<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
<h1>Registration Page</hi>
<form method="POST">
    @csrf
<input type="text" name="username" placeholder="Username" > <br> <br>
<input type="text" name="password" placeholder="Password" > <br> <br>
<button type="submit">Submit</button>

</br>
<a href="/">home</a>


@isset($error)
    <div style="color:red">
            {{ $error }}
  </div>
@endisset
</form>

</body>
</html>
