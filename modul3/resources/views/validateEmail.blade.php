<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kiểm tra email</title>
</head>
<body>
    <form action="/check_email" method="post">
        @csrf
        <label for="email">Nhập email : </label>
        <input type="email" name="email">
        <input type="submit">
    </form>
    <h4> {{ $result ?? "" }} </h4>
</body>
</html>