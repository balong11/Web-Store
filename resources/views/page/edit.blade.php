<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>edit categori</h2>
    <table  width="100%" style="border-collapse: collapse" border="1";>
        <form method="post" action="/cate/update/{{ $categori->id }}">
            @csrf
            <label for="name">
                name:
                <input type="text" name="name" value="{{ $categori->name }}">
            </label>
            <br><br>
            <label for="thu tu">
                thu tu:
                <input type="text" name="slug" value="{{ $categori->slug }}">
            </label>
            <br><br>
            <button type="submit">edit</button>
    
        </form>
    </table>
</body>
</html>