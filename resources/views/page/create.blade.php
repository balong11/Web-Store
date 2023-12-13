<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Create categori</h2>
    <form action="/cate/store" method="get">
        @csrf
        <label for="name">
            name:
            <input type="text" name="name">
        </label><br><br>
        <label for="thu tu">
            thu tu:
            <input type="text" name="slug">
        </label><br><br>
        <button type="submit">Create</button>
    </form>
</body>
</html>
