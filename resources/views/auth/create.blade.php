<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="/admincp/store">
        {{ csrf_field() }}
        <span>Tài khoản</span>
        <br/>
        <input type="text" name="name" placeholder="nhập tài khoản">
        <br/>
        <span>Mật khẩu</span>
        <br/>
        <input type="password" name="password" placeholder="nhập mật khẩu">
        <br/>
        <button type="submit" >create</button>
    </form>
</body>
</html>
